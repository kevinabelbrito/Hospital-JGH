<?php

class Consultas extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('consultas_model');
		$this->load->model('pacientes_model');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
		$this->very_sesion();
		date_default_timezone_set("America/Caracas");
        setlocale(LC_TIME,"Spanish");
	}
	//LISTAR CONSULTAS
	public function index()
	{
		$filas = $this->consultas_model->num_consultas();
		$per_page = 10;
		$this->paginar_filas($filas, $per_page);
		$data = array(
			'main_content' => 'consultas/consultas_view',
			'titulo' => 'Historial de Consultas',
			'consultas' => $this->consultas_model->leer_consultas($per_page),
			'num_consultas' => $this->consultas_model->num_consultas(),
			'pagination' => $this->pagination->create_links()
			);
		$this->load->view('admin_tpt', $data);
	}
	//BUSQUEDA DE CONSULTAS
	public function buscar()
	{
		if ($this->input->post('busqueda'))
		{
			//Validamos los campos
			//Rules
			$this->form_validation->set_rules('campo', 'Campo de Busqueda', 'required');
			if ($this->input->post('search'))
			{
				$this->form_validation->set_rules('search', 'Busqueda', 'required');
			}
			else
			{
				$this->form_validation->set_rules('cedula', 'Nro. de Cedula', 'required');
			}
			//Mensajes
			$this->form_validation->set_message('required', '<span class="icon-asterisk"></span>Campo obligatorio');
			if ($this->form_validation->run() == FALSE)
			{
				$filas = $this->consultas_model->num_consultas();
				$per_page = 10;
				$this->paginar_filas($filas, $per_page);
				$data = array(
					'main_content' => 'consultas/consultas_view',
					'titulo' => 'Historial de Consultas',
					'consultas' => $this->consultas_model->leer_consultas($per_page),
					'num_consultas' => $this->consultas_model->num_consultas(),
					'pagination' => $this->pagination->create_links()
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				$filas = $this->consultas_model->num_consultas_busqueda();
				$per_page = 10;
				$this->paginar_filas($filas, $per_page);
				$data = array(
					'main_content' => 'consultas/consultas_view',
					'titulo' => 'Historial de Consultas',
					'consultas' => $this->consultas_model->leer_consultas_busqueda($per_page),
					'num_consultas' => $this->consultas_model->num_consultas_busqueda(),
					'pagination' => $this->pagination->create_links()
					);
				$this->load->view('admin_tpt', $data);
			}
		}
		else
		{
			redirect(base_url().'consultas');
		}
	}
	//REGISTRAR NUEVA CONSULTA
	public function nueva()
	{
		$data = array(
			'titulo' => 'Nueva Consulta',
			'main_content' => 'consultas/nueva_consulta_view'
			);
		$this->load->view('admin_tpt', $data);
	}
	public function agregar()
	{
		if ($this->input->post('consulta'))
		{
			$this->validation();
			if ($this->form_validation->run() == FALSE)
			{
				$data = array(
					'titulo' => 'Nueva Consulta',
					'main_content' => 'consultas/nueva_consulta_view',
					'id' => $this->input->post('id'),
					'nombre' => $this->input->post('nombre'),
					'sexo' => $this->input->post('sexo'),
					'indigena' => $this->input->post('indigena'),
					'bien' => true
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				$this->consultas_model->add_consulta();
				redirect(base_url().'consultas');
			}
		}
		else
		{
			redirect(base_url().'consultas/nueva');
		}
	}
	//DETALLES DE LA CONSULTA
	public function detalles($id)
	{
		$consulta = $this->consultas_model->detalles($id);
		if ($consulta == false)
		{
			redirect(base_url().'consultas');
		}
		else
		{
			$pacientes = $this->pacientes_model->detalles($consulta['id_paciente']);
			$data = array(
				'titulo' => 'Detalles de consulta',
				'main_content' => 'consultas/detalles_consulta_view',
				'id' => $consulta['id'],
				'nac' => $pacientes['nac'],
				'cedula' => $pacientes['cedula'],
				'nombre' => $pacientes['nombre'],
				'indigena' => $pacientes['indigena'],
				'sexo' => $pacientes['sexo'],
				'fenac' => $pacientes['fenac'],
				'feing' => $pacientes['feing'],
				'municipio' => $pacientes['municipio'],
				'parroquia' => $pacientes['parroquia'],
				'nombre_usuario' => $consulta['nombre_usuario'],
				'feocu' => $consulta['feocu'],
				'grupo' => $consulta['grupo'],
				'enfermedad' => $consulta['enfermedad'],
				'resultado' => $consulta['resultado']
				);
			$this->load->view('admin_tpt', $data);
		}
	}
	//EDITAR CONSULTAS
	public function editar($id)
	{	
		$consulta = $this->consultas_model->detalles($id);
		if ($consulta == false)
		{
			redirect(base_url().'consultas');
		}
		else
		{
			$pacientes = $this->pacientes_model->detalles($consulta['id_paciente']);
			$data = array(
				'titulo' => 'Editar consulta',
				'main_content' => 'consultas/editar_consulta_view',
				'id' => $consulta['id'],
				'id_paciente' => $consulta['id_paciente'],
				'nombre' => $pacientes['nombre'],
				'indigena' => $pacientes['indigena'],
				'sexo' => $pacientes['sexo'],
				'fenac' => $pacientes['fenac'],
				'feing' => $pacientes['feing'],
				'municipio' => $pacientes['municipio'],
				'parroquia' => $pacientes['parroquia'],
				'feocu' => $consulta['feocu'],
				'grupo' => $consulta['grupo'],
				'enfermedad' => $consulta['enfermedad'],
				'resultado' => $consulta['resultado']
				);
			$this->load->view('admin_tpt', $data);
		}
	}
	public function modificar()
	{
		if ($this->input->post('consulta'))
		{
			$this->validation();
			$pacientes = $this->pacientes_model->detalles($this->input->post('id_paciente'));
			if ($this->form_validation->run() == FALSE)
			{
				$data = array(
					'titulo' => 'Editar consulta',
					'main_content' => 'consultas/editar_consulta_view',
					'id' => $this->input->post('id'),
					'id_paciente' => $this->input->post('id_paciente'),
					'nombre' => $pacientes['nombre'],
					'indigena' => $pacientes['indigena'],
					'sexo' => $pacientes['sexo'],
					'fenac' => $pacientes['fenac'],
					'feing' => $pacientes['feing'],
					'municipio' => $pacientes['municipio'],
					'parroquia' => $pacientes['parroquia'],
					'feocu' => $this->input->post('feocu'),
					'grupo' => $this->input->post('grupo'),
					'enfermedad' => $this->input->post('enfermedad'),
					'resultado' => $this->input->post('resultado')
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				$this->consultas_model->edit_consulta();
				$data = array(
					'titulo' => 'Editar consulta',
					'main_content' => 'consultas/editar_consulta_view',
					'id' => $this->input->post('id'),
					'id_paciente' => $this->input->post('id_paciente'),
					'nombre' => $pacientes['nombre'],
					'indigena' => $pacientes['indigena'],
					'sexo' => $pacientes['sexo'],
					'fenac' => $pacientes['fenac'],
					'feing' => $pacientes['feing'],
					'municipio' => $pacientes['municipio'],
					'parroquia' => $pacientes['parroquia'],
					'feocu' => $this->input->post('feocu'),
					'grupo' => $this->input->post('grupo'),
					'enfermedad' => $this->input->post('enfermedad'),
					'resultado' => $this->input->post('resultado'),
					'success' => '<span class="icon-check-alt"></span>Los datos de la consulta fueron actualizados con éxito'
					);
				$this->load->view('admin_tpt', $data);
			}
		}
		else
		{
			redirect(base_url().'consultas');
		}
	}
	//BORRAR CONSULTAS
	function borrar($id)
	{
		$this->consultas_model->borrar($id);
		redirect(base_url().'consultas');
	}
	//VALIDACION DE FORMULARIO
	function validation()
	{
		//Validamos los campos
		//Rules
		$this->form_validation->set_rules('grupo', 'Grupo de enfermedades', 'required');
		$this->form_validation->set_rules('enfermedad', 'Enfermedad', 'required');
		$this->form_validation->set_rules('resultado', 'Resultado', 'required');
		//Mensajes
		$this->form_validation->set_message('required', '<span class="icon-asterisk"></span>Campo obligatorio');
	}
	//Paginar los resultados
	function paginar_filas($filas, $per_page)
	{
		$config['base_url'] = base_url().'consultas/index';
		$config['total_rows'] = $filas;
		$config['per_page'] = $per_page;
		$config['num_links'] = 3;
		$config['first_link'] = 'Primero';
		$config['last_link'] = 'Ultimo';
		$config['next_link'] = 'Siguiente';
		$config['prev_link'] = 'Anterior';

		$config['cur_tag_open'] = '<b class="active">';
		$config['cur_tag_close'] = '</b>';

		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';

		$this->pagination->initialize($config);
	}
	//VERIFICAR QUE LA SESION ESTE INICIADA
	function very_sesion()
	{
		if (!$this->session->userdata('usuario'))
		{
			redirect(base_url());
		}
	}
}

?>
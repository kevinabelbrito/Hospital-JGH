<?php

class Partos extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('partos_model');
		$this->load->model('pacientes_model');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
		$this->very_sesion();
		date_default_timezone_set("America/Caracas");
        setlocale(LC_TIME,"Spanish");
	}
	//LISTAR PARTOS
	public function index()
	{
		$filas = $this->partos_model->num_partos();
		$per_page = 10;
		$this->paginar_filas($filas, $per_page);
		$data = array(
			'main_content' => 'consultas/partos_view',
			'titulo' => 'Historial de Partos',
			'partos' => $this->partos_model->leer_partos($per_page),
			'num_partos' => $this->partos_model->num_partos(),
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
				$filas = $this->partos_model->num_partos();
				$per_page = 10;
				$this->paginar_filas($filas, $per_page);
				$data = array(
					'main_content' => 'consultas/partos_view',
					'titulo' => 'Historial de Partos',
					'partos' => $this->partos_model->leer_partos($per_page),
					'num_partos' => $this->partos_model->num_partos(),
					'pagination' => $this->pagination->create_links()
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				$filas = $this->partos_model->num_partos_busqueda();
				$per_page = 10;
				$this->paginar_filas($filas, $per_page);
				$data = array(
					'main_content' => 'consultas/partos_view',
					'titulo' => 'Historial de Partos',
					'partos' => $this->partos_model->leer_partos_busqueda($per_page),
					'num_partos' => $this->partos_model->num_partos_busqueda(),
					'pagination' => $this->pagination->create_links()
					);
				$this->load->view('admin_tpt', $data);
			}
		}
		else
		{
			redirect(base_url().'partos');
		}
	}
	//AGREGAR PARTOS
	public function nuevo()
	{
		$data = array(
			'titulo' => 'Nuevo Parto',
			'main_content' => 'consultas/nuevo_parto_view'
			);
		$this->load->view('admin_tpt', $data);
	}

	public function agregar()
	{
		if ($this->input->post('registrar'))
		{
			$this->validation();
			if ($this->form_validation->run() == FALSE)
			{
				$data = array(
					'titulo' => 'Nuevo Parto',
					'main_content' => 'consultas/nuevo_parto_view',
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
				$this->partos_model->add_parto();
				redirect(base_url().'partos');
			}
		}
		else
		{
			redirect(base_url().'partos/nuevo');
		}
	}
	//DETALLES DE LOS PARTOS
	public function detalles($id)
	{
		$consulta = $this->partos_model->detalles($id);
		if ($consulta == false)
		{
			redirect(base_url().'partos');
		}
		else
		{
			$pacientes = $this->pacientes_model->detalles($consulta['id_paciente']);
			$data = array(
				'titulo' => 'Detalles del Parto',
				'main_content' => 'consultas/detalles_parto_view',
				'id' => $consulta['id'],
				'nac' => $pacientes['nac'],
				'cedula' => $pacientes['cedula'],
				'nombre' => $pacientes['nombre'],
				'indigena' => $pacientes['indigena'],
				'fenac' => $pacientes['fenac'],
				'feing' => $pacientes['feing'],
				'municipio' => $pacientes['municipio'],
				'parroquia' => $pacientes['parroquia'],
				'nombre_usuario' => $consulta['nombre_usuario'],
				'feocu' => $consulta['feocu'],
				'sexo_bebe' => $consulta['sexo_bebe'],
				'resultado' => $consulta['resultado']
				);
			$this->load->view('admin_tpt', $data);
		}
	}
	//EDITAR CONSULTAS
	public function editar($id)
	{
		$consulta = $this->partos_model->detalles($id);
		if ($consulta == false)
		{
			redirect(base_url().'partos');
		}
		else
		{
			$pacientes = $this->pacientes_model->detalles($consulta['id_paciente']);
			$data = array(
				'titulo' => 'Editar consulta',
				'main_content' => 'consultas/editar_parto_view',
				'id' => $consulta['id'],
				'id_paciente' => $consulta['id_paciente'],
				'nac' => $pacientes['nac'],
				'cedula' => $pacientes['cedula'],
				'nombre' => $pacientes['nombre'],
				'indigena' => $pacientes['indigena'],
				'fenac' => $pacientes['fenac'],
				'feing' => $pacientes['feing'],
				'municipio' => $pacientes['municipio'],
				'parroquia' => $pacientes['parroquia'],
				'feocu' => $consulta['feocu'],
				'sexo_bebe' => $consulta['sexo_bebe'],
				'resultado' => $consulta['resultado']
				);
			$this->load->view('admin_tpt', $data);
		}
	}
	public function modificar()
	{
		if ($this->input->post('actualizar'))
		{
			$this->validation();
			$pacientes = $this->pacientes_model->detalles($this->input->post('id_paciente'));
			if ($this->form_validation->run() == FALSE)
			{
				$data = array(
					'titulo' => 'Editar parto',
					'main_content' => 'consultas/editar_parto_view',
					'id' => $this->input->post('id'),
					'id_paciente' => $this->input->post('id_paciente'),
					'nac' => $pacientes['nac'],
					'cedula' => $pacientes['cedula'],
					'nombre' => $pacientes['nombre'],
					'indigena' => $pacientes['indigena'],
					'fenac' => $pacientes['fenac'],
					'feing' => $pacientes['feing'],
					'municipio' => $pacientes['municipio'],
					'parroquia' => $pacientes['parroquia'],
					'feocu' => $this->input->post('feocu'),
					'sexo_bebe' => $this->input->post('sexo_bebe'),
					'resultado' => $this->input->post('resultado')
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				$this->partos_model->edit_parto();
				$data = array(
					'titulo' => 'Editar parto',
					'main_content' => 'consultas/editar_parto_view',
					'id' => $this->input->post('id'),
					'id_paciente' => $this->input->post('id_paciente'),
					'nac' => $pacientes['nac'],
					'cedula' => $pacientes['cedula'],
					'nombre' => $pacientes['nombre'],
					'indigena' => $pacientes['indigena'],
					'fenac' => $pacientes['fenac'],
					'feing' => $pacientes['feing'],
					'municipio' => $pacientes['municipio'],
					'parroquia' => $pacientes['parroquia'],
					'feocu' => $this->input->post('feocu'),
					'sexo_bebe' => $this->input->post('sexo_bebe'),
					'resultado' => $this->input->post('resultado'),
					'success' => '<span class="icon-check-alt"></span>Los datos del parto fueron actualizados con éxito'
					);
				$this->load->view('admin_tpt', $data);
			}
		}
		else
		{
			redirect(base_url().'partos');
		}
	}
	//BORRAR PARTOS
	function borrar($id)
	{
		$this->partos_model->borrar($id);
		redirect(base_url().'partos');
	}
	//VALIDACION DE FORMULARIOS
	function validation()
	{
		//Validamos los campos
		//Rules
		$this->form_validation->set_rules('sexo_bebe', 'Sexo del bebe', 'required');
		$this->form_validation->set_rules('resultado', 'Resultado', 'required');
		//Mensajes
		$this->form_validation->set_message('required', '<span class="icon-asterisk"></span>Campo obligatorio');
	}
	//PAGINACION DE RESULTADOS
	function paginar_filas($filas, $per_page)
	{
		$config['base_url'] = base_url().'partos/index';
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
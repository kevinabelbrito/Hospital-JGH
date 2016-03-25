<?php

class Mortalidad extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mortalidad_model');
		$this->load->model('pacientes_model');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
		$this->very_sesion();
		date_default_timezone_set("America/Caracas");
        setlocale(LC_TIME,"Spanish");
	}
	//LISTAR MUERTES
	public function index()
	{
		$filas = $this->mortalidad_model->num_muertos();
		$per_page = 10;
		$this->paginar_filas($filas, $per_page);
		$data = array(
			'main_content' => 'mortalidad/mortalidad_view',
			'titulo' => 'Historial de Mortalidad',
			'muertes' => $this->mortalidad_model->leer_muertes($per_page),
			'num_muertos' => $this->mortalidad_model->num_muertos(),
			'pagination' => $this->pagination->create_links()
			);
		$this->load->view('admin_tpt', $data);
	}
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
				$filas = $this->mortalidad_model->num_muertos();
				$per_page = 10;
				$this->paginar_filas($filas, $per_page);
				$data = array(
					'main_content' => 'mortalidad/mortalidad_view',
					'titulo' => 'Historial de Mortalidad',
					'muertes' => $this->mortalidad_model->leer_muertes($per_page),
					'num_muertos' => $this->mortalidad_model->num_muertos(),
					'pagination' => $this->pagination->create_links()
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				$filas = $this->mortalidad_model->num_muertos_busqueda();
				$per_page = 10;
				$this->paginar_filas($filas, $per_page);
				$data = array(
					'main_content' => 'mortalidad/mortalidad_view',
					'titulo' => 'Historial de Mortalidad',
					'muertes' => $this->mortalidad_model->leer_muertes_busqueda($per_page),
					'num_muertos' => $this->mortalidad_model->num_muertos_busqueda(),
					'pagination' => $this->pagination->create_links()
					);
				$this->load->view('admin_tpt', $data);
			}
		}
		else
		{
			redirect(base_url().'mortalidad');
		}
	}
	//AGREGAR MUERTES
	public function nueva()
	{
		$data = array(
			'titulo' => 'Mortalidad',
			'main_content' => 'mortalidad/registrar_mortalidad_view'
			);
		$this->load->view('admin_tpt', $data);
	}
	public function agregar()
	{
		if ($this->input->post('registrar'))
		{
			$this->validation();
			$pacientes = $this->pacientes_model->detalles($this->input->post('id'));
			if ($this->form_validation->run() == FALSE)
			{
				$data = array(
					'titulo' => 'Mortalidad',
					'main_content' => 'mortalidad/registrar_mortalidad_view',
					'id' => $this->input->post('id'),
					'edad' => $this->input->post('edad'),
					'nac' => $pacientes['nac'],
					'cedula' => $pacientes['cedula'],
					'nombre' => $pacientes['nombre'],
					'sexo' => $pacientes['sexo'],
					'indigena' => $pacientes['indigena'],
					'fenac' => $pacientes['fenac'],
					'feing' => $pacientes['feing'],
					'municipio' => $pacientes['municipio'],
					'parroquia' => $pacientes['parroquia'],
					'bien' => true
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				$this->mortalidad_model->add_muerte();
				redirect(base_url().'mortalidad');
			}
		}
		else
		{
			redirect(base_url().'mortalidad/nueva');
		}
	}
	//DETALLES DE MORTALIDAD
	public function detalles($id)
	{
		$consulta = $this->mortalidad_model->detalles($id);
		if ($consulta == false)
		{
			redirect(base_url().'mortalidad');
		}
		else
		{
			$titulo = 'Detalles del Fallecido';
			$main_content = 'mortalidad/detalles_mortalidad_view';
			$pacientes = $this->pacientes_model->detalles($consulta['id_paciente']);
			$this->cargar_datos($titulo, $main_content, $consulta, $pacientes);
		}
	}
	//EDITAR FALLECIDO
	public function editar($id)
	{	
		$consulta = $this->mortalidad_model->detalles($id);
		if ($consulta == false)
		{
			redirect(base_url().'mortalidad');
		}
		else
		{
			$titulo = 'Editar Fallecido';
			$main_content = 'mortalidad/editar_mortalidad_view';
			$pacientes = $this->pacientes_model->detalles($consulta['id_paciente']);
			$this->cargar_datos($titulo, $main_content, $consulta, $pacientes);
		}
	}
	public function modificar()
	{
		if ($this->input->post('editar'))
		{
			$this->validation();
			$pacientes = $this->pacientes_model->detalles($this->input->post('id_paciente'));
			if ($this->form_validation->run() == FALSE)
			{
				$data = array(
					'titulo' => 'Editar Fallecido',
					'main_content' => 'mortalidad/editar_mortalidad_view',
					'id' => $this->input->post('id'),
					'id_paciente' => $this->input->post('id_paciente'),
					'nac' => $pacientes['nac'],
					'cedula' => $pacientes['cedula'],
					'nombre' => $pacientes['nombre'],
					'sexo' => $pacientes['sexo'],
					'indigena' => $pacientes['indigena'],
					'fenac' => $pacientes['fenac'],
					'feing' => $pacientes['feing'],
					'municipio' => $pacientes['municipio'],
					'parroquia' => $pacientes['parroquia'],
					'tipo' => $this->input->post('tipo'),
					'feocu' => $this->input->post('feocu'),
					'ocurrencia' => $this->input->post('ocurrencia'),
					'sitio' => $this->input->post('sitio'),
					'caudir' => $this->input->post('caudir'),
					'caubas' => $this->input->post('caubas'),
					'periodo' => $this->input->post('periodo'),
					'nutri' => $this->input->post('nutri'),
					'peso' => $this->input->post('peso'),
					'edadgest' => $this->input->post('edadgest'),
					'estancia' => $this->input->post('estancia'),
					'consultas' => $this->input->post('consultas'),
					'ocupacion' => $this->input->post('ocupacion')
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				$this->mortalidad_model->editar();
				$data = array(
				'titulo' => 'Editar Fallecido',
				'main_content' => 'mortalidad/editar_mortalidad_view',
				'id' => $this->input->post('id'),
				'id_paciente' => $this->input->post('id_paciente'),
				'nac' => $pacientes['nac'],
				'cedula' => $pacientes['cedula'],
				'nombre' => $pacientes['nombre'],
				'sexo' => $pacientes['sexo'],
				'indigena' => $pacientes['indigena'],
				'fenac' => $pacientes['fenac'],
				'feing' => $pacientes['feing'],
				'municipio' => $pacientes['municipio'],
				'parroquia' => $pacientes['parroquia'],
				'tipo' => $this->input->post('tipo'),
				'feocu' => $this->input->post('feocu'),
				'ocurrencia' => $this->input->post('ocurrencia'),
				'sitio' => $this->input->post('sitio'),
				'caudir' => $this->input->post('caudir'),
				'caubas' => $this->input->post('caubas'),
				'periodo' => $this->input->post('periodo'),
				'nutri' => $this->input->post('nutri'),
				'peso' => $this->input->post('peso'),
				'edadgest' => $this->input->post('edadgest'),
				'estancia' => $this->input->post('estancia'),
				'consultas' => $this->input->post('consultas'),
				'ocupacion' => $this->input->post('ocupacion'),
				'success' => '<span class="icon-check-alt"></span>Los datos del fallecimiento fueron actualizados con éxito'
				);
			$this->load->view('admin_tpt', $data);
			}
		}
		else
		{
			redirect(base_url().'mortalidad');
		}
	}
	//BORRAR MORTALIDAD
	function borrar($id)
	{
		$this->mortalidad_model->borrar($id);
		redirect(base_url().'mortalidad');
	}
	function validation()
	{
		//Validamos los campos
		//Rules
		$this->form_validation->set_rules('tipo', 'Tipo de Mortalidad', 'required');
		$this->form_validation->set_rules('ocurrencia', 'Municipio de Ocurrencia', 'required');
		$this->form_validation->set_rules('sitio', 'Sitio de Ocurrencia', 'required');
		$this->form_validation->set_rules('caudir', 'Causa directa de muerte', 'required');
		$this->form_validation->set_rules('caubas', 'Causa basica de muerte', 'required');
		if ($this->input->post('tipo') == "Materna")
		{
			$this->form_validation->set_rules('periodo', 'Periodo de Ocurrencia de la muerte', 'required');
			$this->form_validation->set_rules('ocupacion', 'Ocupacion', 'required');
		}
		if ($this->input->post('tipo') == "Neonatal")
		{
			$this->form_validation->set_rules('peso', 'Peso al nacer', 'required');
		}
		if ($this->input->post('tipo') == "Materna" || $this->input->post('tipo') == "Neonatal")
		{
			$this->form_validation->set_rules('edadgest', 'Edad Gestacional', 'required|is_natural');
			$this->form_validation->set_rules('consultas', 'Consultas control parental', 'required|is_natural');
		}
		if ($this->input->post('tipo') == "Postneonatal" || $this->input->post('tipo') == "Infantil")
		{
			$this->form_validation->set_rules('nutri', 'Condicion nutricional', 'required');
			$this->form_validation->set_rules('estancia', 'Estancia hospitalaria', 'required');
		}
		//Mensajes
		$this->form_validation->set_message('required', '<span class="icon-asterisk"></span>Campo obligatorio');
		$this->form_validation->set_message('is_natural', '<span class="icon-exclamation-triangle"></span>Solo numeros naturales');
	}
	function cargar_datos($titulo, $main_content, $consulta, $pacientes)
	{
		$data = array(
			'titulo' => $titulo,
			'main_content' => $main_content,
			'id' => $consulta['id'],
			'id_paciente' => $consulta['id_paciente'],
			'nombre_usuario' => $consulta['nombre_usuario'],
			'nac' => $pacientes['nac'],
			'cedula' => $pacientes['cedula'],
			'nombre' => $pacientes['nombre'],
			'sexo' => $pacientes['sexo'],
			'indigena' => $pacientes['indigena'],
			'fenac' => $pacientes['fenac'],
			'feing' => $pacientes['feing'],
			'municipio' => $pacientes['municipio'],
			'parroquia' => $pacientes['parroquia'],
			'tipo' => $consulta['tipo'],
			'feocu' => $consulta['feocu'],
			'ocurrencia' => $consulta['ocurrencia'],
			'sitio' => $consulta['sitio'],
			'caudir' => $consulta['caudir'],
			'caubas' => $consulta['caubas'],
			'periodo' => $consulta['periodo'],
			'nutri' => $consulta['nutri'],
			'peso' => $consulta['peso'],
			'edadgest' => $consulta['edadgest'],
			'estancia' => $consulta['estancia'],
			'consultas' => $consulta['consultas'],
			'ocupacion' => $consulta['ocupacion']
			);
		$this->load->view('admin_tpt', $data);
	}
	//PAGINACION DE RESULTADOS
	function paginar_filas($filas, $per_page)
	{
		$config['base_url'] = base_url().'mortalidad/index';
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
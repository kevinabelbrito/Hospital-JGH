<?php

class Pacientes extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
		$this->load->model('pacientes_model');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
		$this->very_sesion();
		date_default_timezone_set("America/Caracas");
        setlocale(LC_TIME,"Spanish");
	}
	//LISTA DE PACIENTES
	public function index()
	{
		$filas = $this->pacientes_model->num_pacientes();
		$per_page = 10;
		$this->paginar_filas($filas, $per_page);
		$data = array(
			'titulo' => 'Pacientes',
			'main_content' => 'pacientes/pacientes_view',
			'pacientes' => $this->pacientes_model->leer_pacientes($per_page),
			'num_pacientes' => $this->pacientes_model->num_pacientes(),
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
			$this->form_validation->set_rules('campo', 'Criterio de Busqueda', 'required');
			if ($this->input->post('nac') && $this->input->post('cedula'))
			{
				$this->form_validation->set_rules('cedula', 'Nro. de Cedula', 'required|trim|is_natural');
			}
			else if($this->input->post('search'))
			{
				$this->form_validation->set_rules('search', 'Elemento a buscar', 'required');
			}
			//Mensajes
			$this->form_validation->set_message('required', '<span class="icon-asterisk"></span>Campo obligatorio');
			$this->form_validation->set_message('is_natural', '<span class="icon-exclamation-triangle"></span>Solo números naturales');
			if ($this->form_validation->run() == FALSE)
			{
				$filas = $this->pacientes_model->num_pacientes();
				$per_page = 10;
				$this->paginar_filas($filas, $per_page);
				$data = array(
					'titulo' => 'Pacientes',
					'main_content' => 'pacientes/pacientes_view',
					'pacientes' => $this->pacientes_model->leer_pacientes($per_page),
					'num_pacientes' => $this->pacientes_model->num_pacientes(),
					'pagination' => $this->pagination->create_links()
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				$filas = $this->pacientes_model->num_pacientes_busqueda();
				$per_page = 10;
				$this->paginar_filas($filas, $per_page);
				$data = array(
					'titulo' => 'Pacientes',
					'main_content' => 'pacientes/pacientes_view',
					'pacientes' => $this->pacientes_model->leer_pacientes_busqueda($per_page),
					'num_pacientes' => $this->pacientes_model->num_pacientes_busqueda(),
					'pagination' => $this->pagination->create_links()
					);
				$this->load->view('admin_tpt', $data);
			}
		}
		else
		{
			redirect(base_url().'pacientes');
		}
	}
	//AGREGAR PACIENTES
	public function nuevo()
	{
		$data = array(
			'titulo' => 'Nuevo paciente',
			'main_content' => 'pacientes/nuevo_paciente_view'
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
					'titulo' => 'Nuevo paciente',
					'main_content' => 'pacientes/nuevo_paciente_view'
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				$this->pacientes_model->agregar();
				redirect(base_url().'pacientes');
			}
		}
		else
		{
			redirect(base_url().'pacientes');
		}
	}
	//PERFIL DEL PACIENTE
	public function detalles($id)
	{
		$consulta = $this->pacientes_model->detalles($id);
		if ($consulta == false)
		{
			redirect(base_url().'pacientes');
		}
		else
		{
			$data = array(
				'titulo' => $consulta['nombre'],
				'main_content' => 'pacientes/detalles_pacientes_view',
				'id' => $consulta['id'],
				'nombre_usuario' => $consulta['nombre_usuario'],
				'nombre' => $consulta['nombre'],
				'nac' => $consulta['nac'],
				'cedula' => $consulta['cedula'],
				'sexo' => $consulta['sexo'],
				'fenac' => $consulta['fenac'],
				'indigena' => $consulta['indigena'],
				'municipio' => $consulta['municipio'],
				'parroquia' => $consulta['parroquia'],
				'feing' => $consulta['feing']
				);
			$this->load->view('admin_tpt', $data);
		}
	}
	public function editar($id)
	{
		if ($this->input->post('editar'))
		{
			$this->validation();
			if ($this->form_validation->run() == FALSE)
			{
				$data = array(
					'titulo' => $this->input->post('nombre',TRUE),
					'main_content' => 'pacientes/editar_pacientes_view',
					'id' => $this->input->post('id',TRUE),
					'nombre' => $this->input->post('nombre',TRUE),
					'nac' => $this->input->post('nac',TRUE),
					'cedula' => $this->input->post('cedula',TRUE),
					'sexo' => $this->input->post('sexo',TRUE),
					'fenac' => $this->input->post('fenac',TRUE),
					'indigena' => $this->input->post('indigena',TRUE),
					'municipio' => $this->input->post('municipio',TRUE),
					'parroquia' => $this->input->post('parroquia',TRUE)
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				$this->pacientes_model->editar();
				$data = array(
					'titulo' => $this->input->post('nombre',TRUE),
					'main_content' => 'pacientes/editar_pacientes_view',
					'id' => $this->input->post('id',TRUE),
					'nombre' => $this->input->post('nombre',TRUE),
					'nac' => $this->input->post('nac',TRUE),
					'cedula' => $this->input->post('cedula',TRUE),
					'sexo' => $this->input->post('sexo',TRUE),
					'fenac' => $this->input->post('fenac',TRUE),
					'indigena' => $this->input->post('indigena',TRUE),
					'municipio' => $this->input->post('municipio',TRUE),
					'parroquia' => $this->input->post('parroquia',TRUE),
					'success' => '<span class="icon-check-alt"></span>Los datos fueron actualizados con éxito'
					);
				$this->load->view('admin_tpt', $data);
			}
		}
		else
		{
			$consulta = $this->pacientes_model->detalles($id);
			if ($consulta == false)
			{
				redirect(base_url().'pacientes');
			}
			else
			{
				$data = array(
					'titulo' => $consulta['nombre'],
					'main_content' => 'pacientes/editar_pacientes_view',
					'id' => $consulta['id'],
					'nombre' => $consulta['nombre'],
					'nac' => $consulta['nac'],
					'cedula' => $consulta['cedula'],
					'sexo' => $consulta['sexo'],
					'fenac' => $consulta['fenac'],
					'indigena' => $consulta['indigena'],
					'municipio' => $consulta['municipio'],
					'parroquia' => $consulta['parroquia'],
					'feing' => $consulta['feing']
					);
				$this->load->view('admin_tpt', $data);
			}
		}
		
	}
	//BORRAR PACIENTE
	function borrar($id)
	{
		$this->pacientes_model->borrar($id);
		redirect(base_url().'pacientes');
	}
	//VALIDAR PACIENTES AL AGREGAR Y EDITAR
	function validation()
	{
		//Validamos los campos
		//Rules
		$this->form_validation->set_rules('nombre', 'Nombre Completo', 'required');
		$this->form_validation->set_rules('cedula', 'Cedula de Identidad', 'required|is_natural|callback_very_paciente');
		$this->form_validation->set_rules('sexo', 'Sexo', 'required');
		$this->form_validation->set_rules('fenac', 'Fecha de Nacimiento', 'required|callback_very_fecha');
		$this->form_validation->set_rules('indigena', 'Grupo Indigena', 'required');
		$this->form_validation->set_rules('municipio', 'Municipio', 'required');
		$this->form_validation->set_rules('parroquia', 'Parroquia', 'required');
		//Mensajes
		$this->form_validation->set_message('required', '<span class="icon-asterisk"></span>Campo obligatorio');
		$this->form_validation->set_message('is_natural', '<span class="icon-exclamation-triangle"></span>Solo números naturales');
		$this->form_validation->set_message('very_paciente', '<span class="icon-times-circle"></span>Ya se encuentra registrado');
		$this->form_validation->set_message('very_fecha', '<span class="icon-exclamation-triangle"></span>La fecha es mayor a la actual');
	}
	//VERIFICAR QUE NO SE REPITA LA CEDULA DE LOS PACIENTES
	function very_paciente($cedula)
	{
		$query = $this->pacientes_model->verificar($cedula, 'cedula');
		if ($query == false)
		{
			return true;
		}
		else
		{
			if ($this->input->post('id'))
			{
				if ($query['id'] == $this->input->post('id'))
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
	}
	function very_fecha($fecha)
	{
		if ($fecha > date("Y-m-d"))
		{
			return false;
		}
		else
		{
			return true;
		}
		
	}
	//VERIFICAR EXISTENCIA DEL PACIENTE Y CARGAR SUS DATOS
	function verificar()
	{
		if ($this->input->post('validar'))
		{
			$this->validation_very();
			if ($this->form_validation->run() == FALSE)
			{
				$data = array(
					'titulo' => $this->input->post('titulo'),
					'main_content' => $this->input->post('main_content'),
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				$query = $this->pacientes_model->verificar($this->input->post('cedula'), 'cedula');
				if ($query == false)
				{
					$data = array(
						'titulo' => $this->input->post('titulo'),
						'main_content' => $this->input->post('main_content'),
						'agregar' => true,
						'nac' => $this->input->post('nac'),
						'cedula' => $this->input->post('cedula'),
						'erroneo' => '<span class="icon-times-circle"></span>No existe el paciente'
						);
					$this->load->view('admin_tpt', $data);
				}
				else
				{
					$very = $this->pacientes_model->verificar_vida($query['id']);
					if ($very == true)
					{
						$data = array(
							'titulo' => $this->input->post('titulo'),
							'main_content' => $this->input->post('main_content'),
							'erroneo' => '<span class="icon-times-circle"></span>El paciente ya fallecio'
							);
						$this->load->view('admin_tpt', $data);
					}
					else
					{
						if ($this->input->post('parto'))
						{
							if ($query['sexo'] == "F")
							{
								$data = array(
									'titulo' => $this->input->post('titulo'),
									'main_content' => $this->input->post('main_content'),
									'id' => $query['id'],
									'nombre' => $query['nombre'],
									'sexo' => $query['sexo'],
									'indigena' => $query['indigena'],
									'fenac' => $query['fenac'],
									'edad' => date("Y-m-d h:i:s", strtotime($query['fenac'])),
									'municipio' => $query['municipio'],
									'parroquia' => $query['parroquia'],
									'bien' => true					
									);
								$this->load->view('admin_tpt', $data);
							}
							else
							{
								$data = array(
									'titulo' => $this->input->post('titulo'),
									'main_content' => $this->input->post('main_content'),
									'erroneo' => '<span class="icon-times-circle"></span>Solo se admiten pacientes del sexo femenino'
									);
								$this->load->view('admin_tpt', $data);
							}
						}
						else
						{
							$data = array(
								'titulo' => $this->input->post('titulo'),
								'main_content' => $this->input->post('main_content'),
								'id' => $query['id'],
								'nombre' => $query['nombre'],
								'sexo' => $query['sexo'],
								'indigena' => $query['indigena'],
								'fenac' => $query['fenac'],
								'edad' => date("Y-m-d h:i:s", strtotime($query['fenac'])),
								'municipio' => $query['municipio'],
								'parroquia' => $query['parroquia'],
								'bien' => true					
								);
							$this->load->view('admin_tpt', $data);
						}
					}
				}
			}
		}
		else
		{
			redirect(base_url());
		}
	}
	function validation_very()
	{
		//Reglas
		$this->form_validation->set_rules('cedula', 'Cedula de Identidad', 'required|is_natural');
		//Mensajes
		$this->form_validation->set_message('required', '<span class="icon-asterisk"></span>Campo obligatorio');
		$this->form_validation->set_message('is_natural', '<span class="icon-exclamation-triangle"></span>Solo números naturales');
	}
	//PAGINACION DE RESULTADOS
	function paginar_filas($filas, $per_page)
	{
		$config['base_url'] = base_url().'pacientes/index';
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
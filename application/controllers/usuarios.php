<?php

class Usuarios extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuarios_model');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
		$this->very_sesion();
		date_default_timezone_set("America/Caracas");
        setlocale(LC_TIME,"Spanish");
	}
	//PERFIL DEL USUARIO
	public function index()
	{
		$data = array(
			'titulo' => 'Hospital Jose Gregorio Hernandez',
			'main_content' => 'usuarios/perfil_view'
			);
		$this->load->view('admin_tpt', $data);
	}
	//CAMBIO DE CLAVE
	public function clave()
	{
		$data = array(
			'titulo' => 'Cambio de Clave',
			'main_content' => 'usuarios/clave_view'
			);
		$this->load->view('admin_tpt', $data);
	}
	public function cambio_clave()
	{
		if ($this->input->post('cambiar'))
		{
			//Validamos los campos
			//Reglas
			$this->form_validation->set_rules('clave', 'Clave Actual', 'required|trim');
			$this->form_validation->set_rules('nueva', 'Clave nueva', 'required|trim|min_length[6]|max_length[12]');
			$this->form_validation->set_rules('conf', 'Sexo', 'required|matches[nueva]');
			//Mensajes
			$this->form_validation->set_message('required', '<span class="icon-asterisk"></span>Campo obligatorio');
			$this->form_validation->set_message('min_length', '<span class="icon-exclamation-triangle"></span>Mínimo 6 caracteres');
			$this->form_validation->set_message('max_length', '<span class="icon-exclamation-triangle"></span>Máximo 12 caracteres');
			$this->form_validation->set_message('matches', '<span class="icon-exclamation-triangle"></span>no coinciden las claves');
			if ($this->form_validation->run() == FALSE)
			{
				$data = array(
					'titulo' => 'Cambio de Clave',
					'main_content' => 'usuarios/clave_view'
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				$consulta = $this->usuarios_model->very_clave();
				if ($consulta == false)
				{
					$data = array(
						'titulo' => 'Cambio de Clave',
						'main_content' => 'usuarios/clave_view',
						'erroneo' => '<span class="icon-x-altx-alt"></span>La clave actual ingresada no corresponde al usuario en línea'
						);
					$this->load->view('admin_tpt', $data);
				}
				else
				{
					$this->usuarios_model->cambio_clave();
					$data = array(
						'titulo' => 'Cambio de Clave',
						'main_content' => 'usuarios/clave_view',
						'success' => '<span class="icon-check-alt"></span>La clave ha sido cambiada con éxito'
						);
					$this->load->view('admin_tpt', $data);
				}
			}
		}
		else
		{
			redirect(base_url().'usuarios');
		}
	}
	//AGREGAR USUARIO
	public function agregar()
	{
		$this->very_admin();
		if ($this->input->post('registrar'))
		{
			//Validamos los datos
			//Establecemos las reglas
			$this->form_validation->set_rules('nombre', 'Nombre Completo', 'required');
			$this->form_validation->set_rules('email', 'Correo Electronico', 'required|trim|valid_email|callback_very_email');
			$this->form_validation->set_rules('tipo', 'Tipo de Usuario', 'required');
			$this->form_validation->set_rules('usuario', 'Usuario', 'required|trim|callback_very_user');
			$this->form_validation->set_rules('clave', 'Clave de Acceso', 'required|trim|min_length[6]|max_length[12]');
			$this->form_validation->set_rules('conf', 'Confirmar clave', 'required|matches[clave]');
			$this->form_validation->set_rules('pregunta', 'Pregunta Secreta', 'required');
			$this->form_validation->set_rules('respuesta', 'Respuesta Secreta', 'required');
			//Personalizamos los mensajes
			$this->form_validation->set_message('required', '<span class="icon-asterisk"></span>Campo obligatorio');
			$this->form_validation->set_message('valid_email', '<span class="icon-exclamation-triangle"></span>No es un correo electrónico valido');
			$this->form_validation->set_message('min_length', '<span class="icon-exclamation-triangle"></span>Mínimo 6 caracteres');
			$this->form_validation->set_message('max_length', '<span class="icon-exclamation-triangle"></span>Máximo 12 caracteres');
			$this->form_validation->set_message('matches', '<span class="icon-exclamation-triangle"></span>no coinciden las claves');
			$this->form_validation->set_message('very_email', '<span class="icon-times-circle"></span>Ya se encuentra registrado');
			$this->form_validation->set_message('very_user', '<span class="icon-times-circle"></span>Ya se encuentra registrado');
			if ($this->form_validation->run() == FALSE)
			{
				$data = array(
					'titulo' => 'Registro de Usuario',
					'main_content' => 'usuarios/registro_usuario_view',
					'errors' => validation_errors()
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				$this->usuarios_model->add_user();
				redirect(base_url().'usuarios/usuarios_registrados');
			}
		}
		else
		{
			$data = array(
					'titulo' => 'Registro de Usuario',
					'main_content' => 'usuarios/registro_usuario_view'
					);
			$this->load->view('admin_tpt', $data);
		}
	}
	//LISTA DE USUARIOS
	public function usuarios_registrados()
	{
		$filas = $this->usuarios_model->num_usuarios();
		$per_page = 10;
		$this->paginar_filas($filas, $per_page);
		$data = array(
				'titulo' => 'Usuarios registrados',
				'main_content' => 'usuarios/usuarios_view',
				'usuarios' => $this->usuarios_model->listar($per_page),
				'num_usuarios' => $filas,
				'pagination' => $this->pagination->create_links()
				);
		$this->load->view('admin_tpt', $data);
	}
	//EDITAR DATOS DEL USUARIO EN LINEA
	public function editar($id)
	{
		$consulta = $this->usuarios_model->leer_usuario($id);
		if ($consulta == false)
		{
			redirect(base_url().'usuarios');
		}
		else
		{
			$data = array(
				'titulo' => 'Editar mis datos',
				'main_content' => 'usuarios/editar_usuario_view',
				'id' => $consulta['id'],
				'nombre' => $consulta['nombre'],
				'email' => $consulta['email'],
				'usuario' => $consulta['usuario'],
				'pregunta' => $consulta['pregunta'],
				'respuesta' => $consulta['respuesta']
				);
			$this->load->view('admin_tpt', $data);
		}
	}
	public function modificar()
	{
		if ($this->input->post('actualizar'))
		{
			//Validamos los datos
			//Establecemos las reglas
			$this->form_validation->set_rules('nombre', 'Nombre Completo', 'required');
			$this->form_validation->set_rules('email', 'Correo Electronico', 'required|trim|valid_email|callback_very_email');
			$this->form_validation->set_rules('usuario', 'Usuario', 'required|trim|callback_very_user');
			$this->form_validation->set_rules('pregunta', 'Pregunta Secreta', 'required');
			$this->form_validation->set_rules('respuesta', 'Respuesta Secreta', 'required');
			//Personalizamos los mensajes
			$this->form_validation->set_message('required', '<span class="icon-asterisk"></span>Campo obligatorio');
			$this->form_validation->set_message('valid_email', '<span class="icon-exclamation-triangle"></span>No es un correo electrónico valido');
			$this->form_validation->set_message('very_email', '<span class="icon-times-circle"></span>Ya se encuentra registrado');
			$this->form_validation->set_message('very_user', '<span class="icon-times-circle"></span>Ya se encuentra registrado');
			if ($this->form_validation->run() == FALSE)
			{
				$data = array(
					'titulo' => 'Editar mis datos',
					'main_content' => 'usuarios/editar_usuario_view',
					'id' => $this->input->post('id', TRUE),
					'nombre' => $this->input->post('nombre', TRUE),
					'email' => $this->input->post('email', TRUE),
					'usuario' => $this->input->post('usuario', TRUE),
					'pregunta' => $this->input->post('pregunta', TRUE),
					'respuesta' => $this->input->post('respuesta', TRUE)
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				$this->usuarios_model->actualizar();
				$session = array(
					'nombre' => $this->input->post('nombre', TRUE),
					'email' => $this->input->post('email', TRUE),
					'usuario' => $this->input->post('usuario', TRUE)
					);
				$this->session->set_userdata($session);
				$data = array(
					'titulo' => 'Editar mis datos',
					'main_content' => 'usuarios/editar_usuario_view',
					'id' => $this->input->post('id', TRUE),
					'nombre' => $this->input->post('nombre', TRUE),
					'email' => $this->input->post('email', TRUE),
					'usuario' => $this->input->post('usuario', TRUE),
					'pregunta' => $this->input->post('pregunta', TRUE),
					'respuesta' => $this->input->post('respuesta', TRUE),
					'success' => '<span class="icon-check-alt"></span>Sus datos fueron actualizados con éxito'
					);
				$this->load->view('admin_tpt', $data);
			}
		}
		else
		{
			redirect(base_url().'usuarios');
		}
	}
	function borrar($id)
	{
		$this->usuarios_model->borrar($id);
		redirect(base_url().'usuarios/usuarios_registrados');
	}
	function paginar_filas($filas, $per_page)
	{
		$config['base_url'] = base_url().'usuarios/usuarios_registrados/index';
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
	function very_user($usuario)
	{
		$variable = $this->usuarios_model->verificar($usuario, 'usuario');
		if ($variable == false)
		{
			return true;
		}
		else
		{
			if ($variable['id'] != $this->session->userdata('id'))
			{
				return false;
			}
			else
			{
				return true;
			}
		}
	}
	function very_email($email)
	{
		$variable = $this->usuarios_model->verificar($email, 'email');
		if ($variable == false)
		{
			return true;
		}
		else
		{
			if ($variable['id'] != $this->session->userdata('id'))
			{
				return false;
			}
			else
			{
				return true;
			}
		}
	}
	//CERRAR SESION
	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
	//VERIFICAR QUE LA SESION ESTE INICIADA
	function very_sesion()
	{
		if (!$this->session->userdata('usuario'))
		{
			redirect(base_url());
		}
	}
	function very_admin()
	{
		if ($this->session->userdata('tipo') != "Administrador")
		{
			redirect(base_url().'usuarios');
		}
	}
}

?>
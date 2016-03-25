<?php


class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
		$this->very_sesion();
		date_default_timezone_set("America/Caracas");
        setlocale(LC_TIME,"Spanish");
	}
	//INICIAR SESION
	public function index()
	{
		$data = array(
			'titulo' => "Iniciar Sesión",
			'main_content' => 'login/login_form_view'
			);
		$this->load->view('template', $data);
	}
	public function logear()
	{
		if ($this->input->post('login'))
		{
			//Validamos los datos
			//Establecemos las reglas
			$this->form_validation->set_rules('usuario', 'Nombre de Usuario', 'required|trim');
			$this->form_validation->set_rules('clave', 'Clave de Acceso', 'required|trim');
			//Personalizamos los mensajes
			$this->form_validation->set_message('required', '<span class="icon-asterisk"></span>Campo obligatorio');
			if ($this->form_validation->run() == FALSE)
			{
				$data = array(
					'titulo' => "Iniciar Sesión",
					'main_content' => 'login/login_form_view'
					);
				$this->load->view('template', $data);
			}
			else
			{
				$consulta = $this->login_model->login();
				if ($consulta == false)
				{
					$data = array(
					'titulo' => "Iniciar Sesión",
					'main_content' => 'login/login_form_view',
					'erroneo' => '<span class="icon-x-altx-alt"></span>Error al intentar acceder al sistema, Usuario y/o clave son incorrectos'
					);
				$this->load->view('template', $data);
				}
				else
				{
					$data = array(
						'id' => $consulta['id'],
						'usuario' => $consulta['usuario'],
						'nombre' => $consulta['nombre'],
						'email' => $consulta['email'],
						'tipo' => $consulta['tipo']
						);
					$this->session->set_userdata($data);
					redirect(base_url().'usuarios');
				}
			}
		}
		else
		{
			redirect(base_url());
		}
	}
	//VERIFICAR QUE NO ESTE INICIADA LA SESION
	function very_sesion()
	{
		if ($this->session->userdata('usuario'))
		{
			redirect(base_url().'usuarios');
		}
	}
	//RECUPERAR CLAVE DE ACCESSO
	public function recuperar_clave()
	{
		$data = array(
			'titulo' => 'Recuperar Clave de Acceso',
			'main_content' => 'login/recuperar_view'
			);
		$this->load->view('template', $data);
	}
	public function recuperar()
	{
		if ($this->input->post('recuperar'))
		{
			//Validamos los datos
			//Establecemos las reglas
			$this->form_validation->set_rules('email', 'Correo Electronico', 'required|trim|valid_email');
			$this->form_validation->set_rules('pregunta', 'Pregunta Secreta', 'required');
			$this->form_validation->set_rules('respuesta', 'Respuesta Secreta', 'required');
			//Personalizamos los mensajes
			$this->form_validation->set_message('required', '<span class="icon-asterisk"></span>Campo obligatorio');
			$this->form_validation->set_message('valid_email', '<span class="icon-exclamation-triangle"></span>No es un correo electrónico valido');
			if ($this->form_validation->run() == FALSE)
			{
				$data = array(
					'titulo' => 'Recuperar Clave de Acceso',
					'main_content' => 'login/recuperar_view'
					);
				$this->load->view('template', $data);
			}
			else
			{
				$consulta = $this->login_model->recuperar();
				if ($consulta == false)
				{
					$data = array(
						'titulo' => 'Recuperar Clave de Acceso',
						'main_content' => 'login/recuperar_view',
						'erroneo' => '<span class="icon-x-altx-alt"></span>Error al recuperar la clave, uno o mas datos ingresados son incorrectos'
						);
					$this->load->view('template', $data);
				}
				else
				{
					$data = array(
						'titulo' => 'Recuperar Clave de Acceso',
						'main_content' => 'login/recuperar_view',
						'success' => 'Usuario: '.$consulta['usuario'].' Clave: '.$consulta['clave']
						);
					$this->load->view('template', $data);
				}
			}
		}
		else
		{
			redirect(base_url().'login/recuperar_clave');
		}
	}
}

?>
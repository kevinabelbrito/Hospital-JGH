<?php

class Estadisticas extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('estadisticas_model');
		$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
		$this->very_sesion();
		date_default_timezone_set("America/Caracas");
        setlocale(LC_TIME,"Spanish");
	}
	//FORMULARIO
	public function index()
	{
		$data = array(
			'titulo' => 'Estadisticas de Mortalidad',
			'main_content' => 'estadisticas/form_view'
			);
		$this->load->view('admin_tpt', $data);
	}
	public function generar()
	{
		if ($this->input->post('generar'))
		{
			//Validamos los campos
			//Rules
			$this->form_validation->set_rules('est', 'Estadistica', 'required');
			$this->form_validation->set_rules('year', 'Año', 'required|trim|is_natural|min_length[4]|callback_very_year');
			//Mensajes
			$this->form_validation->set_message('required', '<span class="icon-asterisk"></span>Campo obligatorio');
			$this->form_validation->set_message('is_natural', '<span class="icon-exclamation-triangle"></span>Solo datos numericos');
			$this->form_validation->set_message('min_length', '<span class="icon-exclamation-triangle"></span>Formato del año: 0000 (4 digitos)');
			$this->form_validation->set_message('very_year', '<span class="icon-times-circle"></span>El año no puede ser mayor al actual');
			if ($this->form_validation->run() == FALSE)
			{
				$data = array(
					'titulo' => 'Estadisticas de Mortalidad',
					'main_content' => 'estadisticas/form_view'
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				//MORTALIDAD POR GENERO
				if ($this->input->post('est') == "genero")
				{
					$masculino = $this->estadisticas_model->genero_masculino();
					$femenino = $this->estadisticas_model->genero_femenino();
					$data = array(
						'titulo' => 'Mortalidad por genero',
						'main_content' => 'estadisticas/genero_view',
						'year' => $this->input->post('year'),
						'masculino' => $masculino,
						'femenino' => $femenino
						);
					$this->load->view('estadisticas_tpt', $data);
				}
				//MORTALIDAD POR PROCEDENCIA
				elseif($this->input->post('est') == "procedencia")
				{
					$query = $this->estadisticas_model->procedencia();
					$altorinoco = 0;
					$atabapo = 0;
					$atures = 0;
					$autana = 0;
					$manapiare = 0;
					$maroa = 0;
					$rionegro = 0;
					foreach ($query as $est)
					{
						if($est['municipio'] == "Alto Orinoco")
						{
							$altorinoco = $altorinoco + 1;
						}
						else if($est['municipio'] == "Atabapo")
						{
							$atabapo = $atabapo + 1;
						}
						else if($est['municipio'] == "Atures")
						{
							$atures = $atures + 1;
						}
						else if($est['municipio'] == "Autana")
						{
							$autana = $autana + 1;
						}
						else if($est['municipio'] == "Manapiare")
						{
							$manapiare = $manapiare + 1;
						}
						else if($est['municipio'] == "Maroa")
						{
							$maroa = $maroa + 1;
						}
						else if($est['municipio'] == "Rio Negro")
						{
							$rionegro = $rionegro + 1;
						}
					}
					$data = array(
						'titulo' => 'Mortalidad por procedencia',
						'main_content' => 'estadisticas/procedencia_view',
						'year' => $this->input->post('year'),
						'altorinoco' => $altorinoco,
						'atabapo' => $atabapo,
						'atures' => $atures,
						'autana' => $autana,
						'manapiare' => $manapiare,
						'maroa' => $maroa,
						'rionegro' => $rionegro
						);
					$this->load->view('estadisticas_tpt', $data);
				}
				elseif($this->input->post('est') == "enfermedades")
				{
					$enfermedades = $this->estadisticas_model->enfermedades();
					$data = array(
						'titulo' => 'Enfermedades mas frecuentes',
						'main_content' => 'estadisticas/enfermedades_frecuentes_view',
						'year' => $this->input->post('year'),
						'enfermedades' => $enfermedades
						);
					$this->load->view('estadisticas_tpt', $data);
				}
			}
		}
		else
		{
			redirect(base_url().'estadisticas');
		}
	}
	function very_year($year)
	{
		if ($year > date("Y"))
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	//VERIFICAMOS QUE LA SESION ESTE INICIADA
	function very_sesion()
	{
		if (!$this->session->userdata('usuario'))
		{
			redirect(base_url());
		}
	}
}

?>
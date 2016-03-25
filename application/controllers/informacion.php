<?php

class Informacion extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->very_sesion();
		date_default_timezone_set("America/Caracas");
        setlocale(LC_TIME,"Spanish");
	}
	public function index()
	{
		# code...
	}
	public function antecedentes()
	{
		$data = array(
			'titulo' => 'Antecedentes',
			'main_content' => 'informacion/antecedentes_view'
			);
		$this->load->view('admin_tpt', $data);
	}
	public function ubicacion()
	{
		$data = array(
			'titulo' => 'Ubicación',
			'main_content' => 'informacion/ubicacion_view'
			);
		$this->load->view('admin_tpt', $data);
	}
	public function mision_vision()
	{
		$data = array(
			'titulo' => 'Misión y Visión',
			'main_content' => 'informacion/mision_vision_view'
			);
		$this->load->view('admin_tpt', $data);
	}
	public function clasificacion()
	{
		$data = array(
			'titulo' => 'Clasificación',
			'main_content' => 'informacion/clasificacion_view'
			);
		$this->load->view('admin_tpt', $data);
	}
	public function departamentos()
	{
		$data = array(
			'titulo' => 'Departamentos y Servicios',
			'main_content' => 'informacion/departamentos_view'
			);
		$this->load->view('admin_tpt', $data);
	}
	public function organigrama()
	{
		$data = array(
			'titulo' => 'Organigrama estructural',
			'main_content' => 'informacion/organigrama_view'
			);
		$this->load->view('admin_tpt', $data);
	}
	public function epidemiologia()
	{
		$data = array(
			'titulo' => 'Epidemiología Hospitalaria',
			'main_content' => 'informacion/epidemiologia_view'
			);
		$this->load->view('admin_tpt', $data);
	}
	public function rrhh()
	{
		$data = array(
			'titulo' => 'Recursos Humanos',
			'main_content' => 'informacion/rrhh_view'
			);
		$this->load->view('admin_tpt', $data);
	}
	public function enfermeria()
	{
		$data = array(
			'titulo' => 'Departamento de Enfermería',
			'main_content' => 'informacion/enfermeria_view'
			);
		$this->load->view('admin_tpt', $data);
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
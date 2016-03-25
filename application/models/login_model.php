<?php

class Login_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	//INICIAR SESION
	public function login()
	{
		$conditions = array(
			'usuario' => $this->input->post('usuario', TRUE),
			'clave' => $this->input->post('clave', TRUE)
			);
		$query = $this->db->get_where('usuarios', $conditions);
		if ($query->num_rows() == 1)
		{
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}
	//RECUPERACION DE CLAVE
	public function recuperar()
	{
		$data = array(
			'email' => $this->input->post('email',TRUE),
			'pregunta' => $this->input->post('pregunta',TRUE),
			'respuesta' => $this->input->post('respuesta',TRUE)
			);
		$consulta = $this->db->get_where('usuarios', $data);
		if ($consulta->num_rows() == 1)
		{
			return $consulta->row_array();
		}
		else
		{
			return false;
		}
		
	}
}

?>
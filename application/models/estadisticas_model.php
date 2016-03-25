<?php

class Estadisticas_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	public function genero_masculino()
	{
		$this->db->select('*');
		$this->db->from('mortalidad');
		$this->db->where('year', $this->input->post('year'));
		$this->db->join('pacientes', 'pacientes.id = mortalidad.id_paciente AND pacientes.sexo = "M"');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function genero_femenino()
	{
		$this->db->select('*');
		$this->db->from('mortalidad');
		$this->db->where('year', $this->input->post('year'));
		$this->db->join('pacientes', 'pacientes.id = mortalidad.id_paciente AND pacientes.sexo = "F"');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function procedencia()
	{
		$this->db->select('p.municipio, m.year');
		$this->db->from('mortalidad m');
		$this->db->join('pacientes p', 'm.id_paciente = p.id');
		$this->db->where('m.year', $this->input->post('year'));
		$query = $this->db->get();
		return $query->result_array();
	}
	public function enfermedades()
	{
		$this->db->select('enfermedad, count(enfermedad) as cantidad');
		$this->db->from('consultas');
		$this->db->where('year', $this->input->post('year'));
		$this->db->group_by('enfermedad');
		//$this->db->having('cantidad');
		$this->db->order_by('cantidad', 'desc');
		$this->db->order_by('feocu', 'asc');
		$this->db->limit('5');
		$query = $this->db->get();
		return $query->result_array();
	}
}

?>
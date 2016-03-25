<?php

class Consultas_model extends CI_model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	//AGREGAR CONSULTAS
	public function add_consulta()
	{
		//guardamos los datos a insertar en un arreglo
		$data = array(
			'id_paciente' => $this->input->post('id',TRUE),
			'nombre_usuario' => $this->session->userdata('nombre'),
			'feocu' => date("Y-m-d H:i:s"),
			'semana' => date("W"),
			'mes' => date("m"),
			'year' => date("Y"),
			'grupo' => $this->input->post('grupo',TRUE),
			'enfermedad' => $this->input->post('enfermedad',TRUE),
			'resultado' => $this->input->post('resultado',TRUE)
			);
		//Insertamos los datos en la tabla pacientes
		$this->db->insert('consultas',$data);
	}
	//LEER CONSULTAS
	public function num_consultas()
	{
		$this->db->select('c.id, c.id_paciente, c.feocu, c.enfermedad, p.nombre, p.indigena');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function leer_consultas($per_page)
	{
		$this->db->select('c.id, c.id_paciente, c.feocu, c.enfermedad, p.nombre, p.indigena');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		$this->db->order_by('feocu', 'desc');
		$this->db->limit($per_page, $this->uri->segment(3));
		$query = $this->db->get();
		return $query->result_array();
	}
	//BUSQUEDA DE CONSULTAS
	public function num_consultas_busqueda()
	{
		if ($this->input->post('campo') && $this->input->post('search'))
		{
			$campo = $this->input->post('campo');
			$search = $this->input->post('search');
		}
		$this->db->select('c.id, c.id_paciente, c.feocu, c.enfermedad, p.nombre, p.indigena');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		if($this->input->post('nac') && $this->input->post('cedula'))
		{
			$nac = $this->input->post('nac');
			$cedula = $this->input->post('cedula');
			$this->db->where(array('nac' => $nac, 'cedula' => $cedula));
		}
		else
		{
			$this->db->like("p.$campo", $search);
		}
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function leer_consultas_busqueda($per_page)
	{
		if ($this->input->post('campo') && $this->input->post('search'))
		{
			$campo = $this->input->post('campo');
			$search = $this->input->post('search');
		}
		$this->db->select('c.id, c.id_paciente, c.feocu, c.enfermedad, p.nombre, p.indigena');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		if($this->input->post('nac') && $this->input->post('cedula'))
		{
			$nac = $this->input->post('nac');
			$cedula = $this->input->post('cedula');
			$this->db->where(array('nac' => $nac, 'cedula' => $cedula));
		}
		else
		{
			$this->db->like("p.$campo", $search);
		}
		$this->db->order_by('feocu', 'desc');
		$this->db->limit($per_page, $this->uri->segment(3));
		$query = $this->db->get();
		return $query->result_array();
	}
	//DETALLES DE LAS CONSULTAS
	public function detalles($id)
	{
		$consulta = $this->db->get_where('consultas', array('id' => $id));
		if ($consulta->num_rows() == 1)
		{
			return $consulta->row_array();
		}
		else
		{
			return false;
		}
	}
	//EDITAR CONSULTAS
	public function edit_consulta()
	{
		//guardamos los datos a insertar en un arreglo
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$data = array(
			'grupo' => $this->input->post('grupo',TRUE),
			'enfermedad' => $this->input->post('enfermedad',TRUE),
			'resultado' => $this->input->post('resultado',TRUE)
			);
		//Insertamos los datos en la tabla pacientes
		$this->db->update('consultas',$data);
	}
	//BORRAR CONSULTAS
	public function borrar($id)
	{
		$this->db->delete('consultas', array('id' => $id));
	}
}

?>
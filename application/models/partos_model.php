<?php

class Partos_model extends CI_model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	//AGREGAR PARTOS
	public function add_parto()
	{
		//guardamos los datos a insertar en un arreglo
		$data = array(
			'id_paciente' => $this->input->post('id',TRUE),
			'nombre_usuario' => $this->session->userdata('nombre'),
			'sexo_bebe' => $this->input->post('sexo_bebe',TRUE),
			'resultado' => $this->input->post('resultado',TRUE),
			'feocu' => date("Y-m-d H:i:s"),
			'semana' => date("W"),
			'mes' => date("m"),
			'year' => date("Y")
			);
		//Insertamos los datos en la tabla partos
		$this->db->insert('partos',$data);
	}
	//LEER PARTOS
	public function num_partos()
	{
		$this->db->select('t.id, t.id_paciente, t.feocu, t.sexo_bebe, t.resultado, p.nombre, p.indigena');
		$this->db->from('partos t');
		$this->db->join('pacientes p', 't.id_paciente = p.id');
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function leer_partos($per_page)
	{
		$this->db->select('t.id, t.id_paciente, t.feocu, t.sexo_bebe, t.resultado, p.nombre, p.indigena');
		$this->db->from('partos t');
		$this->db->join('pacientes p', 't.id_paciente = p.id');
		$this->db->order_by('feocu', 'desc');
		$this->db->limit($per_page, $this->uri->segment(3));
		$query = $this->db->get();
		return $query->result_array();
	}
	//BUSQUEDA DE PARTOS
	public function num_partos_busqueda()
	{
		if ($this->input->post('campo') && $this->input->post('search'))
		{
			$campo = $this->input->post('campo');
			$search = $this->input->post('search');
		}
		$this->db->select('t.id, t.id_paciente, t.feocu, t.sexo_bebe, t.resultado, p.nombre, p.indigena');
		$this->db->from('partos t');
		$this->db->join('pacientes p', 't.id_paciente = p.id');
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
	public function leer_partos_busqueda($per_page)
	{
		if ($this->input->post('campo') && $this->input->post('search'))
		{
			$campo = $this->input->post('campo');
			$search = $this->input->post('search');
		}
		$this->db->select('t.id, t.id_paciente, t.feocu, t.sexo_bebe, t.resultado, p.nombre, p.indigena');
		$this->db->from('partos t');
		$this->db->join('pacientes p', 't.id_paciente = p.id');
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
	//DETALLES DE LOS PARTOS
	public function detalles($id)
	{
		$consulta = $this->db->get_where('partos', array('id' => $id));
		if ($consulta->num_rows() == 1)
		{
			return $consulta->row_array();
		}
		else
		{
			return false;
		}
	}
	//EDITAR PARTOS
	public function edit_parto()
	{
		//guardamos los datos a insertar en un arreglo
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$data = array(
			'sexo_bebe' => $this->input->post('sexo_bebe',TRUE),
			'resultado' => $this->input->post('resultado',TRUE),
			);
		//actualizamos los datos en la tabla partos
		$this->db->update('partos',$data);
	}
	//BORRAR PARTOS
	public function borrar($id)
	{
		$this->db->delete('partos', array('id' => $id));
	}
}

?>
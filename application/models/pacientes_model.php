<?php

class Pacientes_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	//AGREGAR PACIENTES
	public function agregar()
	{
		//guardamos los datos a insertar en un arreglo
		$data = array(
			'nombre_usuario' => $this->session->userdata('nombre'),
			'nombre' => $this->input->post('nombre',TRUE),
			'nac' => $this->input->post('nac',TRUE),
			'cedula' => $this->input->post('cedula',TRUE),
			'sexo' => $this->input->post('sexo',TRUE),
			'fenac' => $this->input->post('fenac',TRUE),
			'indigena' => $this->input->post('indigena',TRUE),
			'municipio' => $this->input->post('municipio',TRUE),
			'parroquia' => $this->input->post('parroquia',TRUE),
			'feing' => date("Y-m-d H:i:s")
			);
		//Insertamos los datos en la tabla pacientes
		$this->db->insert('pacientes',$data);
	}
	//VERIFICAR QUE NO SE REPITAN
	public function verificar($valor, $campo)
	{
		$query = $this->db->get_where('pacientes', array($campo => $valor));
		if ($query->num_rows() > 0)
		{
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}
	public function verificar_vida($id)
	{
		$query = $this->db->get_where('mortalidad', array('id_paciente' => $id));
		if ($query->num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	//LISTAR PACIENTES
	public function num_pacientes()
	{
		return $this->db->get('pacientes')->num_rows();
	}
	public function leer_pacientes($per_page)
	{
		$this->db->order_by("feing", "desc");
		$datos = $this->db->get('pacientes', $per_page, $this->uri->segment(3)); 
		return $datos->result_array();
	}
	public function num_pacientes_busqueda()
	{
		if ($this->input->post('nac') && $this->input->post('cedula'))
		{
			$data = array(
				'nac' => $this->input->post('nac'),
				'cedula' => $this->input->post('cedula')
				);
			$consulta = $this->db->get_where('pacientes', $data)->num_rows();
		}
		else
		{
			$this->db->select('*');
			$this->db->from('pacientes');
			$this->db->like($this->input->post('campo'), $this->input->post('search'));
			$consulta = $this->db->get()->num_rows();
		}
		return $consulta;
	}
	public function leer_pacientes_busqueda($per_page)
	{
		$this->db->order_by('feing', 'desc');
		if ($this->input->post('nac') && $this->input->post('cedula'))
		{
			$data = array(
				'nac' => $this->input->post('nac'),
				'cedula' => $this->input->post('cedula')
				);
			$datos = $this->db->get_where('pacientes', $data, $per_page, $this->uri->segment(3));
		}
		else
		{
			$this->db->select('*');
			$this->db->from('pacientes');
			$this->db->like($this->input->post('campo'), $this->input->post('search'));
			$this->db->limit($per_page, $this->uri->segment(3));
			$datos = $this->db->get();
		}
		return $datos->result_array();
	}
	//VER PACIENTES DETALLADAMENTE
	public function detalles($id)
	{
		$query = $this->db->get_where('pacientes', array('id' => $id));
		if ($query->num_rows() == 1)
		{
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}
	//EDITAR PACIENTE
	public function editar()
	{
		//guardamos los datos a insertar en un arreglo
		$id = $this->input->post('id', TRUE);
		$set = array(
			'nombre' => $this->input->post('nombre',TRUE),
			'nac' => $this->input->post('nac',TRUE),
			'cedula' => $this->input->post('cedula',TRUE),
			'sexo' => $this->input->post('sexo',TRUE),
			'fenac' => $this->input->post('fenac',TRUE),
			'indigena' => $this->input->post('indigena',TRUE),
			'municipio' => $this->input->post('municipio',TRUE),
			'parroquia' => $this->input->post('parroquia',TRUE)
			);
		$condition = array('id' => $id);
		//Insertamos los datos en la tabla pacientes
		$this->db->update('pacientes', $set, $condition);
	}
	//BORRAR PACIENTES
	public function borrar($id)
	{
		$this->db->delete('pacientes', array('id' => $id));
	}
}

?>
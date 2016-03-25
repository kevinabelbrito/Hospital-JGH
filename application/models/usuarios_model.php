<?php

class Usuarios_model extends CI_model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	//REGISTRO DE USUARIO
	public function add_user()
	{
		$data = array(
			'nombre' => $this->input->post('nombre',TRUE),
			'email' => $this->input->post('email',TRUE),
			'tipo' => $this->input->post('tipo',TRUE),
			'usuario' => $this->input->post('usuario',TRUE),
			'clave' => $this->input->post('clave',TRUE),
			'pregunta' => $this->input->post('pregunta',TRUE),
			'respuesta' => $this->input->post('respuesta',TRUE)
			);
		//Insertamos los datos en la tabla registros
		$this->db->insert('usuarios',$data);
	}
	//LISTA DE USUARIOS
	public function num_usuarios()
	{
		$query = $this->db->get('usuarios');
		return $query->num_rows();
	}
	public function listar()
	{
		$this->db->order_by('nombre', 'asc');
		$query = $this->db->get('usuarios');
		return $query->result();
	}
	//CAMBIAR CLAVE
	public function very_clave()
	{
		$data = array(
			'id' => $this->input->post('id'),
			'clave' => $this->input->post('clave'),
			);
		$query = $this->db->get_where('usuarios', $data);
		if ($query->num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function cambio_clave()
	{
		$set = array('clave' => $this->input->post('nueva'));
		$condition = array('id' => $this->input->post('id'));
		$this->db->update('usuarios', $set, $condition);
	}
	//CARGAR DATOS DE USUARIO
	public function leer_usuario($id)
	{
		$query = $this->db->get_where('usuarios', array('id' => $id));
		if ($query->num_rows() == 1)
		{
			return $query->row_array();
		}
		else
		{
			return false;
		}
	}
	//EDITAR DATOS DEL USUARIO
	public function verificar($valor, $campo)
	{
		$consulta = $this->db->get_where('usuarios', array($campo => $valor));
		if ($consulta->num_rows() > 0)
		{
			return $consulta->row_array();
		}
		else
		{
			return false;
		}
	}
	public function actualizar()
	{
		//guardamos los datos a insertar en un arreglo
		$set = array(
			'nombre' => $this->input->post('nombre', TRUE),
			'email' => $this->input->post('email', TRUE),
			'usuario' => $this->input->post('usuario', TRUE),
			'pregunta' => $this->input->post('pregunta', TRUE),
			'respuesta' => $this->input->post('respuesta', TRUE)
			);
		$condition = array('id' => $this->input->post('id', TRUE));
		//Actualizamos los datos en la tabla usuarios
		$this->db->update('usuarios', $set, $condition);
	}
	public function borrar($id)
	{
		$this->db->delete('usuarios', array('id' => $id));
	}
}

?>
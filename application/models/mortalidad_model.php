<?php

class Mortalidad_model extends CI_model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	//LEER MUERTES
	public function num_muertos()
	{
		return $this->db->get('mortalidad')->num_rows();
	}
	public function leer_muertes($per_page)
	{
		$this->db->select('m.id, m.id_paciente, m.feocu, m.ocurrencia, p.nombre, p.indigena, p.fenac, p.sexo, p.municipio');
		$this->db->from('mortalidad m');
		$this->db->join('pacientes p', 'm.id_paciente = p.id');
		$this->db->order_by('feocu', 'desc');
		$this->db->limit($per_page, $this->uri->segment(3));
		$query = $this->db->get();
		return $query->result_array();
	}
	public function num_muertos_busqueda()
	{
		if ($this->input->post('campo') && $this->input->post('search'))
		{
			$campo = $this->input->post('campo');
			$search = $this->input->post('search');
		}
		$this->db->select('m.id, m.id_paciente, m.feocu, m.ocurrencia, p.nombre, p.indigena, p.fenac, p.sexo, p.municipio');
		$this->db->from('mortalidad m');
		$this->db->join('pacientes p', 'm.id_paciente = p.id');
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
	public function leer_muertes_busqueda($per_page)
	{
		if ($this->input->post('campo') && $this->input->post('search'))
		{
			$campo = $this->input->post('campo');
			$search = $this->input->post('search');
		}
		$this->db->select('m.id, m.id_paciente, m.feocu, m.ocurrencia, p.nombre, p.indigena, p.fenac, p.sexo, p.municipio');
		$this->db->from('mortalidad m');
		$this->db->join('pacientes p', 'm.id_paciente = p.id');
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
	//AGREGAR MUERTES
	public function add_muerte()
	{
		//Almacenamos los campos en una variable
		$id_paciente = $this->input->post('id',TRUE);
		$tipo = $this->input->post('tipo',TRUE);
		$ocurrencia = $this->input->post('ocurrencia',TRUE);
		$sitio = $this->input->post('sitio',TRUE);
		$caudir = $this->input->post('caudir',TRUE);
		$caubas = $this->input->post('caubas',TRUE);
		if ($tipo == "Materna")
		{
			$periodo = $this->input->post('periodo',TRUE);
			$ocupacion = $this->input->post('ocupacion',TRUE);
		}
		else
		{
			$periodo = "N/A";
			$ocupacion = "N/A";
		}
		if ($tipo == "Neonatal")
		{
			$peso = $this->input->post('peso',TRUE);
		}
		else
		{
			$peso = 0;
		}
		if ($tipo == "Materna" || $tipo == "Neonatal")
		{
			$edadgest = $this->input->post('edadgest',TRUE);
			$consultas = $this->input->post('consultas',TRUE);
		}
		else
		{
			$edadgest = 0;
			$consultas = 0;
		}
		if ($tipo == "Postneonatal" || $tipo == "Infantil")
		{
			$nutri = $this->input->post('nutri',TRUE);
			$estancia = $this->input->post('estancia',TRUE);
		}
		else
		{
			$nutri = "N/A";
			$estancia = "N/A";
		}
		//guardamos los datos a insertar en un arreglo
		$data = array(
			'id_paciente' => $id_paciente,
			'nombre_usuario' => $this->session->userdata('nombre'),
			'tipo' => $tipo,
			'ocurrencia' => $ocurrencia,
			'sitio' => $sitio,
			'caudir' => $caudir,
			'caubas' => $caubas,
			'periodo' => $periodo,
			'peso' => $peso,
			'edadgest' => $edadgest,
			'nutri' => $nutri,
			'estancia' => $estancia,
			'consultas' => $consultas,
			'ocupacion' => $ocupacion,
			'feocu' => date("Y-m-d H:i:s"),
			'semana' => date("W"),
			'mes' => date("m"),
			'year' => date("Y")
			);
		//Insertamos los datos en la tabla mortalidad
		$this->db->insert('mortalidad',$data);
	}
	//DETALLES DEL FALLECIDO
	public function detalles($id)
	{
		$consulta = $this->db->get_where('mortalidad', array('id' => $id));
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
	public function editar()
	{
		//Almacenamos los campos en una variable
		$id_paciente = $this->input->post('id_paciente',TRUE);
		$tipo = $this->input->post('tipo',TRUE);
		$feocu = $this->input->post('feocu',TRUE);
		$ocurrencia = $this->input->post('ocurrencia',TRUE);
		$sitio = $this->input->post('sitio',TRUE);
		$caudir = $this->input->post('caudir',TRUE);
		$caubas = $this->input->post('caubas',TRUE);
		if ($tipo == "Materna")
		{
			$periodo = $this->input->post('periodo',TRUE);
			$ocupacion = $this->input->post('ocupacion',TRUE);
		}
		else
		{
			$periodo = "N/A";
			$ocupacion = "N/A";
		}
		if ($tipo == "Neonatal")
		{
			$peso = $this->input->post('peso',TRUE);
		}
		else
		{
			$peso = 0;
		}
		if ($tipo == "Materna" || $tipo == "Neonatal")
		{
			$edadgest = $this->input->post('edadgest',TRUE);
			$consultas = $this->input->post('consultas',TRUE);
		}
		else
		{
			$edadgest = 0;
			$consultas = 0;
		}
		if ($tipo == "Postneonatal" || $tipo == "Infantil")
		{
			$nutri = $this->input->post('nutri',TRUE);
			$estancia = $this->input->post('estancia',TRUE);
		}
		else
		{
			$nutri = "N/A";
			$estancia = "N/A";
		}
		//guardamos los datos a insertar en un arreglo
		$set = array(
			'id_paciente' => $id_paciente,
			'tipo' => $tipo,
			'ocurrencia' => $ocurrencia,
			'sitio' => $sitio,
			'caudir' => $caudir,
			'caubas' => $caubas,
			'periodo' => $periodo,
			'peso' => $peso,
			'edadgest' => $edadgest,
			'nutri' => $nutri,
			'estancia' => $estancia,
			'consultas' => $consultas,
			'ocupacion' => $ocupacion
			);
		$condition = array('id' => $this->input->post('id'));
		//Actualizamos los datos
		$this->db->update('mortalidad', $set, $condition);
	}
	//BORRAR MORTALIDAD
	public function borrar($id)
	{
		$this->db->delete('mortalidad', array('id' => $id));
	}
}

?>
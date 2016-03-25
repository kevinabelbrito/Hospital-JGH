<?php

class Reportes_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	//EPI-12 SEMANAL
	public function enf_entre($enf)
	{
		$semana = $this->input->post('semana');
		$year = $this->input->post('year');
		$this->db->select('c.feocu, c.enfermedad, c.semana, c.year, p.fenac, p.sexo');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		$where = array('semana' => $semana, 'year' => $year);
		$this->db->where($where);
		$this->db->like('enfermedad', $enf);
		$datos = $this->db->get()->result();
		$menor1_h = 0;
		$menor1_m = 0;
		$uno4_h = 0;
		$uno4_m = 0;
		$cinco6_h = 0;
		$cinco6_m = 0;
		$siete9_h = 0;
		$siete9_m = 0;
		$diez11_h = 0;
		$diez11_m = 0;
		$doce14_h = 0;
		$doce14_m = 0;
		$quince19_h = 0;
		$quince19_m = 0;
		$veinte24_h = 0;
		$veinte24_m = 0;
		$veinticinco44_h = 0;
		$veinticinco44_m = 0;
		$cuarentaycinco59_h = 0;
		$cuarentaycinco59_m = 0;
		$sesenta64_h = 0;
		$sesenta64_m = 0;
		$mayor64_h = 0;
		$mayor64_m = 0;
		$total_h = 0;
		$total_m = 0;
		foreach ($datos as $dato)
		{
			$fenac = date("Y-m-d 0:0:0", strtotime($dato->fenac));
			$feocu = date("Y-m-d 0:0:0", strtotime($dato->feocu));
			$m = date("m", strtotime($feocu));
			$d = date("d", strtotime($feocu));
			$Y = date("Y", strtotime($feocu));
			$edad = timespan(human_to_unix($fenac), human_to_unix($feocu), 1);
			$sexo = $dato->sexo;
			if (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-1)) < $fenac)//Menor a 1 año
			{
				if ($sexo == "M")
				{
					$menor1_h = $menor1_h + 1;
				}
				else
				{
					$menor1_m = $menor1_m + 1;
				}
			}
			elseif (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-1)) >= $fenac && date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-5)) < $fenac)//Entre 1 y 4 años
			{
				if ($sexo == "M")
				{
					$uno4_h = $uno4_h + 1;
				}
				else
				{
					$uno4_m = $uno4_m + 1;
				}
			}
			elseif (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-5)) >= $fenac && date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-7)) < $fenac)//Entre 5 y 6 años
			{
				if ($sexo == "M")
				{
					$cinco6_h = $cinco6_h + 1;
				}
				else
				{
					$cinco6_m = $cinco6_m + 1;
				}
			}
			elseif (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-7)) >= $fenac && date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-10)) < $fenac)//Entre 7 y 9 años
			{
				if ($sexo == "M")
				{
					$siete9_h = $siete9_h + 1;
				}
				else
				{
					$siete9_m = $siete9_m + 1;
				}
			}
			elseif (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-10)) >= $fenac && date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-12)) < $fenac)//Entre 10 y 11 años
			{
				if ($sexo == "M")
				{
					$diez11_h = $diez11_h + 1;
				}
				else
				{
					$diez11_m = $diez11_m + 1;
				}
			}
			elseif ($edad >= 12 && $edad <= 14)//Entre 12 y 14 años
			{
				if ($sexo == "M")
				{
					$doce14_h = $doce14_h + 1;
				}
				else
				{
					$doce14_m = $doce14_m + 1;
				}
			}
			elseif ($edad >= 15 && $edad <= 19)//Entre 15 y 19 años
			{
				if ($sexo == "M")
				{
					$quince19_h = $quince19_h + 1;
				}
				else
				{
					$quince19_m = $quince19_m + 1;
				}
			}
			elseif ($edad >= 20 && $edad <= 24)//Entre 20 y 24 años
			{
				if ($sexo == "M")
				{
					$veinte24_h = $veinte24_h + 1;
				}
				else
				{
					$veinte24_m = $veinte24_m + 1;
				}
			}
			elseif (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-25)) >= $fenac && date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-44)) <= $fenac)//Entre 25 y 44 años
			{
				if ($sexo == "M")
				{
					$veinticinco44_h = $veinticinco44_h + 1;
				}
				else
				{
					$veinticinco44_m = $veinticinco44_m + 1;
				}
			}
			elseif ($edad >= 45 && $edad <= 59)//Entre 45 y 59 años
			{
				if ($sexo == "M")
				{
					$cuarentaycinco59_h = $cuarentaycinco59_h + 1;
				}
				else
				{
					$cuarentaycinco59_m = $cuarentaycinco59_m + 1;
				}
			}
			elseif ($edad >= 60 && $edad <= 64)//Entre 60 y 64 años
			{
				if ($sexo == "M")
				{
					$sesenta64_h = $sesenta64_h + 1;
				}
				else
				{
					$sesenta64_m = $sesenta64_m + 1;
				}
			}
			elseif ($edad > 64)
			{
				if ($sexo == "M")
				{
					$mayor64_h = $mayor64_h + 1;
				}
				else
				{
					$mayor64_m = $mayor64_m + 1;
				}
			}
			if ($sexo == "F")
			{
				$total_m = $total_m + 1;
			}
			else
			{
				$total_h = $total_h + 1;
			}
		}
		$total = $total_h + $total_m;
		$data = array(
			'menor1_h' => $menor1_h,
			'menor1_m' => $menor1_m,
			'uno4_h' => $uno4_h,
			'uno4_m' => $uno4_m,
			'cinco6_h' => $cinco6_h,
			'cinco6_m' => $cinco6_m,
			'siete9_h' => $siete9_h,
			'siete9_m' => $siete9_m,
			'diez11_h' => $diez11_h,
			'diez11_m' => $diez11_m,
			'doce14_h' => $doce14_h,
			'doce14_m' => $doce14_m,
			'quince19_h' => $quince19_h,
			'quince19_m' => $quince19_m,
			'veinte24_h' => $veinte24_h,
			'veinte24_m' => $veinte24_m,
			'veinticinco44_h' => $veinticinco44_h,
			'veinticinco44_m' => $veinticinco44_m,
			'cuarentaycinco59_h' => $cuarentaycinco59_h,
			'cuarentaycinco59_m' => $cuarentaycinco59_m,
			'sesenta64_h' => $sesenta64_h,
			'sesenta64_m' => $sesenta64_m,
			'mayor64_h' => $mayor64_h,
			'mayor64_m' => $mayor64_m,
			'total_m' => $total_m,
			'total_h' => $total_h,
			'total' => $total
			);
		return $data;
	}
	public function enf_resultado_totales($resultado)
	{
		$semana = $this->input->post('semana');
		$year = $this->input->post('year');
		$this->db->select('c.feocu, c.enfermedad, c.semana, c.year, p.fenac, p.sexo');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		$where = array('semana' => $semana, 'year' => $year, 'resultado' => $resultado);
		$this->db->where($where);
		$datos = $this->db->get()->result();
		$menor1_h = 0;
		$menor1_m = 0;
		$uno4_h = 0;
		$uno4_m = 0;
		$cinco6_h = 0;
		$cinco6_m = 0;
		$siete9_h = 0;
		$siete9_m = 0;
		$diez11_h = 0;
		$diez11_m = 0;
		$doce14_h = 0;
		$doce14_m = 0;
		$quince19_h = 0;
		$quince19_m = 0;
		$veinte24_h = 0;
		$veinte24_m = 0;
		$veinticinco44_h = 0;
		$veinticinco44_m = 0;
		$cuarentaycinco59_h = 0;
		$cuarentaycinco59_m = 0;
		$sesenta64_h = 0;
		$sesenta64_m = 0;
		$mayor64_h = 0;
		$mayor64_m = 0;
		$total_h = 0;
		$total_m = 0;
		foreach ($datos as $dato)
		{
			$fenac = date("Y-m-d 0:0:0", strtotime($dato->fenac));
			$feocu = date("Y-m-d 0:0:0", strtotime($dato->feocu));
			$m = date("m", strtotime($feocu));
			$d = date("d", strtotime($feocu));
			$Y = date("Y", strtotime($feocu));
			$edad = timespan(human_to_unix($fenac), human_to_unix($feocu), 1);
			$sexo = $dato->sexo;
			if (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-1)) < $fenac)//Menor a 1 año
			{
				if ($sexo == "M")
				{
					$menor1_h = $menor1_h + 1;
				}
				else
				{
					$menor1_m = $menor1_m + 1;
				}
			}
			elseif (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-1)) >= $fenac && date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-5)) < $fenac)//Entre 1 y 4 años
			{
				if ($sexo == "M")
				{
					$uno4_h = $uno4_h + 1;
				}
				else
				{
					$uno4_m = $uno4_m + 1;
				}
			}
			elseif (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-5)) >= $fenac && date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-7)) < $fenac)//Entre 5 y 6 años
			{
				if ($sexo == "M")
				{
					$cinco6_h = $cinco6_h + 1;
				}
				else
				{
					$cinco6_m = $cinco6_m + 1;
				}
			}
			elseif (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-7)) >= $fenac && date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-10)) < $fenac)//Entre 7 y 9 años
			{
				if ($sexo == "M")
				{
					$siete9_h = $siete9_h + 1;
				}
				else
				{
					$siete9_m = $siete9_m + 1;
				}
			}
			elseif (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-10)) >= $fenac && date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-12)) < $fenac)//Entre 10 y 11 años
			{
				if ($sexo == "M")
				{
					$diez11_h = $diez11_h + 1;
				}
				else
				{
					$diez11_m = $diez11_m + 1;
				}
			}
			elseif ($edad >= 12 && $edad <= 14)//Entre 12 y 14 años
			{
				if ($sexo == "M")
				{
					$doce14_h = $doce14_h + 1;
				}
				else
				{
					$doce14_m = $doce14_m + 1;
				}
			}
			elseif ($edad >= 15 && $edad <= 19)//Entre 15 y 19 años
			{
				if ($sexo == "M")
				{
					$quince19_h = $quince19_h + 1;
				}
				else
				{
					$quince19_m = $quince19_m + 1;
				}
			}
			elseif ($edad >= 20 && $edad <= 24)//Entre 20 y 24 años
			{
				if ($sexo == "M")
				{
					$veinte24_h = $veinte24_h + 1;
				}
				else
				{
					$veinte24_m = $veinte24_m + 1;
				}
			}
			elseif ($edad >= 25 && $edad <= 44)//Entre 25 y 44 años
			{
				if ($sexo == "M")
				{
					$veinticinco44_h = $veinticinco44_h + 1;
				}
				else
				{
					$veinticinco44_m = $veinticinco44_m + 1;
				}
			}
			elseif ($edad >= 45 && $edad <= 59)//Entre 45 y 59 años
			{
				if ($sexo == "M")
				{
					$cuarentaycinco59_h = $cuarentaycinco59_h + 1;
				}
				else
				{
					$cuarentaycinco59_m = $cuarentaycinco59_m + 1;
				}
			}
			elseif ($edad >= 60 && $edad <= 64)//Entre 60 y 64 años
			{
				if ($sexo == "M")
				{
					$sesenta64_h = $sesenta64_h + 1;
				}
				else
				{
					$sesenta64_m = $sesenta64_m + 1;
				}
			}
			elseif ($edad > 64)
			{
				if ($sexo == "M")
				{
					$mayor64_h = $mayor64_h + 1;
				}
				else
				{
					$mayor64_m = $mayor64_m + 1;
				}
			}
			if ($sexo == "F")
			{
				$total_m = $total_m + 1;
			}
			else
			{
				$total_h = $total_h + 1;
			}
		}
		$total = $total_h + $total_m;
		$data = array(
			'menor1_h' => $menor1_h,
			'menor1_m' => $menor1_m,
			'uno4_h' => $uno4_h,
			'uno4_m' => $uno4_m,
			'cinco6_h' => $cinco6_h,
			'cinco6_m' => $cinco6_m,
			'siete9_h' => $siete9_h,
			'siete9_m' => $siete9_m,
			'diez11_h' => $diez11_h,
			'diez11_m' => $diez11_m,
			'doce14_h' => $doce14_h,
			'doce14_m' => $doce14_m,
			'quince19_h' => $quince19_h,
			'quince19_m' => $quince19_m,
			'veinte24_h' => $veinte24_h,
			'veinte24_m' => $veinte24_m,
			'veinticinco44_h' => $veinticinco44_h,
			'veinticinco44_m' => $veinticinco44_m,
			'cuarentaycinco59_h' => $cuarentaycinco59_h,
			'cuarentaycinco59_m' => $cuarentaycinco59_m,
			'sesenta64_h' => $sesenta64_h,
			'sesenta64_m' => $sesenta64_m,
			'mayor64_h' => $mayor64_h,
			'mayor64_m' => $mayor64_m,
			'total_m' => $total_m,
			'total_h' => $total_h,
			'total' => $total
			);
		return $data;
	}
	//EPI-15 CONSOLIDADO
	public function epi_15_grupo($grupo)
	{
		$mes = $this->input->post('mes');
		$year = $this->input->post('year');
		$this->db->select('c.feocu, c.grupo, c.enfermedad, c.mes, c.year, p.fenac');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		$where = array('mes' => $mes, 'year' => $year, 'grupo' => $grupo);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function epi_15_enf($enf)
	{
		$mes = $this->input->post('mes');
		$year = $this->input->post('year');
		$this->db->select('c.feocu, c.grupo, c.enfermedad, c.mes, c.year, p.fenac');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		$where = array('mes' => $mes, 'year' => $year);
		$this->db->where($where);
		$this->db->like('enfermedad', $enf);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function epi_15_menor($enf, $limite)
	{
		$mes = $this->input->post('mes');
		$year = $this->input->post('year');
		$this->db->select('c.feocu, c.grupo, c.enfermedad, c.mes, c.year, p.fenac');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		$where = array('mes' => $mes, 'year' => $year);
		$this->db->where($where);
		$this->db->like('enfermedad', $enf);
		$query = $this->db->get()->result();
		$cantidad = 0;
		foreach ($query as $enf)
		{
			$fenac = date("Y-m-d 0:0:0", strtotime($enf->fenac));
			$feocu = date("Y-m-d 0:0:0", strtotime($enf->feocu));
			$m = date("m", strtotime($feocu));
			$d = date("d", strtotime($feocu));
			$Y = date("Y", strtotime($feocu));
			if (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-$limite)) < $fenac)
			{
				$cantidad = $cantidad + 1;
			}
		}
		return $cantidad;
	}
	public function epi_15_entre($enf, $desde, $hasta)
	{
		$mes = $this->input->post('mes');
		$year = $this->input->post('year');
		$this->db->select('c.feocu, c.grupo, c.enfermedad, c.mes, c.year, p.fenac');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		$where = array('mes' => $mes, 'year' => $year);
		$this->db->where($where);
		$this->db->like('enfermedad', $enf);
		$query = $this->db->get()->result();
		$cantidad = 0;
		foreach ($query as $enf)
		{
			$fenac = date("Y-m-d 0:0:0", strtotime($enf->fenac));
			$feocu = date("Y-m-d 0:0:0", strtotime($enf->feocu));
			$m = date("m", strtotime($feocu));
			$d = date("d", strtotime($feocu));
			$Y = date("Y", strtotime($feocu));
			if (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-$desde)) >= $fenac && date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-$hasta)) < $fenac)
			{
				$cantidad = $cantidad + 1;
			}
		}
		return $cantidad;
	}
	public function epi_15_mayor($enf, $limite)
	{
		$mes = $this->input->post('mes');
		$year = $this->input->post('year');
		$this->db->select('c.feocu, c.grupo, c.enfermedad, c.mes, c.year, p.fenac');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		$where = array('mes' => $mes, 'year' => $year);
		$this->db->where($where);
		$this->db->like('enfermedad', $enf);
		$query = $this->db->get()->result();
		$cantidad = 0;
		foreach ($query as $enf)
		{
			$fenac = date("Y-m-d 0:0:0", strtotime($enf->fenac));
			$feocu = date("Y-m-d 0:0:0", strtotime($enf->feocu));
			$m = date("m", strtotime($feocu));
			$d = date("d", strtotime($feocu));
			$Y = date("Y", strtotime($feocu));
			if (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-$limite)) >= $fenac)
			{
				$cantidad = $cantidad + 1;
			}
		}
		return $cantidad;
	}
	public function epi_15_sexo($enf, $desde, $hasta, $sexo)
	{
		$mes = $this->input->post('mes');
		$year = $this->input->post('year');
		$this->db->select('c.feocu, c.grupo, c.enfermedad, c.mes, c.year, p.fenac');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		$where = array('mes' => $mes, 'year' => $year, 'sexo' => $sexo);
		$this->db->where($where);
		$this->db->like('enfermedad', $enf);
		$query = $this->db->get()->result();
		$cantidad = 0;
		foreach ($query as $enf)
		{
			$fenac = date("Y-m-d 0:0:0", strtotime($enf->fenac));
			$feocu = date("Y-m-d 0:0:0", strtotime($enf->feocu));
			$m = date("m", strtotime($feocu));
			$d = date("d", strtotime($feocu));
			$Y = date("Y", strtotime($feocu));
			if (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-$desde)) >= $fenac && date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-$hasta)) < $fenac)
			{
				$cantidad = $cantidad + 1;
			}
		}
		return $cantidad;
	}
	//EPI-15 CONSOLIDADO ACUMULADO DEL AÑO
	public function epi_15_grupo_acumulado($grupo)
	{
		$mes = $this->input->post('mes');
		$year = $this->input->post('year');
		$this->db->select('c.feocu, c.grupo, c.enfermedad, c.mes, c.year, p.fenac');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		$where = array('mes <=' => $mes, 'year' => $year, 'grupo' => $grupo);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function epi_15_enf_acumulado($enf)
	{
		$mes = $this->input->post('mes');
		$year = $this->input->post('year');
		$this->db->select('c.feocu, c.grupo, c.enfermedad, c.mes, c.year, p.fenac');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		$where = array('mes <=' => $mes, 'year' => $year);
		$this->db->like('enfermedad', $enf);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function epi_15_menor_acumulado($enf, $limite)
	{
		$mes = $this->input->post('mes');
		$year = $this->input->post('year');
		$this->db->select('c.feocu, c.grupo, c.enfermedad, c.mes, c.year, p.fenac');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		$where = array('mes <=' => $mes, 'year' => $year);
		$this->db->where($where);
		$this->db->like('enfermedad', $enf);
		$query = $this->db->get()->result();
		$cantidad = 0;
		foreach ($query as $enf)
		{
			$fenac = date("Y-m-d 0:0:0", strtotime($enf->fenac));
			$feocu = date("Y-m-d 0:0:0", strtotime($enf->feocu));
			$m = date("m", strtotime($feocu));
			$d = date("d", strtotime($feocu));
			$Y = date("Y", strtotime($feocu));
			if (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-$limite)) < $fenac)
			{
				$cantidad = $cantidad + 1;
			}
		}
		return $cantidad;
	}
	public function epi_15_entre_acumulado($enf, $desde, $hasta)
	{
		$mes = $this->input->post('mes');
		$year = $this->input->post('year');
		$this->db->select('c.feocu, c.grupo, c.enfermedad, c.mes, c.year, p.fenac');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		$where = array('mes <=' => $mes, 'year' => $year);
		$this->db->where($where);
		$this->db->like('enfermedad', $enf);
		$query = $this->db->get()->result();
		$cantidad = 0;
		foreach ($query as $enf)
		{
			$fenac = date("Y-m-d 0:0:0", strtotime($enf->fenac));
			$feocu = date("Y-m-d 0:0:0", strtotime($enf->feocu));
			$m = date("m", strtotime($feocu));
			$d = date("d", strtotime($feocu));
			$Y = date("Y", strtotime($feocu));
			if (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-$desde)) >= $fenac && date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-$hasta)) < $fenac)
			{
				$cantidad = $cantidad + 1;
			}
		}
		return $cantidad;
	}
	public function epi_15_mayor_acumulado($enf, $limite)
	{
		$mes = $this->input->post('mes');
		$year = $this->input->post('year');
		$this->db->select('c.feocu, c.grupo, c.enfermedad, c.mes, c.year, p.fenac');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		$where = array('mes <=' => $mes, 'year' => $year);
		$this->db->where($where);
		$this->db->like('enfermedad', $enf);
		$query = $this->db->get()->result();
		$cantidad = 0;
		foreach ($query as $enf)
		{
			$fenac = date("Y-m-d 0:0:0", strtotime($enf->fenac));
			$feocu = date("Y-m-d 0:0:0", strtotime($enf->feocu));
			$m = date("m", strtotime($feocu));
			$d = date("d", strtotime($feocu));
			$Y = date("Y", strtotime($feocu));
			if (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-$limite)) >= $fenac)
			{
				$cantidad = $cantidad + 1;
			}
		}
		return $cantidad;
	}
	public function epi_15_sexo_acumulado($enf, $desde, $hasta, $sexo)
	{
		$mes = $this->input->post('mes');
		$year = $this->input->post('year');
		$this->db->select('c.feocu, c.grupo, c.enfermedad, c.mes, c.year, p.fenac');
		$this->db->from('consultas c');
		$this->db->join('pacientes p', 'c.id_paciente = p.id');
		$where = array('mes <=' => $mes, 'year' => $year, 'sexo' => $sexo);
		$this->db->where($where);
		$this->db->like('enfermedad', $enf);
		$query = $this->db->get()->result();
		$cantidad = 0;
		foreach ($query as $enf)
		{
			$fenac = date("Y-m-d 0:0:0", strtotime($enf->fenac));
			$feocu = date("Y-m-d 0:0:0", strtotime($enf->feocu));
			$m = date("m", strtotime($feocu));
			$d = date("d", strtotime($feocu));
			$Y = date("Y", strtotime($feocu));
			if (date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-$desde)) >= $fenac && date("Y-m-d h:i:s", mktime(0, 0, 0, $m, $d, $Y-$hasta)) < $fenac)
			{
				$cantidad = $cantidad + 1;
			}
		}
		return $cantidad;
	}
	public function total_consultas()
	{
		$mes = $this->input->post('mes');
		$year = $this->input->post('year');
		$where = array('mes' => $mes, 'year' => $year);
		$query = $this->db->get_where('consultas', $where);
		return $query->num_rows();
	}
	public function total_consultas_acumulado()
	{
		$mes = $this->input->post('mes');
		$year = $this->input->post('year');
		$where = array('mes <=' => $mes, 'year' => $year);
		$query = $this->db->get_where('consultas', $where);
		return $query->num_rows();
	}
	//MORTALIDAD MATERNA E INFANTIL
	public function mortalidad($tipo)
	{
		$semana = $this->input->post('semana');
		$year = $this->input->post('year');
		$this->db->select('m.feocu, p.nombre, p.fenac, p.sexo, p.municipio, m.ocurrencia, m.sitio, m.caudir, m.caubas, m.periodo, m.peso, m.edadgest, m.nutri, m.estancia, p.indigena, m.consultas, m.ocupacion');
		$this->db->from('mortalidad m');
		$this->db->join('pacientes p', 'm.id_paciente = p.id');
		$where = array(
			'semana' => $semana,
			'year' => $year,
			'tipo' => $tipo
			);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result();
	}
	public function num_mortalidad($tipo)
	{
		$semana = $this->input->post('semana');
		$year = $this->input->post('year');
		$this->db->select('m.feocu, p.nombre, p.fenac, p.sexo, p.municipio, m.ocurrencia, m.sitio, m.caudir, m.caubas, m.periodo, m.peso, m.edadgest, m.nutri, m.estancia, p.indigena, m.consultas, m.ocupacion');
		$this->db->from('mortalidad m');
		$this->db->join('pacientes p', 'm.id_paciente = p.id');
		$where = array(
			'semana' => $semana,
			'year' => $year,
			'tipo' => $tipo
			);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->num_rows();
	}
	public function cantidad_partos()
	{
		$semana = $this->input->post('semana');
		$year = $this->input->post('year');
		$where = array(
			'semana' => $semana,
			'year' => $year
			);
		$query = $this->db->get_where('partos', $where);
		return $query->num_rows();
	}
	public function resultado_partos($resultado)
	{
		$semana = $this->input->post('semana');
		$year = $this->input->post('year');
		$where = array(
			'semana' => $semana,
			'year' => $year,
			'resultado' => $resultado
			);
		$query = $this->db->get_where('partos', $where);
		return $query->num_rows();
	}
	public function abortos()
	{
		$semana = $this->input->post('semana');
		$year = $this->input->post('year');
		$where = array(
			'semana' => $semana,
			'year' => $year,
			'enfermedad' => 'ABORTO (O00-O06,O08)'
			);
		$query = $this->db->get_where('consultas', $where);
		return $query->num_rows();
	}
}

?>
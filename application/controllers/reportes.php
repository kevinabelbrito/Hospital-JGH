<?php

class Reportes extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('reportes_model');
		$this->form_validation->set_error_delimiters('<div id="error">', '</div>');
		$this->very_sesion();
		date_default_timezone_set("America/Caracas");
        setlocale(LC_TIME,"Spanish");
	}
	public function index()
	{
		$data = array(
			'titulo' => 'Formulario de Reportes',
			'main_content' => 'reportes/form_view'
			);
		$this->load->view('admin_tpt', $data);
	}
	public function generar_reporte()
	{
		if ($this->input->post('generar'))
		{
			//Validamos los campos
			//Reglas
			$this->form_validation->set_rules('rep', 'Reporte', 'required|trim');
			if ($this->input->post('semana'))
			{
				$this->form_validation->set_rules('semana', 'Semana', 'required|trim|is_natural_no_zero');
			}
			if ($this->input->post('mes'))
			{
				$this->form_validation->set_rules('mes', 'Mes', 'required|is_natural_no_zero');
			}
			$this->form_validation->set_rules('year', 'Año', 'required|trim|is_natural|min_length[4]|callback_very_year');
			//Mensajes
			$this->form_validation->set_message('required', '<span class="icon-asterisk"></span>Campo obligatorio');
			$this->form_validation->set_message('is_natural', '<span class="icon-exclamation-triangle"></span>Solo datos numericos');
			$this->form_validation->set_message('is_natural_no_zero', '<span class="icon-exclamation-triangle"></span>Solo datos numericos');
			$this->form_validation->set_message('min_length', '<span class="icon-exclamation-triangle"></span>Formato del año: 0000 (4 digitos)');
			$this->form_validation->set_message('very_year', '<span class="icon-times-circle"></span>El año no puede ser mayor al actual');
			if ($this->form_validation->run() == FALSE)
			{
				$data = array(
					'titulo' => 'Formulario de Reportes',
					'main_content' => 'reportes/form_view'
					);
				$this->load->view('admin_tpt', $data);
			}
			else
			{
				//EPI-12
				if ($this->input->post('rep') == "epi")
				{
					$name_doc = "EPI-12_semana_".$this->input->post('semana')."_".$this->input->post('year');
					$view = 'reportes/epi-12_view';
					$orientacion = 'L';
					$data = array(
						'semana' => $this->input->post('semana'),
						'year' => $this->input->post('year'),
						'colera' => $this->reportes_model->enf_entre('COLERA (A00.-)'),
						'amibiasis' => $this->reportes_model->enf_entre('AMIBIASIS (A06.-)'),
						'diarreas' => $this->reportes_model->enf_entre('DIARREAS (A08-A09)'),
						'tifoidea' => $this->reportes_model->enf_entre('FIEBRE TIFOIDEA (A01.0)'),
						'etabrote' => $this->reportes_model->enf_entre('ETA (BROTE)'),
						'etasoc' => $this->reportes_model->enf_entre('ETA (CASO ASOCIADO A BROTE)'),
						'hepa' => $this->reportes_model->enf_entre('HEPATITIS AGUDA TIPO A (B15.-)'),
						'tuberculosis' => $this->reportes_model->enf_entre('TUBERCULOSIS (A15-A19)'),
						'influenza' => $this->reportes_model->enf_entre('INFLUENZA (J10-J11)'),
						'sifiliscong' => $this->reportes_model->enf_entre('SIFILIS CONGENITA (A50)'),
						'vih' => $this->reportes_model->enf_entre('INFECCION ASINTOMATICA VIH (Z21)'),
						'sida' => $this->reportes_model->enf_entre('ENFERMEDAD VIH/SIDA (B20-B24)'),
						'tosferina' => $this->reportes_model->enf_entre('TOSFERINA (A37.-)'),
						'parotiditis' => $this->reportes_model->enf_entre('PAROTIDITIS (B26.-)'),
						'tetaneo' => $this->reportes_model->enf_entre('TETANOS NEONATAL (A33)'),
						'tetaobs' => $this->reportes_model->enf_entre('TETANOS OBSTETRICO (A34)'),
						'tetaotros' => $this->reportes_model->enf_entre('OTROS TETANOS (A35)'),
						'difteria' => $this->reportes_model->enf_entre('DIFTERIA (A36.-)'),
						'sarampion' => $this->reportes_model->enf_entre('SARAMPION (B05.-)'),
						'rubeola' => $this->reportes_model->enf_entre('RUBEOLA (B06.-)'),
						'denguesina' => $this->reportes_model->enf_entre('DENGUE SIN SIGNOS DE ALARMA (A90)'),
						'dengue' => $this->reportes_model->enf_entre('FIEBRE DENGUE (A90)'),
						'denguehemo' => $this->reportes_model->enf_entre('DENGUE HEMORRAGICO (A91)'),
						'encequiven' => $this->reportes_model->enf_entre('ENCEFALITIS EQUINA VENEZOLANA (A92.2)'),
						'fiebreamarilla' => $this->reportes_model->enf_entre('FIEBRE AMARILLA (A95.-)'),
						'leisvi' => $this->reportes_model->enf_entre('LEISHMANIASIS VICERAL (B55.0)'),
						'leiscu' => $this->reportes_model->enf_entre('LEISHMANIASIS CUTANEA (B55.1)'),
						'leismuco' => $this->reportes_model->enf_entre('LEISHMANIASIS MUCOCUTANEA (B55.2)'),
						'leisnoesp' => $this->reportes_model->enf_entre('LEISHMANIASIS NO ESPECIFICADA(B55.9)'),
						'chagasaguda' => $this->reportes_model->enf_entre('CHAGAS AGUDA'),
						'chagascronica' => $this->reportes_model->enf_entre('CHAGAS CRONICA'),
						'rabia' => $this->reportes_model->enf_entre('RABIA HUMANA'),
						'fiebrehemo' => $this->reportes_model->enf_entre('FIEBRE HEMORRAGICA VENEZOLANA'),
						'leptopirosis' => $this->reportes_model->enf_entre('LEPTOSPIROSIS'),
						'meninvi' => $this->reportes_model->enf_entre('MENINGITIS VIRAL'),
						'meninbac' => $this->reportes_model->enf_entre('MENINGITIS BACTERIANA'),
						'meningo' => $this->reportes_model->enf_entre('MENINGITIS MENINGOCOCICA'),
						'enfmenin' => $this->reportes_model->enf_entre('ENFERMEDAD MENINGOCÓCICA'),
						'varicela' => $this->reportes_model->enf_entre('VARICELA (B01.-)'),
						'hepab' => $this->reportes_model->enf_entre('HEPATITIS AGUDA TIPO B'),
						'hepac' => $this->reportes_model->enf_entre('HEPATITIS AGUDA TIPO C'),
						'hepaotras' => $this->reportes_model->enf_entre('HEPATITIS OTRAS AGUDA'),
						'hepanoesp' => $this->reportes_model->enf_entre('HEPATITIS NO ESPECIF'),
						'parafla' => $this->reportes_model->enf_entre('PARALISIS FLACIDA'),
						'neumonia' => $this->reportes_model->enf_entre('NEUMONIAS (J12-J18)'),
						'toxipla' => $this->reportes_model->enf_entre('INTOXICACION POR PLAGUICIDAS'),
						'mordeduras' => $this->reportes_model->enf_entre('MORDEDURAS SOSPECHOSAS DE RABIA'),
						'fiebre' => $this->reportes_model->enf_entre('FIEBRE (R50.-)'),
						'advmed' => $this->reportes_model->enf_entre('EFECTOS ADVERSOS DE MEDICAMENTOS'),
						'advacu' => $this->reportes_model->enf_entre('EFECTOS ADVERSOS DE VACUNAS'),
						'chicungunya' => $this->reportes_model->enf_entre('SOSPECHOSAS DE CHICUNGUNYA'),
						'rinofaringitis' => $this->reportes_model->enf_entre('RINOFARINGITIS AGUDA'),
						'sinusitis' => $this->reportes_model->enf_entre('SINUSITIS AGUDA'),
						'faringitis' => $this->reportes_model->enf_entre('FARINGITIS AGUDA'),
						'amigdalitis' => $this->reportes_model->enf_entre('AMIGDALITIS AGUDA'),
						'larintra' => $this->reportes_model->enf_entre('LARINGITIS Y TRAQUEITIS AGUDA'),
						'larinobs' => $this->reportes_model->enf_entre('LARINGITIS OBSTRUCTIVA Y EPIGLOTITIS'),
						'infaguda' => $this->reportes_model->enf_entre('INFECCIONES AGUDAS VIAS RESP'),
						'bronquitis' => $this->reportes_model->enf_entre('BRONQUITIS AGUDA'),
						'bronquiolitis' => $this->reportes_model->enf_entre('BRONQUIOLITIS AGUDA'),
						'infecnoesp' => $this->reportes_model->enf_entre('INFECCIONES AGUDAS NO ESP'),
						'infresp' => $this->reportes_model->enf_entre('INFECCION RESPIRATORIA AGUDA GRAVE'),
						'peste' => $this->reportes_model->enf_entre('PESTE (A20)'),
						'sras' => $this->reportes_model->enf_entre('SINDROME RESPIRATORIO AGUDO SEVERO'),
						'viruela' => $this->reportes_model->enf_entre('VIRUELA (B03)'),
						'rumorepizoo' => $this->reportes_model->enf_entre('RUMOR DE EPIZOOTIAS'),
						'hantavirosis' => $this->reportes_model->enf_entre('HANTAVIROSIS'),
						'rubcong' => $this->reportes_model->enf_entre('SINDROME DE RUBEOLA CONGENITA'),
						'malvi' => $this->reportes_model->enf_entre('PALUDISMO A VIVAX'),
						'malfal' => $this->reportes_model->enf_entre('PALUDISMO A FALCIPARUM'),
						'malariae' => $this->reportes_model->enf_entre('PALUDISMO A MALARIAE'),
						'malmix' => $this->reportes_model->enf_entre('PALUDISMO  MIXTA'),
						'nilo' => $this->reportes_model->enf_entre('FIEBRE DEL OESTE DEL NILO'),
						'consultas' => $this->reportes_model->enf_resultado_totales('Dado de alta'),
						'hospitalizados' => $this->reportes_model->enf_resultado_totales('Hospitalizado')
						);
					$this->reporte_pdf($name_doc, $view, $data, $orientacion);
				}
				//EPI-15 CONSOLIDADO
				elseif ($this->input->post('rep') == "con")
				{
					//Datos del reporte
					$name_doc = "EPI-15 Consolidado_".$this->input->post('mes')."_".$this->input->post('year');
					$view = 'reportes/epi-15_view';
					$orientacion = 'P';
					//Estadisticas EPI-15
					//TRANSMISION HIDRICA Y ALIMENTOS
					$alimentos = $this->reportes_model->epi_15_grupo('TRANSMISION HIDRICA Y ALIMENTOS');
					$alimentos_acumulado = $this->reportes_model->epi_15_grupo_acumulado('TRANSMISION HIDRICA Y ALIMENTOS');
					$colera = $this->reportes_model->epi_15_enf('COLERA');
					$colera_acumulado = $this->reportes_model->epi_15_enf_acumulado('COLERA');
					$amibiasis = $this->reportes_model->epi_15_enf('AMIBIASIS (A06.-)');
					$amibiasis_acumulado = $this->reportes_model->epi_15_enf_acumulado('AMIBIASIS (A06.-)');
					$diarrea_menor1 = $this->reportes_model->epi_15_menor('DIARREAS (A08-A09)', 1);
					$diarrea_menor1_acumulado = $this->reportes_model->epi_15_menor_acumulado('DIARREAS (A08-A09)', 1);
					$diarrea_uno4 = $this->reportes_model->epi_15_entre('DIARREAS (A08-A09)', 1, 5);
					$diarrea_uno4_acumulado = $this->reportes_model->epi_15_entre_acumulado('DIARREAS (A08-A09)', 1, 5);
					$diarrea_mayor5 = $this->reportes_model->epi_15_mayor('DIARREAS (A08-A09)', 5);
					$diarrea_mayor5_acumulado = $this->reportes_model->epi_15_mayor_acumulado('DIARREAS (A08-A09)', 5);
					$giardiasis = $this->reportes_model->epi_15_enf('GIARDIASIS (A07.1)');
					$giardiasis_acumulado = $this->reportes_model->epi_15_enf_acumulado('GIARDIASIS (A07.1)');
					$helmintiasis = $this->reportes_model->epi_15_enf('HELMINTIASIS (B65-B68,B70-B83)');
					$helmintiasis_acumulado = $this->reportes_model->epi_15_enf_acumulado('HELMINTIASIS (B65-B68,B70-B83)');
					$tifoidea = $this->reportes_model->epi_15_enf('FIEBRE TIFOIDEA (A01.0)');
					$tifoidea_acumulado = $this->reportes_model->epi_15_enf_acumulado('FIEBRE TIFOIDEA (A01.0)');
					$etabrote = $this->reportes_model->epi_15_enf('ETA (BROTE)');
					$etabrote_acumulado = $this->reportes_model->epi_15_enf_acumulado('ETA (BROTE)');
					$etacaso = $this->reportes_model->epi_15_enf('ETA (CASO ASOCIADO A BROTE)');
					$etacaso_acumulado = $this->reportes_model->epi_15_enf_acumulado('ETA (CASO ASOCIADO A BROTE)');
					$hepa = $this->reportes_model->epi_15_enf('HEPATITIS AGUDA TIPO A (B15.-)');
					$hepa_acumulado = $this->reportes_model->epi_15_enf_acumulado('HEPATITIS AGUDA TIPO A (B15.-)');
					//TRANSMISION AEREA
					$aerea = $this->reportes_model->epi_15_grupo('TRANSMISION AEREA');
					$aerea_acumulado = $this->reportes_model->epi_15_grupo_acumulado('TRANSMISION AEREA');
					$tuberculosis = $this->reportes_model->epi_15_enf('TUBERCULOSIS (A15-A19)');
					$tuberculosis_acumulado = $this->reportes_model->epi_15_enf_acumulado('TUBERCULOSIS (A15-A19)');
					$influenza = $this->reportes_model->epi_15_enf('INFLUENZA (J10-J11)');
					$influenza_acumulado = $this->reportes_model->epi_15_enf_acumulado('INFLUENZA (J10-J11)');
					//TRANSMISION SEXUAL
					$sexual = $this->reportes_model->epi_15_grupo('TRANSMISION SEXUAL');
					$sexual_acumulado = $this->reportes_model->epi_15_grupo_acumulado('TRANSMISION SEXUAL');
					$gonorrea = $this->reportes_model->epi_15_enf('INFECCION GONOCOCICA (A54.-)');
					$gonorrea_acumulado = $this->reportes_model->epi_15_enf_acumulado('INFECCION GONOCOCICA (A54.-)');
					$sifilis = $this->reportes_model->epi_15_enf('SIFILIS (A50-A53)');
					$sifilis_acumulado = $this->reportes_model->epi_15_enf_acumulado('SIFILIS (A50-A53)');
					$sif_cong = $this->reportes_model->epi_15_enf('SIFILIS CONGENITA (A50)');
					$sif_cong_acumulado = $this->reportes_model->epi_15_enf_acumulado('SIFILIS CONGENITA (A50)');
					$vih = $this->reportes_model->epi_15_enf('INFECCION ASINTOMATICA VIH (Z21)');
					$vih_acumulado = $this->reportes_model->epi_15_enf_acumulado('INFECCION ASINTOMATICA VIH (Z21)');
					$sida = $this->reportes_model->epi_15_enf('ENFERMEDAD VIH/SIDA (B20-B24)');
					$sida_acumulado = $this->reportes_model->epi_15_enf_acumulado('ENFERMEDAD VIH/SIDA (B20-B24)');
					//PREVENIBLES POR VACUNAS
					$vacunas = $this->reportes_model->epi_15_grupo('PREVENIBLES POR VACUNAS');
					$vacunas_acumulado = $this->reportes_model->epi_15_grupo_acumulado('PREVENIBLES POR VACUNAS');
					$poliomielitis = $this->reportes_model->epi_15_enf('POLIOMIELITIS (A80.-)');
					$poliomielitis_acumulado = $this->reportes_model->epi_15_enf_acumulado('POLIOMIELITIS (A80.-)');
					$tosferina = $this->reportes_model->epi_15_enf('TOSFERINA (A37.-)');
					$tosferina_acumulado = $this->reportes_model->epi_15_enf_acumulado('TOSFERINA (A37.-)');
					$parotiditis = $this->reportes_model->epi_15_enf('PAROTIDITIS (B26.-)');
					$parotiditis_acumulado = $this->reportes_model->epi_15_enf_acumulado('PAROTIDITIS (B26.-)');
					$tetaneo = $this->reportes_model->epi_15_enf('TETANOS NEONATAL (A33)');
					$tetaneo_acumulado = $this->reportes_model->epi_15_enf_acumulado('TETANOS NEONATAL (A33)');
					$tetaobs = $this->reportes_model->epi_15_enf('TETANOS OBSTETRICO (A34)');
					$tetaobs_acumulado = $this->reportes_model->epi_15_enf_acumulado('TETANOS OBSTETRICO (A34)');
					$otrosteta = $this->reportes_model->epi_15_enf('OTROS TETANOS (A35)');
					$otrosteta_acumulado = $this->reportes_model->epi_15_enf_acumulado('OTROS TETANOS (A35)');
					$difteria = $this->reportes_model->epi_15_enf('DIFTERIA (A36.-)');
					$difteria_acumulado = $this->reportes_model->epi_15_enf_acumulado('DIFTERIA (A36.-)');
					$sarampion = $this->reportes_model->epi_15_enf('SARAMPION (B05.-)');
					$sarampion_acumulado = $this->reportes_model->epi_15_enf_acumulado('SARAMPION (B05.-)');
					$rubeola = $this->reportes_model->epi_15_enf('RUBEOLA (B06.-)');
					$rubeola_acumulado = $this->reportes_model->epi_15_enf_acumulado('RUBEOLA (B06.-)');
					//TRANSMITIDAS POR VECTORES
					$vectores = $this->reportes_model->epi_15_grupo('TRANSMITIDAS POR VECTORES');
					$vectores_acumulado = $this->reportes_model->epi_15_grupo_acumulado('TRANSMITIDAS POR VECTORES');
					$dengue = $this->reportes_model->epi_15_enf('FIEBRE DENGUE (A90)');
					$dengue_acumulado = $this->reportes_model->epi_15_enf_acumulado('FIEBRE DENGUE (A90)');
					$denguehemo = $this->reportes_model->epi_15_enf('DENGUE HEMORRAGICO (A91)');
					$denguehemo_acumulado = $this->reportes_model->epi_15_enf_acumulado('DENGUE HEMORRAGICO (A91)');
					$encefalitis = $this->reportes_model->epi_15_enf('ENCEFALITIS EQUINA VENEZOLANA (A92.2)');
					$encefalitis_acumulado = $this->reportes_model->epi_15_enf_acumulado('ENCEFALITIS EQUINA VENEZOLANA (A92.2)');
					$amarrilla = $this->reportes_model->epi_15_enf('FIEBRE AMARILLA (A95.-)');
					$amarrilla_acumulado = $this->reportes_model->epi_15_enf_acumulado('FIEBRE AMARILLA (A95.-)');
					$falciparum = $this->reportes_model->epi_15_enf('PALUDISMO A FALCIPARUM (B50)');
					$falciparum_acumulado = $this->reportes_model->epi_15_enf_acumulado('PALUDISMO A FALCIPARUM (B50)');
					$vivax = $this->reportes_model->epi_15_enf('PALUDISMO A VIVAX (B51)');
					$vivax_acumulado = $this->reportes_model->epi_15_enf_acumulado('PALUDISMO A VIVAX (B51)');
					$malariae = $this->reportes_model->epi_15_enf('PALUDISMO A MALARIAE (B52)');
					$malariae_acumulado = $this->reportes_model->epi_15_enf_acumulado('PALUDISMO A MALARIAE (B52)');
					$palumixta = $this->reportes_model->epi_15_enf('PALUDISMO  MIXTA (B50, B51, B52)');
					$palumixta_acumulado = $this->reportes_model->epi_15_enf_acumulado('PALUDISMO  MIXTA (B50, B51, B52)');
					$leishmaniasis = $this->reportes_model->epi_15_enf('LEISHMANIASIS');
					$leishmaniasis_acumulado = $this->reportes_model->epi_15_enf_acumulado('LEISHMANIASIS');
					$chagas = $this->reportes_model->epi_15_enf('ENFERMEDAD DE CHAGAS');
					$chagas_acumulado = $this->reportes_model->epi_15_enf_acumulado('ENFERMEDAD DE CHAGAS');
					$oncocercosis = $this->reportes_model->epi_15_enf('ONCOCERCOSIS (B73)');
					$oncocercosis_acumulado = $this->reportes_model->epi_15_enf_acumulado('ONCOCERCOSIS (B73)');
					//ENFERMEDADES ZOONOTICAS
					$zoo = $this->reportes_model->epi_15_grupo('ENFERMEDADES ZOONOTICAS');
					$zoo_acumulado = $this->reportes_model->epi_15_grupo_acumulado('ENFERMEDADES ZOONOTICAS');
					$rabia = $this->reportes_model->epi_15_enf('RABIA HUMANA (A82.-)');
					$rabia_acumulado = $this->reportes_model->epi_15_enf_acumulado('RABIA HUMANA (A82.-)');
					$fiebrehemo = $this->reportes_model->epi_15_enf('FIEBRE HEMORRAGICA VENEZOLANA (A96.8)');
					$fiebrehemo_acumulado = $this->reportes_model->epi_15_enf_acumulado('FIEBRE HEMORRAGICA VENEZOLANA (A96.8)');
					$leptospirosis = $this->reportes_model->epi_15_enf('LEPTOSPIROSIS (A27.-)');
					$leptospirosis_acumulado = $this->reportes_model->epi_15_enf_acumulado('LEPTOSPIROSIS (A27.-)');
					$brucelosis = $this->reportes_model->epi_15_enf('BRUCELOSIS (A23.-)');
					$brucelosis_acumulado = $this->reportes_model->epi_15_enf_acumulado('BRUCELOSIS (A23.-)');
					$cisticercosis = $this->reportes_model->epi_15_enf('CISTICERCOSIS (B69.-)');
					$cisticercosis_acumulado = $this->reportes_model->epi_15_enf_acumulado('CISTICERCOSIS (B69.-)');
					//OTRAS ENF. TRANSMISIBLES
					$transmisibles = $this->reportes_model->epi_15_grupo('OTRAS ENF. TRANSMISIBLES');
					$transmisibles_acumulado = $this->reportes_model->epi_15_grupo_acumulado('OTRAS ENF. TRANSMISIBLES');
					$menviral = $this->reportes_model->epi_15_enf('MENINGITIS VIRAL (A87)');
					$menviral_acumulado = $this->reportes_model->epi_15_enf_acumulado('MENINGITIS VIRAL (A87)');
					$menbac = $this->reportes_model->epi_15_enf('MENINGITIS BACTERIANA (G00)');
					$menbac_acumulado = $this->reportes_model->epi_15_enf_acumulado('MENINGITIS BACTERIANA (G00)');
					$menmenin = $this->reportes_model->epi_15_enf('MENINGITIS MENINGOCOCICA (A39.0)');
					$menmenin_acumulado = $this->reportes_model->epi_15_enf_acumulado('MENINGITIS MENINGOCOCICA (A39.0)');
					$meningo = $this->reportes_model->epi_15_enf('ENFERMEDAD MENINGOCÓCICA (A39.9)');
					$meningo_acumulado = $this->reportes_model->epi_15_enf_acumulado('ENFERMEDAD MENINGOCÓCICA (A39.9)');
					$varicela = $this->reportes_model->epi_15_enf('VARICELA (B01.-)');
					$varicela_acumulado = $this->reportes_model->epi_15_enf_acumulado('VARICELA (B01.-)');
					$hepab = $this->reportes_model->epi_15_enf('HEPATITIS AGUDA TIPO B');
					$hepab_acumulado = $this->reportes_model->epi_15_enf_acumulado('HEPATITIS AGUDA TIPO B');
					$hepac = $this->reportes_model->epi_15_enf('HEPATITIS AGUDA TIPO C');
					$hepac_acumulado = $this->reportes_model->epi_15_enf_acumulado('HEPATITIS AGUDA TIPO C');
					$hepaotras = $this->reportes_model->epi_15_enf('HEPATITIS OTRAS AGUDA');
					$hepaotras_acumulado = $this->reportes_model->epi_15_enf_acumulado('HEPATITIS OTRAS AGUDA');
					$hepanoesp = $this->reportes_model->epi_15_enf('HEPATITIS NO ESPECIF. (B19.-)');
					$hepanoesp_acumulado = $this->reportes_model->epi_15_enf_acumulado('HEPATITIS NO ESPECIF. (B19.-)');
					$sinviral = $this->reportes_model->epi_15_enf('SINDROME VIRAL (B34.-)');
					$sinviral_acumulado = $this->reportes_model->epi_15_enf_acumulado('SINDROME VIRAL (B34.-)');
					$escabiosis = $this->reportes_model->epi_15_enf('ESCABIOSIS (B86)');
					$escabiosis_acumulado = $this->reportes_model->epi_15_enf_acumulado('ESCABIOSIS (B86)');
					$micosis = $this->reportes_model->epi_15_enf('MICOSIS SUPERFICIAL (B35-B36)');
					$micosis_acumulado = $this->reportes_model->epi_15_enf_acumulado('MICOSIS SUPERFICIAL (B35-B36)');
					$lepra = $this->reportes_model->epi_15_enf('LEPRA (A30)');
					$lepra_acumulado = $this->reportes_model->epi_15_enf_acumulado('LEPRA (A30)');
					//NEOPLASIAS
					$neoplasias = $this->reportes_model->epi_15_grupo('NEOPLASIAS');
					$neoplasias_acumulado = $this->reportes_model->epi_15_grupo_acumulado('NEOPLASIAS');
					//ENF.DE LA SANGRE Y ORG. HEMATOPOY
					$sangre = $this->reportes_model->epi_15_grupo('ENF.DE LA SANGRE Y ORG. HEMATOPOY');
					$sangre_acumulado = $this->reportes_model->epi_15_grupo_acumulado('ENF.DE LA SANGRE Y ORG. HEMATOPOY');
					//ENF. ENDOCRINAS, NUTRIC. Y METABOLICAS
					$endocrinas = $this->reportes_model->epi_15_grupo('ENF. ENDOCRINAS, NUTRIC. Y METABOLICAS');
					$endocrinas_acumulado = $this->reportes_model->epi_15_grupo_acumulado('ENF. ENDOCRINAS, NUTRIC. Y METABOLICAS');
					$tiroideos = $this->reportes_model->epi_15_enf('TRASTORNOS TIROIDEOS (E00-E07)');
					$tiroideos_acumulado = $this->reportes_model->epi_15_enf_acumulado('TRASTORNOS TIROIDEOS (E00-E07)');
					$diabetes_menor25 = $this->reportes_model->epi_15_menor('DIABETES MELLITUS', 25);
					$diabetes_menor25_acumulado = $this->reportes_model->epi_15_menor_acumulado('DIABETES MELLITUS', 25);
					$diabetes_mayor25 = $this->reportes_model->epi_15_mayor('DIABETES MELLITUS', 25);
					$diabetes_mayor25_acumulado = $this->reportes_model->epi_15_mayor_acumulado('DIABETES MELLITUS', 25);
					$deslev_menor15 = $this->reportes_model->epi_15_menor('DESNUTRICION LEVE', 15);
					$deslev_menor15_acumulado = $this->reportes_model->epi_15_menor_acumulado('DESNUTRICION LEVE', 15);
					$desmod_menor15 = $this->reportes_model->epi_15_menor('DESNUTRICION MODERADA', 15);
					$desmod_menor15_acumulado = $this->reportes_model->epi_15_menor_acumulado('DESNUTRICION MODERADA', 15);
					$desgra_menor15 = $this->reportes_model->epi_15_menor('DESNUTRICION GRAVE', 15);
					$desgra_menor15_acumulado = $this->reportes_model->epi_15_menor_acumulado('DESNUTRICION GRAVE', 15);
					$obecidad = $this->reportes_model->epi_15_enf('OBESIDAD (E66.-)');
					$obecidad_acumulado = $this->reportes_model->epi_15_enf_acumulado('OBESIDAD (E66.-)');
					//TRAST.MENTALES Y DEL COMPORTAMIENTO
					$mentales = $this->reportes_model->epi_15_grupo('TRAST.MENTALES Y DEL COMPORTAMIENTO');
					$mentales_acumulado = $this->reportes_model->epi_15_grupo_acumulado('TRAST.MENTALES Y DEL COMPORTAMIENTO');
					//ENF. DEL SISTEMA NERVIOSO
					$nervioso = $this->reportes_model->epi_15_grupo('ENF. DEL SISTEMA NERVIOSO');
					$nervioso_acumulado = $this->reportes_model->epi_15_grupo_acumulado('ENF. DEL SISTEMA NERVIOSO');
					$paralisis = $this->reportes_model->epi_15_menor('PARALISIS FLACIDA (G82.0)', 15);
					$paralisis_acumulado = $this->reportes_model->epi_15_menor_acumulado('PARALISIS FLACIDA (G82.0)', 15);
					$epilepsia = $this->reportes_model->epi_15_enf('EPILEPSIA (G40-G41)');
					$epilepsia_acumulado = $this->reportes_model->epi_15_enf_acumulado('EPILEPSIA (G40-G41)');
					$migrana = $this->reportes_model->epi_15_enf('MIGRAÑA (G43.-)');
					$migrana_acumulado = $this->reportes_model->epi_15_enf_acumulado('MIGRAÑA (G43.-)');
					//ENF.DEL OJO Y SUS ANEXOS
					$ojo = $this->reportes_model->epi_15_grupo('ENF.DEL OJO Y SUS ANEXOS');
					$ojo_acumulado = $this->reportes_model->epi_15_grupo_acumulado('ENF.DEL OJO Y SUS ANEXOS');
					$conjuntivitis = $this->reportes_model->epi_15_enf('CONJUNTIVITIS (H10)');
					$conjuntivitis_acumulado = $this->reportes_model->epi_15_enf_acumulado('CONJUNTIVITIS (H10)');
					$otrasojo = $this->reportes_model->epi_15_enf('OTRAS ENF. DEL OJO (H00-H09,H11-H59)');
					$otrasojo_acumulado = $this->reportes_model->epi_15_enf_acumulado('OTRAS ENF. DEL OJO (H00-H09,H11-H59)');
					//ENF. DEL OIDO Y APOFISIS MASTOIDES
					$oido = $this->reportes_model->epi_15_grupo('ENF. DEL OIDO Y APOFISIS MASTOIDES');
					$oido_acumulado = $this->reportes_model->epi_15_grupo_acumulado('ENF. DEL OIDO Y APOFISIS MASTOIDES');
					$otiext = $this->reportes_model->epi_15_enf('OTITIS EXTERNA (H60.-)');
					$otiext_acumulado = $this->reportes_model->epi_15_enf_acumulado('OTITIS EXTERNA (H60.-)');
					$otimed_menor5 = $this->reportes_model->epi_15_menor('OTITIS MEDIA AGUDA', 5);
					$otimed_menor5_acumulado = $this->reportes_model->epi_15_menor_acumulado('OTITIS MEDIA AGUDA', 5);
					$otimed_mayor5 = $this->reportes_model->epi_15_mayor('OTITIS MEDIA AGUDA', 5);
					$otimed_mayor5_acumulado = $this->reportes_model->epi_15_mayor_acumulado('OTITIS MEDIA AGUDA', 5);
					$oticro = $this->reportes_model->epi_15_enf('OTITIS MEDIA CRONICA (H65.2-H65.9)');
					$oticro_acumulado = $this->reportes_model->epi_15_enf_acumulado('OTITIS MEDIA CRONICA (H65.2-H65.9)');
					//ENFERM. DEL SISTEMA CIRCULATORIO
					$circulatorio = $this->reportes_model->epi_15_grupo('ENFERM. DEL SISTEMA CIRCULATORIO');
					$circulatorio_acumulado = $this->reportes_model->epi_15_grupo_acumulado('ENFERM. DEL SISTEMA CIRCULATORIO');
					$fiereu = $this->reportes_model->epi_15_enf('FIEBRE REUMAT. Y ENF.CARD.REUM. CRON. (IOO-IO9)');
					$fiereu_acumulado = $this->reportes_model->epi_15_enf_acumulado('FIEBRE REUMAT. Y ENF.CARD.REUM. CRON. (IOO-IO9)');
					$hiper_menor15 = $this->reportes_model->epi_15_menor('HIPERTENSION ARTERIAL', 15);
					$hiper_menor15_acumulado = $this->reportes_model->epi_15_menor_acumulado('HIPERTENSION ARTERIAL', 15);
					$hiper_entre15 = $this->reportes_model->epi_15_entre('HIPERTENSION ARTERIAL', 15, 45);
					$hiper_entre15_acumulado = $this->reportes_model->epi_15_entre_acumulado('HIPERTENSION ARTERIAL', 15, 45);
					$hiper_mayor15 = $this->reportes_model->epi_15_mayor('HIPERTENSION ARTERIAL', 45);
					$hiper_mayor15_acumulado = $this->reportes_model->epi_15_mayor_acumulado('HIPERTENSION ARTERIAL', 45);
					$isquemicas = $this->reportes_model->epi_15_enf('ENF.ISQUEMICAS DEL CORAZON (I20,I22-I25)');
					$isquemicas_acumulado = $this->reportes_model->epi_15_enf_acumulado('ENF.ISQUEMICAS DEL CORAZON (I20,I22-I25)');
					$infarto_menor45 = $this->reportes_model->epi_15_menor('INFARTO AGUDO DEL MIOCARDIO', 45);
					$infarto_menor45_acumulado = $this->reportes_model->epi_15_menor_acumulado('INFARTO AGUDO DEL MIOCARDIO', 45);
					$infarto_mayor45 = $this->reportes_model->epi_15_mayor('INFARTO AGUDO DEL MIOCARDIO', 45);
					$infarto_mayor45_acumulado = $this->reportes_model->epi_15_mayor_acumulado('INFARTO AGUDO DEL MIOCARDIO', 45);
					$cerebrovasculares = $this->reportes_model->epi_15_enf('ENF. CEREBROVASCULARES (I60-I69)');
					$cerebrovasculares_acumulado = $this->reportes_model->epi_15_enf_acumulado('ENF. CEREBROVASCULARES (I60-I69)');
					$varices = $this->reportes_model->epi_15_enf('VARICES DE MIEMBROS INFERIORES (I83.-)');
					$varices_acumulado = $this->reportes_model->epi_15_enf_acumulado('VARICES DE MIEMBROS INFERIORES (I83.-)');
					//ENFERM. DEL SISTEMA RESPIRATORIO
					$respiratorio = $this->reportes_model->epi_15_grupo('ENFERM. DEL SISTEMA RESPIRATORIO');
					$respiratorio_acumulado = $this->reportes_model->epi_15_grupo_acumulado('ENFERM. DEL SISTEMA RESPIRATORIO');
					$farinmenor5 = $this->reportes_model->epi_15_menor('FARINGITIS AGUDA (J02.-)', 5);
					$farinmenor5_acumulado = $this->reportes_model->epi_15_menor_acumulado('FARINGITIS AGUDA (J02.-)', 5);
					$farinmayor5 = $this->reportes_model->epi_15_mayor('FARINGITIS AGUDA (J02.-)', 5);
					$farinmayor5_acumulado = $this->reportes_model->epi_15_mayor_acumulado('FARINGITIS AGUDA (J02.-)', 5);
					$amigdalitis = $this->reportes_model->epi_15_enf('AMIGDALITIS AGUDA (J03.-)');
					$amigdalitis_acumulado = $this->reportes_model->epi_15_enf_acumulado('AMIGDALITIS AGUDA (J03.-)');
					$rino_menor5 = $this->reportes_model->epi_15_menor('RINOFARINGITIS AGUDA (J00)', 5);
					$rino_menor5_acumulado = $this->reportes_model->epi_15_menor_acumulado('RINOFARINGITIS AGUDA (J00)', 5);
					$rino_mayor5 = $this->reportes_model->epi_15_mayor('RINOFARINGITIS AGUDA (J00)', 5);
					$rino_mayor5_acumulado = $this->reportes_model->epi_15_mayor_acumulado('RINOFARINGITIS AGUDA (J00)', 5);
					$neumonia_menor1 = $this->reportes_model->epi_15_menor('NEUMONIAS (J12-J18)', 1);
					$neumonia_menor1_acumulado = $this->reportes_model->epi_15_menor_acumulado('NEUMONIAS (J12-J18)', 1);
					$neumonia_uno4 = $this->reportes_model->epi_15_entre('NEUMONIAS (J12-J18)', 1, 5);
					$neumonia_uno4_acumulado = $this->reportes_model->epi_15_entre_acumulado('NEUMONIAS (J12-J18)', 1, 5);
					$neumonia_mayor5 = $this->reportes_model->epi_15_mayor('NEUMONIAS (J12-J18)', 5);
					$neumonia_mayor5_acumulado = $this->reportes_model->epi_15_mayor_acumulado('NEUMONIAS (J12-J18)', 5);
					$bronquiolitis = $this->reportes_model->epi_15_menor('BRONQUIOLITIS AGUDA', 2);
					$bronquiolitis_acumulado = $this->reportes_model->epi_15_menor_acumulado('BRONQUIOLITIS AGUDA', 2);
					$bronquitis = $this->reportes_model->epi_15_enf('BRONQUITIS AGUDA (J20.-)');
					$bronquitis_acumulado = $this->reportes_model->epi_15_enf_acumulado('BRONQUITIS AGUDA (J20.-)');
					$bronco = $this->reportes_model->epi_15_enf('BRONQUITIS CRONICA (J41,J42,J44.8)');
					$bronco_acumulado = $this->reportes_model->epi_15_enf_acumulado('BRONQUITIS CRONICA (J41,J42,J44.8)');
					$asma_menor10 = $this->reportes_model->epi_15_menor('ASMA (J45)', 10);
					$asma_menor10_acumulado = $this->reportes_model->epi_15_menor_acumulado('ASMA (J45)', 10);
					$asma_mayor10 = $this->reportes_model->epi_15_mayor('ASMA (J45)', 10);
					$asma_mayor10_acumulado = $this->reportes_model->epi_15_mayor_acumulado('ASMA (J45)', 10);
					$rinitis = $this->reportes_model->epi_15_enf('RINITIS ALERGICA (J30.1-J30.4)');
					$rinitis_acumulado = $this->reportes_model->epi_15_enf_acumulado('RINITIS ALERGICA (J30.1-J30.4)');
					//ENFERMEDADES DEL SISTEMA DIGESTIVO
					$digestivo = $this->reportes_model->epi_15_grupo('ENFERMEDADES DEL SISTEMA DIGESTIVO');
					$digestivo_acumulado = $this->reportes_model->epi_15_grupo_acumulado('ENFERMEDADES DEL SISTEMA DIGESTIVO');
					$caries = $this->reportes_model->epi_15_enf('CARIES DENTAL (K02.-)');
					$caries_acumulado = $this->reportes_model->epi_15_enf_acumulado('CARIES DENTAL (K02.-)');
					$gingivitis = $this->reportes_model->epi_15_enf('GINGIVITIS (K05.0-K05.1)');
					$gingivitis_acumulado = $this->reportes_model->epi_15_enf_acumulado('GINGIVITIS (K05.0-K05.1)');
					$estomatitis = $this->reportes_model->epi_15_enf('ESTOMATITIS (K12.0-K12.1)');
					$estomatitis_acumulado = $this->reportes_model->epi_15_enf_acumulado('ESTOMATITIS (K12.0-K12.1)');
					$gastritis = $this->reportes_model->epi_15_enf('GASTRITIS (K29.-)');
					$gastritis_acumulado = $this->reportes_model->epi_15_enf_acumulado('GASTRITIS (K29.-)');
					$apendicitis = $this->reportes_model->epi_15_enf('APENDICITIS TODAS FORMAS (K35-K37)');
					$apendicitis_acumulado = $this->reportes_model->epi_15_enf_acumulado('APENDICITIS TODAS FORMAS (K35-K37)');
					$hernias = $this->reportes_model->epi_15_enf('HERNIAS CAVIDAD ABDOMINAL (K40-K46)');
					$hernias_acumulado = $this->reportes_model->epi_15_enf_acumulado('HERNIAS CAVIDAD ABDOMINAL (K40-K46)');
					$colelitiasis = $this->reportes_model->epi_15_enf('COLELITIASIS (K80.-)');
					$colelitiasis_acumulado = $this->reportes_model->epi_15_enf_acumulado('COLELITIASIS (K80.-)');
					$pancreatitis = $this->reportes_model->epi_15_enf('PANCREATITIS AGUDA (K85)');
					$pancreatitis_acumulado = $this->reportes_model->epi_15_enf_acumulado('PANCREATITIS AGUDA (K85)');
					$otrasestomago = $this->reportes_model->epi_15_enf('OTRAS ENF. ESOF.,ESTOMAGO E INTESTINO');
					$otrasestomago_acumulado = $this->reportes_model->epi_15_enf_acumulado('OTRAS ENF. ESOF.,ESTOMAGO E INTESTINO');
					//ENF.DE LA PIEL Y TEJ. SUBCUTANEO
					$piel = $this->reportes_model->epi_15_grupo('ENF.DE LA PIEL Y TEJ. SUBCUTANEO');
					$piel_acumulado = $this->reportes_model->epi_15_grupo_acumulado('ENF.DE LA PIEL Y TEJ. SUBCUTANEO');
					$abcesos = $this->reportes_model->epi_15_enf('ABSCESOS (L02.-)');
					$abcesos_acumulado = $this->reportes_model->epi_15_enf_acumulado('ABSCESOS (L02.-)');
					$celulitis = $this->reportes_model->epi_15_enf('CELULITIS (L03.-)');
					$celulitis_acumulado = $this->reportes_model->epi_15_enf_acumulado('CELULITIS (L03.-)');
					$dermatitis = $this->reportes_model->epi_15_enf('DERMATITIS (L20-L30)');
					$dermatitis_acumulado = $this->reportes_model->epi_15_enf_acumulado('DERMATITIS (L20-L30)');
					$piodermitis = $this->reportes_model->epi_15_enf('PIODERMITIS (L08.0)');
					$piodermitis_acumulado = $this->reportes_model->epi_15_enf_acumulado('PIODERMITIS (L08.0)');
					$urticaria = $this->reportes_model->epi_15_enf('URTICARIA (L50.-)');
					$urticaria_acumulado = $this->reportes_model->epi_15_enf_acumulado('URTICARIA (L50.-)');
					//ENF.SIST.OSTEOMUSC. Y TEJ. CONJUNTIVO
					$conjutivo = $this->reportes_model->epi_15_grupo('ENF.SIST.OSTEOMUSC. Y TEJ. CONJUNTIVO');
					$conjutivo_acumulado = $this->reportes_model->epi_15_grupo_acumulado('ENF.SIST.OSTEOMUSC. Y TEJ. CONJUNTIVO');
					$artritis = $this->reportes_model->epi_15_enf('ARTRITIS (M00-M14)');
					$artritis_acumulado = $this->reportes_model->epi_15_enf_acumulado('ARTRITIS (M00-M14)');
					$mialgias = $this->reportes_model->epi_15_enf('MIALGIAS (M79.1)');
					$mialgias_acumulado = $this->reportes_model->epi_15_enf_acumulado('MIALGIAS (M79.1)');
					$neuralgias = $this->reportes_model->epi_15_enf('NEURALGIAS (M79.2)');
					$neuralgias_acumulado = $this->reportes_model->epi_15_enf_acumulado('NEURALGIAS (M79.2)');
					$bursitis = $this->reportes_model->epi_15_enf('BURSITIS (M70,M71,M75-M77)');
					$bursitis_acumulado = $this->reportes_model->epi_15_enf_acumulado('BURSITIS (M70,M71,M75-M77)');
					//ENF.DEL SISTEMA GENITO-URINARIO
					$urinario = $this->reportes_model->epi_15_grupo('ENF.DEL SISTEMA GENITO-URINARIO');
					$urinario_acumulado = $this->reportes_model->epi_15_grupo_acumulado('ENF.DEL SISTEMA GENITO-URINARIO');
					$infuri = $this->reportes_model->epi_15_enf('INFECCION URINARIA (N39.0)');
					$infuri_acumulado = $this->reportes_model->epi_15_enf_acumulado('INFECCION URINARIA (N39.0)');
					$uretritis = $this->reportes_model->epi_15_enf('URETRITIS NO GONOCÓCCICA (N34.1)');
					$uretritis_acumulado = $this->reportes_model->epi_15_enf_acumulado('URETRITIS NO GONOCÓCCICA (N34.1)');
					$leucorrea = $this->reportes_model->epi_15_enf('LEUCORREA NO ESPECIFICADA (N89.8)');
					$leucorrea_acumulado = $this->reportes_model->epi_15_enf_acumulado('LEUCORREA NO ESPECIFICADA (N89.8)');
					$hemogen = $this->reportes_model->epi_15_enf('HEMORR. GENITAL NO ESPEC. (N93.9)');
					$hemogen_acumulado = $this->reportes_model->epi_15_enf_acumulado('HEMORR. GENITAL NO ESPEC. (N93.9)');
					$colico = $this->reportes_model->epi_15_enf('COLICO NEFRITICO (N23)');
					$colico_acumulado = $this->reportes_model->epi_15_enf_acumulado('COLICO NEFRITICO (N23)');
					$dismenorrea = $this->reportes_model->epi_15_enf('DISMENORREA NO ESPECIFICADA (N94.6)');
					$dismenorrea_acumulado = $this->reportes_model->epi_15_enf_acumulado('DISMENORREA NO ESPECIFICADA (N94.6)');
					$salpingitis = $this->reportes_model->epi_15_enf('SALPINGITIS Y OOFORITIS (N70.-)');
					$salpingitis_acumulado = $this->reportes_model->epi_15_enf_acumulado('SALPINGITIS Y OOFORITIS (N70.-)');
					$utero = $this->reportes_model->epi_15_enf('ENFERM. INFLAMATORIAS DEL UTERO (N71.-,N72.-)');
					$utero_acumulado = $this->reportes_model->epi_15_enf_acumulado('ENFERM. INFLAMATORIAS DEL UTERO (N71.-,N72.-)');
					//EMBARAZO, PARTO Y PUERPERIO
					$embarazo = $this->reportes_model->epi_15_grupo('EMBARAZO, PARTO Y PUERPERIO');
					$embarazo_acumulado = $this->reportes_model->epi_15_grupo_acumulado('EMBARAZO, PARTO Y PUERPERIO');
					$hemoemb = $this->reportes_model->epi_15_enf('HEMORR.3er.TRIM.EMBARAZO (O20,O44-O46)');
					$hemoemb_acumulado = $this->reportes_model->epi_15_enf_acumulado('HEMORR.3er.TRIM.EMBARAZO (O20,O44-O46)');
					$preclampsia = $this->reportes_model->epi_15_enf('PRE-ECLAMPSIA (O13.-,O14.-)');
					$preclampsia_acumulado = $this->reportes_model->epi_15_enf_acumulado('PRE-ECLAMPSIA (O13.-,O14.-)');
					$eclampsia = $this->reportes_model->epi_15_enf('ECLAMPSIA (O15.-)');
					$eclampsia_acumulado = $this->reportes_model->epi_15_enf_acumulado('ECLAMPSIA (O15.-)');
					$falloaborto = $this->reportes_model->epi_15_enf('INTENTO FALLIDO DE ABORTO (O07.-)');
					$falloaborto_acumulado = $this->reportes_model->epi_15_enf_acumulado('INTENTO FALLIDO DE ABORTO (O07.-)');
					$aborto = $this->reportes_model->epi_15_enf('ABORTO (O00-O06,O08)');
					$aborto_acumulado = $this->reportes_model->epi_15_enf_acumulado('ABORTO (O00-O06,O08)');
					$mamarios = $this->reportes_model->epi_15_enf('TRASTORNOS MAMARIOS DEL PUERPERIO (O91-O92)');
					$mamarios_acumulado = $this->reportes_model->epi_15_enf_acumulado('TRASTORNOS MAMARIOS DEL PUERPERIO (O91-O92)');
					$otrasemb = $this->reportes_model->epi_15_enf('OTRAS COMPLIC.DEL EMB.PART. Y PUERPERIO');
					$otrasemb_acumulado = $this->reportes_model->epi_15_enf_acumulado('OTRAS COMPLIC.DEL EMB.PART. Y PUERPERIO');
					//SINT.SIG. Y HALLAZGOS ANORMALES
					$anormal = $this->reportes_model->epi_15_grupo('SINT.SIG. Y HALLAZGOS ANORMALES');
					$anormal_acumulado = $this->reportes_model->epi_15_grupo_acumulado('SINT.SIG. Y HALLAZGOS ANORMALES');
					$cefalea = $this->reportes_model->epi_15_enf('CEFALEA (R51)');
					$cefalea_acumulado = $this->reportes_model->epi_15_enf_acumulado('CEFALEA (R51)');
					$fiebre = $this->reportes_model->epi_15_enf('FIEBRE (R50.-)');
					$fiebre_acumulado = $this->reportes_model->epi_15_enf_acumulado('FIEBRE (R50.-)');
					$convulsiones = $this->reportes_model->epi_15_enf('CONVULSIONES (R56.-)');
					$convulsiones_acumulado = $this->reportes_model->epi_15_enf_acumulado('CONVULSIONES (R56.-)');
					$abdomen = $this->reportes_model->epi_15_enf('ABDOMEN AGUDO (R10.0)');
					$abdomen_acumulado = $this->reportes_model->epi_15_enf_acumulado('ABDOMEN AGUDO (R10.0)');
					$abdominal = $this->reportes_model->epi_15_enf('DOLOR ABDOMINAL (R10.4)');
					$abdominal_acumulado = $this->reportes_model->epi_15_enf_acumulado('DOLOR ABDOMINAL (R10.4)');
					//TRAUMATISMOS Y ENVENENAMIENTOS
					$veneno = $this->reportes_model->epi_15_grupo('TRAUMATISMOS Y ENVENENAMIENTOS');
					$veneno_acumulado = $this->reportes_model->epi_15_grupo_acumulado('TRAUMATISMOS Y ENVENENAMIENTOS');
					$quemaduras = $this->reportes_model->epi_15_enf('QUEMADURAS (T20-T32)');
					$quemaduras_acumulado = $this->reportes_model->epi_15_enf_acumulado('QUEMADURAS (T20-T32)');
					$envendro = $this->reportes_model->epi_15_enf('ENVENEN. POR DROG. Y OTRAS SUST. (T36-T50)');
					$envendro_acumulado = $this->reportes_model->epi_15_enf_acumulado('ENVENEN. POR DROG. Y OTRAS SUST. (T36-T50)');
					$heridas = $this->reportes_model->epi_15_enf('HERIDAS');
					$heridas_acumulado = $this->reportes_model->epi_15_enf_acumulado('HERIDAS');
					$fracturas = $this->reportes_model->epi_15_enf('FRACTURAS');
					$fracturas_acumulado = $this->reportes_model->epi_15_enf_acumulado('FRACTURAS');
					$luxaciones = $this->reportes_model->epi_15_enf('LUXACIONES Y ESGUINCES');
					$luxaciones_acumulado = $this->reportes_model->epi_15_enf_acumulado('LUXACIONES Y ESGUINCES');
					$toxi = $this->reportes_model->epi_15_enf('INTOXICACION POR PLAGUICIDAS (T60.-)');
					$toxi_acumulado = $this->reportes_model->epi_15_enf_acumulado('INTOXICACION POR PLAGUICIDAS (T60.-)');
					$cuerpo = $this->reportes_model->epi_15_enf('CUERPO EXTRAÑO EN ORIFICIO NATURAL (T15-T19)');
					$cuerpo_acumulado = $this->reportes_model->epi_15_enf_acumulado('CUERPO EXTRAÑO EN ORIFICIO NATURAL (T15-T19)');
					$otrostrau = $this->reportes_model->epi_15_enf('OTROS TRAUMATISMOS');
					$otrostrau_acumulado = $this->reportes_model->epi_15_enf_acumulado('OTROS TRAUMATISMOS');
					//CAUSAS EXTERNAS DE MORBILIDAD Y MORT.
					$externas = $this->reportes_model->epi_15_grupo('CAUSAS EXTERNAS DE MORBILIDAD Y MORT.');
					$externas_acumulado = $this->reportes_model->epi_15_grupo_acumulado('CAUSAS EXTERNAS DE MORBILIDAD Y MORT.');
					$terrestre = $this->reportes_model->epi_15_enf('ACCID. TRANSPORT. TERRESTRE (V01-V89)');
					$terrestre_acumulado = $this->reportes_model->epi_15_enf_acumulado('ACCID. TRANSPORT. TERRESTRE (V01-V89)');
					$picadura = $this->reportes_model->epi_15_enf('PICADURA DE INSEC. Y OTROS ANIM. (X21-X27,X29)');
					$picadura_acumulado = $this->reportes_model->epi_15_enf_acumulado('PICADURA DE INSEC. Y OTROS ANIM. (X21-X27,X29)');
					$ofidico = $this->reportes_model->epi_15_enf('EMPOZOÑAMIENTO OFIDICO (X20,W59.-)');
					$ofidico_acumulado = $this->reportes_model->epi_15_enf_acumulado('EMPOZOÑAMIENTO OFIDICO (X20,W59.-)');
					$morabia = $this->reportes_model->epi_15_enf('MORDEDURAS SOSPECHOSAS DE RABIA (A82)');
					$morabia_acumulado = $this->reportes_model->epi_15_enf_acumulado('MORDEDURAS SOSPECHOSAS DE RABIA (A82)');
					$otrosacc = $this->reportes_model->epi_15_enf('OTROS ACCIDENTES');
					$otrosacc_acumulado = $this->reportes_model->epi_15_enf_acumulado('OTROS ACCIDENTES');
					$hogar = $this->reportes_model->epi_15_enf('ACCIDENTES DEL HOGAR');
					$hogar_acumulado = $this->reportes_model->epi_15_enf_acumulado('ACCIDENTES DEL HOGAR');
					$laborales = $this->reportes_model->epi_15_enf('ACCIDENTES LABORALES');
					$laborales_acumulado = $this->reportes_model->epi_15_enf_acumulado('ACCIDENTES LABORALES');
					$advmed = $this->reportes_model->epi_15_enf('EFECTOS ADVERSOS DE MEDICAMENTOS (Y40-Y57)');
					$advmed_acumulado = $this->reportes_model->epi_15_enf_acumulado('EFECTOS ADVERSOS DE MEDICAMENTOS (Y40-Y57)');
					$advac = $this->reportes_model->epi_15_enf('EFECTOS ADVERSOS DE VACUNAS (Y58-Y59)');
					$advac_acumulado = $this->reportes_model->epi_15_enf_acumulado('EFECTOS ADVERSOS DE VACUNAS (Y58-Y59)');
					//VIOLENCIA FAMILIAR
					$violencia = $this->reportes_model->epi_15_grupo('VIOLENCIA FAMILIAR');
					$violencia_acumulado = $this->reportes_model->epi_15_grupo_acumulado('VIOLENCIA FAMILIAR');
					//VIOLENCIA FISICA
					$viofis = $this->reportes_model->epi_15_enf('VIOLENCIA FISICA');
					$viofis_acumulado = $this->reportes_model->epi_15_enf_acumulado('VIOLENCIA FISICA');
					$fisica_ninos = $this->reportes_model->epi_15_sexo('VIOLENCIA FISICA', 0, 12, 'M');
					$fisica_ninos_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA FISICA', 0, 12, 'M');
					$fisica_ninas = $this->reportes_model->epi_15_sexo('VIOLENCIA FISICA', 0, 12, 'F');
					$fisica_ninas_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA FISICA', 0, 12, 'F');
					$fisica_teen_h = $this->reportes_model->epi_15_sexo('VIOLENCIA FISICA', 12, 18, 'M');
					$fisica_teen_h_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA FISICA', 12, 18, 'M');
					$fisica_teen_m = $this->reportes_model->epi_15_sexo('VIOLENCIA FISICA', 12, 18, 'F');
					$fisica_teen_m_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA FISICA', 12, 18, 'F');
					$fisica_adulto = $this->reportes_model->epi_15_sexo('VIOLENCIA FISICA', 18, 65, 'M');
					$fisica_adulto_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA FISICA', 18, 65, 'M');
					$fisica_adulta = $this->reportes_model->epi_15_sexo('VIOLENCIA FISICA', 18, 60, 'F');
					$fisica_adulta_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA FISICA', 18, 60, 'F');
					$fisica_viejo = $this->reportes_model->epi_15_sexo('VIOLENCIA FISICA', 65, 500, 'M');
					$fisica_viejo_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA FISICA', 65, 500, 'M');
					$fisica_vieja = $this->reportes_model->epi_15_sexo('VIOLENCIA FISICA', 60, 500, 'F');
					$fisica_vieja_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA FISICA', 60, 500, 'F');
					//VIOLENCIA PSICOLOGICA
					$viopsico = $this->reportes_model->epi_15_enf('VIOLENCIA PSICOLOGICA');
					$viopsico_acumulado = $this->reportes_model->epi_15_enf_acumulado('VIOLENCIA PSICOLOGICA');
					$psico_ninos = $this->reportes_model->epi_15_sexo('VIOLENCIA PSICOLOGICA', 0, 12, 'M');
					$psico_ninos_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA PSICOLOGICA', 0, 12, 'M');
					$psico_ninas = $this->reportes_model->epi_15_sexo('VIOLENCIA PSICOLOGICA', 0, 12, 'F');
					$psico_ninas_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA PSICOLOGICA', 0, 12, 'F');
					$psico_teen_h = $this->reportes_model->epi_15_sexo('VIOLENCIA PSICOLOGICA', 12, 18, 'M');
					$psico_teen_h_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA PSICOLOGICA', 12, 18, 'M');
					$psico_teen_m = $this->reportes_model->epi_15_sexo('VIOLENCIA PSICOLOGICA', 12, 18, 'F');
					$psico_teen_m_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA PSICOLOGICA', 12, 18, 'F');
					$psico_adulto = $this->reportes_model->epi_15_sexo('VIOLENCIA PSICOLOGICA', 18, 65, 'M');
					$psico_adulto_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA PSICOLOGICA', 18, 65, 'M');
					$psico_adulta = $this->reportes_model->epi_15_sexo('VIOLENCIA PSICOLOGICA', 18, 60, 'F');
					$psico_adulta_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA PSICOLOGICA', 18, 60, 'F');
					$psico_viejo = $this->reportes_model->epi_15_sexo('VIOLENCIA PSICOLOGICA', 65, 500, 'M');
					$psico_viejo_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA PSICOLOGICA', 65, 500, 'M');
					$psico_vieja = $this->reportes_model->epi_15_sexo('VIOLENCIA PSICOLOGICA', 60, 500, 'F');
					$psico_vieja_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA PSICOLOGICA', 60, 500, 'F');
					//VIOLENCIA SEXUAL
					$viosexual = $this->reportes_model->epi_15_enf('VIOLENCIA SEXUAL');
					$viosexual_acumulado = $this->reportes_model->epi_15_enf_acumulado('VIOLENCIA SEXUAL');
					$sexual_ninos = $this->reportes_model->epi_15_sexo('VIOLENCIA SEXUAL', 0, 12, 'M');
					$sexual_ninos_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA SEXUAL', 0, 12, 'M');
					$sexual_ninas = $this->reportes_model->epi_15_sexo('VIOLENCIA SEXUAL', 0, 12, 'F');
					$sexual_ninas_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA SEXUAL', 0, 12, 'F');
					$sexual_teen_h = $this->reportes_model->epi_15_sexo('VIOLENCIA SEXUAL', 12, 18, 'M');
					$sexual_teen_h_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA SEXUAL', 12, 18, 'M');
					$sexual_teen_m = $this->reportes_model->epi_15_sexo('VIOLENCIA SEXUAL', 12, 18, 'F');
					$sexual_teen_m_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA SEXUAL', 12, 18, 'F');
					$sexual_adulto = $this->reportes_model->epi_15_sexo('VIOLENCIA SEXUAL', 18, 65, 'M');
					$sexual_adulto_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA SEXUAL', 18, 65, 'M');
					$sexual_adulta = $this->reportes_model->epi_15_sexo('VIOLENCIA SEXUAL', 18, 60, 'F');
					$sexual_adulta_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA SEXUAL', 18, 60, 'F');
					$sexual_viejo = $this->reportes_model->epi_15_sexo('VIOLENCIA SEXUAL', 65, 500, 'M');
					$sexual_viejo_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA SEXUAL', 65, 500, 'M');
					$sexual_vieja = $this->reportes_model->epi_15_sexo('VIOLENCIA SEXUAL', 60, 500, 'F');
					$sexual_vieja_acumulado = $this->reportes_model->epi_15_sexo_acumulado('VIOLENCIA SEXUAL', 60, 500, 'F');
					//OTRAS CAUSAS DE CONSULTA
					$otros = $this->reportes_model->epi_15_grupo('OTRAS CAUSAS DE CONSULTA');
					$otros_acumulado = $this->reportes_model->epi_15_grupo_acumulado('OTRAS CAUSAS DE CONSULTA');
					//TOTAL CAUSAS DE CONSULTA
					$total_consultas = $this->reportes_model->total_consultas();
					$total_consultas_acumulado = $this->reportes_model->total_consultas_acumulado();
					$data = array(
						'mes' => $this->input->post('mes'),
						'year' => $this->input->post('year'),
						//TRANSMISION HIDRICA Y ALIMENTOS
						'alimentos' => $alimentos,
						'alimentos_acumulado' => $alimentos_acumulado,
						'colera' => $colera,
						'colera_acumulado' => $colera_acumulado,
						'amibiasis' => $amibiasis,
						'amibiasis_acumulado' => $amibiasis_acumulado,
						'diarrea_menor1' => $diarrea_menor1,
						'diarrea_menor1_acumulado' => $diarrea_menor1_acumulado,
						'diarrea_uno4' => $diarrea_uno4,
						'diarrea_uno4_acumulado' => $diarrea_uno4_acumulado,
						'diarrea_mayor5' => $diarrea_mayor5,
						'diarrea_mayor5_acumulado' => $diarrea_mayor5_acumulado,
						'giardiasis' => $giardiasis,
						'giardiasis_acumulado' => $giardiasis_acumulado,
						'helmintiasis' => $helmintiasis,
						'helmintiasis_acumulado' => $helmintiasis_acumulado,
						'tifoidea' => $tifoidea,
						'tifoidea_acumulado' => $tifoidea_acumulado,
						'etabrote' => $etabrote,
						'etabrote_acumulado' => $etabrote_acumulado,
						'etacaso' => $etacaso,
						'etacaso_acumulado' => $etacaso_acumulado,
						'hepa' => $hepa,
						'hepa_acumulado' => $hepa_acumulado,
						//TRANSMISION AEREA
						'aerea' => $aerea,
						'aerea_acumulado' => $aerea_acumulado,
						'tuberculosis' => $tuberculosis,
						'tuberculosis_acumulado' => $tuberculosis_acumulado,
						'influenza' => $influenza,
						'influenza_acumulado' => $influenza_acumulado,
						//TRANSMISION SEXUAL
						'sexual' => $sexual,
						'sexual_acumulado' => $sexual_acumulado,
						'gonorrea' => $gonorrea,
						'gonorrea_acumulado' => $gonorrea_acumulado,
						'sifilis' => $sifilis,
						'sifilis_acumulado' => $sifilis_acumulado,
						'sif_cong' => $sif_cong,
						'sif_cong_acumulado' => $sif_cong_acumulado,
						'vih' => $vih,
						'vih_acumulado' => $vih_acumulado,
						'sida' => $sida,
						'sida_acumulado' => $sida_acumulado,
						//PREVENIBLES POR VACUNAS
						'vacunas' => $vacunas,
						'vacunas_acumulado' => $vacunas_acumulado,
						'poliomielitis' => $poliomielitis,
						'poliomielitis_acumulado' => $poliomielitis_acumulado,
						'tosferina' => $tosferina,
						'tosferina_acumulado' => $tosferina_acumulado,
						'parotiditis' => $parotiditis,
						'parotiditis_acumulado' => $parotiditis_acumulado,
						'tetaneo' => $tetaneo,
						'tetaneo_acumulado' => $tetaneo_acumulado,
						'tetaobs' => $tetaobs,
						'tetaobs_acumulado' => $tetaobs_acumulado,
						'otrosteta' => $otrosteta,
						'otrosteta_acumulado' => $otrosteta_acumulado,
						'difteria' => $difteria,
						'difteria_acumulado' => $difteria_acumulado,
						'sarampion' => $sarampion,
						'sarampion_acumulado' => $sarampion_acumulado,
						'rubeola' => $rubeola,
						'rubeola_acumulado' => $rubeola_acumulado,
						//TRANSMITIDAS POR VECTORES
						'vectores' => $vectores,
						'vectores_acumulado' => $vectores_acumulado,
						'dengue' => $dengue,
						'dengue_acumulado' => $dengue_acumulado,
						'denguehemo' => $denguehemo,
						'denguehemo_acumulado' => $denguehemo_acumulado,
						'encefalitis' => $encefalitis,
						'encefalitis_acumulado' => $encefalitis_acumulado,
						'amarrilla' => $amarrilla,
						'amarrilla_acumulado' => $amarrilla_acumulado,
						'falciparum' => $falciparum,
						'falciparum_acumulado' => $falciparum_acumulado,
						'vivax' => $vivax,
						'vivax_acumulado' => $vivax_acumulado,
						'malariae' => $malariae,
						'malariae_acumulado' => $malariae_acumulado,
						'palumixta' => $palumixta,
						'palumixta_acumulado' => $palumixta_acumulado,
						'leishmaniasis' => $leishmaniasis,
						'leishmaniasis_acumulado' => $leishmaniasis_acumulado,
						'chagas' => $chagas,
						'chagas_acumulado' => $chagas_acumulado,
						'oncocercosis' => $oncocercosis,
						'oncocercosis_acumulado' => $oncocercosis_acumulado,
						//ENFERMEDADES ZOONOTICAS
						'zoo' => $zoo,
						'zoo_acumulado' => $zoo_acumulado,
						'rabia' => $rabia,
						'rabia_acumulado' => $rabia_acumulado,
						'fiebrehemo' => $fiebrehemo,
						'fiebrehemo_acumulado' => $fiebrehemo_acumulado,
						'leptospirosis' => $leptospirosis,
						'leptospirosis_acumulado' => $leptospirosis_acumulado,
						'brucelosis' => $brucelosis,
						'brucelosis_acumulado' => $brucelosis_acumulado,
						'cisticercosis' => $cisticercosis,
						'cisticercosis_acumulado' => $cisticercosis_acumulado,
						//OTRAS ENF. TRANSMISIBLES
						'transmisibles' => $transmisibles,
						'transmisibles_acumulado' => $transmisibles_acumulado,
						'menviral' => $menviral,
						'menviral_acumulado' => $menviral_acumulado,
						'menbac' => $menbac,
						'menbac_acumulado' => $menbac_acumulado,
						'menmenin' => $menmenin,
						'menmenin_acumulado' => $menmenin_acumulado,
						'meningo' => $meningo,
						'meningo_acumulado' => $meningo_acumulado,
						'varicela' => $varicela,
						'varicela_acumulado' => $varicela_acumulado,
						'hepab' => $hepab,
						'hepab_acumulado' => $hepab_acumulado,
						'hepac' => $hepac,
						'hepac_acumulado' => $hepac_acumulado,
						'hepaotras' => $hepaotras,
						'hepaotras_acumulado' => $hepaotras_acumulado,
						'hepanoesp' => $hepanoesp,
						'hepanoesp_acumulado' => $hepanoesp_acumulado,
						'sinviral' => $sinviral,
						'sinviral_acumulado' => $sinviral_acumulado,
						'escabiosis' => $escabiosis,
						'escabiosis_acumulado' => $escabiosis_acumulado,
						'micosis' => $micosis,
						'micosis_acumulado' => $micosis_acumulado,
						'lepra' => $lepra,
						'lepra_acumulado' => $lepra_acumulado,
						//NEOPLASIAS
						'neoplasias' => $neoplasias,
						'neoplasias_acumulado' => $neoplasias_acumulado,
						//ENF.DE LA SANGRE Y ORG. HEMATOPOY
						'sangre' => $sangre,
						'sangre_acumulado' => $sangre_acumulado,
						//ENF. ENDOCRINAS, NUTRIC. Y METABOLICAS
						'endocrinas' => $endocrinas,
						'endocrinas_acumulado' => $endocrinas_acumulado,
						'tiroideos' => $tiroideos,
						'tiroideos_acumulado' => $tiroideos_acumulado,
						'diabetes_menor25' => $diabetes_menor25,
						'diabetes_menor25_acumulado' => $diabetes_menor25_acumulado,
						'diabetes_mayor25' => $diabetes_mayor25,
						'diabetes_mayor25_acumulado' => $diabetes_mayor25_acumulado,
						'deslev_menor15' => $deslev_menor15,
						'deslev_menor15_acumulado' => $deslev_menor15_acumulado,
						'desmod_menor15' => $desmod_menor15,
						'desmod_menor15_acumulado' => $desmod_menor15_acumulado,
						'desgra_menor15' => $desgra_menor15,
						'desgra_menor15_acumulado' => $desgra_menor15_acumulado,
						'obecidad' => $obecidad,
						'obecidad_acumulado' => $obecidad_acumulado,
						//TRAST.MENTALES Y DEL COMPORTAMIENTO
						'mentales' => $mentales,
						'mentales_acumulado' => $mentales_acumulado,
						//ENF. DEL SISTEMA NERVIOSO
						'nervioso' => $nervioso,
						'nervioso_acumulado' => $nervioso_acumulado,
						'paralisis' => $paralisis,
						'paralisis_acumulado' => $paralisis_acumulado,
						'epilepsia' => $epilepsia,
						'epilepsia_acumulado' => $epilepsia_acumulado,
						'migrana' => $migrana,
						'migrana_acumulado' => $migrana_acumulado,
						//ENF.DEL OJO Y SUS ANEXOS
						'ojo' => $ojo,
						'ojo_acumulado' => $ojo_acumulado,
						'conjuntivitis' => $conjuntivitis,
						'conjuntivitis_acumulado' => $conjuntivitis_acumulado,
						'otrasojo' => $otrasojo,
						'otrasojo_acumulado' => $otrasojo_acumulado,
						//ENF. DEL OIDO Y APOFISIS MASTOIDES
						'oido' => $oido,
						'oido_acumulado' => $oido_acumulado,
						'otiext' => $otiext,
						'otiext_acumulado' => $otiext_acumulado,
						'otimed_menor5' => $otimed_menor5,
						'otimed_menor5_acumulado' => $otimed_menor5_acumulado,
						'otimed_mayor5' => $otimed_mayor5,
						'otimed_mayor5_acumulado' => $otimed_mayor5_acumulado,
						'oticro' => $oticro,
						'oticro_acumulado' => $oticro_acumulado,
						//ENFERM. DEL SISTEMA CIRCULATORIO
						'circulatorio' => $circulatorio,
						'circulatorio_acumulado' => $circulatorio_acumulado,
						'fiereu' => $fiereu,
						'fiereu_acumulado' => $fiereu_acumulado,
						'hiper_menor15' => $hiper_menor15,
						'hiper_menor15_acumulado' => $hiper_menor15_acumulado,
						'hiper_entre15' => $hiper_entre15,
						'hiper_entre15_acumulado' => $hiper_entre15_acumulado,
						'hiper_mayor15' => $hiper_mayor15,
						'hiper_mayor15_acumulado' => $hiper_mayor15_acumulado,
						'isquemicas' => $isquemicas,
						'isquemicas_acumulado' => $isquemicas_acumulado,
						'infarto_menor45' => $infarto_menor45,
						'infarto_menor45_acumulado' => $infarto_menor45_acumulado,
						'infarto_mayor45' => $infarto_mayor45,
						'infarto_mayor45_acumulado' => $infarto_mayor45_acumulado,
						'cerebrovasculares' => $cerebrovasculares,
						'cerebrovasculares_acumulado' => $cerebrovasculares_acumulado,
						'varices' => $varices,
						'varices_acumulado' => $varices_acumulado,
						//ENFERM. DEL SISTEMA RESPIRATORIO
						'respiratorio' => $respiratorio,
						'respiratorio_acumulado' => $respiratorio_acumulado,
						'farinmenor5' => $farinmenor5,
						'farinmenor5_acumulado' => $farinmenor5_acumulado,
						'farinmayor5' => $farinmayor5,
						'farinmayor5_acumulado' => $farinmayor5_acumulado,
						'amigdalitis' => $amigdalitis,
						'amigdalitis_acumulado' => $amigdalitis_acumulado,
						'rino_menor5' => $rino_menor5,
						'rino_menor5_acumulado' => $rino_menor5_acumulado,
						'rino_mayor5' => $rino_mayor5,
						'rino_mayor5_acumulado' => $rino_mayor5_acumulado,
						'neumonia_menor1' => $neumonia_menor1,
						'neumonia_menor1_acumulado' => $neumonia_menor1_acumulado,
						'neumonia_uno4' => $neumonia_uno4,
						'neumonia_uno4_acumulado' => $neumonia_uno4_acumulado,
						'neumonia_mayor5' => $neumonia_mayor5,
						'neumonia_mayor5_acumulado' => $neumonia_mayor5_acumulado,
						'bronquiolitis' => $bronquiolitis,
						'bronquiolitis_acumulado' => $bronquiolitis_acumulado,
						'bronquitis' => $bronquitis,
						'bronquitis_acumulado' => $bronquitis_acumulado,
						'bronco' => $bronco,
						'bronco_acumulado' => $bronco_acumulado,
						'asma_menor10' => $asma_menor10,
						'asma_menor10_acumulado' => $asma_menor10_acumulado,
						'asma_mayor10' => $asma_mayor10,
						'asma_mayor10_acumulado' => $asma_mayor10_acumulado,
						'rinitis' => $rinitis,
						'rinitis_acumulado' => $rinitis_acumulado,
						//ENFERMEDADES DEL SISTEMA DIGESTIVO
						'digestivo' => $digestivo,
						'digestivo_acumulado' => $digestivo_acumulado,
						'caries' => $caries,
						'caries_acumulado' => $caries_acumulado,
						'gingivitis' => $gingivitis,
						'gingivitis_acumulado' => $gingivitis_acumulado,
						'estomatitis' => $estomatitis,
						'estomatitis_acumulado' => $estomatitis_acumulado,
						'gastritis' => $gastritis,
						'gastritis_acumulado' => $gastritis_acumulado,
						'apendicitis' => $apendicitis,
						'apendicitis_acumulado' => $apendicitis_acumulado,
						'hernias' => $hernias,
						'hernias_acumulado' => $hernias_acumulado,
						'colelitiasis' => $colelitiasis,
						'colelitiasis_acumulado' => $colelitiasis_acumulado,
						'pancreatitis' => $pancreatitis,
						'pancreatitis_acumulado' => $pancreatitis_acumulado,
						'otrasestomago' => $otrasestomago,
						'otrasestomago_acumulado' => $otrasestomago_acumulado,
						//ENF.DE LA PIEL Y TEJ. SUBCUTANEO
						'piel' => $piel,
						'piel_acumulado' => $piel_acumulado,
						'abcesos' => $abcesos,
						'abcesos_acumulado' => $abcesos_acumulado,
						'celulitis' => $celulitis,
						'celulitis_acumulado' => $celulitis_acumulado,
						'dermatitis' => $dermatitis,
						'dermatitis_acumulado' => $dermatitis_acumulado,
						'piodermitis' => $piodermitis,
						'piodermitis_acumulado' => $piodermitis_acumulado,
						'urticaria' => $urticaria,
						'urticaria_acumulado' => $urticaria_acumulado,
						//ENF.SIST.OSTEOMUSC. Y TEJ. CONJUNTIVO
						'conjutivo' => $conjutivo,
						'conjutivo_acumulado' => $conjutivo_acumulado,
						'artritis' => $artritis,
						'artritis_acumulado' => $artritis_acumulado,
						'mialgias' => $mialgias,
						'mialgias_acumulado' => $mialgias_acumulado,
						'neuralgias' => $neuralgias,
						'neuralgias_acumulado' => $neuralgias_acumulado,
						'bursitis' => $bursitis,
						'bursitis_acumulado' => $bursitis_acumulado,
						//ENF.DEL SISTEMA GENITO-URINARIO
						'urinario' => $urinario,
						'urinario_acumulado' => $urinario_acumulado,
						'infuri' => $infuri,
						'infuri_acumulado' => $infuri_acumulado,
						'uretritis' => $uretritis,
						'uretritis_acumulado' => $uretritis_acumulado,
						'leucorrea' => $leucorrea,
						'leucorrea_acumulado' => $leucorrea_acumulado,
						'hemogen' => $hemogen,
						'hemogen_acumulado' => $hemogen_acumulado,
						'colico' => $colico,
						'colico_acumulado' => $colico_acumulado,
						'dismenorrea' => $dismenorrea,
						'dismenorrea_acumulado' => $dismenorrea_acumulado,
						'salpingitis' => $salpingitis,
						'salpingitis_acumulado' => $salpingitis_acumulado,
						'utero' => $utero,
						'utero_acumulado' => $utero_acumulado,
						//EMBARAZO, PARTO Y PUERPERIO
						'embarazo' => $embarazo,
						'embarazo_acumulado' => $embarazo_acumulado,
						'hemoemb' => $hemoemb,
						'hemoemb_acumulado' => $hemoemb_acumulado,
						'preclampsia' => $preclampsia,
						'preclampsia_acumulado' => $preclampsia_acumulado,
						'eclampsia' => $eclampsia,
						'eclampsia_acumulado' => $eclampsia_acumulado,
						'falloaborto' => $falloaborto,
						'falloaborto_acumulado' => $falloaborto_acumulado,
						'aborto' => $aborto,
						'aborto_acumulado' => $aborto_acumulado,
						'mamarios' => $mamarios,
						'mamarios_acumulado' => $mamarios_acumulado,
						'otrasemb' => $otrasemb,
						'otrasemb_acumulado' => $otrasemb_acumulado,
						//SINT.SIG. Y HALLAZGOS ANORMALES
						'anormal' => $anormal,
						'anormal_acumulado' => $anormal_acumulado,
						'cefalea' => $cefalea,
						'cefalea_acumulado' => $cefalea_acumulado,
						'fiebre' => $fiebre,
						'fiebre_acumulado' => $fiebre_acumulado,
						'convulsiones' => $convulsiones,
						'convulsiones_acumulado' => $convulsiones_acumulado,
						'abdomen' => $abdomen,
						'abdomen_acumulado' => $abdomen_acumulado,
						'abdominal' => $abdominal,
						'abdominal_acumulado' => $abdominal_acumulado,
						//TRAUMATISMOS Y ENVENENAMIENTOS
						'veneno' => $veneno,
						'veneno_acumulado' => $veneno_acumulado,
						'quemaduras' => $quemaduras,
						'quemaduras_acumulado' => $quemaduras_acumulado,
						'envendro' => $envendro,
						'envendro_acumulado' => $envendro_acumulado,
						'heridas' => $heridas,
						'heridas_acumulado' => $heridas_acumulado,
						'fracturas' => $fracturas,
						'fracturas_acumulado' => $fracturas_acumulado,
						'luxaciones' => $luxaciones,
						'luxaciones_acumulado' => $luxaciones_acumulado,
						'toxi' => $toxi,
						'toxi_acumulado' => $toxi_acumulado,
						'cuerpo' => $cuerpo,
						'cuerpo_acumulado' => $cuerpo_acumulado,
						'otrostrau' => $otrostrau,
						'otrostrau_acumulado' => $otrostrau_acumulado,
						//CAUSAS EXTERNAS DE MORBILIDAD Y MORT.
						'externas' => $externas,
						'externas_acumulado' => $externas_acumulado,
						'terrestre' => $terrestre,
						'terrestre_acumulado' => $terrestre_acumulado,
						'picadura' => $picadura,
						'picadura_acumulado' => $picadura_acumulado,
						'ofidico' => $ofidico,
						'ofidico_acumulado' => $ofidico_acumulado,
						'morabia' => $morabia,
						'morabia_acumulado' => $morabia_acumulado,
						'otrosacc' => $otrosacc,
						'otrosacc_acumulado' => $otrosacc_acumulado,
						'hogar' => $hogar,
						'hogar_acumulado' => $hogar_acumulado,
						'laborales' => $laborales,
						'laborales_acumulado' => $laborales_acumulado,
						'advmed' => $advmed,
						'advmed_acumulado' => $advmed_acumulado,
						'advac' => $advac,
						'advac_acumulado' => $advac_acumulado,
						//VIOLENCIA FAMILIAR
						'violencia' => $violencia,
						'violencia_acumulado' => $violencia_acumulado,
						//VIOLENCIA FISICA
						'viofis' => $viofis,
						'viofis_acumulado' => $viofis_acumulado,
						'fisica_ninos' => $fisica_ninos,
						'fisica_ninos_acumulado' => $fisica_ninos_acumulado,
						'fisica_ninas' => $fisica_ninas,
						'fisica_ninas_acumulado' => $fisica_ninas_acumulado,
						'fisica_teen_h' => $fisica_teen_h,
						'fisica_teen_h_acumulado' => $fisica_teen_h_acumulado,
						'fisica_teen_m' => $fisica_teen_m,
						'fisica_teen_m_acumulado' => $fisica_teen_m_acumulado,
						'fisica_adulto' => $fisica_adulto,
						'fisica_adulto_acumulado' => $fisica_adulto_acumulado,
						'fisica_adulta' => $fisica_adulta,
						'fisica_adulta_acumulado' => $fisica_adulta_acumulado,
						'fisica_viejo' => $fisica_viejo,
						'fisica_viejo_acumulado' => $fisica_viejo_acumulado,
						'fisica_vieja' => $fisica_vieja,
						'fisica_vieja_acumulado' => $fisica_vieja_acumulado,
						//VIOLENCIA PSICOLOGICA
						'viopsico' => $viopsico,
						'viopsico_acumulado' => $viopsico_acumulado,
						'psico_ninos' => $psico_ninos,
						'psico_ninos_acumulado' => $psico_ninos_acumulado,
						'psico_ninas' => $psico_ninas,
						'psico_ninas_acumulado' => $psico_ninas_acumulado,
						'psico_teen_h' => $psico_teen_h,
						'psico_teen_h_acumulado' => $psico_teen_h_acumulado,
						'psico_teen_m' => $psico_teen_m,
						'psico_teen_m_acumulado' => $psico_teen_m_acumulado,
						'psico_adulto' => $psico_adulto,
						'psico_adulto_acumulado' => $psico_adulto_acumulado,
						'psico_adulta' => $psico_adulta,
						'psico_adulta_acumulado' => $psico_adulta_acumulado,
						'psico_viejo' => $psico_viejo,
						'psico_viejo_acumulado' => $psico_viejo_acumulado,
						'psico_vieja' => $psico_vieja,
						'psico_vieja_acumulado' => $psico_vieja_acumulado,
						//VIOLENCIA SEXUAL
						'viosexual' => $viosexual,
						'viosexual_acumulado' => $viosexual_acumulado,
						'sexual_ninos' => $sexual_ninos,
						'sexual_ninos_acumulado' => $sexual_ninos_acumulado,
						'sexual_ninas' => $sexual_ninas,
						'sexual_ninas_acumulado' => $sexual_ninas_acumulado,
						'sexual_teen_h' => $sexual_teen_h,
						'sexual_teen_h_acumulado' => $sexual_teen_h_acumulado,
						'sexual_teen_m' => $sexual_teen_m,
						'sexual_teen_m_acumulado' => $sexual_teen_m_acumulado,
						'sexual_adulto' => $sexual_adulto,
						'sexual_adulto_acumulado' => $sexual_adulto_acumulado,
						'sexual_adulta' => $sexual_adulta,
						'sexual_adulta_acumulado' => $sexual_adulta_acumulado,
						'sexual_viejo' => $sexual_viejo,
						'sexual_viejo_acumulado' => $sexual_viejo_acumulado,
						'sexual_vieja' => $sexual_vieja,
						'sexual_vieja_acumulado' => $sexual_vieja_acumulado,
						//OTRAS CAUSAS DE CONSULTA
						'otros' => $otros,
						'otros_acumulado' => $otros_acumulado,
						//TOTAL CAUSAS DE CONSULTA
						'total_consultas' => $total_consultas,
						'total_consultas_acumulado' => $total_consultas_acumulado
						);
					$this->reporte_pdf($name_doc, $view, $data, $orientacion);
				}
				//MORTALIDAD MATERNA E INFANTIL
				elseif ($this->input->post('rep') == "mor")
				{
					//Datos del reporte
					$name_doc = "Mortalidad Materna e Infantil_Semana_".$this->input->post('semana')."_".$this->input->post('year');
					$view = 'reportes/mortalidad_rep_view';
					$orientacion = 'L';
					//Partos
					$partos = $this->reportes_model->cantidad_partos();
					$vivos = $this->reportes_model->resultado_partos('Vivo');
					$muertos = $this->reportes_model->resultado_partos('Muerto');
					$abortos = $this->reportes_model->abortos();
					//Mortalidades
					$materna = $this->reportes_model->mortalidad('Materna');
					$num_materna = $this->reportes_model->num_mortalidad('Materna');
					$neonatal = $this->reportes_model->mortalidad('Neonatal');
					$num_neonatal = $this->reportes_model->num_mortalidad('Neonatal');
					$postneonatal = $this->reportes_model->mortalidad('Postneonatal');
					$num_postneonatal = $this->reportes_model->num_mortalidad('Postneonatal');
					$infantil = $this->reportes_model->mortalidad('Infantil');
					$num_infantil = $this->reportes_model->num_mortalidad('Infantil');
					$data = array(
						'semana' => $this->input->post('semana'),
						'year' => $this->input->post('year'),
						//Partos
						'partos' => $partos,
						'vivos' => $vivos,
						'muertos' => $muertos,
						'abortos' => $abortos,
						//Mortalidades
						'materna' => $materna,
						'num_materna' => $num_materna,
						'neonatal' => $neonatal,
						'num_neonatal' => $num_neonatal,
						'postneonatal' => $postneonatal,
						'num_postneonatal' => $num_postneonatal,
						'infantil' => $infantil,
						'num_infantil' => $num_infantil
						);
					$this->reporte_pdf($name_doc, $view, $data, $orientacion);
				}
			}
		}
		else
		{
			redirect(base_url().'reportes');
		}
	}
	//Generar los reportes en formato PDF
	function reporte_pdf($name_doc, $view, $data, $orientacion)
	{
		header('Cache-Control: no-cache');
		header('Pragma: no-cache');
		set_time_limit(320);
		ob_start();
		$this->load->view($view, $data);
		$doc = $name_doc.'.pdf';
		$content = ob_get_clean();
		require_once(APPPATH.'third_party/html2pdf/html2pdf.class.php');
		//Si indicamos el valor P sale vertical y L seria horizontal
		$pdf = new HTML2PDF($orientacion, 'A4', 'es', 'UTF-8');
		$pdf->writeHTML($content);
		//$pdf->pdf->IncludeJS('print(TRUE)');
		$pdf->output($doc);
	}
	//Verificar el año
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
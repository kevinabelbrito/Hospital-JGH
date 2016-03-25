<style>
	.hpt
	{
		margin-left: 100px;
	}
	table
	{
		margin: auto;
	}
	table td
	{
		padding: 5px;
	}
	.header
	{
		font-size: 12px;
		text-align: center;
	}
	.epi
	{
		font-size: 10px;
		text-align: center;
	}
</style>
<page backtop="20px" backbottom="20px" backleft="10px" backright="10px">
	<page_footer><div align="center">Página [[page_cu]] de [[page_nb]]</div></page_footer>
	<img src="<?= APPPATH ?>third_party/logo_gob.png" height="45" width="400" class="gob">
	<img src="<?= APPPATH ?>third_party/logo_reportes.png" height="70" width="70" class="hpt">
	<table class="header">
		<tr>
			<td style="text-align:left">Dirección General de Epidemiología</td>
			<td></td>
			<td style="text-align:right">Entidad:</td>
			<td style="border-botton: 1px solid #000;" colspan="4">AMAZONAS</td>
		</tr>
		<tr>
			<td style="text-align:left">Sistema de Información Epidemiológico Nacional</td>
			<td>Formato SIS - 04 / EPI - 12</td>
			<td style="text-align:right">Municipio:</td>
			<td style="border-botton: 1px solid #000;" colspan="4">Atures</td>
		</tr>
		<tr>
			<td style="text-align:left">Dirección de Vigilancia Epidemiológica</td>
			<td>Consolidado Semanal de Enfermedades <br> y Eventos de Notificación Obligatoria</td>
			<td style="text-align:right">Establecimiento:</td>
			<td style="border-botton: 1px solid #000;" colspan="4"> Hospital Tipo II Dr. José Gregorio Hernández</td>
		</tr>
		<tr>
			<td></td>
			<td>Morbilidad</td>
			<td rowspan="2"><b>Año:</b></td>
			<td rowspan="2"><?= $year ?></td>
			<td rowspan="2"><b>Semana:</b></td>
			<td rowspan="2"><?= $semana ?></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	<table class="epi" border="1">
		<tr>
			<td rowspan="2"><b>Orden</b></td>
			<td rowspan="2"><b>Enfermedad/Evento</b></td>
			<td colspan="2"><b>1 año</b></td>
			<td colspan="2"><b>1 a 4 <br> años</b></td>
			<td colspan="2"><b>5 a 6 <br> años</b></td>
			<td colspan="2"><b>7 a 9 <br> años</b></td>
			<td colspan="2"><b>10 a 11 <br> años</b></td>
			<td colspan="2"><b>12 a 14 <br> años</b></td>
			<td colspan="2"><b>15 a 19 <br> años</b></td>
			<td colspan="2"><b>20 a 24 <br> años</b></td>
			<td colspan="2"><b>25 a 44 <br> años</b></td>
			<td colspan="2"><b>45 a 59 <br> años</b></td>
			<td colspan="2"><b>60 a 64 <br> años</b></td>
			<td colspan="2"><b>65 años <br> y mas</b></td>
			<td colspan="2"><b>Edad <br> ignorada</b></td>
			<td colspan="2"><b>Total</b></td>
			<td rowspan="2"><b>Total <br> Gene<br>ral</b></td>
		</tr>
		<tr>
			<td><b>H</b></td>
			<td><b>M</b></td>
			<td><b>H</b></td>
			<td><b>M</b></td>
			<td><b>H</b></td>
			<td><b>M</b></td>
			<td><b>H</b></td>
			<td><b>M</b></td>
			<td><b>H</b></td>
			<td><b>M</b></td>
			<td><b>H</b></td>
			<td><b>M</b></td>
			<td><b>H</b></td>
			<td><b>M</b></td>
			<td><b>H</b></td>
			<td><b>M</b></td>
			<td><b>H</b></td>
			<td><b>M</b></td>
			<td><b>H</b></td>
			<td><b>M</b></td>
			<td><b>H</b></td>
			<td><b>M</b></td>
			<td><b>H</b></td>
			<td><b>M</b></td>
			<td><b>H</b></td>
			<td><b>M</b></td>
			<td><b>H</b></td>
			<td><b>M</b></td>
		</tr>
		<tr>
			<!--Multiplicar por 31-->
			<td><b>1</b></td>
			<td>Cólera (A00)</td>
			<td><?= $colera['menor1_h'] ?></td>
			<td><?= $colera['menor1_m'] ?></td>
			<td><?= $colera['uno4_h'] ?></td>
			<td><?= $colera['uno4_m'] ?></td>
			<td><?= $colera['cinco6_h'] ?></td>
			<td><?= $colera['cinco6_m'] ?></td>
			<td><?= $colera['siete9_h'] ?></td>
			<td><?= $colera['siete9_m'] ?></td>
			<td><?= $colera['diez11_h'] ?></td>
			<td><?= $colera['diez11_m'] ?></td>
			<td><?= $colera['doce14_h'] ?></td>
			<td><?= $colera['doce14_m'] ?></td>
			<td><?= $colera['quince19_h'] ?></td>
			<td><?= $colera['quince19_m'] ?></td>
			<td><?= $colera['veinte24_h'] ?></td>
			<td><?= $colera['veinte24_m'] ?></td>
			<td><?= $colera['veinticinco44_h'] ?></td>
			<td><?= $colera['veinticinco44_m'] ?></td>
			<td><?= $colera['cuarentaycinco59_h'] ?></td>
			<td><?= $colera['cuarentaycinco59_m'] ?></td>
			<td><?= $colera['sesenta64_h'] ?></td>
			<td><?= $colera['sesenta64_m'] ?></td>
			<td><?= $colera['mayor64_h'] ?></td>
			<td><?= $colera['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $colera['total_h'] ?></td>
			<td><?= $colera['total_m'] ?></td>
			<td><?= $colera['total'] ?></td>
		</tr>
		<tr>
			<td><b>2</b></td>
			<td>Diarreas (A08-A09)</td>
			<td><?= $diarreas['menor1_h'] ?></td>
			<td><?= $diarreas['menor1_m'] ?></td>
			<td><?= $diarreas['uno4_h'] ?></td>
			<td><?= $diarreas['uno4_m'] ?></td>
			<td><?= $diarreas['cinco6_h'] ?></td>
			<td><?= $diarreas['cinco6_m'] ?></td>
			<td><?= $diarreas['siete9_h'] ?></td>
			<td><?= $diarreas['siete9_m'] ?></td>
			<td><?= $diarreas['diez11_h'] ?></td>
			<td><?= $diarreas['diez11_m'] ?></td>
			<td><?= $diarreas['doce14_h'] ?></td>
			<td><?= $diarreas['doce14_m'] ?></td>
			<td><?= $diarreas['quince19_h'] ?></td>
			<td><?= $diarreas['quince19_m'] ?></td>
			<td><?= $diarreas['veinte24_h'] ?></td>
			<td><?= $diarreas['veinte24_m'] ?></td>
			<td><?= $diarreas['veinticinco44_h'] ?></td>
			<td><?= $diarreas['veinticinco44_m'] ?></td>
			<td><?= $diarreas['cuarentaycinco59_h'] ?></td>
			<td><?= $diarreas['cuarentaycinco59_m'] ?></td>
			<td><?= $diarreas['sesenta64_h'] ?></td>
			<td><?= $diarreas['sesenta64_m'] ?></td>
			<td><?= $diarreas['mayor64_h'] ?></td>
			<td><?= $diarreas['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $diarreas['total_h'] ?></td>
			<td><?= $diarreas['total_m'] ?></td>
			<td><?= $diarreas['total'] ?></td>
		</tr>
		<tr>
			<td><b>3</b></td>
			<td>Amibiasis (A06)</td>
			<td><?= $amibiasis['menor1_h'] ?></td>
			<td><?= $amibiasis['menor1_m'] ?></td>
			<td><?= $amibiasis['uno4_h'] ?></td>
			<td><?= $amibiasis['uno4_m'] ?></td>
			<td><?= $amibiasis['cinco6_h'] ?></td>
			<td><?= $amibiasis['cinco6_m'] ?></td>
			<td><?= $amibiasis['siete9_h'] ?></td>
			<td><?= $amibiasis['siete9_m'] ?></td>
			<td><?= $amibiasis['diez11_h'] ?></td>
			<td><?= $amibiasis['diez11_m'] ?></td>
			<td><?= $amibiasis['doce14_h'] ?></td>
			<td><?= $amibiasis['doce14_m'] ?></td>
			<td><?= $amibiasis['quince19_h'] ?></td>
			<td><?= $amibiasis['quince19_m'] ?></td>
			<td><?= $amibiasis['veinte24_h'] ?></td>
			<td><?= $amibiasis['veinte24_m'] ?></td>
			<td><?= $amibiasis['veinticinco44_h'] ?></td>
			<td><?= $amibiasis['veinticinco44_m'] ?></td>
			<td><?= $amibiasis['cuarentaycinco59_h'] ?></td>
			<td><?= $amibiasis['cuarentaycinco59_m'] ?></td>
			<td><?= $amibiasis['sesenta64_h'] ?></td>
			<td><?= $amibiasis['sesenta64_m'] ?></td>
			<td><?= $amibiasis['mayor64_h'] ?></td>
			<td><?= $amibiasis['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $amibiasis['total_h'] ?></td>
			<td><?= $amibiasis['total_m'] ?></td>
			<td><?= $amibiasis['total'] ?></td>
		</tr>
		<tr>
			<td><b>4</b></td>
			<td>Fiebre Tifoidea (A01.0)</td>
			<td><?= $tifoidea['menor1_h'] ?></td>
			<td><?= $tifoidea['menor1_m'] ?></td>
			<td><?= $tifoidea['uno4_h'] ?></td>
			<td><?= $tifoidea['uno4_m'] ?></td>
			<td><?= $tifoidea['cinco6_h'] ?></td>
			<td><?= $tifoidea['cinco6_m'] ?></td>
			<td><?= $tifoidea['siete9_h'] ?></td>
			<td><?= $tifoidea['siete9_m'] ?></td>
			<td><?= $tifoidea['diez11_h'] ?></td>
			<td><?= $tifoidea['diez11_m'] ?></td>
			<td><?= $tifoidea['doce14_h'] ?></td>
			<td><?= $tifoidea['doce14_m'] ?></td>
			<td><?= $tifoidea['quince19_h'] ?></td>
			<td><?= $tifoidea['quince19_m'] ?></td>
			<td><?= $tifoidea['veinte24_h'] ?></td>
			<td><?= $tifoidea['veinte24_m'] ?></td>
			<td><?= $tifoidea['veinticinco44_h'] ?></td>
			<td><?= $tifoidea['veinticinco44_m'] ?></td>
			<td><?= $tifoidea['cuarentaycinco59_h'] ?></td>
			<td><?= $tifoidea['cuarentaycinco59_m'] ?></td>
			<td><?= $tifoidea['sesenta64_h'] ?></td>
			<td><?= $tifoidea['sesenta64_m'] ?></td>
			<td><?= $tifoidea['mayor64_h'] ?></td>
			<td><?= $tifoidea['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $tifoidea['total_h'] ?></td>
			<td><?= $tifoidea['total_m'] ?></td>
			<td><?= $tifoidea['total'] ?></td>
		</tr>
		<tr>
			<td><b>5</b></td>
			<td>ETA Nº de Brotes</td>
			<td><?= $etabrote['menor1_h'] ?></td>
			<td><?= $etabrote['menor1_m'] ?></td>
			<td><?= $etabrote['uno4_h'] ?></td>
			<td><?= $etabrote['uno4_m'] ?></td>
			<td><?= $etabrote['cinco6_h'] ?></td>
			<td><?= $etabrote['cinco6_m'] ?></td>
			<td><?= $etabrote['siete9_h'] ?></td>
			<td><?= $etabrote['siete9_m'] ?></td>
			<td><?= $etabrote['diez11_h'] ?></td>
			<td><?= $etabrote['diez11_m'] ?></td>
			<td><?= $etabrote['doce14_h'] ?></td>
			<td><?= $etabrote['doce14_m'] ?></td>
			<td><?= $etabrote['quince19_h'] ?></td>
			<td><?= $etabrote['quince19_m'] ?></td>
			<td><?= $etabrote['veinte24_h'] ?></td>
			<td><?= $etabrote['veinte24_m'] ?></td>
			<td><?= $etabrote['veinticinco44_h'] ?></td>
			<td><?= $etabrote['veinticinco44_m'] ?></td>
			<td><?= $etabrote['cuarentaycinco59_h'] ?></td>
			<td><?= $etabrote['cuarentaycinco59_m'] ?></td>
			<td><?= $etabrote['sesenta64_h'] ?></td>
			<td><?= $etabrote['sesenta64_m'] ?></td>
			<td><?= $etabrote['mayor64_h'] ?></td>
			<td><?= $etabrote['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $etabrote['total_h'] ?></td>
			<td><?= $etabrote['total_m'] ?></td>
			<td><?= $etabrote['total'] ?></td>
		</tr>
		<tr>
			<td><b>6</b></td>
			<td>Casos Asociados a Brotes de ETA</td>
			<td><?= $etasoc['menor1_h'] ?></td>
			<td><?= $etasoc['menor1_m'] ?></td>
			<td><?= $etasoc['uno4_h'] ?></td>
			<td><?= $etasoc['uno4_m'] ?></td>
			<td><?= $etasoc['cinco6_h'] ?></td>
			<td><?= $etasoc['cinco6_m'] ?></td>
			<td><?= $etasoc['siete9_h'] ?></td>
			<td><?= $etasoc['siete9_m'] ?></td>
			<td><?= $etasoc['diez11_h'] ?></td>
			<td><?= $etasoc['diez11_m'] ?></td>
			<td><?= $etasoc['doce14_h'] ?></td>
			<td><?= $etasoc['doce14_m'] ?></td>
			<td><?= $etasoc['quince19_h'] ?></td>
			<td><?= $etasoc['quince19_m'] ?></td>
			<td><?= $etasoc['veinte24_h'] ?></td>
			<td><?= $etasoc['veinte24_m'] ?></td>
			<td><?= $etasoc['veinticinco44_h'] ?></td>
			<td><?= $etasoc['veinticinco44_m'] ?></td>
			<td><?= $etasoc['cuarentaycinco59_h'] ?></td>
			<td><?= $etasoc['cuarentaycinco59_m'] ?></td>
			<td><?= $etasoc['sesenta64_h'] ?></td>
			<td><?= $etasoc['sesenta64_m'] ?></td>
			<td><?= $etasoc['mayor64_h'] ?></td>
			<td><?= $etasoc['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $etasoc['total_h'] ?></td>
			<td><?= $etasoc['total_m'] ?></td>
			<td><?= $etasoc['total'] ?></td>
		</tr>
		<tr>
			<td><b>7</b></td>
			<td>Hepatitis Aguda Tipo A (B15)</td>
			<td><?= $hepa['menor1_h'] ?></td>
			<td><?= $hepa['menor1_m'] ?></td>
			<td><?= $hepa['uno4_h'] ?></td>
			<td><?= $hepa['uno4_m'] ?></td>
			<td><?= $hepa['cinco6_h'] ?></td>
			<td><?= $hepa['cinco6_m'] ?></td>
			<td><?= $hepa['siete9_h'] ?></td>
			<td><?= $hepa['siete9_m'] ?></td>
			<td><?= $hepa['diez11_h'] ?></td>
			<td><?= $hepa['diez11_m'] ?></td>
			<td><?= $hepa['doce14_h'] ?></td>
			<td><?= $hepa['doce14_m'] ?></td>
			<td><?= $hepa['quince19_h'] ?></td>
			<td><?= $hepa['quince19_m'] ?></td>
			<td><?= $hepa['veinte24_h'] ?></td>
			<td><?= $hepa['veinte24_m'] ?></td>
			<td><?= $hepa['veinticinco44_h'] ?></td>
			<td><?= $hepa['veinticinco44_m'] ?></td>
			<td><?= $hepa['cuarentaycinco59_h'] ?></td>
			<td><?= $hepa['cuarentaycinco59_m'] ?></td>
			<td><?= $hepa['sesenta64_h'] ?></td>
			<td><?= $hepa['sesenta64_m'] ?></td>
			<td><?= $hepa['mayor64_h'] ?></td>
			<td><?= $hepa['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hepa['total_h'] ?></td>
			<td><?= $hepa['total_m'] ?></td>
			<td><?= $hepa['total'] ?></td>
		</tr>
		<tr>
			<td><b>8</b></td>
			<td>Tuberculosis (A15-A19)</td>
			<td><?= $tuberculosis['menor1_h'] ?></td>
			<td><?= $tuberculosis['menor1_m'] ?></td>
			<td><?= $tuberculosis['uno4_h'] ?></td>
			<td><?= $tuberculosis['uno4_m'] ?></td>
			<td><?= $tuberculosis['cinco6_h'] ?></td>
			<td><?= $tuberculosis['cinco6_m'] ?></td>
			<td><?= $tuberculosis['siete9_h'] ?></td>
			<td><?= $tuberculosis['siete9_m'] ?></td>
			<td><?= $tuberculosis['diez11_h'] ?></td>
			<td><?= $tuberculosis['diez11_m'] ?></td>
			<td><?= $tuberculosis['doce14_h'] ?></td>
			<td><?= $tuberculosis['doce14_m'] ?></td>
			<td><?= $tuberculosis['quince19_h'] ?></td>
			<td><?= $tuberculosis['quince19_m'] ?></td>
			<td><?= $tuberculosis['veinte24_h'] ?></td>
			<td><?= $tuberculosis['veinte24_m'] ?></td>
			<td><?= $tuberculosis['veinticinco44_h'] ?></td>
			<td><?= $tuberculosis['veinticinco44_m'] ?></td>
			<td><?= $tuberculosis['cuarentaycinco59_h'] ?></td>
			<td><?= $tuberculosis['cuarentaycinco59_m'] ?></td>
			<td><?= $tuberculosis['sesenta64_h'] ?></td>
			<td><?= $tuberculosis['sesenta64_m'] ?></td>
			<td><?= $tuberculosis['mayor64_h'] ?></td>
			<td><?= $tuberculosis['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $tuberculosis['total_h'] ?></td>
			<td><?= $tuberculosis['total_m'] ?></td>
			<td><?= $tuberculosis['total'] ?></td>
		</tr>
		<tr>
			<td><b>9</b></td>
			<td>Influenza (J10-J11) Enfermedad Tipo Influenza</td>
			<td><?= $influenza['menor1_h'] ?></td>
			<td><?= $influenza['menor1_m'] ?></td>
			<td><?= $influenza['uno4_h'] ?></td>
			<td><?= $influenza['uno4_m'] ?></td>
			<td><?= $influenza['cinco6_h'] ?></td>
			<td><?= $influenza['cinco6_m'] ?></td>
			<td><?= $influenza['siete9_h'] ?></td>
			<td><?= $influenza['siete9_m'] ?></td>
			<td><?= $influenza['diez11_h'] ?></td>
			<td><?= $influenza['diez11_m'] ?></td>
			<td><?= $influenza['doce14_h'] ?></td>
			<td><?= $influenza['doce14_m'] ?></td>
			<td><?= $influenza['quince19_h'] ?></td>
			<td><?= $influenza['quince19_m'] ?></td>
			<td><?= $influenza['veinte24_h'] ?></td>
			<td><?= $influenza['veinte24_m'] ?></td>
			<td><?= $influenza['veinticinco44_h'] ?></td>
			<td><?= $influenza['veinticinco44_m'] ?></td>
			<td><?= $influenza['cuarentaycinco59_h'] ?></td>
			<td><?= $influenza['cuarentaycinco59_m'] ?></td>
			<td><?= $influenza['sesenta64_h'] ?></td>
			<td><?= $influenza['sesenta64_m'] ?></td>
			<td><?= $influenza['mayor64_h'] ?></td>
			<td><?= $influenza['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $influenza['total_h'] ?></td>
			<td><?= $influenza['total_m'] ?></td>
			<td><?= $influenza['total'] ?></td>
		</tr>
		<tr>
			<td><b>10</b></td>
			<td>Sífilis Congénita (A50)</td>
			<td><?= $sifiliscong['menor1_h'] ?></td>
			<td><?= $sifiliscong['menor1_m'] ?></td>
			<td><?= $sifiliscong['uno4_h'] ?></td>
			<td><?= $sifiliscong['uno4_m'] ?></td>
			<td><?= $sifiliscong['cinco6_h'] ?></td>
			<td><?= $sifiliscong['cinco6_m'] ?></td>
			<td><?= $sifiliscong['siete9_h'] ?></td>
			<td><?= $sifiliscong['siete9_m'] ?></td>
			<td><?= $sifiliscong['diez11_h'] ?></td>
			<td><?= $sifiliscong['diez11_m'] ?></td>
			<td><?= $sifiliscong['doce14_h'] ?></td>
			<td><?= $sifiliscong['doce14_m'] ?></td>
			<td><?= $sifiliscong['quince19_h'] ?></td>
			<td><?= $sifiliscong['quince19_m'] ?></td>
			<td><?= $sifiliscong['veinte24_h'] ?></td>
			<td><?= $sifiliscong['veinte24_m'] ?></td>
			<td><?= $sifiliscong['veinticinco44_h'] ?></td>
			<td><?= $sifiliscong['veinticinco44_m'] ?></td>
			<td><?= $sifiliscong['cuarentaycinco59_h'] ?></td>
			<td><?= $sifiliscong['cuarentaycinco59_m'] ?></td>
			<td><?= $sifiliscong['sesenta64_h'] ?></td>
			<td><?= $sifiliscong['sesenta64_m'] ?></td>
			<td><?= $sifiliscong['mayor64_h'] ?></td>
			<td><?= $sifiliscong['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sifiliscong['total_h'] ?></td>
			<td><?= $sifiliscong['total_m'] ?></td>
			<td><?= $sifiliscong['total'] ?></td>
		</tr>
		<tr>
			<td><b>11</b></td>
			<td>Infección Asintomática VIH (Z21)</td>
			<td><?= $vih['menor1_h'] ?></td>
			<td><?= $vih['menor1_m'] ?></td>
			<td><?= $vih['uno4_h'] ?></td>
			<td><?= $vih['uno4_m'] ?></td>
			<td><?= $vih['cinco6_h'] ?></td>
			<td><?= $vih['cinco6_m'] ?></td>
			<td><?= $vih['siete9_h'] ?></td>
			<td><?= $vih['siete9_m'] ?></td>
			<td><?= $vih['diez11_h'] ?></td>
			<td><?= $vih['diez11_m'] ?></td>
			<td><?= $vih['doce14_h'] ?></td>
			<td><?= $vih['doce14_m'] ?></td>
			<td><?= $vih['quince19_h'] ?></td>
			<td><?= $vih['quince19_m'] ?></td>
			<td><?= $vih['veinte24_h'] ?></td>
			<td><?= $vih['veinte24_m'] ?></td>
			<td><?= $vih['veinticinco44_h'] ?></td>
			<td><?= $vih['veinticinco44_m'] ?></td>
			<td><?= $vih['cuarentaycinco59_h'] ?></td>
			<td><?= $vih['cuarentaycinco59_m'] ?></td>
			<td><?= $vih['sesenta64_h'] ?></td>
			<td><?= $vih['sesenta64_m'] ?></td>
			<td><?= $vih['mayor64_h'] ?></td>
			<td><?= $vih['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $vih['total_h'] ?></td>
			<td><?= $vih['total_m'] ?></td>
			<td><?= $vih['total'] ?></td>
		</tr>
		<tr>
			<td><b>12</b></td>
			<td>Enfermedad VIH/SIDA (B20-B24)</td>
			<td><?= $sida['menor1_h'] ?></td>
			<td><?= $sida['menor1_m'] ?></td>
			<td><?= $sida['uno4_h'] ?></td>
			<td><?= $sida['uno4_m'] ?></td>
			<td><?= $sida['cinco6_h'] ?></td>
			<td><?= $sida['cinco6_m'] ?></td>
			<td><?= $sida['siete9_h'] ?></td>
			<td><?= $sida['siete9_m'] ?></td>
			<td><?= $sida['diez11_h'] ?></td>
			<td><?= $sida['diez11_m'] ?></td>
			<td><?= $sida['doce14_h'] ?></td>
			<td><?= $sida['doce14_m'] ?></td>
			<td><?= $sida['quince19_h'] ?></td>
			<td><?= $sida['quince19_m'] ?></td>
			<td><?= $sida['veinte24_h'] ?></td>
			<td><?= $sida['veinte24_m'] ?></td>
			<td><?= $sida['veinticinco44_h'] ?></td>
			<td><?= $sida['veinticinco44_m'] ?></td>
			<td><?= $sida['cuarentaycinco59_h'] ?></td>
			<td><?= $sida['cuarentaycinco59_m'] ?></td>
			<td><?= $sida['sesenta64_h'] ?></td>
			<td><?= $sida['sesenta64_m'] ?></td>
			<td><?= $sida['mayor64_h'] ?></td>
			<td><?= $sida['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sida['total_h'] ?></td>
			<td><?= $sida['total_m'] ?></td>
			<td><?= $sida['total'] ?></td>
		</tr>
		<tr>
			<td><b>13</b></td>
			<td>Tosferina (A37)</td>
			<td><?= $tosferina['menor1_h'] ?></td>
			<td><?= $tosferina['menor1_m'] ?></td>
			<td><?= $tosferina['uno4_h'] ?></td>
			<td><?= $tosferina['uno4_m'] ?></td>
			<td><?= $tosferina['cinco6_h'] ?></td>
			<td><?= $tosferina['cinco6_m'] ?></td>
			<td><?= $tosferina['siete9_h'] ?></td>
			<td><?= $tosferina['siete9_m'] ?></td>
			<td><?= $tosferina['diez11_h'] ?></td>
			<td><?= $tosferina['diez11_m'] ?></td>
			<td><?= $tosferina['doce14_h'] ?></td>
			<td><?= $tosferina['doce14_m'] ?></td>
			<td><?= $tosferina['quince19_h'] ?></td>
			<td><?= $tosferina['quince19_m'] ?></td>
			<td><?= $tosferina['veinte24_h'] ?></td>
			<td><?= $tosferina['veinte24_m'] ?></td>
			<td><?= $tosferina['veinticinco44_h'] ?></td>
			<td><?= $tosferina['veinticinco44_m'] ?></td>
			<td><?= $tosferina['cuarentaycinco59_h'] ?></td>
			<td><?= $tosferina['cuarentaycinco59_m'] ?></td>
			<td><?= $tosferina['sesenta64_h'] ?></td>
			<td><?= $tosferina['sesenta64_m'] ?></td>
			<td><?= $tosferina['mayor64_h'] ?></td>
			<td><?= $tosferina['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $tosferina['total_h'] ?></td>
			<td><?= $tosferina['total_m'] ?></td>
			<td><?= $tosferina['total'] ?></td>
		</tr>
		<tr>
			<td><b>14</b></td>
			<td>Parotiditis (B26)</td>
			<td><?= $parotiditis['menor1_h'] ?></td>
			<td><?= $parotiditis['menor1_m'] ?></td>
			<td><?= $parotiditis['uno4_h'] ?></td>
			<td><?= $parotiditis['uno4_m'] ?></td>
			<td><?= $parotiditis['cinco6_h'] ?></td>
			<td><?= $parotiditis['cinco6_m'] ?></td>
			<td><?= $parotiditis['siete9_h'] ?></td>
			<td><?= $parotiditis['siete9_m'] ?></td>
			<td><?= $parotiditis['diez11_h'] ?></td>
			<td><?= $parotiditis['diez11_m'] ?></td>
			<td><?= $parotiditis['doce14_h'] ?></td>
			<td><?= $parotiditis['doce14_m'] ?></td>
			<td><?= $parotiditis['quince19_h'] ?></td>
			<td><?= $parotiditis['quince19_m'] ?></td>
			<td><?= $parotiditis['veinte24_h'] ?></td>
			<td><?= $parotiditis['veinte24_m'] ?></td>
			<td><?= $parotiditis['veinticinco44_h'] ?></td>
			<td><?= $parotiditis['veinticinco44_m'] ?></td>
			<td><?= $parotiditis['cuarentaycinco59_h'] ?></td>
			<td><?= $parotiditis['cuarentaycinco59_m'] ?></td>
			<td><?= $parotiditis['sesenta64_h'] ?></td>
			<td><?= $parotiditis['sesenta64_m'] ?></td>
			<td><?= $parotiditis['mayor64_h'] ?></td>
			<td><?= $parotiditis['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $parotiditis['total_h'] ?></td>
			<td><?= $parotiditis['total_m'] ?></td>
			<td><?= $parotiditis['total'] ?></td>
		</tr>
		<tr>
			<td><b>15</b></td>
			<td>Tétanos Neonatal (A33)</td>
			<td><?= $tetaneo['menor1_h'] ?></td>
			<td><?= $tetaneo['menor1_m'] ?></td>
			<td><?= $tetaneo['uno4_h'] ?></td>
			<td><?= $tetaneo['uno4_m'] ?></td>
			<td><?= $tetaneo['cinco6_h'] ?></td>
			<td><?= $tetaneo['cinco6_m'] ?></td>
			<td><?= $tetaneo['siete9_h'] ?></td>
			<td><?= $tetaneo['siete9_m'] ?></td>
			<td><?= $tetaneo['diez11_h'] ?></td>
			<td><?= $tetaneo['diez11_m'] ?></td>
			<td><?= $tetaneo['doce14_h'] ?></td>
			<td><?= $tetaneo['doce14_m'] ?></td>
			<td><?= $tetaneo['quince19_h'] ?></td>
			<td><?= $tetaneo['quince19_m'] ?></td>
			<td><?= $tetaneo['veinte24_h'] ?></td>
			<td><?= $tetaneo['veinte24_m'] ?></td>
			<td><?= $tetaneo['veinticinco44_h'] ?></td>
			<td><?= $tetaneo['veinticinco44_m'] ?></td>
			<td><?= $tetaneo['cuarentaycinco59_h'] ?></td>
			<td><?= $tetaneo['cuarentaycinco59_m'] ?></td>
			<td><?= $tetaneo['sesenta64_h'] ?></td>
			<td><?= $tetaneo['sesenta64_m'] ?></td>
			<td><?= $tetaneo['mayor64_h'] ?></td>
			<td><?= $tetaneo['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $tetaneo['total_h'] ?></td>
			<td><?= $tetaneo['total_m'] ?></td>
			<td><?= $tetaneo['total'] ?></td>
		</tr>
		<tr>
			<td><b>16</b></td>
			<td>Tétanos Obstétrico (A34)</td>
			<td><?= $tetaobs['menor1_h'] ?></td>
			<td><?= $tetaobs['menor1_m'] ?></td>
			<td><?= $tetaobs['uno4_h'] ?></td>
			<td><?= $tetaobs['uno4_m'] ?></td>
			<td><?= $tetaobs['cinco6_h'] ?></td>
			<td><?= $tetaobs['cinco6_m'] ?></td>
			<td><?= $tetaobs['siete9_h'] ?></td>
			<td><?= $tetaobs['siete9_m'] ?></td>
			<td><?= $tetaobs['diez11_h'] ?></td>
			<td><?= $tetaobs['diez11_m'] ?></td>
			<td><?= $tetaobs['doce14_h'] ?></td>
			<td><?= $tetaobs['doce14_m'] ?></td>
			<td><?= $tetaobs['quince19_h'] ?></td>
			<td><?= $tetaobs['quince19_m'] ?></td>
			<td><?= $tetaobs['veinte24_h'] ?></td>
			<td><?= $tetaobs['veinte24_m'] ?></td>
			<td><?= $tetaobs['veinticinco44_h'] ?></td>
			<td><?= $tetaobs['veinticinco44_m'] ?></td>
			<td><?= $tetaobs['cuarentaycinco59_h'] ?></td>
			<td><?= $tetaobs['cuarentaycinco59_m'] ?></td>
			<td><?= $tetaobs['sesenta64_h'] ?></td>
			<td><?= $tetaobs['sesenta64_m'] ?></td>
			<td><?= $tetaobs['mayor64_h'] ?></td>
			<td><?= $tetaobs['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $tetaobs['total_h'] ?></td>
			<td><?= $tetaobs['total_m'] ?></td>
			<td><?= $tetaobs['total'] ?></td>
		</tr>
		<tr>
			<td><b>17</b></td>
			<td>Tétanos (otros) (A35)</td>
			<td><?= $tetaotros['menor1_h'] ?></td>
			<td><?= $tetaotros['menor1_m'] ?></td>
			<td><?= $tetaotros['uno4_h'] ?></td>
			<td><?= $tetaotros['uno4_m'] ?></td>
			<td><?= $tetaotros['cinco6_h'] ?></td>
			<td><?= $tetaotros['cinco6_m'] ?></td>
			<td><?= $tetaotros['siete9_h'] ?></td>
			<td><?= $tetaotros['siete9_m'] ?></td>
			<td><?= $tetaotros['diez11_h'] ?></td>
			<td><?= $tetaotros['diez11_m'] ?></td>
			<td><?= $tetaotros['doce14_h'] ?></td>
			<td><?= $tetaotros['doce14_m'] ?></td>
			<td><?= $tetaotros['quince19_h'] ?></td>
			<td><?= $tetaotros['quince19_m'] ?></td>
			<td><?= $tetaotros['veinte24_h'] ?></td>
			<td><?= $tetaotros['veinte24_m'] ?></td>
			<td><?= $tetaotros['veinticinco44_h'] ?></td>
			<td><?= $tetaotros['veinticinco44_m'] ?></td>
			<td><?= $tetaotros['cuarentaycinco59_h'] ?></td>
			<td><?= $tetaotros['cuarentaycinco59_m'] ?></td>
			<td><?= $tetaotros['sesenta64_h'] ?></td>
			<td><?= $tetaotros['sesenta64_m'] ?></td>
			<td><?= $tetaotros['mayor64_h'] ?></td>
			<td><?= $tetaotros['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $tetaotros['total_h'] ?></td>
			<td><?= $tetaotros['total_m'] ?></td>
			<td><?= $tetaotros['total'] ?></td>
		</tr>
		<tr>
			<td><b>18</b></td>
			<td>Difteria (A36)</td>
			<td><?= $difteria['menor1_h'] ?></td>
			<td><?= $difteria['menor1_m'] ?></td>
			<td><?= $difteria['uno4_h'] ?></td>
			<td><?= $difteria['uno4_m'] ?></td>
			<td><?= $difteria['cinco6_h'] ?></td>
			<td><?= $difteria['cinco6_m'] ?></td>
			<td><?= $difteria['siete9_h'] ?></td>
			<td><?= $difteria['siete9_m'] ?></td>
			<td><?= $difteria['diez11_h'] ?></td>
			<td><?= $difteria['diez11_m'] ?></td>
			<td><?= $difteria['doce14_h'] ?></td>
			<td><?= $difteria['doce14_m'] ?></td>
			<td><?= $difteria['quince19_h'] ?></td>
			<td><?= $difteria['quince19_m'] ?></td>
			<td><?= $difteria['veinte24_h'] ?></td>
			<td><?= $difteria['veinte24_m'] ?></td>
			<td><?= $difteria['veinticinco44_h'] ?></td>
			<td><?= $difteria['veinticinco44_m'] ?></td>
			<td><?= $difteria['cuarentaycinco59_h'] ?></td>
			<td><?= $difteria['cuarentaycinco59_m'] ?></td>
			<td><?= $difteria['sesenta64_h'] ?></td>
			<td><?= $difteria['sesenta64_m'] ?></td>
			<td><?= $difteria['mayor64_h'] ?></td>
			<td><?= $difteria['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $difteria['total_h'] ?></td>
			<td><?= $difteria['total_m'] ?></td>
			<td><?= $difteria['total'] ?></td>
		</tr>
		<tr>
			<td><b>19</b></td>
			<td>Sarampión (B05)</td>
			<td><?= $sarampion['menor1_h'] ?></td>
			<td><?= $sarampion['menor1_m'] ?></td>
			<td><?= $sarampion['uno4_h'] ?></td>
			<td><?= $sarampion['uno4_m'] ?></td>
			<td><?= $sarampion['cinco6_h'] ?></td>
			<td><?= $sarampion['cinco6_m'] ?></td>
			<td><?= $sarampion['siete9_h'] ?></td>
			<td><?= $sarampion['siete9_m'] ?></td>
			<td><?= $sarampion['diez11_h'] ?></td>
			<td><?= $sarampion['diez11_m'] ?></td>
			<td><?= $sarampion['doce14_h'] ?></td>
			<td><?= $sarampion['doce14_m'] ?></td>
			<td><?= $sarampion['quince19_h'] ?></td>
			<td><?= $sarampion['quince19_m'] ?></td>
			<td><?= $sarampion['veinte24_h'] ?></td>
			<td><?= $sarampion['veinte24_m'] ?></td>
			<td><?= $sarampion['veinticinco44_h'] ?></td>
			<td><?= $sarampion['veinticinco44_m'] ?></td>
			<td><?= $sarampion['cuarentaycinco59_h'] ?></td>
			<td><?= $sarampion['cuarentaycinco59_m'] ?></td>
			<td><?= $sarampion['sesenta64_h'] ?></td>
			<td><?= $sarampion['sesenta64_m'] ?></td>
			<td><?= $sarampion['mayor64_h'] ?></td>
			<td><?= $sarampion['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sarampion['total_h'] ?></td>
			<td><?= $sarampion['total_m'] ?></td>
			<td><?= $sarampion['total'] ?></td>
		</tr>
		<tr>
			<td><b>20</b></td>
			<td>Rubéola (B06)</td>
			<td><?= $rubeola['menor1_h'] ?></td>
			<td><?= $rubeola['menor1_m'] ?></td>
			<td><?= $rubeola['uno4_h'] ?></td>
			<td><?= $rubeola['uno4_m'] ?></td>
			<td><?= $rubeola['cinco6_h'] ?></td>
			<td><?= $rubeola['cinco6_m'] ?></td>
			<td><?= $rubeola['siete9_h'] ?></td>
			<td><?= $rubeola['siete9_m'] ?></td>
			<td><?= $rubeola['diez11_h'] ?></td>
			<td><?= $rubeola['diez11_m'] ?></td>
			<td><?= $rubeola['doce14_h'] ?></td>
			<td><?= $rubeola['doce14_m'] ?></td>
			<td><?= $rubeola['quince19_h'] ?></td>
			<td><?= $rubeola['quince19_m'] ?></td>
			<td><?= $rubeola['veinte24_h'] ?></td>
			<td><?= $rubeola['veinte24_m'] ?></td>
			<td><?= $rubeola['veinticinco44_h'] ?></td>
			<td><?= $rubeola['veinticinco44_m'] ?></td>
			<td><?= $rubeola['cuarentaycinco59_h'] ?></td>
			<td><?= $rubeola['cuarentaycinco59_m'] ?></td>
			<td><?= $rubeola['sesenta64_h'] ?></td>
			<td><?= $rubeola['sesenta64_m'] ?></td>
			<td><?= $rubeola['mayor64_h'] ?></td>
			<td><?= $rubeola['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $rubeola['total_h'] ?></td>
			<td><?= $rubeola['total_m'] ?></td>
			<td><?= $rubeola['total'] ?></td>
		</tr>
		<tr>
			<td><b>21</b></td>
			<td>Dengue sin Signos de Alarma (A90)</td>
			<td><?= $denguesina['menor1_h'] ?></td>
			<td><?= $denguesina['menor1_m'] ?></td>
			<td><?= $denguesina['uno4_h'] ?></td>
			<td><?= $denguesina['uno4_m'] ?></td>
			<td><?= $denguesina['cinco6_h'] ?></td>
			<td><?= $denguesina['cinco6_m'] ?></td>
			<td><?= $denguesina['siete9_h'] ?></td>
			<td><?= $denguesina['siete9_m'] ?></td>
			<td><?= $denguesina['diez11_h'] ?></td>
			<td><?= $denguesina['diez11_m'] ?></td>
			<td><?= $denguesina['doce14_h'] ?></td>
			<td><?= $denguesina['doce14_m'] ?></td>
			<td><?= $denguesina['quince19_h'] ?></td>
			<td><?= $denguesina['quince19_m'] ?></td>
			<td><?= $denguesina['veinte24_h'] ?></td>
			<td><?= $denguesina['veinte24_m'] ?></td>
			<td><?= $denguesina['veinticinco44_h'] ?></td>
			<td><?= $denguesina['veinticinco44_m'] ?></td>
			<td><?= $denguesina['cuarentaycinco59_h'] ?></td>
			<td><?= $denguesina['cuarentaycinco59_m'] ?></td>
			<td><?= $denguesina['sesenta64_h'] ?></td>
			<td><?= $denguesina['sesenta64_m'] ?></td>
			<td><?= $denguesina['mayor64_h'] ?></td>
			<td><?= $denguesina['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $denguesina['total_h'] ?></td>
			<td><?= $denguesina['total_m'] ?></td>
			<td><?= $denguesina['total'] ?></td>
		</tr>
		<tr>
			<td><b>22</b></td>
			<td>Dengue con Signos de Alarma (A90)</td>
			<td><?= $dengue['menor1_h'] ?></td>
			<td><?= $dengue['menor1_m'] ?></td>
			<td><?= $dengue['uno4_h'] ?></td>
			<td><?= $dengue['uno4_m'] ?></td>
			<td><?= $dengue['cinco6_h'] ?></td>
			<td><?= $dengue['cinco6_m'] ?></td>
			<td><?= $dengue['siete9_h'] ?></td>
			<td><?= $dengue['siete9_m'] ?></td>
			<td><?= $dengue['diez11_h'] ?></td>
			<td><?= $dengue['diez11_m'] ?></td>
			<td><?= $dengue['doce14_h'] ?></td>
			<td><?= $dengue['doce14_m'] ?></td>
			<td><?= $dengue['quince19_h'] ?></td>
			<td><?= $dengue['quince19_m'] ?></td>
			<td><?= $dengue['veinte24_h'] ?></td>
			<td><?= $dengue['veinte24_m'] ?></td>
			<td><?= $dengue['veinticinco44_h'] ?></td>
			<td><?= $dengue['veinticinco44_m'] ?></td>
			<td><?= $dengue['cuarentaycinco59_h'] ?></td>
			<td><?= $dengue['cuarentaycinco59_m'] ?></td>
			<td><?= $dengue['sesenta64_h'] ?></td>
			<td><?= $dengue['sesenta64_m'] ?></td>
			<td><?= $dengue['mayor64_h'] ?></td>
			<td><?= $dengue['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $dengue['total_h'] ?></td>
			<td><?= $dengue['total_m'] ?></td>
			<td><?= $dengue['total'] ?></td>
		</tr>
		<tr>
			<td><b>23</b></td>
			<td>Dengue Hemorragico (A91)</td>
			<td><?= $denguehemo['menor1_h'] ?></td>
			<td><?= $denguehemo['menor1_m'] ?></td>
			<td><?= $denguehemo['uno4_h'] ?></td>
			<td><?= $denguehemo['uno4_m'] ?></td>
			<td><?= $denguehemo['cinco6_h'] ?></td>
			<td><?= $denguehemo['cinco6_m'] ?></td>
			<td><?= $denguehemo['siete9_h'] ?></td>
			<td><?= $denguehemo['siete9_m'] ?></td>
			<td><?= $denguehemo['diez11_h'] ?></td>
			<td><?= $denguehemo['diez11_m'] ?></td>
			<td><?= $denguehemo['doce14_h'] ?></td>
			<td><?= $denguehemo['doce14_m'] ?></td>
			<td><?= $denguehemo['quince19_h'] ?></td>
			<td><?= $denguehemo['quince19_m'] ?></td>
			<td><?= $denguehemo['veinte24_h'] ?></td>
			<td><?= $denguehemo['veinte24_m'] ?></td>
			<td><?= $denguehemo['veinticinco44_h'] ?></td>
			<td><?= $denguehemo['veinticinco44_m'] ?></td>
			<td><?= $denguehemo['cuarentaycinco59_h'] ?></td>
			<td><?= $denguehemo['cuarentaycinco59_m'] ?></td>
			<td><?= $denguehemo['sesenta64_h'] ?></td>
			<td><?= $denguehemo['sesenta64_m'] ?></td>
			<td><?= $denguehemo['mayor64_h'] ?></td>
			<td><?= $denguehemo['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $denguehemo['total_h'] ?></td>
			<td><?= $denguehemo['total_m'] ?></td>
			<td><?= $denguehemo['total'] ?></td>
		</tr>
		<tr>
			<td><b>24</b></td>
			<td>Encefalitis Equina Venezolana (A92.2)</td>
			<td><?= $encequiven['menor1_h'] ?></td>
			<td><?= $encequiven['menor1_m'] ?></td>
			<td><?= $encequiven['uno4_h'] ?></td>
			<td><?= $encequiven['uno4_m'] ?></td>
			<td><?= $encequiven['cinco6_h'] ?></td>
			<td><?= $encequiven['cinco6_m'] ?></td>
			<td><?= $encequiven['siete9_h'] ?></td>
			<td><?= $encequiven['siete9_m'] ?></td>
			<td><?= $encequiven['diez11_h'] ?></td>
			<td><?= $encequiven['diez11_m'] ?></td>
			<td><?= $encequiven['doce14_h'] ?></td>
			<td><?= $encequiven['doce14_m'] ?></td>
			<td><?= $encequiven['quince19_h'] ?></td>
			<td><?= $encequiven['quince19_m'] ?></td>
			<td><?= $encequiven['veinte24_h'] ?></td>
			<td><?= $encequiven['veinte24_m'] ?></td>
			<td><?= $encequiven['veinticinco44_h'] ?></td>
			<td><?= $encequiven['veinticinco44_m'] ?></td>
			<td><?= $encequiven['cuarentaycinco59_h'] ?></td>
			<td><?= $encequiven['cuarentaycinco59_m'] ?></td>
			<td><?= $encequiven['sesenta64_h'] ?></td>
			<td><?= $encequiven['sesenta64_m'] ?></td>
			<td><?= $encequiven['mayor64_h'] ?></td>
			<td><?= $encequiven['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $encequiven['total_h'] ?></td>
			<td><?= $encequiven['total_m'] ?></td>
			<td><?= $encequiven['total'] ?></td>
		</tr>
		<tr>
			<td><b>25</b></td>
			<td>Fiebre Amarilla (A95)</td>
			<td><?= $fiebreamarilla['menor1_h'] ?></td>
			<td><?= $fiebreamarilla['menor1_m'] ?></td>
			<td><?= $fiebreamarilla['uno4_h'] ?></td>
			<td><?= $fiebreamarilla['uno4_m'] ?></td>
			<td><?= $fiebreamarilla['cinco6_h'] ?></td>
			<td><?= $fiebreamarilla['cinco6_m'] ?></td>
			<td><?= $fiebreamarilla['siete9_h'] ?></td>
			<td><?= $fiebreamarilla['siete9_m'] ?></td>
			<td><?= $fiebreamarilla['diez11_h'] ?></td>
			<td><?= $fiebreamarilla['diez11_m'] ?></td>
			<td><?= $fiebreamarilla['doce14_h'] ?></td>
			<td><?= $fiebreamarilla['doce14_m'] ?></td>
			<td><?= $fiebreamarilla['quince19_h'] ?></td>
			<td><?= $fiebreamarilla['quince19_m'] ?></td>
			<td><?= $fiebreamarilla['veinte24_h'] ?></td>
			<td><?= $fiebreamarilla['veinte24_m'] ?></td>
			<td><?= $fiebreamarilla['veinticinco44_h'] ?></td>
			<td><?= $fiebreamarilla['veinticinco44_m'] ?></td>
			<td><?= $fiebreamarilla['cuarentaycinco59_h'] ?></td>
			<td><?= $fiebreamarilla['cuarentaycinco59_m'] ?></td>
			<td><?= $fiebreamarilla['sesenta64_h'] ?></td>
			<td><?= $fiebreamarilla['sesenta64_m'] ?></td>
			<td><?= $fiebreamarilla['mayor64_h'] ?></td>
			<td><?= $fiebreamarilla['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $fiebreamarilla['total_h'] ?></td>
			<td><?= $fiebreamarilla['total_m'] ?></td>
			<td><?= $fiebreamarilla['total'] ?></td>
		</tr>
		<tr>
			<td><b>26</b></td>
			<td>Leishmaniasis Viceral (B55.0)</td>
			<td><?= $leisvi['menor1_h'] ?></td>
			<td><?= $leisvi['menor1_m'] ?></td>
			<td><?= $leisvi['uno4_h'] ?></td>
			<td><?= $leisvi['uno4_m'] ?></td>
			<td><?= $leisvi['cinco6_h'] ?></td>
			<td><?= $leisvi['cinco6_m'] ?></td>
			<td><?= $leisvi['siete9_h'] ?></td>
			<td><?= $leisvi['siete9_m'] ?></td>
			<td><?= $leisvi['diez11_h'] ?></td>
			<td><?= $leisvi['diez11_m'] ?></td>
			<td><?= $leisvi['doce14_h'] ?></td>
			<td><?= $leisvi['doce14_m'] ?></td>
			<td><?= $leisvi['quince19_h'] ?></td>
			<td><?= $leisvi['quince19_m'] ?></td>
			<td><?= $leisvi['veinte24_h'] ?></td>
			<td><?= $leisvi['veinte24_m'] ?></td>
			<td><?= $leisvi['veinticinco44_h'] ?></td>
			<td><?= $leisvi['veinticinco44_m'] ?></td>
			<td><?= $leisvi['cuarentaycinco59_h'] ?></td>
			<td><?= $leisvi['cuarentaycinco59_m'] ?></td>
			<td><?= $leisvi['sesenta64_h'] ?></td>
			<td><?= $leisvi['sesenta64_m'] ?></td>
			<td><?= $leisvi['mayor64_h'] ?></td>
			<td><?= $leisvi['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $leisvi['total_h'] ?></td>
			<td><?= $leisvi['total_m'] ?></td>
			<td><?= $leisvi['total'] ?></td>
		</tr>
		<tr>
			<td><b>27</b></td>
			<td>Leishmaniasis Cutanea (B55.1)</td>
			<td><?= $leiscu['menor1_h'] ?></td>
			<td><?= $leiscu['menor1_m'] ?></td>
			<td><?= $leiscu['uno4_h'] ?></td>
			<td><?= $leiscu['uno4_m'] ?></td>
			<td><?= $leiscu['cinco6_h'] ?></td>
			<td><?= $leiscu['cinco6_m'] ?></td>
			<td><?= $leiscu['siete9_h'] ?></td>
			<td><?= $leiscu['siete9_m'] ?></td>
			<td><?= $leiscu['diez11_h'] ?></td>
			<td><?= $leiscu['diez11_m'] ?></td>
			<td><?= $leiscu['doce14_h'] ?></td>
			<td><?= $leiscu['doce14_m'] ?></td>
			<td><?= $leiscu['quince19_h'] ?></td>
			<td><?= $leiscu['quince19_m'] ?></td>
			<td><?= $leiscu['veinte24_h'] ?></td>
			<td><?= $leiscu['veinte24_m'] ?></td>
			<td><?= $leiscu['veinticinco44_h'] ?></td>
			<td><?= $leiscu['veinticinco44_m'] ?></td>
			<td><?= $leiscu['cuarentaycinco59_h'] ?></td>
			<td><?= $leiscu['cuarentaycinco59_m'] ?></td>
			<td><?= $leiscu['sesenta64_h'] ?></td>
			<td><?= $leiscu['sesenta64_m'] ?></td>
			<td><?= $leiscu['mayor64_h'] ?></td>
			<td><?= $leiscu['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $leiscu['total_h'] ?></td>
			<td><?= $leiscu['total_m'] ?></td>
			<td><?= $leiscu['total'] ?></td>
		</tr>
		<tr>
			<td><b>28</b></td>
			<td>Leishmaniasis Mucocutanea (B55.2)</td>
			<td><?= $leismuco['menor1_h'] ?></td>
			<td><?= $leismuco['menor1_m'] ?></td>
			<td><?= $leismuco['uno4_h'] ?></td>
			<td><?= $leismuco['uno4_m'] ?></td>
			<td><?= $leismuco['cinco6_h'] ?></td>
			<td><?= $leismuco['cinco6_m'] ?></td>
			<td><?= $leismuco['siete9_h'] ?></td>
			<td><?= $leismuco['siete9_m'] ?></td>
			<td><?= $leismuco['diez11_h'] ?></td>
			<td><?= $leismuco['diez11_m'] ?></td>
			<td><?= $leismuco['doce14_h'] ?></td>
			<td><?= $leismuco['doce14_m'] ?></td>
			<td><?= $leismuco['quince19_h'] ?></td>
			<td><?= $leismuco['quince19_m'] ?></td>
			<td><?= $leismuco['veinte24_h'] ?></td>
			<td><?= $leismuco['veinte24_m'] ?></td>
			<td><?= $leismuco['veinticinco44_h'] ?></td>
			<td><?= $leismuco['veinticinco44_m'] ?></td>
			<td><?= $leismuco['cuarentaycinco59_h'] ?></td>
			<td><?= $leismuco['cuarentaycinco59_m'] ?></td>
			<td><?= $leismuco['sesenta64_h'] ?></td>
			<td><?= $leismuco['sesenta64_m'] ?></td>
			<td><?= $leismuco['mayor64_h'] ?></td>
			<td><?= $leismuco['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $leismuco['total_h'] ?></td>
			<td><?= $leismuco['total_m'] ?></td>
			<td><?= $leismuco['total'] ?></td>
		</tr>
		<tr>
			<td><b>29</b></td>
			<td>Leishmaniasis no Especificada (B.55.9)</td>
			<td><?= $leisnoesp['menor1_h'] ?></td>
			<td><?= $leisnoesp['menor1_m'] ?></td>
			<td><?= $leisnoesp['uno4_h'] ?></td>
			<td><?= $leisnoesp['uno4_m'] ?></td>
			<td><?= $leisnoesp['cinco6_h'] ?></td>
			<td><?= $leisnoesp['cinco6_m'] ?></td>
			<td><?= $leisnoesp['siete9_h'] ?></td>
			<td><?= $leisnoesp['siete9_m'] ?></td>
			<td><?= $leisnoesp['diez11_h'] ?></td>
			<td><?= $leisnoesp['diez11_m'] ?></td>
			<td><?= $leisnoesp['doce14_h'] ?></td>
			<td><?= $leisnoesp['doce14_m'] ?></td>
			<td><?= $leisnoesp['quince19_h'] ?></td>
			<td><?= $leisnoesp['quince19_m'] ?></td>
			<td><?= $leisnoesp['veinte24_h'] ?></td>
			<td><?= $leisnoesp['veinte24_m'] ?></td>
			<td><?= $leisnoesp['veinticinco44_h'] ?></td>
			<td><?= $leisnoesp['veinticinco44_m'] ?></td>
			<td><?= $leisnoesp['cuarentaycinco59_h'] ?></td>
			<td><?= $leisnoesp['cuarentaycinco59_m'] ?></td>
			<td><?= $leisnoesp['sesenta64_h'] ?></td>
			<td><?= $leisnoesp['sesenta64_m'] ?></td>
			<td><?= $leisnoesp['mayor64_h'] ?></td>
			<td><?= $leisnoesp['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $leisnoesp['total_h'] ?></td>
			<td><?= $leisnoesp['total_m'] ?></td>
			<td><?= $leisnoesp['total'] ?></td>
		</tr>
		<tr>
			<td><b>30</b></td>
			<td>Enfermedad de Chagas Aguda (B57.0-B57.1)</td>
			<td><?= $chagasaguda['menor1_h'] ?></td>
			<td><?= $chagasaguda['menor1_m'] ?></td>
			<td><?= $chagasaguda['uno4_h'] ?></td>
			<td><?= $chagasaguda['uno4_m'] ?></td>
			<td><?= $chagasaguda['cinco6_h'] ?></td>
			<td><?= $chagasaguda['cinco6_m'] ?></td>
			<td><?= $chagasaguda['siete9_h'] ?></td>
			<td><?= $chagasaguda['siete9_m'] ?></td>
			<td><?= $chagasaguda['diez11_h'] ?></td>
			<td><?= $chagasaguda['diez11_m'] ?></td>
			<td><?= $chagasaguda['doce14_h'] ?></td>
			<td><?= $chagasaguda['doce14_m'] ?></td>
			<td><?= $chagasaguda['quince19_h'] ?></td>
			<td><?= $chagasaguda['quince19_m'] ?></td>
			<td><?= $chagasaguda['veinte24_h'] ?></td>
			<td><?= $chagasaguda['veinte24_m'] ?></td>
			<td><?= $chagasaguda['veinticinco44_h'] ?></td>
			<td><?= $chagasaguda['veinticinco44_m'] ?></td>
			<td><?= $chagasaguda['cuarentaycinco59_h'] ?></td>
			<td><?= $chagasaguda['cuarentaycinco59_m'] ?></td>
			<td><?= $chagasaguda['sesenta64_h'] ?></td>
			<td><?= $chagasaguda['sesenta64_m'] ?></td>
			<td><?= $chagasaguda['mayor64_h'] ?></td>
			<td><?= $chagasaguda['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $chagasaguda['total_h'] ?></td>
			<td><?= $chagasaguda['total_m'] ?></td>
			<td><?= $chagasaguda['total'] ?></td>
		</tr>
		<tr>
			<td><b>31</b></td>
			<td>Enfermedad de Chagas Cronica (B57.2-B57.5)</td>
			<td><?= $chagascronica['menor1_h'] ?></td>
			<td><?= $chagascronica['menor1_m'] ?></td>
			<td><?= $chagascronica['uno4_h'] ?></td>
			<td><?= $chagascronica['uno4_m'] ?></td>
			<td><?= $chagascronica['cinco6_h'] ?></td>
			<td><?= $chagascronica['cinco6_m'] ?></td>
			<td><?= $chagascronica['siete9_h'] ?></td>
			<td><?= $chagascronica['siete9_m'] ?></td>
			<td><?= $chagascronica['diez11_h'] ?></td>
			<td><?= $chagascronica['diez11_m'] ?></td>
			<td><?= $chagascronica['doce14_h'] ?></td>
			<td><?= $chagascronica['doce14_m'] ?></td>
			<td><?= $chagascronica['quince19_h'] ?></td>
			<td><?= $chagascronica['quince19_m'] ?></td>
			<td><?= $chagascronica['veinte24_h'] ?></td>
			<td><?= $chagascronica['veinte24_m'] ?></td>
			<td><?= $chagascronica['veinticinco44_h'] ?></td>
			<td><?= $chagascronica['veinticinco44_m'] ?></td>
			<td><?= $chagascronica['cuarentaycinco59_h'] ?></td>
			<td><?= $chagascronica['cuarentaycinco59_m'] ?></td>
			<td><?= $chagascronica['sesenta64_h'] ?></td>
			<td><?= $chagascronica['sesenta64_m'] ?></td>
			<td><?= $chagascronica['mayor64_h'] ?></td>
			<td><?= $chagascronica['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $chagascronica['total_h'] ?></td>
			<td><?= $chagascronica['total_m'] ?></td>
			<td><?= $chagascronica['total'] ?></td>
		</tr>
		<tr>
			<td><b>32</b></td>
			<td>Rabia Humana (A82)</td>
			<td><?= $rabia['menor1_h'] ?></td>
			<td><?= $rabia['menor1_m'] ?></td>
			<td><?= $rabia['uno4_h'] ?></td>
			<td><?= $rabia['uno4_m'] ?></td>
			<td><?= $rabia['cinco6_h'] ?></td>
			<td><?= $rabia['cinco6_m'] ?></td>
			<td><?= $rabia['siete9_h'] ?></td>
			<td><?= $rabia['siete9_m'] ?></td>
			<td><?= $rabia['diez11_h'] ?></td>
			<td><?= $rabia['diez11_m'] ?></td>
			<td><?= $rabia['doce14_h'] ?></td>
			<td><?= $rabia['doce14_m'] ?></td>
			<td><?= $rabia['quince19_h'] ?></td>
			<td><?= $rabia['quince19_m'] ?></td>
			<td><?= $rabia['veinte24_h'] ?></td>
			<td><?= $rabia['veinte24_m'] ?></td>
			<td><?= $rabia['veinticinco44_h'] ?></td>
			<td><?= $rabia['veinticinco44_m'] ?></td>
			<td><?= $rabia['cuarentaycinco59_h'] ?></td>
			<td><?= $rabia['cuarentaycinco59_m'] ?></td>
			<td><?= $rabia['sesenta64_h'] ?></td>
			<td><?= $rabia['sesenta64_m'] ?></td>
			<td><?= $rabia['mayor64_h'] ?></td>
			<td><?= $rabia['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $rabia['total_h'] ?></td>
			<td><?= $rabia['total_m'] ?></td>
			<td><?= $rabia['total'] ?></td>
		</tr>
		<tr>
			<td><b>33</b></td>
			<td>Fiebre Hemorrágica Venezolana (A96.8)</td>
			<td><?= $fiebrehemo['menor1_h'] ?></td>
			<td><?= $fiebrehemo['menor1_m'] ?></td>
			<td><?= $fiebrehemo['uno4_h'] ?></td>
			<td><?= $fiebrehemo['uno4_m'] ?></td>
			<td><?= $fiebrehemo['cinco6_h'] ?></td>
			<td><?= $fiebrehemo['cinco6_m'] ?></td>
			<td><?= $fiebrehemo['siete9_h'] ?></td>
			<td><?= $fiebrehemo['siete9_m'] ?></td>
			<td><?= $fiebrehemo['diez11_h'] ?></td>
			<td><?= $fiebrehemo['diez11_m'] ?></td>
			<td><?= $fiebrehemo['doce14_h'] ?></td>
			<td><?= $fiebrehemo['doce14_m'] ?></td>
			<td><?= $fiebrehemo['quince19_h'] ?></td>
			<td><?= $fiebrehemo['quince19_m'] ?></td>
			<td><?= $fiebrehemo['veinte24_h'] ?></td>
			<td><?= $fiebrehemo['veinte24_m'] ?></td>
			<td><?= $fiebrehemo['veinticinco44_h'] ?></td>
			<td><?= $fiebrehemo['veinticinco44_m'] ?></td>
			<td><?= $fiebrehemo['cuarentaycinco59_h'] ?></td>
			<td><?= $fiebrehemo['cuarentaycinco59_m'] ?></td>
			<td><?= $fiebrehemo['sesenta64_h'] ?></td>
			<td><?= $fiebrehemo['sesenta64_m'] ?></td>
			<td><?= $fiebrehemo['mayor64_h'] ?></td>
			<td><?= $fiebrehemo['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $fiebrehemo['total_h'] ?></td>
			<td><?= $fiebrehemo['total_m'] ?></td>
			<td><?= $fiebrehemo['total'] ?></td>
		</tr>
		<tr>
			<td><b>34</b></td>
			<td>Leptospirosis (A27)</td>
			<td><?= $leptopirosis['menor1_h'] ?></td>
			<td><?= $leptopirosis['menor1_m'] ?></td>
			<td><?= $leptopirosis['uno4_h'] ?></td>
			<td><?= $leptopirosis['uno4_m'] ?></td>
			<td><?= $leptopirosis['cinco6_h'] ?></td>
			<td><?= $leptopirosis['cinco6_m'] ?></td>
			<td><?= $leptopirosis['siete9_h'] ?></td>
			<td><?= $leptopirosis['siete9_m'] ?></td>
			<td><?= $leptopirosis['diez11_h'] ?></td>
			<td><?= $leptopirosis['diez11_m'] ?></td>
			<td><?= $leptopirosis['doce14_h'] ?></td>
			<td><?= $leptopirosis['doce14_m'] ?></td>
			<td><?= $leptopirosis['quince19_h'] ?></td>
			<td><?= $leptopirosis['quince19_m'] ?></td>
			<td><?= $leptopirosis['veinte24_h'] ?></td>
			<td><?= $leptopirosis['veinte24_m'] ?></td>
			<td><?= $leptopirosis['veinticinco44_h'] ?></td>
			<td><?= $leptopirosis['veinticinco44_m'] ?></td>
			<td><?= $leptopirosis['cuarentaycinco59_h'] ?></td>
			<td><?= $leptopirosis['cuarentaycinco59_m'] ?></td>
			<td><?= $leptopirosis['sesenta64_h'] ?></td>
			<td><?= $leptopirosis['sesenta64_m'] ?></td>
			<td><?= $leptopirosis['mayor64_h'] ?></td>
			<td><?= $leptopirosis['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $leptopirosis['total_h'] ?></td>
			<td><?= $leptopirosis['total_m'] ?></td>
			<td><?= $leptopirosis['total'] ?></td>
		</tr>
		<tr>
			<td><b>35</b></td>
			<td>Meningitis Viral (A87)</td>
			<td><?= $meninvi['menor1_h'] ?></td>
			<td><?= $meninvi['menor1_m'] ?></td>
			<td><?= $meninvi['uno4_h'] ?></td>
			<td><?= $meninvi['uno4_m'] ?></td>
			<td><?= $meninvi['cinco6_h'] ?></td>
			<td><?= $meninvi['cinco6_m'] ?></td>
			<td><?= $meninvi['siete9_h'] ?></td>
			<td><?= $meninvi['siete9_m'] ?></td>
			<td><?= $meninvi['diez11_h'] ?></td>
			<td><?= $meninvi['diez11_m'] ?></td>
			<td><?= $meninvi['doce14_h'] ?></td>
			<td><?= $meninvi['doce14_m'] ?></td>
			<td><?= $meninvi['quince19_h'] ?></td>
			<td><?= $meninvi['quince19_m'] ?></td>
			<td><?= $meninvi['veinte24_h'] ?></td>
			<td><?= $meninvi['veinte24_m'] ?></td>
			<td><?= $meninvi['veinticinco44_h'] ?></td>
			<td><?= $meninvi['veinticinco44_m'] ?></td>
			<td><?= $meninvi['cuarentaycinco59_h'] ?></td>
			<td><?= $meninvi['cuarentaycinco59_m'] ?></td>
			<td><?= $meninvi['sesenta64_h'] ?></td>
			<td><?= $meninvi['sesenta64_m'] ?></td>
			<td><?= $meninvi['mayor64_h'] ?></td>
			<td><?= $meninvi['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $meninvi['total_h'] ?></td>
			<td><?= $meninvi['total_m'] ?></td>
			<td><?= $meninvi['total'] ?></td>
		</tr>
		<tr>
			<td><b>36</b></td>
			<td>Meningitis Bacteriana (G00)</td>
			<td><?= $meninbac['menor1_h'] ?></td>
			<td><?= $meninbac['menor1_m'] ?></td>
			<td><?= $meninbac['uno4_h'] ?></td>
			<td><?= $meninbac['uno4_m'] ?></td>
			<td><?= $meninbac['cinco6_h'] ?></td>
			<td><?= $meninbac['cinco6_m'] ?></td>
			<td><?= $meninbac['siete9_h'] ?></td>
			<td><?= $meninbac['siete9_m'] ?></td>
			<td><?= $meninbac['diez11_h'] ?></td>
			<td><?= $meninbac['diez11_m'] ?></td>
			<td><?= $meninbac['doce14_h'] ?></td>
			<td><?= $meninbac['doce14_m'] ?></td>
			<td><?= $meninbac['quince19_h'] ?></td>
			<td><?= $meninbac['quince19_m'] ?></td>
			<td><?= $meninbac['veinte24_h'] ?></td>
			<td><?= $meninbac['veinte24_m'] ?></td>
			<td><?= $meninbac['veinticinco44_h'] ?></td>
			<td><?= $meninbac['veinticinco44_m'] ?></td>
			<td><?= $meninbac['cuarentaycinco59_h'] ?></td>
			<td><?= $meninbac['cuarentaycinco59_m'] ?></td>
			<td><?= $meninbac['sesenta64_h'] ?></td>
			<td><?= $meninbac['sesenta64_m'] ?></td>
			<td><?= $meninbac['mayor64_h'] ?></td>
			<td><?= $meninbac['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $meninbac['total_h'] ?></td>
			<td><?= $meninbac['total_m'] ?></td>
			<td><?= $meninbac['total'] ?></td>
		</tr>
		<tr>
			<td><b>37</b></td>
			<td>Meningitis Meningocóccica (A39.0)</td>
			<td><?= $meningo['menor1_h'] ?></td>
			<td><?= $meningo['menor1_m'] ?></td>
			<td><?= $meningo['uno4_h'] ?></td>
			<td><?= $meningo['uno4_m'] ?></td>
			<td><?= $meningo['cinco6_h'] ?></td>
			<td><?= $meningo['cinco6_m'] ?></td>
			<td><?= $meningo['siete9_h'] ?></td>
			<td><?= $meningo['siete9_m'] ?></td>
			<td><?= $meningo['diez11_h'] ?></td>
			<td><?= $meningo['diez11_m'] ?></td>
			<td><?= $meningo['doce14_h'] ?></td>
			<td><?= $meningo['doce14_m'] ?></td>
			<td><?= $meningo['quince19_h'] ?></td>
			<td><?= $meningo['quince19_m'] ?></td>
			<td><?= $meningo['veinte24_h'] ?></td>
			<td><?= $meningo['veinte24_m'] ?></td>
			<td><?= $meningo['veinticinco44_h'] ?></td>
			<td><?= $meningo['veinticinco44_m'] ?></td>
			<td><?= $meningo['cuarentaycinco59_h'] ?></td>
			<td><?= $meningo['cuarentaycinco59_m'] ?></td>
			<td><?= $meningo['sesenta64_h'] ?></td>
			<td><?= $meningo['sesenta64_m'] ?></td>
			<td><?= $meningo['mayor64_h'] ?></td>
			<td><?= $meningo['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $meningo['total_h'] ?></td>
			<td><?= $meningo['total_m'] ?></td>
			<td><?= $meningo['total'] ?></td>
		</tr>
		<tr>
			<td><b>38</b></td>
			<td>Enfermedad Meningococcica (A39.9)</td>
			<td><?= $enfmenin['menor1_h'] ?></td>
			<td><?= $enfmenin['menor1_m'] ?></td>
			<td><?= $enfmenin['uno4_h'] ?></td>
			<td><?= $enfmenin['uno4_m'] ?></td>
			<td><?= $enfmenin['cinco6_h'] ?></td>
			<td><?= $enfmenin['cinco6_m'] ?></td>
			<td><?= $enfmenin['siete9_h'] ?></td>
			<td><?= $enfmenin['siete9_m'] ?></td>
			<td><?= $enfmenin['diez11_h'] ?></td>
			<td><?= $enfmenin['diez11_m'] ?></td>
			<td><?= $enfmenin['doce14_h'] ?></td>
			<td><?= $enfmenin['doce14_m'] ?></td>
			<td><?= $enfmenin['quince19_h'] ?></td>
			<td><?= $enfmenin['quince19_m'] ?></td>
			<td><?= $enfmenin['veinte24_h'] ?></td>
			<td><?= $enfmenin['veinte24_m'] ?></td>
			<td><?= $enfmenin['veinticinco44_h'] ?></td>
			<td><?= $enfmenin['veinticinco44_m'] ?></td>
			<td><?= $enfmenin['cuarentaycinco59_h'] ?></td>
			<td><?= $enfmenin['cuarentaycinco59_m'] ?></td>
			<td><?= $enfmenin['sesenta64_h'] ?></td>
			<td><?= $enfmenin['sesenta64_m'] ?></td>
			<td><?= $enfmenin['mayor64_h'] ?></td>
			<td><?= $enfmenin['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $enfmenin['total_h'] ?></td>
			<td><?= $enfmenin['total_m'] ?></td>
			<td><?= $enfmenin['total'] ?></td>
		</tr>
		<tr>
			<td><b>39</b></td>
			<td>Varicela (B01)</td>
			<td><?= $varicela['menor1_h'] ?></td>
			<td><?= $varicela['menor1_m'] ?></td>
			<td><?= $varicela['uno4_h'] ?></td>
			<td><?= $varicela['uno4_m'] ?></td>
			<td><?= $varicela['cinco6_h'] ?></td>
			<td><?= $varicela['cinco6_m'] ?></td>
			<td><?= $varicela['siete9_h'] ?></td>
			<td><?= $varicela['siete9_m'] ?></td>
			<td><?= $varicela['diez11_h'] ?></td>
			<td><?= $varicela['diez11_m'] ?></td>
			<td><?= $varicela['doce14_h'] ?></td>
			<td><?= $varicela['doce14_m'] ?></td>
			<td><?= $varicela['quince19_h'] ?></td>
			<td><?= $varicela['quince19_m'] ?></td>
			<td><?= $varicela['veinte24_h'] ?></td>
			<td><?= $varicela['veinte24_m'] ?></td>
			<td><?= $varicela['veinticinco44_h'] ?></td>
			<td><?= $varicela['veinticinco44_m'] ?></td>
			<td><?= $varicela['cuarentaycinco59_h'] ?></td>
			<td><?= $varicela['cuarentaycinco59_m'] ?></td>
			<td><?= $varicela['sesenta64_h'] ?></td>
			<td><?= $varicela['sesenta64_m'] ?></td>
			<td><?= $varicela['mayor64_h'] ?></td>
			<td><?= $varicela['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $varicela['total_h'] ?></td>
			<td><?= $varicela['total_m'] ?></td>
			<td><?= $varicela['total'] ?></td>
		</tr>
		<tr>
			<td><b>40</b></td>
			<td>Hepatitis Aguda Tipo B (B16)</td>
			<td><?= $hepab['menor1_h'] ?></td>
			<td><?= $hepab['menor1_m'] ?></td>
			<td><?= $hepab['uno4_h'] ?></td>
			<td><?= $hepab['uno4_m'] ?></td>
			<td><?= $hepab['cinco6_h'] ?></td>
			<td><?= $hepab['cinco6_m'] ?></td>
			<td><?= $hepab['siete9_h'] ?></td>
			<td><?= $hepab['siete9_m'] ?></td>
			<td><?= $hepab['diez11_h'] ?></td>
			<td><?= $hepab['diez11_m'] ?></td>
			<td><?= $hepab['doce14_h'] ?></td>
			<td><?= $hepab['doce14_m'] ?></td>
			<td><?= $hepab['quince19_h'] ?></td>
			<td><?= $hepab['quince19_m'] ?></td>
			<td><?= $hepab['veinte24_h'] ?></td>
			<td><?= $hepab['veinte24_m'] ?></td>
			<td><?= $hepab['veinticinco44_h'] ?></td>
			<td><?= $hepab['veinticinco44_m'] ?></td>
			<td><?= $hepab['cuarentaycinco59_h'] ?></td>
			<td><?= $hepab['cuarentaycinco59_m'] ?></td>
			<td><?= $hepab['sesenta64_h'] ?></td>
			<td><?= $hepab['sesenta64_m'] ?></td>
			<td><?= $hepab['mayor64_h'] ?></td>
			<td><?= $hepab['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hepab['total_h'] ?></td>
			<td><?= $hepab['total_m'] ?></td>
			<td><?= $hepab['total'] ?></td>
		</tr>
		<tr>
			<td><b>41</b></td>
			<td>Hepatitis Aguda Tipo C (B17.1, B18.2)</td>
			<td><?= $hepac['menor1_h'] ?></td>
			<td><?= $hepac['menor1_m'] ?></td>
			<td><?= $hepac['uno4_h'] ?></td>
			<td><?= $hepac['uno4_m'] ?></td>
			<td><?= $hepac['cinco6_h'] ?></td>
			<td><?= $hepac['cinco6_m'] ?></td>
			<td><?= $hepac['siete9_h'] ?></td>
			<td><?= $hepac['siete9_m'] ?></td>
			<td><?= $hepac['diez11_h'] ?></td>
			<td><?= $hepac['diez11_m'] ?></td>
			<td><?= $hepac['doce14_h'] ?></td>
			<td><?= $hepac['doce14_m'] ?></td>
			<td><?= $hepac['quince19_h'] ?></td>
			<td><?= $hepac['quince19_m'] ?></td>
			<td><?= $hepac['veinte24_h'] ?></td>
			<td><?= $hepac['veinte24_m'] ?></td>
			<td><?= $hepac['veinticinco44_h'] ?></td>
			<td><?= $hepac['veinticinco44_m'] ?></td>
			<td><?= $hepac['cuarentaycinco59_h'] ?></td>
			<td><?= $hepac['cuarentaycinco59_m'] ?></td>
			<td><?= $hepac['sesenta64_h'] ?></td>
			<td><?= $hepac['sesenta64_m'] ?></td>
			<td><?= $hepac['mayor64_h'] ?></td>
			<td><?= $hepac['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hepac['total_h'] ?></td>
			<td><?= $hepac['total_m'] ?></td>
			<td><?= $hepac['total'] ?></td>
		</tr>
		<tr>
			<td><b>42</b></td>
			<td>Hepatitis Otras Agudas (B17)</td>
			<td><?= $hepaotras['menor1_h'] ?></td>
			<td><?= $hepaotras['menor1_m'] ?></td>
			<td><?= $hepaotras['uno4_h'] ?></td>
			<td><?= $hepaotras['uno4_m'] ?></td>
			<td><?= $hepaotras['cinco6_h'] ?></td>
			<td><?= $hepaotras['cinco6_m'] ?></td>
			<td><?= $hepaotras['siete9_h'] ?></td>
			<td><?= $hepaotras['siete9_m'] ?></td>
			<td><?= $hepaotras['diez11_h'] ?></td>
			<td><?= $hepaotras['diez11_m'] ?></td>
			<td><?= $hepaotras['doce14_h'] ?></td>
			<td><?= $hepaotras['doce14_m'] ?></td>
			<td><?= $hepaotras['quince19_h'] ?></td>
			<td><?= $hepaotras['quince19_m'] ?></td>
			<td><?= $hepaotras['veinte24_h'] ?></td>
			<td><?= $hepaotras['veinte24_m'] ?></td>
			<td><?= $hepaotras['veinticinco44_h'] ?></td>
			<td><?= $hepaotras['veinticinco44_m'] ?></td>
			<td><?= $hepaotras['cuarentaycinco59_h'] ?></td>
			<td><?= $hepaotras['cuarentaycinco59_m'] ?></td>
			<td><?= $hepaotras['sesenta64_h'] ?></td>
			<td><?= $hepaotras['sesenta64_m'] ?></td>
			<td><?= $hepaotras['mayor64_h'] ?></td>
			<td><?= $hepaotras['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hepaotras['total_h'] ?></td>
			<td><?= $hepaotras['total_m'] ?></td>
			<td><?= $hepaotras['total'] ?></td>
		</tr>
		<tr>
			<td><b>43</b></td>
			<td>Hepatitis No Específicas (B19)</td>
			<td><?= $hepanoesp['menor1_h'] ?></td>
			<td><?= $hepanoesp['menor1_m'] ?></td>
			<td><?= $hepanoesp['uno4_h'] ?></td>
			<td><?= $hepanoesp['uno4_m'] ?></td>
			<td><?= $hepanoesp['cinco6_h'] ?></td>
			<td><?= $hepanoesp['cinco6_m'] ?></td>
			<td><?= $hepanoesp['siete9_h'] ?></td>
			<td><?= $hepanoesp['siete9_m'] ?></td>
			<td><?= $hepanoesp['diez11_h'] ?></td>
			<td><?= $hepanoesp['diez11_m'] ?></td>
			<td><?= $hepanoesp['doce14_h'] ?></td>
			<td><?= $hepanoesp['doce14_m'] ?></td>
			<td><?= $hepanoesp['quince19_h'] ?></td>
			<td><?= $hepanoesp['quince19_m'] ?></td>
			<td><?= $hepanoesp['veinte24_h'] ?></td>
			<td><?= $hepanoesp['veinte24_m'] ?></td>
			<td><?= $hepanoesp['veinticinco44_h'] ?></td>
			<td><?= $hepanoesp['veinticinco44_m'] ?></td>
			<td><?= $hepanoesp['cuarentaycinco59_h'] ?></td>
			<td><?= $hepanoesp['cuarentaycinco59_m'] ?></td>
			<td><?= $hepanoesp['sesenta64_h'] ?></td>
			<td><?= $hepanoesp['sesenta64_m'] ?></td>
			<td><?= $hepanoesp['mayor64_h'] ?></td>
			<td><?= $hepanoesp['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hepanoesp['total_h'] ?></td>
			<td><?= $hepanoesp['total_m'] ?></td>
			<td><?= $hepanoesp['total'] ?></td>
		</tr>
		<tr>
			<td><b>44</b></td>
			<td>Parálisis Flácida (G82.0)</td>
			<td><?= $parafla['menor1_h'] ?></td>
			<td><?= $parafla['menor1_m'] ?></td>
			<td><?= $parafla['uno4_h'] ?></td>
			<td><?= $parafla['uno4_m'] ?></td>
			<td><?= $parafla['cinco6_h'] ?></td>
			<td><?= $parafla['cinco6_m'] ?></td>
			<td><?= $parafla['siete9_h'] ?></td>
			<td><?= $parafla['siete9_m'] ?></td>
			<td><?= $parafla['diez11_h'] ?></td>
			<td><?= $parafla['diez11_m'] ?></td>
			<td><?= $parafla['doce14_h'] ?></td>
			<td><?= $parafla['doce14_m'] ?></td>
			<td><?= $parafla['quince19_h'] ?></td>
			<td><?= $parafla['quince19_m'] ?></td>
			<td><?= $parafla['veinte24_h'] ?></td>
			<td><?= $parafla['veinte24_m'] ?></td>
			<td><?= $parafla['veinticinco44_h'] ?></td>
			<td><?= $parafla['veinticinco44_m'] ?></td>
			<td><?= $parafla['cuarentaycinco59_h'] ?></td>
			<td><?= $parafla['cuarentaycinco59_m'] ?></td>
			<td><?= $parafla['sesenta64_h'] ?></td>
			<td><?= $parafla['sesenta64_m'] ?></td>
			<td><?= $parafla['mayor64_h'] ?></td>
			<td><?= $parafla['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $parafla['total_h'] ?></td>
			<td><?= $parafla['total_m'] ?></td>
			<td><?= $parafla['total'] ?></td>
		</tr>
		<tr>
			<td><b>45</b></td>
			<td>Neumonías (J12-J18)</td>
			<td><?= $neumonia['menor1_h'] ?></td>
			<td><?= $neumonia['menor1_m'] ?></td>
			<td><?= $neumonia['uno4_h'] ?></td>
			<td><?= $neumonia['uno4_m'] ?></td>
			<td><?= $neumonia['cinco6_h'] ?></td>
			<td><?= $neumonia['cinco6_m'] ?></td>
			<td><?= $neumonia['siete9_h'] ?></td>
			<td><?= $neumonia['siete9_m'] ?></td>
			<td><?= $neumonia['diez11_h'] ?></td>
			<td><?= $neumonia['diez11_m'] ?></td>
			<td><?= $neumonia['doce14_h'] ?></td>
			<td><?= $neumonia['doce14_m'] ?></td>
			<td><?= $neumonia['quince19_h'] ?></td>
			<td><?= $neumonia['quince19_m'] ?></td>
			<td><?= $neumonia['veinte24_h'] ?></td>
			<td><?= $neumonia['veinte24_m'] ?></td>
			<td><?= $neumonia['veinticinco44_h'] ?></td>
			<td><?= $neumonia['veinticinco44_m'] ?></td>
			<td><?= $neumonia['cuarentaycinco59_h'] ?></td>
			<td><?= $neumonia['cuarentaycinco59_m'] ?></td>
			<td><?= $neumonia['sesenta64_h'] ?></td>
			<td><?= $neumonia['sesenta64_m'] ?></td>
			<td><?= $neumonia['mayor64_h'] ?></td>
			<td><?= $neumonia['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $neumonia['total_h'] ?></td>
			<td><?= $neumonia['total_m'] ?></td>
			<td><?= $neumonia['total'] ?></td>
		</tr>
		<tr>
			<td><b>46</b></td>
			<td>Intoxicación por Plaguicidas (T60)</td>
			<td><?= $toxipla['menor1_h'] ?></td>
			<td><?= $toxipla['menor1_m'] ?></td>
			<td><?= $toxipla['uno4_h'] ?></td>
			<td><?= $toxipla['uno4_m'] ?></td>
			<td><?= $toxipla['cinco6_h'] ?></td>
			<td><?= $toxipla['cinco6_m'] ?></td>
			<td><?= $toxipla['siete9_h'] ?></td>
			<td><?= $toxipla['siete9_m'] ?></td>
			<td><?= $toxipla['diez11_h'] ?></td>
			<td><?= $toxipla['diez11_m'] ?></td>
			<td><?= $toxipla['doce14_h'] ?></td>
			<td><?= $toxipla['doce14_m'] ?></td>
			<td><?= $toxipla['quince19_h'] ?></td>
			<td><?= $toxipla['quince19_m'] ?></td>
			<td><?= $toxipla['veinte24_h'] ?></td>
			<td><?= $toxipla['veinte24_m'] ?></td>
			<td><?= $toxipla['veinticinco44_h'] ?></td>
			<td><?= $toxipla['veinticinco44_m'] ?></td>
			<td><?= $toxipla['cuarentaycinco59_h'] ?></td>
			<td><?= $toxipla['cuarentaycinco59_m'] ?></td>
			<td><?= $toxipla['sesenta64_h'] ?></td>
			<td><?= $toxipla['sesenta64_m'] ?></td>
			<td><?= $toxipla['mayor64_h'] ?></td>
			<td><?= $toxipla['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $toxipla['total_h'] ?></td>
			<td><?= $toxipla['total_m'] ?></td>
			<td><?= $toxipla['total'] ?></td>
		</tr>
		<tr>
			<td><b>47</b></td>
			<td>Mordedura Sospechosa de Rabia (A82)</td>
			<td><?= $mordeduras['menor1_h'] ?></td>
			<td><?= $mordeduras['menor1_m'] ?></td>
			<td><?= $mordeduras['uno4_h'] ?></td>
			<td><?= $mordeduras['uno4_m'] ?></td>
			<td><?= $mordeduras['cinco6_h'] ?></td>
			<td><?= $mordeduras['cinco6_m'] ?></td>
			<td><?= $mordeduras['siete9_h'] ?></td>
			<td><?= $mordeduras['siete9_m'] ?></td>
			<td><?= $mordeduras['diez11_h'] ?></td>
			<td><?= $mordeduras['diez11_m'] ?></td>
			<td><?= $mordeduras['doce14_h'] ?></td>
			<td><?= $mordeduras['doce14_m'] ?></td>
			<td><?= $mordeduras['quince19_h'] ?></td>
			<td><?= $mordeduras['quince19_m'] ?></td>
			<td><?= $mordeduras['veinte24_h'] ?></td>
			<td><?= $mordeduras['veinte24_m'] ?></td>
			<td><?= $mordeduras['veinticinco44_h'] ?></td>
			<td><?= $mordeduras['veinticinco44_m'] ?></td>
			<td><?= $mordeduras['cuarentaycinco59_h'] ?></td>
			<td><?= $mordeduras['cuarentaycinco59_m'] ?></td>
			<td><?= $mordeduras['sesenta64_h'] ?></td>
			<td><?= $mordeduras['sesenta64_m'] ?></td>
			<td><?= $mordeduras['mayor64_h'] ?></td>
			<td><?= $mordeduras['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $mordeduras['total_h'] ?></td>
			<td><?= $mordeduras['total_m'] ?></td>
			<td><?= $mordeduras['total'] ?></td>
		</tr>
		<tr>
			<td><b>48</b></td>
			<td>Fiebre (R50)</td>
			<td><?= $fiebre['menor1_h'] ?></td>
			<td><?= $fiebre['menor1_m'] ?></td>
			<td><?= $fiebre['uno4_h'] ?></td>
			<td><?= $fiebre['uno4_m'] ?></td>
			<td><?= $fiebre['cinco6_h'] ?></td>
			<td><?= $fiebre['cinco6_m'] ?></td>
			<td><?= $fiebre['siete9_h'] ?></td>
			<td><?= $fiebre['siete9_m'] ?></td>
			<td><?= $fiebre['diez11_h'] ?></td>
			<td><?= $fiebre['diez11_m'] ?></td>
			<td><?= $fiebre['doce14_h'] ?></td>
			<td><?= $fiebre['doce14_m'] ?></td>
			<td><?= $fiebre['quince19_h'] ?></td>
			<td><?= $fiebre['quince19_m'] ?></td>
			<td><?= $fiebre['veinte24_h'] ?></td>
			<td><?= $fiebre['veinte24_m'] ?></td>
			<td><?= $fiebre['veinticinco44_h'] ?></td>
			<td><?= $fiebre['veinticinco44_m'] ?></td>
			<td><?= $fiebre['cuarentaycinco59_h'] ?></td>
			<td><?= $fiebre['cuarentaycinco59_m'] ?></td>
			<td><?= $fiebre['sesenta64_h'] ?></td>
			<td><?= $fiebre['sesenta64_m'] ?></td>
			<td><?= $fiebre['mayor64_h'] ?></td>
			<td><?= $fiebre['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $fiebre['total_h'] ?></td>
			<td><?= $fiebre['total_m'] ?></td>
			<td><?= $fiebre['total'] ?></td>
		</tr>
		<tr>
			<td><b>49</b></td>
			<td>Efectos Adversos de Medicamentos (Y40-Y57)</td>
			<td><?= $advmed['menor1_h'] ?></td>
			<td><?= $advmed['menor1_m'] ?></td>
			<td><?= $advmed['uno4_h'] ?></td>
			<td><?= $advmed['uno4_m'] ?></td>
			<td><?= $advmed['cinco6_h'] ?></td>
			<td><?= $advmed['cinco6_m'] ?></td>
			<td><?= $advmed['siete9_h'] ?></td>
			<td><?= $advmed['siete9_m'] ?></td>
			<td><?= $advmed['diez11_h'] ?></td>
			<td><?= $advmed['diez11_m'] ?></td>
			<td><?= $advmed['doce14_h'] ?></td>
			<td><?= $advmed['doce14_m'] ?></td>
			<td><?= $advmed['quince19_h'] ?></td>
			<td><?= $advmed['quince19_m'] ?></td>
			<td><?= $advmed['veinte24_h'] ?></td>
			<td><?= $advmed['veinte24_m'] ?></td>
			<td><?= $advmed['veinticinco44_h'] ?></td>
			<td><?= $advmed['veinticinco44_m'] ?></td>
			<td><?= $advmed['cuarentaycinco59_h'] ?></td>
			<td><?= $advmed['cuarentaycinco59_m'] ?></td>
			<td><?= $advmed['sesenta64_h'] ?></td>
			<td><?= $advmed['sesenta64_m'] ?></td>
			<td><?= $advmed['mayor64_h'] ?></td>
			<td><?= $advmed['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $advmed['total_h'] ?></td>
			<td><?= $advmed['total_m'] ?></td>
			<td><?= $advmed['total'] ?></td>
		</tr>
		<tr>
			<td><b>50</b></td>
			<td>Efectos Adversos de Vacunas (Y58-Y59)</td>
			<td><?= $advacu['menor1_h'] ?></td>
			<td><?= $advacu['menor1_m'] ?></td>
			<td><?= $advacu['uno4_h'] ?></td>
			<td><?= $advacu['uno4_m'] ?></td>
			<td><?= $advacu['cinco6_h'] ?></td>
			<td><?= $advacu['cinco6_m'] ?></td>
			<td><?= $advacu['siete9_h'] ?></td>
			<td><?= $advacu['siete9_m'] ?></td>
			<td><?= $advacu['diez11_h'] ?></td>
			<td><?= $advacu['diez11_m'] ?></td>
			<td><?= $advacu['doce14_h'] ?></td>
			<td><?= $advacu['doce14_m'] ?></td>
			<td><?= $advacu['quince19_h'] ?></td>
			<td><?= $advacu['quince19_m'] ?></td>
			<td><?= $advacu['veinte24_h'] ?></td>
			<td><?= $advacu['veinte24_m'] ?></td>
			<td><?= $advacu['veinticinco44_h'] ?></td>
			<td><?= $advacu['veinticinco44_m'] ?></td>
			<td><?= $advacu['cuarentaycinco59_h'] ?></td>
			<td><?= $advacu['cuarentaycinco59_m'] ?></td>
			<td><?= $advacu['sesenta64_h'] ?></td>
			<td><?= $advacu['sesenta64_m'] ?></td>
			<td><?= $advacu['mayor64_h'] ?></td>
			<td><?= $advacu['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $advacu['total_h'] ?></td>
			<td><?= $advacu['total_m'] ?></td>
			<td><?= $advacu['total'] ?></td>
		</tr>
		<tr>
			<td colspan="2" style="background:yellow;"><b>Sospechosas de Chicungunya</b></td>
			<td><?= $chicungunya['menor1_h'] ?></td>
			<td><?= $chicungunya['menor1_m'] ?></td>
			<td><?= $chicungunya['uno4_h'] ?></td>
			<td><?= $chicungunya['uno4_m'] ?></td>
			<td><?= $chicungunya['cinco6_h'] ?></td>
			<td><?= $chicungunya['cinco6_m'] ?></td>
			<td><?= $chicungunya['siete9_h'] ?></td>
			<td><?= $chicungunya['siete9_m'] ?></td>
			<td><?= $chicungunya['diez11_h'] ?></td>
			<td><?= $chicungunya['diez11_m'] ?></td>
			<td><?= $chicungunya['doce14_h'] ?></td>
			<td><?= $chicungunya['doce14_m'] ?></td>
			<td><?= $chicungunya['quince19_h'] ?></td>
			<td><?= $chicungunya['quince19_m'] ?></td>
			<td><?= $chicungunya['veinte24_h'] ?></td>
			<td><?= $chicungunya['veinte24_m'] ?></td>
			<td><?= $chicungunya['veinticinco44_h'] ?></td>
			<td><?= $chicungunya['veinticinco44_m'] ?></td>
			<td><?= $chicungunya['cuarentaycinco59_h'] ?></td>
			<td><?= $chicungunya['cuarentaycinco59_m'] ?></td>
			<td><?= $chicungunya['sesenta64_h'] ?></td>
			<td><?= $chicungunya['sesenta64_m'] ?></td>
			<td><?= $chicungunya['mayor64_h'] ?></td>
			<td><?= $chicungunya['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $chicungunya['total_h'] ?></td>
			<td><?= $chicungunya['total_m'] ?></td>
			<td><?= $chicungunya['total'] ?></td>
		</tr>
		<tr>
			<td><b>51</b></td>
			<td>Rinofaringitis Aguda (J00)</td>
			<td><?= $rinofaringitis['menor1_h'] ?></td>
			<td><?= $rinofaringitis['menor1_m'] ?></td>
			<td><?= $rinofaringitis['uno4_h'] ?></td>
			<td><?= $rinofaringitis['uno4_m'] ?></td>
			<td><?= $rinofaringitis['cinco6_h'] ?></td>
			<td><?= $rinofaringitis['cinco6_m'] ?></td>
			<td><?= $rinofaringitis['siete9_h'] ?></td>
			<td><?= $rinofaringitis['siete9_m'] ?></td>
			<td><?= $rinofaringitis['diez11_h'] ?></td>
			<td><?= $rinofaringitis['diez11_m'] ?></td>
			<td><?= $rinofaringitis['doce14_h'] ?></td>
			<td><?= $rinofaringitis['doce14_m'] ?></td>
			<td><?= $rinofaringitis['quince19_h'] ?></td>
			<td><?= $rinofaringitis['quince19_m'] ?></td>
			<td><?= $rinofaringitis['veinte24_h'] ?></td>
			<td><?= $rinofaringitis['veinte24_m'] ?></td>
			<td><?= $rinofaringitis['veinticinco44_h'] ?></td>
			<td><?= $rinofaringitis['veinticinco44_m'] ?></td>
			<td><?= $rinofaringitis['cuarentaycinco59_h'] ?></td>
			<td><?= $rinofaringitis['cuarentaycinco59_m'] ?></td>
			<td><?= $rinofaringitis['sesenta64_h'] ?></td>
			<td><?= $rinofaringitis['sesenta64_m'] ?></td>
			<td><?= $rinofaringitis['mayor64_h'] ?></td>
			<td><?= $rinofaringitis['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $rinofaringitis['total_h'] ?></td>
			<td><?= $rinofaringitis['total_m'] ?></td>
			<td><?= $rinofaringitis['total'] ?></td>
		</tr>
		<tr>
			<td><b>52</b></td>
			<td>Sinusitis Aguda (J01)</td>
			<td><?= $sinusitis['menor1_h'] ?></td>
			<td><?= $sinusitis['menor1_m'] ?></td>
			<td><?= $sinusitis['uno4_h'] ?></td>
			<td><?= $sinusitis['uno4_m'] ?></td>
			<td><?= $sinusitis['cinco6_h'] ?></td>
			<td><?= $sinusitis['cinco6_m'] ?></td>
			<td><?= $sinusitis['siete9_h'] ?></td>
			<td><?= $sinusitis['siete9_m'] ?></td>
			<td><?= $sinusitis['diez11_h'] ?></td>
			<td><?= $sinusitis['diez11_m'] ?></td>
			<td><?= $sinusitis['doce14_h'] ?></td>
			<td><?= $sinusitis['doce14_m'] ?></td>
			<td><?= $sinusitis['quince19_h'] ?></td>
			<td><?= $sinusitis['quince19_m'] ?></td>
			<td><?= $sinusitis['veinte24_h'] ?></td>
			<td><?= $sinusitis['veinte24_m'] ?></td>
			<td><?= $sinusitis['veinticinco44_h'] ?></td>
			<td><?= $sinusitis['veinticinco44_m'] ?></td>
			<td><?= $sinusitis['cuarentaycinco59_h'] ?></td>
			<td><?= $sinusitis['cuarentaycinco59_m'] ?></td>
			<td><?= $sinusitis['sesenta64_h'] ?></td>
			<td><?= $sinusitis['sesenta64_m'] ?></td>
			<td><?= $sinusitis['mayor64_h'] ?></td>
			<td><?= $sinusitis['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sinusitis['total_h'] ?></td>
			<td><?= $sinusitis['total_m'] ?></td>
			<td><?= $sinusitis['total'] ?></td>
		</tr>
		<tr>
			<td><b>53</b></td>
			<td>Faringitis Aguda (J02)</td>
			<td><?= $faringitis['menor1_h'] ?></td>
			<td><?= $faringitis['menor1_m'] ?></td>
			<td><?= $faringitis['uno4_h'] ?></td>
			<td><?= $faringitis['uno4_m'] ?></td>
			<td><?= $faringitis['cinco6_h'] ?></td>
			<td><?= $faringitis['cinco6_m'] ?></td>
			<td><?= $faringitis['siete9_h'] ?></td>
			<td><?= $faringitis['siete9_m'] ?></td>
			<td><?= $faringitis['diez11_h'] ?></td>
			<td><?= $faringitis['diez11_m'] ?></td>
			<td><?= $faringitis['doce14_h'] ?></td>
			<td><?= $faringitis['doce14_m'] ?></td>
			<td><?= $faringitis['quince19_h'] ?></td>
			<td><?= $faringitis['quince19_m'] ?></td>
			<td><?= $faringitis['veinte24_h'] ?></td>
			<td><?= $faringitis['veinte24_m'] ?></td>
			<td><?= $faringitis['veinticinco44_h'] ?></td>
			<td><?= $faringitis['veinticinco44_m'] ?></td>
			<td><?= $faringitis['cuarentaycinco59_h'] ?></td>
			<td><?= $faringitis['cuarentaycinco59_m'] ?></td>
			<td><?= $faringitis['sesenta64_h'] ?></td>
			<td><?= $faringitis['sesenta64_m'] ?></td>
			<td><?= $faringitis['mayor64_h'] ?></td>
			<td><?= $faringitis['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $faringitis['total_h'] ?></td>
			<td><?= $faringitis['total_m'] ?></td>
			<td><?= $faringitis['total'] ?></td>
		</tr>
		<tr>
			<td><b>54</b></td>
			<td>Amigdalitis Aguda (J03)</td>
			<td><?= $amigdalitis['menor1_h'] ?></td>
			<td><?= $amigdalitis['menor1_m'] ?></td>
			<td><?= $amigdalitis['uno4_h'] ?></td>
			<td><?= $amigdalitis['uno4_m'] ?></td>
			<td><?= $amigdalitis['cinco6_h'] ?></td>
			<td><?= $amigdalitis['cinco6_m'] ?></td>
			<td><?= $amigdalitis['siete9_h'] ?></td>
			<td><?= $amigdalitis['siete9_m'] ?></td>
			<td><?= $amigdalitis['diez11_h'] ?></td>
			<td><?= $amigdalitis['diez11_m'] ?></td>
			<td><?= $amigdalitis['doce14_h'] ?></td>
			<td><?= $amigdalitis['doce14_m'] ?></td>
			<td><?= $amigdalitis['quince19_h'] ?></td>
			<td><?= $amigdalitis['quince19_m'] ?></td>
			<td><?= $amigdalitis['veinte24_h'] ?></td>
			<td><?= $amigdalitis['veinte24_m'] ?></td>
			<td><?= $amigdalitis['veinticinco44_h'] ?></td>
			<td><?= $amigdalitis['veinticinco44_m'] ?></td>
			<td><?= $amigdalitis['cuarentaycinco59_h'] ?></td>
			<td><?= $amigdalitis['cuarentaycinco59_m'] ?></td>
			<td><?= $amigdalitis['sesenta64_h'] ?></td>
			<td><?= $amigdalitis['sesenta64_m'] ?></td>
			<td><?= $amigdalitis['mayor64_h'] ?></td>
			<td><?= $amigdalitis['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $amigdalitis['total_h'] ?></td>
			<td><?= $amigdalitis['total_m'] ?></td>
			<td><?= $amigdalitis['total'] ?></td>
		</tr>
		<tr>
			<td><b>55</b></td>
			<td>Laringitis y Traqueitis Aguda (J04)</td>
			<td><?= $larintra['menor1_h'] ?></td>
			<td><?= $larintra['menor1_m'] ?></td>
			<td><?= $larintra['uno4_h'] ?></td>
			<td><?= $larintra['uno4_m'] ?></td>
			<td><?= $larintra['cinco6_h'] ?></td>
			<td><?= $larintra['cinco6_m'] ?></td>
			<td><?= $larintra['siete9_h'] ?></td>
			<td><?= $larintra['siete9_m'] ?></td>
			<td><?= $larintra['diez11_h'] ?></td>
			<td><?= $larintra['diez11_m'] ?></td>
			<td><?= $larintra['doce14_h'] ?></td>
			<td><?= $larintra['doce14_m'] ?></td>
			<td><?= $larintra['quince19_h'] ?></td>
			<td><?= $larintra['quince19_m'] ?></td>
			<td><?= $larintra['veinte24_h'] ?></td>
			<td><?= $larintra['veinte24_m'] ?></td>
			<td><?= $larintra['veinticinco44_h'] ?></td>
			<td><?= $larintra['veinticinco44_m'] ?></td>
			<td><?= $larintra['cuarentaycinco59_h'] ?></td>
			<td><?= $larintra['cuarentaycinco59_m'] ?></td>
			<td><?= $larintra['sesenta64_h'] ?></td>
			<td><?= $larintra['sesenta64_m'] ?></td>
			<td><?= $larintra['mayor64_h'] ?></td>
			<td><?= $larintra['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $larintra['total_h'] ?></td>
			<td><?= $larintra['total_m'] ?></td>
			<td><?= $larintra['total'] ?></td>
		</tr>
		<tr>
			<td><b>56</b></td>
			<td>Laringitis Obstructiva y Epiglotitis (J05)</td>
			<td><?= $larinobs['menor1_h'] ?></td>
			<td><?= $larinobs['menor1_m'] ?></td>
			<td><?= $larinobs['uno4_h'] ?></td>
			<td><?= $larinobs['uno4_m'] ?></td>
			<td><?= $larinobs['cinco6_h'] ?></td>
			<td><?= $larinobs['cinco6_m'] ?></td>
			<td><?= $larinobs['siete9_h'] ?></td>
			<td><?= $larinobs['siete9_m'] ?></td>
			<td><?= $larinobs['diez11_h'] ?></td>
			<td><?= $larinobs['diez11_m'] ?></td>
			<td><?= $larinobs['doce14_h'] ?></td>
			<td><?= $larinobs['doce14_m'] ?></td>
			<td><?= $larinobs['quince19_h'] ?></td>
			<td><?= $larinobs['quince19_m'] ?></td>
			<td><?= $larinobs['veinte24_h'] ?></td>
			<td><?= $larinobs['veinte24_m'] ?></td>
			<td><?= $larinobs['veinticinco44_h'] ?></td>
			<td><?= $larinobs['veinticinco44_m'] ?></td>
			<td><?= $larinobs['cuarentaycinco59_h'] ?></td>
			<td><?= $larinobs['cuarentaycinco59_m'] ?></td>
			<td><?= $larinobs['sesenta64_h'] ?></td>
			<td><?= $larinobs['sesenta64_m'] ?></td>
			<td><?= $larinobs['mayor64_h'] ?></td>
			<td><?= $larinobs['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $larinobs['total_h'] ?></td>
			<td><?= $larinobs['total_m'] ?></td>
			<td><?= $larinobs['total'] ?></td>
		</tr>
		<tr>
			<td><b>57</b></td>
			<td>Infecciones Agud Vías Respirat Superi, Sitios <br> Múltiples No Especificados (J06)</td>
			<td><?= $infaguda['menor1_h'] ?></td>
			<td><?= $infaguda['menor1_m'] ?></td>
			<td><?= $infaguda['uno4_h'] ?></td>
			<td><?= $infaguda['uno4_m'] ?></td>
			<td><?= $infaguda['cinco6_h'] ?></td>
			<td><?= $infaguda['cinco6_m'] ?></td>
			<td><?= $infaguda['siete9_h'] ?></td>
			<td><?= $infaguda['siete9_m'] ?></td>
			<td><?= $infaguda['diez11_h'] ?></td>
			<td><?= $infaguda['diez11_m'] ?></td>
			<td><?= $infaguda['doce14_h'] ?></td>
			<td><?= $infaguda['doce14_m'] ?></td>
			<td><?= $infaguda['quince19_h'] ?></td>
			<td><?= $infaguda['quince19_m'] ?></td>
			<td><?= $infaguda['veinte24_h'] ?></td>
			<td><?= $infaguda['veinte24_m'] ?></td>
			<td><?= $infaguda['veinticinco44_h'] ?></td>
			<td><?= $infaguda['veinticinco44_m'] ?></td>
			<td><?= $infaguda['cuarentaycinco59_h'] ?></td>
			<td><?= $infaguda['cuarentaycinco59_m'] ?></td>
			<td><?= $infaguda['sesenta64_h'] ?></td>
			<td><?= $infaguda['sesenta64_m'] ?></td>
			<td><?= $infaguda['mayor64_h'] ?></td>
			<td><?= $infaguda['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $infaguda['total_h'] ?></td>
			<td><?= $infaguda['total_m'] ?></td>
			<td><?= $infaguda['total'] ?></td>
		</tr>
		<tr>
			<td><b>58</b></td>
			<td>Bronquitis Aguda (J20)</td>
			<td><?= $bronquitis['menor1_h'] ?></td>
			<td><?= $bronquitis['menor1_m'] ?></td>
			<td><?= $bronquitis['uno4_h'] ?></td>
			<td><?= $bronquitis['uno4_m'] ?></td>
			<td><?= $bronquitis['cinco6_h'] ?></td>
			<td><?= $bronquitis['cinco6_m'] ?></td>
			<td><?= $bronquitis['siete9_h'] ?></td>
			<td><?= $bronquitis['siete9_m'] ?></td>
			<td><?= $bronquitis['diez11_h'] ?></td>
			<td><?= $bronquitis['diez11_m'] ?></td>
			<td><?= $bronquitis['doce14_h'] ?></td>
			<td><?= $bronquitis['doce14_m'] ?></td>
			<td><?= $bronquitis['quince19_h'] ?></td>
			<td><?= $bronquitis['quince19_m'] ?></td>
			<td><?= $bronquitis['veinte24_h'] ?></td>
			<td><?= $bronquitis['veinte24_m'] ?></td>
			<td><?= $bronquitis['veinticinco44_h'] ?></td>
			<td><?= $bronquitis['veinticinco44_m'] ?></td>
			<td><?= $bronquitis['cuarentaycinco59_h'] ?></td>
			<td><?= $bronquitis['cuarentaycinco59_m'] ?></td>
			<td><?= $bronquitis['sesenta64_h'] ?></td>
			<td><?= $bronquitis['sesenta64_m'] ?></td>
			<td><?= $bronquitis['mayor64_h'] ?></td>
			<td><?= $bronquitis['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $bronquitis['total_h'] ?></td>
			<td><?= $bronquitis['total_m'] ?></td>
			<td><?= $bronquitis['total'] ?></td>
		</tr>
		<tr>
			<td><b>59</b></td>
			<td>Bronquiolitis Aguda (J21)</td>
			<td><?= $bronquiolitis['menor1_h'] ?></td>
			<td><?= $bronquiolitis['menor1_m'] ?></td>
			<td><?= $bronquiolitis['uno4_h'] ?></td>
			<td><?= $bronquiolitis['uno4_m'] ?></td>
			<td><?= $bronquiolitis['cinco6_h'] ?></td>
			<td><?= $bronquiolitis['cinco6_m'] ?></td>
			<td><?= $bronquiolitis['siete9_h'] ?></td>
			<td><?= $bronquiolitis['siete9_m'] ?></td>
			<td><?= $bronquiolitis['diez11_h'] ?></td>
			<td><?= $bronquiolitis['diez11_m'] ?></td>
			<td><?= $bronquiolitis['doce14_h'] ?></td>
			<td><?= $bronquiolitis['doce14_m'] ?></td>
			<td><?= $bronquiolitis['quince19_h'] ?></td>
			<td><?= $bronquiolitis['quince19_m'] ?></td>
			<td><?= $bronquiolitis['veinte24_h'] ?></td>
			<td><?= $bronquiolitis['veinte24_m'] ?></td>
			<td><?= $bronquiolitis['veinticinco44_h'] ?></td>
			<td><?= $bronquiolitis['veinticinco44_m'] ?></td>
			<td><?= $bronquiolitis['cuarentaycinco59_h'] ?></td>
			<td><?= $bronquiolitis['cuarentaycinco59_m'] ?></td>
			<td><?= $bronquiolitis['sesenta64_h'] ?></td>
			<td><?= $bronquiolitis['sesenta64_m'] ?></td>
			<td><?= $bronquiolitis['mayor64_h'] ?></td>
			<td><?= $bronquiolitis['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $bronquiolitis['total_h'] ?></td>
			<td><?= $bronquiolitis['total_m'] ?></td>
			<td><?= $bronquiolitis['total'] ?></td>
		</tr>
		<tr>
			<td><b>60</b></td>
			<td>Infección Agud No especific Vías Respirat</td>
			<td><?= $infecnoesp['menor1_h'] ?></td>
			<td><?= $infecnoesp['menor1_m'] ?></td>
			<td><?= $infecnoesp['uno4_h'] ?></td>
			<td><?= $infecnoesp['uno4_m'] ?></td>
			<td><?= $infecnoesp['cinco6_h'] ?></td>
			<td><?= $infecnoesp['cinco6_m'] ?></td>
			<td><?= $infecnoesp['siete9_h'] ?></td>
			<td><?= $infecnoesp['siete9_m'] ?></td>
			<td><?= $infecnoesp['diez11_h'] ?></td>
			<td><?= $infecnoesp['diez11_m'] ?></td>
			<td><?= $infecnoesp['doce14_h'] ?></td>
			<td><?= $infecnoesp['doce14_m'] ?></td>
			<td><?= $infecnoesp['quince19_h'] ?></td>
			<td><?= $infecnoesp['quince19_m'] ?></td>
			<td><?= $infecnoesp['veinte24_h'] ?></td>
			<td><?= $infecnoesp['veinte24_m'] ?></td>
			<td><?= $infecnoesp['veinticinco44_h'] ?></td>
			<td><?= $infecnoesp['veinticinco44_m'] ?></td>
			<td><?= $infecnoesp['cuarentaycinco59_h'] ?></td>
			<td><?= $infecnoesp['cuarentaycinco59_m'] ?></td>
			<td><?= $infecnoesp['sesenta64_h'] ?></td>
			<td><?= $infecnoesp['sesenta64_m'] ?></td>
			<td><?= $infecnoesp['mayor64_h'] ?></td>
			<td><?= $infecnoesp['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $infecnoesp['total_h'] ?></td>
			<td><?= $infecnoesp['total_m'] ?></td>
			<td><?= $infecnoesp['total'] ?></td>
		</tr>
		<tr>
			<td><b>61</b></td>
			<td>Infeccion Respiratoria Aguda Grave</td>
			<td><?= $infresp['menor1_h'] ?></td>
			<td><?= $infresp['menor1_m'] ?></td>
			<td><?= $infresp['uno4_h'] ?></td>
			<td><?= $infresp['uno4_m'] ?></td>
			<td><?= $infresp['cinco6_h'] ?></td>
			<td><?= $infresp['cinco6_m'] ?></td>
			<td><?= $infresp['siete9_h'] ?></td>
			<td><?= $infresp['siete9_m'] ?></td>
			<td><?= $infresp['diez11_h'] ?></td>
			<td><?= $infresp['diez11_m'] ?></td>
			<td><?= $infresp['doce14_h'] ?></td>
			<td><?= $infresp['doce14_m'] ?></td>
			<td><?= $infresp['quince19_h'] ?></td>
			<td><?= $infresp['quince19_m'] ?></td>
			<td><?= $infresp['veinte24_h'] ?></td>
			<td><?= $infresp['veinte24_m'] ?></td>
			<td><?= $infresp['veinticinco44_h'] ?></td>
			<td><?= $infresp['veinticinco44_m'] ?></td>
			<td><?= $infresp['cuarentaycinco59_h'] ?></td>
			<td><?= $infresp['cuarentaycinco59_m'] ?></td>
			<td><?= $infresp['sesenta64_h'] ?></td>
			<td><?= $infresp['sesenta64_m'] ?></td>
			<td><?= $infresp['mayor64_h'] ?></td>
			<td><?= $infresp['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $infresp['total_h'] ?></td>
			<td><?= $infresp['total_m'] ?></td>
			<td><?= $infresp['total'] ?></td>
		</tr>
		<tr>
			<td><b>62</b></td>
			<td>Peste (A20)</td>
			<td><?= $peste['menor1_h'] ?></td>
			<td><?= $peste['menor1_m'] ?></td>
			<td><?= $peste['uno4_h'] ?></td>
			<td><?= $peste['uno4_m'] ?></td>
			<td><?= $peste['cinco6_h'] ?></td>
			<td><?= $peste['cinco6_m'] ?></td>
			<td><?= $peste['siete9_h'] ?></td>
			<td><?= $peste['siete9_m'] ?></td>
			<td><?= $peste['diez11_h'] ?></td>
			<td><?= $peste['diez11_m'] ?></td>
			<td><?= $peste['doce14_h'] ?></td>
			<td><?= $peste['doce14_m'] ?></td>
			<td><?= $peste['quince19_h'] ?></td>
			<td><?= $peste['quince19_m'] ?></td>
			<td><?= $peste['veinte24_h'] ?></td>
			<td><?= $peste['veinte24_m'] ?></td>
			<td><?= $peste['veinticinco44_h'] ?></td>
			<td><?= $peste['veinticinco44_m'] ?></td>
			<td><?= $peste['cuarentaycinco59_h'] ?></td>
			<td><?= $peste['cuarentaycinco59_m'] ?></td>
			<td><?= $peste['sesenta64_h'] ?></td>
			<td><?= $peste['sesenta64_m'] ?></td>
			<td><?= $peste['mayor64_h'] ?></td>
			<td><?= $peste['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $peste['total_h'] ?></td>
			<td><?= $peste['total_m'] ?></td>
			<td><?= $peste['total'] ?></td>
		</tr>
		<tr>
			<td><b>63</b></td>
			<td>Sindrome Respiratorio Agudo Severo</td>
			<td><?= $sras['menor1_h'] ?></td>
			<td><?= $sras['menor1_m'] ?></td>
			<td><?= $sras['uno4_h'] ?></td>
			<td><?= $sras['uno4_m'] ?></td>
			<td><?= $sras['cinco6_h'] ?></td>
			<td><?= $sras['cinco6_m'] ?></td>
			<td><?= $sras['siete9_h'] ?></td>
			<td><?= $sras['siete9_m'] ?></td>
			<td><?= $sras['diez11_h'] ?></td>
			<td><?= $sras['diez11_m'] ?></td>
			<td><?= $sras['doce14_h'] ?></td>
			<td><?= $sras['doce14_m'] ?></td>
			<td><?= $sras['quince19_h'] ?></td>
			<td><?= $sras['quince19_m'] ?></td>
			<td><?= $sras['veinte24_h'] ?></td>
			<td><?= $sras['veinte24_m'] ?></td>
			<td><?= $sras['veinticinco44_h'] ?></td>
			<td><?= $sras['veinticinco44_m'] ?></td>
			<td><?= $sras['cuarentaycinco59_h'] ?></td>
			<td><?= $sras['cuarentaycinco59_m'] ?></td>
			<td><?= $sras['sesenta64_h'] ?></td>
			<td><?= $sras['sesenta64_m'] ?></td>
			<td><?= $sras['mayor64_h'] ?></td>
			<td><?= $sras['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sras['total_h'] ?></td>
			<td><?= $sras['total_m'] ?></td>
			<td><?= $sras['total'] ?></td>
		</tr>
		<tr>
			<td><b>64</b></td>
			<td>Viruela (B03)</td>
			<td><?= $viruela['menor1_h'] ?></td>
			<td><?= $viruela['menor1_m'] ?></td>
			<td><?= $viruela['uno4_h'] ?></td>
			<td><?= $viruela['uno4_m'] ?></td>
			<td><?= $viruela['cinco6_h'] ?></td>
			<td><?= $viruela['cinco6_m'] ?></td>
			<td><?= $viruela['siete9_h'] ?></td>
			<td><?= $viruela['siete9_m'] ?></td>
			<td><?= $viruela['diez11_h'] ?></td>
			<td><?= $viruela['diez11_m'] ?></td>
			<td><?= $viruela['doce14_h'] ?></td>
			<td><?= $viruela['doce14_m'] ?></td>
			<td><?= $viruela['quince19_h'] ?></td>
			<td><?= $viruela['quince19_m'] ?></td>
			<td><?= $viruela['veinte24_h'] ?></td>
			<td><?= $viruela['veinte24_m'] ?></td>
			<td><?= $viruela['veinticinco44_h'] ?></td>
			<td><?= $viruela['veinticinco44_m'] ?></td>
			<td><?= $viruela['cuarentaycinco59_h'] ?></td>
			<td><?= $viruela['cuarentaycinco59_m'] ?></td>
			<td><?= $viruela['sesenta64_h'] ?></td>
			<td><?= $viruela['sesenta64_m'] ?></td>
			<td><?= $viruela['mayor64_h'] ?></td>
			<td><?= $viruela['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $viruela['total_h'] ?></td>
			<td><?= $viruela['total_m'] ?></td>
			<td><?= $viruela['total'] ?></td>
		</tr>
		<tr>
			<td><b>65</b></td>
			<td>Rumor de Epizootias</td>
			<td><?= $rumorepizoo['menor1_h'] ?></td>
			<td><?= $rumorepizoo['menor1_m'] ?></td>
			<td><?= $rumorepizoo['uno4_h'] ?></td>
			<td><?= $rumorepizoo['uno4_m'] ?></td>
			<td><?= $rumorepizoo['cinco6_h'] ?></td>
			<td><?= $rumorepizoo['cinco6_m'] ?></td>
			<td><?= $rumorepizoo['siete9_h'] ?></td>
			<td><?= $rumorepizoo['siete9_m'] ?></td>
			<td><?= $rumorepizoo['diez11_h'] ?></td>
			<td><?= $rumorepizoo['diez11_m'] ?></td>
			<td><?= $rumorepizoo['doce14_h'] ?></td>
			<td><?= $rumorepizoo['doce14_m'] ?></td>
			<td><?= $rumorepizoo['quince19_h'] ?></td>
			<td><?= $rumorepizoo['quince19_m'] ?></td>
			<td><?= $rumorepizoo['veinte24_h'] ?></td>
			<td><?= $rumorepizoo['veinte24_m'] ?></td>
			<td><?= $rumorepizoo['veinticinco44_h'] ?></td>
			<td><?= $rumorepizoo['veinticinco44_m'] ?></td>
			<td><?= $rumorepizoo['cuarentaycinco59_h'] ?></td>
			<td><?= $rumorepizoo['cuarentaycinco59_m'] ?></td>
			<td><?= $rumorepizoo['sesenta64_h'] ?></td>
			<td><?= $rumorepizoo['sesenta64_m'] ?></td>
			<td><?= $rumorepizoo['mayor64_h'] ?></td>
			<td><?= $rumorepizoo['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $rumorepizoo['total_h'] ?></td>
			<td><?= $rumorepizoo['total_m'] ?></td>
			<td><?= $rumorepizoo['total'] ?></td>
		</tr>
		<tr>
			<td><b>66</b></td>
			<td>Hantavirosis (SCPH) (B33.4)</td>
			<td><?= $hantavirosis['menor1_h'] ?></td>
			<td><?= $hantavirosis['menor1_m'] ?></td>
			<td><?= $hantavirosis['uno4_h'] ?></td>
			<td><?= $hantavirosis['uno4_m'] ?></td>
			<td><?= $hantavirosis['cinco6_h'] ?></td>
			<td><?= $hantavirosis['cinco6_m'] ?></td>
			<td><?= $hantavirosis['siete9_h'] ?></td>
			<td><?= $hantavirosis['siete9_m'] ?></td>
			<td><?= $hantavirosis['diez11_h'] ?></td>
			<td><?= $hantavirosis['diez11_m'] ?></td>
			<td><?= $hantavirosis['doce14_h'] ?></td>
			<td><?= $hantavirosis['doce14_m'] ?></td>
			<td><?= $hantavirosis['quince19_h'] ?></td>
			<td><?= $hantavirosis['quince19_m'] ?></td>
			<td><?= $hantavirosis['veinte24_h'] ?></td>
			<td><?= $hantavirosis['veinte24_m'] ?></td>
			<td><?= $hantavirosis['veinticinco44_h'] ?></td>
			<td><?= $hantavirosis['veinticinco44_m'] ?></td>
			<td><?= $hantavirosis['cuarentaycinco59_h'] ?></td>
			<td><?= $hantavirosis['cuarentaycinco59_m'] ?></td>
			<td><?= $hantavirosis['sesenta64_h'] ?></td>
			<td><?= $hantavirosis['sesenta64_m'] ?></td>
			<td><?= $hantavirosis['mayor64_h'] ?></td>
			<td><?= $hantavirosis['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hantavirosis['total_h'] ?></td>
			<td><?= $hantavirosis['total_m'] ?></td>
			<td><?= $hantavirosis['total'] ?></td>
		</tr>
		<tr>
			<td><b>67</b></td>
			<td>Sindrome de Rubeola Congenita (P35.9)</td>
			<td><?= $rubcong['menor1_h'] ?></td>
			<td><?= $rubcong['menor1_m'] ?></td>
			<td><?= $rubcong['uno4_h'] ?></td>
			<td><?= $rubcong['uno4_m'] ?></td>
			<td><?= $rubcong['cinco6_h'] ?></td>
			<td><?= $rubcong['cinco6_m'] ?></td>
			<td><?= $rubcong['siete9_h'] ?></td>
			<td><?= $rubcong['siete9_m'] ?></td>
			<td><?= $rubcong['diez11_h'] ?></td>
			<td><?= $rubcong['diez11_m'] ?></td>
			<td><?= $rubcong['doce14_h'] ?></td>
			<td><?= $rubcong['doce14_m'] ?></td>
			<td><?= $rubcong['quince19_h'] ?></td>
			<td><?= $rubcong['quince19_m'] ?></td>
			<td><?= $rubcong['veinte24_h'] ?></td>
			<td><?= $rubcong['veinte24_m'] ?></td>
			<td><?= $rubcong['veinticinco44_h'] ?></td>
			<td><?= $rubcong['veinticinco44_m'] ?></td>
			<td><?= $rubcong['cuarentaycinco59_h'] ?></td>
			<td><?= $rubcong['cuarentaycinco59_m'] ?></td>
			<td><?= $rubcong['sesenta64_h'] ?></td>
			<td><?= $rubcong['sesenta64_m'] ?></td>
			<td><?= $rubcong['mayor64_h'] ?></td>
			<td><?= $rubcong['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $rubcong['total_h'] ?></td>
			<td><?= $rubcong['total_m'] ?></td>
			<td><?= $rubcong['total'] ?></td>
		</tr>
		<tr>
			<td><b>68</b></td>
			<td>Malaria vivax (B51)</td>
			<td><?= $malvi['menor1_h'] ?></td>
			<td><?= $malvi['menor1_m'] ?></td>
			<td><?= $malvi['uno4_h'] ?></td>
			<td><?= $malvi['uno4_m'] ?></td>
			<td><?= $malvi['cinco6_h'] ?></td>
			<td><?= $malvi['cinco6_m'] ?></td>
			<td><?= $malvi['siete9_h'] ?></td>
			<td><?= $malvi['siete9_m'] ?></td>
			<td><?= $malvi['diez11_h'] ?></td>
			<td><?= $malvi['diez11_m'] ?></td>
			<td><?= $malvi['doce14_h'] ?></td>
			<td><?= $malvi['doce14_m'] ?></td>
			<td><?= $malvi['quince19_h'] ?></td>
			<td><?= $malvi['quince19_m'] ?></td>
			<td><?= $malvi['veinte24_h'] ?></td>
			<td><?= $malvi['veinte24_m'] ?></td>
			<td><?= $malvi['veinticinco44_h'] ?></td>
			<td><?= $malvi['veinticinco44_m'] ?></td>
			<td><?= $malvi['cuarentaycinco59_h'] ?></td>
			<td><?= $malvi['cuarentaycinco59_m'] ?></td>
			<td><?= $malvi['sesenta64_h'] ?></td>
			<td><?= $malvi['sesenta64_m'] ?></td>
			<td><?= $malvi['mayor64_h'] ?></td>
			<td><?= $malvi['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $malvi['total_h'] ?></td>
			<td><?= $malvi['total_m'] ?></td>
			<td><?= $malvi['total'] ?></td>
		</tr>
		<tr>
			<td><b>69</b></td>
			<td>Malaria Falciparum (B50)</td>
			<td><?= $malfal['menor1_h'] ?></td>
			<td><?= $malfal['menor1_m'] ?></td>
			<td><?= $malfal['uno4_h'] ?></td>
			<td><?= $malfal['uno4_m'] ?></td>
			<td><?= $malfal['cinco6_h'] ?></td>
			<td><?= $malfal['cinco6_m'] ?></td>
			<td><?= $malfal['siete9_h'] ?></td>
			<td><?= $malfal['siete9_m'] ?></td>
			<td><?= $malfal['diez11_h'] ?></td>
			<td><?= $malfal['diez11_m'] ?></td>
			<td><?= $malfal['doce14_h'] ?></td>
			<td><?= $malfal['doce14_m'] ?></td>
			<td><?= $malfal['quince19_h'] ?></td>
			<td><?= $malfal['quince19_m'] ?></td>
			<td><?= $malfal['veinte24_h'] ?></td>
			<td><?= $malfal['veinte24_m'] ?></td>
			<td><?= $malfal['veinticinco44_h'] ?></td>
			<td><?= $malfal['veinticinco44_m'] ?></td>
			<td><?= $malfal['cuarentaycinco59_h'] ?></td>
			<td><?= $malfal['cuarentaycinco59_m'] ?></td>
			<td><?= $malfal['sesenta64_h'] ?></td>
			<td><?= $malfal['sesenta64_m'] ?></td>
			<td><?= $malfal['mayor64_h'] ?></td>
			<td><?= $malfal['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $malfal['total_h'] ?></td>
			<td><?= $malfal['total_m'] ?></td>
			<td><?= $malfal['total'] ?></td>
		</tr>
		<tr>
			<td><b>70</b></td>
			<td>Malaria Malariae (B52)</td>
			<td><?= $malariae['menor1_h'] ?></td>
			<td><?= $malariae['menor1_m'] ?></td>
			<td><?= $malariae['uno4_h'] ?></td>
			<td><?= $malariae['uno4_m'] ?></td>
			<td><?= $malariae['cinco6_h'] ?></td>
			<td><?= $malariae['cinco6_m'] ?></td>
			<td><?= $malariae['siete9_h'] ?></td>
			<td><?= $malariae['siete9_m'] ?></td>
			<td><?= $malariae['diez11_h'] ?></td>
			<td><?= $malariae['diez11_m'] ?></td>
			<td><?= $malariae['doce14_h'] ?></td>
			<td><?= $malariae['doce14_m'] ?></td>
			<td><?= $malariae['quince19_h'] ?></td>
			<td><?= $malariae['quince19_m'] ?></td>
			<td><?= $malariae['veinte24_h'] ?></td>
			<td><?= $malariae['veinte24_m'] ?></td>
			<td><?= $malariae['veinticinco44_h'] ?></td>
			<td><?= $malariae['veinticinco44_m'] ?></td>
			<td><?= $malariae['cuarentaycinco59_h'] ?></td>
			<td><?= $malariae['cuarentaycinco59_m'] ?></td>
			<td><?= $malariae['sesenta64_h'] ?></td>
			<td><?= $malariae['sesenta64_m'] ?></td>
			<td><?= $malariae['mayor64_h'] ?></td>
			<td><?= $malariae['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $malariae['total_h'] ?></td>
			<td><?= $malariae['total_m'] ?></td>
			<td><?= $malariae['total'] ?></td>
		</tr>
		<tr>
			<td><b>71</b></td>
			<td>Malaria Mixta</td>
			<td><?= $malmix['menor1_h'] ?></td>
			<td><?= $malmix['menor1_m'] ?></td>
			<td><?= $malmix['uno4_h'] ?></td>
			<td><?= $malmix['uno4_m'] ?></td>
			<td><?= $malmix['cinco6_h'] ?></td>
			<td><?= $malmix['cinco6_m'] ?></td>
			<td><?= $malmix['siete9_h'] ?></td>
			<td><?= $malmix['siete9_m'] ?></td>
			<td><?= $malmix['diez11_h'] ?></td>
			<td><?= $malmix['diez11_m'] ?></td>
			<td><?= $malmix['doce14_h'] ?></td>
			<td><?= $malmix['doce14_m'] ?></td>
			<td><?= $malmix['quince19_h'] ?></td>
			<td><?= $malmix['quince19_m'] ?></td>
			<td><?= $malmix['veinte24_h'] ?></td>
			<td><?= $malmix['veinte24_m'] ?></td>
			<td><?= $malmix['veinticinco44_h'] ?></td>
			<td><?= $malmix['veinticinco44_m'] ?></td>
			<td><?= $malmix['cuarentaycinco59_h'] ?></td>
			<td><?= $malmix['cuarentaycinco59_m'] ?></td>
			<td><?= $malmix['sesenta64_h'] ?></td>
			<td><?= $malmix['sesenta64_m'] ?></td>
			<td><?= $malmix['mayor64_h'] ?></td>
			<td><?= $malmix['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $malmix['total_h'] ?></td>
			<td><?= $malmix['total_m'] ?></td>
			<td><?= $malmix['total'] ?></td>
		</tr>
		<tr>
			<td><b>72</b></td>
			<td>Fiebre del Oeste del Nilo (A92.3)</td>
			<td><?= $nilo['menor1_h'] ?></td>
			<td><?= $nilo['menor1_m'] ?></td>
			<td><?= $nilo['uno4_h'] ?></td>
			<td><?= $nilo['uno4_m'] ?></td>
			<td><?= $nilo['cinco6_h'] ?></td>
			<td><?= $nilo['cinco6_m'] ?></td>
			<td><?= $nilo['siete9_h'] ?></td>
			<td><?= $nilo['siete9_m'] ?></td>
			<td><?= $nilo['diez11_h'] ?></td>
			<td><?= $nilo['diez11_m'] ?></td>
			<td><?= $nilo['doce14_h'] ?></td>
			<td><?= $nilo['doce14_m'] ?></td>
			<td><?= $nilo['quince19_h'] ?></td>
			<td><?= $nilo['quince19_m'] ?></td>
			<td><?= $nilo['veinte24_h'] ?></td>
			<td><?= $nilo['veinte24_m'] ?></td>
			<td><?= $nilo['veinticinco44_h'] ?></td>
			<td><?= $nilo['veinticinco44_m'] ?></td>
			<td><?= $nilo['cuarentaycinco59_h'] ?></td>
			<td><?= $nilo['cuarentaycinco59_m'] ?></td>
			<td><?= $nilo['sesenta64_h'] ?></td>
			<td><?= $nilo['sesenta64_m'] ?></td>
			<td><?= $nilo['mayor64_h'] ?></td>
			<td><?= $nilo['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $nilo['total_h'] ?></td>
			<td><?= $nilo['total_m'] ?></td>
			<td><?= $nilo['total'] ?></td>
		</tr>
		<tr>
			<td><b>73</b></td>
			<td>Total Pacientes Atendidos (atención ambulatoria y emergencia)</td>
			<td><?= $consultas['menor1_h'] ?></td>
			<td><?= $consultas['menor1_m'] ?></td>
			<td><?= $consultas['uno4_h'] ?></td>
			<td><?= $consultas['uno4_m'] ?></td>
			<td><?= $consultas['cinco6_h'] ?></td>
			<td><?= $consultas['cinco6_m'] ?></td>
			<td><?= $consultas['siete9_h'] ?></td>
			<td><?= $consultas['siete9_m'] ?></td>
			<td><?= $consultas['diez11_h'] ?></td>
			<td><?= $consultas['diez11_m'] ?></td>
			<td><?= $consultas['doce14_h'] ?></td>
			<td><?= $consultas['doce14_m'] ?></td>
			<td><?= $consultas['quince19_h'] ?></td>
			<td><?= $consultas['quince19_m'] ?></td>
			<td><?= $consultas['veinte24_h'] ?></td>
			<td><?= $consultas['veinte24_m'] ?></td>
			<td><?= $consultas['veinticinco44_h'] ?></td>
			<td><?= $consultas['veinticinco44_m'] ?></td>
			<td><?= $consultas['cuarentaycinco59_h'] ?></td>
			<td><?= $consultas['cuarentaycinco59_m'] ?></td>
			<td><?= $consultas['sesenta64_h'] ?></td>
			<td><?= $consultas['sesenta64_m'] ?></td>
			<td><?= $consultas['mayor64_h'] ?></td>
			<td><?= $consultas['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $consultas['total_h'] ?></td>
			<td><?= $consultas['total_m'] ?></td>
			<td><?= $consultas['total'] ?></td>
		</tr>
		<tr>
			<td><b>74</b></td>
			<td>Total Pacientes Hospitalizados por todas causas</td>
			<td><?= $hospitalizados['menor1_h'] ?></td>
			<td><?= $hospitalizados['menor1_m'] ?></td>
			<td><?= $hospitalizados['uno4_h'] ?></td>
			<td><?= $hospitalizados['uno4_m'] ?></td>
			<td><?= $hospitalizados['cinco6_h'] ?></td>
			<td><?= $hospitalizados['cinco6_m'] ?></td>
			<td><?= $hospitalizados['siete9_h'] ?></td>
			<td><?= $hospitalizados['siete9_m'] ?></td>
			<td><?= $hospitalizados['diez11_h'] ?></td>
			<td><?= $hospitalizados['diez11_m'] ?></td>
			<td><?= $hospitalizados['doce14_h'] ?></td>
			<td><?= $hospitalizados['doce14_m'] ?></td>
			<td><?= $hospitalizados['quince19_h'] ?></td>
			<td><?= $hospitalizados['quince19_m'] ?></td>
			<td><?= $hospitalizados['veinte24_h'] ?></td>
			<td><?= $hospitalizados['veinte24_m'] ?></td>
			<td><?= $hospitalizados['veinticinco44_h'] ?></td>
			<td><?= $hospitalizados['veinticinco44_m'] ?></td>
			<td><?= $hospitalizados['cuarentaycinco59_h'] ?></td>
			<td><?= $hospitalizados['cuarentaycinco59_m'] ?></td>
			<td><?= $hospitalizados['sesenta64_h'] ?></td>
			<td><?= $hospitalizados['sesenta64_m'] ?></td>
			<td><?= $hospitalizados['mayor64_h'] ?></td>
			<td><?= $hospitalizados['mayor64_m'] ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hospitalizados['total_h'] ?></td>
			<td><?= $hospitalizados['total_m'] ?></td>
			<td><?= $hospitalizados['total'] ?></td>
		</tr>
	</table>
</page>
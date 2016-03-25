<style>
	.hpt
	{
		margin-left: 100px;
	}
	h1
	{
		font-size: 16px;
		font-weight: 300;
		text-align: center;
	}
	p
	{
		font-size: 10px;
	}
	table
	{
		border-spacing: 0;
		margin: auto;
	}
	table td
	{
		padding: 5px;
	}
	.reporte
	{
		font-size: 10px;
		text-align: center;
	}
	.reporte td
	{
		padding: 1px;
	}
	.final td
	{
		line-height: 24px;
	}
</style>
<page backtop="20px" backbottom="20px" backleft="10px" backright="10px">
	<img src="<?= APPPATH ?>third_party/logo_gob.png" height="45" width="400" class="gob">
	<img src="<?= APPPATH ?>third_party/logo_reportes.png" height="70" width="70" class="hpt">
	<p>
		Dirección General de Epidemiología
		<br>
		Dirección de Vigilancia Epidemiologica
	</p>
	<h1>Vigilancia Epidemiológica Semanal de Mortalidad Materna, Infantil y de 1-4 años de edad. SIS 02. SIVIGILA MM-MI 3</h1>
	<table>
		<tr>
			<td>Entidad</td>
			<td>Amazonas</td>
			<td style="width: 450px"></td>
			<td>Año:</td>
			<td><?= $year ?></td>
			<td>Semana:</td>
			<td><?= $semana ?></td>
		</tr>
	</table>
	<table>
		<tr>
			<td colspan="12"><h1>Mortalidad Materna</h1></td>
		</tr>
		<tr>
			<td>N° de Partos</td>
			<td><?= $partos ?></td>
			<td style="width:40px"></td>
			<td>Nacidos Vivos:</td>
			<td><?= $vivos ?></td>
			<td style="width:40px"></td>
			<td>Nacidos Muertos</td>
			<td><?= $muertos ?></td>
			<td style="width:40px"></td>
			<td>Abortos:</td>
			<td><?= $abortos ?></td>
			<td style="width:40px"></td>
		</tr>
	</table>
	<br>
	<table class="reporte" border="1">
		<tr>
			<td>1. N° Regional</td>
			<td>2. Fecha de <br> Ocurrencia</td>
			<td>3. Nombre y Apellido</td>
			<td>4. Edad</td>
			<td>5. Municipio de <br> Residencia</td>
			<td>6. Municipio de <br> Ocurrencia</td>
			<td>7. Sitio de <br> Ocurrencia</td>
			<td>8. Causa directa <br> de muerte</td>
			<td>9. Causa basica <br> de muerte</td>
			<td>10. Periodo de <br> Ocurrencia de <br> la muerte</td>
			<td>11. Edad <br> Gestacional</td>
			<td>12. Indigena</td>
			<td>13. Consultas <br> Control <br> Parental</td>
			<td>14. Ocupación</td>
		</tr>
		<?php
		if ($num_materna > 0){
		$i = 1;
		foreach ($materna as $mat):
		?>
		<tr>
			<td><?= $i ?></td>
			<td><?= date("d-m-Y", strtotime($mat->feocu)) ?></td>
			<td><?= $mat->nombre ?></td>
			<td><?= $mat->fenac ?></td>
			<td><?= $mat->municipio ?></td>
			<td><?= $mat->ocurrencia ?></td>
			<td><?= $mat->sitio ?></td>
			<td><?= $mat->caudir ?></td>
			<td><?= $mat->caubas ?></td>
			<td><?= $mat->periodo ?></td>
			<td><?= $mat->edadgest ?></td>
			<td><?= $mat->indigena ?></td>
			<td><?= $mat->consultas ?></td>
			<td><?= $mat->ocupacion ?></td>
			<?php $i++; ?>
		</tr>
		<?php
		endforeach;
		}
		else
		{
		?>
		<tr>
			<td colspan="14"><strong>No hubo muertes</strong></td>
		</tr>
		<?php
		}
		?>
	</table>
	<h1>Mortalidad Neonatal (0 a 27 días)</h1>
	<table class="reporte" border="1">
		<tr>
			<td>1. N° Regional</td>
			<td>2. Fecha de <br> Ocurrencia</td>
			<td>3. Nombre y Apellido</td>
			<td>4. Edad <br> Sexo</td>
			<td>5. Municipio de <br> Residencia</td>
			<td>6. Municipio de <br> Ocurrencia</td>
			<td>7. Sitio de <br> Ocurrencia</td>
			<td>8. Causa directa <br> de muerte</td>
			<td>9. Causa basica <br> de muerte</td>
			<td>10. Edad <br> Gestacional</td>
			<td>11. Peso al <br> nacer</td>
			<td>12. Indigena</td>
			<td>13. Consultas <br> Control <br> Parental</td>
		</tr>
		<?php
		if ($num_neonatal > 0) {
		$i = 1;
		foreach ($neonatal as $neo):
		?>
		<tr>
			<td><?= $i ?></td>
			<td><?= date("d-m-Y", strtotime($neo->feocu)) ?></td>
			<td><?= $neo->nombre ?></td>
			<td><?= $neo->fenac ?>/<?= $neo->sexo ?></td>
			<td><?= $neo->municipio ?></td>
			<td><?= $neo->ocurrencia ?></td>
			<td><?= $neo->sitio ?></td>
			<td><?= $neo->caudir ?></td>
			<td><?= $neo->caubas ?></td>
			<td><?= $neo->edadgest ?></td>
			<td><?= $neo->peso ?></td>
			<td><?= $neo->indigena ?></td>
			<td><?= $neo->consultas ?></td>
			<?php $i++; ?>
		</tr>
		<?php
		endforeach;
		}
		else
		{
		?>
		<tr>
			<td colspan="13"><strong>No hubo muertes</strong></td>
		</tr>
		<?php
		}
		?>
	</table>
	<h1>Mortalidad Postneonatal (28 días a 11 meses)</h1>
	<table class="reporte" border="1">
		<tr>
			<td>1. N° Regional</td>
			<td>2. Fecha de <br> Ocurrencia</td>
			<td>3. Nombre y Apellido</td>
			<td>4. Edad <br> Sexo</td>
			<td>5. Municipio de <br> Residencia</td>
			<td>6. Municipio de <br> Ocurrencia</td>
			<td>7. Sitio de <br> Ocurrencia</td>
			<td>8. Causa directa <br> de muerte</td>
			<td>9. Causa basica <br> de muerte</td>
			<td>10. Condición <br> nutricional</td>
			<td>11. Indigena</td>
			<td>12. Estancia <br> Hospitalaria</td>
		</tr>
		<?php
		if ($num_postneonatal > 0) {
		$i = 1;
		foreach ($postneonatal as $pn):
		?>
		<tr>
			<td><?= $i ?></td>
			<td><?= date("d-m-Y", strtotime($pn->feocu)) ?></td>
			<td><?= $pn->nombre ?></td>
			<td><?= $pn->fenac ?>/<?= $pn->sexo ?></td>
			<td><?= $pn->municipio ?></td>
			<td><?= $pn->ocurrencia ?></td>
			<td><?= $pn->sitio ?></td>
			<td><?= $pn->caudir ?></td>
			<td><?= $pn->caubas ?></td>
			<td><?= $pn->nutri ?></td>
			<td><?= $pn->indigena ?></td>
			<td><?= $pn->estancia ?></td>
			<?php $i++; ?>
		</tr>
		<?php
		endforeach;
		}
		else
		{
		?>
		<tr>
			<td colspan="12"><strong>No hubo muertes</strong></td>
		</tr>
		<?php
		}
		?>
	</table>
	<h1>Mortalidad de 1 a 4 años de edad</h1>
	<table class="reporte" border="1">
		<tr>
			<td>1. N° Regional</td>
			<td>2. Fecha de <br> Ocurrencia</td>
			<td>3. Nombre y Apellido</td>
			<td>4. Edad <br> Sexo</td>
			<td>5. Municipio de <br> Residencia</td>
			<td>6. Municipio de <br> Ocurrencia</td>
			<td>7. Sitio de <br> Ocurrencia</td>
			<td>8. Causa directa <br> de muerte</td>
			<td>9. Causa basica <br> de muerte</td>
			<td>10. Condición <br> nutricional</td>
			<td>11. Indigena</td>
			<td>12. Estancia <br> Hospitalaria</td>
		</tr>
		<?php
		if ($num_infantil > 0) {
		$i = 1;
		foreach ($infantil as $inf):
		?>
		<tr>
			<td><?= $i ?></td>
			<td><?= date("d-m-Y", strtotime($inf->feocu)) ?></td>
			<td><?= $inf->nombre ?></td>
			<td><?= $inf->fenac ?>/<?= $inf->sexo ?></td>
			<td><?= $inf->municipio ?></td>
			<td><?= $inf->ocurrencia ?></td>
			<td><?= $inf->sitio ?></td>
			<td><?= $inf->caudir ?></td>
			<td><?= $inf->caubas ?></td>
			<td><?= $inf->nutri ?></td>
			<td><?= $inf->indigena ?></td>
			<td><?= $inf->estancia ?></td>
			<?php $i++; ?>
		</tr>
		<?php
		endforeach;
		}
		else
		{
		?>
		<tr>
			<td colspan="12"><strong>No hubo muertes</strong></td>
		</tr>
		<?php
		}
		?>
	</table>
	<table class="final">
		<tr>
			<td>Responsable:________________________________</td>
			<td>
				Observaciones:<br>
							  _________________________________________
							  <br>
				              _________________________________________
				              <br>
				              _________________________________________
				              <br>
				              _________________________________________
			</td>
		</tr>
	</table>
</page>
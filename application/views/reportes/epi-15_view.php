<style>
	.hpt
	{
		margin-left: 200px;
	}
	table
	{
		margin: auto;
	}
	table td
	{
		padding: 10px;
	}
	h1
	{
		font-size: 20px;
		font-style: italic;
		font-weight: bold;
		text-align: center;
	}
	.header
	{
		border: 1px solid #000;
		font-size: 12px;
	}
	.epi
	{
		font-size: 12px;
		margin-top: 20px;
	}
</style>
<page backtop="20px" backbottom="20px" backleft="10px" backright="10px">
	<img src="<?= APPPATH ?>third_party/logo_gob.png" height="45" width="400" class="gob">
	<img src="<?= APPPATH ?>third_party/logo_reportes.png" height="70" width="70" class="hpt">
	<table>
		<tr>
			<td colspan="2" style="width:400px;"></td>
			<td><b>SIS-04 / EPI-15</b></td>
		</tr>
		<tr>
			<td>Dirección de Epidemiología</td>
			<td>Mes:</td>
			<td style="border: 1px solid #000; text-align:center;"><?= $mes ?></td>
		</tr>
		<tr>
			<td>Dirección de Vigilancia Epidemiológica</td>
			<td>Años:</td>
			<td style="border: 1px solid #000; text-align:center;"><?= $year ?></td>
		</tr>
	</table>
	<h1>Morbilidad Registrada por Enfermedades, Aparatos y Sistemas</h1>
	<table class="header">
		<tr>
			<td><b>Identificación del Establecimiento</b></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td>Entidad Federal:</td>
			<td style="border: 1px solid #000; text-align:center;">AMAZONAS</td>
			<td>Municipio:</td>
			<td style="border: 1px solid #000; text-align:center;">ATURES</td>
		</tr>
		<tr>
			<td>Parroquia:</td>
			<td style="border: 1px solid #000; text-align:center;">FERNANDO GIRON</td>
			<td>Localidad</td>
			<td style="border: 1px solid #000; text-align:center;">PUERTO AYACUCHO</td>
		</tr>
		<tr>
			<td>Nombre del Establecimiento:</td>
			<td style="border: 1px solid #000; text-align:center;">HOSPITAL JOSÉ GREGORIO HERNÁNDEZ</td>
			<td>Tipo:</td>
			<td style="border: 1px solid #000; text-align:center;">II</td>
		</tr>
	</table>
	<table class="epi" border="1">
		<tr>
			<td colspan="2" rowspan="2"><b>Enfermedad</b></td>
			<td colspan="5"><b>Número de Casos</b></td>
		</tr>
		<tr>
			<td><b>P</b></td>
			<td><b>S</b></td>
			<td><b>X</b></td>
			<td><b>P + X <br> (Total)</b></td>
			<td><b>Acumulado <br> del Año</b></td>
		</tr>
		<tr>
			<td><b>#</b></td>
			<td><b>Ia.- TRANSMISION HIDRICA Y ALIMENTOS</b></td>
			<td><b><?= $alimentos ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $alimentos ?></b></td>
			<td><b><?= $alimentos_acumulado ?></b></td>
		</tr>
		<tr>
			<td>1</td>
			<td>COLERA (A00.-)</td>
			<td><?=$colera ?></td>
			<td>0</td>
			<td>0</td>
			<td><?=$colera ?></td>
			<td><?=$colera_acumulado ?></td>
		</tr>
		<tr>
			<td>2</td>
			<td>AMIBIASIS (A06.-)</td>
			<td><?= $amibiasis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $amibiasis ?></td>
			<td><?= $amibiasis_acumulado ?></td>
		</tr>
		<tr>
			<td>3</td>
			<td>DIARREAS &#60; 1a. (A08-A09) (*)</td>
			<td><?= $diarrea_menor1 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $diarrea_menor1 ?></td>
			<td><?= $diarrea_menor1_acumulado ?></td>
		</tr>
		<tr>
			<td>4</td>
			<td>DIARREAS 1-4a.(A08-A09) (**)</td>
			<td><?= $diarrea_uno4 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $diarrea_uno4 ?></td>
			<td><?= $diarrea_uno4_acumulado ?></td>
		</tr>
		<tr>
			<td>5</td>
			<td>DIARREAS 5a. Y MAS (A08-A09) (***)</td>
			<td><?= $diarrea_mayor5 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $diarrea_mayor5 ?></td>
			<td><?= $diarrea_mayor5_acumulado ?></td>
		</tr>
		<tr>
			<td>6</td>
			<td>GIARDIASIS (A07.1)</td>
			<td><?= $giardiasis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $giardiasis ?></td>
			<td><?= $giardiasis_acumulado ?></td>
		</tr>
		<tr>
			<td>7</td>
			<td>HELMINTIASIS (B65-B68,B70-B83)</td>
			<td><?= $helmintiasis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $helmintiasis ?></td>
			<td><?= $helmintiasis_acumulado ?></td>
		</tr>
		<tr>
			<td>8</td>
			<td>FIEBRE TIFOIDEA (A01.0)</td>
			<td><?= $tifoidea ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $tifoidea ?></td>
			<td><?= $tifoidea_acumulado ?></td>
		</tr>
		<tr>
			<td>9</td>
			<td>ETA Nº DE BROTES</td>
			<td><?= $etabrote ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $etabrote ?></td>
			<td><?= $etabrote_acumulado ?></td>
		</tr>
		<tr>
			<td>10</td>
			<td>ETA CASOS ASOCIADOS A BROTES</td>
			<td><?= $etacaso ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $etacaso ?></td>
			<td><?= $etacaso_acumulado ?></td>
		</tr>
		<tr>
			<td>11</td>
			<td>HEPATITIS AGUDA TIPO A (B15.-)</td>
			<td><?= $hepa ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hepa ?></td>
			<td><?= $hepa_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>Ib.- TRANSMISION AEREA</b></td>
			<td><b><?= $aerea ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $aerea ?></b></td>
			<td><b><?= $aerea_acumulado ?></b></td>
		</tr>
		<tr>
			<td>12</td>
			<td>TUBERCULOSIS (A15-A19)</td>
			<td><?= $tuberculosis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $tuberculosis ?></td>
			<td><?= $tuberculosis_acumulado ?></td>
		</tr>
		<tr>
			<td>13</td>
			<td>INFLUENZA (J10-J11)</td>
			<td><?= $influenza ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $influenza ?></td>
			<td><?= $influenza_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>Ic.- TRANSMISION SEXUAL</b></td>
			<td><b><?= $sexual ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $sexual ?></b></td>
			<td><b><?= $sexual_acumulado ?></b></td>
		</tr>
		<tr>
			<td>14</td>
			<td>INFECCION GONOCOCICA (A54.-)</td>
			<td><?= $gonorrea ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $gonorrea ?></td>
			<td><?= $gonorrea_acumulado ?></td>
		</tr>
		<tr>
			<td>15</td>
			<td>SIFILIS (A50-A53)</td>
			<td><?= $sifilis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sifilis ?></td>
			<td><?= $sifilis_acumulado ?></td>
		</tr>
		<tr>
			<td>16</td>
			<td>SIFILIS CONGENITA (A50)</td>
			<td><?= $sif_cong ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sif_cong ?></td>
			<td><?= $sif_cong_acumulado ?></td>
		</tr>
		<tr>
			<td>17</td>
			<td>INFECCION ASINTOMATICA VIH (Z21)</td>
			<td><?= $vih ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $vih ?></td>
			<td><?= $vih_acumulado ?></td>
		</tr>
		<tr>
			<td>18</td>
			<td>ENFERMEDAD VIH/SIDA (B20-B24)</td>
			<td><?= $sida ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sida ?></td>
			<td><?= $sida_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>Id.- PREVENIBLES POR VACUNAS</b></td>
			<td><b><?= $vacunas ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $vacunas ?></b></td>
			<td><b><?= $vacunas_acumulado ?></b></td>
		</tr>
		<tr>
			<td>19</td>
			<td>POLIOMIELITIS (A80.-)</td>
			<td><?= $poliomielitis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $poliomielitis ?></td>
			<td><?= $poliomielitis_acumulado ?></td>
		</tr>
		<tr>
			<td>20</td>
			<td>TOSFERINA (A37.-)</td>
			<td><?= $tosferina ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $tosferina ?></td>
			<td><?= $tosferina_acumulado ?></td>
		</tr>
		<tr>
			<td>21</td>
			<td>PAROTIDITIS (B26.-)</td>
			<td><?= $parotiditis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $parotiditis ?></td>
			<td><?= $parotiditis_acumulado ?></td>
		</tr>
		<tr>
			<td>22</td>
			<td>TETANOS NEONATAL (A33) (*)</td>
			<td><?= $tetaneo ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $tetaneo ?></td>
			<td><?= $tetaneo_acumulado ?></td>
		</tr>
		<tr>
			<td>23</td>
			<td>TETANOS OBSTETRICO (A34) (**)</td>
			<td><?= $tetaobs ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $tetaobs ?></td>
			<td><?= $tetaobs_acumulado ?></td>
		</tr>
		<tr>
			<td>24</td>
			<td>OTROS TETANOS (A35)</td>
			<td><?= $otrosteta ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $otrosteta ?></td>
			<td><?= $otrosteta_acumulado ?></td>
		</tr>
		<tr>
			<td>25</td>
			<td>DIFTERIA (A36.-)</td>
			<td><?= $difteria ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $difteria ?></td>
			<td><?= $difteria_acumulado ?></td>
		</tr>
		<tr>
			<td>26</td>
			<td>SARAMPION (B05.-)</td>
			<td><?= $sarampion ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sarampion ?></td>
			<td><?= $sarampion_acumulado ?></td>
		</tr>
		<tr>
			<td>27</td>
			<td>RUBEOLA (B06.-)</td>
			<td><?= $rubeola ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $rubeola ?></td>
			<td><?= $rubeola_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>Ie.- TRANSMITIDAS POR VECTORES</b></td>
			<td><b><?= $vectores ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $vectores ?></b></td>
			<td><b><?= $vectores_acumulado ?></b></td>
		</tr>
		<tr>
			<td>28</td>
			<td>FIEBRE DENGUE (A90)</td>
			<td><?= $dengue ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $dengue ?></td>
			<td><?= $dengue_acumulado ?></td>
		</tr>
		<tr>
			<td>29</td>
			<td>DENGUE HEMORRAGICO (A91)</td>
			<td><?= $denguehemo ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $denguehemo ?></td>
			<td><?= $denguehemo_acumulado ?></td>
		</tr>
		<tr>
			<td>30</td>
			<td>ENCEFALITIS EQUINA VENEZOLANA (A92.2)</td>
			<td><?= $encefalitis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $encefalitis ?></td>
			<td><?= $encefalitis_acumulado ?></td>
		</tr>
		<tr>
			<td>31</td>
			<td>FIEBRE AMARILLA (A95.-)</td>
			<td><?= $amarrilla ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $amarrilla ?></td>
			<td><?= $amarrilla_acumulado ?></td>
		</tr>
		<tr>
			<td>32</td>
			<td>PALUDISMO A FALCIPARUM (B50)</td>
			<td><?= $falciparum ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $falciparum ?></td>
			<td><?= $falciparum_acumulado ?></td>
		</tr>
		<tr>
			<td>33</td>
			<td>PALUDISMO A VIVAX (B51)</td>
			<td><?= $vivax ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $vivax ?></td>
			<td><?= $vivax_acumulado ?></td>
		</tr>
		<tr>
			<td>34</td>
			<td>PALUDISMO A MALARIAE (B52)</td>
			<td><?= $malariae ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $malariae ?></td>
			<td><?= $malariae_acumulado ?></td>
		</tr>
		<tr>
			<td>35</td>
			<td>PALUDISMO MIXTA (B50, B51, B52)</td>
			<td><?= $palumixta ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $palumixta ?></td>
			<td><?= $palumixta_acumulado ?></td>
		</tr>
		<tr>
			<td>36</td>
			<td>LEISHMANIASIS (B55.-)</td>
			<td><?= $leishmaniasis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $leishmaniasis ?></td>
			<td><?= $leishmaniasis_acumulado ?></td>
		</tr>
		<tr>
			<td>37</td>
			<td>ENFERMEDAD DE CHAGAS (B57)</td>
			<td><?= $chagas ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $chagas ?></td>
			<td><?= $chagas_acumulado ?></td>
		</tr>
		<tr>
			<td>38</td>
			<td>ONCOCERCOSIS (B73)</td>
			<td><?= $oncocercosis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $oncocercosis ?></td>
			<td><?= $oncocercosis_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>If.- ENFERMEDADES ZOONOTICAS</b></td>
			<td><b><?= $zoo ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $zoo ?></b></td>
			<td><b><?= $zoo_acumulado ?></b></td>
		</tr>
		<tr>
			<td>39</td>
			<td>RABIA HUMANA (A82.-)</td>
			<td><?= $rabia ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $rabia ?></td>
			<td><?= $rabia_acumulado ?></td>
		</tr>
		<tr>
			<td>40</td>
			<td>FIEBRE HEMORRAGICA VENEZOLANA (A96,8)</td>
			<td><?= $fiebrehemo ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $fiebrehemo ?></td>
			<td><?= $fiebrehemo_acumulado ?></td>
		</tr>
		<tr>
			<td>41</td>
			<td>LEPTOSPIROSIS (A27.-)</td>
			<td><?= $leptospirosis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $leptospirosis ?></td>
			<td><?= $leptospirosis_acumulado ?></td>
		</tr>
		<tr>
			<td>42</td>
			<td>BRUCELOSIS (A23.-)</td>
			<td><?= $brucelosis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $brucelosis ?></td>
			<td><?= $brucelosis_acumulado ?></td>
		</tr>
		<tr>
			<td>43</td>
			<td>CISTICERCOSIS (B69.-)</td>
			<td><?= $cisticercosis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $cisticercosis ?></td>
			<td><?= $cisticercosis_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>Ig.- OTRAS ENF. TRANSMISIBLES</b></td>
			<td><b><?= $transmisibles ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $transmisibles ?></b></td>
			<td><b><?= $transmisibles_acumulado ?></b></td>
		</tr>
		<tr>
			<td>44</td>
			<td>MENINGITIS VIRAL (A87)</td>
			<td><?= $menviral ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $menviral ?></td>
			<td><?= $menviral_acumulado ?></td>
		</tr>
		<tr>
			<td>45</td>
			<td>MENINGITIS BACTERIANA (G00)</td>
			<td><?= $menbac ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $menbac ?></td>
			<td><?= $menbac_acumulado ?></td>
		</tr>
		<tr>
			<td>46</td>
			<td>MENINGITIS MENINGOCOCICA (A39.0)</td>
			<td><?= $menmenin ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $menmenin ?></td>
			<td><?= $menmenin_acumulado ?></td>
		</tr>
		<tr>
			<td>47</td>
			<td>ENFERMEDAD MENINGOCÓCICA (A39.9)</td>
			<td><?= $meningo ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $meningo ?></td>
			<td><?= $meningo_acumulado ?></td>
		</tr>
		<tr>
			<td>48</td>
			<td>VARICELA (B01.-)</td>
			<td><?= $varicela ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $varicela ?></td>
			<td><?= $varicela_acumulado ?></td>
		</tr>
		<tr>
			<td>49</td>
			<td>HEPATITIS AGUDA TIPO B (B16.-)</td>
			<td><?= $hepab ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hepab ?></td>
			<td><?= $hepab_acumulado ?></td>
		</tr>
		<tr>
			<td>50</td>
			<td>HEPATITIS AGUDA TIPO C (B17.1, B18,2)</td>
			<td><?= $hepac ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hepac ?></td>
			<td><?= $hepac_acumulado ?></td>
		</tr>
		<tr>
			<td>51</td>
			<td>HEPAT. OTRAS AGUD. (B17.-)</td>
			<td><?= $hepaotras ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hepaotras ?></td>
			<td><?= $hepaotras_acumulado ?></td>
		</tr>
		<tr>
			<td>52</td>
			<td>HEPATITIS NO ESPECIF. (B19.-)</td>
			<td><?= $hepanoesp ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hepanoesp ?></td>
			<td><?= $hepanoesp_acumulado ?></td>
		</tr>
		<tr>
			<td>53</td>
			<td>SINDROME VIRAL (B34.-)</td>
			<td><?= $sinviral ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sinviral ?></td>
			<td><?= $sinviral_acumulado ?></td>
		</tr>
		<tr>
			<td>54</td>
			<td>ESCABIOSIS (B86)</td>
			<td><?= $escabiosis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $escabiosis ?></td>
			<td><?= $escabiosis_acumulado ?></td>
		</tr>
		<tr>
			<td>55</td>
			<td>MICOSIS SUPERFICIAL (B35-B36)</td>
			<td><?= $micosis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $micosis ?></td>
			<td><?= $micosis_acumulado ?></td>
		</tr>
		<tr>
			<td>56</td>
			<td>LEPRA (A30)</td>
			<td><?= $lepra ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $lepra ?></td>
			<td><?= $lepra_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>II. NEOPLASIAS</b></td>
			<td><b><?= $neoplasias ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $neoplasias ?></b></td>
			<td><b><?= $neoplasias_acumulado ?></b></td>
		</tr>
		<tr>
			<td>57</td>
			<td>NEOPLASIAS</td>
			<td><?= $neoplasias ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $neoplasias ?></td>
			<td><?= $neoplasias_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>III. ENF.DE LA SANGRE Y ORG. HEMATOPOY.</b></td>
			<td><b><?= $sangre ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $sangre ?></b></td>
			<td><b><?= $sangre_acumulado ?></b></td>
		</tr>
		<tr>
			<td>58</td>
			<td>ANEMIAS (D50-D64)</td>
			<td><?= $sangre ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sangre ?></td>
			<td><?= $sangre_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>IV. ENF. ENDOCRINAS, NUTRIC. Y METABOLICAS</b></td>
			<td><b><?= $endocrinas ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $endocrinas ?></b></td>
			<td><b><?= $endocrinas_acumulado ?></b></td>
		</tr>
		<tr>
			<td>59</td>
			<td>TRASTORNOS TIROIDEOS (E00-E07)</td>
			<td><?= $tiroideos ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $tiroideos ?></td>
			<td><?= $tiroideos_acumulado ?></td>
		</tr>
		<tr>
			<td>60</td>
			<td>DIABETES MELLITUS &#60; 25 AÑOS (E10-E14)</td>
			<td><?= $diabetes_menor25 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $diabetes_menor25 ?></td>
			<td><?= $diabetes_menor25_acumulado ?></td>
		</tr>
		<tr>
			<td>61</td>
			<td>DIABETES MELLITUS &#62;= 25 AÑOS (E10-E14)</td>
			<td><?= $diabetes_mayor25 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $diabetes_mayor25 ?></td>
			<td><?= $diabetes_mayor25_acumulado ?></td>
		</tr>
		<tr>
			<td>62</td>
			<td>DESNUTRICION LEVE &#60; 15a.(E44.1) (***) E40-E46</td>
			<td><?= $deslev_menor15 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $deslev_menor15 ?></td>
			<td><?= $deslev_menor15_acumulado ?></td>
		</tr>
		<tr>
			<td>63</td>
			<td>DESNUTRICION MODERADA &#60; 15a.(E44.0) (***)</td>
			<td><?= $desmod_menor15 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $desmod_menor15 ?></td>
			<td><?= $desmod_menor15_acumulado ?></td>
		</tr>
		<tr>
			<td>64</td>
			<td>DESNUTRICION GRAVE &#60; 15a. (E40-E43) (***)</td>
			<td><?= $desgra_menor15 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $desgra_menor15 ?></td>
			<td><?= $desgra_menor15_acumulado ?></td>
		</tr>
		<tr>
			<td>65</td>
			<td>OBESIDAD (E66.-)</td>
			<td><?= $obecidad ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $obecidad ?></td>
			<td><?= $obecidad_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>V. TRAST.MENTALES Y DEL COMPORTAMIENTO</b></td>
			<td><b><?= $mentales ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $mentales ?></b></td>
			<td><b><?= $mentales_acumulado ?></b></td>
		</tr>
		<tr>
			<td>66</td>
			<td>TRAST.MENTALES Y DEL COMPORT. (F00-F99)</td>
			<td><?= $mentales ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $mentales ?></td>
			<td><?= $mentales_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>VI. ENF. DEL SISTEMA NERVIOSO</b></td>
			<td><b><?= $nervioso ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $nervioso ?></b></td>
			<td><b><?= $nervioso_acumulado ?></b></td>
		</tr>
		<tr>
			<td>67</td>
			<td>PARALISIS FLACIDA &#60; 15a. (G82.0) (***)</td>
			<td><?= $paralisis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $paralisis ?></td>
			<td><?= $paralisis_acumulado ?></td>
		</tr>
		<tr>
			<td>68</td>
			<td>EPILEPSIA (G40-G41)</td>
			<td><?= $epilepsia ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $epilepsia ?></td>
			<td><?= $epilepsia_acumulado ?></td>
		</tr>
		<tr>
			<td>69</td>
			<td>MIGRAÑA (G43.-)</td>
			<td><?= $migrana ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $migrana ?></td>
			<td><?= $migrana_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>VII. ENF.DEL OJO Y SUS ANEXOS</b></td>
			<td><b><?= $ojo ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $ojo ?></b></td>
			<td><b><?= $ojo_acumulado ?></b></td>
		</tr>
		<tr>
			<td>70</td>
			<td>CONJUNTIVITIS (H10)</td>
			<td><?= $conjuntivitis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $conjuntivitis ?></td>
			<td><?= $conjuntivitis_acumulado ?></td>
		</tr>
		<tr>
			<td>71</td>
			<td>OTRAS ENF. DEL OJO (H00-H09,H11-H59)</td>
			<td><?= $otrasojo ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $otrasojo ?></td>
			<td><?= $otrasojo_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>VIII. ENF. DEL OIDO Y APOFISIS MASTOIDES</b></td>
			<td><b><?= $oido ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $oido ?></b></td>
			<td><b><?= $oido_acumulado ?></b></td>
		</tr>
		<tr>
			<td>72</td>
			<td>OTITIS EXTERNA (H60.-)</td>
			<td><?= $otiext ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $otiext ?></td>
			<td><?= $otiext_acumulado ?></td>
		</tr>
		<tr>
			<td>73</td>
			<td>OTITIS MEDIA AGUDA, &#60; 5a.(H65.0-H65.1,H66.-) (***)</td>
			<td><?= $otimed_menor5 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $otimed_menor5 ?></td>
			<td><?= $otimed_menor5_acumulado ?></td>
		</tr>
		<tr>
			<td>74</td>
			<td>OTITIS MEDIA AGUDA, &#62;= 5a.(H65.0-H65.1,H66.-) (***)</td>
			<td><?= $otimed_mayor5 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $otimed_mayor5 ?></td>
			<td><?= $otimed_mayor5_acumulado ?></td>
		</tr>
		<tr>
			<td>75</td>
			<td>OTITIS MEDIA CRONICA (H65.2-H65.9)</td>
			<td><?= $oticro ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $oticro ?></td>
			<td><?= $oticro_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>IX. ENFERM. DEL SISTEMA CIRCULATORIO</b></td>
			<td><b><?= $circulatorio ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $circulatorio ?></b></td>
			<td><b><?= $circulatorio_acumulado ?></b></td>
		</tr>
		<tr>
			<td>76</td>
			<td>FIEBRE REUMAT. Y ENF.CARD.REUM. CRON.(IOO-IO9)</td>
			<td><?= $fiereu ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $fiereu ?></td>
			<td><?= $fiereu_acumulado ?></td>
		</tr>
		<tr>
			<td>77</td>
			<td>HIPERTENSION ARTERIAL &#60; 15a. (I10) (***)</td>
			<td><?= $hiper_menor15 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hiper_menor15 ?></td>
			<td><?= $hiper_menor15_acumulado ?></td>
		</tr>
		<tr>
			<td>78</td>
			<td>HIPERTENSION ARTERIAL 15-44a. (I10) (***)</td>
			<td><?= $hiper_entre15 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hiper_entre15 ?></td>
			<td><?= $hiper_entre15_acumulado ?></td>
		</tr>
		<tr>
			<td>79</td>
			<td>HIPERTENSION ARTERIAL 45a.Y MAS (I10) (***)</td>
			<td><?= $hiper_mayor15 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hiper_mayor15 ?></td>
			<td><?= $hiper_mayor15_acumulado ?></td>
		</tr>
		<tr>
			<td>80</td>
			<td>ENF.ISQUEMICAS DEL CORAZON (I20,I22-I25)</td>
			<td><?= $isquemicas ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $isquemicas ?></td>
			<td><?= $isquemicas_acumulado ?></td>
		</tr>
		<tr>
			<td>81</td>
			<td>INFARTO AGUDO DEL MIOCARDIO &#60; 45a. (I21)</td>
			<td><?= $infarto_menor45 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $infarto_menor45 ?></td>
			<td><?= $infarto_menor45_acumulado ?></td>
		</tr>
		<tr>
			<td>82</td>
			<td>INFARTO AGUDO DEL MIOCARDIO 45a. Y MAS (I21)</td>
			<td><?= $infarto_mayor45 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $infarto_mayor45 ?></td>
			<td><?= $infarto_mayor45_acumulado ?></td>
		</tr>
		<tr>
			<td>83</td>
			<td>ENF. CEREBROVASCULARES (I60-I69)</td>
			<td><?= $cerebrovasculares ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $cerebrovasculares ?></td>
			<td><?= $cerebrovasculares_acumulado ?></td>
		</tr>
		<tr>
			<td>84</td>
			<td>VARICES DE MIEMBROS INFERIORES (I83.-)</td>
			<td><?= $varices ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $varices ?></td>
			<td><?= $varices_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>X. ENFERM. DEL SISTEMA RESPIRATORIO</b></td>
			<td><b><?= $respiratorio ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $respiratorio ?></b></td>
			<td><b><?= $respiratorio_acumulado ?></b></td>
		</tr>
		<tr>
			<td>85</td>
			<td>FARINGITIS AGUDA menor a 5a. (J02.-) (***)</td>
			<td><?= $farinmenor5 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $farinmenor5 ?></td>
			<td><?= $farinmenor5_acumulado ?></td>
		</tr>
		<tr>
			<td>86</td>
			<td>FARINGITIS AGUDA Mayor o igual a 5a. (J02.-) (***)</td>
			<td><?= $farinmayor5 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $farinmayor5 ?></td>
			<td><?= $farinmayor5_acumulado ?></td>
		</tr>
		<tr>
			<td>87</td>
			<td>AMIGDALITIS AGUDA (J03.-)</td>
			<td><?= $amigdalitis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $amigdalitis ?></td>
			<td><?= $amigdalitis_acumulado ?></td>
		</tr>
		<tr>
			<td>88</td>
			<td>RINOFARINGITIS AGUDA menor a 5a.(J00) (***)</td>
			<td><?= $rino_menor5 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $rino_menor5 ?></td>
			<td><?= $rino_menor5_acumulado ?></td>
		</tr>
		<tr>
			<td>89</td>
			<td>RINOFARINGITIS AGUDA &#62;= 5a.(J00) (***)</td>
			<td><?= $rino_mayor5 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $rino_mayor5 ?></td>
			<td><?= $rino_mayor5_acumulado ?></td>
		</tr>
		<tr>
			<td>90</td>
			<td>NEUMONIAS &#60; 1a. (J12-J18) (*)</td>
			<td><?= $neumonia_menor1 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $neumonia_menor1 ?></td>
			<td><?= $neumonia_menor1_acumulado ?></td>
		</tr>
		<tr>
			<td>91</td>
			<td>NEUMONIAS 1-4a. (J12-J18) (***)</td>
			<td><?= $neumonia_uno4 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $neumonia_uno4 ?></td>
			<td><?= $neumonia_uno4_acumulado ?></td>
		</tr>
		<tr>
			<td>92</td>
			<td>NEUMONIAS  5a. Y MAS (J12-J18) (***)</td>
			<td><?= $neumonia_mayor5 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $neumonia_mayor5 ?></td>
			<td><?= $neumonia_mayor5_acumulado ?></td>
		</tr>
		<tr>
			<td>93</td>
			<td>BRONQUIOLITIS AGUDA &#60; 2a.(J21.-) (***)</td>
			<td><?= $bronquiolitis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $bronquiolitis ?></td>
			<td><?= $bronquiolitis_acumulado ?></td>
		</tr>
		<tr>
			<td>94</td>
			<td>BRONQUITIS AGUDA (J20.-)</td>
			<td><?= $bronquitis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $bronquitis ?></td>
			<td><?= $bronquitis_acumulado ?></td>
		</tr>
		<tr>
			<td>95</td>
			<td>BRONQUITIS CRONICA (J41,J42,J44.8)</td>
			<td><?= $bronco ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $bronco ?></td>
			<td><?= $bronco_acumulado ?></td>
		</tr>
		<tr>
			<td>96</td>
			<td>ASMA  menor a 10 AÑOS  (J45) (***)</td>
			<td><?= $asma_menor10 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $asma_menor10 ?></td>
			<td><?= $asma_menor10_acumulado ?></td>
		</tr>
		<tr>
			<td>97</td>
			<td>ASMA Mayor o igual a 10 AÑOS  (J45) (***)</td>
			<td><?= $asma_mayor10 ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $asma_mayor10 ?></td>
			<td><?= $asma_mayor10_acumulado ?></td>
		</tr>
		<tr>
			<td>98</td>
			<td>RINITIS ALERGICA (J30.1-J30.4)</td>
			<td><?= $rinitis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $rinitis ?></td>
			<td><?= $rinitis_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>XI. ENFERMEDADES DEL SISTEMA DIGESTIVO</b></td>
			<td><b><?= $digestivo ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $digestivo ?></b></td>
			<td><b><?= $digestivo_acumulado ?></b></td>
		</tr>
		<tr>
			<td>99</td>
			<td>CARIES DENTAL (K02.-)</td>
			<td><?= $caries ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $caries ?></td>
			<td><?= $caries_acumulado ?></td>
		</tr>
		<tr>
			<td>100</td>
			<td>GINGIVITIS (K05.0-K05.1)</td>
			<td><?= $gingivitis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $gingivitis ?></td>
			<td><?= $gingivitis_acumulado ?></td>
		</tr>
		<tr>
			<td>101</td>
			<td>ESTOMATITIS (K12.0-K12.1)</td>
			<td><?= $estomatitis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $estomatitis ?></td>
			<td><?= $estomatitis_acumulado ?></td>
		</tr>
		<tr>
			<td>102</td>
			<td>GASTRITIS (K29.-)</td>
			<td><?= $gastritis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $gastritis ?></td>
			<td><?= $gastritis_acumulado ?></td>
		</tr>
		<tr>
			<td>103</td>
			<td>APENDICITIS TODAS FORMAS (K35-K37)</td>
			<td><?= $apendicitis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $apendicitis ?></td>
			<td><?= $apendicitis_acumulado ?></td>
		</tr>
		<tr>
			<td>104</td>
			<td>HERNIAS CAVIDAD ABDOMINAL (K40-K46)</td>
			<td><?= $hernias ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hernias ?></td>
			<td><?= $hernias_acumulado ?></td>
		</tr>
		<tr>
			<td>105</td>
			<td>COLELITIASIS (K80.-)</td>
			<td><?= $colelitiasis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $colelitiasis ?></td>
			<td><?= $colelitiasis_acumulado ?></td>
		</tr>
		<tr>
			<td>106</td>
			<td>PANCREATITIS AGUDA (K85)</td>
			<td><?= $pancreatitis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $pancreatitis ?></td>
			<td><?= $pancreatitis_acumulado ?></td>
		</tr>
		<tr>
			<td>107</td>
			<td>OTRAS ENF. ESOF.,ESTOMAGO E INTESTINO</td>
			<td><?= $otrasestomago ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $otrasestomago ?></td>
			<td><?= $otrasestomago_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>XII. ENF.DE LA PIEL Y TEJ. SUBCUTANEO</b></td>
			<td><b><?= $piel ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $piel ?></b></td>
			<td><b><?= $piel_acumulado ?></b></td>
		</tr>
		<tr>
			<td>108</td>
			<td>ABSCESOS (L02.-)</td>
			<td><?= $abcesos ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $abcesos ?></td>
			<td><?= $abcesos_acumulado ?></td>
		</tr>
		<tr>
			<td>109</td>
			<td>CELULITIS (L03.-)</td>
			<td><?= $celulitis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $celulitis ?></td>
			<td><?= $celulitis_acumulado ?></td>
		</tr>
		<tr>
			<td>110</td>
			<td>DERMATITIS (L20-L30)</td>
			<td><?= $dermatitis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $dermatitis ?></td>
			<td><?= $dermatitis_acumulado ?></td>
		</tr>
		<tr>
			<td>111</td>
			<td>PIODERMITIS (L08.0)</td>
			<td><?= $piodermitis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $piodermitis ?></td>
			<td><?= $piodermitis_acumulado ?></td>
		</tr>
		<tr>
			<td>112</td>
			<td>URTICARIA (L50.-)</td>
			<td><?= $urticaria ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $urticaria ?></td>
			<td><?= $urticaria_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>XIII. ENF.SIST.OSTEOMUSC. Y TEJ. CONJUNTIVO</b></td>
			<td><b><?= $conjutivo ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $conjutivo ?></b></td>
			<td><b><?= $conjutivo_acumulado ?></b></td>
		</tr>
		<tr>
			<td>113</td>
			<td>ARTRITIS (M00-M14)</td>
			<td><?= $artritis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $artritis ?></td>
			<td><?= $artritis_acumulado ?></td>
		</tr>
		<tr>
			<td>114</td>
			<td>MIALGIAS (M79.1)</td>
			<td><?= $mialgias ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $mialgias ?></td>
			<td><?= $mialgias_acumulado ?></td>
		</tr>
		<tr>
			<td>115</td>
			<td>NEURALGIAS (M79.2)</td>
			<td><?= $neuralgias ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $neuralgias ?></td>
			<td><?= $neuralgias_acumulado ?></td>
		</tr>
		<tr>
			<td>116</td>
			<td>BURSITIS (M70,M71,M75-M77)</td>
			<td><?= $bursitis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $bursitis ?></td>
			<td><?= $bursitis_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>XIV. ENF.DEL SISTEMA GENITO-URINARIO</b></td>
			<td><b><?= $urinario ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $urinario ?></b></td>
			<td><b><?= $urinario_acumulado ?></b></td>
		</tr>
		<tr>
			<td>117</td>
			<td>INFECCION URINARIA (N39.0)</td>
			<td><?= $infuri ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $infuri ?></td>
			<td><?= $infuri_acumulado ?></td>
		</tr>
		<tr>
			<td>118</td>
			<td>URETRITIS NO GONOCÓCCICA (N34.1)</td>
			<td><?= $uretritis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $uretritis ?></td>
			<td><?= $uretritis_acumulado ?></td>
		</tr>
		<tr>
			<td>119</td>
			<td>LEUCORREA NO ESPECIFICADA (N89.8) (**)</td>
			<td><?= $leucorrea ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $leucorrea ?></td>
			<td><?= $leucorrea_acumulado ?></td>
		</tr>
		<tr>
			<td>120</td>
			<td>HEMORR. GENITAL NO ESPEC. HEMBRAS (N93.9) (**)</td>
			<td><?= $hemogen ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hemogen ?></td>
			<td><?= $hemogen_acumulado ?></td>
		</tr>
		<tr>
			<td>121</td>
			<td>COLICO NEFRITICO (N23)</td>
			<td><?= $colico ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $colico ?></td>
			<td><?= $colico_acumulado ?></td>
		</tr>
		<tr>
			<td>122</td>
			<td>DISMENORREA NO ESPECIFICADA (N94.6) (**)</td>
			<td><?= $dismenorrea ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $dismenorrea ?></td>
			<td><?= $dismenorrea_acumulado ?></td>
		</tr>
		<tr>
			<td>123</td>
			<td>SALPINGITIS Y OOFORITIS (N70.-) (**)</td>
			<td><?= $salpingitis ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $salpingitis ?></td>
			<td><?= $salpingitis_acumulado ?></td>
		</tr>
		<tr>
			<td>124</td>
			<td>ENFERM. INFLAMATORIAS DEL UTERO (N71.-,N72.-) (**)</td>
			<td><?= $utero ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $utero ?></td>
			<td><?= $utero_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>XV. EMBARAZO, PARTO Y PUERPERIO (**)</b></td>
			<td><b><?= $embarazo ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $embarazo ?></b></td>
			<td><b><?= $embarazo_acumulado ?></b></td>
		</tr>
		<tr>
			<td>125</td>
			<td>HEMORR.3er.TRIM.EMBARAZO (O20,O44-O46) (**)</td>
			<td><?= $hemoemb ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hemoemb ?></td>
			<td><?= $hemoemb_acumulado ?></td>
		</tr>
		<tr>
			<td>126</td>
			<td>PRE-ECLAMPSIA (O13.-,O14.-) (**)</td>
			<td><?= $preclampsia ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $preclampsia ?></td>
			<td><?= $preclampsia_acumulado ?></td>
		</tr>
		<tr>
			<td>127</td>
			<td>ECLAMPSIA (O15.-) (**)</td>
			<td><?= $eclampsia ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $eclampsia ?></td>
			<td><?= $eclampsia_acumulado ?></td>
		</tr>
		<tr>
			<td>128</td>
			<td>INTENTO FALLIDO DE ABORTO (O07.-) (**)</td>
			<td><?= $falloaborto ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $falloaborto ?></td>
			<td><?= $falloaborto_acumulado ?></td>
		</tr>
		<tr>
			<td>129</td>
			<td>ABORTO (O00-O06,O08) (**)</td>
			<td><?= $aborto ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $aborto ?></td>
			<td><?= $aborto_acumulado ?></td>
		</tr>
		<tr>
			<td>130</td>
			<td>TRASTORNOS MAMARIOS DEL PUERPERIO (O91-O92)(**)</td>
			<td><?= $mamarios ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $mamarios ?></td>
			<td><?= $mamarios_acumulado ?></td>
		</tr>
		<tr>
			<td>131</td>
			<td>OTRAS COMPLIC.DEL EMB.PART. Y PUERPERIO (**)</td>
			<td><?= $otrasemb ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $otrasemb ?></td>
			<td><?= $otrasemb_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>XVIII. SINT.SIG. Y HALLAZGOS ANORMALES</b></td>
			<td><b><?= $anormal ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $anormal ?></b></td>
			<td><b><?= $anormal_acumulado ?></b></td>
		</tr>
		<tr>
			<td>132</td>
			<td>CEFALEA (R51)</td>
			<td><?= $cefalea ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $cefalea ?></td>
			<td><?= $cefalea_acumulado ?></td>
		</tr>
		<tr>
			<td>133</td>
			<td>FIEBRE (R50.-)</td>
			<td><?= $fiebre ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $fiebre ?></td>
			<td><?= $fiebre_acumulado ?></td>
		</tr>
		<tr>
			<td>134</td>
			<td>CONVULSIONES (R56.-)</td>
			<td><?= $convulsiones ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $convulsiones ?></td>
			<td><?= $convulsiones_acumulado ?></td>
		</tr>
		<tr>
			<td>135</td>
			<td>ABDOMEN AGUDO (R10.0)</td>
			<td><?= $abdomen ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $abdomen ?></td>
			<td><?= $abdomen_acumulado ?></td>
		</tr>
		<tr>
			<td>136</td>
			<td>DOLOR ABDOMINAL (R10.4)</td>
			<td><?= $abdominal ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $abdominal ?></td>
			<td><?= $abdominal_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>XIX. TRAUMATISMOS Y ENVENENAMIENTOS</b></td>
			<td><b><?= $veneno ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $veneno ?></b></td>
			<td><b><?= $veneno_acumulado ?></b></td>
		</tr>
		<tr>
			<td>137</td>
			<td>QUEMADURAS (T20-T32)</td>
			<td><?= $quemaduras ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $quemaduras ?></td>
			<td><?= $quemaduras_acumulado ?></td>
		</tr>
		<tr>
			<td>138</td>
			<td>ENVENEN. POR DROG. Y OTRAS SUST. (T36-T50)</td>
			<td><?= $envendro ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $envendro ?></td>
			<td><?= $envendro_acumulado ?></td>
		</tr>
		<tr>
			<td>139</td>
			<td>HERIDAS</td>
			<td><?= $heridas ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $heridas ?></td>
			<td><?= $heridas_acumulado ?></td>
		</tr>
		<tr>
			<td>140</td>
			<td>FRACTURAS</td>
			<td><?= $fracturas ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $fracturas ?></td>
			<td><?= $fracturas_acumulado ?></td>
		</tr>
		<tr>
			<td>141</td>
			<td>LUXACIONES Y ESGUINCES</td>
			<td><?= $luxaciones ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $luxaciones ?></td>
			<td><?= $luxaciones_acumulado ?></td>
		</tr>
		<tr>
			<td>142</td>
			<td>INTOXICACION POR PLAGUICIDAS (T60.-)</td>
			<td><?= $toxi ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $toxi ?></td>
			<td><?= $toxi_acumulado ?></td>
		</tr>
		<tr>
			<td>143</td>
			<td>CUERPO EXTRAÑO EN ORIFICIO NATURAL (T15-T19)</td>
			<td><?= $cuerpo ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $cuerpo ?></td>
			<td><?= $cuerpo_acumulado ?></td>
		</tr>
		<tr>
			<td>144</td>
			<td>OTROS TRAUMATISMOS</td>
			<td><?= $otrostrau ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $otrostrau ?></td>
			<td><?= $otrostrau_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>XX. CAUSAS EXTERNAS DE MORBILIDAD Y MORT.</b></td>
			<td><b><?= $externas ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $externas ?></b></td>
			<td><b><?= $externas_acumulado ?></b></td>
		</tr>
		<tr>
			<td>145</td>
			<td>ACCID. TRANSPORT. TERRESTRE (V01-V89) (b**)</td>
			<td><?= $terrestre ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $terrestre ?></td>
			<td><?= $terrestre_acumulado ?></td>
		</tr>
		<tr>
			<td>146</td>
			<td>PICADURA DE INSEC. Y OTROS ANIM.(X21-X27,X29)</td>
			<td><?= $picadura ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $picadura ?></td>
			<td><?= $picadura_acumulado ?></td>
		</tr>
		<tr>
			<td>147</td>
			<td>EMPOZOÑAMIENTO OFIDICO (X20,W59.-)</td>
			<td><?= $ofidico ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $ofidico ?></td>
			<td><?= $ofidico_acumulado ?></td>
		</tr>
		<tr>
			<td>148</td>
			<td>MORDEDURAS SOSPECHOSAS DE RABIA (A82)</td>
			<td><?= $morabia ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $morabia ?></td>
			<td><?= $morabia_acumulado ?></td>
		</tr>
		<tr>
			<td>149</td>
			<td>OTROS ACCIDENTES (b**)</td>
			<td><?= $otrosacc ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $otrosacc ?></td>
			<td><?= $otrosacc_acumulado ?></td>
		</tr>
		<tr>
			<td>150</td>
			<td>ACCIDENTES DEL HOGAR (b**)</td>
			<td><?= $hogar ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $hogar ?></td>
			<td><?= $hogar_acumulado ?></td>
		</tr>
		<tr>
			<td>151</td>
			<td>ACCIDENTES LABORALES (b**)</td>
			<td><?= $laborales ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $laborales ?></td>
			<td><?= $laborales_acumulado ?></td>
		</tr>
		<tr>
			<td>152</td>
			<td>EFECTOS ADVERSOS DE MEDICAMENTOS (Y40-Y57)</td>
			<td><?= $advmed ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $advmed ?></td>
			<td><?= $advmed_acumulado ?></td>
		</tr>
		<tr>
			<td>153</td>
			<td>EFECTOS ADVERSOS DE VACUNAS (Y58-Y59)</td>
			<td><?= $advac ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $advac ?></td>
			<td><?= $advac_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>VIOLENCIA FAMILIAR</b></td>
			<td><b><?= $violencia ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $violencia ?></b></td>
			<td><b><?= $violencia_acumulado ?></b></td>
		</tr>
		<tr>
			<td><b>A</b></td>
			<td><b>VIOLENCIA FISICA</b></td>
			<td><b><?= $viofis ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $viofis ?></b></td>
			<td><b><?= $viofis_acumulado ?></b></td>
		</tr>
		<tr>
			<td>154</td>
			<td>NIÑO</td>
			<td><?= $fisica_ninos ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $fisica_ninos ?></td>
			<td><?= $fisica_ninos_acumulado ?></td>
		</tr>
		<tr>
			<td>155</td>
			<td>NIÑA</td>
			<td><?= $fisica_ninas ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $fisica_ninas ?></td>
			<td><?= $fisica_ninas_acumulado ?></td>
		</tr>
		<tr>
			<td>156</td>
			<td>ADOLESCENTE HOMBRE</td>
			<td><?= $fisica_teen_h ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $fisica_teen_h ?></td>
			<td><?= $fisica_teen_h_acumulado ?></td>
		</tr>
		<tr>
			<td>157</td>
			<td>ADOLESCENTE MUJER</td>
			<td><?= $fisica_teen_m ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $fisica_teen_m ?></td>
			<td><?= $fisica_teen_m_acumulado ?></td>
		</tr>
		<tr>
			<td>158</td>
			<td>ADULTO</td>
			<td><?= $fisica_adulto ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $fisica_adulto ?></td>
			<td><?= $fisica_adulto_acumulado ?></td>
		</tr>
		<tr>
			<td>159</td>
			<td>ADULTA</td>
			<td><?= $fisica_adulta ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $fisica_adulta ?></td>
			<td><?= $fisica_adulta_acumulado ?></td>
		</tr>
		<tr>
			<td>160</td>
			<td>ADULTO MAYOR</td>
			<td><?= $fisica_viejo ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $fisica_viejo ?></td>
			<td><?= $fisica_viejo_acumulado ?></td>
		</tr>
		<tr>
			<td>161</td>
			<td>ADULTA MAYOR</td>
			<td><?= $fisica_vieja ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $fisica_vieja ?></td>
			<td><?= $fisica_vieja ?></td>
		</tr>
		<tr>
			<td><b>B</b></td>
			<td><b>VIOLENCIA PSICOLOGICA</b></td>
			<td><b><?= $viopsico ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $viopsico ?></b></td>
			<td><b><?= $viopsico_acumulado ?></b></td>
		</tr>
		<tr>
			<td>162</td>
			<td>NIÑO</td>
			<td><?= $psico_ninos ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $psico_ninos ?></td>
			<td><?= $psico_ninos_acumulado ?></td>
		</tr>
		<tr>
			<td>163</td>
			<td>NIÑA</td>
			<td><?= $psico_ninas ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $psico_ninas ?></td>
			<td><?= $psico_ninas_acumulado ?></td>
		</tr>
		<tr>
			<td>164</td>
			<td>ADOLESCENTE HOMBRE</td>
			<td><?= $psico_teen_h ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $psico_teen_h ?></td>
			<td><?= $psico_teen_h_acumulado ?></td>
		</tr>
		<tr>
			<td>165</td>
			<td>ADOLESCENTE MUJER</td>
			<td><?= $psico_teen_m ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $psico_teen_m ?></td>
			<td><?= $psico_teen_m_acumulado ?></td>
		</tr>
		<tr>
			<td>166</td>
			<td>ADULTO</td>
			<td><?= $psico_adulto ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $psico_adulto ?></td>
			<td><?= $psico_adulto_acumulado ?></td>
		</tr>
		<tr>
			<td>167</td>
			<td>ADULTA</td>
			<td><?= $psico_adulta ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $psico_adulta ?></td>
			<td><?= $psico_adulta_acumulado ?></td>
		</tr>
		<tr>
			<td>168</td>
			<td>ADULTO MAYOR</td>
			<td><?= $psico_viejo ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $psico_viejo ?></td>
			<td><?= $psico_viejo_acumulado ?></td>
		</tr>
		<tr>
			<td>169</td>
			<td>ADULTA MAYOR</td>
			<td><?= $psico_vieja ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $psico_vieja ?></td>
			<td><?= $psico_vieja_acumulado ?></td>
		</tr>
		<tr>
			<td><b>C</b></td>
			<td><b>VIOLENCIA SEXUAL</b></td>
			<td><b><?= $viosexual ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $viosexual ?></b></td>
			<td><b><?= $viosexual_acumulado ?></b></td>
		</tr>
		<tr>
			<td>170</td>
			<td>NIÑO</td>
			<td><?= $sexual_ninos ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sexual_ninos ?></td>
			<td><?= $sexual_ninos_acumulado ?></td>
		</tr>
		<tr>
			<td>171</td>
			<td>NIÑA</td>
			<td><?= $sexual_ninas ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sexual_ninas ?></td>
			<td><?= $sexual_ninas_acumulado ?></td>
		</tr>
		<tr>
			<td>172</td>
			<td>ADOLESCENTE HOMBRE</td>
			<td><?= $sexual_teen_h ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sexual_teen_h ?></td>
			<td><?= $sexual_teen_h_acumulado ?></td>
		</tr>
		<tr>
			<td>173</td>
			<td>ADOLESCENTE MUJER</td>
			<td><?= $sexual_teen_m ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sexual_teen_m ?></td>
			<td><?= $sexual_teen_m_acumulado ?></td>
		</tr>
		<tr>
			<td>174</td>
			<td>ADULTO</td>
			<td><?= $sexual_adulto ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sexual_adulto ?></td>
			<td><?= $sexual_adulto_acumulado ?></td>
		</tr>
		<tr>
			<td>175</td>
			<td>ADULTA</td>
			<td><?= $sexual_adulta ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sexual_adulta ?></td>
			<td><?= $sexual_adulta_acumulado ?></td>
		</tr>
		<tr>
			<td>176</td>
			<td>ADULTO MAYOR</td>
			<td><?= $sexual_viejo ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sexual_viejo ?></td>
			<td><?= $sexual_viejo_acumulado ?></td>
		</tr>
		<tr>
			<td>177</td>
			<td>ADULTA MAYOR</td>
			<td><?= $sexual_vieja ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $sexual_vieja ?></td>
			<td><?= $sexual_vieja_acumulado ?></td>
		</tr>
		<tr>
			<td><b></b></td>
			<td><b>OTRAS CAUSAS DE CONSULTA</b></td>
			<td><b><?= $otros ?></b></td>
			<td><b>0</b></td>
			<td><b>0</b></td>
			<td><b><?= $otros ?></b></td>
			<td><b><?= $otros_acumulado ?></b></td>
		</tr>
		<tr>
			<td>178</td>
			<td>OTRAS CAUSAS DE CONSULTA</td>
			<td><?= $otros ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $otros ?></td>
			<td><?= $otros_acumulado ?></td>
		</tr>
		<tr>
			<td colspan="2">TOTAL CAUSAS DE CONSULTA</td>
			<td><?= $total_consultas ?></td>
			<td>0</td>
			<td>0</td>
			<td><?= $total_consultas ?></td>
			<td><?= $total_consultas_acumulado ?></td>
		</tr>
	</table>
	<br>
	<br>
	(a**): Concentración; número de consultas realizadas por paciente por la misma causa C=(P+S)/P
	<br>
	(b**): ACCIDENTES DE TRANSPORTE TERRESTRE, DEL HOGAR, LABORALES  Y  OTROS ACCIDENTES SE EXCLUYEN DEL CONTEO DEL TOTAL DE CAUSAS. SE SUPONEN  INCLUIDAS EN HERIDAS, FRACTURAS Y/O LUXACIONES, ESGUINCES Y OTROS TRAUMATISMOS.
	<br>
	(*): TASAS POR 100.000 N.V.R.
	<br>
	(**): TASAS ESPECIFICAS POR 100.000 MUJERES ENTRE 15 Y 49 AÑOS DE EDAD.
	<br>
	(***): TASAS ESPECIFICAS POR 100.000  HABS. DEL CORRESPONDIENTE GRUPO DE EDAD.
	<br>
	NOTA: LA TASA GENERAL DE MORBILIDAD REGISTRADA (TOTAL CAUSAS) ES POR 1.000 HABITANTES.
</page>
<div id="contenido">
  <div id="caja">
    <h1 id="titulo"><span class="icon-user-md"></span>Editar consulta</h1>
    <?php if(isset($erroneo)): ?><div id="error" align="center"><?= $erroneo ?></div><?php endif ?>
    <?php if(isset($success)): ?><div id="success"><?= $success ?></div><?php endif ?>
      <form action="<?= base_url() ?>consultas/modificar" id="registrar_enfermo_form" method="post">
              <table id="formulario">
                  <tr>
                  <td><label for="fenac"><span class="icon-calendar2"></span>Fecha de Ingreso</label></td>
                  <td><?= date("d-m-Y", strtotime($feing)); ?></td>
              </tr>
              <tr>
                  <td><label for="nombre"><span class="icon-profile-male"></span>Nombre Completo:</label></td>
                  <td><?= $nombre; ?></td>
              </tr>
              <tr>
                  <td><label for="indigena"><span class="icon-certificate"></span>Grupo indigena:</label></td>
                  <td><?= $indigena; ?></td>
              </tr>
              <tr>
                  <td><label><span class="icon-venus-mars"></span>Sexo:</label></td>
                  <td><?= $sexo; ?></td>
              </tr>
              <tr>
                  <td><label for="fenac"><span class="icon-calendar2"></span>Fecha de Nacimiento</label></td>
                  <td><?= date("d-m-Y", strtotime($fenac)); ?></td>
              </tr>
              <tr>
                <td><label for="feing"><span class="icon-calendar2"></span>Fecha de Ingreso:</label></td>
                <td><?= date("d-m-Y H:i:a", strtotime($feing)); ?></td>
              </tr>
              <tr>
                  <td><label for="municipio"><span class="icon-map-pin"></span>Municipio:</label></td>
                  <td><?= $municipio; ?></td>
              </tr>
              <tr>
                  <td><label for="parroquia"><span class="icon-dial"></span>Parroquia:</label></td>
                  <td><?= $parroquia; ?></td>
              </tr>
              <tr>
                <td><label for="feocu"><span class="icon-calendar2"></span>Fecha de Consulta:</label></td>
                <td><?= date("d-m-Y H:i:a", strtotime($feocu)); ?></td>
              </tr>
              <tr>
                  <td><label for="grupo"><span class="icon-folder-open-o"></span>Grupo de Enfermedades:</label></td>
                  <td>
                      <select name="grupo" id="grupo">
                         <option value="<?= $grupo ?>" <?= set_select('grupo', $grupo) ?>><?= $grupo ?></option>
                         <option value="TRANSMISION HIDRICA Y ALIMENTOS">TRANSMISION HIDRICA Y ALIMENTOS</option>
                         <option value="TRANSMISION AEREA">TRANSMISION AEREA</option>
                         <option value="TRANSMISION SEXUAL">TRANSMISION SEXUAL</option>
                         <option value="PREVENIBLES POR VACUNAS">PREVENIBLES POR VACUNAS</option>
                         <option value="TRANSMITIDAS POR VECTORES">TRANSMITIDAS POR VECTORES</option>
                         <option value="ENFERMEDADES ZOONOTICAS">ENFERMEDADES ZOONOTICAS</option>
                         <option value="OTRAS ENF. TRANSMISIBLES">OTRAS ENF. TRANSMISIBLES</option>
                         <option value="NEOPLASIAS">NEOPLASIAS</option>
                         <option value="ENF.DE LA SANGRE Y ORG. HEMATOPOY">ENF.DE LA SANGRE Y ORG. HEMATOPOY</option>
                         <option value="ENF. ENDOCRINAS, NUTRIC. Y METABOLICAS">ENF. ENDOCRINAS, NUTRIC. Y METABOLICAS</option>
                         <option value="TRAST.MENTALES Y DEL COMPORTAMIENTO">TRAST.MENTALES Y DEL COMPORTAMIENTO</option>
                         <option value="ENF. DEL SISTEMA NERVIOSO">ENF. DEL SISTEMA NERVIOSO</option>
                         <option value="ENF.DEL OJO Y SUS ANEXOS">ENF.DEL OJO Y SUS ANEXOS</option>
                         <option value="ENF. DEL OIDO Y APOFISIS MASTOIDES">ENF. DEL OIDO Y APOFISIS MASTOIDES</option>
                         <option value="ENFERM. DEL SISTEMA CIRCULATORIO">ENFERM. DEL SISTEMA CIRCULATORIO</option>
                         <option value="ENFERM. DEL SISTEMA RESPIRATORIO">ENFERM. DEL SISTEMA RESPIRATORIO</option>
                         <option value="ENFERMEDADES DEL SISTEMA DIGESTIVO">ENFERMEDADES DEL SISTEMA DIGESTIVO</option>
                         <option value="ENF.DE LA PIEL Y TEJ. SUBCUTANEO">ENF.DE LA PIEL Y TEJ. SUBCUTANEO</option>
                         <option value="ENF.SIST.OSTEOMUSC. Y TEJ. CONJUNTIVO">ENF.SIST.OSTEOMUSC. Y TEJ. CONJUNTIVO</option>
                         <option value="ENF.DEL SISTEMA GENITO-URINARIO">ENF.DEL SISTEMA GENITO-URINARIO</option>
                         <option value="EMBARAZO, PARTO Y PUERPERIO">EMBARAZO, PARTO Y PUERPERIO</option>
                         <option value="SINT.SIG. Y HALLAZGOS  ANORMALES">SINT.SIG. Y HALLAZGOS  ANORMALES</option>
                         <option value="TRAUMATISMOS Y ENVENENAMIENTOS">TRAUMATISMOS Y ENVENENAMIENTOS</option>
                         <option value="CAUSAS EXTERNAS DE MORBILIDAD Y MORT.">CAUSAS EXTERNAS DE MORBILIDAD Y MORT.</option>
                         <option value="VIOLENCIA FAMILIAR">VIOLENCIA FAMILIAR</option>
                         <option value="OTRAS CAUSAS DE CONSULTA">OTRAS CAUSAS DE CONSULTA</option>
                      </select>
                      <?= form_error('grupo'); ?>
                  </td>
              </tr>
              <tr>
                  <td><label for="enfermedad"><span class="icon-medkit"></span>Enfermedad que padece:</label></td>
                  <td>
                      <select name="enfermedad" id="enfermedad">
                          <option value="<?= $enfermedad ?>" <?= set_select('enfermedad', $enfermedad) ?>><?= $enfermedad ?></option>
                      </select>
                      <?= form_error('enfermedad'); ?>
                  </td>
              </tr>
              <tr>
                  <td><label for="resultado"><span class="icon-certificate"></span>Resultado:</label></td>
                  <td>
                      <select name="resultado" id="resultado">
                          <option value="<?= $resultado ?>" <?= set_select('resultado', $resultado) ?>><?= $resultado ?></option>
                          <option value="Dado de alta" <?= set_select('resultado', 'Dado de alta') ?>>Dado de alta</option>
                          <option value="Hospitalizado" <?= set_select('resultado', 'Hospitalizado') ?>>Hospitalizado</option>
                      </select>
                  </td>
              </tr>
              <tr>
                  <td>
                    <input type="hidden" name="consulta" value="consulta">
                    <input type="hidden" name="id" value="<?= $id; ?>">
                    <input type="hidden" name="id_paciente" value="<?= $id_paciente; ?>">
                    <input type="hidden" name="feocu" value="<?= $feocu; ?>">
                  </td>
                  <td><button><span class="icon-floppy-o"></span>Guardar cambios</button></td>
              </tr>
          </table>
      </form>
      <div id="opciones">
        <a href="<?= base_url() ?>consultas/"><span class="icon-clipboard"></span>Historial de Consultas</a>
        <a href="<?= base_url() ?>consultas/detalles/<?= $id ?>"><span class="icon-wallet"></span>Detalles de la Consulta</a>
      </div>
  </div>
</div>
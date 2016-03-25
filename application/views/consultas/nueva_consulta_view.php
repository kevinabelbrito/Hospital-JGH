<div id="contenido">
  <div id="caja">
    <h1 id="titulo"><span class="icon-user-md"></span>Nuevo registro de consulta</h1>
    <?php if(isset($erroneo)): ?><div id="error" align="center"><?= $erroneo ?></div><?php endif ?>
    <?php if(isset($success)): ?><div id="success"><?= $success ?></div><?php endif ?>
      <fieldset>
        <legend>Datos del Paciente</legend>
      <form action="<?= base_url() ?>pacientes/verificar" id="validar" method="post">
        <table id="formulario">
          <tr>
            <td><label for="cedula">Cedula de Identidad:</label></td>
            <td>
              <select name="nac" id="nac">
                <option value="V" <?= set_select('nac', 'V') ?>>V</option>
                <option value="E" <?= set_select('nac', 'E') ?>>E</option>
              </select>
              <input type="text" name="cedula" id="cedula" maxlength="9" value="<?= set_value('cedula') ?>">
              <?= form_error('cedula'); ?>
            </td>
            <td>
              <input type="hidden" name="validar" value="validar">
              <input type="hidden" name="titulo" = value="Nueva Consulta">
              <input type="hidden" name="main_content" value="consultas/nueva_consulta_view">
              <button>Verificar</button>
            </td>
          </tr>
          <?php if(isset($bien)): ?>
          <tr>
            <td>Nombres y Apellidos:</td>
            <td colspan="2"><?= $nombre ?></td>
          </tr>
          <tr>
            <td>Sexo:</td>
            <td colspan="2"><?= $sexo ?></td>
          </tr>
          <tr>
            <td>Grupo Indigena:</td>
            <td colspan="2"><?= $indigena ?></td>
          </tr>
          <?php endif; ?>
        </table>
      </form>
      <?php if(isset($agregar)): ?>
      <div id="opciones">
        <a href="<?= base_url() ?>pacientes/nuevo?nac=<?= $nac ?>&cedula=<?= $cedula ?>"><span class="icon-plus-circle"></span>Agregar Paciente</a>
      </div>
      <?php endif; ?>
      </fieldset>
      <?php if(isset($bien)): ?>
      <fieldset>
        <legend>Datos de la consulta</legend>
      <form action="<?= base_url() ?>consultas/agregar" id="registrar_enfermo_form" method="post">
          <table id="formulario">
              <tr>
                  <td><label for="grupo"><span class="icon-folder-open-o"></span>Grupo de Enfermedades:</label></td>
                  <td>
                      <select name="grupo" id="grupo">
                         <option value="">-</option>
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
                         <option value="SINT.SIG. Y HALLAZGOS ANORMALES">SINT.SIG. Y HALLAZGOS  ANORMALES</option>
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
                          <option value="">-</option>
                      </select>
                      <?= form_error('enfermedad'); ?>
                  </td>
              </tr>
              <tr>
                  <td><label for="resultado"><span class="icon-certificate"></span>Resultado:</label></td>
                  <td>
                      <select name="resultado" id="resultado">
                          <option value="">-</option>
                          <option value="Dado de alta" <?= set_select('resultado', 'Dado de alta') ?>>Dado de alta</option>
                          <option value="Hospitalizado" <?= set_select('resultado', 'Hospitalizado') ?>>Hospitalizado</option>
                      </select>
                      <?= form_error('resultado'); ?>
                  </td>
              </tr>
              <tr>
                  <td>
                    <input type="hidden" name="consulta" value="consulta">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="hidden" name="nombre" value="<?= $nombre ?>">
                    <input type="hidden" name="sexo" value="<?= $sexo ?>">
                    <input type="hidden" name="indigena" value="<?= $indigena ?>">
                    <input type="hidden" name="titulo" = value="Nueva Consulta">
                    <input type="hidden" name="main_content" value="consultas/nueva_consulta_view">
                  </td>
                  <td><button><span class="icon-floppy-o"></span>Registrar</button></td>
              </tr>
          </table>
      </form>
      </fieldset>
      <?php endif; ?>
  </div>
</div>
<div id="contenido">
  <div id="caja">
    <h1 id="titulo"><span class="icon-profile-male"></span>Editar datos personales del paciente</h1>
    <?php if(isset($erroneo)): ?><div id="error" align="center"><?= $erroneo ?></div><?php endif ?>
    <?php if(isset($success)): ?><div id="success"><?= $success ?></div><?php endif ?>
      <form action="<?= base_url() ?>pacientes/editar/<?= $id ?>" id="registrar_enfermo_form" method="post">
          <table id="formulario">
              <tr>
                  <td><label for="nombre"><span class="icon-profile-male"></span>Nombre Completo:</label></td>
                  <td>
                      <input type="text" name="nombre" id="nombre" maxlength="100" value="<?= set_value('nombre', $nombre) ?>">
                      <?= form_error('nombre'); ?>
                  </td>
              </tr>
              <tr>
                <td><label for="nac"><span class="icon-browser"></span>Cedula de Identidad:</label></td>
                <td>
                  <select name="nac" id="nac">
                    <option value="<?= $nac; ?>" <?= set_select('nac', $nac) ?>><?= $nac; ?></option>
                    <option value="V" <?= set_select('nac', 'V') ?>>V</option>
                    <option value="E" <?= set_select('nac', 'E') ?>>E</option>
                  </select>
                  <input type="text" name="cedula" id="cedula" maxlength="9" value="<?= set_value('cedula', $cedula) ?>">
                  <?= form_error('cedula'); ?>
                </td>
              </tr>
              <tr>
                  <td><label><span class="icon-venus-mars"></span>Sexo:</label></td>
                  <td>
                      <input type="radio" name="sexo" id="f" value="F" <?= set_radio('sexo', 'F'); ?> <?php if($sexo == "F"){ ?>checked<?php } ?>>
                      <label for="f" title="Femenino"><span class="icon-female"></span></label>
                      <input type="radio" name="sexo" id="m" value="M" <?= set_radio('sexo', 'M'); ?> <?php if($sexo == "M"){ ?>checked<?php } ?>>
                      <label for="m" title="Masculino"><span class="icon-male"></span></label>
                      <?= form_error('sexo'); ?>
                  </td>
              </tr>
              <tr>
                  <td><label for="fenac"><span class="icon-calendar2"></span>Fecha de Nacimiento</label></td>
                  <td>
                      <input type="date" name="fenac" id="fenac" value="<?= set_value('fenac', $fenac) ?>">
                      <?= form_error('fenac'); ?>
                  </td>
              </tr>
              <tr>
                  <td><label for="indigena"><span class="icon-certificate"></span>Grupo indigena:</label></td>
                  <td>
                      <select name="indigena" id="indigena">
                          <option value="<?= $indigena; ?>" <?= set_select('indigena', $indigena) ?>><?= $indigena; ?></option>
                          <option value="Ignorado" <?= set_select('indigena', 'Ignorado') ?>>IGNORADO</option>
                          <option value="Baniva" <?= set_select('indigena', 'Baniva') ?>>Baniva</option>
                          <option value="Bare" <?= set_select('indigena', 'Bare') ?>>Bare</option>
                          <option value="Criollo" <?= set_select('indigena', 'Criollo') ?>>Criollo</option>
                          <option value="Curripaco" <?= set_select('indigena', 'Curripaco') ?>>Curripaco</option>
                          <option value="Guarequen" <?= set_select('indigena', 'Guarequen') ?>>Guarequen</option>
                          <option value="Jiwi" <?= set_select('indigena', 'Jiwi') ?>>Jiwi</option>
                          <option value="Maco" <?= set_select('indigena', 'Maco') ?>>Maco</option>
                          <option value="Piapoco" <?= set_select('indigena', 'Piapoco') ?>>Piapoco</option>
                          <option value="Piaroa" <?= set_select('indigena', 'Piaroa') ?>>Piaroa</option>
                          <option value="Puinave" <?= set_select('indigena', 'Puinave') ?>>Puinave</option>
                          <option value="Saliba" <?= set_select('indigena', 'Saliba') ?>>Saliba</option>
                          <option value="Sanema" <?= set_select('indigena', 'Sanema') ?>>Sanema</option>
                          <option value="Yanomami" <?= set_select('indigena', 'Yanomami') ?>>Yanomami</option>
                          <option value="Yekuana" <?= set_select('indigena', 'Yekuana') ?>>Yekuana</option>
                          <option value="Yeral" <?= set_select('indigena', 'Yeral') ?>>Yeral</option>
                      </select>
                      <?= form_error('indigena'); ?>
                  </td>
              </tr>
              <tr>
                  <td><label for="municipio"><span class="icon-map-pin"></span>Municipio:</label></td>
                  <td>
                      <select name="municipio" id="municipio">
                          <option value="<?= $municipio; ?>"><?= $municipio; ?></option>
                          <option value="Alto Orinoco">Alto Orinoco</option>
                          <option value="Atabapo">Atabapo</option>
                          <option value="Atures">Atures</option>
                          <option value="Autana">Autana</option>
                          <option value="Manapiare">Manapiare</option>
                          <option value="Maroa">Maroa</option>
                          <option value="Rio Negro">Rio Negro</option>
                      </select>
                      <?= form_error('municipio'); ?>
                  </td>
              </tr>
              <tr>
                  <td><label for="parroquia"><span class="icon-dial"></span>Parroquia:</label></td>
                  <td>
                      <select name="parroquia" id="parroquia">
                          <option value="<?= $parroquia; ?>"><?= $parroquia; ?></option>
                      </select>
                      <?= form_error('parroquia'); ?>
                  </td>
              </tr>
              <tr>
                  <td>
                    <input type="hidden" name="editar" value="editar">
                    <input type="hidden" name="id" value="<?= $id; ?>">
                  </td>
                  <td><button><span class="icon-floppy-o"></span>Guardar cambios</button></td>
              </tr>
          </table>
      </form>
      <div id="opciones">
          <a href="<?= base_url() ?>pacientes"><span class="icon-clipboard"></span>Lista de Pacientes</a>
          <a href="<?= base_url() ?>pacientes/detalles/<?= $id; ?>"><span class="icon-wallet"></span>Perfil del paciente</a>
      </div>
  </div>
</div>
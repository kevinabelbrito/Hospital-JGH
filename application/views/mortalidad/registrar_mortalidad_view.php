<script src="<?= base_url() ?>assets/js/mortalidad.js"></script>
<div id="contenido">
    <div id="caja">
        <h1 id="titulo"><span class="icon-stethoscope"></span>Nuevo registro de Mortalidad</h1>
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
                      <input type="hidden" name="titulo" = value="Mortalidad">
                      <input type="hidden" name="main_content" value="mortalidad/registrar_mortalidad_view">
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
                  <tr>
                    <td>Nacimiento:</td>
                    <td colspan="2">
                        <?= date("d-m-Y", strtotime($fenac)); ?> (<?= timespan(human_to_unix($edad), time(), 1); ?>)
                    </td>
                  </tr>
                  <tr>
                      <td>Municipio de Residencia:</td>
                      <td colspan="2"><?= $municipio ?></td>
                  </tr>
                  <tr>
                      <td>Parroquia:</td>
                      <td colspan="2"><?= $parroquia ?></td>
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
            <legend>Datos del Fallecimiento</legend>
            <form action="<?= base_url() ?>mortalidad/agregar" id="reg_mort_mat_form" method="post">
            <table id="formulario">
                <tr>
                    <td><label for="tipo">Tipo de mortalidad:</label></td>
                    <td>
                        <?php
                        $dia = date("d", strtotime($fenac));
                        $mes = date("m", strtotime($fenac));
                        $year = date("Y", strtotime($fenac));
                        $fe_neo = date("Y-m-d", mktime(0, 0, 0, $mes, $dia+27, $year, -1));
                        $fe_post = date("Y-m-d", mktime(0, 0, 0, $mes+12, $dia-1, $year, -1));
                        $fe_inf = date("Y-m-d", mktime(0, 0, 0, $mes, $dia-1, $year+5, -1));
                        ?>
                        <?php if($sexo == "F"): ?>
                        <input type="radio" name="tipo" id="materna" value="Materna" <?= set_radio('tipo', 'Materna'); ?>>
                        <label for="materna">Materna</label>
                        <br>
                        <?php endif; ?>
                        <?php if(date("Y-m-d") < $fe_neo) :?>
                        <input type="radio" name="tipo" id="neonatal" value="Neonatal" <?= set_radio('tipo', 'Neonatal'); ?>>
                        <label for="neonatal">Neonatal</label>
                        <br>
                        <?php endif; ?>
                        <?php if(date("Y-m-d") > $fe_neo && date("Y-m-d") < $fe_post) :?>
                        <input type="radio" name="tipo" id="postneonatal" value="Postneonatal" <?= set_radio('tipo', 'Infantil'); ?>>
                        <label for="postneonatal">Postneonatal</label>
                        <br>
                        <?php endif; ?>
                        <?php if(date("Y-m-d") > $fe_post && date("Y-m-d") < $fe_inf) :?>
                        <input type="radio" name="tipo" id="infantil" value="Infantil" <?= set_radio('tipo', 'Infantil'); ?>>
                        <label for="infantil">Infantil</label>
                        <br>
                        <?php endif; ?>
                        <?php if(date("Y-m-d") > $fe_inf) :?>
                        <input type="radio" name="tipo" id="regular" value="Regular" <?= set_radio('tipo', 'Regular'); ?>>
                        <label for="regular">Regular</label>
                        <?php endif; ?>
                        <?= form_error('tipo'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="ocurrencia"><span class="icon-map"></span>Municipio de Ocurrencia:</label></td>
                    <td>
                        <select name="ocurrencia" id="ocurrencia">
                            <option value="">-</option>
                            <option value="Alto Orinoco" <?= set_select('ocurrencia', 'Alto Orinoco') ?>>Alto Orinoco</option>
                            <option value="Atabapo" <?= set_select('ocurrencia', 'Atabapo') ?>>Atabapo</option>
                            <option value="Atures" <?= set_select('ocurrencia', 'Atures') ?>>Atures</option>
                            <option value="Autana" <?= set_select('ocurrencia', 'Autana') ?>>Autana</option>
                            <option value="Manapiare" <?= set_select('ocurrencia', 'Manapiare') ?>>Manapiare</option>
                            <option value="Maroa" <?= set_select('ocurrencia', 'Maroa') ?>>Maroa</option>
                            <option value="Rio Negro" <?= set_select('ocurrencia', 'Rio Negro') ?>>Rio Negro</option>
                        </select>
                        <?= form_error('ocurrencia'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="sitio"><span class="icon-hospital-o"></span>Sitio de Ocurrencia:</label></td>
                    <td>
                        <select name="sitio" id="sitio">
                            <option value="">-</option>
                            <option value="HOSP. JGH" <?= set_select('sitio', 'HOSP. JGH') ?>>HOSP. JGH</option>
                            <option value="Casa" <?= set_select('sitio', 'Casa') ?>>Casa</option>
                            <option value="Vía" <?= set_select('sitio', 'Vía') ?>>Vía</option>
                            <option value="Otro" <?= set_select('sitio', 'Otro') ?>>Otro</option>
                        </select>
                        <?= form_error('sitio'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="caudir"><span class="icon-certificate"></span>Causa directa de muerte:</label></td>
                    <td>
                        <input type="text" name="caudir" id="caudir" maxlength="100" value="<?= set_value('caudir'); ?>">
                        <?= form_error('caudir'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="caubas"><span class="icon-certificate"></span>Causa Básica de muerte:</label></td>
                    <td>
                        <input type="text" name="caubas" id="caubas" maxlength="100" value="<?= set_value('caubas'); ?>">
                        <?= form_error('caubas'); ?>
                    </td>
                </tr>
                <tr id="periodo_maternal">
                    <td><label for="periodo"><span class="icon-calendar2"></span>Periodo de Ocurrencia de la muerte:</label></td>
                    <td>
                        <select name="periodo" id="periodo">
                            <option value="">-</option>
                            <option value="Aborto" <?= set_select('periodo', 'Aborto') ?>>Aborto</option>
                            <option value="Primer Trimestre de Embarazo" <?= set_select('periodo', 'Primer Trimestre de Embarazo') ?>>Primer Trimestre de Embarazo</option>
                            <option value="Segundo Trimestre de Embarazo" <?= set_select('periodo', 'Segundo Trimestre de Embarazo') ?>>Segundo Trimestre de Embarazo</option>
                            <option value="Tercer Trimestre de Embarazo" <?= set_select('periodo', 'Tercer Trimestre de Embarazo') ?>>Tercer Trimestre de Embarazo</option>
                            <option value="Parto" <?= set_select('periodo', 'Parto') ?>>Parto</option>
                            <option value="Postparto" <?= set_select('periodo', 'Postparto') ?>>Postparto</option>
                            <option value="Cesárea" <?= set_select('periodo', 'Cesárea') ?>>Cesárea</option>
                            <option value="Puerperio Inmediato" <?= set_select('periodo', 'Puerperio Inmediato') ?>>Puerperio Inmediato</option>
                            <option value="Puerperio Mediato" <?= set_select('periodo', 'Puerperio Mediato') ?>>Puerperio Mediato</option>
                            <option value="Puerperio Tardío" <?= set_select('periodo', 'Puerperio Tardío') ?>>Puerperio Tardío</option>
                        </select>
                        <?= form_error('periodo'); ?>
                    </td>
                </tr>
                <tr id="condicion_nutri">
                    <td><label for="nutri"><span class="icon-heartbeat"></span>Condición Nutricional:</label></td>
                    <td>
                        <input type="text" name="nutri" id="nutri" maxlength="50" value="<?= set_value('nutri'); ?>">
                        <?= form_error('nutri'); ?>
                    </td>
                </tr>
                <tr id="peso_neonatal">
                    <td><label for="peso"><span class="icon-certificate"></span>Peso al nacer:</label></td>
                    <td>
                        <input type="text" name="peso" id="peso" value="<?= set_value('peso'); ?>">
                        <?= form_error('peso'); ?>
                    </td>
                </tr>
                <tr id="edadgest_mateneo">
                    <td><label for="edadgest"><span class="icon-clock"></span>Edad Gestacional:</label></td>
                    <td>
                        <input type="number" name="edadgest" id="edadgest" maxlength="2" value="<?= set_value('edadgest'); ?>"> Meses
                        <?= form_error('edadgest'); ?>
                    </td>
                </tr>
                <tr id="estancia_inf">
                    <td><label for="estancia"><span class="icon-medkit"></span>Estancia Hopitalaria:</label></td>
                    <td>
                        <input type="text" name="estancia" id="estancia" maxlength="50" value="<?= set_value('estancia'); ?>">
                        <?= form_error('estancia'); ?>
                    </td>
                </tr>
                <tr id="consultas_mateneo">
                    <td><label for="consultas"><span class="icon-user-md"></span>Consultas Control Parental:</label></td>
                    <td>
                        <input type="number" name="consultas" id="consultas" maxlength="2" value="<?= set_value('consultas'); ?>">
                        <?= form_error('consultas'); ?>
                    </td>
                </tr>
                <tr id="ocupacion_maternal">
                    <td><label for="ocupacion"><span class="icon-certificate"></span>Ocupación:</label></td>
                    <td>
                        <input type="text" name="ocupacion" id="ocupacion" maxlength="50" value="<?= set_value('ocupacion'); ?>">
                        <?= form_error('ocupacion'); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="registrar" value="registrar">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="hidden" name="edad" value="<?= $edad ?>">
                        <input type="hidden" name="titulo" = value="Mortalidad">
                        <input type="hidden" name="main_content" value="mortalidad/registrar_mortalidad_view">
                    </td>
                    <td><button><span class="icon-floppy-o"></span>Registrar</button></td>
                </tr>
            </table>
        </form>
        </fieldset>
        <?php endif; ?>
    </div>
    </div>
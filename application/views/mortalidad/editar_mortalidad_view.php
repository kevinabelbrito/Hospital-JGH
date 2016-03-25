<script src="<?= base_url() ?>assets/js/mortalidad.js"></script>
<div id="contenido">
    <div id="caja">
        <h1 id="titulo"><span class="icon-stethoscope"></span>Editar datos del Fallecimiento</h1>
        <?php if(isset($success)): ?><div id="success"><?= $success ?></div><?php endif ?>
        <form action="<?= base_url() ?>mortalidad/modificar" id="reg_mort_mat_form" method="post">
            <table id="formulario">
                <tr>
                  <td><label for="fenac"><span class="icon-calendar2"></span>Fecha de Ingreso</label></td>
                  <td><?= date("d-m-Y H:i a", strtotime($feing)); ?></td>
                </tr>
                <tr>
                    <td><label><span class="icon-browser"></span>Cedula de Identidad:</label></td>
                    <td><?= $nac ?>-<?= $cedula ?></td>
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
                  <td><label for="fenac"><span class="icon-calendar2"></span>Fecha de Nacimiento</label></td>
                  <td><?= date("d-m-Y", strtotime($fenac)); ?></td>
                </tr>
                <tr>
                  <td><label for="municipio"><span class="icon-map-pin"></span>Municipio de Ocurrencia:</label></td>
                  <td><?= $municipio; ?></td>
                </tr>
                <tr>
                    <td><label for="feocu"><span class="icon-calendar2"></span>Fecha de Ocurrencia:</label></td>
                    <td><?= date("d-m-Y H:i a", strtotime($feocu)); ?></td>
                </tr>
                <tr>
                    <td><label for="tipo">Tipo de mortalidad:</label></td>
                    <td>
                        <?php
                        $feocu = date("Y-m-d", strtotime($feocu));
                        $dia = date("d", strtotime($fenac));
                        $mes = date("m", strtotime($fenac));
                        $year = date("Y", strtotime($fenac));
                        $fe_neo = date("Y-m-d", mktime(0, 0, 0, $mes, $dia+27, $year, -1));
                        $fe_post = date("Y-m-d", mktime(0, 0, 0, $mes+12, $dia-1, $year, -1));
                        $fe_inf = date("Y-m-d", mktime(0, 0, 0, $mes, $dia-1, $year+5, -1));
                        ?>
                        <?php if($sexo == "F"): ?>
                        <input type="radio" name="tipo" id="materna" value="Materna" <?= set_radio('tipo', 'Materna'); ?> <?php if($tipo == "Materna"){ ?> checked <?php } ?>>
                        <label for="materna">Materna</label>
                        <br>
                        <?php endif; ?>
                        <?php if($feocu < $fe_neo): ?>
                        <input type="radio" name="tipo" id="neonatal" value="Neonatal" <?= set_radio('tipo', 'Neonatal'); ?> <?php if($tipo == "Neonatal"){ ?> checked <?php } ?>>
                        <label for="neonatal">Neonatal</label>
                        <br>
                        <?php endif; ?>
                        <?php if($feocu > $fe_neo && $feocu < $fe_post): ?>
                        <input type="radio" name="tipo" id="postneonatal" value="Postneonatal" <?= set_radio('tipo', 'Postneonatal'); ?> <?php if($tipo == "Postneonatal"){ ?> checked <?php } ?>>
                        <label for="postneonatal">Postneonatal</label>
                        <br>
                        <?php endif; ?>
                        <?php if($feocu > $fe_post && $feocu < $fe_inf): ?>
                        <input type="radio" name="tipo" id="infantil" value="Infantil" <?= set_radio('tipo', 'Infantil'); ?> <?php if($tipo == "Infantil"){ ?> checked <?php } ?>>
                        <label for="infantil">Infantil</label>
                        <br>
                        <?php endif; ?>
                        <?php if($feocu > $fe_inf): ?>
                        <input type="radio" name="tipo" id="regular" value="Regular" <?= set_radio('tipo', 'Regular'); ?> <?php if($tipo == "Regular"){ ?> checked <?php } ?>>
                        <label for="regular">Regular</label>
                        <?php endif; ?>
                        <?= form_error('tipo'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="ocurrencia"><span class="icon-map"></span>Municipio de Ocurrencia:</label></td>
                    <td>
                        <select name="ocurrencia" id="ocurrencia">
                            <option value="<?= $ocurrencia ?>" <?= set_select('ocurrencia', $ocurrencia) ?>><?= $ocurrencia ?></option>
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
                            <option value="<?= $sitio ?>" <?= set_select('sitio', $sitio) ?>><?= $sitio ?></option>
                            <option value="Hospital" <?= set_select('sitio', 'Hospital') ?>>Hospital</option>
                            <option value="Casa" <?= set_select('sitio', 'Casa') ?>>Casa</option>
                            <option value="Vía" <?= set_select('sitio', 'Vía') ?>>Vía</option>
                        </select>
                        <?= form_error('sitio'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="caudir"><span class="icon-certificate"></span>Causa directa de muerte:</label></td>
                    <td>
                        <input type="text" name="caudir" id="caudir" maxlength="100" value="<?= set_value('caudir', $caudir); ?>">
                        <?= form_error('caudir'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="caubas"><span class="icon-certificate"></span>Causa Básica de muerte:</label></td>
                    <td>
                        <input type="text" name="caubas" id="caubas" maxlength="100" value="<?= set_value('caubas', $caubas); ?>">
                        <?= form_error('caubas'); ?>
                    </td>
                </tr>
                <tr id="periodo_maternal">
                    <td><label for="periodo"><span class="icon-calendar2"></span>Periodo de Ocurrencia de la muerte:</label></td>
                    <td>
                        <select name="periodo" id="periodo">
                            <option value="<?= $periodo ?>" <?= set_select('periodo', $periodo) ?>><?= $periodo ?></option>
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
                        <input type="text" name="nutri" id="nutri" maxlength="50" value="<?= set_value('nutri', $nutri); ?>">
                        <?= form_error('nutri'); ?>
                    </td>
                </tr>
                <tr id="peso_neonatal">
                    <td><label for="peso"><span class="icon-certificate"></span>Peso al nacer:</label></td>
                    <td>
                        <input type="text" name="peso" id="peso" value="<?= set_value('peso', $peso); ?>">
                        <?= form_error('peso'); ?>
                    </td>
                </tr>
                <tr id="edadgest_mateneo">
                    <td><label for="edadgest"><span class="icon-clock"></span>Edad Gestacional:</label></td>
                    <td>
                        <input type="number" name="edadgest" id="edadgest" maxlength="2" value="<?= set_value('edadgest', $edadgest); ?>"> Meses
                        <?= form_error('edadgest'); ?>
                    </td>
                </tr>
                <tr id="estancia_inf">
                    <td><label for="estancia"><span class="icon-medkit"></span>Estancia Hopitalaria:</label></td>
                    <td>
                        <input type="text" name="estancia" id="estancia" maxlength="50" value="<?= set_value('estancia', $estancia); ?>">
                        <?= form_error('estancia'); ?>
                    </td>
                </tr>
                <tr id="consultas_mateneo">
                    <td><label for="consultas"><span class="icon-user-md"></span>Consultas Control Parental:</label></td>
                    <td>
                        <input type="number" name="consultas" id="consultas" maxlength="2" value="<?= set_value('consultas', $consultas); ?>">
                        <?= form_error('consultas'); ?>
                    </td>
                </tr>
                <tr id="ocupacion_maternal">
                    <td><label for="ocupacion"><span class="icon-certificate"></span>Ocupación:</label></td>
                    <td>
                        <input type="text" name="ocupacion" id="ocupacion" maxlength="50" value="<?= set_value('ocupacion', $ocupacion); ?>">
                        <?= form_error('ocupacion'); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="editar" value="editar">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        <input type="hidden" name="id_paciente" value="<?= $id_paciente; ?>">
                        <input type="hidden" name="feocu" value="<?= $feocu; ?>">

                    </td>
                    <td><button><span class="icon-floppy-o"></span>Guardar cambios</button></td>
                </tr>
            </table>
        </form>
        <div id="opciones">
            <a href="<?= base_url() ?>mortalidad/"><span class="icon-clipboard"></span>Historial de Mortalidad</a>
            <a href="<?= base_url() ?>mortalidad/detalles/<?= $id; ?>"><span class="icon-wallet"></span>Detalles del Fallecimiento</a>
        </div>
    </div>
</div>
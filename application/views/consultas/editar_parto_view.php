<div id="contenido">
    <div id="caja">
        <h1 id="titulo"><span class="icon-profile-female"></span>Registro de nuevo parto</h1>
        <?php if(isset($success)): ?><div id="success"><?= $success ?></div><?php endif ?>
        <form action="<?= base_url() ?>partos/modificar" id="reg_parto_form" method="post">
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
                  <td><label for="municipio"><span class="icon-map-pin"></span>Municipio:</label></td>
                  <td><?= $municipio; ?></td>
                </tr>
                <tr>
                  <td><label for="parroquia"><span class="icon-dial"></span>Parroquia:</label></td>
                  <td><?= $parroquia; ?></td>
                </tr>
                <tr>
                    <td><label for="feocu"><span class="icon-calendar2"></span>Fecha de Ocurrencia:</label></td>
                    <td><?= date("d-m-Y H:i a", strtotime($feocu)); ?></td>
                </tr>
                <tr>
                    <td><label><span class="icon-venus-mars"></span>Sexo del bebé:</label></td>
                    <td>
                        <input type="radio" name="sexo_bebe" id="f" value="F" <?= set_radio('sexo_bebe', 'F'); ?> <?php if($sexo_bebe == 'F'){ ?>checked<?php } ?>>
                        <label for="f" title="Femenino"><span class="icon-female"></span></label>
                        <input type="radio" name="sexo_bebe" id="m" value="M" <?= set_radio('sexo_bebe', 'M'); ?> <?php if($sexo_bebe == 'M'){ ?>checked<?php } ?>>
                        <label for="m" title="Masculino"><span class="icon-male"></span></label>
                        <?= form_error('sexo'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="resultado"><span class="icon-certificate"></span>Resultado del parto:</label></td>
                    <td>
                        <select name="resultado" id="resultado">
                            <option value="<?= $resultado ?>" <?= set_select('resultado', $resultado) ?>>Nació <?= $resultado ?></option>
                            <option value="Vivo" <?= set_select('resultado', 'Vivo') ?>>Nació Vivo</option>
                            <option value="Muerto" <?= set_select('resultado', 'Muerto') ?>>Nació Muerto</option>
                        </select>
                        <?= form_error('resultado'); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="actualizar" value="actualizar">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        <input type="hidden" name="id_paciente" value="<?= $id_paciente; ?>">
                        <input type="hidden" name="feocu" value="<?= $feocu; ?>">
                    </td>
                    <td><button><span class="icon-floppy-o"></span>Guardar cambios</button></td>
                </tr>
            </table>
        </form>
        <div id="opciones">
            <a href="<?= base_url() ?>partos/"><span class="icon-clipboard"></span>Historial de Partos</a>
            <a href="<?= base_url() ?>partos/detalles/<?= $id; ?>"><span class="icon-wallet"></span>Detalles del parto</a>
        </div>
    </div>
</div>
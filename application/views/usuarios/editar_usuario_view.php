<div id="contenido">
    <div id="caja">
        <h1 id="titulo"><span class="icon-profile-male"></span>Editar datos del usuario en línea</h1>
        <?php if(isset($success)): ?><div id="success"><?= $success ?></div><?php endif ?>
        <form action="<?= base_url() ?>usuarios/modificar" id="registrar_usuario_form" method="post">
            <table id="formulario">
                <tr>
                    <td><label for="nombre"><span class="icon-certificate"></span>Nombre Completo:</label></td>
                    <td>
                        <input type="text" name="nombre" id="nombre" maxlength="100" value="<?= set_value('nombre', $nombre) ?>">
                        <?= form_error('nombre'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="email"><span class="icon-at"></span>Correo Electrónico:</label></td>
                    <td>
                        <input type="email" name="email" id="email" maxlength="100" value="<?= set_value('email', $email) ?>">
                        <?= form_error('email'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="usuario"><span class="icon-profile-male"></span>Usuario:</label></td>
                    <td>
                        <input type="text" name="usuario" id="usuario" maxlength="50" value="<?= set_value('usuario', $usuario) ?>">
                        <?= form_error('usuario'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="pregunta"><span class="icon-puzzle-piece"></span>Pregunta Secreta:</label></td>
                    <td>
                        <select name="pregunta" id="pregunta">
                            <option value="<?= $pregunta ?>"<?= set_select('pregunta', $pregunta) ?>><?= $pregunta ?></option>
                            <option value="Nombre de tu mascota" <?= set_select('pregunta', 'Nombre de tu mascota') ?>>Nombre de tu mascota</option>
                            <option value="Colegio donde estudio primaria" <?= set_select('pregunta', 'Colegio donde estudio primaria') ?>>Colegio donde estudio primaria</option>
                            <option value="Postre o Comida preferida" <?= set_select('pregunta', 'Postre o Comida preferida') ?>>Postre o Comida preferida</option>
                            <option value="Lugar donde mas le gusta estar" <?= set_select('pregunta', 'Lugar donde mas le gusta estar') ?>>Lugar donde mas le gusta estar</option>
                            <option value="Equipo o aficion favorita" <?= set_select('pregunta', 'Equipo o aficion favorita') ?>>Equipo o aficion favorita</option>
                            <option value="Nombre de tu mejor amigo" <?= set_select('pregunta', 'Nombre de tu mejor amigo') ?>>Nombre de tu mejor amigo</option>
                        </select>
                        <?= form_error('pregunta'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="respuesta"><span class="icon-comment"></span>Respuesta Secreta:</label></td>
                    <td>
                        <input type="text" name="respuesta" id="respuesta" maxlength="100" value="<?= set_value('respuesta', $respuesta) ?>">
                        <?= form_error('respuesta'); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="actualizar" value="actualizar">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                    </td>
                    <td><button id="btn_ajax"><span class="icon-floppy-o"></span>Guardar cambios</button></td>
                </tr>
            </table>
        </form>
        <div id="opciones">
            <a href="<?= base_url() ?>usuarios/"><span class="icon-profile-male"></span>Mi perfil</a>
            <a href="<?= base_url() ?>usuarios/clave"><span class="icon-key-stroke"></span>Cambiar Clave de acceso</a>
        </div>
    </div>
</div>

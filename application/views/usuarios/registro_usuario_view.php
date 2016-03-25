<div id="contenido">
    <div id="caja">
        <h1 id="titulo"><span class="icon-user-plus"></span>Nuevo usuario en el sistema</h1>
        <?php if(isset($erroneo)): ?><div id="error" align="center"><?= $erroneo ?></div><?php endif ?>
        <?php if(isset($success)): ?><div id="success"><?= $success ?></div><?php endif ?>
        <form action="<?= base_url() ?>usuarios/agregar" id="registrar_usuario_form" method="post">
            <table id="formulario">
                <tr>
                    <td><label for="nombre"><span class="icon-certificate"></span>Nombre Completo:</label></td>
                    <td>
                        <input type="text" name="nombre" id="nombre" maxlength="100" value="<?= set_value('nombre') ?>">
                        <?= form_error('nombre'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="email"><span class="icon-at"></span>Correo Electrónico:</label></td>
                    <td>
                        <input type="email" name="email" id="email" maxlength="100" value="<?= set_value('email') ?>">
                        <?= form_error('email'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="tipo"><span class="icon-user-md"></span>Tipo de Usuario:</label></td>
                    <td>
                        <select name="tipo" id="tipo">
                            <option value="">-</option>
                            <option value="Administrador" <?= set_select('tipo', 'Administrador') ?>>Administrador</option>
                            <option value="Usuario" <?= set_select('tipo', 'Usuario') ?>>Usuario</option>
                        </select>
                        <?= form_error('tipo') ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="usuario"><span class="icon-profile-male"></span>Usuario:</label></td>
                    <td>
                        <input type="text" name="usuario" id="usuario" maxlength="50" value="<?= set_value('usuario') ?>">
                        <?= form_error('usuario'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="clave"><span class="icon-key"></span>Clave de Acceso:</label></td>
                    <td>
                        <input type="password" name="clave" id="clave" maxlength="12">
                        <?= form_error('clave'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="conf"><span class="icon-certificate"></span>Confirmar Clave:</label></td>
                    <td>
                        <input type="password" name="conf" id="conf">
                        <?= form_error('conf'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="pregunta"><span class="icon-puzzle-piece"></span>Pregunta Secreta:</label></td>
                    <td>
                        <select name="pregunta" id="pregunta">
                            <option value="">-</option>
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
                        <input type="text" name="respuesta" id="respuesta" maxlength="100" value="<?= set_value('respuesta') ?>">
                        <?= form_error('respuesta'); ?>
                    </td>
                </tr>
                <tr>
                    <td><input type="hidden" name="registrar" value="registrar"></td>
                    <td><button id="btn_ajax"><span class="icon-floppy-o"></span>Registrar</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>

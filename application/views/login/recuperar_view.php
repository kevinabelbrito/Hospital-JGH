<h1 id="titulo"><span class="icon-key-stroke"></span>Recuperación de Usuario y Clave</h1>
<?php if(isset($erroneo)): ?><div id="error" align="center"><?= $erroneo ?></div><?php endif ?>
<?php if(isset($success)): ?><div id="success"><?= $success ?></div><?php endif ?>
    <form action="<?= base_url() ?>login/recuperar" id="recuperar_form" method="post">
        <table id="formulario">
            <tr>
                <td><label for="email"><span class="icon-envelope2"></span>Correo Electrónico:</label></td>
                <td>
                    <input type="email" name="email" id="email" maxlength="100" value="<?= set_value('email') ?>">
                    <?= form_error('email'); ?>
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
                <td><input type="hidden" name="recuperar" value="recuperar"></td>
                <td><button><span class="icon-check-alt"></span>Verificar Datos</button></td>
            </tr>
        </table>
    </form>
    <div id="opciones">
        <a href="<?= base_url(); ?>"><span class="icon-group"></span>¿Ya se encuentra registrado? Ingrese al sistema</a>
    </div>
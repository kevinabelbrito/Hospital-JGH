<h1 id="titulo"><span class="icon-ambulance"></span>Hospital Jose Gregorio Hernandez</h1>
<?php if(isset($erroneo)): ?><div id="error" align="center"><?= $erroneo ?></div><?php endif ?>
<?php if(isset($success)): ?><div id="success"><?= $success ?></div><?php endif ?>
    <form action="<?= base_url() ?>login/logear" id="login_form" method="post">
        <table id="formulario">
            <tr>
                <td><label for="usuario"><span class="icon-profile-male"></span>Usuario:</label></td>
                <td>
                    <input type="text" name="usuario" id="usuario" maxlength="50">
                    <?= form_error('usuario'); ?>
                </td>
            </tr>
            <tr>
                <td><label for="clave"><span class="icon-key-stroke"></span>Clave:</label></td>
                <td>
                    <input type="password" name="clave" id="clave" maxlength="12">
                    <?= form_error('clave'); ?>
                </td>
            </tr>
            <tr>
                <td><input type="hidden" name="login" value="login"></td>
                <td><button id="boton"><span class="icon-check-alt"></span>Ingresar</button></td>
            </tr>
        </table>
    </form>
    <div id="opciones">
        <a href="<?= base_url() ?>login/recuperar_clave"><span class="icon-key2"></span>¿Olvidó su Clave?</a>
    </div>
<div id="contenido">
    <div id="caja">
        <h1 id="titulo"><span class="icon-key"></span>Cambiar clave de acceso</h1>
        <?php if(isset($erroneo)): ?><div id="error" align="center"><?= $erroneo ?></div><?php endif ?>
        <?php if(isset($success)): ?><div id="success"><?= $success ?></div><?php endif ?>
        <form action="<?= base_url() ?>usuarios/cambio_clave" id="cambio_clave_form" method="post">
            <table id="formulario">
                <tr>
                    <td><label for="clave"><span class="icon-certificate"></span>Clave actual:</label></td>
                    <td>
                        <input type="password" name="clave" id="clave" maxlength="12">
                        <?= form_error('clave') ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="nueva"><span class="icon-certificate"></span>Clave nueva:</label></td>
                    <td>
                        <input type="password" name="nueva" id="nueva" maxlength="12">
                        <?= form_error('nueva') ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="conf"><span class="icon-certificate"></span>Confirmar clave:</label></td>
                    <td>
                        <input type="password" name="conf" id="conf" maxlength="12">
                        <?= form_error('conf') ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="cambiar" value="cambiar">
                        <input type="hidden" name="id" value="<?= $this->session->userdata('id'); ?>">
                    </td>
                    <td><button><span class="icon-check-alt"></span>Cambiar Clave</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>
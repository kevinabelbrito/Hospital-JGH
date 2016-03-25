<div id="contenido">
    <div id="caja">
        <h1 id="titulo"><span class="icon-profile-female"></span>Registro de nuevo parto</h1>
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
              <input type="hidden" name="titulo" = value="Nuevo Parto">
              <input type="hidden" name="main_content" value="consultas/nuevo_parto_view">
              <input type="hidden" name="parto" value="parto">
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
        <legend>Datos del parto</legend>
        <form action="<?= base_url() ?>partos/agregar" id="reg_parto_form" method="post">
            <table id="formulario">
                <tr>
                    <td><label><span class="icon-venus-mars"></span>Sexo del bebé:</label></td>
                    <td>
                        <input type="radio" name="sexo_bebe" id="f" value="F" <?= set_radio('sexo_bebe', 'F'); ?>>
                        <label for="f" title="Femenino"><span class="icon-female"></span></label>
                        <input type="radio" name="sexo_bebe" id="m" value="M" <?= set_radio('sexo_bebe', 'M'); ?>>
                        <label for="m" title="Masculino"><span class="icon-male"></span></label>
                        <?= form_error('sexo_bebe'); ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="resultado"><span class="icon-certificate"></span>Resultado del parto:</label></td>
                    <td>
                        <select name="resultado" id="resultado">
                            <option value="">-</option>
                            <option value="Vivo" <?= set_select('resultado', 'Vivo') ?>>Nació Vivo</option>
                            <option value="Muerto" <?= set_select('resultado', 'Muerto') ?>>Nació Muerto</option>
                        </select>
                        <?= form_error('resultado'); ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="registrar" value="registrar">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="hidden" name="nombre" value="<?= $nombre ?>">
                        <input type="hidden" name="sexo" value="<?= $sexo ?>">
                        <input type="hidden" name="indigena" value="<?= $indigena ?>">
                        <input type="hidden" name="titulo" = value="Nuevo Parto">
                        <input type="hidden" name="main_content" value="consultas/nuevo_parto_view">
                    </td>
                    <td><button><span class="icon-floppy-o"></span>Registrar</button></td>
                </tr>
            </table>
        </form>
        </fieldset>
        <?php endif; ?>
    </div>
</div>
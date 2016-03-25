<script>
    $(function(){
        function verificar_elementos()
        {
            if ($("#campo").val() == "cedula")
            {
                $("#nac").attr('name', 'nac').show();
                $("#cedula").attr('name', 'cedula').show();
                $("#nombre").removeAttr('name').hide();
                $("#indigena").removeAttr('name').hide();
            }
            else if($("#campo").val() == "nombre")
            {
                $("#nac").removeAttr('name').hide();
                $("#cedula").removeAttr('name').hide();
                $("#nombre").attr('name', 'search').show();
                $("#indigena").removeAttr('name').hide();
            }
            else if($("#campo").val() == "indigena")
            {
                $("#nac").removeAttr('name').hide();
                $("#cedula").removeAttr('name').hide();
                $("#nombre").removeAttr('name').hide();
                $("#indigena").attr('name', 'search').show();
            }
            else
            {
                $("#nac").hide();
                $("#cedula").hide();
                $("#nombre").hide();
                $("#indigena").hide();
            }
        }
        verificar_elementos();
        $("#campo").change(function()
        {
            verificar_elementos();
        });
    })
</script>
<h1 id="titulo"><span class="icon-profile-male"></span>Pacientes Registrados en el sistema</h1>
<?php if(isset($erroneo)): ?><div id="error" align="center"><?= $erroneo ?></div><?php endif ?>
    <form action="<?= base_url() ?>pacientes/buscar" id="busqueda" method="post">
        <table id="formulario">
            <tr>
                <td><label for="campo"><span class="icon-search"></span>Busqueda por:</label></td>
                <td>
                    <select name="campo" id="campo">
                        <option value="">-</option>
                        <option value="cedula" <?= set_select('campo', 'cedula') ?>>Cedula de Identidad</option>
                        <option value="nombre" <?= set_select('campo', 'nombre') ?>>Nombre</option>
                        <option value="indigena" <?= set_select('campo', 'indigena') ?>>Grupo Indigena</option>
                    </select>
                    <?= form_error('campo') ?>
                </td>
                <td>
                    <select id="nac">
                        <option value="V" <?= set_select('nac', 'V') ?>>V</option>
                        <option value="E" <?= set_select('nac', 'E') ?>>E</option>
                    </select>
                    <input type="text" id="cedula" maxlength="9" value="<?= set_value('cedula'); ?>">
                    <?= form_error('cedula') ?>
                    <select id="indigena">
                        <option value="">-</option>
                        <option value="Ignorado" <?= set_select('search', 'Ignorado') ?>>IGNORADO</option>
                        <option value="Baniva" <?= set_select('search', 'Baniva') ?>>Baniva</option>
                        <option value="Bare" <?= set_select('search', 'Bare') ?>>Bare</option>
                        <option value="Criollo" <?= set_select('search', 'Criollo') ?>>Criollo</option>
                        <option value="Curripaco" <?= set_select('search', 'Curripaco') ?>>Curripaco</option>
                        <option value="Guarequen" <?= set_select('search', 'Guarequen') ?>>Guarequen</option>
                        <option value="Jiwi" <?= set_select('search', 'Jiwi') ?>>Jiwi</option>
                        <option value="Maco" <?= set_select('search', 'Maco') ?>>Maco</option>
                        <option value="Piapoco" <?= set_select('search', 'Piapoco') ?>>Piapoco</option>
                        <option value="Piaroa" <?= set_select('search', 'Piaroa') ?>>Piaroa</option>
                        <option value="Puinave" <?= set_select('search', 'Puinave') ?>>Puinave</option>
                        <option value="Saliba" <?= set_select('search', 'Saliba') ?>>Saliba</option>
                        <option value="Sanema" <?= set_select('search', 'Sanema') ?>>Sanema</option>
                        <option value="Yanomami" <?= set_select('search', 'Yanomami') ?>>Yanomami</option>
                        <option value="Yekuana" <?= set_select('search', 'Yekuana') ?>>Yekuana</option>
                        <option value="Yeral" <?= set_select('search', 'Yeral') ?>>Yeral</option>
                    </select>
                    <input type="text" id="nombre" maxlength="100" value="<?= set_value('search'); ?>">
                    <?= form_error('search') ?>
                </td>
                <td>
                    <input type="hidden" name="busqueda" value="busqueda">
                    <button><span class="icon-magnifying-glass"></span>Buscar</button>
                </td>
            </tr>
        </table>
    </form>
    <?php if ($num_pacientes > 0){?>
    <table id="lista">
        <tr>
            <td><b>Cedula de Identidad</b></td>
            <td><b>Nombre Completo</b></td>
            <td><b>Sexo</b></td>
            <td><b>Grupo Indigena</b></td>
            <td><b>Fecha de Ingreso</b></td>
            <td></td>
        </tr>
        <?php foreach ($pacientes as $pct):?>
        <tr>
            <td><?= $pct['nac']; ?>-<?= $pct['cedula']; ?></td>
            <td><?= $pct['nombre']; ?></td>
            <td><?= $pct['sexo']; ?></td>
            <td><?= $pct['indigena']; ?></td>
            <td><?= date("d-m-Y h:i a", strtotime($pct['feing'])); ?></td>
            
            <td>
                <a href="<?= base_url() ?>pacientes/detalles/<?= $pct['id']; ?>" title="Detalles"><span class="icon-wallet"></span></a>
                <a href="<?= base_url() ?>pacientes/editar/<?= $pct['id']; ?>" title="Editar"><span class="icon-pencil"></span></a>
                <?php if($this->session->userdata('tipo') == "Administrador"): ?>
                <a href="<?= base_url() ?>pacientes/borrar/<?= $pct['id']; ?>" title="Borrar"><span class="icon-x"></span></a>
                <?php endif ?>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    <?= $pagination; ?>
    <?php
    }
    else
    {
    ?>
    <table>
        <tr>
            <td>
                <h2>No hay registros en la Base de Datos</h2>
            </td>
        </tr>
    </table>
    <?php } ?>
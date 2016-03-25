<script src="<?= base_url() ?>assets/js/busqueda.js"></script>
<h1 id="titulo"><span class="icon-user-md"></span>Historial de Consultas</h1>
<form action="<?= base_url() ?>consultas/buscar" id="busqueda" method="post">
    <table id="formulario">
        <tr>
            <td><label for="campo"><span class="icon-search"></span>Busqueda por:</label></td>
            <td>
                <select name="campo" id="campo">
                    <option value="">-</option>
                    <option value="cedula" <?= set_select('campo', 'cedula') ?>>Cedula de Identidad</option>
                    <option value="nombre" <?= set_select('campo', 'nombre') ?>>Nombre</option>
                    <option value="indigena" <?= set_select('campo', 'indigena') ?>>Grupo Indigena</option>
                    <option value="municipio" <?= set_select('campo', 'municipio') ?>>Municipio</option>
                    <option value="sexo" <?= set_select('campo', 'sexo') ?>>Sexo</option>
                </select>
                <?= form_error('campo') ?>
            </td>
            <td>
                <select name="nac" id="nac">
                    <option value="V" <?= set_select('nac', 'V') ?>>V</option>
                    <option value="E" <?= set_select('nac', 'E') ?>>E</option>
                </select>
                <input type="text" name="cedula" id="cedula" maxlength="9" value="<?= set_value('cedula') ?>">
                <?= form_error('cedula') ?>
                <input type="text" id="nombre" maxlength="100" value="<?= set_value('search') ?>">
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
                <select id="municipio">
                    <option value="">-</option>
                    <option value="Alto Orinoco" <?= set_select('search', 'Alto Orinoco') ?>>Alto Orinoco</option>
                    <option value="Atabapo" <?= set_select('search', 'Atabapo') ?>>Atabapo</option>
                    <option value="Atures" <?= set_select('search', 'Atures') ?>>Atures</option>
                    <option value="Autana" <?= set_select('search', 'Autana') ?>>Autana</option>
                    <option value="Manapiare" <?= set_select('search', 'Manapiare') ?>>Manapiare</option>
                    <option value="Maroa" <?= set_select('search', 'Maroa') ?>>Maroa</option>
                    <option value="Rio Negro" <?= set_select('search', 'Rio Negro') ?>>Rio Negro</option>
                </select>
                <select id="sexo">
                    <option value="">-</option>
                    <option value="F" <?= set_select('search', 'F') ?>>F</option>
                    <option value="M" <?= set_select('search', 'M') ?>>M</option>
                </select>
                <?= form_error('search') ?>
            </td>
            <td>
                <input type="hidden" name="busqueda" value="busqueda">
                <button><span class="icon-magnifying-glass"></span>Buscar</button>
            </td>
        </tr>
    </table>
</form>
<?php if ($num_consultas > 0){?>
<table id="lista">
    <tr>
        <td><b>Nombre Completo</b></td>
        <td><b>Grupo Indigena</b></td>
        <td><b>Fecha de Consulta</b></td>
        <td><b>Enfermedad</b></td>
        <td></td>
    </tr>
    <?php foreach ($consultas as $consulta):?>
    <tr>
        <td><?= $consulta['nombre']; ?></td>
        <td><?= $consulta['indigena']; ?></td>
        <td><?= date("d-m-Y h:i a", strtotime($consulta['feocu'])); ?></td>
        <td><?= $consulta['enfermedad']; ?></td>
        <td>
            <a href="<?= base_url() ?>consultas/detalles/<?= $consulta['id']; ?>" title="Detalles"><span class="icon-wallet"></span></a>
            <a href="<?= base_url() ?>consultas/editar/<?= $consulta['id']; ?>" title="Editar"><span class="icon-pencil"></span></a>
            <?php if($this->session->userdata('tipo') == "Administrador"): ?>
            <a href="<?= base_url() ?>consultas/borrar/<?= $consulta['id']; ?>" title="Borrar"><span class="icon-x"></span></a>
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
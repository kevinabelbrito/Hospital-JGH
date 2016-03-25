<div id="contenido">
    <div id="caja">
        <h1 id="titulo"><span class="icon-profile-male"></span>Datos Personales del paciente</h1>
        <table id="formulario">
            <tr>
                <td><label><span class="icon-pencil"></span>Registrado por:</label></td>
                <td><?= $nombre_usuario ?></td>
            </tr>
            <tr>
                <td><label for="nombre"><span class="icon-profile-male"></span>Nombre Completo:</label></td>
                <td><?= $nombre; ?></td>
            </tr>
            <tr>
                <td><label for="cedula"><span class="icon-browser"></span>Cedula de Identidad:</label></td>
                <td><?= $nac; ?>-<?= $cedula; ?></td>
            </tr>
            <tr>
                <td><label><span class="icon-venus-mars"></span>Sexo:</label></td>
                <td><?= $sexo; ?></td>
            </tr>
            <tr>
                <td><label for="fenac"><label for="feing"><span class="icon-calendar2"></span>Fecha de Nacimiento:</label></td>
                <td><?= date("d/m/Y", strtotime($fenac)); ?></td>
            </tr>
            <tr>
                <td><label for="indigena"><span class="icon-certificate"></span>Grupo Indigena:</label></td>
                <td><?= $indigena; ?></td>
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
                <td><label for="feing"><span class="icon-calendar2"></span>Fecha de Ingreso:</label></td>
                <td><?= date("d/m/Y h:i a", strtotime($feing)); ?></td>
            </tr>
        </table>
        <div id="opciones">
            <a href="<?= base_url() ?>pacientes/"><span class="icon-clipboard"></span>Pacientes registrados</a>
            <a href="<?= base_url() ?>pacientes/editar/<?= $id; ?>"><span class="icon-pencil"></span>Editar datos del paciente</a>
        </div>
    </div>
</div>
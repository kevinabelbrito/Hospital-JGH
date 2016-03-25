<div id="contenido">
    <div id="caja">
        <h1 id="titulo"><span class="icon-profile-female"></span>Detalles del parto</h1>
        <table id="formulario">
            <tr>
              <td><label for="fenac"><span class="icon-calendar2"></span>Fecha de Ingreso</label></td>
              <td><?= date("d-m-Y h:i a", strtotime($feing)); ?></td>
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
              <td><label><span class="icon-pencil"></span>Registrado por:</label></td>
              <td><?= $nombre_usuario ?></td>
            </tr>
            <tr>
                <td><label for="feocu"><span class="icon-calendar2"></span>Fecha de Ocurrencia:</label></td>
                <td><?= date("d-m-Y h:i a", strtotime($feocu)); ?></td>
            </tr>
            <tr>
                <td><label><span class="icon-venus-mars"></span>Sexo del bebé:</label></td>
                <td><?= $sexo_bebe; ?></td>
            </tr>
            <tr>
                <td><label for="resultado"><span class="icon-certificate"></span>Resultado del parto:</label></td>
                <td>Nació <?= $resultado; ?></td>
            </tr>
        </table>
        <div id="opciones">
            <a href="<?= base_url() ?>partos/"><span class="icon-clipboard"></span>Historial de Partos</a>
            <a href="<?= base_url() ?>partos/editar/<?= $id; ?>"><span class="icon-pencil"></span>Editar datos del parto</a>
        </div>
    </div>
</div>
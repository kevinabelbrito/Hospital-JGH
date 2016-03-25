<div id="contenido">
    <div id="caja">
        <h1 id="titulo"><span class="icon-stethoscope"></span>Detalles del Fallecimiento</h1>
        <table id="formulario">
            <tr>
              <td><label><span class="icon-pencil"></span>Registrado por:</label></td>
              <td><?= $nombre_usuario ?></td>
            </tr>
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
              <td><label for="municipio"><span class="icon-map-pin"></span>Municipio de Residencia:</label></td>
              <td><?= $municipio; ?></td>
            </tr>
            <tr>
                <td><label for="ocurrencia"><span class="icon-map"></span>Municipio de Ocurrencia:</label></td>
                <td><?= $ocurrencia; ?></td>
            </tr>
            <tr>
                <td><label for="sitio"><span class="icon-hospital-o"></span>Sitio de Ocurrencia:</label></td>
                <td><?= $sitio; ?></td>
            </tr>
            <tr>
                <td><label for="feocu"><span class="icon-calendar2"></span>Fecha de Ocurrencia:</label></td>
                <td><?= date("d-m-Y h:i a", strtotime($feocu)); ?></td>
            </tr>
            <tr>
                <td><label for="caudir"><span class="icon-certificate"></span>Causa directa de muerte:</label></td>
                <td><?= $caudir; ?></td>
            </tr>
            <tr>
                <td><label for="caubas"><span class="icon-certificate"></span>Causa Básica de muerte:</label></td>
                <td><?= $caubas; ?></td>
            </tr>
            <?php if($periodo != "N/A"): ?>
            <tr>
                <td><label for="periodo"><span class="icon-calendar2"></span>Periodo de Ocurrencia de la muerte:</label></td>
                <td><?= $periodo; ?></td>
            </tr>
            <?php endif; ?>
            <?php if($nutri != "N/A"): ?>
            <tr>
                <td><label for="nutri"><span class="icon-heartbeat"></span>Condición Nutricional:</label></td>
                <td><?= $nutri; ?></td>
            </tr>
            <?php endif; ?>
            <?php if($peso > 0): ?>
            <tr>
                <td><label for="peso"><span class="icon-certificate"></span>Peso al nacer:</label></td>
                <td><?= round($peso, 2); ?> KG</td>
            </tr>
            <?php endif; ?>
            <?php if($edadgest > 0): ?>
            <tr>
                <td><label for="edadgest"><span class="icon-clock"></span>Edad Gestacional:</label></td>
                <td><?= $edadgest; ?></td>
            </tr>
            <?php endif; ?>
            <tr>
                <td><label for="indigena"><span class="icon-certificate"></span>Grupo Indigena:</label></td>
                <td><?= $indigena; ?></td>
            </tr>
            <?php if($estancia != "N/A"): ?>
            <tr>
                <td><label for="estancia"><span class="icon-medkit"></span>Estancia Hopitalaria:</label></td>
                <td><?= $estancia; ?></td>
            </tr>
            <?php endif; ?>
            <?php if($consultas > 0): ?>
            <tr>
                <td><label for="consultas"><span class="icon-user-md"></span>Consultas Control Parental:</label></td>
                <td><?= $consultas; ?></td>
            </tr>
            <?php endif; ?>
            <?php if($ocupacion != "N/A"): ?>
            <tr>
                <td><label for="ocupacion"><span class="icon-certificate"></span>Ocupación:</label></td>
                <td><?= $ocupacion; ?></td>
            </tr>
            <?php endif; ?>
        </table>
        <div id="opciones">
            <a href="<?= base_url() ?>mortalidad/"><span class="icon-clipboard"></span>Historial de Mortalidad</a>
            <a href="<?= base_url() ?>mortalidad/editar/<?= $id; ?>"><span class="icon-pencil"></span>Editar datos del Fallecimiento</a>
        </div>
    </div>
</div>
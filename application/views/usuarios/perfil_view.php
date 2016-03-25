<div id="contenido">
    <div id="caja">
        <h1 id="titulo"><span class="icon-male"></span>Datos del Usuario en línea</h1>
        <table id="perfil">
            <tr>
                <td><strong><span class="icon-certificate"></span>Nombre Completo:</strong></td>
                <td><?= $this->session->userdata('nombre'); ?></td>
            </tr>
            <tr>
                <td><strong><span class="icon-envelope2"></span>Correo electrónico:</strong></td>
                <td><?= $this->session->userdata('email'); ?></td>
            </tr>
            <tr>
                <td><strong><span class="icon-profile-male"></span>Nombre de Usuario:</strong></td>
                <td><?= $this->session->userdata('usuario'); ?></td>
            </tr>
        </table>
        <div id="opciones">
            <a href="<?= base_url() ?>usuarios/editar/<?= $this->session->userdata('id'); ?>"><span class="icon-pencil"></span>Modificar mis datos</a>
            <a href="<?= base_url() ?>usuarios/clave"><span class="icon-key-stroke"></span>Cambio de Clave</a>
        </div>
    </div>
</div>
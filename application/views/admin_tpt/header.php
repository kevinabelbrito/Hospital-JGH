<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo ?></title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/menu.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/pagination.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/icomoon/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Maven+Pro:400,700' rel='stylesheet' type='text/css'>
    <link rel="shorcut icon" href="<?= base_url() ?>assets/img/logo.ico">
    <script src="<?= base_url() ?>assets/js/jquery-1.11.3.min.js"></script>
    <script src="<?= base_url() ?>assets/js/localidad.js"></script>
    <script src="<?= base_url() ?>assets/js/enfermedades.js"></script>
</head>
<body>
    <header>
        <img class="logo" src="<?= base_url() ?>assets/img/logo.png">
        <img src="<?= base_url() ?>assets/img/logo_gob.png" class="gob">
        <div id="datauser">
            <strong>Usuario activo:</strong> <?= $this->session->userdata('usuario'); ?>
            <br>
            <strong><?= mdate("%d-%m-%Y %h:%i %a", time()); ?></strong>
            <br>
            <div id="button">
                <a href="<?= base_url() ?>usuarios" title="Mi Perfil"><span class="icon-users"></span></a>
                <a href="<?= base_url() ?>usuarios/clave" title="Cambio de Clave"><span class="icon-key"></span></a>
                <a href="<?= base_url() ?>usuarios/logout" title="Cerrar Sesión"><span class="icon-times-circle"></span></a>
            </div>
        </div>
        <strong id="departamento">Departamento de Epidemiología</strong>
    </header>
    <!--MENU PRINCIPAL-->
    <ul class="nav">
        <li>
            <a href="#"><span class="icon-home"></span>Usuario</a>
            <ul>
                <li><a href="<?= base_url() ?>usuarios"><span class="icon-male"></span>Mi Perfil</a></li>
                <li><a href="<?= base_url() ?>usuarios/clave"><span class="icon-key"></span>Cambio de Clave</a></li>
                <?php if ($this->session->userdata('tipo') == "Administrador"): ?>
                <li>
                    <a href="#"><span class="icon-users"></span>Usuarios del Sistema</a>
                    <ul>
                        <li><a href="<?= base_url() ?>usuarios/agregar"><span class="icon-user-plus"></span>Agregar nuevo usuario</a></li>
                        <li><a href="<?= base_url() ?>usuarios/usuarios_registrados"><span class="icon-clipboard"></span>Usuarios registrados</a></li>
                    </ul>
                </li>
                <?php endif ?>
                <li><a href="<?= base_url() ?>usuarios/logout"><span class="icon-x"></span>Salir</a></li>
            </ul>
        </li>
        <li>
            <a href=""><span class="icon-info-circle"></span>Acerca del Hospital</a>
            <ul>
                <li><a href="<?= base_url() ?>informacion/antecedentes"><span class="icon-clock"></span>Antecedentes</a></li>
                <li><a href="<?= base_url() ?>informacion/ubicacion"><span class="icon-map"></span>Ubicación</a></li>
                <li><a href="<?= base_url() ?>informacion/mision_vision"><span class="icon-flag"></span>Misión y Visión</a></li>
                <li><a href="<?= base_url() ?>informacion/clasificacion"><span class="icon-stethoscope"></span>Clasificación</a></li>
                <li>
                    <a href="<?= base_url() ?>informacion/departamentos"><span class="icon-puzzle"></span>Departamentos y Servicios</a>
                    <ul>
                        <li><a href="<?= base_url() ?>informacion/organigrama"><span class="icon-code-fork"></span>Organigrama estructural</a></li>
                        <li><a href="<?= base_url() ?>informacion/epidemiologia"><span class="icon-hospital-o"></span>Epidemiología Hospitalaria</a></li>
                        <li><a href="<?= base_url() ?>informacion/rrhh"><span class="icon-globe"></span>Recursos Humanos</a></li>
                        <li><a href="<?= base_url() ?>informacion/enfermeria"><span class="icon-medkit"></span>Enfermería</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href=""><span class="icon-profile-male"></span>Pacientes</a>
            <ul>
                <li><a href="<?= base_url() ?>pacientes/nuevo"><span class="icon-plus-circle"></span>Nuevo Registro</a></li>
                <li><a href="<?= base_url() ?>pacientes/"><span class="icon-book-open"></span>Lista de Pacientes</a></li>
                <li>
                    <a href="#"><span class="icon-user-md"></span>Consultas</a>
                    <ul>
                        <li><a href="<?= base_url() ?>consultas/nueva"><span class="icon-plus"></span>Nueva consulta</a></li>
                        <li><a href="<?= base_url() ?>consultas/"><span class="icon-clipboard"></span>Historial de consultas</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="icon-profile-female"></span>Partos</a>
                    <ul>
                        <li><a href="<?= base_url() ?>partos/nuevo"><span class="icon-plus"></span>Nuevo parto</a></li>
                        <li><a href="<?= base_url() ?>partos/"><span class="icon-clipboard"></span>Historial de partos</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#"><span class="icon-ambulance"></span>Mortalidad</a>
            <ul>
                <li><a href="<?= base_url() ?>mortalidad/nueva"><span class="icon-plus"></span></span>Nuevo Registro</a></li>
                <li><a href="<?= base_url() ?>mortalidad/"><span class="icon-clipboard"></span>Historial de Mortalidad</a></li>
            </ul>
        </li>
        <li><a href="<?= base_url() ?>reportes"><span class="icon-documents"></span>Reportes</a></li>
        <li><a href="<?= base_url() ?>estadisticas"><span class="icon-piechart"></span>Estadisticas</a></li>
    </ul>
    <!--FIN MENU-->
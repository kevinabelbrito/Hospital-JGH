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
    <script src="<?= base_url() ?>assets/highcharts/js/highcharts.js"></script>
    <script src="<?= base_url() ?>assets/highcharts/js/modules/exporting.js"></script>
</head>
<body>
    <header>
        <img class="logo" src="<?= base_url() ?>assets/img/logo.png">
        <img src="<?= base_url() ?>assets/img/logo_gob.png" class="gob">
        <div id="datauser">
            <strong>Usuario activo:</strong> <?= $this->session->userdata('usuario'); ?>
            <br>
            <strong><?= mdate("%d - %m - %Y %h:%i %a", time()); ?></strong>
            <br>
            <div id="button">
                <a href="<?= base_url() ?>usuarios" title="Mi Perfil"><span class="icon-users"></span></a>
                <a href="<?= base_url() ?>usuarios/clave" title="Cambio de Clave"><span class="icon-key"></span></a>
                <a href="<?= base_url() ?>usuarios/logout" title="Cerrar Sesión"><span class="icon-times-circle"></span></a>
            </div>
        </div>
        <strong id="departamento">Departamento de Epidemiología</strong>
    </header>
    <hr id="linea">
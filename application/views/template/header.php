<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo ?></title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/fonts/icomoon/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Maven+Pro:400,700' rel='stylesheet' type='text/css'>
    <link rel="shorcut icon" href="<?= base_url() ?>assets/img/logo.ico">
    <script src="<?= base_url() ?>assets/js/jquery-1.11.3.min.js"></script>
</head>
<body>
   <header>
        <img class="logo" src="<?= base_url() ?>assets/img/logo.png">
        <img src="<?= base_url() ?>assets/img/logo_gob.png" class="gob">
        <div id="datauser">
            <strong><?= mdate("%d - %m - %Y %h:%i %a", time()); ?></strong>
        </div>
        <strong id="departamento">Departamento de Epidemiología</strong>
    </header>
    <hr id="linea">
    <div id="contenido">
    <div id="caja">
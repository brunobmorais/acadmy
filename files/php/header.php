<!doctype html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <meta name="language" content="pt-br">
    <meta name="theme-color" content="<?=$variavel->_CORNAVEGADOR?>">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="keywords" content="Sistema">
    <meta name="author" content="<?=$variavel->_SIGLAINSTITUICAO?>"/>
    <meta name="description" content="<?=$variavel->_NOMEINSTITUICAO?>">
    <meta name="robots" content="index, follow">

    <!--TITULO DA PAGINA-->
    <title><?=$variavel->_SIGLAINSTITUICAO?><?=$variavel->_TITULO_BROWSER != "" ? " - " . $variavel->_TITULO_BROWSER : "" ?></title>
    <!--ICONE-->
    <link rel="shortcut icon" href="<?= $raiz ?>files/img/<?=$variavel->_LOGONAVEGADOR?>" type="image/icon"/>
    <link rel="apple-touch-startup-image" href="<?= $raiz ?>files/img/logo-web.jpg">

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="<?= $raiz ?>files/plugin/stisla/modules/bootstrap/css/bootstrap.min.css"/>

    <!--ICONES-->
    <link rel="stylesheet" href="<?= $raiz ?>files/plugin/stisla/modules/fontawesome/css/all.css"/>
    <link rel="stylesheet" href="<?= $raiz ?>files/plugin/mdi/css/materialdesignicons.min.css"/>

    <!--PLUGINS-->
    <link rel="stylesheet" href="<?= $raiz ?>files/plugin/stisla/modules/izitoast/css/iziToast.min.css">

    <!--PERSONALIZA??O-->
    <link href="<?= $raiz ?>files/plugin/stisla/css/style.css" rel="stylesheet"/>
    <link href="<?= $raiz ?>files/plugin/stisla/css/components.css" rel="stylesheet"/>
    <link href="<?= $raiz ?>files/css/style.css" rel="stylesheet"/>
</head>
<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
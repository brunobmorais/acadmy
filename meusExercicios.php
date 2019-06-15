<?php
$raiz = str_repeat("../", $level = 0);

include($raiz . "files/php/protege.php");
include($raiz . "files/php/includes.php");
include($raiz . "files/php/header.php");
include($raiz . "files/php/topo.php"); ?>

<!--CONSULTA SQL-->

<div class="container meu-container">
    <section class="section">
        <div class="section-body">
            <!--<h2 class="section-title">This is Example Page</h2>
            <p class="section-lead">This page is just an example for you to create your own page.</p>-->
            <h3 class="tituloMovel"><img src="<?= $raiz ?>files/img/logo-preto.png" height="40px"/></h3>
            <h2 class="section-title">Exercícios de Humanas</h2>
            <p class="section-lead">História, Geografia, Filosofia e Sociologia.</p>
            <div class="row">


            </div>
        </div>
    </section>
</div>
<? include($raiz . "files/php/rodape.php") ?>

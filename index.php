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
            <h3 class="tituloMovel"><img src="<?=$raiz?>files/img/logo-preto.png" height="40px"/></h3>
            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <img alt="image" src="<?=$raiz?>files/upload/usua/<?=$fotoUsuarioSessao?>" class="rounded-circle profile-widget-picture" style="width: 150px">
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Humanas</div>
                            <div class="profile-widget-item-value">8.6</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Natureza</div>
                            <div class="profile-widget-item-value">9.2</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Linguagens</div>
                            <div class="profile-widget-item-value">7.9</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Matemática</div>
                            <div class="profile-widget-item-value">9.5</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Minha média até o momento</div>
                            <div class="profile-widget-item-value" style="font-size: 33px"><span class="mdi mdi-emoticon-happy-outline"></span> 35.2 <a class="btn btn-sm btn-secondary ">Quero aumentar</a> </div>
                        </div>
                    </div>
                </div>
                <div class="profile-widget-description pb-0">
                    <div class="profile-widget-name"><?=$nomeUsuarioSessao?> <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> <?=$opcaoCursoUsuarioSessao?></div></div>
                    <p>Você não possui notificações</p>
                </div>
                <div class="card-footer text-center pt-0">
                    <a href="#" class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-pencil"> </i> Meus dados
                    </a>
            </div>
        </div>
    </section>
</div>
<? include($raiz . "files/php/rodape.php") ?>

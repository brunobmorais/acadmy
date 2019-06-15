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
                            <div class="profile-widget-item-value" style="font-size: 33px">35.2 <a class="btn btn-sm btn-secondary ">Fazer exercícios</a> </div>
                        </div>
                    </div>
                </div>
                <div class="profile-widget-description pb-0">
                    <div class="profile-widget-name"><?=$nomeUsuarioSessao?> <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> <?=$opcaoCursoUsuarioSessao?></div></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.</p>
                </div>
                <div class="card-footer text-center pt-0">
                    <div class="font-weight-bold mb-2 text-small">Follow Hasan On</div>
                    <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 btn-github">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
<? include($raiz . "files/php/rodape.php") ?>

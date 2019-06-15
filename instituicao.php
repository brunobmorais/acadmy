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
            <h3 class="tituloMovel"><img src="<?= $raiz ?>files/img/logo-preto.png" height="40px"/>
                <a class="btn btn-link float-right text-primary"> <span class="mdi mdi-18px mdi-account"></span> Meus dados</a></h3>


            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label" style="font-size: 20px">Administração</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span>
                                interessados
                            </div>
                            <div class="profile-widget-item-value">10</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span> acima
                                do corte
                            </div>
                            <div class="profile-widget-item-value">6</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-domain"></span>Vagas
                            </div>
                            <div class="profile-widget-item-value">15</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Média total</div>
                            <div class="profile-widget-item-value" style="font-size: 33px"> 20.2</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center pt-0">
                    <a href="#" class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-18px mdi-plus"> </i> Exercício
                    </a>
                </div>
            </div>
            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label" style="font-size: 20px">Administração</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span>
                                interessados
                            </div>
                            <div class="profile-widget-item-value">10</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span> acima
                                do corte
                            </div>
                            <div class="profile-widget-item-value">6</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-domain"></span>Vagas
                            </div>
                            <div class="profile-widget-item-value">15</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Média total</div>
                            <div class="profile-widget-item-value" style="font-size: 33px"> 20.2</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center pt-0">
                    <a href="#" class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-18px mdi-plus"> </i> Exercício
                    </a>
                </div>
            </div>
            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label" style="font-size: 20px">Administração</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span>
                                interessados
                            </div>
                            <div class="profile-widget-item-value">10</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span> acima
                                do corte
                            </div>
                            <div class="profile-widget-item-value">6</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-domain"></span>Vagas
                            </div>
                            <div class="profile-widget-item-value">15</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Média total</div>
                            <div class="profile-widget-item-value" style="font-size: 33px"> 20.2</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center pt-0">
                    <a href="#" class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-18px mdi-plus"> </i> Exercício
                    </a>
                </div>
            </div>
    </section>
</div>
<? include($raiz . "files/php/rodape.php") ?>

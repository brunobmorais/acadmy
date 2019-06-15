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
            <a href="<?=$tipoUsuarioSessao=="Aluno"?'./index.php':'./instituicao.php'?>"> <h3 class="tituloMovel"><img src="<?= $raiz ?>files/img/logo-preto.png" height="50px"/>
            <a class="btn btn-link float-right text-primary"> <span class="mdi mdi-18px mdi-account"></span> Meus dados</a></h3></a>

            <h4>Perfil</h4>


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
                                Interessados
                            </div>
                            <div class="profile-widget-item-value">1104</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span> Aptos
                                <a href="planosInstituicao.php" class="btn btn-sm btn-light btn-round"><span class="mdi mdi-email"></span></a>
                            </div>
                            <div class="profile-widget-item-value">254</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-domain"></span> Vagas
                            </div>
                            <div class="profile-widget-item-value">60</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Média Geral</div>
                            <div class="profile-widget-item-value" style="font-size: 33px"> 5.2</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center pt-0">
                    <a href="#" class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-18px mdi-plus"> </i> Exercício
                    </a>
                    <a href="cursosinstituicao.php" class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-18px mdi-pencil"> </i> Alterar Corte
                    </a>
                </div>
            </div>
            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label" style="font-size: 20px">Direito</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span>
                                Interessados
                            </div>
                            <div class="profile-widget-item-value">1320</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span> Aptos
                                <a href="webmail.php" class="btn btn-sm btn-light btn-round"><span class="mdi mdi-email"></span></a>
                            </div>
                            <div class="profile-widget-item-value">301</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-domain"></span> Vagas
                            </div>
                            <div class="profile-widget-item-value">90</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Média Geral</div>
                            <div class="profile-widget-item-value" style="font-size: 33px"> 6.0</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center pt-0">
                    <a href="#" class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-18px mdi-plus"> </i> Exercício
                    </a>
                    <a href="cursosinstituicao.php" class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-18px mdi-pencil"> </i> Alterar Corte
                    </a>
                </div>
            </div>

            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label" style="font-size: 20px">Sistemas</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span>
                                Interessados
                            </div>
                            <div class="profile-widget-item-value">820</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span> Aptos
                                <a href="webmail.php" class="btn btn-sm btn-light btn-round"><span class="mdi mdi-email"></span></a>
                            </div>
                            <div class="profile-widget-item-value">423</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-domain"></span> Vagas
                            </div>
                            <div class="profile-widget-item-value">120</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Média Geral</div>
                            <div class="profile-widget-item-value" style="font-size: 33px"> 5.7</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center pt-0">
                    <a href="#" class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-18px mdi-plus"> </i> Exercício
                    </a>
                    <a href="cursosinstituicao.php" class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-18px mdi-pencil"> </i> Alterar Corte
                    </a>
                </div>
            </div>
    </section>
</div>
<? include($raiz . "files/php/rodape.php") ?>

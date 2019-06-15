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
            <a href="<?=$tipoUsuarioSessao=="Aluno"?'./index.php':'./instituicao.php'?>"> <h3 class="tituloMovel"><img src="<?= $raiz ?>files/img/logo-preto.png" height="50px"/></h3></a>
            <h4>Meu estudo</h4>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Questões Resolvidas</h4>
                            </div>
                            <div class="card-body">
                                286
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Acertos</h4>
                            </div>
                            <div class="card-body">
                                202
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="far fa-file"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Erros</h4>
                            </div>
                            <div class="card-body">
                                84
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Online Users</h4>
                            </div>
                            <div class="card-body">
                                47
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="statistic-details mt-sm-4">
                <div class="statistic-details-item">
                    <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 7%</span>
                    <div class="detail-value">$243</div>
                    <div class="detail-name">Today's Sales</div>
                </div>
                <div class="statistic-details-item">
                    <span class="text-muted"><span class="text-danger"><i class="fas fa-caret-down"></i></span> 23%</span>
                    <div class="detail-value">$2,902</div>
                    <div class="detail-name">This Week's Sales</div>
                </div>
                <div class="statistic-details-item">
                    <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>9%</span>
                    <div class="detail-value">$12,821</div>
                    <div class="detail-name">This Month's Sales</div>
                </div>
                <div class="statistic-details-item">
                    <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 19%</span>
                    <div class="detail-value">$92,142</div>
                    <div class="detail-name">This Year's Sales</div>
                </div>
            </div>
        </div>
    </section>
</div>
<? include($raiz . "files/php/rodape.php") ?>

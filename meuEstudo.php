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
                                <h4>Proficiência</h4>
                            </div>
                            <div class="card-body">
                                4
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-6 float-left">
                <div class="card">
                    <div class="card-header">
                        <h4>Progresso nos Testes de Proficiência</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart3"></canvas>
                    </div>
                </div>
            </div>

            <div class="statistic-details mt-sm-4 float-left col-12 col-md-6 col-lg-6">
                <div class="statistic-details-item">
                    <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 3%</span>
                    <div class="detail-value">8.4</div>
                    <div class="detail-name">HUMANAS</div>
                </div>
                <div class="statistic-details-item">
                    <span class="text-muted"><span class="text-danger"><i class="fas fa-caret-down"></i></span> 2%</span>
                    <div class="detail-value">8.2</div>
                    <div class="detail-name">NATUREZA</div>
                </div>
                <div class="statistic-details-item">
                    <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span>5%</span>
                    <div class="detail-value">9.6</div>
                    <div class="detail-name">LINGUAGENS</div>
                </div>
                <div class="statistic-details-item">
                    <span class="text-muted"><span class="text-primary"><i class="fas fa-caret-up"></i></span> 4%</span>
                    <div class="detail-value">8.9</div>
                    <div class="detail-name">MATEMÁTICA</div>
                </div>
            </div>
        </div>
    </section>
</div>
<? include($raiz . "files/php/rodape.php") ?>
<script src="files/js/modules-chartjs.js"></script>

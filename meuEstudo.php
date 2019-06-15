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
            <h4>Meus Índices</h4>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-check"></i>
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
                            <i class="far fa-thumbs-up"></i>
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
                            <i class="far fa-thumbs-down"></i>
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
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Faculdades</h4>
                            </div>
                            <div class="card-body">
                                3
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-right mb-3">
                    <a href="fazerExercicios.php" class="btn btn-primary">Praticar Mais Exercícios!</a>
                </div>
            </div>

            <div class="card" style="-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;">
                <div class="card-header">
                    <h4>Resultado do Último Teste</h4>
                    Para realizar um novo teste de proficiência você precisa contratar um plano de estudo.
                    <a href="exercicios.php" class="btn btn-primary">Ver Planos</a>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <div class="text-small float-right font-weight-bold text-muted">8.3</div>
                        <div class="font-weight-bold mb-1">Humanas</div>
                        <div class="progress warning" data-height="8" style="height: 8px;">
                            <div class="progress-bar bg-dark" role="progressbar" data-width="80%" aria-valuenow="83"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="text-small float-right font-weight-bold text-muted">8.7</div>
                        <div class="font-weight-bold mb-1">Natureza</div>
                        <div class="progress warning" data-height="8" style="height: 8px;">
                            <div class="progress-bar bg-dark" role="progressbar" data-width="87%" aria-valuenow="83"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="text-small float-right font-weight-bold text-muted">9.3</div>
                        <div class="font-weight-bold mb-1">Linguagem</div>
                        <div class="progress warning" data-height="8" style="height: 8px;">
                            <div class="progress-bar bg-dark" role="progressbar" data-width="93%" aria-valuenow="83"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="text-small float-right font-weight-bold text-muted">8.9</div>
                        <div class="font-weight-bold mb-1">Matemática</div>
                        <div class="progress warning" data-height="8" style="height: 8px;">
                            <div class="progress-bar bg-dark" role="progressbar" data-width="89%" aria-valuenow="83"
                                 aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section>
</div>
<? include($raiz . "files/php/rodape.php") ?>
<script src="files/plugin/stisla/js/page/modules-chartjs.js"></script>

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
            <a href="<?=$tipoUsuarioSessao=="Aluno"?'./index.php':'./instituicao.php'?>"> <h3 class="tituloMovel"><img src="<?= $raiz ?>files/img/logo-preto.png" height="50px"/></h3></a>
            <h4><?=$opcaoCursoUsuarioSessao?> <div class="bullet"></div> <?=$cidadeUsuarioSessao?></h4>

            <div class="card card-success">
                <div class="card-header">
                    <h4 class="card-title" style="font-size: 20px">Faculdade Serra do Carmo <div class="bullet"></div><div class="text-success d-inline">Inscrito</div></h4>
                </div>

                <div class="card-body mt-0 pt-0">
                    <div class="alert alert-light font-weight-bold" style="font-size: 15px">Sua posição atual é 9º</div>
                    <p class="card-text mb-0">Noturno</p>
                    <p class="card-text mb-0">Conceito 5</p>
                    <p class="card-text mb-0">R$ 600,00/mensal</p>
                    <p class="card-text mb-0">Nota acima de 8.0, bolsa de 10%</p>
                    <p class="card-text mb-0">Nota acima de 9.0, bolsa de 60%</p>
                    <p class="card-text mb-0">10 vagas</p>
                    <p class="card-text mb-0">200 inscritos</p>
                    <p class="card-text">Nota de corte 8.99</p>

                    <a href="#" class="card-link"><span class="mdi mdi-phone"></span> Fale conosco</a>
                    <a href="#" class="card-link"><span class="mdi mdi-share"></span> Compartilhar</a>
                    <a href="#" class="card-link text-danger"><span class="mdi mdi-close"></span>Cancelar</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="font-size: 20px">Faculdade Objetivo </h4>
                </div>
                <div class="card-body mt-0 pt-0">
                    <p class="card-text mb-0">Noturno</p>
                    <p class="card-text mb-0">Conceito 4</p>
                    <p class="card-text mb-0">R$ 500,00/mensal</p>
                    <p class="card-text mb-0">Nota acima de 8.0, bolsa de 30%</p>
                    <p class="card-text mb-0">Nota acima de 9.0, bolsa de 90%</p>
                    <p class="card-text mb-0">15 vagas</p>
                    <p class="card-text mb-0">200 inscritos</p>
                    <p class="card-text">Nota de corte 8.5</p>

                    <a href="#" class="card-link"><span class="mdi mdi-phone"></span> Fale conosco</a>
                    <a href="#" class="card-link"><span class="mdi mdi-share"></span> Compartilhar</a>
                    <a href="#" class="card-link"><span class="mdi mdi-check"></span> Inscrever</a>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" style="font-size: 20px">Universidade Católica do Tocantins </h4>
                </div>
                <div class="card-body mt-0 pt-0">
                    <p class="card-text mb-0">Matutino</p>
                    <p class="card-text mb-0">Conceito 4</p>
                    <p class="card-text mb-0">R$ 700,00/mensal</p>
                    <p class="card-text mb-0">Nota acima de 8.0, bolsa de 30%</p>
                    <p class="card-text mb-0">Nota acima de 9.5, bolsa de 100%</p>
                    <p class="card-text mb-0">7 vagas</p>
                    <p class="card-text mb-0">300 inscritos</p>
                    <p class="card-text">Nota de corte 9</p>

                    <a href="#" class="card-link"><span class="mdi mdi-phone"></span> Fale conosco</a>
                    <a href="#" class="card-link"><span class="mdi mdi-share"></span> Compartilhar</a>
                    <a href="#" class="card-link"><span class="mdi mdi-check"></span> Inscrever</a>
                </div>
            </div>





        </div>
    </section>
</div>
<? include($raiz . "files/php/rodape.php") ?>

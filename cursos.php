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
            <div class="card">
                <div class="card-header">
                    <h4><?=$opcaoCursoUsuarioSessao?> <div class="bullet"></div> <?=$cidadeUsuarioSessao?></h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled list-unstyled-border list-unstyled-noborder">
                        <li class="media">
                            <div class="media-body">
                                <div class="media-title mb-1">Faculdade Serra do Carmo <div class="bullet"></div><div class="text-success d-inline">Inscrito</div></div>
                                <div class="text-time">Noturno / Nota de corte: 8.0</div>
                                <div class="media-description text-muted">Que legal, você é 8º de 10 vagas oferecidas pela a instituição. Continue estudando muito.</div>
                                <a class="btn btn-sm btn-outline-danger btn-round mt-3" href="#">Excluir</a>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-body">
                                <div class="media-title mb-1">Universidade Católica do Tocantins</div>
                                <div class="text-time">Noturno</div>
                                <div class="media-description text-muted">5 vagas.</div>

                                    <a class="btn btn-sm btn-outline-primary btn-round mt-3" href="#">Inscreve</a>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-body">
                                <div class="media-title mb-1">Faculdade Objetivo</div>
                                <div class="text-time">Matutino</div>
                                <div class="media-description text-muted">8 vagas.</div>
                                <a class="btn btn-sm btn-outline-primary btn-round mt-3" href="#">Inscrever</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
<? include($raiz . "files/php/rodape.php") ?>

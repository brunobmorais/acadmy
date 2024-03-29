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
            <h2 class="section-title">Plano de Estudo</h2>
            <p class="section-lead">Selecine qual o plano que se encaixa melhor no seu perfil</p>
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="pricing">
                        <div class="pricing-title">
                            Estudante
                        </div>
                        <div class="pricing-padding">
                            <div class="pricing-price">
                                <div>Grátis</div>
                                <div></div>
                                <div>p/ sempre</div>

                            </div>
                            <div class="pricing-details">
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">+ 13 mil Exercícios</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Segmentados</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
                                    <div class="pricing-item-label">Comentado por Professores</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
                                    <div class="pricing-item-label">3 Teste de Proficiência/Semana</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
                                    <div class="pricing-item-label">Testes de Proficiência Ilimitados</div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-cta">
                            <a href="#">Selecione <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="pricing pricing-highlight">
                        <div class="pricing-title">
                            Nerd
                        </div>
                        <div class="pricing-padding">
                            <div class="pricing-price">
                                <div>R$ 6,90</div>
                                <div>por mês</div>
                            </div>
                            <div class="pricing-details">
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">+ 13 mil Exercícios</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Segmentados</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Comentado por Professores</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">3 Teste de Proficiência/Semana</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
                                    <div class="pricing-item-label">Testes de Proficiência Ilimitados</div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-cta">
                            <a href="#">Selecione <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="pricing">
                        <div class="pricing-title">
                            Gênio
                        </div>
                        <div class="pricing-padding">
                            <div class="pricing-price">
                                <div>R$ 14,90</div>
                                <div>por mês</div>
                            </div>
                            <div class="pricing-details">
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">+ 13 mil Exercícios</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Segmentados</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Comentado por Professores</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">3 Teste de Proficiência/Semana</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Testes de Proficiência Ilimitados</div>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-cta">
                            <a href="#">Selecione <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<? include($raiz . "files/php/rodape.php") ?>

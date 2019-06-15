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
            <h2 class="section-title">Planos para Universidades</h2>
            <p class="section-lead">Econtre os melhores acadêmicos</p>
            <div class="row">
                <h4>Porquê AcadMy é ideal para sua instituição?</h4>
                Com o AcadMy você tem acesso a mais de 21 mil estudantes interessados em cursar faculdade.
                Cada aluno é segmentado por interesse e por sua notas. Utilizamos engenharia de dados para
                levar até você o perfil ideal de aluno para cada curso de sua instituição.
                São realizados calculos com as notas por disciplinas,
            </div>


            <div class="row">
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="pricing">
                        <div class="pricing-title">
                            Padrão
                        </div>
                        <div class="pricing-padding">
                            <div class="pricing-price">
                                <div>Grátis</div>
                                <div>P/ Sempre</div>
                            </div>
                            <div class="pricing-details">
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Acesso + 21 mil acadêmicos</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
                                    <div class="pricing-item-label">Segmentados por interesse</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
                                    <div class="pricing-item-label">Notas por áreas do conhecimento</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
                                    <div class="pricing-item-label">Contato via AcadMy Mail</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Área da Universidade no App</div>
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
                            Primeiro Contato
                        </div>
                        <div class="pricing-padding">
                            <div class="pricing-price">
                                <div>R$ 69,90</div>
                                <div>por mês</div>
                            </div>
                            <div class="pricing-details">
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Acesso + 21 mil acadêmicos</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Segmentados por interesse</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Notas por áreas do conhecimento</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label"><b>R$ 0,99/email</b> via AcadMy Mail</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Área da Universidade no App</div>
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
                            Contato Expresso
                        </div>
                        <div class="pricing-padding">
                            <div class="pricing-price">
                                <div>R$ 229,90</div>
                                <div>por mês</div>
                            </div>
                            <div class="pricing-details">
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Acesso + 21 mil acadêmicos</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Segmentados por interesse</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Notas por áreas do conhecimento</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label"><b>R$ 0,09/email</b> via AcadMy Mail</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                                    <div class="pricing-item-label">Área da Universidade no App</div>
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

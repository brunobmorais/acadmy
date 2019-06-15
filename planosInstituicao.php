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
              <a href="<?= $tipoUsuarioSessao == "Aluno" ? './index.php' : './instituicao.php' ?>"><h3
                        class="tituloMovel"><img src="<?= $raiz ?>files/img/logo-preto.png" height="50px"/></h3></a>
            <div class="col-12">

                <br><h5>Porquê AcadMy é ideal para sua instituição?</h5>
                <hr>
                <p>Com o AcadMy você tem acesso a mais de 21 mil estudantes interessados em cursar faculdade.<br>
                    Cada aluno é segmentado por interesse e por sua notas. Utilizamos engenharia de dados para
                    levar até você o perfil ideal de aluno para cada curso de sua instituição.
                    <br>São realizados calculos com as notas por disciplinas, separando-as por áreas de conhecimento e
                    considerando os pesos que você definir, se chega a nota final de cada aluno.</p>


                <br><br> <h5>Como se dá o contato com os acadêmicos?</h5>
                <hr>
                <p>Por questões de privacidade, todos os primeiros contatos entre universidade e acadêmico
                    serão intermediados pela AcadMy através do nosso serviço de webmail.
                    <br>
                    Para este serviço será cobrado uma taxa que varia entre os planos disponíveis.
                </p>

            </div>
            <br><br>


            <h2 class="section-title">Planos para Universidades</h2>
            <p class="section-lead">Econtre os melhores acadêmicos</p>
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
                                    <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i>
                                    </div>
                                    <div class="pricing-item-label">Segmentados por interesse</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i>
                                    </div>
                                    <div class="pricing-item-label">Notas por áreas do conhecimento</div>
                                </div>
                                <div class="pricing-item">
                                    <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i>
                                    </div>
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

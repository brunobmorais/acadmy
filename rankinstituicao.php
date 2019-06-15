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
            <a href="<?=$tipoUsuarioSessao=="Aluno"?'./index.php':'./instituicao.php'?>" <h3 class="tituloMovel"><img src="<?= $raiz ?>files/img/logo-preto.png" height="50px"/></h3>
            <div class="card">
                <div class="card-header">
                    <h4>Rank dos alunos</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs p-0 m-0" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Admin.</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Dir.</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Cont.</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="mb-4 mt-4">
                                    <div class="text-small float-right font-weight-bold text-muted">558</div>
                                    <div class="font-weight-bold mb-1">1 <div class="bullet"></div> B. Santos</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-muted">338</div>
                                    <div class="font-weight-bold mb-1">2 <div class="bullet"></div>J. Sousa</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="67%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-muted">238</div>
                                    <div class="font-weight-bold mb-1">3 <div class="bullet"></div>P. Silva</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="58%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-muted">190</div>
                                    <div class="font-weight-bold mb-1">4 <div class="bullet"></div>J. Martins</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-muted">190</div>
                                    <div class="font-weight-bold mb-1">5 <div class="bullet"></div>H. Souza</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-muted">190</div>
                                    <div class="font-weight-bold mb-1">6 <div class="bullet"></div>S. Malffati</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-muted">190</div>
                                    <div class="font-weight-bold mb-1">7 <div class="bullet"></div>D. Silva</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-muted">190</div>
                                    <div class="font-weight-bold mb-1">8 <div class="bullet"></div>P. Pereira</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-dark" style="font-size: 20px">190</div>
                                    <div class="font-weight-bold mb-1 text-dark" style="font-size: 20px">9 <div class="bullet"></div>B. Morais</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-muted">190</div>
                                    <div class="font-weight-bold mb-1">9 <div class="bullet"></div>E. Bandeira</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="mb-4 mt-4">
                                        <div class="text-small float-right font-weight-bold text-muted">558</div>
                                        <div class="font-weight-bold mb-1">1 <div class="bullet"></div> B. Santos</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">338</div>
                                        <div class="font-weight-bold mb-1">2 <div class="bullet"></div>J. Sousa</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="67%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">238</div>
                                        <div class="font-weight-bold mb-1">3 <div class="bullet"></div>P. Silva</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="58%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">190</div>
                                        <div class="font-weight-bold mb-1">4 <div class="bullet"></div>J. Martins</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">190</div>
                                        <div class="font-weight-bold mb-1">5 <div class="bullet"></div>H. Souza</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">190</div>
                                        <div class="font-weight-bold mb-1">6 <div class="bullet"></div>S. Malffati</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">190</div>
                                        <div class="font-weight-bold mb-1">7 <div class="bullet"></div>D. Silva</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">190</div>
                                        <div class="font-weight-bold mb-1">8 <div class="bullet"></div>P. Pereira</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">190</div>
                                        <div class="font-weight-bold mb-1">9 <div class="bullet"></div>E. Bandeira</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">190</div>
                                        <div class="font-weight-bold mb-1">10 <div class="bullet"></div>E. Bandeira</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="mb-4 mt-4">
                                        <div class="text-small float-right font-weight-bold text-muted">558</div>
                                        <div class="font-weight-bold mb-1">1 <div class="bullet"></div> B. Santos</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">338</div>
                                        <div class="font-weight-bold mb-1">2 <div class="bullet"></div>J. Sousa</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="67%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">238</div>
                                        <div class="font-weight-bold mb-1">3 <div class="bullet"></div>P. Silva</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="58%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">190</div>
                                        <div class="font-weight-bold mb-1">4 <div class="bullet"></div>J. Martins</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">190</div>
                                        <div class="font-weight-bold mb-1">5 <div class="bullet"></div>H. Souza</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">190</div>
                                        <div class="font-weight-bold mb-1">6 <div class="bullet"></div>S. Malffati</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">190</div>
                                        <div class="font-weight-bold mb-1">7 <div class="bullet"></div>D. Silva</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">190</div>
                                        <div class="font-weight-bold mb-1">8 <div class="bullet"></div>P. Pereira</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">190</div>
                                        <div class="font-weight-bold mb-1">9 <div class="bullet"></div>E. Bandeira</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <div class="text-small float-right font-weight-bold text-muted">190</div>
                                        <div class="font-weight-bold mb-1">9 <div class="bullet"></div>E. Bandeira</div>
                                        <div class="progress" data-height="3">
                                            <div class="progress-bar" role="progressbar" data-width="36%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<? include($raiz . "files/php/rodape.php") ?>

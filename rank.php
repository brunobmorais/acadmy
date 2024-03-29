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
            <h4>Rank</h4>
            <div class="card">
                <div class="card-header">
                    <div class="card-header-action">
                        <a href="#" data-toggle="modal" data-target="#modalRankEscolas" class="btn btn-primary">
                            <span class="mdi mdi-school"></span> Rank escolas
                        </a>
                        <a href="#" class="btn btn-outline-primary">
                            <span class="mdi mdi-share"></span> Compartilhar
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs p-0 m-0" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Curso</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Cidade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Geral</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="mb-4 mt-4">
                                    <div class="text-small float-right font-weight-bold text-muted">9.98</div>
                                    <div class="font-weight-bold mb-1">1 <div class="bullet"></div> B. Santos <div class="bullet"></div> E. M. São Pedro, Palmas/TO</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="99%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-muted">9.97</div>
                                    <div class="font-weight-bold mb-1">2 <div class="bullet"></div>J. Sousa <div class="bullet"></div> COC, Palmas/TO</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="99%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-muted">9.90</div>
                                    <div class="font-weight-bold mb-1">3 <div class="bullet"></div>P. Silva <div class="bullet"></div> C. Olimpo, Palmas/TO</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="99%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-muted">9.9</div>
                                    <div class="font-weight-bold mb-1">4 <div class="bullet"></div>J. Martins <div class="bullet"></div> C. Ulbra, Palmas/TO</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="98%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-muted">9.5</div>
                                    <div class="font-weight-bold mb-1">5 <div class="bullet"></div>H. Souza <div class="bullet"></div> E. E. Pedro Alves, Palmas/TO</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="95%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-muted">9.3</div>
                                    <div class="font-weight-bold mb-1">6 <div class="bullet"></div>S. Malffati <div class="bullet"></div> COC, Palmas/TO</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="93%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-muted">8.9</div>
                                    <div class="font-weight-bold mb-1">7 <div class="bullet"></div>D. Silva <div class="bullet"></div> E. E. São José, Palmas/TO</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="89%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-muted">8.5</div>
                                    <div class="font-weight-bold mb-1">8 <div class="bullet"></div>P. Pereira <div class="bullet"></div> E. M. Padré Josino, Palmas/TO</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-dark" style="font-size: 20px">7.0</div>
                                    <div class="font-weight-bold mb-1 text-dark" style="font-size: 20px">9 <div class="bullet"></div>B. Morais <div class="bullet"></div> E. E. São José, Palmas/TO </div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="text-small float-right font-weight-bold text-muted">6.9</div>
                                    <div class="font-weight-bold mb-1">10 <div class="bullet"></div>E. Bandeira <div class="bullet"></div> C. Ulbra, Palmas/TO</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar" data-width="6.9%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                                        <div class="text-small float-right font-weight-bold text-dark" style="font-size: 20px">190</div>
                                        <div class="font-weight-bold mb-1 text-dark" style="font-size: 20px">390 <div class="bullet"></div>B. Morais</div>
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
                                        <div class="text-small float-right font-weight-bold text-dark" style="font-size: 20px">190</div>
                                        <div class="font-weight-bold mb-1 text-dark" style="font-size: 20px">2140 <div class="bullet"></div>B. Morais</div>
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

<!-- Modal -->
<div class="modal fade" id="modalRankEscolas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Rank das escolas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">1. COC Palmas/TO - 99.8</p>
                <p class="mb-0">2. C. Olimpo Palmas/TO - 99</p>
                <p class="mb-0">3. E. E. São José Palmas/TO- 98</p>
                <p class="mb-0">4. E. M. Maria Angela Palmas/TO - 97</p>
                <p class="mb-0">5. E. M. São Jorge Palmas/TO - 96</p>
                <p class="mb-0">6. C. São João Palmas/TO - 95</p>
                <p class="mb-0">7. E. M. Maria Angela Palmas/TO - 94</p>
                <p class="mb-0">8. E. M. Maria Angela Palmas/TO - 93</p>
                <p class="mb-0">9. E. M. Pedro - 92</p>
                <p class="mb-0">10. E. M. Tereza Agular Angela - 91</p>
                <p class="mb-0">11. E. M. Pedro Jorge - 90</p>
                <p class="mb-0">12. E. M. Caetano Veloso - 88</p>
                <p class="mb-0">13. E. M. Maria Antonia - 87</p>
                <p class="mb-0">14. E. M. Antonio - 86</p>
                <p class="mb-0">15. E. M. São Paulo - 85</p>
                <p class="mb-0">16. E. M. Maria Angela - 84</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Voltar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Compartilhar</button>
            </div>
        </div>
    </div>
</div>

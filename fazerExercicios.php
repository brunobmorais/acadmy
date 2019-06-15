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
            <h4>Exercício</h4>
            <h2 class="section-title">Exercícios de Humanas</h2>
            <p class="section-lead">História, Geografia, Filosofia e Sociologia.</p>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <div class="control-label">1) São escolas helenísticas de filosofia:</div>
                        <div class="custom-switches-stacked mt-2">
                            <label class="custom-switch">
                                <input type="radio" name="option" value="1" class="custom-switch-input" checked>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">O ecletismo, o atomismo e o socratismo.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option" value="2" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">O pitagorismo, o ecletismo e o epicurismo.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option" value="3" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">O ecletismo, o estoicismo e o epicurismo.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option" value="3" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">O estoicismo, o tomismo e o epicurismo.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option" value="3" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">O cinismo, o socratismo e o pitagorismo.</span>
                            </label>
                        </div>
                        <button class="btn btn-primary">Confirmar</button>
                        <hr>
                        <button class="btn btn-light"><span class="mdi mdi-comment-text-multiple-outline"></span>
                            Comentários
                        </button>
                        <button class="btn btn-light"><span class="mdi mdi-file-document-edit-outline"></span> Anotações
                        </button>
                        <button class="btn btn-light"><span class="mdi mdi-animation"></span> Questões Relacionadas
                        </button>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <div class="control-label">2) Platão viu no ensino sofístico da retórica um perigo para o
                            Estado; por isso, escreveu várias obras sobre questões de política, filosofia etc. Entre
                            elas, é CORRETO citar:
                        </div>
                        <div class="custom-switches-stacked mt-2">
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="1" class="custom-switch-input" checked>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Metafísica, Sobre a natureza e Teeteto.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="2" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Discurso sobre o método, Protágoras e As leis.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="3" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">A República, Tópicos e Elencos.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="3" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">O banquete, O fedro e A república.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="3" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">O Fedro, O sofista e o Organon.</span>
                            </label>
                        </div>
                        <button class="btn btn-primary">Confirmar</button>
                        <hr>
                        <button class="btn btn-light"><span class="mdi mdi-comment-text-multiple-outline"></span>
                            Comentários
                        </button>
                        <button class="btn btn-light"><span class="mdi mdi-file-document-edit-outline"></span> Anotações
                        </button>
                        <button class="btn btn-light"><span class="mdi mdi-animation"></span> Questões Relacionadas
                        </button>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <div class="control-label">2) Platão viu no ensino sofístico da retórica um perigo para o
                            Estado; por isso, escreveu várias obras sobre questões de política, filosofia etc. Entre
                            elas, é CORRETO citar:
                        </div>
                        <div class="custom-switches-stacked mt-2">
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="1" class="custom-switch-input" checked>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Metafísica, Sobre a natureza e Teeteto.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="2" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Discurso sobre o método, Protágoras e As leis.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="3" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">A República, Tópicos e Elencos.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="3" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">O banquete, O fedro e A república.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="3" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">O Fedro, O sofista e o Organon.</span>
                            </label>
                        </div>
                        <button class="btn btn-primary">Confirmar</button>
                        <hr>
                        <button class="btn btn-light"><span class="mdi mdi-comment-text-multiple-outline"></span>
                            Comentários
                        </button>
                        <button class="btn btn-light"><span class="mdi mdi-file-document-edit-outline"></span> Anotações
                        </button>
                        <button class="btn btn-light"><span class="mdi mdi-animation"></span> Questões Relacionadas
                        </button>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <div class="control-label">2) Platão viu no ensino sofístico da retórica um perigo para o
                            Estado; por isso, escreveu várias obras sobre questões de política, filosofia etc. Entre
                            elas, é CORRETO citar:
                        </div>
                        <div class="custom-switches-stacked mt-2">
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="1" class="custom-switch-input" checked>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Metafísica, Sobre a natureza e Teeteto.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="2" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Discurso sobre o método, Protágoras e As leis.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="3" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">A República, Tópicos e Elencos.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="3" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">O banquete, O fedro e A república.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="3" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">O Fedro, O sofista e o Organon.</span>
                            </label>
                        </div>
                        <button class="btn btn-primary">Confirmar</button>
                        <hr>
                        <button class="btn btn-light"><span class="mdi mdi-comment-text-multiple-outline"></span>
                            Comentários
                        </button>
                        <button class="btn btn-light"><span class="mdi mdi-file-document-edit-outline"></span> Anotações
                        </button>
                        <button class="btn btn-light"><span class="mdi mdi-animation"></span> Questões Relacionadas
                        </button>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group">
                        <div class="control-label">2) Platão viu no ensino sofístico da retórica um perigo para o
                            Estado; por isso, escreveu várias obras sobre questões de política, filosofia etc. Entre
                            elas, é CORRETO citar:
                        </div>
                        <div class="custom-switches-stacked mt-2">
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="1" class="custom-switch-input" checked>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Metafísica, Sobre a natureza e Teeteto.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="2" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Discurso sobre o método, Protágoras e As leis.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="3" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">A República, Tópicos e Elencos.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="3" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">O banquete, O fedro e A república.</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="option2" value="3" class="custom-switch-input">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">O Fedro, O sofista e o Organon.</span>
                            </label>
                        </div>
                        <button class="btn btn-primary">Confirmar</button>
                        <hr>
                        <button class="btn btn-light"><span class="mdi mdi-comment-text-multiple-outline"></span>
                            Comentários
                        </button>
                        <button class="btn btn-light"><span class="mdi mdi-file-document-edit-outline"></span> Anotações
                        </button>
                        <button class="btn btn-light"><span class="mdi mdi-animation"></span> Questões Relacionadas
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
<? include($raiz . "files/php/rodape.php") ?>

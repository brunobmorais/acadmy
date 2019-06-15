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
            <h3 class="tituloMovel"><img src="<?= $raiz ?>files/img/logo-preto.png" height="40px"/></h3>


            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label" style="font-size: 20px">Administração</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span>
                                Hum.
                            </div>
                            <div class="profile-widget-item-value">2</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-leaf"></span> Natu.
                            </div>
                            <div class="profile-widget-item-value">1</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-domain"></span> Ling.
                            </div>
                            <div class="profile-widget-item-value">2</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-math-compass"></span> Matem.
                            </div>
                            <div class="profile-widget-item-value">5</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Corte</div>
                            <div class="profile-widget-item-value" style="font-size: 25px"> 8.0</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Nota > 9.0</div>
                            <div class="profile-widget-item-value" style="font-size: 25px"> Desc. 20%</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center pt-0">
                    <button type="button" data-toggle="modal" data-target="#editarCurso"
                            class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-pencil"> </i> Editar
                    </button>
                </div>
            </div>
            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label" style="font-size: 20px">Direito</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span>
                                Hum.
                            </div>
                            <div class="profile-widget-item-value">3</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-leaf"></span> Natu.
                            </div>
                            <div class="profile-widget-item-value">3</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-domain"></span> Ling.
                            </div>
                            <div class="profile-widget-item-value">3</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-math-compass"></span> Matem.
                            </div>
                            <div class="profile-widget-item-value">1</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Corte</div>
                            <div class="profile-widget-item-value" style="font-size: 25px"> 8.6</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Maior que 9.0</div>
                            <div class="profile-widget-item-value" style="font-size: 25px"> Desc. 10%</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center pt-0">
                    <button type="button" data-toggle="modal" data-target="#editarCurso"
                            class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-pencil"> </i> Editar
                    </button>
                </div>
            </div>
            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label" style="font-size: 20px">Sistemas</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span>
                                Hum.
                            </div>
                            <div class="profile-widget-item-value">2</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-leaf"></span> Natu.
                            </div>
                            <div class="profile-widget-item-value">2</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-domain"></span> Ling.
                            </div>
                            <div class="profile-widget-item-value">3</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-math-compass"></span> Matem.
                            </div>
                            <div class="profile-widget-item-value">3</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Corte</div>
                            <div class="profile-widget-item-value" style="font-size: 25px"> 8.0</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Maior que 9.0</div>
                            <div class="profile-widget-item-value" style="font-size: 25px"> Desc. 20%</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center pt-0">
                    <button type="button" data-toggle="modal" data-target="#editarCurso"
                            class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-pencil"> </i> Editar
                    </button>
                </div>
            </div>
    </section>
</div>

<div class="modal fade" id="editarCurso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Info. Curso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group col-3 float-left">
                    <label>Humanas</label>
                    <input type="number" value="2" class="form-control"/>
                </div>
                <div class="form-group col-3 float-left">
                    <label>Natureza</label>
                    <input type="number" value="2" class="form-control"/>
                </div>
                <div class="form-group col-3 float-left">
                    <label>Linguagens</label>
                    <input type="number" value="2" class="form-control"/>
                </div>
                <div class="form-group col-3 float-left">
                    <label>Matemática</label>
                    <input type="number" value="4" class="form-control"/>
                </div>
                <small id="emailHelp" class="form-text text-muted">A soma dos pesos deve ser igual a 10, obrigatoriamente.</small>
<hr>
                <div class="form-group col-4 float-left">
                    <label>Corte</label>
                    <input type="number" value="8.0" class="form-control"/>
                </div>
                <div class="form-group col-4 float-left">
                    <label>Nota Desconto</label>
                    <input type="number" value="9.0" class="form-control"/>
                </div>
                <div class="form-group col-4 float-left">
                    <label>Desconto</label>
                    <input type="text" value="20%" class="form-control"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Confirmar</button>
            </div>
        </div>
    </div>
</div>
<? include($raiz . "files/php/rodape.php") ?>

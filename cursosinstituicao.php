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
                            <div class="profile-widget-item-value">3</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span> Natu.
                            </div>
                            <div class="profile-widget-item-value">3</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-domain"></span> Ling.
                            </div>
                            <div class="profile-widget-item-value">3</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-domain"></span> Matem.
                            </div>
                            <div class="profile-widget-item-value">1</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Maior que 9.0</div>
                            <div class="profile-widget-item-value" style="font-size: 25px"> Desc. 10%</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Maior que 8.0</div>
                            <div class="profile-widget-item-value" style="font-size: 25px"> Desc. 0%</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center pt-0">
                    <a href="#" class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-pencil"> </i> Editar
                    </a>
                </div>
            </div>
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
                            <div class="profile-widget-item-value">3</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span> Natu.
                            </div>
                            <div class="profile-widget-item-value">3</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-domain"></span> Ling.
                            </div>
                            <div class="profile-widget-item-value">3</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-domain"></span> Matem.
                            </div>
                            <div class="profile-widget-item-value">1</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Maior que 9.0</div>
                            <div class="profile-widget-item-value" style="font-size: 25px"> Desc. 10%</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Maior que 8.0</div>
                            <div class="profile-widget-item-value" style="font-size: 25px"> Desc. 0%</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center pt-0">
                    <a href="#" class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-pencil"> </i> Editar
                    </a>
                </div>
            </div>
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
                            <div class="profile-widget-item-value">3</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-account"></span> Natu.
                            </div>
                            <div class="profile-widget-item-value">3</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-domain"></span> Ling.
                            </div>
                            <div class="profile-widget-item-value">3</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label"><span class="mdi mdi-18px mdi-domain"></span> Matem.
                            </div>
                            <div class="profile-widget-item-value">1</div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Maior que 9.0</div>
                            <div class="profile-widget-item-value" style="font-size: 25px"> Desc. 10%</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Maior que 8.0</div>
                            <div class="profile-widget-item-value" style="font-size: 25px"> Desc. 0%</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center pt-0">
                    <a href="#" class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-pencil"> </i> Editar
                    </a>
                </div>
            </div>
    </section>
</div>
<? include($raiz . "files/php/rodape.php") ?>

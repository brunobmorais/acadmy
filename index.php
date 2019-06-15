<?php
$raiz = str_repeat("../", $level = 0);

include($raiz . "files/php/protege.php");
include($raiz . "files/php/includes.php");
include($raiz . "files/php/header.php");
include($raiz . "files/php/topo.php");
$arquivo = $raiz . "files/json/AlunosNotas.json";

$info = file_get_contents($arquivo);
//print_r($info);
//faz o parsing na string, gerando um objeto PHP
$obj = json_decode($info);
$discentes = $obj->colegio->discentes;
$i = 0;
$humanas = 0;
$natureza = 0;
$linguagens = 0;
$matematica = 0;

?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Minhas Notas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?
                echo "<table class='table table-sm'><tr><th>Disciplina</th><th>1º Bim.</th><th>2º Bim.</th><th>3º Bim.</th><th>4º Bim.</th><th>Média</th></tr>";
                foreach ($discentes[0]->notas as $nota) {
                    $soma = ($nota->notas->b1 + $nota->notas->b2 + $nota->notas->b3 + $nota->notas->b4) / 4;
                    if ($i <= 3) {
                        $humanas += $soma;
                        $bg = 'warning';
                    } else if ($i > 3 && $i <= 6) {
                        $natureza += $soma;
                        $bg = 'info';
                    } else if ($i > 6 && $i <= 11) {
                        $linguagens += $soma;
                        $bg = 'success';
                    } else if ($i > 11) {
                        $matematica += $soma;
                        $bg = 'danger';
                    }
                    echo "<tr><th>" . $nota->disciplina . "</th><td>" . $nota->notas->b1 . "</td><td>" . $nota->notas->b2 . "</td><td>" . $nota->notas->b3 . "</td><td>" . $nota->notas->b4 . "</td><td>" . $soma . "</td><td>";
                    $i++;
                };
                $mediaHumanas = number_format($humanas / 4, 2, '.', '');
                $mediaNatureza = number_format($natureza / 3, 2, '.', '');
                $mediaLinguagens = number_format($linguagens / 5, 2, '.', '');
                $mediaMatematica = number_format($matematica / 1, 2, '.', '');
                $mediaFinal = number_format(($mediaHumanas + $mediaNatureza + $mediaLinguagens + $mediaMatematica) / 4, 2, '.', '');
                echo "</table>";
                ?>
                <div class="col-6 col-sm-2 float-left text-center">Humanas<br><?= $mediaHumanas ?></div>
                <div class="col-6 col-sm-2 float-left text-center">Natureza<br><?= $mediaNatureza ?></div>
                <div class="col-6 col-sm-2 float-left text-center">Linguagens<br><?= $mediaLinguagens ?></div>
                <div class="col-6 col-sm-2 float-left text-center">Matemática<br><?= $mediaMatematica ?></div>
                <div class="col-6 col-sm-4 float-left text-center">Média Final<br><?= $mediaFinal ?></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>


<div class="container meu-container">
    <section class="section">
        <div class="section-body">
            <!--<h2 class="section-title">This is Example Page</h2>
            <p class="section-lead">This page is just an example for you to create your own page.</p>-->
            <h3 class="tituloMovel"><img src="<?= $raiz ?>files/img/logo-preto.png" height="40px"/></h3>
            <div class="card profile-widget">
                <div class="profile-widget-header">
                    <img alt="image" src="<?= $raiz ?>files/upload/usua/<?= $fotoUsuarioSessao ?>"
                         class="rounded-circle profile-widget-picture" style="width: 150px">
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Humanas</div>
                            <div class="profile-widget-item-value"><?= $mediaHumanas ?></div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Natureza</div>
                            <div class="profile-widget-item-value"><?= $mediaNatureza ?></div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Linguagens</div>
                            <div class="profile-widget-item-value"><?= $mediaLinguagens ?></div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Matemática</div>
                            <div class="profile-widget-item-value"><?= $mediaMatematica ?></div>
                        </div>
                    </div>
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Minha média até o momento</div>
<<<<<<< HEAD
                            <div class="profile-widget-item-value" data-toggle="modal" data-target="#exampleModal"
                                 style="font-size: 43px"><span
                                        class="mdi mdi-emoticon-happy-outline"></span> <?= $mediaFinal ?> <a
                                        class="btn btn-sm btn-secondary ">Quero aumentar</a></div>
=======
                            <div class="profile-widget-item-value" style="font-size: 33px"><span class="mdi mdi-emoticon-happy-outline"></span> 35.2 <a href="esquecisenha.php" class="btn btn-sm btn-secondary ">Quero aumentar</a> </div>
>>>>>>> 19489a12c0b4ffae5752ca8c2ba73bad32a9a689
                        </div>
                    </div>
                </div>
                <div class="profile-widget-description pb-0">
                    <div class="profile-widget-name"><?= $nomeUsuarioSessao ?>
                        <div class="text-muted d-inline font-weight-normal">
                            <div class="slash"></div> <?= $opcaoCursoUsuarioSessao ?></div>
                    </div>
                    <p>Você não possui notificações</p>
                </div>
                <div class="card-footer text-center pt-0">
                    <a href="#" class="btn btn-outline-primary btn-round">
                        <i class="mdi mdi-pencil"> </i> Meus dados
                    </a>
                </div>
            </div>
    </section>
</div>


<? include($raiz . "files/php/rodape.php") ?>

<?php
/**
 * Created by PhpStorm.
 * User: Bruno Morais2
 * Date: 31/08/2018
 * Time: 20:01
 */

$sql = "SELECT DISTINCT(SS.CODSUBSERVICO), SS.NOME, SS.PASTA, SS.ORDEM FROM SIS_PRIVILEGIO AS P 
INNER JOIN SIS_USUARIO AS A ON A.CODUSUARIO=P.CODUSUARIO
INNER JOIN SIS_SUBSERVICO AS SS ON SS.CODSUBSERVICO=P.CODSUBSERVICO
INNER JOIN SIS_SERVICO AS S ON S.CODSERVICO=SS.CODSERVICO
INNER JOIN SIS_MODULO AS M ON M.CODMODULO=S.CODMODULO 
WHERE S.EXCLUIDO=0 AND S.SITUACAO=1 
AND M.EXCLUIDO=0 AND M.SITUACAO=1 
AND SS.EXCLUIDO=0 AND SS.SITUACAO=1 
AND A.CODUSUARIO=".$codUsuarioSessao." AND M.CODMODULO=".$moduloCodModulo." AND S.CODSERVICO=".$moduloCodServico." ORDER BY SS.ORDEM, SS.NOME";

$rsBuscaSubServicos = $banco->executeQuery($sql);?>

<div class="main-content">
    <section class="section">
    <?include($raiz . "files/php/titulopagina.php");?>
            <div class="col-md-12 p-0">
                <? foreach ($banco->pegarCampos($rsBuscaSubServicos) as $dados) {$cont++?>
                    <a href="./<?=$dados->PASTA?>" class="col-lg-4 col-md-4 col-xl-3 col-sm-6 col-12 link-card-menu ">
                        <div class="col card-menu-servico text-center align-middle in-up" style="animation-delay: <?=$cont*2?>0ms;">
                            <div class="texto-titulo-menu-servico "><?=$dados->NOME?></div>
                        </div>
                    </a>
                <?}?>
            </div>
    </section>
</div>
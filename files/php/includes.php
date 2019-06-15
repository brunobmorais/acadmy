<?php
/**
 * Created by PhpStorm.
 * User: Bruno Morais2
 * Date: 29/05/2017
 * Time: 18:54
 */

/*CONFIGURAÇÕES PHP*/
header('X-UA-Compatible: IE=edge');
header('Content-type: text/html; charset=UTF-8');

//INCLUDE
include($raiz . "files/php/class/Variavel.php");
/*include($raiz . "files/php/class/Banco.php");*/
include($raiz . "files/php/class/Funcoes.php");
include($raiz . "files/php/class/Alerta.php");
include($raiz . "files/php/class/Push.php");
include($raiz . "files/php/class/Sessao.php");
include($raiz . "files/php/class/Grid.php");


//INSTANCIA DAS VARIÁVEIS
$variavel       = new Variavel();
$sessao         = new Sessao();
/*$banco          = new Banco();*/
$func           = new Funcoes();
$alerta         = new Alerta();
$notificacao    = new Push();

//PEGAR VALORES DA SESSÃO
$codUsuarioSessao           = $sessao->pegarCampo("CODUSUARIO");
$fotoUsuarioSessao          = $sessao->pegarCampo("FOTO");
$nomeUsuarioSessao          = $sessao->pegarCampo("NOME");
$emailUsuarioSessao         = $sessao->pegarCampo("EMAIL");
$nomeQuebradoUsuarioSessao  = explode(" ", $nomeUsuarioSessao);

//INCLUDE MÓDULO
include($raiz . "files/php/modulo.php");

$alertaMsgRecebida = $alerta->verificaMsg();


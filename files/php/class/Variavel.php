<?php
/**
 * Created by PhpStorm.
 * User: Bruno Morais2
 * Date: 29/08/2018
 * Time: 09:21
 *
 * CLASSE DE VARIÁVEIS GLOBAIS
 */

class Variavel
{
    public function __construct()
    {
    }

    public $_BARRA_NAVEGACAO = "";
    public $_TITULO_BROWSER = "";

    //SUBSERVIÇOS QUE SERÃO ATIVIADOS POR PADRÃO AO CADASTRAR UM NOVO USUÁRIO
    public $_SUBSERVICOS_TODOS_USUARIOS =   array("19","31","18","21","16","17","20","8","34","35","36");

    //DADOS INSTITUCIONAIS
    public $_EMAILINSTITUICAO = "brunomoraisti@gmail.com";
    public $_SIGLAINSTITUICAO = "Acadmy";
    public $_SIGLAINSTITUICAOABREVIADA = "PTO";
    public $_NOMEINSTITUICAO = "Acadmy";
    public $_SITEINSTITUICAO = "bombeiros.to.gov.br";
    public $_LOGONAVEGADOR = "logonavegador.png"; // IMAGEM ARMAZENADA EM /files/img/
    public $_CORNAVEGADOR = "#6777EF";

    //DADOS DESENVOLVEDOR
    public $_EMAILDESENVOLVEDOR = "brunomoraisti@gmail.com";
    public $_NOMEDESENVOLVEDOR = "Bruno Morais";
    public $_SITEDESENVOLVEDOR = "bmorais.com";



    public $_EXTENSOES_IMAGEM = array('gif','png','jpg','jpeg','bmp');
    public $_EXTENSOES_PROTOCOLOS = array('gif','png','jpg','jpeg','bmp','pdf');







}
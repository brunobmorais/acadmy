<?php
/**
 * Created by PhpStorm.
 * User: Bruno Morais
 * Email: brunosm08@gmail.com
 * Date: 13/06/2017
 * Time: 15:17
 */
class Sessao
{
    var $nomeSessao = "SOS193";

    public function __construct()
    {
    }


    public function apagaSessao()
    {
        $this->iniciaSessao();
        session_unset(); // Eliminar todas as vari�veis da sess�o
        session_destroy(); // Destruir a sess�o
        $this->fechaSessao();
    }

    public function gravarCampo($nomeCampo, $valorCampo)
    {
        $this->iniciaSessao();
        $_SESSION[$nomeCampo]= $valorCampo;
        $this->fechaSessao();

    }

    public function pegarCampo($nomeCampo)
    {
        $this->iniciaSessao();
        $valorRetorno = $_SESSION[$nomeCampo];
        $this->fechaSessao();

        return $valorRetorno;
    }

    public function apagaCampo($nomeCampo)
    {
        $this->iniciaSessao();
        unset($_SESSION[$nomeCampo]);
        $this->fechaSessao();
    }

    public function iniciaSessao()
    {
        @ob_start();
        session_name($this->nomeSessao);
        session_start();
    }

    public function fechaSessao()
    {
        session_write_close();
        ob_end_flush();
    }
}

<?php

/**
 * Created by PhpStorm.
 * User: Bruno Morais2
 * Date: 21/08/2017
 * Time: 10:00
 */
    class Push{

        public function enviarAlertaCidade($alerta,$descricao,$codalerta,$tipoenvio){

            $encoding = mb_internal_encoding();
            $alertamais = mb_strtoupper($alerta, $encoding);
            $messageNova = "risco de ".$alertamais." na sua regi�o";
            $title = "'Alerta199 - Informa'";
            $message = "'$messageNova'";
            $codalerta = "'$codalerta'";
            $tipo = "'padrao'";
            $tipoenvioalerta = "'$tipoenvio'";
            $retorno = "http://sistemas.bombeiros.to.gov.br/alerta199/admin/pags/aler/";

            $this->enviarParaTodos($title,$message,$codalerta,$tipo,$retorno,$tipoenvioalerta);

        }


        private function enviarParaTodos($title,$message,$codalerta,$tipo,$retorno,$tipoenvio){

            echo "<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script><script>
                var title = ".$title.";
                var message = ".$message.";
                var codalerta = ".$codalerta.";
                var tipo = ".$tipo.";
                var tipoenvio = ".$tipoenvio.";
    
                $.ajax({
                        url: 'http://sistemas.bombeiros.to.gov.br/alerta199/api/enviartodos.php', /* URL que ser� chamada */
                        type: 'POST', /* Tipo da requisi��o */
                        data: 'TITLE=' + title + '&' +
                'MESSAGE=' + message + '&' +
                'CODALERTA=' + codalerta + '&' +
                'tipoenvio=' + tipoenvio + '&' +
                'tipo=' + tipo, /* dado que ser� enviado via POST */
                        //dataType: 'json', /* Tipo de transmiss�o */
                        success: function (data) {
                    console.log('sucesso');
                },
                        error: function (data) {
                    //document.getElementById('f_cadastro').submit();
                }
                    });
                
                location.replace('".$retorno."');
            </script>";

        }

}
<?php
$raiz = str_repeat("../", $level = 0);

include($raiz."files/php/includes.php");
$aRedireciona = $sessao->pegarCampo("REDIRECIONA");

/*$_POST['email'] = str_replace('/[^[:alpha:]_]/', '', $_POST['email']);*/
$email = $_POST['email'];
$senha = $_POST['senha'];

$retorno = array();

$sql = "SELECT * FROM SIS_USUARIO AS U WHERE U.EMAIL = '" . $email . "'";
$rsClientes = $banco->executeQuery($sql);

if ($banco->quantidade($rsClientes)>0){

    $dados = $banco->pegarCampos($rsClientes);

    if ($func->verify_password_hash($senha,$dados[0]->SENHA)){


        if ($dados[0]->SITUACAO!=1) {
            //$alerta->warning("ERRO! USUÁRIO INATIVO, FALE COM O RH!", "./");
            $retorno['error'] = "1";
            $retorno['msg']="Usuário inativo, fale com o RH!";
            echo json_encode($retorno);
        }
        else {
            $data = $func->pegarDataAtualBanco();
            $sql = "UPDATE SIS_USUARIO SET ULTIMOACESSO='".$data."' WHERE CODUSUARIO=".$dados[0]->CODUSUARIO;
            $result = $banco->executeQuery($sql);

            $sessao->gravarCampo("CODUSUARIO", $dados[0]->CODUSUARIO);
            $sessao->gravarCampo("EMAIL", $dados[0]->EMAIL);
            $sessao->gravarCampo("TELEFONE", $dados[0]->TELEFONE);
            $sessao->gravarCampo("NOME", $dados[0]->NOME);
            $sessao->gravarCampo("FOTO", $dados[0]->FOTO);
            $sessao->gravarCampo("SITUACAO", $dados[0]->SITUACAO);

            $retorno['error'] = "0";
            $retorno['msg']="";

            if (empty($aRedireciona)) {
                $retorno['redireciona']="./";
            } else {
                $sessao->gravarCampo("REDIRECIONA", "");
                $retorno['redireciona']=$aRedireciona;
            }

            echo json_encode($retorno);

        }
    } else {
        $retorno['error'] = "1";
        $retorno['msg']="Login ou senha incorreto!";
        echo json_encode($retorno);

    }
} else {
    $retorno['error'] = "1";
    $retorno['msg']="Usuário não cadastrado!";
    echo json_encode($retorno);
}
?>

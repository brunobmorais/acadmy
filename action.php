<?php
$raiz = str_repeat("../", $level = 0);

include($raiz . "files/php/includes.php");


$acao = $_POST['acao'];

if ($acao == 'cadastrar') {
    $senha = password_hash($_POST['cdsenha'],PASSWORD_DEFAULT);
    $sql = "INSERT INTO RH_SERVIDOR (NOME,EMAIL,SENHA,CODSITUACAO) VALUES ('" . $_POST['nome'] . "','" . $_POST['email'] . "','" . $senha . "','1')";
    $rsExecuta = $banco->executeQuery($sql);

    if ($rsExecuta != null) {
        $alerta->success("Realizado com sucesso", 'index.php');
    } else {
        $alerta->danger("Ocorreu um erro!", 'cadastro.php');
    }
} else if ($acao == "recuperar") {

    $cpf = str_replace(".","",$_POST['cpf']);
    $cpf = str_replace("-","",$cpf);

    $sqlUsuario = "SELECT * FROM VIEW_SERVIDOR WHERE CPF LIKE '" . $cpf . "'";
    $rsSQL = $banco->executeQuery($sqlUsuario);
    $dados = $banco->pegarCampos($rsSQL);

    if ($rsSQL != null) {
        $codservidor = $dados[0]->CODSERVIDOR;
        $email = $dados[0]->EMAIL;
        $nome = $dados[0]->NOME;
        $token = $func->geraSenha();

        $sql = "INSERT INTO RH_RECUPERASENHA (CODSERVIDOR,DATA,TOKEN, EXPIRADO) VALUES ('" . $codservidor . "','" . date('Y-m-d H:i') . "','" . $token . "','0')";
        $rsExecuta = $banco->executeQuery($sql);
        if ($rsExecuta != null) {

            $msge = 'Você solicitou a recuperação de sua senha de acesso do IDURB.
<br><br>
Clique no link abaixo para criar uma nova senha de acesso:<br><br>
<a href=http://idurb.canaadoscarajas.pa.gov.br/intranet/novasenha.php?id=' . $codservidor . '&token=' . $token . '>
Clique aqui
</a>
    <br ><br >
    Caso não tenha solicitado a recuperação de sua senha, desconsidere este email e continue acessando o site naturalmente.<br><br>
<span style = "color:#666666" > Este é um email automático e não precisa ser respondido .</span > ';


            //$func->enviaEmail("bruno@bmorais.com", "IDURB", $email, "Recuperação de Senha", $msge);
            $phpmailer = new PHPMailer();
            if ($func->enviarEmailPHPMailer($phpmailer,"Recuperacao de Senha",$msge,$email))
                $alerta->success("Um link foi enviado para seu email!", './');
            else
                $alerta->warning("Não foi possível enviar email!", './');

        } else {
            $alerta->warning('Erro em sua Solicitação!', './');
        }
    } else {
        $alerta->warning('Email não encontrado!', './');
    }
} else if ($acao == "novasenha") {
    $codservidor = $_POST["codservidor"];
    $token = $_POST["token"];
    $novaSenha =  $func->create_password_hash($_POST['cdsenha'],PASSWORD_DEFAULT);

    $sql = "SELECT * FROM RH_RECUPERASENHA WHERE TOKEN = '" . $token . "' AND CODSERVIDOR ='" . $codservidor . "' AND EXPIRADO = 0";
    $rsExecuta = $banco->executeQuery($sql);

    if ($banco->quantidade($rsExecuta) < 1) {
        $alerta->warning('Sua solicitação expeirou! Tente novamente.', 'esquecisenha.php');
    } else {
        $dados = $banco->pegarCampos($rsExecuta);
        $sql = "UPDATE RH_RECUPERASENHA SET EXPIRADO='1' WHERE CODRECUPERASENHA='" . $dados[0]->CODRECUPERASENHA . "'";
        $rsExecuta = $banco->executeQuery($sql);

        $sql = "UPDATE RH_SERVIDOR SET SENHA='" .$novaSenha. "' WHERE CODSERVIDOR='" . $codservidor . "'";;
        $rsExecuta = $banco->executeQuery($sql);
        if ($rsExecuta == null) {
            $alerta->warning('Aconteceu um erro, tente mais tarde', './');
        } else {
            $alerta->success("Alteração realizada!", './');
        }
    }
} else if ($acao == "enviarMensagem"){

    $phpmailer = new PHPMailer();
    //$func->enviaEmail("idurb@canaadoscarajas.pa.gov.br","IDURB", "brunomoraisti@gmail.com","Teste","Teste de envio");
    $func->enviarEmailPHPMailer($phpmailer,"Suporte IDURB",$_POST['msg'],$variavel->_EMAILINSTITUICAO);

} else {
    header('location:./');
}
include($raiz . "files/php/javascript.php");


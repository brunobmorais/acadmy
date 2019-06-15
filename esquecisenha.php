<?php
$raiz = str_repeat("../", $level = 0);

include($raiz . "files/php/includes.php");

if ($sessao->pegarCampo("EMAIL")!="") {
    $sessao->apagaSessao();
}

?>

<? include($raiz . "files/php/header.php") ?>

<div class="content-login">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand in-left"">
                        <a href="./login.php"> <img src="<?=$raiz?>files/img/logo-preto.png" height="60px"/></a>
                        </div>

                        <div class="card card-primary in-down">
                            <div class="card-header"><h4>Esqueci a senha</h4></div>

                            <div class="card-body">
                                <p class="text-muted">Vamos enviar um link para redefenir sua senha</p>
                                <form action="action.php" method="post">
                                    <div class="form-group">
                                        <label for="email" class="d-block">CPF
                                            <div class="float-right">
                                                <a href="login.php">
                                                    Fazer Login
                                                </a>
                                            </div>
                                        </label>
                                        <input id="cpf" type="text" onkeyup="mascara(this, mcpf);" class="form-control"
                                               name="cpf" tabindex="1" required autofocus maxlength="14">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block font-weight-bold btn-round" tabindex="4">
                                            Recuperar Senha
                                        </button>
                                        <input type="hidden" id="acao" name="acao" value="recuperar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<? include($raiz . "files/php/rodape.php") ?>
<? include($raiz . "files/php/javascript.php") ?>

<?php
$raiz = str_repeat("../", $level = 0);

include($raiz . "files/php/includes.php");
if (!empty($codServidorSessao)) {
    $sessao->apagaSessao();
    $codServidorSessao = '';
}
include($raiz . "files/php/header.php"); ?>

<div class="content-login">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand in-left" >
                            <h3><?=$variavel->_SIGLAINSTITUICAO?></h3>
                        </div>

                        <div class="card card-primary in-up" id="cadastroLogin">
                            <div class="card-header"><h4>Login</h4></div>
                            <div class="card-body">
                                <form class="needs-validation" novalidate>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus/>
                                        <div class="invalid-feedback">
                                            Digite o email!
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="d-block">Senha
                                            <div class="float-right">
                                                <a href="esquecisenha.php" class="text-small">
                                                    Esqueceu a senha?
                                                </a>
                                            </div>
                                        </label>
                                        <input id="senha" type="password" class="form-control" name="senha" tabindex="2"
                                               required>
                                        <div class="invalid-feedback">
                                            Digite a senha
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="button" class="btn btn-lg btn-primary btn-round btn-block font-weight-bold" tabindex="4"
                                                onclick="login();">
                                            Entrar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center in-down">
                            Não possui conta? <a href="cadastro.php">Cadastrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<? include($raiz . "files/php/rodape.php") ?>



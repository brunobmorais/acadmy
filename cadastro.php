<?php
$raiz = str_repeat("../", $level = 0);

include($raiz . "files/php/includes.php");

if ($sessao->pegarCampo("EMAIL") != "") {
    $sessao->apagaSessao();
}
include($raiz . "files/php/header.php") ?>

<div class="content-login">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <div class="login-brand in-left">
                            <h3><?=$variavel->_SIGLAINSTITUICAO?></h3>
                        </div>

                        <div class="card card-primary in-down">
                            <div class="card-header"><h4>Cadastro</h4></div>

                            <div class="card-body">
                                <form action="action.php" method="post">
                                    <div class="form-group">
                                        <label for="frist_name">Nome</label>
                                        <input id="nome" type="text" class="form-control" name="nome"
                                               placeholder="Seu nome" autofocus>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email"
                                               placeholder="Email">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cpf">CPF</label>
                                        <input id="cpf" type="text" class="form-control" name="cpf" autofocus>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cpf">Data nascimento</label>
                                        <input id="datanascimento" type="text" class="form-control"
                                               name="datanascimento" autofocus>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="password" class="d-block">Senha</label>
                                            <input id="cdsenha" type="password" class="form-control" name="cdsenha">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="cdrptsenha" class="d-block">Repita a senha</label>
                                            <input id="cdrptsenha" type="password" class="form-control"
                                                   name="cdrptsenha">
                                        </div>
                                    </div>

                                    <!--<div class="form-divider">
                                        Your Home
                                    </div>-->

                                    <!--<div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                            <label class="custom-control-label" for="agree">I </label>
                                        </div>
                                    </div>-->

                                    <input type="hidden" id="acao" name="acao" value="cadastrar">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block btn-round">
                                            Cadastrar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <? include($raiz . "files/php/rodape.php") ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<? include($raiz . "files/php/javascript.php") ?>


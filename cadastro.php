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
                            <a href="./login.php"> <img src="<?=$raiz?>files/img/logo-preto.png" height="60px"/></a>
                        </div>

                        <div class="card card-primary in-up" id="telaSelecionaTipo">
                            <div class="card-header"><h4>O que você é?</h4></div>
                            <div class="card-body">
                                <div class="form-group mt-4">
                                    <button type="button" class="btn btn-lg btn-primary btn-round btn-block font-weight-bold" tabindex="4"
                                            onclick="clickTelaCpf();">
                                        Aluno
                                    </button>
                                </div>
                                <div class="form-group mt-4">
                                    <button type="button" class="btn btn-lg btn-primary btn-round btn-block font-weight-bold" tabindex="4"
                                            onclick="clickTelaCnpj();">
                                        Instituição
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card card-primary in-up" id="telaCpf" style="display: none">
                            <div class="card-header"><h4>Qual seu CPF?</h4></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="cpf">CPF</label>
                                    <input id="cpf" type="text" class="form-control" name="cpf" autofocus>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nomemae">Nome da mãe</label>
                                    <input id="nomemae" type="text" class="form-control" name="nomemae" autofocus>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group mt-4">
                                    <button type="button" class="btn btn-lg btn-outline-primary btn-round font-weight-bold" tabindex="4"
                                            onclick="clickSelecionaTipo();">
                                        Voltar
                                    </button>
                                    <button type="button" class="btn btn-lg btn-primary btn-round font-weight-bold float-right" tabindex="4"
                                            onclick="clickTelaDadosCpf();">
                                        Avançar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card card-primary in-up" id="telaCnpj" style="display: none">
                            <div class="card-header"><h4>Qual seu CNPJ?</h4></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="cnpj">CNPJ</label>
                                    <input id="cnpj" type="text" class="form-control" name="cnpj" autofocus>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group mt-4">
                                    <button type="button" class="btn btn-lg btn-outline-primary btn-round font-weight-bold" tabindex="4"
                                            onclick="clickSelecionaTipo();">
                                        Voltar
                                    </button>
                                    <button type="button" class="btn btn-lg btn-primary float-right btn-round font-weight-bold" tabindex="4"
                                            onclick="clickTelaDadosCnpj();">
                                        Avançar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card card-primary in-up" id="telaDadosCnpj" style="display: none">
                            <div class="card-header"><h4>Confirme as informações</h4></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="email">Dados da Instituição</label>
                                    <p>Faculdade tal, endereço tal</p>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control" name="email" autofocus>
                                    <div class="invalid-feedback">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="d-block">Senha</label>
                                    <input id="senha" type="password" class="form-control" name="senha">
                                </div>
                                <div class="form-group mt-4">
                                    <button type="button" class="btn btn-lg btn-outline-primary btn-round font-weight-bold" tabindex="4"
                                            onclick="clickTelaCnpj();">
                                        Voltar
                                    </button>
                                    <button type="button" class="btn btn-lg btn-primary btn-round font-weight-bold float-right" tabindex="4"
                                            onclick="login();">
                                        Cadastrar
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card card-primary in-down" id="telaDadosAlunos" style="display: none">
                            <div class="card-header"><h4>Cadastro</h4></div>

                            <div class="card-body">
                                <form action="action.php" method="post">
                                    <div class="form-group">
                                        <label for="frist_name">Nome</label>
                                        <p>Fulano de tal</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="frist_name">Instituição</label>
                                        <p>Colégio Estadual de tal, 3º ano, Matutino</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email"
                                               placeholder="Email">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="d-block">Senha</label>
                                        <input id="senha" type="password" class="form-control" name="senha">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Curso de interesse</label>
                                        <input id="email" type="email" class="form-control" name="email"
                                               placeholder="Email">
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <input type="hidden" id="acao" name="acao" value="cadastrar">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-lg btn-outline-primary btn-round font-weight-bold" tabindex="4"
                                                onclick="clickTelaCpf();">
                                            Voltar
                                        </button>
                                        <button type="button" class="btn btn-primary btn-round float-right" onclick="login();">
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

<script>


    function desapareceTodas() {
        $("#telaSelecionaTipo").css("display","none");
        $("#telaCnpj").css("display","none");
        $("#telaCpf").css("display","none");
        $("#telaDadosAlunos").css("display","none");
        $("#telaDadosCnpj").css("display","none");
    }

    function clickSelecionaTipo() {
        desapareceTodas();
        $( "#telaSelecionaTipo" ).fadeIn( "slow", function() {
            // Animation complete.
        });
    }

    function clickTelaCpf(){
        desapareceTodas()
        $( "#telaCpf" ).fadeIn( "slow", function() {
            // Animation complete.
        });
    }

    function clickTelaCnpj(){
        desapareceTodas()
        $( "#telaCnpj" ).fadeIn( "slow", function() {
            // Animation complete.
        });
    }

    function clickTelaDadosCnpj(){
        desapareceTodas()
        $( "#telaDadosCnpj" ).fadeIn( "slow", function() {
            // Animation complete.
        });
    }

    function clickTelaDadosCpf(){
        desapareceTodas()
        $( "#telaDadosAlunos" ).fadeIn( "slow", function() {
            // Animation complete.
        });
    }

</script>


<?php
$raiz = str_repeat("../", $level = 0);

include($raiz . "files/php/includes.php");

if ($sessao->pegarCampo("EMAIL")!="") {
    $sessao->apagaSessao();
}

include($raiz . "files/php/header.php") ?>


<body>
<div class="content-login">
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand in-left">
                            <h3><?=$variavel->_SIGLAINSTITUICAO?></h3>
                        </div>

                        <div class="card card-primary in-down">
                            <div class="card-header"><h4>Cadastrar nova senha</h4></div>

                            <div class="card-body">
                                <!--<p class="text-muted">Cadastre sua nova senha</p>-->
                                <form role="form" action="action.php" method="post">
                                    <input type="hidden" id="codservidor" name="codservidor" value="<?=$_GET["id"]?>">
                                    <input type="hidden" id="token" name="token" value="<?= $_GET["token"]?>">
                                    <div class="form-group">
                                        <label for="password">Nova Senha</label>
                                        <input id="cdsenha" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="cdsenha" tabindex="2" required>
                                        <div id="pwindicator" class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password-confirm">Confirme a senha</label>
                                        <input id="cdrptsenha" type="password" class="form-control" name="cdrptsenha" tabindex="2" required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block font-weight-bold btn-round" tabindex="4">Salvar</button>
                                        <input type="hidden" id="acao" name="acao" value="novasenha">
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
</body>
<? include($raiz . "files/php/rodape.php") ?>
<? include($raiz . "files/php/javascript.php") ?>


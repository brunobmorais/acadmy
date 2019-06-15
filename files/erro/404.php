<? $raiz = str_repeat("../", $level = 1);

include($raiz . "files/php/includes.php");
include($raiz . "files/php/header.php");

?>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="page-error">
                <div class="page-inner">
                    <h1>404</h1>
                    <div class="page-description">
                        A página que você estava procurando não pôde ser encontrada.
                    </div>
                    <div class="page-search">
                        <form action="http://www.google.com.br/search" method="get">
                            <div class="form-group floating-addon">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="ion ion-search"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Buscar" name="q">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">
                                            Buscar
                                        </button>
                                    </div>
                                </div>

                        </form>
                    </div>
                    <div class="mt-3">
                        <a href="../">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<? include($raiz . "files/php/rodape.php") ?>
<? include($raiz . "files/php/javascript.php") ?>

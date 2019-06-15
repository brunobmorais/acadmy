<?php
$raiz = str_repeat("../", $level = 0);

include($raiz . "files/php/protege.php");
include($raiz . "files/php/includes.php");
include($raiz . "files/php/header.php");
include($raiz . "files/php/topo.php"); ?>

<!--CONSULTA SQL-->

<div class="container meu-container">
    <section class="section">
        <div class="section-body">
            <div class="col-12">
                <form method="post" class="needs-validation" novalidate="">
                    <div class="card">
                        <div class="card-header">
                            <h4>Enviar email expresso</h4>
                            Destinatário: 301 Acadêmicos
                        </div>
                        <div class="card-body pb-0">
                            <div class="form-group">
                                <label>Titulo</label>
                                <input type="text"
                                       value="Você foi selecionado para estudar na Fasec sem necessidade do vestibular."
                                       name="title" class="form-control" required="">
                                <div class="invalid-feedback">
                                    Insira um titulo
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Conteudo</label>
                                <textarea class="form-control" style="height: 150px !important;">
                                    Querido acadêmico, temos o maior prazer em informá-lo que você conseguiu
                                    uma vaga para o curso de Direito, e o melhor, com 10% de desconto.

                                    Não deixe essa oportunidade para depois.
                                </textarea>
                            </div>
                        </div>
                        <div class="card-footer pt-0">
                            <button class="btn btn-primary">Enviar Email</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<? include($raiz . "files/php/rodape.php") ?>

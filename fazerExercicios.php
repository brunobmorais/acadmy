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
            <!--<h2 class="section-title">This is Example Page</h2>
            <p class="section-lead">This page is just an example for you to create your own page.</p>-->
            <h3 class="tituloMovel"><img src="<?=$raiz?>files/img/logo-preto.png" height="40px"/></h3>
            <h2 class="section-title">Exercícios de Humanas</h2>
            <p class="section-lead">História, Geografia, Filosofia e Sociologia.</p>
            <div class="row">
               <div class="col-12 col-sm-6 float-left">
                   <div class="form-group">
                       <div class="control-label">São escolas helenísticas de filosofia:</div>
                       <div class="custom-switches-stacked mt-2">
                           <label class="custom-switch">
                               <input type="radio" name="option" value="1" class="custom-switch-input" checked>
                               <span class="custom-switch-indicator"></span>
                               <span class="custom-switch-description">O ecletismo, o atomismo e o socratismo.</span>
                           </label>
                           <label class="custom-switch">
                               <input type="radio" name="option" value="2" class="custom-switch-input">
                               <span class="custom-switch-indicator"></span>
                               <span class="custom-switch-description">O pitagorismo, o ecletismo e o epicurismo.</span>
                           </label>
                           <label class="custom-switch">
                               <input type="radio" name="option" value="3" class="custom-switch-input">
                               <span class="custom-switch-indicator"></span>
                               <span class="custom-switch-description">O ecletismo, o estoicismo e o epicurismo.</span>
                           </label>
                           <label class="custom-switch">
                               <input type="radio" name="option" value="3" class="custom-switch-input">
                               <span class="custom-switch-indicator"></span>
                               <span class="custom-switch-description">O ecletismo, o estoicismo e o epicurismo.</span>
                           </label>
                           <label class="custom-switch">
                               <input type="radio" name="option" value="3" class="custom-switch-input">
                               <span class="custom-switch-indicator"></span>
                               <span class="custom-switch-description">O ecletismo, o estoicismo e o epicurismo.</span>
                           </label>
                       </div>
                   </div>
               </div>

            </div>
        </div>
    </section>
</div>
<? include($raiz . "files/php/rodape.php") ?>

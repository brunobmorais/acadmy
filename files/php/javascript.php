<!--BIBLIOTECA JQUERY-->
<script src="<?=$raiz?>files/plugin/stisla/modules/jquery.min.js"></script>
<!--ARQUIVO DO BOOSTRAP 4-->
<script type="text/javascript" src="<?=$raiz?>files/plugin/stisla/modules/popper.js"></script>
<script type="text/javascript" src="<?=$raiz?>files/plugin/stisla/modules/tooltip.js"></script>
<!--ARQUIVO DO BOOSTRAP 4-->
<script type="text/javascript" src="<?=$raiz?>files/plugin/stisla/modules/bootstrap/js/bootstrap.min.js"></script>
<!--SCRIPT NICESCROLL-->
<script src="<?=$raiz?>files/plugin/stisla/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?=$raiz?>files/plugin/stisla/modules/moment.min.js"></script>
<script src="<?=$raiz?>files/plugin/stisla/js/stisla.js"></script>
<!--PLUGINS-->
<script src="<?=$raiz?>files/plugin/stisla/modules/izitoast/js/iziToast.min.js"></script>
<script src="<?=$raiz?>files/plugin/stisla/js/scripts.js"></script>

<!--SCRIPTS PESSOAIS COM FUNÇÕES-->
<script src="<?=$raiz?>files/js/style.js"></script>

<!--VERIFICA SE POSSUI O ARQUIVO LIB.JS-->
<? if (file_exists("lib.js")) { ?>
    <script type="text/javascript" src="lib.js"></script>
<? } ?>

<!--MOSTRAR MENSAGEM-->
<?=$alertaMsgRecebida?>

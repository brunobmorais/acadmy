<? $raiz = str_repeat("../", $level = 1);

include($raiz . "files/php/includes.php");
include($raiz . "files/php/header.php");

?>

  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="page-error">
          <div class="page-inner">
            <h1>403</h1>
            <div class="page-description">
                Você não tem acesso a esta página.
            </div>
            <div class="page-search">
              <div class="mt-3">
                <a href="../">Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<? include($raiz . "files/php/rodape.php") ?>
<? include($raiz . "files/php/javascript.php") ?>
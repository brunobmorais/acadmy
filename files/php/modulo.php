<?
/**
 * CAPTURA O ENDERE�O DA P�GINA
 */
$dir1 = getcwd();
$dir2 = explode("/", $dir1);
$menu = true;

if (count($dir2) == 1) {
    /**
     * EM ALGUNS CASO A BARRA USADA � A BARRA INVERTIDA
     */
    $dir2 = explode(chr(92), $dir1);
}

for ($i=0;$i<count($dir2);$i++){
    if ($dir2[$i]=='mods') {
        $menu = false;
        $pastaModulo = $dir2[$i+1]; //PEGA NOME DO MODULO
        $pastaServico = $dir2[$i+2]; //PEGA NOME DO SERVI�O
        $pastaSubServico = $dir2[$i+3]; //PEGA NOME DO SERVI�O
    }
}

if ($menu == false) {
    if ($pastaModulo != "" && $pastaServico == null && $pastaSubServico == null) {
        /**
         * PEGAR INFORMA��ES DO MODULO
         */
        $sql = "SELECT M.* FROM SIS_PRIVILEGIO AS P
            INNER JOIN SIS_USUARIO AS A ON (A.CODUSUARIO=P.CODUSUARIO)
            INNER JOIN SIS_SUBSERVICO AS SS ON (SS.CODSUBSERVICO=P.CODSUBSERVICO)
            INNER JOIN SIS_SERVICO AS S ON (S.CODSERVICO = SS.CODSERVICO)
            INNER JOIN SIS_MODULO AS M ON (M.CODMODULO = S.CODMODULO)
            WHERE M.SITUACAO = '1' AND M.EXCLUIDO=0 
            AND S.SITUACAO = '1' AND M.EXCLUIDO=0
            AND A.EXCLUIDO=0
            AND P.CODUSUARIO = '" . $sessao->pegarCampo("CODUSUARIO") . "'
            AND M.PASTA = '" . $pastaModulo . "'";

        //echo $sql; exit;

        $buscaModulo = $banco->executeQuery($sql);
        $modulo = $banco->pegarCampos($buscaModulo);
        $moduloCodModulo = $modulo[0]->CODMODULO;
        $moduloNomeModulo = $modulo[0]->NOME;
        $moduloImagemModulo = $modulo[0]->IMAGEM;

        $variavel->_TITULO_BROWSER = $moduloNomeModulo;

        $moduloTituloPagina = $moduloNomeModulo;
        $moduloImagem = $moduloImagemModulo;


        if (count($modulo) == 0) {
            /**
             * USU�RIO SEM PRIVIL�GIO PARA ACESSAR O M�DULO
             */
            header("location:" . $raiz . "./");
        } else {
            $variavel->_BARRA_NAVEGACAO = "<div class='section-header-breadcrumb'><div class='breadcrumb-item'><a href='$raiz'>Inicio</a></div></div>";
        }
    } else if ($pastaModulo != "" && $pastaServico != "" && $pastaSubServico == null) {
        /**
         * PEGAR INFORMA��ES DO SERVI�O
         */
        $sql = "SELECT M.NOME AS NOMEMODULO, M.PASTA AS PASTAMODULO, S.PASTA AS PASTASERVICO, S.NOME AS NOMESERVICO, S.CODMODULO, S.CODSERVICO FROM SIS_PRIVILEGIO AS P
            INNER JOIN SIS_USUARIO AS A ON (A.CODUSUARIO=P.CODUSUARIO)
            INNER JOIN SIS_SUBSERVICO AS SS ON (SS.CODSUBSERVICO=P.CODSUBSERVICO)
            INNER JOIN SIS_SERVICO AS S ON (S.CODSERVICO = SS.CODSERVICO)
            INNER JOIN SIS_MODULO AS M ON (M.CODMODULO = S.CODMODULO)
            WHERE M.SITUACAO = '1' AND M.EXCLUIDO=0 
            AND S.SITUACAO = '1' AND M.EXCLUIDO=0
            AND A.EXCLUIDO=0
            AND P.CODUSUARIO = '" . $sessao->pegarCampo("CODUSUARIO") . "'
            AND M.PASTA = '" . $pastaModulo . "'
            AND S.PASTA = '" . $pastaServico . "'";


        $buscaModulo = $banco->executeQuery($sql);
        $modulo = $banco->pegarCampos($buscaModulo);
        $moduloNomeModulo = $modulo[0]->NOMEMODULO;
        $moduloNomeServico = $modulo[0]->NOMESERVICO;
        $moduloCodModulo = $modulo[0]->CODMODULO;
        $moduloCodServico = $modulo[0]->CODSERVICO;

        $variavel->_TITULO_BROWSER = $moduloNomeServico;

        $moduloTituloPagina = $moduloNomeServico;
        $moduloImagem = "flaticon-app";


        if (count($modulo) == 0) {
            /**
             * USU�RIO SEM PRIVIL�GIO PARA ACESSAR O M�DULO
             */
            header("location:" . $raiz . "./");
        } else {
            $variavel->_BARRA_NAVEGACAO = "<div class='section-header-breadcrumb'><div class='breadcrumb-item'><a href='$raiz'>Inicio</a></div><div class='breadcrumb-item'><a href='" . $raiz . "mods/" . $modulo[0]->PASTAMODULO . "'>" . $modulo[0]->NOMEMODULO . "</a></div></div>";
        }
    } else if ($pastaModulo != "" && $pastaServico != "" && $pastaSubServico != "") {
        /**
         * PEGAR INFORMA��ES SUBSERVI�O
         */
        $sql = "SELECT M.NOME AS NOMEMODULO, M.PASTA AS PASTAMODULO, S.CODSERVICO, S.PASTA AS PASTASERVICO, S.NOME AS NOMESERVICO, SS.NOME AS NOMESUBSERVICO, SS.PASTA AS PASTASUBSERVICO, SS.CODSUBSERVICO FROM SIS_PRIVILEGIO AS P
            INNER JOIN SIS_USUARIO AS A ON (A.CODUSUARIO=P.CODUSUARIO)
            INNER JOIN SIS_SUBSERVICO AS SS ON (SS.CODSUBSERVICO=P.CODSUBSERVICO)
            INNER JOIN SIS_SERVICO AS S ON (S.CODSERVICO = SS.CODSERVICO)
            INNER JOIN SIS_MODULO AS M ON (M.CODMODULO = S.CODMODULO)
            WHERE M.SITUACAO = '1' AND M.EXCLUIDO=0 
            AND S.SITUACAO = '1' AND M.EXCLUIDO=0
            AND A.EXCLUIDO=0
            AND P.CODUSUARIO = '" . $sessao->pegarCampo("CODUSUARIO") . "'
            AND M.PASTA = '" . $pastaModulo . "'
            AND S.PASTA = '" . $pastaServico . "'
            AND SS.PASTA = '" . $pastaSubServico . "'";

        $buscaModulo = $banco->executeQuery($sql);
        $modulo = $banco->pegarCampos($buscaModulo);
        $moduloNomeModulo = $modulo[0]->NOMEMODULO;
        $moduloNomeServico = $modulo[0]->NOMESERVICO;
        $moduloNomeSubServico = $modulo[0]->NOMESUBSERVICO;
        $moduloCodModulo = $modulo[0]->CODMODULO;
        $moduloCodSubServico = $modulo[0]->CODSUBSERVICO;
        $moduloCodServico = $modulo[0]->CODSERVICO;

        $variavel->_TITULO_BROWSER = $moduloNomeSubServico;

        $moduloTituloPagina = $moduloNomeSubServico;
        $moduloImagem = "flaticon-list";

        if (count($modulo) == 0) {
            /**
             * USU�RIO SEM PRIVIL�GIO PARA ACESSAR O M�DULO
             */
            header("location:" . $raiz . "./");
        } else {
            $variavel->_BARRA_NAVEGACAO = "<div class='section-header-breadcrumb'><div class='breadcrumb-item'><a href='$raiz'>Inicio</a></div><div class='breadcrumb-item'><a href='" . $raiz . "mods/" . $modulo[0]->PASTAMODULO . "'>" . $modulo[0]->NOMEMODULO . "</a></div><div class='breadcrumb-item active'><a href='" . $raiz . "mods/" . $modulo[0]->PASTAMODULO . "/" . $modulo[0]->PASTASERVICO . "'>" . $modulo[0]->NOMESERVICO . "</a></div><div class='breadcrumb-item active'>" . $modulo[0]->NOMESUBSERVICO . "</div></div>";
        }
    } else {
        header("location:" . $raiz . "./");
    }
}

?>

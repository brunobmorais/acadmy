<?
/**
 * Classe que cria e exibe uma grid com dados MySQL
 *
 * @author Bruno Roberto Gomes
 * @version 05 abr 2007, 11h28
 * @copyright brgomes.com
 */


/**
 * EXEMPLO DE STYLE PARA A GRID
 */
class grid
{
    /**
     * n?mero padr?o de itens por p?gina
     * @param integer $nitens
     */
    var $nitens = 20;
    /**
     * n?mero de itens por p?gina
     * @param integer $qtde
     */
    var $qtde;
    /**
     * @param array $headers_name
     */
    var $headers_name;
    /**
     * @param array $headers_width
     */
    var $headers_width;
    /**
     * @param boolean $has_checkbox
     */
    var $has_checkbox = true;
    /**
     * @param boolean $has_img
     */
    var $has_img = false;
    /**
     * @param string $checkbox_name
     */
    var $checkbox_name;
    /**
     * @param string $total_label
     */
    var $total_label;
    /**
     * @param integer $total
     */
    var $total;
    /**
     * @param string $msg_zero
     */
    var $msg_zero="<i class='far fa-frown pt-2 pb-2' style='font-size: 48px'></i><br><h6>Nenhuma informação encontrada!</h6>";
    /**
     * @param integer $cor
     */
    var $cor = 0;
    /**
     * p?gina atual
     * @param integer $page
     */
    var $pg;
    /**
     * quantidade total de p?ginas
     * @param integer $npages
     */
    var $npages;
    /**
     * primeiro registro a ser exibido
     * @param integer $inicio
     */
    var $inicio;

    var $fim;

    /**
     * @param string $raiz
     */
    var $raiz;
    /**
     * @param string $busca
     */
    var $busca = array();
    /**
     * @param string $busca2
     */
    var $busca2;
    /**
     * @param string $sucess
     */
    var $sucess;
    /**
     * @param string $pagegrid
     */
    var $pagegrid = "grid.php";
    /**
     * @param boolean $showDeleteButton
     */
    var $showDeleteButton = true;
    /**
     * @param integer $linhas
     */
    var $linhas;
    /**
     * @param array $espacos
     */
    var $espacos = array("0", "190", "170", "150", "130", "110", "90", "70", "50", "30");
    /**
     * @param string $link_seta
     */
    var $link_seta;

    var $botoes=true;


    function defineVars($page, $raiz, $rows)
    {
        $this->raiz = $raiz;
        $this->total = $rows;
        //$this->mod = $mod;

        if (($page == "") or ($page == "0")) {
            $this->pg = 1;
        } else {
            $this->pg = $page;
        }

        $this->npages = floor($this->total / $this->nitens);

        if ((($this->total % $this->nitens) > 0) or ($this->npages == 0)) {
            $this->npages++;
        }

        if ($this->pg > $this->npages) {
            $this->pg = 1;
        }

        $this->inicio = ($this->pg - 1) * $this->nitens;
        $this->fim = $this->inicio + $this->nitens;

        //$this->busca2 = htmlentities(str_replace("'", "'", $this->busca));
    }


    function addHeader()
    {
        if ($this->sucess <> "") {
            echo "<p class='sucess' style='margin-bottom:10px'>" . $this->sucess . "</p>";
        }

        $this->linhas = 0;

        echo "<div class='table-responsive'>\n";
        echo "<div id='no-more-tables'>\n";
        echo "<table class='table table-striped' id='table-1'>\n";
        echo "<thead class='cf'>\n";
        echo "<tr>\n";


    $i = 0;
        if ($this->has_checkbox) {
            echo "<th><div class=\"custom-checkbox custom-control\"><input style='width:" . $this->headers_width[$i] . "%' onclick='selectAll(\"checkbox\")' type=\"checkbox\" data-checkboxes=\"mygroup\" data-checkbox-role=\"dad\" class=\"custom-control-input\" id='ckbselectall'><label for='ckbselectall' class=\"custom-control-label\">&nbsp;</label></div></th>\n";
            $i++;
        }

        for ($i = $i; $i < count($this->headers_name); $i++) {
            if (($i == count($this->headers_name) - 2) and ($this->has_img)) {
                echo "<th style='width:" . $this->headers_width[$i] . "%; border-right:0'>" . $this->headers_name[$i] . "</th>\n";
            } else {
                echo "<th class=\"actions\" style='width:" . $this->headers_width[$i] . "%'>" . $this->headers_name[$i] . "</th>\n";
            }
        }
        echo "</tr>\n";
        echo "</thead>\n";

        // fim do header


        // adiciona o vazio se a consulta retorna vazio
        if ($this->total == 0) {
            $this->addNull();
        }
    }


    function addNull()
    {
        echo "<tr>\n";
        echo "<td class=\"text-center visible-xs\" style=\"padding-bottom: 30px \" colspan='" . count($this->headers_name) . "'>" . $this->msg_zero . "</td>\n";
        echo "</tr>\n";
    }


    function addLine($data, $style = "")
    {
        $class_lines = array(0 => "par", 1 => "impar");

        echo "<tr id='linec" . $this->linhas . "' style='" . $style . "'>\n";

        // contador de colunas
        $j = 0;

        // escreve o checkbox, com seu nome e valor, caso houver
        if ($this->has_checkbox) {
            echo "<td data-title='Selecione' style='width:" . $this->headers_width[$j] . "%'><div class=\"custom-checkbox custom-control\"><input type=\"checkbox\" value='" . $data[$j] . "' id='c" . $this->linhas . "' onclick='changeColor(this, " . $this->linhas . ")' data-checkboxes=\"mygroup\" class=\"custom-control-input\"><label for='c" . $this->linhas . "' class=\"custom-control-label\">&nbsp;</label></div></td>\n";
            $class = "";

            // incrementa o $j para entrar o for a partir do segundo registro
            $j++;
        } else {
            $class = '';
        }

        // escreve os valores, vindos do banco de dados
        for ($j = $j; $j < count($data); $j++) {
            $this->link = str_replace("'", '', $this->link);

            if (($this->has_img) and ($j == count($data) - 1)) {
                echo "<td data-title='".$this->headers_name[$j]."' class='" . $class . "' style='width:" . $this->headers_width[$j] . "%'>" . $data[$j] . "</td>\n";
            } else {
                echo "<td data-title='".$this->headers_name[$j]."' class='" . $class . ($this->botoes==true && $j==count($data)-1?'visible-xs':'')."' style='width:" . $this->headers_width[$j] . "%'>" . $data[$j] . "</td>\n";
            }
        }

        // fecha a linha
        echo "</tr>";

        $this->cor = 1 - $this->cor;
        $this->linhas++;
    }


    function addFooter()
    {
        /**
         * ADICIONA A LINHA EM BRANCO PARA GRID COM MENOS DE 10 ITENS
         */
        if (($this->linhas > 0) and ($this->linhas < 10)) {
            echo "<tr>";
            echo "<td style='height:" . $this->espacos[$this->linhas] . "px' class='espaco' colspan='" . count($this->headers_name) . "'></td>";
            echo "</tr>";
        }


        // fim da linha do rodap?

        // fim da grid
        echo "</table></div></div>\n";

        echo "<form action='' method='get' style='margin:0'><div>\n";
        //echo "<input type='hidden' name='busca' value=\"".$this->busca2."\" />\n";
        echo "<input type='hidden' id='pg' name='pg' value='" . $this->pg . "' />";
        foreach ($this->busca as $key => $value) {
            echo "<input type='hidden' name='" . $key . "' value=\"" . htmlentities(stripslashes($value)) . "\" />\n";
        }
        echo "<div class=\"card-footer row pt-0\">\n";
        echo "<div class='text-left col-4 pt-2'><p class=\"font-weight-bold\">Total: ".$this->total."</p></div>\n";
        echo "<div class='text-center col-4 pt-2'><p class=\"font-weight-bold\">Pg: ". $this->pg."/".$this->npages."</p></div>\n";
        echo "<div class='text-right col-4'>\n";
        echo "<nav class=\"d-inline-block\">
                      <ul class=\"pagination mb-0\">
                        <li class='align-middle pt-2'><p class='h6'></p></li>
                        <li class='page-item ".($this->pg==1?'disabled':'')."'>
                          <a class=\"page-link\" href=\"#\" onclick=location.href='" . $_SERVER['PHP_SELF'] . "?" . str_replace("'", "\'", $this->link_seta) . "pg=" . ($this->pg - 1) . "' tabindex=\"-1\"><i class=\"fas fa-chevron-left\"></i></a>
                        </li>
                        <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">".$this->pg."<span class=\"sr-only\">(current)</span></a></li>
                        <li class='page-item ".($this->pg==$this->npages?'disabled':'')."'>
                          <a class=\"page-link\" href=\"#\" onclick=location.href='" . $_SERVER['PHP_SELF'] . "?" . str_replace("'", "\'", $this->link_seta) . "pg=" . ($this->pg + 1) . "'><i class=\"fas fa-chevron-right\"></i></a>
                        </li>
                      </ul>
              </nav>\n";
        echo "</div>
              </div>\n";
        echo "</form>\n";
    }
}

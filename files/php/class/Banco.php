<?php
/**  
 * CLASSE BANCO
 *  Esta classe faz conexão com o banco de dados mysql utilizando o pdo
 * 
 *  @author Bruno Morais <brunomoraisti@gmail.com> 
 *  @version 1 
 *  @copyright GPL © 2018, bmorais.com 
 *  @package php  
 *  @subpackage class
 *  @access private
 */ 

class Banco
{

    var $query;
    var $link;
    var $result;
    var $PDO;
    var $db;

    private $con;

    /*var $host = "localhost";
    var $user = "pmcc_idurb";
    var $password = "QO6wg27F|m^(";
    var $database = "pmcc_idurb-intranet";*/

    var $host = "localhost";
    var $user = "root";
    var $password = "";
    var $database = "bmbanco";


    public function __construct()
    {

    }

    public function Banco(){

    }

    /** 
     * FUNÇÃO CONECTAR AO BANCO DE DADOS
     *  
     * @access private 
     * @return $conexao 
     */ 
    public function connect()
    {

        try {
            $this->con = new PDO('mysql:host='.$this->host.';dbname='.$this->database.';charset=utf8', $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8", PDO::MYSQL_ATTR_FOUND_ROWS => true));
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }

        return $this->con;
    }

    /** 
     * FUNÇÃO DESCONECTA DO BANCO DE DADOS
     *  
     * @access private 
     * @return void 
     */ 
    public function disconect(){
        return null;
    }

    /**
     * FUNÇÃOO PARA EXECUTAR SQL
     */
    public function executeQuery($query)
    {
        $this->PDO = $this->connect();

        try {
            $result = $this->PDO->prepare($query);
            $result->execute();
        }
        catch (PDOException $e) {
            echo "Ocorreu um erro ao executar SQL: ".$e->getMessage();
            $result = false;
        }

        $this->PDO = $this->disconect();

        return $result;
    }

    /**
     * FUN��O PARA RETORNAR A QUANTIDADE DE ELEMENTOS DE UM OBJETO SQL
     */
    public function quantidade($result){

        try{
            $result->execute();
            $qtd = $result->rowCount();
            return $qtd;
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }


    }

    /**
     * FUN��O CONSULTA FEITA E RETORNA UM ARRAY DE OBJETOS
     */
    public function pegarCampos($result){

        try{
            $result->execute();
            $dados = $result->fetchAll(PDO::FETCH_OBJ);

            return $dados;
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }


    public function beginTrasaction($conexao){
        $this->PDO = $conexao;

        try {
            $this->PDO->beginTransaction();
        }
        catch (PDOException $e) {
            echo "Ocorreu um erro ao executar SQL: ".$e->getMessage();
        }

    }

    public function commit($conexao){
        $this->PDO = $conexao;

        try {
            $this->PDO->commit();
        }
        catch (PDOException $e) {
            echo "Ocorreu um erro ao executar SQL: ".$e->getMessage();
        }
    }

    public function rollback($conexao){

        $this->PDO = $conexao;

        try {
            $this->PDO->rollBack();;
        }
        catch (PDOException $e) {
            echo "Ocorreu um erro ao executar SQL: ".$e->getMessage();
        }
    }


    /**
     * RETORNAR O ULTIMO ID INSERIDO
     */
    public function ultimoID($conexao){
        $this->PDO = $conexao;

        $ultimo = $this->PDO->lastInsertId();

        return $ultimo;

    }

    public function executeQueryBeginTransation($query,$conexao)
    {
        $this->PDO = $conexao;

        try {
            $result = $this->PDO->prepare($query);
            $result->execute();
        }
        catch (PDOException $e) {
            echo "Ocorreu um erro ao executar SQL: ".$e->getMessage();
            $result = false;
        }

        return $result;
    }
}
?>

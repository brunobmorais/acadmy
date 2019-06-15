<?php

/**
 * FUNÇÕES DO SISTEMA
 *
 * User: Bruno Morais
 * Date: 08/06/2017
 * Time: 09:53
 */

class Funcoes
{

    /**
     * FUNÇÃO GERAR SENHA
     *
     * @return String
     */
    function geraSenha($tamanho = 8, $maiusculas = true, $minuscula = true, $numeros = true, $simbolos = false)
    {
        $lmin = 'abcdefghijklmnopqrstuvwxyz';
        $lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $num = '1234567890';
        $simb = '!@#$%*-';
        $retorno = '';
        $caracteres = '';
        if ($minuscula) $caracteres .= $lmin;
        if ($maiusculas) $caracteres .= $lmai;
        if ($numeros) $caracteres .= $num;
        if ($simbolos) $caracteres .= $simb;
        $len = strlen($caracteres);
        for ($n = 1; $n <= $tamanho; $n++) {
            $rand = mt_rand(1, $len);
            $retorno .= $caracteres[$rand - 1];
        }
        return $retorno;
    }

    /**
     * FUNÇÃO PEGAR DATA ATUAL NO FORMATO DO BANCO DE DADOS
     *
     * @return false|string
     */
    function pegarDataAtualBanco(){
        date_default_timezone_set("America/Araguaina");
        return date("Y-m-d H:i:s");
    }

    /**
     * FUNÇÃO PARA FORMATAR A DATA RECEBIDA NO FORMATO DO USUÁRIO
     *
     * @param $data
     * @return string
     */
    function transformaDataUsuario($data){
        date_default_timezone_set("America/Araguaina");
        $dataformatada = new DateTime($data);
        return $dataformatada->format('d/m/Y');
    }

    /**
     * FUNÇÃO PARA FORMATAR A DATA E HORA NO FORMATO DO USUÁRIO
     *
     * @param $data
     * @return string
     */
    function transformaDataHoraUsuario($data){
        date_default_timezone_set("America/Araguaina");
        $dataformatada = new DateTime($data);
        return $dataformatada->format('d/m/Y H:i:s');
    }

    /**
     * FUNÇÃO ENVIAR EMAIL
     *
     * @param $remetente
     * @param $nomerementente
     * @param $destino
     * @param $titulo
     * @param $msg
     */
    function enviaEmail($remetente, $nomerementente, $destino, $titulo, $msg)
    {
        $headers = "MIME-Version: 1.1\n";
        $headers .= "Content-type: text/html; charset=UTF-8\n";
        $headers .= 'From: ' . $remetente . "\n";
        $headers .= "Reply-To: $remetente\n"; // Endereço (devidamente validado) que o seu usuário informou no contato
        $headers .= "Return-Path: $remetente\n"; // return-path

        $email_message = "<div style='font-family:Verdana'>" . $msg . "<br /><br />Atenciosamente,<br /><br /><b>" . $nomerementente . "</b><br/>------------------------------------------------------------<br/><span style='color:#666666'>Este é um email automático e não precisa ser respondido</span></div>";

        mail($destino, $titulo, $email_message, $headers,"-r".$remetente);

    }

    /**
     * FUNÇÃO PARA ENVIAR EMAL PELA BIBLIOTECA PHPMAILER
     *
     * @param $phpmailer
     * @param $assunto
     * @param $msge
     * @param $email
     * @param string $nome
     * @return bool
     */
    function enviarEmailPHPMailer($phpmailer, $assunto, $msge, $email="idurb@canaadoscarajas.pa.gov.br", $nome = "usuario")
    {

        //CONFIGURAÇÕES DE ENVIO
        $phpmailer->isSMTP();
        $phpmailer->SMTPDebug = 0;
        $phpmailer->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
        $phpmailer->Port = 465;// TCP port to connect to
        $phpmailer->SMTPSecure = 'ssl';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Username = 'contatoidurb@gmail.com';                 // SMTP username
        $phpmailer->Password = 'thmpv77d6f';// SMTP password
        $phpmailer->CharSet = "UTF-8";

        //ASSUNTO EMAIL
        $phpmailer->Subject = $assunto;

        //DESTINATÁRIO
        $phpmailer->setFrom('idurb@canaadoscarajas.pa.gov.br', 'IDURB');
        $phpmailer->addReplyTo('idurb@canaadoscarajas.pa.gov.br', 'IDURB');

        //EMAIL A SER ENVIADO
        $phpmailer->addAddress($email, $nome);     // Add destino

        //CONTEUDO
        $phpmailer->isHTML(true);
        $phpmailer->Body = $msge;

        if (!$phpmailer->send()) {
            //echo "Erro ao enviar email: " . $phpmailer->ErrorInfo;
            //exit;
            return false;
        } else {
            //echo "Email enviado!\n";
            return true;
        }
    }

    /**
     * FUNÇÃO PARA ENVIAR EMAL PELA BIBLIOTECA PHPMAILER
     *
     * @param $phpmailer
     * @param $assunto
     * @param $msge
     * @param $email
     * @param string $nome
     * @return bool
     */
    function enviarEmailGrupoPHPMailer($phpmailer, $assunto, $msge,$arrayEmail)
    {

        //CONFIGURAÇÕES DE ENVIO
        $phpmailer->isSMTP();
        $phpmailer->SMTPDebug = 0;
        $phpmailer->Host = 'smtp.gmail.com';// Specify main and backup SMTP servers
        $phpmailer->Port = 465;// TCP port to connect to
        $phpmailer->SMTPSecure = 'ssl';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Username = 'contatoidurb@gmail.com';                 // SMTP username
        $phpmailer->Password = 'thmpv77d6f';// SMTP password
        $phpmailer->CharSet = "UTF-8";

        //ASSUNTO EMAIL
        $phpmailer->Subject = $assunto;

        //DESTINATÁRIO
        $phpmailer->setFrom('idurb@canaadoscarajas.pa.gov.br', 'IDURB');
        $phpmailer->addReplyTo('idurb@canaadoscarajas.pa.gov.br', 'IDURB');

        //EMAIL A SER ENVIADO
        foreach($arrayEmail as $email) {
            $phpmailer->AddAddress($email);//Adiciona os endereços
        }

        //CONTEUDO
        $phpmailer->isHTML(true);
        $phpmailer->Body = $msge;

        if (!$phpmailer->send()) {
            //echo "Erro ao enviar email: " . $phpmailer->ErrorInfo;
            //exit;
            return false;
        } else {
            //echo "Email enviado!\n";
            return true;
        }
    }

    /**
     * FUNÇÃO FORMATAR DATA PARA BANCO DE DADOS
     *
     */
    function formatDataBanco($date)
    {
        $new = substr($date, 6, 4) . "-" . substr($date, 3, 2) . "-" . substr($date, 0, 2);
        return $new;
    }

    /**
     * FUNÇÃO FORMAR CPF PARA USUARIO
     *
     * @param $cpf
     * @return string
     */
    function formatCPFUsuario($cpf)
    {
        if (strlen($cpf) == 11) {
            if ((strpos($cpf, '.')) or (strpos($cpf, '-'))) {
                return $cpf;
            } else {
                $new = "";

                for ($i = 0; $i < 11; $i++) {
                    if (in_array($i, array(3, 6))) {
                        $new .= ".";
                    }

                    if ($i == 9) {
                        $new .= "-";
                    }

                    $new .= $cpf[$i];
                }

                return $new;
            }
        } else {
            return $cpf;
        }
    }

    /**
     * FORMATAR CPF PARA INSERÇÃO NO BANCO
     *
     * @param $cpf
     * @return mixed
     */
    public function formatCpfBanco($cpf)
    {
        $cpf = str_replace(".", "", $cpf);
        $cpf = str_replace("-", "", $cpf);
        return $cpf;
    }

    /**
     * @param $texto
     * @return mixed
     */
    public function removeCaracteres($texto)
    {
        $texto = str_replace(".", "", $texto);
        $texto = str_replace("-", "", $texto);
        $texto = str_replace("/", "", $texto);
        $texto = str_replace(" ", "", $texto);

        return $texto;
    }


    /**
     * FORMATAR TEXTO PARA INSERÇÃO NO BANCO REMOVENDO ASPAS
     *
     * @param $texto
     * @return string
     */
    public function formatTextoAspasBanco($texto)
    {
        return addslashes($texto);
    }

    /**
     * FORMATA TEXTO COM AS BANCOS PARA USUÁRIO
     *
     * @param $texto
     * @return string
     */
    public function formatTextoAspasUsuario($texto)
    {
        return stripcslashes($texto);
    }

    /**
     * REDIMENSIONAR IMAGENS
     *
     * @param $caminho_imagem
     * @param $extensao
     * @return string
     */
    public function redimensionarImagem($caminho_imagem, $extensao)
    {

        // Retorna o identificador da imagem
        if ($extensao == 'jpeg' || $extensao == 'jpg')
            $imagem = imagecreatefromjpeg($caminho_imagem);
        else if ($extensao == 'png')
            $imagem = imagecreatefrompng($caminho_imagem);
        else if ($extensao == 'gif')
            $imagem = imagecreatefromgif($caminho_imagem);


        // Cria duas variáveis com a largura e altura da imagem
        list($largura, $altura) = getimagesize($caminho_imagem);

        // Nova largura e altura
        $proporcao = 0.6;
        $nova_largura = $largura * $proporcao;
        $nova_altura = $altura * $proporcao;

        // Cria uma nova imagem em branco
        $nova_imagem = imagecreatetruecolor($nova_largura, $nova_altura);

        // Copia a imagem para a nova imagem com o novo tamanho
        imagecopyresampled(
            $nova_imagem, // Nova imagem
            $imagem, // Imagem original
            0, // Coordenada X da nova imagem
            0, // Coordenada Y da nova imagem
            0, // Coordenada X da imagem
            0, // Coordenada Y da imagem
            $nova_largura, // Nova largura
            $nova_altura, // Nova altura
            $largura, // Largura original
            $altura // Altura original
        );

        // Cria a imagem
        if ($extensao == 'jpeg' || $extensao == 'jpg')
            imagejpeg($nova_imagem, $caminho_imagem, 60);
        else if ($extensao == 'png')
            imagepng($nova_imagem, $caminho_imagem, 6);
        else if ($extensao == 'gif')
            imagegif($nova_imagem, $caminho_imagem);

        // Remove as imagens temporárias
        imagedestroy($imagem);
        imagedestroy($nova_imagem);

        return $caminho_imagem;
    }

    /**
     * FUNÇÃO ENVIAR IMAGEM
     *
     * @param $destinoFoto
     * @param $foto
     * @param $fotoAtual
     *
     * @return string
     */
    function enviaImagem($foto, $destinoFoto, $fotoAtual)
    {


        // Se não houver nenhum erro

        // Pega extensão da imagem
        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

        // Gera um nome único para a imagem
        $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

        // Caminho de onde ficará a imagem
        $caminho_imagem = $destinoFoto . "" . $nome_imagem;

        // Faz o upload da imagem para seu respectivo caminho
        move_uploaded_file($this->redimensionarImagem($foto["tmp_name"], $ext[1]), $caminho_imagem);

        //REMOVE IMAGEM ANTIGA
        if ($fotoAtual <> "padrao.png") {
            unlink($destinoFoto . $fotoAtual);
        }

        return $nome_imagem;
    }

    /**
     * FUNÇÃO ENVIAR ARQUIVOS DIVERSOS
     *
     * @param $arquivo
     * @param $destino
     * @return string
     */
    function enviaArquivo($arquivo, $destino)
    {

        // Pega extensão da imagem
        $nomeArquivo = $this->geraNomeArquivo($arquivo['name']);

        // Caminho de onde ficará a imagem
        $caminhoArquivo = $destino . "" . $nomeArquivo;

        // Faz o upload da imagem para seu respectivo caminho
        move_uploaded_file($arquivo["tmp_name"], $caminhoArquivo);

        return $nomeArquivo;
    }

    /**
     * FUNÇÃO DE COPIAR UM ARQUIVO
     *
     * @param $arquivo
     * @param $destino
     * @return string
     */
    function copiarArquivo($arquivo, $destino)
    {

        // Pega extensão da imagem
        $nomeArquivo = $this->geraNomeArquivo($arquivo['name']);

        copy($destino.$arquivo['tmp_name'],$destino.$nomeArquivo);

        return $nomeArquivo;
    }

    /**
     * FUNÇÃO PARA CONVERTER UMA IMAGEM EM PDF
     *
     * @param $arquivo
     * @param $destino
     * @param $tcpdf
     * @return string
     */
    function converterImgToPdf($arquivo, $destino, $tcpdf)
    {
        $nomeArquivo = $this->enviaImagem($arquivo, $destino,"padrao.png");
        $caminhoArquivo = $destino . $nomeArquivo;

        $imgtopdf = $this->geraNomeArquivo();
        $arraydoc['arquivopdf'] = $caminhoArquivo;
        $arraydoc['imgtopdf'] =  $destino . $imgtopdf;
        $tcpdf->imagemEmPdf($arraydoc);
        $this->removeArquivo($caminhoArquivo);

        return $imgtopdf;
    }

    /**
     * FUNÇÃO PARA REMOVER ARQUIVO
     *
     * @param $caminho
     */
    function removeArquivo($caminho){
        unlink($caminho);
    }

    /**
     * FUNÇÃO PARA PEGAR IP DO CLIENTE
     */
    function pegaIpUsuario()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if (isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if (isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }

    /**
     * FUNÇÃO PARA TRANSFORMAR TEXTO EM MAISCULA
     */
    function textoMaiusculo($str)
    {
        return mb_strtoupper($str, "UTF-8");
    }

    /**
     * FUNÇÃO PARA FORMATAR APENAS A PRIMEIRA LETRA DA PALAVRA EM MAÍSCULA
     * @param $str
     * @return mixed|string
     */
    function textoPrimeiraLetraMaiusculo($str)
    {
        $texto = mb_convert_case($str, MB_CASE_TITLE, 'UTF-8');
        $texto = str_replace(array("De ", "Do ", "Dos ", "Da ", "Das ","Com ","E ","É "), array("de ", "do ", "dos ", "da ", "das ", "com ","e ","é "), ucwords(strtolower($texto)));
        return $texto;
    }

    /**
     * FUNÇÃO PARA CRIAR SENHA HASH
     *
     * @param $strPassword
     * @param $numAlgo
     * @param $arrOptions
     *
     * @return string
     */
    function create_password_hash($strPassword, $numAlgo = 1, $arrOptions = array())
    {
        if (function_exists('password_hash')) {
            // php >= 5.5
            $hash = password_hash($strPassword, $numAlgo, $arrOptions);
        } else {
            $salt = mcrypt_create_iv(22, MCRYPT_DEV_URANDOM);
            $salt = base64_encode($salt);
            $salt = str_replace('+', '.', $salt);
            $hash = crypt($strPassword, '$2y$10$' . $salt . '$');
        }
        return $hash;
    }

    /**
     * FUNÇÃO PARA VERIFICAR SENHA
     *
     * @param $strPassword
     * @param $strHash
     *
     * @return bool
     */
    function verify_password_hash($strPassword, $strHash)
    {
        if (function_exists('password_verify')) {
            // php >= 5.5
            $boolReturn = password_verify($strPassword, $strHash);
        } else {
            $strHash2 = crypt($strPassword, $strHash);
            $boolReturn = $strHash == $strHash2;
        }
        return $boolReturn;
    }

    /**
     * FUNÇÃO REMOVE ACENTOS
     *
     * @param $texto
     *
     * @return string
     */
    function removeAcentos($texto)
    {
        return str_replace(array(' ', 'à', 'á', 'â', 'ã', 'ä', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ù', 'Ú', 'Û', 'Ü', 'Ý'), array('_', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y'), $texto);
    }

    /**
     * FUNÇÃO PARA RETORNAR A QUANTIDADE DE CARACTERES DE UM TEXTO
     *
     * @param $texto
     *
     * @return int
     */
    function quantidadeCaracteres($texto){
        return strlen($texto);
    }

    /**
     * FUNÇÃO PARA GERAR NOME DO ARQUIVO NO FORMATO MD5
     *
     * @param string $arquivo
     * @return string
     */
    function geraNomeArquivo($arquivo='protocolo.pdf')
    {
        $extensao = $this->pegaExtensaoArquivo($arquivo);
        $nomeArquivo = md5(uniqid(time()).$this->pegaIpUsuario()) . "." . $extensao;

        return $nomeArquivo;
    }

    /**
     * FUNÇÃO PARA PEGAR EXTENSÃO DE UM ARQUIVO
     *
     * @param $arquivo
     * @return mixed
     */
    function pegaExtensaoArquivo($arquivo){

        // Pega extensão da imagem
        return pathinfo($arquivo, PATHINFO_EXTENSION);

    }

    /**
     * FUNÇÃO PARA RETORNAR O NUMERO DE ACORDO COM A QUANTIDADE DE ZEROS
     *
     * @param $numero
     * @param int $qtd
     * @return string
     */
    function formataNumero($numero, $qtd=2){
        return str_pad((int)$numero, $qtd, '0', STR_PAD_LEFT);
    }

    /**
     * FUNÇÃO PARA QUE RETORNA OS FERIADOS
     *
     * @param $ano
     * @param $posicao
     * @return string
     */
    function Feriados($ano, $posicao){
        $dia = 86400;
        $datas = array();
        $datas['pascoa'] = easter_date($ano);
        $datas['sexta_santa'] = $datas['pascoa'] - (2 * $dia);
        $datas['carnaval'] = $datas['pascoa'] - (47 * $dia);
        $datas['corpus_cristi'] = $datas['pascoa'] + (60 * $dia);
        $feriados = array (
            '01/01',
            '02/02', // Navegantes
            date('d/m',$datas['carnaval']),
            date('d/m',$datas['sexta_santa']),
            date('d/m',$datas['pascoa']),
            '21/04',
            '01/05',
            date('d/m',$datas['corpus_cristi']),
            '12/10',
            '02/11',
            '15/11',
            '25/12',
        );

        return $feriados[$posicao]."/".$ano;
    }


    /**
     * FUNÇÃO PARA RETORNAR DIA MES E ANO
     *
     * @param $data
     * @return false|int
     */
    function dataToTimestamp($data){
        $ano = substr($data, 6,4);
        $mes = substr($data, 3,2);
        $dia = substr($data, 0,2);
        return mktime(0, 0, 0, $mes, $dia, $ano);
    }

    /**
     * FUNÇÃO PARA SOMAR UM DIA A DATA
     *
     * @param $data
     * @return false|string
     */
    function Soma1dia($data){
        $ano = substr($data, 6,4);
        $mes = substr($data, 3,2);
        $dia = substr($data, 0,2);
        return   date("d/m/Y", mktime(0, 0, 0, $mes, $dia+1, $ano));
    }

    /**
     * FUNÇÃO PARA SOMAR DIAS UTEIS
     *
     * @param $xDataInicial
     * @param $xSomarDias
     * @param bool $diasuteis
     * @return false|string
     */
    function SomaDiasUteis($xDataInicial, $xSomarDias, $diasuteis=true){
        for($ii=0; $ii<=$xSomarDias; $ii++){

            $xDataInicial=$this->Soma1dia($xDataInicial); //SOMA DIA NORMAL

            if ($diasuteis==true) {
                //VERIFICANDO SE EH DIA DE TRABALHO
                if (date("w", $this->dataToTimestamp($xDataInicial)) == "0") {
                    //SE DIA FOR DOMINGO OU FERIADO, SOMA +1
                    $xDataInicial = $this->Soma1dia($xDataInicial);

                } else if (date("w", $this->dataToTimestamp($xDataInicial)) == "6") {
                    //SE DIA FOR SABADO, SOMA +2
                    $xDataInicial = $this->Soma1dia($xDataInicial);
                    $xDataInicial = $this->Soma1dia($xDataInicial);

                } else {
                    //senaum vemos se este dia eh FERIADO
                    for ($i = 0; $i <= 12; $i++) {
                        if ($xDataInicial == $this->Feriados(date("Y"), $i)) {
                            $xDataInicial = $this->Soma1dia($xDataInicial);
                        }
                    }
                }
            }
        }
        return $xDataInicial;
    }

    /**
     * FORMATA CPF OU CNPJ PARA O USUÁRIO
     *
     * @param $campo
     * @param bool $formatado
     * @return bool|null|string|string[]
     */
    function formatCpfCnpjUsuario($campo, $formatado = true){
        //retira formato
        $codigoLimpo = preg_replace("[' '-./ t]",'',$campo);
        // pega o tamanho da string menos os digitos verificadores
        $tamanho = (strlen($codigoLimpo) -2);
        //verifica se o tamanho do c?digo informado ? v?lido
        if ($tamanho != 9 && $tamanho != 12){
            return false;
        }

        if ($formatado){
            // seleciona a m?scara para cpf ou cnpj
            if($tamanho == 9){
                $mascara = '###.###.###-##';
            } else {
                $mascara = '##.###.###/####-##';
            }

            //$mascara = ($tamanho == 9) ? '###.###.###-##' : '##.###.###/####-##';

            $indice = -1;
            for ($i=0; $i < strlen($mascara); $i++) {
                if ($mascara[$i]=='#') $mascara[$i] = $codigoLimpo[++$indice];
            }
            //retorna o campo formatado
            $retorno = $mascara;

        }else{
            //se n?o quer formatado, retorna o campo limpo
            $retorno = $codigoLimpo;
        }
        return $retorno;
    }

    /**
     * FUNÇÃO PARA INSERIR UM POPOVER
     *
     * @param $msg
     * @param string $titulo
     * @return string
     */
    function inserirPopover($msg, $titulo = "")
    {
        return "<span class='mdi mdi-comment-question-outline' data-toggle='popover' data-trigger='hover' title='".$titulo."' data-content='".$msg."'></span>";
    }


    //echo mask($cnpj,'##.###.###/####-##');

    /**
     * FUNÇÃO PARA RETORNAR O TEXTO DE ACORDO COM O FORMATO DA MASCARA EX: ###.###.###-##
     * @param $val
     * @param $mask
     * @return string
     */
    function mask($val, $mask)
    {
        $maskared = '';
        $k = 0;
        for($i = 0; $i<=strlen($mask)-1; $i++)
        {
            if($mask[$i] == '#')
            {
                if(isset($val[$k]))
                    $maskared .= $val[$k++];
            }
            else
            {
                if(isset($mask[$i]))
                    $maskared .= $mask[$i];
            }
        }
        return $maskared;
    }
}

?>
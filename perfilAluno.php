<?php

//string json contendo os dados de um funcionário
$arquivo = "AlunosNotas.json";

$info = file_get_contents($arquivo);
//print_r($info);exit;
//faz o parsing na string, gerando um objeto PHP
$obj = json_decode($info);

foreach($obj->discentes as $cadaAluno) {
echo $cadaAluno->nome;
}

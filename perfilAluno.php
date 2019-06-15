<?php
echo "testando:";
//string json contendo os dados de um funcion?rio
$arquivo = "files/json/AlunosNotas.json";

$info = file_get_contents($arquivo);
//print_r($info);
//faz o parsing na string, gerando um objeto PHP
$obj = json_decode($info);
$discentes = $obj->colegio->discentes;
//print_r($discentes);
foreach ($discentes as $cadaAluno) {
    echo "<br>Aluno: " . $cadaAluno->nome;
    foreach ($cadaAluno->notas as $nota) {
        echo "<br>" . $nota->disciplina . " 1º Bim.: " . $nota->notas->b1;
    };
}

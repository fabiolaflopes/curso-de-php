<?php

echo "Bem-Vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc -1;
$somaDeNotas = 0; 

for ($conrador = 1; $contador < $argc; $contador++){
    $somaDeNotas += $argv [$contador];
}

$notaFilme = $somaDeNotas / $quantidadeDeNotas;
$planoPrime = true; 

$inlcuidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: " . $nomeFilme . "\n"; 
echo "Nota do filme: $notaFilme\n";
echo "Ano de lançamento: $anoLancamento\n";

if ($anoLancamento > 2022){
    echo "Esse filme é um lançamento";
} elseif ($anoLancamento > 2020 && $anoLancamento <=2022) {
    echo "Esse filme ainda é novo";
} else {
    echo "Esse filme não é um lançamento";
}

$genero = match  ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
};

echo "O gênero do filme é: $genero";

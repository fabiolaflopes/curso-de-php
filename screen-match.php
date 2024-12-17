<?php

echo "Bem-Vindo(a) ao screen match!\n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = $argv[1] ?? 2022;  

$somaDeNotas = 8;
$somaDeNotas += 6;
$somaDeNotas += 8; 
$somaDeNotas += 7.5;
$somaDeNotas += 5;

$notaFilme = $somaDeNotas / 5;
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

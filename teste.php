<?php 
$valorMetro = $argv[1] ?? 5;
$valorCentimetros = ($valorMetro * 100);

echo "O valor em centimetros é: $valorCentimetros" . "\n";


$ano=$argv[2] ?? 2025;

if ($ano % 4 ==0 && $ano % 100 !=0 || $ano % 400 ==0) {
    echo "$ano é um ano bissexto" . "\n";
} else {
    echo "$ano não é um ano bissexto" . "\n";
}
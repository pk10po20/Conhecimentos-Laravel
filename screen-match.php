<?php 

echo "Bem vindo ao Screen Match!" . "\n";

$filme = [
    $nomeFilme = "O Senhor dos Anéis" . "\n",
    $nomeFilme = $argv[0] ?? "Harry Potter" . "\n",
    $nomeFilme = "Star Wars" . "\n",
    $nomeFilme = "Avatar" . "\n",
    $anoLancamento = $argv[1] ?? 2001 . "\n", 
    $notaFilme = $argv[2] ?? 8 . "\n",
    $inclusoNoPlano = false . "\n",
];

//implode converte de array para string, separando os valores por vírgula.
$filmes = implode(", ", $filme);
echo "Nome do filme:  $nomeFilme \n"
. "Ano de lançamento: $anoLancamento \n";

if ($notaFilme >= 7) {
}
else {
    echo "'$notaFilme' É uma nota ruim! \n";
}

if ($inclusoNoPlano === true || $anoLancamento >= 2001) {
    echo "O filme está incluso no plano." . "\n";
} else {
    echo "O filme não está incluso no plano." . "\n";
}

$genero = match ($nomeFilme) {
    'O Senhor dos Anéis' => 'Fantasia',
    'Harry Potter' => 'Fantasia',
    'Star Wars' => 'Ficção Científica',
    default => 'Gênero não encontrado',
};

echo "Gênero: $genero" . "\n";
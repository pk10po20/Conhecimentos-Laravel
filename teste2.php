<?php 
/*
$numbers = $argv[2] ?? [1, 2, 3, 4, 4, 5, 5,6];

$numbers = array_unique($numbers);
echo "Array sem duplicatas: " . implode(", ", $numbers) . "\n";

//array unique faz com que todo conteudo do array seja único, removendo os duplicados.
//implode transforma o array em string, separando os valores por vírgula.

$nota = $argv[1] ?? 7.5;
$media = 6.0;

if ($nota >= $media) {
    echo "Aprovado!" . "\n";
} else {
    echo "Reprovado!" . "\n";
}

$contaBancaria = [
    $nome = $argv[6] ?? "João" . "\n",
    $saldo = $argv[3] ?? 1000.00 . "\n",
    $saque = $argv[4] ?? 200.00 . "\n",
    $deposito = $argv[5] ?? 500.00 . "\n",
];

echo "". implode($contaBancaria);


$familias = ["Silva" ,
            "Souza",
            "Oliveira",
            "Pereira",
            "Lima",
            "Costa",
            "Almeida",
            "Santos",
            "Ferreira",
            "Rocha",
        ];
$familias[] ='Lima';

echo "". implode($familias); */

    $titularConta = "Pedro Lima";
    $saldoConta = 100000.00;


        echo "----------------------" . "\n";
        echo "Selecione uma opção: " . "\n"
        .   "1 - Consultar Saldo" . "\n"
        .   "2 - Depositar valor" . "\n"
        .   "3 - Sacar valor" . "\n"
        .   "4 - Sair" . "\n";
        echo "----------------------" . "\n \n";

        $opcaoMenu = fgets(STDIN);

        echo "Você escolheu a opção: $opcaoMenu";
        echo "----------------------" . "\n";

            switch ($opcaoMenu) {
                case 1: 
                    echo "Seu slado atual é de: $saldoConta" . "\n";
                    break;
            
                case 2:
                    {
                        echo "Quanto deseja depositar? ";
                        $depositarConta = fgets(STDIN);
                        echo "Você deposiou: $depositarConta";
                        $saldoConta = $saldoConta + $depositarConta;
                        echo "Seu saldo atual é de: $saldoConta" . "\n";    
                    }

                case 3:
                    if($opcaoMenu == 3)
                    {
                    echo "Quanto deseja sacar? ";
                    $sacarConta = fgets(STDIN);

                    if ($sacarConta > $saldoConta)
                    {
                        echo "Saldo insuficiente \n";
                    }

                    echo "Você sacou: $sacarConta" . "\n";
                    $saldoConta = $saldoConta - $sacarConta;
                    echo "Seu saldo atual é de: $saldoConta" . "\n";
                }
                elseif ($opcaoMenu == 4) {
                    echo "Até logo!";
                }
                else 
                {
                    echo "opção invalida. Tente novamente";
                }
            }
        


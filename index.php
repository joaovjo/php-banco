<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Contas\ContasTipo\ContaCorrente;
use App\Contas\ContasTipo\ContaPoupanca;
use App\Operacao\Acessar;
use App\Operacao\Criacao;

do {
    echo "Olá, seja bem-vindo ao sistema de conta bancária!\n\n";
    echo "Qual ação deseja realizar?\n";
    echo "
    1 - Criar conta.
    2 - Acessar dados da conta.
    3 - Depositar.
    4 - Sacar.
    0 - Sair.\n";

    $entrada = readline("\nDigite o número referente a ação desejada: ");

    switch ($entrada) {
        case 1:
            echo "Criar conta.\n";
            $criacao = new Criacao();
            $criacao->criarConta();
            break;

        case 2:
            echo "Acessar dados da conta.\n";

            //$conta = $contaBancaria->exibirDadosConta();
            echo $conta;
            break;

        case 3:
            echo "Depositar.\n";
            break;

        case 4:
            echo "Sacar.\n";
            break;
        default:
            echo 'Opção inválida!';
            break;
    }
} while ($entrada != 0);

echo "\nObrigado por utilizar o sistema de conta bancária!";

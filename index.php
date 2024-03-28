<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Operacoes;
use App\Operacoes\CriarConta\CriarContaCorrente;
use App\Operacoes\CriarConta\CriarContaPoupanca;
use App\Contas\ContasTipo\ContaCorrente;
use App\Contas\ContasTipo\ContaPoupanca;

echo "Olá, seja bem-vindo ao sistema de conta bancária!\n\n";
echo "Qual ação deseja realizar?\n";
echo "
    1 - Criar conta.
    2 - Acessar conta existente.";

//$entrada = readline("Digite o número referente a ação desejada: ");

// if($entrada == 1) {
//     CriarConta();
// } else {
//     AcessarConta();
// }

echo "Escolha o tipo de conta que deseja criar:\n";
echo "
    1 - Conta Corrente.
    2 - Conta Poupança.";

$entrada = readline("Digite o número referente a conta desejada: ");

switch ($entrada) {
    case 1:
        $ContaCorrente = new receberDadosContaCorrente();
        break;
    case 2:
        $nomeBanco = readline("Digite o nome do banco: ");
        $nomeTitular = readline("Digite o nome do titular da conta poupança: ");
        $numeroAgencia = readline("Digite o número da agência da conta poupança: ");
        $numeroConta = readline("Digite o número da conta poupança: ");
        $saldoConta = (float) readline("Digite o saldo inicial da conta poupança: ");
        $contaPoupanca = new ContaPoupanca($nomeBanco, $nomeTitular, $numeroAgencia, $numeroConta, $saldoConta);
        echo "\nConta poupança criada com sucesso!\n";
        break;
}
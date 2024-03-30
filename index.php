<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use App\Contas\ContasTipo\ContaCorrente;
use App\Contas\ContasTipo\ContaPoupanca;

echo "Olá, seja bem-vindo ao sistema de conta bancária!\n\n";
echo "Qual ação deseja realizar?\n";
echo "
    1 - Criar conta.
    2 - Acessar dados da conta.\n";

$conta = "";
$entrada = readline("Digite o número referente a ação desejada: ");

if ($entrada == 1) {

    $entradaConta = readline("Qual tipo de conta deseja criar?\n1 - Conta Corrente\n2 - Conta Poupança\n");

    if ($entradaConta == 1) {
            $nomeBanco = readline("Digite o nome do banco: ");
            $nomeTitular = readline("Digite o nome do titular da conta: ");
            $numeroAgencia = readline("Digite o número da agência da conta: ");
            $numeroConta = readline("Digite o número da conta: ");
            $saldoConta = (float) readline("Digite o saldo inicial da conta: ");
            $contaCorrente = new ContaCorrente($nomeBanco, $nomeTitular, $numeroAgencia, $numeroConta, $saldoConta);
            echo "\nConta criada com sucesso!\n";
            return $conta;
        } else {
            $nomeBanco = readline("Digite o nome do banco: ");
            $nomeTitular = readline("Digite o nome do titular da conta: ");
            $numeroAgencia = readline("Digite o número da agência da conta: ");
            $numeroConta = readline("Digite o número da conta: ");
            $saldoConta = (float) readline("Digite o saldo inicial da conta: ");
            $contaPoupanca = new ContaPoupanca($nomeBanco, $nomeTitular, $numeroAgencia, $numeroConta, $saldoConta);
            echo "\nConta criada com sucesso!\n";
            return $conta;
        }
// Remove the unreachable code
// return $conta;
} elseif ($entrada == 2) {
    $conta = $contaBancaria->exibirDadosConta();
    echo $conta;
    return $conta;
} else {
    echo "Opção inválida!";
}
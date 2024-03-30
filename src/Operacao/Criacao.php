<?php 

declare(strict_types=1);

namespace App\Operacao;

use App\Contas\ContasTipo\ContaCorrente;
use App\Contas\ContasTipo\ContaPoupanca;

class Criacao {
  //  string $nomeBanco, string $nomeTitular, string $numeroAgencia, string $numeroConta, float $saldoConta, string $tipoConta
    public function criarConta(): string
    {
        $tipoConta = readline("Qual tipo de conta deseja criar?\n1 - Conta Corrente\n2 - Conta Poupança\n");
        if ($tipoConta == 'ContaCorrente') {
            $nomeBanco = readline("Digite o nome do banco: ");
            $nomeTitular = readline("Digite o nome do titular da conta: ");
            $numeroAgencia = readline("Digite o número da agência da conta: ");
            $numeroConta = readline("Digite o número da conta: ");
            $saldoConta = (float) readline("Digite o saldo inicial da conta: ");
            $contaCorrente = new ContaCorrente($nomeBanco, $nomeTitular, $numeroAgencia, $numeroConta, $saldoConta);
            return 'Conta corrente criada com sucesso!\n';
        } elseif ($tipoConta == 'ContaPoupanca') {
            $nomeBanco = readline("Digite o nome do banco: ");
            $nomeTitular = readline("Digite o nome do titular da conta: ");
            $numeroAgencia = readline("Digite o número da agência da conta: ");
            $numeroConta = readline("Digite o número da conta: ");
            $saldoConta = (float) readline("Digite o saldo inicial da conta: ");
            $contaPoupanca = new ContaPoupanca($nomeBanco, $nomeTitular, $numeroAgencia, $numeroConta, $saldoConta);
            return 'Conta poupança criada com sucesso!\n';
        } else {
            return 'Tipo de conta inválido!\n';
        }
    }
}
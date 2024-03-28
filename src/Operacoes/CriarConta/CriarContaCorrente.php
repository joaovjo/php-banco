<?php 

declare(strict_types=1);

namespace App\Operacoes\CriarConta;

use App\Contas\ContasTipo\ContaCorrente;
use App\Operacoes\Operacao;

class CriarContaCorrente extends Operacao
{
    public function __construct(string $nomeBanco, string $nomeTitular, string $numeroAgencia, string $numeroConta, float $saldoConta)
    {
        parent::__construct($nomeBanco, $nomeTitular, $numeroAgencia, $numeroConta, $saldoConta);
    }

    public function receberDadosContaCorrente(): void
    {
        echo "Digite o nome do banco: ";
        $this->nomeBanco = readline();
        echo "Digite o nome do titular: ";
        $this->nomeTitular = readline();
        echo "Digite o número da agência: ";
        $this->numeroAgencia = readline();
        echo "Digite o número da conta: ";
        $this->numeroConta = readline();
        echo "Digite o saldo da conta: ";
        $this->saldoConta = (float) readline();
    }

    public function criarContaCorrente(): ContaCorrente
    {
        return new ContaCorrente($this->nomeBanco, $this->nomeTitular, $this->numeroAgencia, $this->numeroConta, $this->saldoConta);
    }
}
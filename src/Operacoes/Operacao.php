<?php 

declare(strict_types=1);

namespace App\Operacoes;

class Operacao {
    protected string $nomeBanco;
    protected string $nomeTitular;
    protected string $numeroAgencia;
    protected string $numeroConta;
    protected float $saldoConta;

    public function __construct(
        string $nomeBanco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldoConta
    ) {
        $this->nomeBanco = $nomeBanco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldoConta = $saldoConta;
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
}
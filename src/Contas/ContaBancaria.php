<?php

declare(strict_types=1);

namespace App\Contas;

abstract class ContaBancaria
{
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

    public function exibirDadosConta(): void
    {
        echo "Banco: $this->nomeBanco\n";
        echo "Nome do titular: $this->nomeTitular\n";
        echo "Número da agência: $this->numeroAgencia\n";
        echo "Número da conta: $this->numeroConta\n";
        echo "Saldo da conta: $this->saldoConta\n";
    }

    public function depositar(float $valor): string
    {
        $this->saldoConta += $valor;
        return 'Depósito de R$ ' . number_format($valor, 2, ".", "") . ' realizado com sucesso!\n';
    }

    public function sacar(float $valor): string
    {
        if ($this->saldoConta < $valor) {
            return 'Saldo insuficiente para saque!\n';
        }

        $this->saldoConta -= $valor;
        return 'Saque de R$ ' . number_format($valor, 2, ".", "") . ' realizado com sucesso!\n';
    }

    public abstract function obterSaldo(): string;

    public function getNomeBanco(): string
    {
        return $this->nomeBanco;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function getNumeroAgencia(): string
    {
        return $this->numeroAgencia;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }

    public function getSaldoConta(): float
    {
        return $this->saldoConta;
    }
}

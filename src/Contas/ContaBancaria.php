<?php

declare(strict_types=1);

namespace App\Contas;

class ContaBancaria
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


//    public abstract function obterSaldo(): string;

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

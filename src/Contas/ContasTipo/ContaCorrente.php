<?php

declare(strict_types=1);

namespace App\Contas\ContasTipo;

use App\Contas\ContaBancaria;

class ContaCorrente extends ContaBancaria
{

    public const TARIFA_SAQUE = 0.5;
    public const TIPO_CONTA = 'Conta Corrente';

    public function __construct(string $nomeBanco, string $nomeTitular, string $numeroAgencia, string $numeroConta, float $saldoConta)
    {
        parent::__construct($nomeBanco, $nomeTitular, $numeroAgencia, $numeroConta, $saldoConta);
    }

    public function obterSaldo(): string
    {
        return 'Saldo da conta corrente: R$ ' . number_format($this->saldoConta, 2, ".", "") . "\n";
    }

}
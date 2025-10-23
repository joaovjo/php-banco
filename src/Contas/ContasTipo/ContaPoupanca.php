<?php

declare(strict_types=1);

namespace App\Contas\ContasTipo;

use App\Contas\ContaBancaria;

class ContaPoupanca extends ContaBancaria
{
    public const RENDIMENTO = 0.3;
    public const TIPO_CONTA = 'Conta Poupança';

    public function __construct(
        string $nomeBanco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldoConta,
    ) {
        parent::__construct($nomeBanco, $nomeTitular, $numeroAgencia, $numeroConta, $saldoConta);
    }

    public function obterSaldo(): string
    {
        return 'Saldo da conta poupança: R$ ' . number_format($this->saldoConta, 2, '.', '') . "\n";
    }
}

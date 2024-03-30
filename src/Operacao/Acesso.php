<?php

declare(strict_types=1);

namespace App\Operacao;

use App\Contas\ContaBancaria;

class Acesso extends ContaBancaria
{
    public function exibirDadosConta(): void
    {
        echo "Banco: $this->nomeBanco\n";
        echo "Nome do titular: $this->nomeTitular\n";
        echo "Número da agência: $this->numeroAgencia\n";
        echo "Número da conta: $this->numeroConta\n";
        echo "Saldo da conta: $this->saldoConta\n";
    }
}

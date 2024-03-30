<?php 

declare(strict_types=1);

namespace App\Operacao;

use App\Contas\ContaBancaria;

class Saque extends ContaBancaria {
    public function sacar(float $valor): string
    {
        if ($this->saldoConta < $valor) {
            return 'Saldo insuficiente para saque!\n';
        }

        $this->saldoConta -= $valor;
        return 'Saque de R$ ' . number_format($valor, 2, ".", "") . ' realizado com sucesso!\n';
    }
}
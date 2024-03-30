<?php 

declare(strict_types=1);

namespace App\Operacao;

use App\Contas\ContaBancaria;

class Deposito extends ContaBancaria {
    public function depositar(float $valor): string
    {
        $this->saldoConta += $valor;
        return 'Depósito de R$ ' . number_format($valor, 2, ".", "") . ' realizado com sucesso!\n';
    }
}
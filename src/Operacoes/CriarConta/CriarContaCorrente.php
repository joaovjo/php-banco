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

    public function criarContaCorrente(): ContaCorrente
    {
        return new ContaCorrente($this->nomeBanco, $this->nomeTitular, $this->numeroAgencia, $this->numeroConta, $this->saldoConta);
    }
}
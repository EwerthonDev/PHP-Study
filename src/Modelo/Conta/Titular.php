<?php

namespace Estudo\Banco\Modelo\Conta;

use Estudo\Banco\Modelo\Pessoa;
use Estudo\Banco\Modelo\CPF;
use Estudo\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}

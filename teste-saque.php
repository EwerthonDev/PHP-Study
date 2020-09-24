<?php

//arquivo pra teste das classes e métodos

use Estudo\Banco\Modelo\Conta\{Conta, ContaPoupanca, ContaCorrente, Titular};
use Estudo\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('437.412.888-37'),
        'Ewerthon Silva',
        new Endereco('Guarulhos', 'Vila Maricy', 'Eduardo Juliani', '286')
    )
);
$conta->deposita(500);
$conta->saca(100);

echo $conta->recuperaSaldo();

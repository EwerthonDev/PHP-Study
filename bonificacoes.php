<?php

require_once 'autoload.php';

use Estudo\Banco\Modelo\{CPF};
use Estudo\Banco\Modelo\Funcionario\{Funcionario, Gerente, Diretor};
use Estudo\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Funcionario(
    'Ewerthon Silva',
    new CPF('437.412.888-37'),
    'Desenvolvedor Laravel Jr',
    4000
);

$umaFuncionaria = new Diretor(
    'Laisa Duarte',
    new CPF('123.456.789-10'),
    'Tomografia',
    3800
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
var_dump($controlador);
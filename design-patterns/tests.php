<?php

use LuizEduardo\DesignPattern\CalculadoraDeImpostos;
use LuizEduardo\DesignPattern\Impostos\ICMS;
use LuizEduardo\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();

$orcamento->valor = 100;

$calculoImposto = $calculadora->calcula($orcamento,  new ICMS());

echo $calculoImposto;
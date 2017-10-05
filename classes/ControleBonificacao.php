<?php

/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 04/10/17
 * Time: 11:05
 */
class ControleBonificacao
{
    private $totalBonificacoes = 0;

    public function registra(Funcionario $funcionario){

        $this->totalBonificacoes += $funcionario->getBonificacao();

    }

    public function getTotalBonificacoes(): int {
        return $this->totalBonificacoes;
    }
}

require_once "Funcionario.php";
require_once "Gerente.php";

$func = new Funcionario();
$func->setBonificacao(200);

$ger = new Gerente();
$ger->setBonificacao(1000);

$controle = new ControleBonificacao();
$controle->registra($func);
$controle->registra($ger);

echo $controle->getTotalBonificacoes();


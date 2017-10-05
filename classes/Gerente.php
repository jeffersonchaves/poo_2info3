<?php

/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 04/10/17
 * Time: 10:39
 */
require_once "Funcionario.php";

class Gerente extends Funcionario {

    public $senhaCofre;
    public $numeroFuncionariosGerenciados;

    public function autentica(int $senha){

        if ($this->senhaCofre == $senha){
            echo "Acesso permitido";
        }else {
            echo "Acesso negado";
        }
    }

    public function recebeAumento(float $aumento){

        $this->salario += $aumento + 100;

    }

}
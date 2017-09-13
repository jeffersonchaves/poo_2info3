<?php

/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 06/09/17
 * Time: 10:27
 */
class Funcionario
{
    public $nome;
    public $departmento;
    public $salario = 0;
    public $dataEntrada;
    public $CPF;
    const SALARIO_ANUAL_E_DECIMO = 13;
    const FERIAS = 0.3;

    public function recebeAumento(float $aumento){

        $this->salario += $aumento;

    }

    public function calculaGanhoAnual():float {
        return ($this->salario * SALARIO_ANUAL_E_DECIMO) + $this->salario * FERIAS;
    }

    public function mostra(){
        //TODO fazer o método mostra como pede o exercício
    }

}
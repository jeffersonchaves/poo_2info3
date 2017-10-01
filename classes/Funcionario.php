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

    private $dataEntrada;

    public $CPF;
    const SALARIO_ANUAL_E_DECIMO = 13;
    const FERIAS = 0.3;

    public function recebeAumento(float $aumento){

        $this->salario += $aumento;

    }

    public function calculaGanhoAnual():float {
        return ($this->salario * self::SALARIO_ANUAL_E_DECIMO) + $this->salario * self::FERIAS;
    }

    public function mostra(){

        echo "Nome: $this->nome \n";
        echo "Departamento: $this->departmento \n";
        echo "Salario: $this->salario \n";
        echo "Ganho anual: " .  $this->calculaGanhoAnual(). "\n";
        echo "Data de entrada: " . $this->dataEntrada->formatada();


    }

    public function getDataEntrada()
    {
        return $this->dataEntrada;
    }

    public function setDataEntrada(Data $dataEntrada)
    {
        $this->dataEntrada = $dataEntrada;
    }



}
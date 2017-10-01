<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 13/09/17
 * Time: 09:09
 */

require_once "classes/Funcionario.php";
require_once "classes/Data.php";

$gerente = new Funcionario();
$gerente->nome = "Alfred Silva";
$gerente->departmento = "Vendas";
$gerente->salario = 10000;
//$gerente->dataEntrada = "26/abril/2017"; //transformar em clase

$data = new Data();
$data->dia = 13;
$data->mes = 9;
$data->ano = 2017;

$gerente->setDataEntrada($data);

$gerente->mostra();

//--------------------------------------------

//$seguranca = new Funcionario();
//$seguranca->nome = "Nogueira";
//$seguranca->departmento = "Segurança";
//$seguranca->salario = 1800;
//
//$seguranca->mostra();


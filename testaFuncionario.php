<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 13/09/17
 * Time: 09:09
 */

require_once "classes/Funcionario.php";

$gerente = new Funcionario();
$gerente->nome = "Alfred Silva";
$gerente->departmento = "Vendas";
$gerente->salario = 10000;

$gerente->mostra();

//--------------------------------------------

$seguranca = new Funcionario();
$seguranca->nome = "Nogueira";
$seguranca->departmento = "Segurança";
$seguranca->salario = 1800;

$seguranca->mostra();


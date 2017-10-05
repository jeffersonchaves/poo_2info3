<?php
/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 30/08/17
 * Time: 10:00
 */

require_once "classes/Conta.php";
require_once "classes/Cliente.php";


//Objeto cliente
$cliente = new Cliente();
$cliente->nome = "Jefferson";
$cliente->cpf  = "076455870";

$minhaConta = new Conta();

$minhaConta->setDono($cliente);
$minhaConta->deposita(2000);

//echo $minhaConta->getDono()->nome;

$outraConta = new Conta();

echo Conta::getTotalContas();


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

echo $minhaConta->getDono()->nome;

//nao é possível por ser privado
//$minhaConta->saldo = -500;

//var_dump($minhaConta);

//$conseguiSacar = $minhaConta->sacar(1600);
//
//if ($conseguiSacar){
//    print 'consegui sacar';
//} else{
//    print 'nao foi possível sacar';
//}
//
//
//$contaAmigo = new Conta();
//$contaAmigo->dono = "Fulvio";
//$contaAmigo->setSaldo(0);
//
//
//$minhaConta->trasferePara($contaAmigo, 15);
//
//var_dump($minhaConta);
//var_dump($contaAmigo);

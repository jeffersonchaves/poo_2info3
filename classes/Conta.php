<?php

/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 23/08/17
 * Time: 11:13
 */
class Conta
{
    public $numero;
    private $saldo = 0;
    private $dono;
    public $senha;


    public function getDono()
    {
        return $this->dono;
    }


    public function setDono(Cliente $dono)
    {
        $this->dono = $dono;
    }





    public function getSaldo()
    {
        return $this->saldo;
    }

    public function sacar(float $valor):bool {
        if ($valor <= $this->saldo ){
            $this->saldo -= $valor;
            return true;
        } else {
            return false;
        }
    }

    public function deposita(float $valor){
        $this->saldo = $this->saldo + $valor;
    }

    public function trasferePara(Conta $contaDestino, $valor){

        $deuCerto = $this->sacar($valor);

        if ($deuCerto){
            $contaDestino->deposita($valor);
        }
    }

    public function mostra(){
        var_dump($this);
    }

}
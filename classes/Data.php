<?php

/**
 * Created by PhpStorm.
 * User: jefferson
 * Date: 13/09/17
 * Time: 10:43
 */
class Data
{
    public $dia;
    public $mes;
    public $ano;

    public function formatada(){
        return     $this->dia."/".$this->mes."/".$this->ano;
    }

}
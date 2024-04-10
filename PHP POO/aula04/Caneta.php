<?php

class Caneta
{

    public $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    public function __construct($m, $c, $p) // é possível criar um constructor com o nome da classe
    {
        $this->setModelo($m);
        $this->setPonta($p);
        $this->cor = "$c";
        $this->tampar();
    }
    public function tampar()
    {
        $this->tampada = true;
    }

    public function getModelo()
    {
        return $this->modelo;
    }
    public function setModelo($m)
    {
        $this->modelo = $m;
    }
    public function getPonta()
    {
        return  $this->ponta;
    }
    public function  setPonta($p)
    {
        $this->ponta = $p;
    }
}

<?php

class contaBanco
{

    public $NumBanco;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //Construtor da Classe
    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta Criada com sucesso</p>";
    }

    // Getters 
    public function getNunBanco()
    {
        return $this->NumBanco;
    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function getDono()
    {
        return $this->dono;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function getStatus()
    {
        return $this->status;
    }

    //Setters


    public function setNunBanco($n)
    {
        $this->NumBanco =  $n;
    }
    public function setTipo($t)
    {
        $this->tipo =  $t;
    }
    public function setDono($d)
    {
        $this->dono = $d;
    }
    public function setSaldo($sa)
    {
        $this->saldo = $sa;
    }
    public function setStatus($st)
    {
        $this->status =  $st;
    }

    // funções

    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "cc") {
            $this->setSaldo(50);
        } elseif ($t == "cp") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta com Dinheiro</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta em débito</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de " . $this->getDono() . " Fechada com sucesso!</p>";
        }
    }
    public function depositar($v)
    {
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() + $v);
            echo "<p>Deposito de R$ $v na conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p>Impossível Depositar em uma conta fechada.</p>";
        }
    }
    public function sacar($v)
    {
        if ($this->getStatus() == true) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
                echo "<p>Saque de R$ $v autorizado na conta de " . $this->getDono() . "</p>";
            } else {
                echo "<p>Você não tem saldo suficiente</p>";
            }
        } else {
            echo "<p>Não é possível sacar de uma conta fechada</p>";
        }
    }
    public function pagarMensal()
    {

        if ($this->getTipo() == "cc") {
            $valor = 12;
        } else {
            $valor = 20;
        }
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() - $valor);
            echo "<p>Mensalidade de R$ $valor debitada na conta de " . $this->getDono() . "</p>";
        } else {
            echo "<p>Problemas com a conta, Não posso cobrar.</p>";
        }
    }
}
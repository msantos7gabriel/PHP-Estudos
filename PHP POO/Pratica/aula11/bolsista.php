<?php
require_once "aluno.php";
class bolsista extends aluno
{
    private $bolsa;
    public function renovarBolsa()
    {
        echo "<p>Bolsa Renovada!</p>";
    }
    // public function pagarMensalidade()
    // {
    //     echo "<p><strong>$this->nome</strong> é Bolsista! Então paga com desconto</p>";
    // }

    /**
     * Get the value of bolsa
     */ 
    public function getBolsa()
    {
        return $this->bolsa;
    }

    /**
     * Set the value of bolsa
     *
     * @return  self
     */ 
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;

        return $this;
    }

}
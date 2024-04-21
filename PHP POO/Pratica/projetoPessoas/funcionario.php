<?php
require_once("pessoa.php");

class funcionario extends pessoa
{

    private $setor;
    private $trabalhando;


    // Método Construtor
    public function __construct()
    {
    }

    // Métodos Especiais 

    /**
     * Get the value of setor
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * Set the value of setor
     *
     * @return  self
     */
    public function setSetor($setor)
    {
        $this->setor = $setor;

        return $this;
    }

    /**
     * Get the value of trabalhando
     */
    public function getTrabalhando()
    {
        return $this->trabalhando;
    }

    /**
     * Set the value of trabalhando
     *
     * @return  self
     */
    public function setTrabalhando($trabalhando)
    {
        $this->trabalhando = $trabalhando;

        return $this;
    }

    // Métodos
    public function mudarTrabalho()
    {
        $this->trabalhando = !/*operador de inversão ( eu acho )*/$this->trabalhando;
    }
}

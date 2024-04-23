<?php
require_once("pessoa.php");
class professor extends pessoa
{

    private $especialidade;
    private $salario;

    // Método Construtor

    public function __construct()
    {
    }

    // Métodos Especiais

    /**
     * Get the value of salario
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set the value of salario
     *
     * @return  self
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get the value of especialidade
     */
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    /**
     * Set the value of especialidade
     *
     * @return  self
     */
    public function setEspecialidade($especialidade)
    {
        $this->especialidade = $especialidade;

        return $this;
    }

    // Métodos

    public function receberAumento($aumento)
    {
        $this->setSalario($this->getSalario() + $aumento);
    }
}
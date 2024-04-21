<?php
require_once("pessoa.php");
class aluno extends pessoa // herança
{

    private $matricula;
    private $curso;


    // Métodos Construtor
    public function __construct()
    {
    }

    // Métodos Especiais

    /**
     * Get the value of matricula
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Set the value of matricula
     *
     * @return  self
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get the value of curso
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set the value of curso
     *
     * @return  self
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    // Métodos

    public function cancelarMatricula()
    {
        echo "<p>Matricula será cancelada</p>";
    }
}

<?php

class pessoa
{

    private $nome;
    private $idade;
    private $sexo;


    // Método Construtor 
    public function __construct($nome, $idade, $sexo)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

    // Métodos Especiais

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    // Métodos

    public function fazerAniversario()
    {
        $this->setIdade($this->getIdade() + 1); // ou $this->$idade ++ (operador de incrementação)
    }
}

<?php

class lutador
{
    //atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private  $vitorias;
    private  $derrotas;
    private  $empates;

    // método construtor

    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
    {
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }

    //Métodos Especias

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade)
    {
        $this->nacionalidade = $nacionalidade;

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

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria($this->getPeso());
        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    private function setCategoria()
    {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "invalido";
        } elseif ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->getPeso() <= 120.9) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "invalido";
        }
        return $this;
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;

        return $this;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;

        return $this;
    }

    public function getEmpates()
    {
        return $this->empates;
    }

    public function setEmpates($empates)
    {
        $this->empates = $empates;

        return $this;
    }

    // métodos

    public function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }


    public function apresentar()
    {
        echo "<p>-----------------------------------</p>";
        echo "<p>CHEGOU A HORA! O Lutador " . $this->getNome() . "<br>";
        echo "Veio diretamente do " . $this->getNacionalidade() . "<br>";
        echo "Tem " . $this->getIdade() . " Anos e pesa " . $this->getPeso() . "KG";
        echo " " . $this->getAltura() . "M de altura";
        echo "<br>Ele Tem " . $this->getVitorias() . " Vitorias ";
        echo  $this->getDerrotas() . " Derrotas e " . $this->getEmpates() . " Empates</p>";
        echo "<p>-----------------------------------</p>";
    }
    public function status()
    {
        echo "<p>-----------------------------------</p>";
        echo "<p>" . $this->getNome() . "</p>";
        echo "<p>é um peso " . $this->getCategoria() . "</p>";
        echo "<p>" . $this->getVitorias() . " Vitorias</p>";
        echo "<p>" . $this->getDerrotas() . " Derrotas</p>";
        echo "<p>" . $this->getEmpates() . " Empates</p>";
        echo "<p>-----------------------------------</p>";
    }
}
<?php
require_once 'lutador.php';

class luta
{


    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    //Método Construtor

    //métodos especiais

    public function getdesafiado()
    {
        return $this->desafiado;
    }

    public function setdesafiado($desafiado)
    {
        $this->desafiado = $desafiado;

        return $this;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;

        return $this;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function setRounds($rounds)
    {
        $this->rounds = $rounds;

        return $this;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;

        return $this;
    }

    // métodos

    public function marcarLuta($l1, $l2)
    {
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) // não pra testar se ele é igual mas sim idêntico por isso o uso dos "==="
         {
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    public function Lutar()
    {
        if ($this->aprovada = true) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = random_int(0, 2);
            switch ($vencedor) {
                case 0:
                    echo "<p>Empate</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p>Vitoria De " . $this->desafiado->getNome() . "</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>Vitoria De " . $this->desafiante->getNome() . "</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
    }
}
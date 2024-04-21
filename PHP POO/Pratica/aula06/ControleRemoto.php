<?php
require_once "controlador.php";
class ControleRemoto implements Controlador
{
    private $volume;
    private $ligado;
    private $tocando;

    // métodos especiais 

    public function __construct()
    {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    private function getVolume()
    {
        return $this->volume;
    }

    private function setVolume($volume)
    {
        $this->volume = $volume;
    }

    private function getLigado()
    {
        return $this->ligado;
    }

    private function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }

    private function getTocando()
    {
        return $this->tocando;
    }

    private function setTocando($tocando)
    {
        $this->tocando = $tocando;
    }

    // Métodos 
    public function ligar()
    {
        if ($this->getLigado() == true) {
            echo"<p>A TV já está Ligada.</p>";
        }
        $this->setLigado(true);
    }
    public function desligar()
    {
        if ($this->getLigado() == false) {
            echo"<p>A TV já está Desligada.</p>";
        }
        $this->setLigado(false);
    }
    public function abrirMenu()
    {
        echo "<p>----- Menu -----</p>";
        echo "Está Ligado? : ";
        echo ($this->getLigado()) ? "Sim" : "Não";
        echo "<br>Está Tocando? : ";
        echo ($this->getTocando()) ? "Sim" : "Não";
        echo "<br>Volume: " . $this->getVolume();
        echo "<br>";
        for ($i = 0; $i <= $this->getVolume(); $i += 10) {
            echo "| ";
        }
        echo "<p>----------------</p>";
    }
    public function fechaMenu()
    {
        echo "<br>Fechando o Menu...";
    }
    public function maisVolume()
    {
        if ($this->getLigado() == true) {
            $this->setVolume($this->getVolume() + 10);
        } else {
            echo "<p>ERROR! Não Posso aumentar o volume</p>";
        }
    }
    public function menosVolume()
    {
        if ($this->getLigado() == true) {
            $this->setVolume($this->getVolume() - 10);
        } else {
            echo "<p>ERROR! Não Posso Diminuir o volume</p>";
        }
    }
    public function ligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }
    public function desligarMudo()
    {
        if ($this->getLigado() == false && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }
    public function play()
    {
        if ($this->getLigado() == false) {
            $this->setLigado(true);
        }
    }
    public function pause()
    {
        if ($this->getLigado() == true) {
            $this->setLigado(false);
        }
    }
}
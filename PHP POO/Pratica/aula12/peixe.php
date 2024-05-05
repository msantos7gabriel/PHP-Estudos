<?php
require_once("animal.php");

class Peixe extends Animal
{

    private $corEscama;

    public function locomover()
    {
        echo "<p>nadando</p>";
    }
    public function alimentar()
    {
        echo "<p>Comendo Substâncias</p>";
    }
    public function emitirSom()
    {
        echo "<p>Peixe não faz som</p>";
    }
    public function soltarBolhas()
    {
        echo "<p>Soltou um bolha</p>";
    }







    /**
     * Get the value of corEscama
     */
    public function getCorEscama()
    {
        return $this->corEscama;
    }

    /**
     * Set the value of corEscama
     *
     * @return  self
     */
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;

        return $this;
    }
}
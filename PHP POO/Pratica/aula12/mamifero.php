<?php
require_once("animal.php");

class mamifero extends animal
{

    private $corPelo;

    public function locomover()
    {
        echo "<p>Correndo</p>";
    }
    public function alimentar()
    {
        echo "<p>Mamando</p>";
    }
    public function emitirSom()
    {
        echo "<p>Som de Mamífero</p>";
    }

    /**
     * Get the value of corPelo
     */
    public function getCorPelo()
    {
        return $this->corPelo;
    }

    /**
     * Set the value of corPelo
     *
     * @return  self
     */
    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;

        return $this;
    }
}
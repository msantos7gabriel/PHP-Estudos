<?php
require_once("video.php");
require_once("gafanhoto.php");

class visualizacao
{

    private $espectador;
    private $filme;

    public function __construct($espectador, $filme)
    {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }



    public function avaliar()
    {
        $this->filme->setAvaliação(5);
    }

    public function avaliarNota($nota)
    {
        $this->filme->setAvaliação($nota);
    }

    public function avaliarPorc($porc)
    {
        $nova = 0;
        if ($porc <= 20) {
            $nova = 3;
        } elseif ($porc <= 50) {
            $nova = 5;
        } elseif ($porc <= 90) {
            $nova = 8;
        } else {
            $nova = 10;
        }
        $this->filme->setavalicao();
    }


    /**
     * Get the value of filme
     */
    public function getFilme()
    {
        return $this->filme;
    }

    /**
     * Set the value of filme
     *
     * @return  self
     */
    public function setFilme($filme)
    {
        $this->filme = $filme;

        return $this;
    }

    /**
     * Get the value of espectador
     */
    public function getEspectador()
    {
        return $this->espectador;
    }

    /**
     * Set the value of espectador
     *
     * @return  self
     */
    public function setEspectador($espectador)
    {
        $this->espectador = $espectador;

        return $this;
    }
}
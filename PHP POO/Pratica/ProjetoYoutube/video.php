<?php

require_once("acoesVideo.php");

class video implements acoesVideo
{
    private $titulo, $avaliação, $views, $curtidas, $reproduzindo;

    // Construtor

    public function __construct($titulo)
    {
        $this->titulo = $titulo;
        $this->avaliação = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }



    // Métodos
    public function play()
    {
        $this->reproduzindo = true;
    }
    public function pause()
    {
        $this->reproduzindo = false;
    }
    public function like()
    {
        $this->curtidas++;
    }

    // Métodos Especiais  

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of avaliação
     */
    public function getAvaliação()
    {
        return $this->avaliação;
    }

    /**
     * Set the value of avaliação
     *
     * @return  self
     */
    public function setAvaliação($avaliação)
    {
        $media = ($this->avaliação + $avaliação) / $this->views;
        $this->avaliação = round($media, 2);

        return $this;
    }

    /**
     * Get the value of views
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set the value of views
     *
     * @return  self
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get the value of curtidas
     */
    public function getCurtidas()
    {
        return $this->curtidas;
    }

    /**
     * Set the value of curtidas
     *
     * @return  self
     */
    public function setCurtidas($curtidas)
    {
        $this->curtidas = $curtidas;

        return $this;
    }

    /**
     * Get the value of reproduzindo
     */
    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    /**
     * Set the value of reproduzindo
     *
     * @return  self
     */
    public function setReproduzindo($reproduzindo)
    {
        $this->reproduzindo = $reproduzindo;

        return $this;
    }
}
<?php

require_once("pessoa.php");
class gafanhoto extends pessoa
{
    private $login, $totAssistido;

    public function __construct($nome, $idade, $sexo, $login)
    {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    public function assistirMaisUm()
    {
        $this->totAssistido++;
    }

    /**
     * Get the value of login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of totAssistido
     */
    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    /**
     * Set the value of totAssistido
     *
     * @return  self
     */
    public function setTotAssistido($totAssistido)
    {
        $this->totAssistido = $totAssistido;

        return $this;
    }
}

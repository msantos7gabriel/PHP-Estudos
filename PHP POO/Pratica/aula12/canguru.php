<?php

require_once("mamifero.php");


class canguru extends mamifero
{

    public function locomover()
    {
        echo "<p>Pulando</p>";
    }

    public function usarBolsa()
    {
        echo "<p>Usando a Bolsa</p>";
    }
    
}
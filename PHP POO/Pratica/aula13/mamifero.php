<?php
require_once("animal.php");

class mamifero extends Animal2
{
    public function emitirSom()
    {
        echo "<p>Som de Mamífero</p>";
    }
}
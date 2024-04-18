<?php

interface publicacao
{
    public function abrir();
    public function fechar();
    public function folear($pagina);
    public function avancarPagina();
    public function voltarPagina();
}

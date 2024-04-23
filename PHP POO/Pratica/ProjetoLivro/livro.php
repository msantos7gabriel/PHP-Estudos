<?php

require_once "pessoa.php";
require_once "publicacao.php";

class livro implements publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;


    //  Construtor

    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setAberto(false);
        $this->setPagAtual(0);
        $this->setLeitor($leitor);
    }

    // Métodos Especiais

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;

        return $this;
    }

    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;

        return $this;
    }

    public function getAberto()
    {
        return $this->aberto;
    }

    public function setAberto($aberto)
    {
        $this->aberto = $aberto;

        return $this;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;

        return $this;
    }

    // Métodos 

    public function detalhes()
    {
        echo "<p>Livro " . $this->getTitulo() . " Escrito por " . $this->getAutor() . "</p>";
        echo "<p>Páginas: " . $this->totPaginas . "</p>";
        echo "<p>Página atual: " . $this->pagAtual . "</p>";
        echo "<p>Sendo lido por: " . $this->leitor->getNome() . "</p>";
    }
    public function abrir()
    {
        $this->setAberto(true);
    }
    public function fechar()
    {
        $this->setAberto(false);
    }
    public function folear($pagina)
    {
        if ($this->getAberto() == true) {
            if ($this->getTotPaginas() < $pagina) {
                $this->pagAtual = 0;
                echo "<p>Ultrapassado o valor total de numero de paginas</p>";
            } else {
                $this->setPagAtual($pagina);
            }
        } else {
            echo "<p>O livro está fechado</p>";
        }
    }
    public function avancarPagina()
    {
        if ($this->getAberto() == true) {
            if ($this->getTotPaginas() > $this->getPagAtual()) {
                $this->setPagAtual($this->getPagAtual() + 1);
            } else {
                echo "<p>Não é possível avançar uma pagina</p>";
            }
        } else {
            echo "<p>O livro está fechado</p>";
        }
    }
    public function voltarPagina()
    {
        if ($this->getPagAtual() < 0) {
            echo "<p>Não é possível voltar uma pagina</p>";
        } else {
            $this->setPagAtual($this->getPagAtual() - 1);
        }
    }
}

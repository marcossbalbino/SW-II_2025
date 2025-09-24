<?php

class Livro {
    private $titulo;
    private $autor;
    private $disponivel;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->disponivel = true;
    }

    public function emprestar() {
        $this->disponivel = false;
    }

    public function devolver() {
        $this->disponivel = true;
    }

    public function exibirStatus() {
        if ($this->disponivel) {
            return $this->titulo . " - Disponível";
        } else {
            return $this->titulo . " - Emprestado";
        }
    }
}

$livro1 = new Livro("1984", "George Orwell");
echo $livro1->exibirStatus();
echo "<br>";
$livro1->emprestar();
echo $livro1->exibirStatus();
echo "<br>";
$livro1->devolver();
echo $livro1->exibirStatus();

?>

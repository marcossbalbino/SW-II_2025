<?php

class Aluno {
    private $nome;
    private $nota1;
    private $nota2;

    public function __construct($nome, $nota1, $nota2) {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getMedia() {
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function verificarSituacao() {
        if ($this->getMedia() >= 7) {
            return 'Aprovado';
        } else {
            return 'Reprovado';
        }
    }
}

$aluno1 = new Aluno("Lucas", 8, 6);
echo $aluno1->getNome() . " - Média: " . $aluno1->getMedia() . " - Situação: " . $aluno1->verificarSituacao();

?>

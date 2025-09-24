<?php

class Funcionario {
    private $nome;
    private $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($porcentagem) {
        $this->salario += $this->salario * ($porcentagem / 100);
    }

    public function exibirInformacoes() {
        return $this->nome . " - Salário: R$" . number_format($this->salario, 2, ',', '.');
    }
}

$func = new Funcionario("Ana", 2000);
echo $func->exibirInformacoes();
echo "<br>";
$func->aumentarSalario(10);
echo $func->exibirInformacoes();

?>

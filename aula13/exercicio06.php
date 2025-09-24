<?php

class Retangulo {
    private $largura;
    private $altura;

    public function setLargura($largura) {
        $this->largura = $largura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getLargura() {
        return $this->largura;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }

    public function calcularPerimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}

$ret = new Retangulo();
$ret->setLargura(5);
$ret->setAltura(10);
echo "Área: " . $ret->calcularArea();
echo "<br>";
echo "Perímetro: " . $ret->calcularPerimetro();

?>

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

    public function Area() {
        return $this->largura * $this->altura;
    }

    public function Perimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}

$ret = new Retangulo();
$ret->setLargura(5);
$ret->setAltura(10);
echo "Área: " . $ret->Area();
echo "<br>";
echo "Perímetro: " . $ret->Perimetro();

?>
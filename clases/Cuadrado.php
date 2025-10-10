<?php


require_once 'FiguraGeometrica.php';

class Cuadrado extends FiguraGeometrica {

    public function __construct($lado1) {
        parent::__construct('Cuadrado', $lado1);
    }

    public function __destruct() {
        // Destructor vacío
    }

    public function calcularArea() {
        return $this->getLado1() * $this->getLado1();
    }

    public function calcularPerimetro() {
        return 4 * $this->getLado1();
    }

    public function __toString() {
        return "Cuadrado de lado " . $this->getLado1() .
               ". Área: " . $this->calcularArea() .
               ". Perímetro: " . $this->calcularPerimetro();
    }
}
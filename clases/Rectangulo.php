<?php

require_once 'FiguraGeometrica.php';

class Rectangulo extends FiguraGeometrica {
    protected $lado2;

    public function __construct($lado1, $lado2) {
        parent::__construct('Rectángulo', $lado1);
        $this->setLado2($lado2);
    }

    public function __destruct() {
        // Destructor vacío
    }

    public function setLado2($lado2) {
        if ($lado2 > 0) {
            $this->lado2 = $lado2;
        } else {
            echo "El lado2 debe ser un número positivo.<br>";
            $this->lado2 = 0;
        }
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function calcularArea() {
        return $this->getLado1() * $this->getLado2();
    }

    public function calcularPerimetro() {
        return 2 * ($this->getLado1() + $this->getLado2());
    }

    public function __toString() {
        return "Rectángulo de lados " . $this->getLado1() . " y " . $this->getLado2() .
               ". Área: " . $this->calcularArea() .
               ". Perímetro: " . $this->calcularPerimetro();
    }
}
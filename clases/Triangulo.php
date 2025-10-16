<?php


require_once 'Figura.php';

class Triangulo extends FiguraGeometrica {
    protected $lado2;
    protected $lado3;

    public function __construct($lado1, $lado2, $lado3) {
        parent::__construct('Triángulo', $lado1);
        $this->setLado2($lado2);
        $this->setLado3($lado3);
    }

    public function __destruct() {
        // Destructor vacío
    }

    public function setLado2($lado2) {
            $this->lado2 = $lado2;
        
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado3($lado3) {
            $this->lado3 = $lado3;
    
    }

    public function getLado3() {
        return $this->lado3;
    }

    public function calcularArea() {
        $b = $this->getLado2();
        $c = $this->getLado3();
        
        $area = ($b * $c) / 2;
        return $area;
    }

    public function calcularPerimetro() {
        return $this->getLado1() + $this->getLado2() + $this->getLado3();
    }

    public function __toString() {
        return "Triángulo de lados " . $this->getLado1() . ", " . $this->getLado2() . " y " . $this->getLado3() .
               ". Área: " . $this->calcularArea() .
               ". Perímetro: " . $this->calcularPerimetro();
    }
}
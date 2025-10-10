<?php

require_once 'Figura.php'; // Importamos la clase base

class Circulo extends FiguraGeometrica {
    protected $radio;

    // Constructor
    public function __construct($radio) {
        parent::__construct("Círculo", $radio);
        $this->radio = $radio;
    }

    // Destructor
    public function __destruct() {
        // Destructor vacío (no hace nada especial)
    }

    // Getter y Setter específicos del círculo
    public function getRadio() {
        return $this->radio;
    }

    public function setRadio($radio) {
        $this->radio = $radio;
        $this->lado1 = $radio; // sincronizamos con el atributo heredado
    }

    // Método para calcular el área del círculo
    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }

    // Método para calcular el perímetro del círculo
    public function calcularPerimetro() {
        return 2 * pi() * $this->radio;
    }

    // Método mágico __toString() para describir la figura
    public function __toString() {
        return "Figura: {$this->tipoFigura}\n" .
               "Radio: {$this->radio}\n" .
               "Área: " . round($this->calcularArea(), 2) . "\n" .
               "Perímetro: " . round($this->calcularPerimetro(), 2) . "\n";
    }
}

?>

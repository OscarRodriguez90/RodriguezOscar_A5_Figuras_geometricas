<?php

class Rectangulo extends Figura {
    protected $ancho;
    protected $altura;

    public function __construct($ancho, $altura) {
        $this->setAncho($ancho);
        $this->setAltura($altura);
    }

    public function setAncho($ancho) {
        if ($ancho > 0) {
            $this->ancho = $ancho;
        } else {
            echo "El ancho debe ser un número positivo.<br>";
            
        }
    }

    public function getAncho() {
        return $this->ancho;
    }

    public function setAltura($altura) {
        if ($altura > 0) {
            $this->altura = $altura;
        } else {
            echo "La altura debe ser un número positivo.<br>";
            
        }
    }

    public function getAltura() {
        return $this->altura;
    }

    public function area() {
        return $this->ancho * $this->altura;
    }

    public function perimetro() {
        return 2 * ($this->ancho + $this->altura);
    }
}
<?php

<?php

class Figura {
    protected $dimensiones = [];

    public function setDimensiones(array $dimensiones) {
        $this->dimensiones = $dimensiones;
    }

    public function getDimensiones() {
        return $this->dimensiones;
    }

    public function area();
    public function perimetro();
}
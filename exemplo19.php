<?php

abstract class FiguraGeometrica{
    private $tipo;

    public function __construct($tipo)
    {
        $this->tipo = $tipo;
    }

    public function printCaracteristicas()
    {
        $areaTemp = $this->area();
        $perimetrotemp = $this->perimetro();
        echo "Tipo: $this->tipo, Area: $areaTemp, Perimetro: $perimetrotemp";
    }

    public abstract function area();
    public abstract function perimetro();
}

class Circunferencia extends FiguraGeometrica{
    private $raio;

    public function __construc($tipo, $raio)
    {
        // operador de resolução de escopo ::
        parent::__construct($tipo);
        $this->raio = $raio;
    }

    public function area()
    {
        return 3.14 * $this->raio * $this->raio;
    }

    public function perimetro()
    {
        return 2 * 3.14 * $this->raio;
    }
}
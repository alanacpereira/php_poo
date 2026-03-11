<?php

class imc
{

    public $peso;
    public $altura;

    public function __construct($peso, $altura)
    {
        $this->peso = $peso;
        $this->altura = $altura;
    }

    // Uso this quando é uma variavél da classe
    public function calcularImc() {
        return $this->peso / ($this->altura * $this->altura);
    }
}

$lili = new imc (70,1.70);

$imc = $lili->calcularImc();

echo "Esse é o seu IMC: "."<br>". $imc;

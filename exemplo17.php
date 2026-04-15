<?php 

class Visibilidade { 

//Atributos - Proriedades
    public $varPublic;
    protected $varProtected;
    private $varPrivate; 
    
    public function __construct($varPublic, $varProtected, $varPrivate)
    {
        $this->varPublic = $varPublic;
        $this->varProtected = $varProtected;
        $this->varPrivate = $varPrivate;
    }
    
    public function publicFunc()
    {
        echo "Método Público <br>";
    }

    public function protectedFunc()
    {
        echo "Método Protegido <br>";
    }

    public function privateFunc()
    {
        echo "Método Privado <br>";
    }
}

$teste = new Visibilidade(1,2,3);
echo "Atributo Public = $teste->varPublic <br>";
// echo "Atributo Protected = $teste->varProtected <br>";
// echo "Atributo Private = $teste->varPrivate <br>";

//Protegemos os filhos e privamos de tudo 
echo "<br>";
$teste->publicFunc();
$teste->protectedFunc();
$teste->privateFunc();
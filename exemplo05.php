<?php

class Funcionario
{
    public $nome;
    public $salario;
    public $previdencia;
    public $descontos;
    public $tipofuncionarios;

    function __construct($nome, $salario, $previdencia)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->previdencia = $previdencia;
        $this->descontos = $this->calcularDescontos();
        $this->tipofuncionarios = $this->categorizarFuncionario();
    }

    function calcularDescontos()
    {
        return number_format($this->salario*0.275 + $this->previdencia, 2, ',' , '.');
    }

    function categorizarFuncionario(): string
    {
        $salario = $this->salario;

        if($salario >= 1000 && $salario < 2000) {
            $tipofuncionario = "Júnior";
        } else if ($salario >= 2000 && $salario < 3000){
            $tipofuncionario = "Pleno" ;
        } else if ($salario >= 3000){
            $tipofuncionario = "Sênior" ;
        } else {
            $tipofuncionario = "Estagiário";
        }

        return $tipofuncionario;
    }
}

$joao = new Funcionario('João Filho', 1000, 100);
$maria = new Funcionario('Maria Rute', 2000, 200);
$jose = new Funcionario('José Salgado', 3000, 300);

echo "O Funcionário $joao->nome é $tipofuncionario e o valor do desconto é de $joao->descontos. <br>";
echo "O Funcionário $maria->nome é $tipofuncionario e o valor do desconto é de $maria->descontos. <br>";
echo "O Funcionário $jose->nome é $tipofuncionario e o valor do desconto é de $jose->descontos. <br>";
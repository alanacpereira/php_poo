<?php

echo "Calculando o IMC"."<br>";

// Uso o readline para que ele seja como um "input", coloco minhas imformações no php
// Porém ele só executa no terminal
$peso = readline("Digite seu peso: ");
$altura = readline("Digite sua altura: ");

$imc = $peso / ($altura * $altura);

echo "O IMC é:" .$imc; 
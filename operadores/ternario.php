<?php

$nota = 4;

if ($nota > 5) {

    $resultado = "Aprovado";

} else {

    $resultado = "Reprovado";

}

echo "$resultado <br>";

// ======================================== ou

# condição ? verdadeiro : falso;

$nota = 10;

$resultado = $nota > 5 ? ($nota > 9 ? "Aprovado excelente!" : "Aprovado") : "Reprovado"; //Se for menos 8, 7, 6 e 5 apenas dizer "Aprovado", mas se acima de 9, vai dzier "Aprovado excelente" e Se for menor 5 ser "Reprovado";

echo "$resultado <br>";

// ======================================== ou

# condição ? verdadeiro : falso;

$nota = 8;

$resultado = $nota > 5 ? ($nota > 9 ? "Aprovado excelente!" : "Aprovado") : "Reprovado";

echo "$resultado <br>";

// ======================================== ou

# condição ? verdadeiro : falso;

$nota = 7;

$resultado = $nota > 5 ? "Aprovado" : "Reprovado";

echo "$resultado <br>";

/* RESULTADO - SAÍDA

    Reprovado
    Aprovado excelente!
    Aprovado
    Aprovado

*/

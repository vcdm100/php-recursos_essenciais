<?php

$valor = [ 
    "PHP" => 7.2,
    "Dart" => 2,
    "C#" => 9

];

/* if (isset($valor['C#'])) {

    echo $valor['C#'];

} else {

    echo 'Curso de C# não encontrado';

} */

// ou =======================================================================

# condição ? verdadeiro : falso;

/* $cSharp = isset($valor['C#']) ? $valor['C#'] : 'Curso de C# não encontrado';

echo $cSharp; */

// ou =======================================================================

$cSharp = $valor['C#'] ?? 'Curso de C# não encontrado';

echo $cSharp; #VAI RETORNAR O "VALOR PADRÃO" ISSO DAQUI É BEM ÚTIL.

/* RESULTADO - SAÍDA

    9 

*/
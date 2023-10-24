<?php

var_dump(isset($valor)); #ELE DEU O RESULTADO AQUI COMO FALSO OU SEJA QUANDO A VARIÁVEL NÃO É DEFINIDA QUANDO ELA É NULA OU QUANDO ELA NÃO FOI INICIALIZADA.

// ============================================================================

//$valor2 = 10;

echo "<br>";
var_dump(isset($valor2)); #VAI ACONTECER VAI VERDADEIRO POR EXEMPLO QUE O VALOR IGUAL A 10, NÓS VAMOS VER QUE ELA VAI RETORNAR VERDADEIRO PORQUE AGORA NÓS TEMOS REALMENTE A VARIÁVEL DEFINIDA.

// ============================================================================

var_dump($valor2); #VAI ACONTECER COMO AVALIAR O VALOR NÃO FOI DEFINIDA E NEM FUNÇÃO (ISSET), ENTÃO VAI TER UM ERRO DIZENDO QUE A VARIÁVEL NÃO FOI DEFINIDA COMO ESSE ERRO ELE É UMA NOTIFICAÇÃ DE ERRO E COMO "NULO".

// ============================================================================

$valor = [ 
    "PHP" => 7.2,
    "Dart" => 2
];

echo "<br>";
var_dump(isset($valor['C#'])); #ELE DEU O RESULTADO AQUI COMO FALSO OU SEJA QUANDO A ARRAY NÃO É ENCONTRADA.

echo "<br>";
var_dump(isset($valor['PHP'])); #ELE DEU O RESULTADO AQUI COMO VERDADEIRO OU SEJA QUANDO A ARRAY É ENCONTRADA.

// ou

echo "<br>";
if (isset($valor['C#'])) {

    echo $valor['C#'];

} else {

    echo 'Curso de C# não encontrado';

}

#ELE DEU O RESULTADO AQUI COMO: Curso de C# não encontrado.

// ============================================================================

$valor = [ 
    "PHP" => 7.2,
    "Dart" => 2,
    "C#" => 9

];

echo "<br>";
if (isset($valor['C#'])) {

    echo $valor['C#'];

} else {

    echo 'Curso de C# não encontrado';

}

#ELE DEU O RESULTADO AQUI COMO: 9.

/* RESULTADO - SAÍDA

    bool(false)

    bool(false)

    Warning: Undefined variable $valor2 in C:\treinaweb\php-recursos-essenciais\funcoes-verificacao\isset.php on line 14 
    NULL

    bool(false)

    bool(true)

    Curso de C# não encontrado
    
    9

*/
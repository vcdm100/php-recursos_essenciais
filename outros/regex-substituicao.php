<?php

$aniversarios = "Victor 04/11 Bruna 29/04 Robson 26/10 Simone 30/08";

$nomes = preg_replace('/[0-9\/]+/', '', $aniversarios);
#Os valores serão ignorados menor strings.
var_dump($nomes);

$nomes2 = preg_replace(
    ['/[a-z]+/i', '/[0-9\/]+/'],
    ['#', '*'], 
    $aniversarios
);
# ('/[a-z]+/i') ==> # e ('/[0-9\/]+/']) ==> *
var_dump($nomes2);

// ====================================================================

$nomes2 = preg_replace(
    ['/[a-z]+/i', '/[0-9\/]+/'],
    ['#', '*'], 
    $aniversarios,
    2,
    $contador
);
# Quantidade de substituiçâo somente primeiras duas ocorrências de cada padrão
var_dump($nomes2, $contador); // $contador ==> contando quantidades de vezes apenas '#' e '*'.

// ====================================================================

$aniversarios2 = "Victor 2023-04-11 Bruna 2023-04-29 Robson 2023-10-26 Simone 2023-08-30";

$formatado = preg_replace_callback(
    '/[0-9-]+/',
    'tratar',
    $aniversarios2
);

function tratar(array $item): string {
    return DateTime::createFromFormat('Y-m-d', $item[0])->format('d/m/Y'); 
    // ou var_dump($item[0]);
}

var_dump($formatado);

// [0] ==> Se fizer dsso na posição ZERO.

/* RESULTADO - SAÍDA

    string(30) "Victor Bruna Robson Simone "

    string(15) "# * # * # * # *"

    string(33) "# * # * Robson 26/10 Simone 30/08"

    int(4)
    
    string(70) "Victor 11/04/2023 Bruna 29/04/2023 Robson 26/10/2023 Simone 30/08/2023"

*/
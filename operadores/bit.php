<?php

var_dump(decbin(12));
echo "<br>";
var_dump(decbin(9));
echo "<br>";

// ===================================
// & (E - and)

echo "<br>";
var_dump(bindec(1000));
echo "<br>";
var_dump(12 & 9);
echo "<br>";

// ===================================
// | (OU - Or inclusivo)

echo "<br>";
var_dump(bindec(1101));
echo "<br>";
var_dump(12 | 9);
echo "<br>";

// ===================================
// ^ (XOR - Or exclusivo)

echo "<br>";
var_dump(bindec(101)); #Não pode ser ZERO no inicio ou seja primeiro.
echo "<br>";
var_dump(12 ^ 9);
echo "<br>";

// ===================================
// ~ (NÃO - NOT)

echo "<br>";
var_dump(~12);
echo "<br>";
var_dump(~9);
echo "<br>";

// ===================================
// >> (DESLOCAMENTO À DIREITA)

echo "<br>";
var_dump(bindec(100101));
echo "<br>";
var_dump(75 >> 1);
echo "<br>";
var_dump(floor(75 / 2)); //'foor' retira do valor decimal, retornou valor menor;
echo "<br>";

echo "<br>";
var_dump(bindec(10010));
echo "<br>";
var_dump(75 >> 2);
echo "<br>";
var_dump(floor(75 / 4));
echo "<br>";

// ===================================
// << (DESLOCAMENTO À ESQUERDA)

echo "<br>";
var_dump(bindec(10010110));
echo "<br>";
var_dump(75 << 1);
echo "<br>";
var_dump(75 * 2);
echo "<br>";

echo "<br>";
var_dump(bindec(100101100));
echo "<br>";
var_dump(75 << 2);
echo "<br>";
var_dump(75 * 4);
echo "<br>";

/* RESULTADO - SAÍDA

    string(4) "1100"
    string(4) "1001"

    int(8)
    int(8)

    int(13)
    int(13)

    int(5)
    int(5)

    int(-13)
    int(-10)

    int(37)
    int(37)
    float(37)

    int(18)
    int(18)
    float(18)

    int(150)
    int(150)
    int(150)

    int(300)
    int(300)
    int(300)

*/
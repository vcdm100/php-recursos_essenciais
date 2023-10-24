<?php

// dec.bin($decimal) <> bindec($binario)
// dec.oct($decimal) <> octdec($octal)
// dec.hex($decimal) <> hexdec($hexadecimal)

$dec = 980;
$bin = 0b1111010100;
$oct = 01724;
$hex = 0x3d4;

var_dump($dec, $bin, $oct, $hex);

$int = PHP_INT_MAX; 
$int2 = PHP_INT_MIN;

var_dump($int); #ELA VAI RETORNAR O TAMANHO MÁXIMO DE UM INTEIRO.
var_dump($int2); #ELA VAI RETORNAR O TAMANHO MÍNIMO DE UM INTEIRO.

var_dump($int + 1); #SE FIZER INT MAIS UM, VAI ACONTTECER, QUE ELE VAI TRANSFORMAR EM FLOAT AUTOMATICAMENTE CAUSOU A NOTAÇÃO CIENTÌFICA!

/* RESULTADO - SAÍDA

    int(980) int(980) int(980) int(980)

    int(9223372036854775807)
    int(-9223372036854775808) 

    float(9,223372036854776E+18)

*/
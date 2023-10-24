<?php

var_dump(1 <=> 1); //RESULTADO: 0 como 1 - 1 = int(0)
#ELE RETORNA ZERO ENTÃO SE EU COMPARAR UM OPERADOR SPACESHIP (nave espacial) E UM TAMBÉM EU SEI QUE ELES SÃO IGUAIS ISSO VAI ME RETORNAR O VALOR ZERO.

echo "<br>";
var_dump(1 <=> 2); //RESULTADO: -1 como 1 - 2 = int(-1)

echo "<br>";
var_dump(2 <=> 1); //RESULTADO: 1 como 2 - 1 = int(1)
echo "<br>";

// Integers
echo "<br>";
echo 1 <=> 1;
echo "<br>"; //RESULTADO: 0 como 1 - 1 = 0
echo 1 <=> 2;
echo "<br>"; //RESULTADO: -1 como 1 - 2 = -1
echo 2 <=> 1;
echo "<br>"; //RESULTADO: 1 como 1 - 2 = -1

// Floats
echo "<br>";
echo 1.5 <=> 1.5;
echo "<br>"; //RESULTADO: 0 como 1.5 - 1.5 = 0
echo 1.5 <=> 2.5;
echo "<br>"; //RESULTADO: -1 como 1.5 - 2.5 = -1
echo 2.5 <=> 1.5;
echo "<br>"; //RESULTADO: 1 como 2.5 - 1.5 = 1

// Strings
echo "<br>";
echo "a" <=> "a";
echo "<br>"; //RESULTADO: 0 como 'a' - 'a' = 0
echo "a" <=> "b";
echo "<br>"; //RESULTADO: -1 como 'a' - 'b' = -1 e também como 'b' - 'c' = -1
echo "b" <=> "a";
echo "<br>"; //RESULTADO: 1 como 'b' - 'a' = 1 e também como 'c' - 'b' = 1

echo "<br>";
echo "aa" <=> "aa"; //RESULTADO: 0 como 'aa' - 'aa' = 0
echo "<br>";
echo "a" <=> "aa";
echo "<br>"; //RESULTADO: -1 como 'a' - 'aa' = -1
echo "zz" <=> "aa";
echo "<br>"; //RESULTADO: 1 como 'zz' - 'aa' = 1

// Arrays
echo "<br>";
echo [] <=> [];
echo "<br>"; //RESULTADO: 0 como [] - [] = 0
echo [1, 2, 3] <=> [1, 2, 3];
echo "<br>"; //RESULTADO: 0 como [1,2,3] - [1,2,3] = 0
echo [1, 2, 3] <=> [];
echo "<br>"; //RESULTADO: 1 como [1,2,3] - [] = 1
echo [1, 2, 3] <=> [1, 2, 1];
echo "<br>"; //RESULTADO: 1 como 3 - 1 = 1
echo [1, 2, 3] <=> [1, 2, 4];
echo "<br>"; //RESULTADO: -1 como 3 - 4 = -1

// Objects
echo "<br>";
$a = (object) ["a" => "b"];
$b = (object) ["a" => "b"];
echo $a <=> $b; 
echo "<br>"; //RESULTADO: 0 como 
// 'a' - 'b'
// 'a' - 'b' = 0 (a - a) e 0 (b - b)

$a = (object) ["a" => "b"];
$b = (object) ["a" => "c"];
echo $a <=> $b; 
echo "<br>"; //RESULTADO: -1 como
// 'a' - 'b'
// 'a' - 'c' = 0 (a - a) e -1 (b - c)

$a = (object) ["a" => "c"];
$b = (object) ["a" => "b"];
echo $a <=> $b;
echo "<br>"; //RESULTADO: 1 como
// 'a' - 'c'
// 'a' - 'b' = 0 (a - a) e 1 (c - b)

// valores e tipos precisam coincidir
$a = (object) ["a" => "b"];
$b = (object) ["b" => "b"]; 
echo $a <=> $b;
echo "<br>"; //RESULTADO: 1
// 'a' - 'b'
// 'b' - 'b' = 1 (b - a) e 0 (b -b)
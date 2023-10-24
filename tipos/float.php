<?php

ini_set("precision", 17);

$n1 = 10.23;
$n2 = .23;
$n3 = 75e3; // 75*(10^3 como e3) = 75000
$n4 = 75e-3; // 75*(10^-3 como e-3) = 0,075

var_dump($n1, $n2, $n3, $n4);

var_dump(.1 + .2);

var_dump((.1 + .7) * 10);
var_dump((int) ((.1 + .7) * 10));

var_dump(1_000_000);
var_dump(75_000.98);

/* RESULTADO - SAÍDA

    float(10,23) float(0,23) float(75000) float(0,075) 
    
    float(0,3000000000000004) 
    
    float(7,999999999999999) 
    int(7)

    int(1000000)
    float(75000,98)

*/
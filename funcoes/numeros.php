<?php

var_dump(abs(-6)); //abs = Valor absoluto
var_dump(abs(6));

var_dump(round(12.4)); // Seja somente o nùmero inteiro no caso 12 sò que para ele arredondar.
var_dump(round(12.5)); 
var_dump(round(12.6));

var_dump(round(12.6189, 2));
var_dump(round(12.6129, 2));

var_dump(ceil(14.1));
var_dump(floor(14.1));

var_dump(mt_rand(1, 60));

var_dump(pow(3,2));
var_dump(3**2);

var_dump(sqrt(9));
var_dump(sqrt(10));

/* RESULTADO - SAÍDA

    int(6) 
    int(6) 
    
    float(12) 
    float(13) 
    float(13) 
    
    float(12.62) 
    float(12.61) 
    
    float(15) 
    float(14) 
    
    int(56) 
    
    int(9) 
    int(9) 
    
    float(3) 
    float(3.1622776601683795)

*/
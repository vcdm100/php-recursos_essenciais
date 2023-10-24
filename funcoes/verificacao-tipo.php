<?php

# POR EXEMPLO SE EU QUISER VERIFICAR SE É UM INTEIRO ou QUAL TIPO.

#TIPO: INTEIRO
var_dump(is_int(123)); // true
var_dump(is_int("123")); // false

#TIPO: FLOAT
var_dump(is_float(123.34)); // true
var_dump(is_float("123.34")); // false

#TIPO: NÚMERICO
var_dump(is_numeric(123)); // true
var_dump(is_numeric("123")); // true
var_dump(is_numeric("123.34")); // true
var_dump(is_numeric(123.34)); // true

#TIPO: STRING
var_dump(is_string("asasdas")); // true

#TIPO: BOOL
var_dump(is_bool(true)); // true

#TIPO: Se é uma váriavel escalar
var_dump(is_scalar("string")); // true
var_dump(is_scalar([1,2,3])); // false

var_dump(gettype("String"));
var_dump(gettype(123));
var_dump(gettype(12.54));
var_dump(gettype(true));

/* RESULTADO - SAÍDA

    string(6) "string"
    string(7) "integer" 
    string(6) "double" 
    string(7) "boolean"

*/
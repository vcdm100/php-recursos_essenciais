<?php

$frase = "Treinaweb Cursos";

$posicaoR = strpos($frase, 'c'); #Procurar a posição de letra - número.
#Se não encontrar uma letra indiciada então ele vai retornar como falso.

$posicaoR = strpos($frase, 'r', 9); #A partir da posição 9º até encontrar.

$posicaoR = strpos($frase, 'web'); #Posição inicial será w como 6.

var_dump($posicaoR);

// ========================================================================

$fraseModificada = str_replace ('r', '*', $frase);
var_dump($fraseModificada); #uma letra 'r' será trocada por *

$fraseModificada = str_replace (['r','w'],'*', $frase);
var_dump($fraseModificada); #Letras 'r' e 'w' serão trocadas por *

$fraseModificada = str_replace (['r','w'],['*', '#'], $frase);
var_dump($fraseModificada); #Letras 'r' será por * e 'w' será por #

$fraseModificada2 = substr($frase, 6, 3);
var_dump($fraseModificada2); #(variável, partir de posição incial, qunatidade de letras para mostrar)

$fraseModificada2 = substr($frase, -6);
var_dump($fraseModificada2); #(variável, partir de posição incial)

/* RESULTADO - SAÍDA

    int(6)

    string(16) "T*einaweb Cu*sos" 

    string(16) "T*eina*eb Cu*sos" 

    string(16) "T*eina#eb Cu*sos" 

    string(3) "web " 

    string(6) "Cursos"

*/
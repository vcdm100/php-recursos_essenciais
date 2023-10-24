<?php

var_dump(strtoupper('Treinaweb Cursos'));
#ELA CONVERTE TODOS OS CARACTERES DA MINHA STRING PARA MAIÚSCULO.

var_dump(strtolower('TreinaWEB CurSOS'));
#ELA CONVERTE TODOS OS CARACTERES DA MINHA STRING PARA MINÚSCULO.

var_dump(ucfirst('treinaweb cursos'));
#ELA VAI RETORNAR PARA SOMENTE A LETRA DO NOSSO STRING EM MAIÚSCULO COMO SE FOSSE UM PARÁGRAFO.

var_dump(ucwords('treinaweb cursos online'));
#ELE VAI RETORNAR CADA CARACTER INICIAL DE UMA PALAVRA EM MAIÚSCULO.

var_dump(ltrim('         treinaweb          '));
#FUNÇÃO LTRIM QUE ELIMINA O ESPAÇO À ESQUERDA.

var_dump(rtrim('         treinaweb          '));
#FUNÇÃO LTRIM QUE ELIMINA O ESPAÇO À DIREITA.

var_dump(trim('         treinaweb          '));
#FUNÇÃO LTRIM QUE ELIMINA TANTO À DIREITA QUANTO À ESQUERDA ACABA COM OS ESPAÇOS NÉ NO INÍCIO E NO FIM DA NOSSA STRING.

/* RESULTADO - SAÍDA

    string(16) "TREINAWEB CURSOS"
    
    string(16) "treinaweb cursos" 
    
    string(16) "Treinaweb cursos" 
    
    string(23) "Treinaweb Cursos Online" 
    
    string(19) "treinaweb " 
    
    string(18) " treinaweb" 
    
    string(9) "treinaweb"

*/
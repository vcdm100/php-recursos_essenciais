<?php

#EU QUERO VALIDAR PARA SABER SE EU TENHO UM PADRÃO DE E-MAIL VÁLIDO NESSA STRING COMO QUE EU FAÇO PARA ISSO EU POSSO UTILIZAR AQUI UM IF E A FUNÇÃO QUE A FUNÇÃO PREGNET AQUI ESTÁ ELA ELA RECEBE O QUÊ PRIMEIRO O PADRÃO QUE A EXPRESSÃO REGULAR E EM SEGUIDA A STRING QUE EU QUERO VALIDAR VERIFICAR SE TEM O PADRÃO DENTRO DELA QUE NO CASO É O E-MAIL ESSA FUNÇÃO ELA RECEBE O INTEIRO 1 SE O PADRÃO FOR ENCONTRADO E ZERO SE O PADRÃO NÃO FOR ENCONTRADO.

# i = Não se importa essa letra é maiúscula ou minúscula.

$email = "victor.moura.webart@gmail.com";

if (preg_match("/^[a-z0-9_.]+@[a-z0-9]+\.[a-z]+([a-z])?/i", $email) === 1) {
    echo "válido";
} else {
    echo "inválido";
}

// ===========================================================================

$email = "victo#r.moura.webart@gmail.com";

if (preg_match("/^[a-z0-9_.]+@[a-z0-9]+\.[a-z]+([a-z])?/i", $email) === 1) {
    echo "válido";
} else {
    echo "inválido";
}

// ===========================================================================

$emails = ["victor.mourta.webart@gmail.com.br", "victor@gmail", "vitãomoura@gmail.com", "vitaomoura100@gmail.com", "victor"];

$validos = preg_grep("/^[a-z0-9_.]+@[a-z0-9]+\.[a-z]+([a-z])?/i", $emails);
$invalidos = preg_grep("/^[a-z0-9_.]+@[a-z0-9]+\.[a-z]+([a-z])?/i", $emails, PREG_GREP_INVERT); #Inverte

var_dump($validos, $invalidos);


/* RESULTADO - SAÍDA

    válido
    
    inválido
    
    #validos
    array(2) {
        [0]=>
            string(33) "victor.mourta.webart@gmail.com.br"
        [3]=>
            string(23) "vitaomoura100@gmail.com"
    }
    #invalidos
    array(3) {
        [1]=>
            string(12) "victor@gmail"
        [2]=>
            string(21) "vitãomoura@gmail.com"
        [4]=>
            string(6) "victor"
    }

*/
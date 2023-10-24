<?php

$aniversarios = "Victor 04/11 Bruna 29/04 Robson 26/10 Simone 30/08";

$datas = preg_split('/[a-z]+\s/i', $aniversarios, -1, PREG_SPLIT_NO_EMPTY);
#As letras serão ignoradas menor os valores.
var_dump($datas);
//PREG_SPLIT_NO_EMPTY = PARA ELE NÃO PEGAR VALORES VAZIOS

// ========================================================================

$endereco = "Av Paulista, 100 - Sao Paulo/SP";

preg_match('/([a-zA-Z_\s]+),\s([0-9]+)\s-\s([a-zA-Z\s]+)\/([A-Z]{2})/', $endereco, $partes);

var_dump($partes);

/* RESULTADO - SAÍDA

    array(4) {
        [0]=>
            string(6) "04/11 "
        [1]=>
            string(6) "29/04 "
        [2]=>
            string(6) "26/10 "
        [3]=>
            string(5) "30/08"
    }

    array(5) {
        [0]=>
            string(31) "Av Paulista, 100 - Sao Paulo/SP"
        [1]=>
            string(11) "Av Paulista"
        [2]=>
            string(3) "100"
        [3]=>
            string(9) "Sao Paulo"
        [4]=>
            string(2) "SP"
    }

*/
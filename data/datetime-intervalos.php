<?php

$bruna = new DateTime('2023-04-29');
$victor = new DateTime('2023-11-04');

$intervalo = $bruna->diff($victor);
#MÉTODO QUE CALCULA A DIFERENÇA ENTRE DUAS DATAS PARA SABER QUANTO TEMPO TEM DE DIFERENÇA ENTRE ANIVERSÁRIO DA BRUNA E O MEU ANIVERSÁRIO.

var_dump($intervalo);

/* RESULTADO - SAÍDA

object(DateInterval)#3 (10) {
        ["y"]=>
            int(0)
        ["m"]=>
            int(6)
        ["d"]=>
            int(6)
        ["h"]=>
            int(0)
        ["i"]=>
            int(0)
        ["s"]=>
            int(0)
        ["f"]=>
            float(0)
        ["invert"]=>
            int(0)
        ["days"]=>
            int(189)
        ["from_string"]=>
            bool(false)
    } 

obs: total 189 dias ou seja, 6 meses e 6 dias de diferente entre duas datas.

*/

var_dump($intervalo->format('%m meses, %d dias'));
#QUANTIDADE DE MESES E DIAS ENTRE OS DOIS INTERVALOS

$bruna->add(new DateInterval('P6M6D')); #6M = 6 MESES e 6D = 6 DIAS
var_dump($bruna);

$bruna-> sub(new DateInterval(('P15D')));
var_dump($bruna);

/* RESULTADO - SAÍDA

    string(15) "6 meses, 6 dias"

    object(DateTime)#1 (3) {
        ["date"]=>
            string(26) "2023-11-04 00:00:00.000000"
        ["timezone_type"]=>
            int(3)
        ["timezone"]=>
            string(3) "UTC"
    }

    object(DateTime)#1 (3) {
        ["date"]=>
            string(26) "2023-10-20 00:00:00.000000"
        ["timezone_type"]=>
            int(3)
        ["timezone"]=>
            string(3) "UTC"
    }

*/
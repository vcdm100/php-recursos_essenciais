<?php

$aniversarioBruna = new DateTimeImmutable('2023-04-29');

var_dump($aniversarioBruna);

$aniversarioVictor = $aniversarioBruna-> add(new DateInterval('P6M6D'));

var_dump($aniversarioBruna, $aniversarioVictor);

/* RESULTADO - SAÍDA

    object(DateTimeImmutable)#1 (3) {
        ["date"]=>
            string(26) "2023-04-29 00:00:00.000000"
        ["timezone_type"]=>
            int(3)
        ["timezone"]=>
            string(3) "UTC"
    }

    object(DateTimeImmutable)#1 (3) {
        ["date"]=>
            string(26) "2023-04-29 00:00:00.000000"
        ["timezone_type"]=>
            int(3)
        ["timezone"]=>
            string(3) "UTC"
    }
    object(DateTimeImmutable)#3 (3) {
        ["date"]=>
            string(26) "2023-11-04 00:00:00.000000"
        ["timezone_type"]=>
            int(3)
        ["timezone"]=>
            string(3) "UTC"
    }

*/
<?php

$aniversario = new DateTime('2023-10-24');

$aniversario->setTime(21,12,30); //(hora, minuto, segundo).
$aniversario->setDate(2023,11,04);
//$aniversario->setTimestamp((500_000_000));
/* object(DateTime)#1 (3) {
    ["date"]=>
    string(26) "1985-11-05 00:53:20.000000"
    ["timezone_type"]=>
    int(3)
    ["timezone"]=>
    string(3) "UTC"
    } */
var_dump($aniversario);

var_dump($aniversario->getOffset()/60/60);
var_dump($aniversario->getTimezone());
var_dump($aniversario->getTimestamp());

$aniversario->modify('next Saturday');
$aniversario->setTime(21,12,30);

var_dump($aniversario);

/* RESULTADO - SAÍDA

    object(DateTime)#1 (3) {
        ["date"]=>
        string(26) "2023-11-04 21:12:30.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(3) "UTC"
    }

    int(0)

    object(DateTimeZone)#2 (2) {
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(3) "UTC"
    }

    int(1699132350)

    object(DateTime)#1 (3) {
        ["date"]=>
        string(26) "2023-11-11 21:12:30.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(3) "UTC"
    }

*/
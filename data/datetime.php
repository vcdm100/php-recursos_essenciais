<?php

date_default_timezone_set('America/Recife'); //Fuso horário

$agora = new DateTime;
$ontem = new DateTime('yesterday');
$outraData = new DateTime('2023-11-04');
$outraData2 = DateTime::createFromFormat("d/m/Y H:i:s", "24/10/2023 00:00:00");

var_dump($agora, $ontem, $outraData->format('d/m/Y'), $outraData2);

// =============================================================================

function iso_para_brasil($data) {
    $dateTime = new DateTime($data);

    return $dateTime->format("d/m/Y");
}

function brasil_para_iso($data) {
    $dateTime = DateTime::createFromFormat("d/m/Y", $data);

    return $dateTime->format('Y-m-d');
}

var_dump(iso_para_brasil('2023-10-24')); // Padrão para banco de dados

var_dump(brasil_para_iso('24/10/2023'));

/* RESULTADO - SAÍDA

    object(DateTime)#1 (3) {
        ["date"]=>
        string(26) "2023-10-24 13:51:25.589122"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(14) "America/Recife"
    }

    object(DateTime)#2 (3) {
        ["date"]=>
        string(26) "2023-10-23 00:00:00.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(14) "America/Recife"
    }

    string(10) "04/11/2023"

    object(DateTime)#4 (3) {
        ["date"]=>
        string(26) "2023-10-24 00:00:00.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(14) "America/Recife"
    }

// ======================================================

    string(10) "24/10/2023"

    string(10) "2023-10-24"

*/
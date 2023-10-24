<?php

date_default_timezone_set('America/Recife'); //Fuso horário

// ===========================================================================

$data = date("D/M/y");
var_dump($data);

# ou

$data = date("d/m/Y");
var_dump($data);

// ===========================================================================

$data = date("d/m/Y H:i");
var_dump($data);
var_dump(date('e'), date('P'));

var_dump(time()); #QUANTIDADE DE SEGUNDOS DESDE PRIMEIRO MÊS DE JANEIRO DE 1970.

// ===========================================================================

$amanha = time() + (60*60*24); # (60 segundos * 60 minutos * 24 horas)
$data = date("d/m/Y H:i", $amanha);
var_dump($data);

# ou

$amanha = strtotime("+1 day"); #Mais um dia para amanhã.
$data = date("d/m/Y H:i", $amanha);
var_dump($data);

// ===========================================================================

$amanhã = strtotime("2023-10-24 11:30");
$data = date("d/m/Y H:i", $amanha);

function formata_data_para_br ($data) {

    $timestamp = strtotime($data);

    return date ("d/m/Y", $timestamp);

}

echo formata_data_para_br('2023-12-31');

// ===========================================================================

/* RESULTADO - SAÍDA

    string(10) "Tue/Oct/23"

    string(10) "24/10/2023" 

    string(16) "24/10/2023 11:42" 
    string(14) "America/Recife" string(6) "-03:00"

    string(16) "25/10/2023 11:42"

    string(16) "25/10/2023 11:42"

    31/12/2023

*/

$today = date("F j, Y, g:i a");             // March 10, 2001, 5:16 pm
$today = date("m.d.y");                     // 03.10.01
$today = date("j, n, Y");                   // 10, 3, 2001
$today = date("Ymd");                       // 20010310
$today = date('h-i-s, j-m-y, it is w Day'); // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.'); // it is the 10th day.
$today = date("D M j G:i:s T Y");             // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');   // 17:03:18 m is month
$today = date("H:i:s");                       // 17:16:18
$today = date("Y-m-d H:i:s");                 // 2001-03-10 17:16:18 (the MySQL DATETIME format)
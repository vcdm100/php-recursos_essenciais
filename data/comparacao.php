<?php

var_dump("30/01/2023" > "24/10/2023"); // true
#Porque 30 é maior!

var_dump("2023-01-30" > "2023-10-24"); // false
#Porque 01 é menor que 10!

var_dump("2024-01-30" > "2023-10-24"); // true
#Porque 2024 é maior!

var_dump("0002" > "0001999"); // false
#Não é maior, quando possìvel converte para int;

var_dump("000-2" > "000-1999"); // true
#caractere a caractere porque 2 é maior!

var_dump(
    strtotime("2023-01-30") > strtotime("5-2-2023")
); // false porque 01 é menor!

// ======================================================================

$aniversarioBruna = new DateTimeImmutable('2023-04-29');
$aniversarioVictor = $aniversarioBruna-> add(new DateInterval('P6M6D'));

if ($aniversarioBruna > $aniversarioVictor) {
    echo "O aniversário da bruna é depois do Victor";
} else {
    echo "O aniversário do Victor é depois da Bruna";
}
/* RESULTADO - SAÍDA

    O aniversário do Victor é depois da Bruna

*/
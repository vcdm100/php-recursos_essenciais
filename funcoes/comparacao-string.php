<?php

var_dump('Treinaweb' == 0);
#SE FOR RETORNE FALSO PORQUE TREINA WEB NÃO É IGUAL AO NÚMERO INTEIRO ZERO.
var_dump('11t' == 11);
echo "<br><br>";
#ISSO É IGUAL POR QUÊ ELE ELIMINA ESSE T QUANDO ELE CONVERTE PARA INTEIRO E ENTÃO ELE VAI SER IGUAL AQUI BOM PRIMEIRA COISA NA MAIORIA DAS COMPARAÇÕES EM PHP SE NÃO QUASE TODAS A GENTE DEVE UTILIZAR O OPERADOR QUE FAZ A COMPARAÇÃO RÍGIDA COMPARA O TIPO E O VALOR.

var_dump('Treinaweb' === 0);
var_dump('11t' === 11);
echo "<br><br>";
#ESSE PROBLEMA UTILIZANDO AQUI TRÊS SINAIS DE IGUAL AQUI MESMA COISA ENTÃO AGORA ISSO DAQUI VAI PASSAR A SER FALSO PORQUE PRIMEIRO ELE VAI VER QUE NÃO É DO MESMO TIPO ENTÃO SE NÃO É DO MESMO TIPO ELE JÁ RETORNA FALSO.

// ============================================================================

var_dump(strcmp('aa', 'aa'), 'aa' <=> 'aa'); // RESULTADO: 0
echo "<br>";
var_dump(strcmp('aaa', 'aa'), 'aaa' <=> 'aa'); // RESULTADO: 1
echo "<br>";
var_dump(strcmp('aa', 'aaa'), 'aa' <=> 'aaa'); // RESULTADO: -1
echo "<br><br>";

// ============================================================================

#Vai mostrar se for igualmente!
if (strcmp('aa','aa') === 0) {

    echo "As strings são seguramente iguais";

}

echo "<br>";

#Será ignorado se for não igualmente!
if (strcmp('Aa','aa') === 0) {

    echo "As strings são seguramente iguais";

}

echo "<br>";

# Então deve ser strcasecmp que irá mostrar!
if (strcasecmp('Aa','aa') === 0) {

    echo "As strings são seguramente iguais";

}

/* RESULTADO - SAÍDA

    bool(true) bool(true)

    bool(false) bool(false)

    int(0) int(0)
    int(1) int(1)
    int(-1) int(-1)

    As strings são seguramente iguais

    As strings são seguramente iguais

*/
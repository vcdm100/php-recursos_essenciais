<?php

$nome = "Treinaweb Cursos";

var_dump($nome[10]);
var_dump($nome[6]);

$nome[10] = "c";

var_dump($nome);

// ============================================================================

echo "<h1 style='color: red;'>Treinaweb Cursos</h1>"; # Style deve usar aspas simples e não duplas! ==> Devem ter diferente aspas simples e duplas, não pode usar mesmo!
echo '<h1 style="color: red;">Treinaweb Cursos</h1>'; # ou h1 deve usar aspas simples e não duplas!

echo "<h1 style=\"color: red;\">Treinaweb Cursos</h1>"; # ou se for mesmo, então deve ter \
echo '<h1 style=\'color: red;\'>Treinaweb Cursos</h1>'; # ou se for mesmo, então deve ter \

// ===========================================================================

echo "Eu tenho R\$mil reais <br>"; # Deve usar \$ para não procurar uma váriavel

echo "\\192.168.10.10\minha-pasta\\"; # Deve usar duas \\ para mostrar

// ===========================================================================

$escola = "Treinaweb";
$curso = "PHP";
$conteudo = <<<HTML
    <h1 style="color: red">Olá $escola</h1>
    <p style='color: blue'>Bem-vindo ao curso de $curso</p>
HTML;

echo $conteudo;

#Se for colocar aspas simples para HTMl, para escapar.
$conteudo = <<<'HTML'
    <h1 style="color: red">Olá $escola \</h1>
    <p style='color: blue'>Bem-vindo ao curso de $curso</p>
    HTML;

echo $conteudo;

/* RESULTADO - SAÍDA

    String(1) "C"
    string(1) "w"
    string(16) "Treinaweb cursos"

    Treinaweb Cursos (COR: VERMELHA)
    Treinaweb Cursos (COR: VERMELHA)

    Treinaweb Cursos (COR: VERMELHA)
    Treinaweb Cursos (COR: VERMELHA)

    Eu tenho R$ mil reais
    \192.168.10.10\minha-pasta\

    Olá Treinaweb (COR: VERMELHA)
    Bem vindo ao curso de PHP (COR: AZUL)

    Olá $escola \ (COR: VERMELHA)
    Bem-vindo ao curso de $curso (COR: AZUL)

*/
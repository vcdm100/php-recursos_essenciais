<?php

echo "Treinaweb", "Cursos";
print("PHP"); # ou print "PHP" ;
echo"<br><br>";

// =================================================================

$curso = "PHP";
$versao = 7.4;

echo 'Curso de ', $curso, ' versao ', $versao, '<br>'; # Usar ,
echo 'Curso de ' . $curso, ' versao ' . $versao . '<br>'; # USar .
echo "Curso de $curso versao $versao <br><br>";

// =================================================================

$resultado = 'Curso de ' . $curso . ' versao ' . $versao;
echo $resultado;

// =================================================================

$padrao = "Curso de %s versao %0.1f";

$resultado = sprintf($padrao, $curso, $versao); 
# $curso ==> %s e $versao ==> %f  (%0.1f ==> Retirar os decimais por exemplo como 7.400000 ==> 7.4)
echo '<br><br>' . $resultado;

# ou

echo "<br>";

printf($padrao, $curso, $versao);

// =================================================================

$entrada = ['PHP', 7.4]; # como [%s,%0.1f]
# 'PHP' ==> %s e 7.4 ==> %0.1f

echo "<br>";
$resultado = vsprintf($padrao, $entrada);
echo $resultado;

# ou

echo "<br>";
vprintf("Curso de %s versao %0.1f", $entrada);

/* RESULTADO - SAÍDA

TreinawebCursosPHP

    Curso de PHP versao 7.4
    Curso de PHP versao 7.4
    Curso de PHP versao 7.4

    Curso de PHP versao 7.4

    Curso de PHP versao 7.4
    Curso de PHP versao 7.4
    Curso de PHP versao 7.4
    Curso de PHP versao 7.4

*/
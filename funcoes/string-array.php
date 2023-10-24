<?php

$cursos = explode(", ", "PHP, C#, JAVA, Python, Flutter");
var_dump($cursos);

$cursosString = implode(" - ", $cursos);
var_dump($cursosString);

$cursos = explode(", ", "PHP, C#, JAVA, Python, Flutter", 3); 
#(.... , .... , QUANTIDADE O LIMITE QUE VOCÊ QUER)
var_dump($cursos);


/* RESULTADO - SAÍDA

    array(5) { 
        [0]=> string(3) "PHP" 
        [1]=> string(2) "C#" 
        [2]=> string(4) "JAVA" 
        [3]=> string(6) "Python" 
        [4]=> string(7) "Flutter" }

    string(34) "PHP - C# - JAVA - Python - Flutter"
        
    array(3) { 
        [0]=> string(3) "PHP" 
        [1]=> string(2) "C#" 
        [2]=> string(21) "JAVA, Python, Flutter" }

*/
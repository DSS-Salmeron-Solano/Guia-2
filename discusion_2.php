<?php

$vocales = [
    'a', 'e', 'i', 'o', 'u',
    'A', 'E', 'I', 'O', 'U',
    'á', 'é', 'í', 'ó', 'ú',
    'Á', 'É', 'Í', 'Ó', 'Ú',
];
$numeros = [
    0, 1, 2, 3, 4,
    5, 6, 7, 8, 9,
    '0', '1', '2', '3', '4',
    '5', '6', '7', '8', '9',
];
$simbolos = [
    '.', ',', ';', ':',
    '(', ')', '!', '¡', 
    '¿', '?', '#', '$',
    '%', '&',
];

$dato_usuario = "#";

for ($i=0; $i < count($vocales); $i++) { 
    if ($dato_usuario == $vocales[$i]) {
        echo "El dato ingresado es una vocal";
        break;
    }
}
for ($j=0; $j < count($numeros); $j++) { 
    if ($dato_usuario === $numeros[$j]) {
        echo "El dato ingresado es un número";
        break;
    }
}
for ($k=0; $k < count($simbolos); $k++) { 
    if ($dato_usuario == $simbolos[$k]){
        echo "El dato ingresado es un símbolo";
        break;
    }
}


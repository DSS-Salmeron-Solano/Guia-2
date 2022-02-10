<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css">
    <title>El tipo de caracter</title>
</head>
<body>
    
</body>
</html>

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



if(isset($_POST['submit']) && $_POST['submit'] == "Enviar"){
    echo "\t<tr class=\"odd\">\n";
    echo "\t\t<td>\nCaracter\n</td>\n";
    extract($_POST);
    $dato_usuario = !empty($dato_usuario) ? $dato_usuario : "<a href=\"discusion_2.html\"> No ingreso ningún dato :(";

    for ($i=0; $i < count($vocales); $i++) { 
        if ($dato_usuario == $vocales[$i]) {
            $resultado = "El dato ingresado es una vocal";
            break;
        }
    }
    for ($j=0; $j < count($numeros); $j++) { 
        if ($dato_usuario === $numeros[$j]) {
            $resultado ="El dato ingresado es un número";
            break;
        }
    }
    for ($k=0; $k < count($simbolos); $k++) { 
        if ($dato_usuario == $simbolos[$k]){
            $resultado = "El dato ingresado es un símbolo";
            break;
        }
    }
    echo "\t\t<td>\n" . $resultado . "\n</td>\n";
    echo "\t</tr>\n";
    echo "\t<tr>\n";
}

?>

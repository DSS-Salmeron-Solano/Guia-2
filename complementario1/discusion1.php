<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/calculodias.css">
    <title>Document</title>
</head>
<body>
<div id="principal2">
<?php
$fechaInicio=date_create($_POST["fechaInicio"]);
$fechaFin=date_create(date('Y-m-d'));
$diferencia=date_diff($fechaInicio,$fechaFin);

print_r("Usted ha vivido ". $diferencia->format('%a días')."\n");

?>
<br>
<a href="complementario1.html">Regresar</a>
</div>
</body>
</html>
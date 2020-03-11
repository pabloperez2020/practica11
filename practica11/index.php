<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica 11</title>
</head>
<body bgcolor ="yellow">
    <h1>variables</h1>
    <?php
    $nombre='nombre del alumno';
    $edad=19; //escribe tu edad
    $beca=3500.50;
    $estatus=true;
    echo"tipos de variables <br>";
    echo $nombre. '<br/>';
    echo $edad. '<br>';
    echo $beca. '<br>';
    echo $estatus. '<br>';

    echo $nombre.'Tiene ';
    echo $edad.'años de edad y gana';
    echo $beca.'<br/>';
    ?>
    <h1>operadores aritmeticos</h1>
<?php
$numero1=10;
$numero2=5;
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;
echo 'la suma es=' .$suma. '<br/>';
echo 'la suma es=' .($numero1+$numero2). '<br/>';
echo 'la resta es=' .$resta. '<br/>';
echo 'la resta es=' .($numero1-$numero2). '<br/>';
echo 'la multiplicacion  es=' .$numero1*$numero2. '<br/>';
echo 'la divisio es=' .$numero1/$numero2. '<br/>';
echo 'incremento es =' .$suma++.  '<br/>';
echo 'decremento es =' .$resta--.  '<br/>';
echo 'residuo es =' .$numero1%$numero2 . '<br/>';


?>
</body>
</html>
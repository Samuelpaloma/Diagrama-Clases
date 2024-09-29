<?php

    include('numero.php');
    include('resultado.php');

    $diasTrab = new Numero(25);
    $valorDia = new Numero(40000);


    $resultados = new Resultados($valorDia, $diasTrab);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<strong><p>El resultado del sueldoo:</p></strong> <?php echo $resultados->sueldo()?>
<strong><p>El resultado de la pension:</p></strong> <?php echo $resultados->pension()?>
<strong><p>El resultado de la salud es:</p></strong> <?php echo $resultados->salud()?>
<strong><p>El resultado de la arl:</p></strong> <?php echo $resultados->arl()?>
<strong><p>El resultado del descuentoo:</p></strong> <?php echo $resultados->descuento()?>
<strong><p>El resultado del pago Totall :</p></strong> <?php echo $resultados->pagoTotal()?>
    
</body>
</html>
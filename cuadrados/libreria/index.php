<?php
    include('numero.php');
    include('resultados.php');
    $lado1 = new Numero(6);
    $lado2 = new Numero(2);
    $base1 = new Numero(4);
    $base2 = new Numero(4);
    $altura1 = new Numero(4);
    $altura2 = new Numero(4);
    


    $resultados = new Resultados($lado1, $lado2, $base1, $base2, $altura1, $altura2);


    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <strong><p>El resultado del area del rectangulo es: </p></strong> <?php echo $resultados->areaRect() ?>
    <strong><p>El resultado del area del triangulo es: </p></strong> <?php echo $resultados->areaTri() ?>
    <strong><p>El resultado del area del cuadrado e: </p></strong> <?php echo $resultados->areaCua() ?>
    
</body>
</html>
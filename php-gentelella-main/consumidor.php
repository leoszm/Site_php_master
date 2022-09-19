<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Celular.php';

        //  INSTANCIA
        $s22 = new Celular;
        $redmi9 = new Celular;

        //  ATRIBUTOS
        $s22->marca = "SAMSUNG";
        $s22->modelo = "Galaxy S22";
        $s22->cor = "Branco";
        //$s22->memoria = 128;
        //$s22->camera = 12;
        $s22->ligado = true;

        //print_r($s22);
        //  s22->ligar();
        //$s22->desligar();

        //print_r($s22);

        $s22->fotografar();
    ?>
    </pre>
</body>
</html>
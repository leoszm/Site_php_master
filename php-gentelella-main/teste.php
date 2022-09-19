<?php

    require_once "funcoes.php";

    echo "Arquivo TESTE<br>";
    
    //echo "<br><br>Soma Total = ".soma(40, 23);
    //echo "<br><br>Subtracao Total = ".subtracao(40, 20);
    
    $Valor1 = intval($_POST['valor1']);
    $Valor2 = intval($_POST['valor2']);
    $Operacao = $_POST['operacao'];
    

    echo "<br><br>Resultado Total = ".conta($Valor1, $Valor2, $Operacao);
    
    //echo "<br><br>Subtracao Total = ".conta(40, 20, "-");
    
?>
<?php

    function soma($valorA, $valorB){
        $sub = $valorA + $valorB;
        //echo "Valor total =  ". $soma;
        return $sub;
    }

    function subtracao($valorA, $valorB){
        $sub = $valorA - $valorB;
        return $sub;
    }

    function multiplicacao($valorA, $valorB){
        $sub = $valorA * $valorB;
        return $sub;
    }

    function divisao($valorA, $valorB){
        $sub = $valorA / $valorB;
        return $sub;
    }

    //  echo "<br><br>Soma Total = ".conta(40, 23, "+");
    function conta($val_A, $val_B, $operacao){
        $result = 0;
        switch ($operacao){
            case "+":   $result = soma($val_A, $val_B);           break;
            case "-":   $result = subtracao($val_A, $val_B);      break;
            case "*":   $result = multiplicacao($val_A, $val_B);  break;
            case "/":   $result = divisao($val_A, $val_B);        break;
            
            default: echo"Valor incorreto<br>";                   break;
        }

        return $result;
    }
    //echo "Valor Total = ".soma(40, 20);
    
?>
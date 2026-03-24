<?php 
    
    function calculo_quadra($a) {
        $x = $a * $a;

        echo "$x <br>";
    }

     calculo_quadra(4);
     calculo_quadra(3);
     calculo_quadra(5);

     echo "<hr>";

     function soma($x, $y) {
        $soma = $x + $y;

        echo "A soma é: $soma <br>";
    }

    $num1 = 8;
    $num2 = 7;

    soma($num1,$num2);
?>
<?php 
     function mostrar_array($vetor) {
            foreach($vetor as $valor) {
            echo $valor."<br>";
        }  
        echo"<hr>";
    }

    $numeros = [1,2,3,4,5,6,7];
    $numeros2 = [10,20,30,40,50,60,70];
    $nomes = ['Fulano', 'Breno', 'Antonio'];

    mostrar_array($numeros);
    mostrar_array($numeros2);
    mostrar_array($nomes);
?>
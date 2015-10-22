<?php

    //La función dibuja los seis dados en una sola línea horizontal
    function dibujarDados(){
        
        echo "<div class='container'>";
        echo "<div class='row'>";
        
        for ($i = 1; $i <= 6; $i ++){
            
            echo "<div class='col-xs-4 col-lg-2 dice'><img src='img/Dice-".$i.".png' class='img-responsive'></img></div>";
        }
        
        echo "</div>";
        echo "</div>";
    }
    
    //La función devuelve un número aleatorio entre el 1 y el 6.
    function generarNumAleatorio(){
        
        $numeroAleatorio = rand(1, 6);
        return $numeroAleatorio;
    }

?>
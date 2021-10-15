<?php 

    function fatorial($n) {
        $array = array();

        for($i = 1; $i <= $n; $i++) {
            $resultado = 1;
            $contador = 1;

            while($contador <= $i) {
                $resultado = $resultado * $contador++;
            }

            $array[$i-1] = $resultado;
        }

        for($i = 0; $i < $n; $i++) {
            echo "$array[$i] <br>";
        }
        
    }

    fatorial(5);
?>
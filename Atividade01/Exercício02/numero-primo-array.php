<?php

    function numeroPrimo($n) {
        $array = array();
        $numero = 1;
        $controlador = 1;

        while($controlador <= $n) {
            $contador = 0;
            $divisor = $numero;

            do {
                if($numero % $divisor == 0)
                    $contador++;
                
                $divisor--;
            } while($divisor > 1);

            if($contador < 2 && $numero != 1) {
                $array[$controlador-1] = $numero;
                $controlador++;
            }

            $numero++;
        }

        for($i = 0; $i < $n; $i++) {
            echo "$array[$i] <br>";
        }
    }

    numeroPrimo(5);
?>
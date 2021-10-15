<?php

    function numeroPerfeito($n) {
        $array = array();
        $numero = 1;
        $controlador = 1;

        while($controlador <= $n) {
            $soma = 0;
            $divisor = $numero - 1;

            if($numero > 0) {
                while($divisor > 0) {
                    if($numero % $divisor == 0)
                        $soma += $divisor;
                    
                    $divisor--;
                }

                if($soma == $numero) {
                    $array[$controlador-1] = $numero; 
                    $controlador++;
                }

            }

            $numero++;

        }
            
        for($i = 0; $i < $n; $i++) {
            echo "$array[$i] <br>";
        }

    }

    numeroPerfeito(4);
?>
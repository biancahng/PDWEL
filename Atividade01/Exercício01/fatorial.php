<?php 

    function fatorial($numero) {
        $contador = 1;
        $resultado = 1;

        while($contador <= $numero) {
            $resultado = $resultado * $contador++;
        }

        return $resultado;
    }

?>
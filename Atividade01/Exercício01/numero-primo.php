<?php

    function numeroPrimo($numero) {
        $divisor = $numero;
        $contador = 0;

        do {

            if($numero % $divisor == 0)
                $contador++;
            
            $divisor--;

        } while($divisor > 1);

        if($numero <= 0 || $numero == 1)
            return "O número $numero não é primo nem composto";
        elseif($contador < 2)
            return "O número $numero é primo";
        else
            return "O número $numero é composto";
    }

?>
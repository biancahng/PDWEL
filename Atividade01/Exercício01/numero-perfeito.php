<?php

    function numeroPerfeito($numero) {
        $divisor = $numero - 1;
        $soma = 0;

        if($numero > 0) {
            while($divisor > 0) {
                if($numero % $divisor == 0)
                    $soma += $divisor;
                
                $divisor--;
            }
        }
        
        if($soma == $numero)
            return "O número $numero é perfeito!";
        else
            return "O número $numero não é perfeito!";    
    }

?>
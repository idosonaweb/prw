<?php

    $Num = 1 ;

    $Soma = 0 ;

    while ($Num < 100) 
    {

        if($Num % 2 == 0)
        {
            $Soma = $Soma + $Num ;
        }

        $Num++;
    }

    echo "A soma dos números pares até 100 é igual a ". $Soma ;

?>
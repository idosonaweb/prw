<?php

    echo "<h1>Multiplicação de dois valores feita por soma</h1>" ;

    $Valor_1 = 7 ;

    $Valor_2 = 3 ; 

    $Cont = 0 ;

    $Resultado = 0 ;

    while ($Cont < $Valor_1) 
    {
        $Cont++;

        $Resultado = $Resultado + $Valor_2 ;
    }

    echo $Resultado ;

?>
<?php

    for ($Num = 0 ; $Num <= 200 ; $Num++) 
    {   
        $Divisores = 0 ;

        for ($Divisor = 1 ; $Divisor <= $Num ; $Divisor++)
        {
            if($Num % $Divisor == 0)
            {
                $Divisores++;
            }
        }

        if ($Divisores == 2) 
        {
            echo $Num. " é primo <br><br>" ;
        }
        else
        {
            echo $Num. " não é primo <br><br>" ;
        }
    }
?>
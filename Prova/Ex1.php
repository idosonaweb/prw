<?php

    echo "<h1>Reajuste de salário do funcionário</h1>" ;

    $Salario = 800 ;

    $Reajuste = null ;

    if ($Salario <= 300) 
    {
        $Reajuste = $Salario + ($Salario * 0.5);
    }
    else
    {
        $Reajuste = $Salario + ($Salario * 0.3);
    }


    echo "O funcionário detinha um salário de R$ " . $Salario . ",00 com o reajuste, seu novo salário é igual a R$ " . $Reajuste . ",00" ;

?>
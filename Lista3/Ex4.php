<?php

    $Data = "24/11/1953" ;

    echo $Data. "<br>" ;

    $Dia = substr($Data,3,2);

    $Mês = substr($Data,0,2);

    $Ano = substr($Data,6,4);

    $Nova_Data =  $Dia . "/" . $Mês . "/" . $Ano;

    echo "<br>" . $Nova_Data;

?>
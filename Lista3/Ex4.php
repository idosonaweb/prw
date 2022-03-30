<?php

    $Data = date("m-d-Y");

    echo $Data. "<br>" ;

    $Dia = substr($data,3,2);

    $Mês = substr($data,0,2);

    $Ano = substr($data,6,4);

    $Nova_Data = $Dia . "/" . $Mês . "/" . $Ano;

    echo $Nova_Data;

?>
<?php

    $Cep = '16290000' ;
    
    $Parte_1 = substr($Cep,5,1);

    $Parte_2 = substr($Cep,6,1);

    $Parte_3 = substr($Cep,7,1);
    
    $Ultimos = $Parte_1 . $Parte_2 . $Parte_3 ;
    
    echo "Cep: " . $Cep . "<br><br>";

    echo "Seus últimos 3 digitos: " . $Ultimos;

?>
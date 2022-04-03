<?php

    $Diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');

    $Data = date('07/02/2018');

    $Partes = explode("/", $Data);
    
    $P1 = $Partes[0];
    
    $P2 = $Partes[1];
    
    $P3 = $Partes[2];

    $Novo_Formato = $P1 . "/" . $P2 . "/" . $P3 ;

    $Semana_numero = date('w', strtotime($Data));

    echo "Na data " .  $Novo_Formato . ", foi/será " . $Diasemana[$Semana_numero];
?>
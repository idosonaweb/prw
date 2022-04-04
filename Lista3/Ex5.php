<?php

    $Diasemana = array('Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sabado');

    $Data = '2018/02/07' ;

    $Partes = explode("/", $Data);
    
    $P1 = $Partes[0];
    
    $P2 = $Partes[1];
    
    $P3 = $Partes[2];

    $Novo_Formato = $P3 . "/" . $P2 . "/" . $P1 ;

    $Semana_numero = date('w', strtotime($Data));

    echo "Na data " .  $Novo_Formato . ", foi/será " . $Diasemana[$Semana_numero];
?>
<?php

    $Diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');

    $Data = date('Y/m/d');

    $Dia = substr($Data,8,2);

    $Mês = substr($Data,5,2);

    $Ano = substr($Data,0,4);

    $Semana_numero = date('w', strtotime($Data));

    echo "Na data " .  $Dia . "/" . $Mês . "/" . $Ano . ", foi/será " . $Diasemana[$Semana_numero];
?>
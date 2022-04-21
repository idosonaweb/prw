<?php

    $dia = array('Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sabado');
    $data = '2005/07/18' ;
    $elemento = explode("/", $data);
    $e1 = $elemento[0];
    $e2 = $elemento[1];
    $e3 = $elemento[2];
    $dataCerta = $e3 . "/" . $e2 . "/" . $e1 ;

    $dataSemana = date('w', strtotime($data));

    echo "A data " .  $dataCerta. " é " . $dia[$dataSemana];
?>
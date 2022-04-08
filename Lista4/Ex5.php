<?php
    
    echo "<h1>Exercício 5 - Lista 4</h1>" ;

    $Area = null ;

    if (isset($_GET["Comprimento"]) and isset($_GET["Altura"])) 
    {
        $Area = $_GET["Comprimento"] * $_GET["Altura"];

        echo "Este terreno possui uma área de " . $Area . " m²";
    }

?>
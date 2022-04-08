<?php
    
    echo "<h1>Exercício 4 - Lista 4</h1>" ;

    $Bissexto = null ;

    if (isset($_GET["data"])) 
    {
        $Bissexto = $_GET["data"] ;

        if ($Bissexto % 4 == 0) 
        {
            if ($Bissexto % 100 != 0) 
            {
                echo $Bissexto . " é um ano bissexto" ;
            }
        }
        else
        {
            echo $Bissexto . " não é um ano bissexto" ;
        }
    }

?>
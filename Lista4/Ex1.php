<?php
    
    echo "<h1>Exercício 1 - Lista 4</h1>" ;

    $N1 = $_GET["numero1"] ;

    $N2 = $_GET["numero2"] ;

    $Soma = $_GET["numero1"]  + ($_GET["numero2"]);

    $Subtrair = $_GET["numero1"]  - ($_GET["numero2"]);

    $Dividir = $_GET["numero1"]  / $_GET["numero2"];

    $Multiplicacao = $_GET["numero1"]  * $_GET["numero2"];

    if (isset($_GET["numero1"]) and isset($_GET["numero2"])) 
    {
        if ($_GET["optOperacao"] == "Somar") 
        {
            echo $N1 . " + " . $N2 . " = " . $Soma ;
        }
        else
        {
            if ($_GET["optOperacao"] == "Subtrair") 
            {
                echo $N1 . " - " . $N2 . " = " . $Subtrair ;
            }
            else 
            {
                if ($_GET["optOperacao"] == "Dividir") 
                {
                    echo $N1 . " / " . $N2 . " = " . $Dividir ;
                }
                else
                {
                    echo $N1 . " * " . $N2 . " = " . $Multiplicacao ;
                }
            }
        }   
    }
?>
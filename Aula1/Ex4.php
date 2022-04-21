<?php

   echo "<h1> Escolha a opção desejada </h1> ";

    $N1 = $_GET["num1"] ;

    $N2 = $_GET["num2"] ;

   $somar = $N1 + $N2 ;

   $subtrair = $N1 - $N2;
   
   $dividir = $N1 / $N2;
   
   $multiplicar = $N1 * $N2;

    if (isset($_GET["num1"]) and isset($_GET["num2"])) 
    {
        if ($_GET["Acao"] == "Somar") 
        {
                echo "Somar: " . $somar;
        }
        else
        {
            if ($_GET["Acao"] == "Subtrair") 
            {
                echo "Subtrair: " . $subtrair;
            }
            else
            {
                if ($_GET["Acao"] == "Dividir") 
                {
                        echo "Dividir: " . $dividir;
                }
                else
                {
                    if ($_GET["Acao"] == "Multiplicar") 
                    {
                            echo "Multiplicar: " . $multiplicar ;
                    }
                }
            }
        }
    }   
?>
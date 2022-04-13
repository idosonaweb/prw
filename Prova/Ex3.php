<?php
    
    echo "<h1>Exercício 3 - Prova</h1>" ;

    $Altura = $_GET["altura"] ;

    $Peso = $_GET["peso"] ;

    $IMC = $Peso / ($Altura * $Altura) ;

    if ($IMC < 17) 
    {
        echo "Resultado IMC: " . $IMC ;

        echo "<br><br>" ;

        echo "Situação: Muito abaixo do peso" ;
    }
    else
    {
        if ($IMC >= 17 and $IMC <= 18.49) 
        {
            echo "Resultado IMC: " . $IMC ;

            echo "<br><br>" ;

            echo "Situação: Abaixo do peso" ;
        }
        else
        {
            if ($IMC >= 18.5 and $IMC <= 24.99) 
            {
                echo "Resultado IMC: " . $IMC ;

                echo "<br><br>" ;

                echo "Situação: Peso normal" ;
            }
            else
            {
                if ($IMC >= 25 and $IMC <= 29.99) 
                {
                    echo "Resultado IMC: " . $IMC ;

                    echo "<br><br>" ;

                    echo "Situação: Acima do peso" ;
                }
                else
                {
                    if ($IMC >= 30 and $IMC <= 34.99) 
                    {
                        echo "Resultado IMC: " . $IMC ;

                        echo "<br><br>" ;

                        echo "Situação: Obesidade 1" ;
                    }
                    else
                    {
                        if ($IMC >= 35 and $IMC <= 39.99)
                        {
                            echo "Resultado IMC: " . $IMC ;

                            echo "<br><br>" ;

                            echo "Situação: Obesidade 2 (Severa)" ;
                        }
                        else
                        {
                            if ($IMC > 40) 
                            {
                                echo "Resultado IMC: " . $IMC ;

                                echo "<br><br>" ;

                                echo "Situação: Obesidade 3 (mórbida)" ; 
                            }
                        }
                    }
                }
            }
        }
    }
?>
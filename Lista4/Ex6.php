<?php
    
    echo "<h1>Exercício 6 - Lista 4</h1>" ;

    $MediaArt = null ;

    $Nota1 = $_GET["nota1"];

    $Nota2 = $_GET["nota2"];

    $Freq = $_GET["frequencia"];

    $MediaArt = ($Nota1 * $Nota2) / 2 ;

    if ($MediaArt < 5 and $Freq < 75)
    {
        echo "<b><font color = '#FF0000'> Reprova por nota e frequência</font></b>" ;
    }
    else
    {
        if ($MediaArt < 5 and $Freq > 75) 
        {
            echo "<b><font color = '#FF0000'> Reprova por nota </font></b>" ;
        }
        else
        {
            if ($MediaArt > 5 and $Freq < 75) 
            {
                echo "<b><font color = '#FF0000'> Reprova por frequência </font></b>" ;
            }
            else
            {
                echo "Aprovado!!!" ;
            }
        }
    }

?>
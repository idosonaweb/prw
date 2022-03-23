<?php

    $n1 = 6 ;

    $n2 = 2 ;

    $n3 = 4 ;

    echo "Números: ". $n1. " " .$n2. " " .$n3. "<br><br>" ;

    if($n1 > $n2 && $n1 > $n3)
    {
        if($n2 > $n3)
        {
            echo "Ordem decrescente"."<br>"."<br>" ;

            echo $n1. " ". $n2. " ". $n3 ;
        }
        else
        {
            echo "Ordem decrescente"."<br>"."<br>" ;

            echo $n1. " ". $n3. " ". $n2 ;
        }
    }
    
    if($n2 > $n1 && $n2 > $n3)
    {
        if($n1 > $n3)
        {
            echo "Ordem decrescente"."<br>"."<br>" ;

            echo $n2. " ". $n1. " ". $n3 ;
        }
        else
        {
            echo "Ordem decrescente"."<br>"."<br>" ;

            echo $n2. " ". $n3. " ". $n1 ;
        }
    }
    
    if($n3 > $n1 && $n3 > $n2)
    {
        if($n1 > $n2)
        {
            echo "Ordem decrescente"."<br>"."<br>" ;

            echo $n3. " ". $n1. " ". $n2 ;
        }
        else
        {
            echo "Ordem decrescente"."<br>"."<br>" ;

            echo $n3. " ". $n2. " ". $n1 ;
        }
    }
    
?>
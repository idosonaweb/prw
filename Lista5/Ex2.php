<?php
    
    echo "<h1>Exercício 2 - Lista 5</h1>" ;

    $Nome_Produto = $_GET["nome"];

    $Preco_Produto = $_GET["preco"];

    $Vetor_1 = array('Fone' , 'Desktop' , 'Computador' , 'Telefone' , 'Mouse' , 'Impressora' , 'Teclado' , 'Xerox' , 'Scanner' , 'Hardware') ;

    $Vetor_2 = array('44.90' , '2931.67' , '2671.99' , '1134.80' , '29.99' , '342.55' , '86.97');

    $Posicao_Produto = array_search($Nome_Produto, $Vetor_1) ;

    $Posicao_Preco = array_search($Preco_Produto, $Vetor_2) ;

    if ($Posicao_Produto == $Posicao_Preco) 
    {
        echo $Nome_Produto . " está custando R$ " . $Preco_Produto . " reais" ;   
    }
    else
    {
        echo $Nome_Produto . " possue outro preço" ;
    }

?>
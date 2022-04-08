<?php
    
    echo "<h1>Exercício 1 - Lista 5</h1>" ;

    $Nome_Produto = $_GET["nome"];

    $Vetor = array('Fone' , 'Desktop' , 'Computador' , 'Telefone' , 'Mouse' , 'Impressora' , 'Teclado' , 'Xerox' , 'Scanner' , 'Hardware') ;

    echo $Nome_Produto . " está na posição " . array_search($Nome_Produto, $Vetor) ;

?>
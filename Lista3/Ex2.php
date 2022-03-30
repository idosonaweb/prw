<?php
    $Vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
    
    $Palavra = "Estudantes" ;

    $Nova_Palavra = str_replace($Vogais, "x", $Palavra);
    
    echo "Palavra: ". $Palavra. "<br><br>" ;

    echo "Depois da substituição : ". $Nova_Palavra ;

?>
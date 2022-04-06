<?php
    
    echo "<h1>Exercício 1 - Lista 4</h1>" ;

    $Login = $_GET["Login"];

    $Senha = $_GET["Senha"];

    $Usuarios = array("Murilo" => "123") ;

    if (array_key_exists($Login, $Senha)) 
    {
        if ($Usuarios[$Login] == $Senha) 
        {
            echo "Acesso permitido" ;
        }
        else
        {
            echo "Senha incorreta" ;
        }   
    }
    else
    {
        echo "Usuário não encontrado" ;
    }
?>
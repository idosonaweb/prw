<?php
    
    $hostname = "localhost" ;

    $port = 3306 ;

    $username = "root" ;

    $password = "" ;

    $database = "login" ;

    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    if (mysqli_connect_errno()) 
    {
        printf("Erro ao conectar ao banco de dados: %s\n", mysqli_connect_error());

        exit;
    }

?>
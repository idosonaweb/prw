<?php
    
    echo "<h1>Exercício 2 - Lista 4</h1>" ;

    $Nome = $_GET["nome"] ;

    $Idade = $_GET["Idade"] ;

    $Descricao = $_GET["TextDesc"] ;

    $Genero = $_GET["optGenero"];

    $Linguagem = $_GET["chkLing"];

    $Ensino = null ;

    if ($_GET["SelMenu"] == "Incompleto") 
    {
        $Ensino = "Incompleto" ;

        echo "Ensino médio: " . $Ensino . "<br><br>" ;
    }
    else
    {
        if ($_GET["SelMenu"] == "Cursando") 
        {
            $Ensino = "Cursando" ;

            echo "Ensino médio: " . $Ensino . "<br><br>" ;
        }
        else
        {
            if ($_GET["SelMenu"] == "Completo") 
            {
                $Ensino = "Completo" ;

                echo "Ensino médio: " . $Ensino . "<br><br>" ;
            }
        }
    }

    if (isset($_GET["optGenero"])) 
    {
        if (isset($_GET["chkLing"])) 
        {
            if (isset($_GET["SelMenu"])) 
            {
                echo "<h2>Usuário Cadastrado</h2><br><br>" ;
                
                echo "Nome: " . $Nome . "<br><br>";

                echo "Idade: " . $Idade . "<br><br>";

                echo "Gênero: " . $Genero . "<br><br>" ;

                echo "Linguagens Dominantes: " . $Linguagem . "<br><br>" ;

                echo "Ensino médio: " . $Ensino . "<br><br>" ;

                echo "Sobre o usuário: <br>" . $Descricao ;
            }
        }   
    }
?>
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
        $Ensino = "Ensino médio: Incompleto" ;
    }
    else
    {
        if ($_GET["SelMenu"] == "Cursando") 
        {
            $Ensino = "Ensino médio: Cursando" ;
        }
        else
        {
            if ($_GET["SelMenu"] == "Completo") 
            {
                $Ensino = "Ensino médio: Completo" ;
            }
        }
    }

    if (isset($_GET["optGenero"])) 
    {
        if (isset($_GET["chkLing"])) 
        {
            if (isset($_GET["SelMenu"])) 
            {
                echo "<h2>Usuário Cadastrado</h2>" ;
                
                echo "Nome: " . $Nome . "<br><br>";

                echo "Idade: " . $Idade . "<br><br>";

                echo "Gênero: " . $Genero . "<br><br>" ;

                echo "Linguagens Dominantes: " ;

                echo print_r($Linguagem) . " " ;

                echo $Ensino ;

                echo "Sobre o usuário: <br><br>" . "'" . $Descricao . "' " ;
            }
        }   
    }
?>
<?php
    
    echo "<h1>Exercício 4 - Prova</h1>" ;

    $Nome = $_GET["nome"] ;

    $CPF = $_GET["CPF"] ;

    $RG = $_GET["RG"] ;

    $Saldo = $_GET["Saldo"] ;

    $Total = $_GET["Total"] ;
    
    $Genero = $_GET["optGenero"];

    $Estado = null ;

    if ($_GET["SelMenu"] == "São Paulo") 
    {
        $Estado = "Estado: São Paulo" ;
    }
    else
    {
        if ($_GET["SelMenu"] == "Minas Gerais") 
        {
            $Estado = "Estado: Minas Gerais" ;
        }
        else
        {
            if ($_GET["SelMenu"] == "Espírito Santo") 
            {
                $Estado = "Estado: Espírito Santo" ;
            }
            else
            {
                if ($_GET["SelMenu"] == "Sergipe") 
                {
                    $Estado = "Estado: Sergipe" ;
                }
                else
                {
                    if ($_GET["SelMenu"] == "Rio de Janeiro") 
                    {
                        $Estado = "Estado: Rio de Janeiro" ;
                    }
                    else
                    {
                        if ($_GET["SelMenu"] == "Mato Grosso") 
                        {
                            $Estado = "Estado: Mato Grosso" ;
                        }
                        else
                        {
                            if ($_GET["SelMenu"] == "Bahia") 
                            {
                                $Estado = "Estado: Bahia" ;
                            }
                            else
                            {
                                if ($_GET["SelMenu"] == "Distrito Federal") 
                                {
                                    $Estado = "Estado: Minas Gerais" ;
                                }
                                else
                                {
                                    if ($_GET["SelMenu"] == "Maranhão") 
                                    {
                                        $Estado = "Estado: Maranhão" ;
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    if (isset($_GET["optGenero"])) 
    {
        if (isset($_GET["SelMenu"])) 
        {     
            echo "Nome: " . $Nome . "<br><br>";

            echo $Estado . "<br><br>";

            echo "CPF: " . $CPF . "<br><br>";

            echo "RG: " . $RG . "<br><br>";

            echo "Gênero: " . $Genero . "<br><br>" ;

            echo "Saldo: R$ " . $Saldo . "<br><br>";

            echo "Total: R$ " . $Total . "<br><br>";
        }
    }

        if ($_GET["nome"] == null) 
        {
            if ($_GET["CPF"] == null) 
            {
                if ($_GET["RG"] == null) 
                {
                    echo "DADOS IMPORTANTES ESTÃO FALTANDO: NOME, CPF e RG <br><br>" ;
                }
                else
                {
                    echo "DADOS IMPORTANTES ESTÃO FALTANDO: NOME E CPF<br><br>" ;
                }
            }
            else
            {
                echo "DADOS IMPORTANTES ESTÃO FALTANDO: NOME<br><br>" ;
            }
        }

        if ($_GET["CPF"] == null) 
        {
            if ($_GET["RG"] == null) 
            {
                echo "DADOS IMPORTANTES ESTÃO FALTANDO: CPF e RG <br><br>" ;
            }
            else
            {
                echo "DADOS IMPORTANTES ESTÃO FALTANDO: CPF<br><br>" ;
            }
        }

        if ($_GET["RG"] == null) 
        {
            if ($_GET["nome"] == null) 
            {
                echo "DADOS IMPORTANTES ESTÃO FALTANDO: NOME e RG <br><br>" ;
            }
                else
                {
                    echo "DADOS IMPORTANTES ESTÃO FALTANDO: RG<br><br>" ;
                }
        }

        if ($Saldo > $Total) 
        {
            echo "Seu saldo atual é de R$ " . $Saldo - $Total ;
        }
        else
        {
            echo "<b><font color = '#FF0000'> Saldo Insuficiente para Concluir Compra!</font></b>" ; 
        }
?>
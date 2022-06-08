<?php

include("conexao.php");

$sql = "SELECT * FROM fluxo_agenda" ;

$Resultado = $_POST["Resultado"] ;

$result = mysqli_query($con, $sql);

    if ($_POST["Resultado"] == 'Total Entrada') 
    {
        $sql = "select sum(valor) valor from fluxo_caixa where tipo = 'entrada'" ;
    }
    else
    {
        if ($_POST["Resultado"] == 'Total Saídas') 
        {
            $sql = "select sum(valor) valor from fluxo_caixa where tipo = 'saida'" ;
        }
        else
        {
            if ($_POST["Resultado"] == 'Saldo Total') 
            {
                $sql = "select sum (case when tipo = 'entrada' then valor else 0 end) - 
                               sum (case when tipo = 'saida'  then valor else 0 end) as valor from fluxo_caixa ";
            }
        }
    }

?>
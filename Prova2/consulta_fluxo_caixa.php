<?php

include("conexao.php");

$Caixa = $_POST['tipo'];

    if ($Caixa == 'Entrada') 
    {
        $sql = "select sum(valor) valor from fluxo_caixa where tipo = 'Entrada'" ;

        $result = mysqli_query($con, $sql);

        $row = mysqli_fetch_array($result);

        echo "Total Entradas: R$ " . $row['valor'] ;
    }
    else
    {
        if ($Caixa == 'Saida') 
        {
            $sql = "select sum(valor) valor from fluxo_caixa where tipo = 'Saida'" ;

            $result = mysqli_query($con, $sql);

            $row = mysqli_fetch_array($result);

            echo "Total Saídas: R$ " . $row['valor'] ;
        }
        else
        {
            if ($Caixa == 'Total') 
            {
                $sql = "select sum(case when tipo = 'Entrada' then valor else 0 end) - 
                               sum(case when tipo = 'Saida'  then valor else 0 end) as valor from fluxo_caixa ";

                $result = mysqli_query($con, $sql);

                $row = mysqli_fetch_array($result);

                echo "Saldo Total: R$ " . $row['valor'] ;
            }
        }
    }

?>
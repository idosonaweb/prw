<?php

    include('conexao.php');

    $id = $_POST["id"];

    $Data_Fluxo = $_POST["data_fluxo_caixa"];

    $Tipo = $_POST["tipo_fluxo_caixa"];

    $Valor_Fluxo = $_POST["valor_fluxo_caixa"];

    $Historico_Fluxo = $_POST["historico_fluxo_caixa"];

    $Cheque_Fluxo = null ;

    if ($_POST["SelMenu"] == "Sim") 
    {
        $Cheque_Fluxo = "Sim" ;
    }
    else
    {
        if ($_POST["SelMenu"] == "Não") 
        {
            $Cheque_Fluxo = "Não" ;
        }
    }

    echo "<h1>Alteração do Fluxo de Caixa</h1>" ;

        $sql = "UPDATE fluxo_caixa SET
            
            data ='". $Data_Fluxo ."',
            
            tipo ='" . $Tipo . "',
            
            valor ='" . $Valor_Fluxo . "',
            
            historico ='" . $Historico_Fluxo . "',
            
            cheque ='" . $Cheque_Fluxo . "'
            
            WHERE id =". $id ;

    $result = mysqli_query($con, $sql);

    if($result)
    {
        echo "Dados alterados com sucesso <br>" ;
    }
    else
    {
        echo "Erro ao alterar no banco de dados " . mysqli_error($con) . "<br>" ;
    }

?>

<a href="index.php">Voltar</a>
<?php
    
    include ("conexao.php") ;

    echo "<h1>Cadastro de Fluxo de Caixa</h1>" ;

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

    echo "<p> Data: " . $Data_Fluxo . "<br> <br>" ;

    echo "Tipo: " . $Tipo . "<br> <br>" ;

    echo "Valor: R$ " . $Valor_Fluxo . "<br> <br>" ;

    echo "Histórico: " . $Historico_Fluxo . "<br> <br>" ;

    echo "Cheque: " . $Cheque_Fluxo . "<br> <br>" ;

    $sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)
            values ('" . $Data_Fluxo. "', '" . $Tipo . "', '" . $Valor_Fluxo. "', '" . $Historico_Fluxo . 
                    "', '" . $Cheque_Fluxo. "')" ;

    $result = mysqli_query($con, $sql) ;

    if ($result) 
    {
        echo "Dados inseridos com sucesso" ;

    }
    else
    {
        echo "Erro ao inserir no banco de dados" . mysqli_error($con);
    }

?>
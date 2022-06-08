<?php

    include('conexao.php');

    $id = $_GET["id"];

    $sql = "DELETE FROM fluxo_caixa where id =" . $id ;

    echo "<h1>Exclusão de Fluxo de Caixa</h1>" ;

    $result = mysqli_query($con, $sql);

    if ($result) 
    {
        echo "Registro excluído com sucesso" ;
    }
    else
    {
        echo "Erro ao tentar excluir usuário " . mysqli_error($con) . "<br>";
    }

?>

<a href="listar_fluxo_caixa.php">Voltar</a>
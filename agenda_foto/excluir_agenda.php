<?php

    include('conexao.php');

    $id_agenda = $_GET["id_agenda"];

    $sql = "DELETE FROM agenda where id_agenda =" . $id_agenda ;

    echo "<h1>Exclusão de Agendamento</h1>" ;

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

<a href="listar_agenda.php">Voltar</a>
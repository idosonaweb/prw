<?php

    include('conexao.php');

    $id_usuario = $_GET["id_usuario"];

    $nome = $_GET["nome_usuario"];

    $email = $_GET["email_usuario"];

    $telefone = $_GET["telefone_usuario"];

    echo "<h1>Alteração de dados</h1>" ;
    
    echo "<p>Nome usuário: " . $nome . "</p>" ;

    $sql = "UPDATE usuario SET
            nome_usuario ='". $nome ."',
            email_usuario ='". $email ."',
            telefone_usuario ='". $telefone . "'
            WHERE id_usuario =". $id_usuario ;

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
<?php
    
    include ("conexao.php") ;

    echo "<h1>Cadastro de Clientes - IFSP</h1>" ;

    $Nome_Usuario = $_GET["nome_usuario"];

    $Email_Usuario = $_GET["email_usuario"];

    $Fone_Usuario = $_GET["telefone_usuario"];

    echo "<p> Nome do usuário: " . $Nome_Usuario . "<br> <br>" ;

    echo "E-mail: " . $Email_Usuario . "<br> <br>" ;

    echo "Telefone: " . $Fone_Usuario . "</p>" ;

    $sql = "INSERT INTO usuario (nome_usuario, email_usuario, telefone_usuario)
            values ('" . $Nome_Usuario. "', '" . $Email_Usuario . "', '" . $Fone_Usuario. "')" ;

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
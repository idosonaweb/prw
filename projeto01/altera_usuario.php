<?php

    include("conexao.php");

    $id_usuario = $_GET["id_usuario"];

    $sql = "SELECT * FROM usuario where id_usuario =" . $id_usuario ;

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração do Usuário</title>
</head>

<body>

    <h1>Alteração do Usuário</h1>

    <hr><br>

    <form action = "cadastro_usuario.php" method = "GET">
        
        <div>

            <label for = "nome_usuario">Nome: </label>
            
            <input type = "text" name = "nome_usuario" size = "50" value = "<?php echo $row['nome_usuario'] ?>"></input>

        </div>

        <br>

        <div>

            <label for = "email_usuario">E-mail: </label>
            
            <input type = "text" name = "email_usuario" size = "50" value = "<?php echo $row['email_usuario'] ?>"></input>

        </div>

        <br>

        <div>

            <label for = "telefone_usuario">Telefone: </label>
            
            <input type = "text" name = "telefone_usuario" size = "30" value = "<?php echo $row['telefone_usuario'] ?>"></input>

        </div>

        <br>

        <button type = "submit">Enviar</button>

    </form>

</body>
</html>
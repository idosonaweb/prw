<?php

    include("conexao.php");

    $Data_Agenda = date('d/m/Y');

    $id_agenda = $_GET["id_agenda"];

    $sql = "SELECT * FROM agenda where id_agenda =" . $id_agenda ;

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
    <title>Alteração do Agendamento</title>
</head>

<body>

    <h1>Alteração do Agendamento</h1>

    <hr><br>

    <form action = "altera_agenda_exe.php" method = "GET">
        
        <div>

            <label for = "nome_agenda">Nome: </label>
            
            <input type = "text" name = "nome_agenda" size = "50" value = "<?php echo $row['nome'] ?>"></input>

        </div>

        <br>

        <div>

            <label for = "apelido_agenda">Apelido: </label>
            
            <input type = "text" name = "apelido_agenda" size = "50" value = "<?php echo $row['apelido'] ?>"></input>

        </div>

        <br>

        <div>

            <label for = "endereco_agenda">Endereço: </label>
            
            <input type = "text" name = "endereco_agenda" size = "50" value = "<?php echo $row['endereco'] ?>"></input>

        </div>

        <br>

        <div>

            <label for = "bairro_agenda">Bairro: </label>
            
            <input type = "text" name = "bairro_agenda" size = "50" value = "<?php echo $row['bairro'] ?>"></input>

        </div>

        <br>

        <div>

            <label for = "cidade_agenda">Cidade: </label>
            
            <input type = "text" name = "cidade_agenda" size = "50" value = "<?php echo $row['cidade'] ?>"></input>

        </div>

        <br>

        <div>

            <label for = "estado_agenda">Estado: </label>
            
            <input type = "text" name = "estado_agenda" size = "50" value = "<?php echo $row['estado'] ?>"></input>

        </div>

        <br>

        <div>

            <label for = "telefone_agenda">Telefone: </label>
            
            <input type = "text" name = "telefone_agenda" size = "30" value = "<?php echo $row['telefone'] ?>"></input>

        </div>

        <br>

        <div>

            <label for = "celular_agenda">Celular: </label>
            
            <input type = "text" name = "celular_agenda" size = "30" value = "<?php echo $row['celular'] ?>"></input>

        </div>

        <br>

        <div>

            <label for = "email_agenda">E-mail: </label>
            
            <input type = "text" name = "email_agenda" size = "50" value = "<?php echo $row['email'] ?>"></input>

        </div>

        <br>

        <button type = "submit">Enviar</button>

        <a href='index.php'> Voltar</a>

        <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">

    </form>

</body>
</html>
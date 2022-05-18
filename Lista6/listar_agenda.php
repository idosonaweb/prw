<?php

    include("conexao.php");

    $sql = "SELECT * FROM agenda" ;

    $Data_Agenda = date('d/m/Y');

    $result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Agendamento</title>
</head>
<body>
    
    <h1>Listagem de Agendamento</h1>

    <table align = "center" border = "1" widht = "500">

        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Data de Cadastro</th>
            <th>Excluir</th>
        </tr>

        <?php

            while ($row = mysqli_fetch_array ($result))
            {
                echo "<tr>";
                
                echo "<td>" . $row['id_agenda'] . "</td>";
                
                echo "<td><a href='altera_agenda.php?id_usuario=".$row['id_agenda']."'>" .$row['nome_agenda']. "</a></td>";
                
                echo "<td>" . $row['apelido_agenda'] . "</td>";
                
                echo "<td>" . $row['endereco_agenda'] . "</td>";
                
                echo "<td>" . $row['bairro_agenda'] . "</td>";
                
                echo "<td>" . $row['cidade_agenda'] . "</td>";
                
                echo "<td>" . $row['estado_agenda'] . "</td>";
                
                echo "<td>" . $row['telefone_agenda'] . "</td>";
                
                echo "<td>" . $row['celular_agenda'] . "</td>";
                
                echo "<td>" . $row['email_agenda'] . "</td>";

                echo "<td>" . $Data_Agenda . "</td>";
                
                echo "<td><a href='excluir_agenda.php?id_agenda=".$row['id_agenda']."'>Excluir</a></td>";                
                
                echo "</tr>";
            }

        ?>

    </table>

</body>
</html>
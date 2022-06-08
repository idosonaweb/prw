<?php

    include("conexao.php");

    $sql = "SELECT * FROM fluxo_caixa" ;

    $result = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Fluxos de Caixas</title>
</head>
<body>
    
    <h1 align = "center">Consulta de Fluxos de Caixa</h1>

    <table align = "center" border = "1" widht = "500">

        <tr>
            <th>Código</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Histórico</th>
            <th>Cheque</th>
            <th>Excluir</th>
        </tr>

        <?php

            while ($row = mysqli_fetch_array ($result))
            {
                echo "<tr>";
                
                echo "<td>" . $row['id'] . "</td>";
                
                echo "<td>" . $row['data'] . "</td>";
                
                echo "<td>" . $row['tipo'] . "</td>";
                
                echo "<td>" . $row['valor'] . "</td>";

                echo "<td><a href='altera_fluxo_caixa.php?id=".$row['id']."'>" .$row['historico']. "</a></td>";
                
                echo "<td>" . $row['cheque'] . "</td>";
                
                echo "<td><a href='excluir_fluxo_caixa.php?id=".$row['id']."'>Excluir</a></td>";                
                
                echo "</tr>";
            }

        ?>

    </table>

</body>
</html>
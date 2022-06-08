<?php

    include("conexao.php");

    $id = $_GET["id"];

    $sql = "SELECT * FROM fluxo_caixa where id =" . $id ;

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
    <title>Alteração de Fluxo de Caixa</title>
</head>

<body>

    <h1>Alteração de Fluxo de Caixa</h1>

    <hr><br>

    <div id="teste">

    <form action = "altera_fluxo_caixa_exe.php" method = "POST">
        
        <div class="form-item">

            <label for = "data_fluxo_caixa">Data: </label>
            
            <input type = "text" name = "data_fluxo_caixa" size = "50" value = "<?php echo $row['data'] ?>"></input>

        </div>

        <br>

        <div>
            
            <label for="tipo_fluxo_caixa">Tipo: </label>

            <INPUT TYPE = "radio" NAME = "Acao"> Entrada </INPUT>
            
            <INPUT TYPE = "radio" NAME = "Acao">  Saída </INPUT>
        
        </div>

        <br>

        <div class="form-item">

            <label for = "valor_fluxo_caixa">Valor: </label>
            
            <input type = "text" name = "valor_fluxo_caixa" size = "50" value = "<?php echo $row['valor'] ?>"></input>

        </div>

        <br>

        <div class="form-item">

            <label for = "historico_fluxo_caixa">Histórico: </label>
            
            <input type = "text" name = "historico_fluxo_caixa" size = "50" value = "<?php echo $row['historico'] ?>"></input>

        </div>

        <br>

        <div>

        <label for = "cheque_fluxo_caixa">Cheque: </label>

        <select name = "SelMenu" value = "Menu" size = "2">

            <option>Sim</option>

            <option>Não</option>

        </select>

        </div>

        <br>

        <div class="form-item">
                
            <input id="btn" type="submit" value="Enviar" >
                    
            <a href='index.php'> Voltar</a>
            
        </div>

        <input name="id" type="hidden" value="<?php echo $row['id']?>">

    </form>

    </div>
    
</body>
</html>
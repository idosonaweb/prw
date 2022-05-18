<?php

    include('conexao.php');

    $id_agenda = $_GET["id_agenda"];

    $Nome = $_GET["nome_agenda"];

    $Apelido = $_GET["apelido_agenda"];

    $Endereco = $_GET["endereco_agenda"];

    $Bairro = $_GET["bairro_agenda"];

    $Cidade = $_GET["cidade_agenda"];

    $Estado = $_GET["estado_agenda"];

    $Fone = $_GET["telefone_agenda"];

    $Celular = $_GET["celular_agenda"];

    $Email = $_GET["email_agenda"];

    $Data = date('d/m/Y');

    echo "<h1>Alteração de dados</h1>" ;
    
    echo "<p>Nome usuário: " . $Nome . "</p>" ;

    $sql = "UPDATE agenda SET
            
            nome ='". $Nome ."',
            
            apelido ='" . $Apelido . "',
            
            endereco ='" . $Endereco . "',
            
            bairro ='" . $Bairro . "',
            
            cidade ='" . $Cidade . "',
            
            estado ='" . $Estado . "',
            
            telefone ='". $Fone . "',
            
            celular ='" . $Celular . "',
            
            email ='". $Email ."'
            
            WHERE id_agenda =". $id_agenda ;

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
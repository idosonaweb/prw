<?php

    include('conexao.php');

    $id_agenda = $_GET["id_agenda"];

    $Nome = $_GET["nome_agenda"];

    $Apelido = $_GET["apelido_agenda"];

    $Endereco = $_GET["nome_agenda"];

    $Bairro = $_GET["nome_agenda"];

    $Cidade = $_GET["nome_agenda"];

    $Estado = $_GET["email_usuario"];

    $Fone = $_GET["telefone_agenda"];

    $Celular = $_GET["celular_agenda"];

    $Email = $_GET["email_agenda"];

    $Data = date('d/m/Y');

    echo "<h1>Alteração de dados</h1>" ;
    
    echo "<p>Nome usuário: " . $Nome . "</p>" ;

    $sql = "UPDATE agenda SET
            
            nome_agenda ='". $Nome ."',
            
            apelido_agenda ='" . $Apelido . "',
            
            endereco_agenda ='" . $Endereco . "',
            
            bairro_agenda ='" . $Bairro . "',
            
            cidade_agenda ='" . $Cidade . "',
            
            estado_agenda ='" . $Estado . "',
            
            telefone_agenda ='". $Fone . "',
            
            celular_agenda ='" . $Celular . "',
            
            email_agenda ='". $Email ."'
            
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
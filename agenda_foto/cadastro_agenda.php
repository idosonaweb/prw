<?php
    
    include ("conexao.php") ;

    $foto_Nome = $_FILES['foto']['name'] ;

    $target_dir = "upload/" ;

    $target_file = $target_dir . basename($_FILES['foto']['name']) ;

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $extensions_arr = array("jpg","jpeg","png","gif");

    if (in_array($imageFileType, $extensions_arr)) 
    {
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir.$foto_Nome)) 
        {
            $foto_Blob = addslashes(file_get_contents($target_dir.$foto_Nome)) ;
        }
    }

    echo "<h1>Agendamento de Clientes - IFSP</h1>" ;

    $Nome_Agenda = $_POST["nome_agenda"];

    $Apelido_Agenda = $_POST["apelido_agenda"];

    $Endereco_Agenda = $_POST["endereco_agenda"];

    $Bairro_Agenda = $_POST["bairro_agenda"];

    $Cidade_Agenda = $_POST["cidade_agenda"];

    $Estado_Agenda = $_POST["estado_agenda"];

    $Fone_Agenda = $_POST["telefone_agenda"];

    $Celular_Agenda = $_POST["celular_agenda"];

    $Email_Agenda = $_POST["email_agenda"];

    $Data_Agenda = date('d/m/Y');

    echo "<p> Nome do cliente: " . $Nome_Agenda . "<br> <br>" ;

    echo "Apelido: " . $Apelido_Agenda . "<br> <br>" ;

    echo "Endereço: " . $Endereco_Agenda . "<br> <br>" ;

    echo "Bairro: " . $Bairro_Agenda . "<br> <br>" ;

    echo "Cidade: " . $Cidade_Agenda . "<br> <br>" ;

    echo "Estado: " . $Estado_Agenda . "<br> <br>" ;

    echo "Telefone: " . $Fone_Agenda . "<br> <br>" ;

    echo "Celular: " . $Celular_Agenda . "<br> <br>" ;

    echo "E-mail: " . $Email_Agenda . "<br> <br>" ;

    echo "Data de Cadastro: " . $Data_Agenda . "</p>" ;

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro, foto_blob, foto_nome)
            values ('" . $Nome_Agenda. "', '" . $Apelido_Agenda . "', '" . $Endereco_Agenda. "', '" . $Bairro_Agenda . 
                    "', '" . $Cidade_Agenda. "', '" . $Estado_Agenda. "', '" . $Fone_Agenda. "', '" . $Celular_Agenda. "', '" . $Email_Agenda. "', '" . $Data_Agenda. "','".$foto_Blob."','".$foto_Nome."')" ;

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
<?php

    include('conexao.php');

    $foto_Nome = $_FILES ['foto']['name'] ;

    $target_dir = "upload/" ;

    $target_file = $target_dir . basename($_FILES ["foto"]["name"]) ;

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $extensions_arr = array("jpg","jpeg","png","gif");

    if (in_array($imageFileType, $extensions_arr)) 
    {
        if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_dir.$foto_Nome)) 
        {
            $foto_Blob = addslashes(file_get_contents($target_dir.$foto_Nome)) ;
        }
    }

    $id_agenda = $_POST["id_agenda"];

    $Nome = $_POST["nome_agenda"];

    $Apelido = $_POST["apelido_agenda"];

    $Endereco = $_POST["endereco_agenda"];

    $Bairro = $_POST["bairro_agenda"];

    $Cidade = $_POST["cidade_agenda"];

    $Estado = $_POST["estado_agenda"];

    $Fone = $_POST["telefone_agenda"];

    $Celular = $_POST["celular_agenda"];

    $Email = $_POST["email_agenda"];

    $Data = date('d/m/Y');

    echo "<h1>Alteração de dados</h1>" ;
    
    echo "<p>Nome usuário: " . $Nome . "</p>" ;

    if (isset($foto_Nome)) 
    {
        $sql = "UPDATE agenda SET
            
            nome ='". $Nome ."',
            
            apelido ='" . $Apelido . "',
            
            endereco ='" . $Endereco . "',
            
            bairro ='" . $Bairro . "',
            
            cidade ='" . $Cidade . "',
            
            estado ='" . $Estado . "',
            
            telefone ='". $Fone . "',
            
            celular ='" . $Celular . "',
            
            email ='". $Email ."',

            foto_blob='".$foto_Blob."',
                
            foto_nome='".$foto_Nome."'
            
            WHERE id_agenda =". $id_agenda ;
    }
    else
    {
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
    }

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
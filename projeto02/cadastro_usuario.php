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

    echo "<h1>Cadastro de Clientes - IFSP</h1>" ;

    $Nome_Usuario = $_POST["nome_usuario"];

    $Email_Usuario = $_POST["email_usuario"];

    $Fone_Usuario = $_POST["telefone_usuario"];

    echo "<p> Nome do usuário: " . $Nome_Usuario . "<br> <br>" ;

    echo "E-mail: " . $Email_Usuario . "<br> <br>" ;

    echo "Telefone: " . $Fone_Usuario . "</p>" ;

    $sql = "INSERT INTO usuario (nome_usuario,email_usuario,telefone_usuario, foto_blob, foto_nome) 
	        VALUES ('".$nome."','".$email."','".$telefone."','".$foto_Blob."','".$foto_Nome."')";
    
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
<?php
    
    include ("conexao.php") ;

    echo "<h1>Agendamento de Clientes - IFSP</h1>" ;

    $Nome_Agenda = $_GET["nome_agenda"];

    $Apelido_Agenda = $_GET["apelido_agenda"];

    $Endereco_Agenda = $_GET["endereco_agenda"];

    $Bairro_Agenda = $_GET["bairro_agenda"];

    $Cidade_Agenda = $_GET["cidade_agenda"];

    $Estado_Agenda = $_GET["estado_agenda"];

    $Fone_Agenda = $_GET["telefone_agenda"];

    $Celular_Agenda = $_GET["celular_agenda"];

    $Email_Agenda = $_GET["email_agenda"];

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

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro)
            values ('" . $Nome_Agenda. "', '" . $Apelido_Agenda . "', '" . $Endereco_Agenda. "', '" . $Bairro_Agenda . 
                    "', '" . $Cidade_Agenda. "', '" . $Estado_Agenda. "', '" . $Fone_Agenda. "', '" . $Celular_Agenda. "', '" . $Email_Agenda. "', '" . $Data_Agenda. "')" ;

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
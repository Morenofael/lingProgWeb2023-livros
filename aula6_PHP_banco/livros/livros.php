<?php 

//Adiciona o arquivo de Conexão a esta página
require_once("Connection.php");

//Conexão a ser utiliza no acesso ao banco de dados
$conn = Connection::getConnection();
//print_r($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros</title>
</head>
<body>
    <h1>Cadastro de livros</h1>

    <h3>Formulário de livros</h3>

    <h3>Listagem de livros</h3>
    <?php 
        $sql = "SELECT * FROM livros";

        //Prepara e executa o comando SQL
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        //Armazena os resultados ($result é uma matriz)
        $result = $stmt->fetchAll();
    ?>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Título</td>
            <td>Gênero</td>
            <td>Páginas</td>
        </tr>
        
        <?php foreach($result as $reg): ?>
            <tr>
                <td> <?php echo $reg['id'] ?> </td>
                <td> <?php echo $reg['titulo'] ?> </td>
                <td> <?= $reg['genero'] ?> </td>
                <td> <?= $reg['qtd_paginas'] ?> </td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>


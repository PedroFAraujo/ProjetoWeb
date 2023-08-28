<?php
    require_once('conexao.php');

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $origem = $_POST['origem'];
    $dataContato = $_POST['dataContato'];
    $observacao = $_POST['observacao'];

    $sql = "INSERT INTO `clientes` (`Nome`, `Telefone`, `Origem`, `Data de Contato`, `Observação`) VALUES ('$nome', '$telefone', '$origem', '$dataContato', '$observacao')";
    
    $stmt = $pdo->prepare($sql);

    if($stmt->execute()){
        header("Location: consultar.php");
    }
?>
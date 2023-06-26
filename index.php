<?php
include 'connect.php';

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];

    // Preparar a consulta SQL para inserção
    $insert = "INSERT INTO nomes (nome) VALUES ('$nome')";

    // Executar a consulta
    if ($connect->query($insert) === TRUE) 
    {
        echo 'Registrado!';
    } else 
    {
        echo 'Erro: ' . $connect->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro</title>
</head>
<body>
    <h2>Formulário de Cadastro</h2>
    <form method="POST" action="index.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html
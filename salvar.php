<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'] ?? '';
    $cpf = $_POST['cpf'] ?? '';
    $data = !empty($_POST['data_nascimento']) ? $_POST['data_nascimento'] : null;
    $tel = $_POST['telefone'] ?? '';

    $sql = "INSERT INTO aluno (nome, cpf, data_nascimento, telefone)
            VALUES ('$nome', '$cpf', '$data', '$tel')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao salvar: " . $conn->error;
    }
}
?>
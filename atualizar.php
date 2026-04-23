<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data = $_POST['dataNascimento'];
$telefone = $_POST['telefone'];

$sql = "UPDATE aluno SET 
        nome='$nome',
        cpf='$cpf',
        dataNascimento='$data',
        telefone='$telefone'
        WHERE id=$id";

$conn->query($sql);

header("Location: index.php");
?>
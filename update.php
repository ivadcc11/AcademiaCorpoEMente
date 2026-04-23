<?php
require 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data = $_POST['data_nascimento'];
$tel = $_POST['telefone'];

$sql = "UPDATE aluno SET 
nome='$nome',
cpf='$cpf',
data_nascimento='$data',
telefone='$tel'
WHERE id=$id";

$conn->query($sql);

header("Location: index.php");
?>
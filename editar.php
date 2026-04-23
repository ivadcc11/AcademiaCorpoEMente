<?php
require 'conexao.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM aluno WHERE id=$id");
$row = $result->fetch_assoc();
?>

<h2>Editar Aluno</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

    Nome: <input type="text" name="nome" value="<?php echo $row['nome']; ?>"><br><br>

    CPF: <input type="text" name="cpf" value="<?php echo $row['cpf']; ?>"><br><br>

    Data: <input type="date" name="data_nascimento" value="<?php echo $row['data_nascimento']; ?>"><br><br>

    Telefone: <input type="text" name="telefone" value="<?php echo $row['telefone']; ?>"><br><br>

    <button type="submit">Atualizar</button>
</form>
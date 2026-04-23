<head>
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php include 'conexao.php'; ?>

<h2>Lista de Alunos</h2>

<a href="cadastrar.php">Novo Aluno</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>CPF</th>
    <th>Data</th>
    <th>Telefone</th>
    <th>Ações</th>
</tr>

<?php
$result = $conn->query("SELECT * FROM aluno");

while($row = $result->fetch_assoc()){
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['nome']}</td>
        <td>{$row['cpf']}</td>
        <td>{$row['data_nascimento']}</td>
        <td>{$row['telefone']}</td>
        <td>
            <a href='editar.php?id={$row['id']}'>Editar</a>
            <a href='excluir.php?id={$row['id']}'>Excluir</a>
        </td>
    </tr>";
}
?>

</table>
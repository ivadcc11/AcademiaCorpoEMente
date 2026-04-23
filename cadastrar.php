<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Aluno</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Cadastrar Aluno</h2>

<form action="salvar.php" method="POST">
    Nome: <input type="text" name="nome"><br>
    CPF: <input type="text" name="cpf"><br>
    Data Nascimento: <input type="date" name="dataNascimento"><br>
    Telefone: <input type="text" name="telefone"><br>
    <button type="submit">Salvar</button>
</form>

<a href="index.php">Voltar</a>

</body>
</html>
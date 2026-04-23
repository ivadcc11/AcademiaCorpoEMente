CREATE DATABASE academia;
USE academia;

CREATE TABLE aluno (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    cpf VARCHAR(20),
    dataNascimento DATE,
    telefone VARCHAR(20)
);
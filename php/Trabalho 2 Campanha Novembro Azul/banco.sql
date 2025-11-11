CREATE DATABASE novembro_azul;
USE novembro_azul;

CREATE TABLE consultas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    data DATE NOT NULL,
    hora TIME NOT NULL
);

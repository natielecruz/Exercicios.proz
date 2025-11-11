<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Campanha Novembro Azul</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Campanha Novembro Azul</h2>

    <!-- Formulário de Cadastro -->
    <form method="POST" id="formCadastro">
        <p>Digite seu nome:</p>
        <input type="text" name="nome" required>

        <p>Digite sua idade:</p>
        <input type="number" name="idade" required>

        <p>Digite seu CPF:</p>
        <input type="text" name="cpf" minlength="11" maxlength="11" required>

        <p>Digite a data mais recente da consulta:</p>
        <input type="date" name="consulta" required><br><br>

        <input type="submit" value="Cadastrar CPF" name="consultar"><br><br>
        <button type="button" onclick="mostrarLogin()">Fazer Login</button>
    </form>

    <!-- Formulário de Login -->
    <form method="POST" id="formLogin" style="display:none;">
        <p>Digite seu CPF:</p>
        <input type="text" name="cpf" minlength="11" maxlength="11" required>
        <input type="submit" value="Entrar" name="entrar">
    </form>

    <?php
    // Conexão com senha
    $conn = new mysqli("localhost", "root", "1234", "novembro_azul");
    if ($conn->connect_error) {
        die("<p>Conexão falhou: " . $conn->connect_error . "</p>");
    }

    // Cadastro
    if (isset($_POST["consultar"])) {
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $cpf = $_POST["cpf"];
        $consulta = $_POST["consulta"];

        $sql = "SELECT * FROM dados WHERE cpf='$cpf'";
        $res = $conn->query($sql);

        if ($res->num_rows == 0) {
            $sql = "INSERT INTO dados (nome, idade, cpf, consulta) VALUES ('$nome', '$idade', '$cpf', '$consulta')";
            $conn->query($sql);
            echo "<script>window.location.href='segunda_pagina.php';</script>";
        } else {
            echo "<p>CPF já cadastrado.</p>";
        }
    }

    // Login
    if (isset($_POST["entrar"])) {
        $cpf = $_POST["cpf"];
        $sql = "SELECT * FROM dados WHERE cpf='$cpf'";
        $res = $conn->query($sql);
        if ($res->num_rows > 0) {
            echo "<script>window.location.href='segundapagina.php';</script>";
        } else {
            echo "<p>CPF não encontrado. Cadastre-se primeiro.</p>";
        }
    }

    $conn->close();
    ?>

    <script>
        function mostrarLogin() {
            document.getElementById("formCadastro").style.display = "none";
            document.getElementById("formLogin").style.display = "block";
        }
    </script>
</body>
</html>
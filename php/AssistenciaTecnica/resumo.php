<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resumo do Agendamento - AzulTech</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <h1>AzulTech</h1>
    <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="formulario.php">Agendamento</a></li>
        <li><a href="historico.php">Histórico</a></li>
    </ul>
</nav>

<div class="resumo">
    <h2>Resumo do Agendamento</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $aparelho = $_POST["aparelho"];
        $modelo = $_POST["modelo"];
        $data = $_POST["data"];
        $descricao = $_POST["descricao"];

        // Exibir os dados
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Telefone:</strong> $telefone</p>";
        echo "<p><strong>E-mail:</strong> $email</p>";
        echo "<p><strong>Equipamento:</strong> $aparelho</p>";
        echo "<p><strong>Modelo:</strong> $modelo</p>";
        echo "<p><strong>Data Preferida:</strong> $data</p>";
        echo "<p><strong>Descrição:</strong> $descricao</p>";

        // Salvar no arquivo
        $linha = "$nome|$telefone|$email|$aparelho|$modelo|$data|$descricao\n";
        file_put_contents("agendamentos.txt", $linha, FILE_APPEND);
    } else {
        echo "<p>Dados não recebidos corretamente.</p>";
    }
    ?>
    <div class="buttons" style="margin-top: 20px;">
        <a href="index.php" class="button">Voltar ao Início</a>
        <a href="historico.php" class="button">Ver Histórico</a>
    </div>
</div>

<footer>© 2025 AzulTech</footer>
</body>
</html>
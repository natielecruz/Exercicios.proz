<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Agendar Serviço - AzulTech</title>
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

<form action="resumo.php" method="POST">
    <h2>Agendamento de Serviço</h2>

    <label>Nome do Cliente:</label>
    <input type="text" name="nome" required>

    <label>Telefone para Contato:</label>
    <input type="tel" name="telefone" required>

    <label>E-mail:</label>
    <input type="email" name="email" required>

    <label>Tipo de Equipamento:</label>
    <select name="aparelho" required>
        <option value="">Selecione</option>
        <option value="Computador">Computador</option>
        <option value="Notebook">Notebook</option>
        <option value="Servidor">Servidor</option>
        <option value="Outro">Outro</option>
    </select>

    <label>Marca e Modelo:</label>
    <input type="text" name="modelo" placeholder="Ex: Dell Inspiron 15">

    <label>Data Preferida:</label>
    <input type="date" name="data" required>

    <label>Descrição do Serviço:</label>
    <textarea name="descricao" rows="4" required></textarea>

    <button type="submit">Enviar Agendamento</button>
</form>

<footer>© 2025 AzulTech</footer>
</body>
</html>
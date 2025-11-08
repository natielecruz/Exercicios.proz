<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Cadastro</title>
    <style>
        /* ===== Estilo geral ===== */
        body {
            font-family: "Poppins", Arial, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* ===== Caixa principal ===== */
        .container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            width: 360px;
            text-align: center;
        }

        h2 {
            color: #444;
            margin-bottom: 15px;
        }

        h3 {
            color: #2575fc;
            margin-bottom: 10px;
        }

        /* ===== Texto e informações ===== */
        p, br {
            line-height: 1.6;
        }

        hr {
            margin: 20px 0;
            border: none;
            height: 1px;
            background-color: #ddd;
        }

        /* ===== Botão de voltar ===== */
        a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            background-color: #2575fc;
            color: white;
            padding: 10px 18px;
            border-radius: 6px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #1a5edc;
        }
    </style>
</head>
<body>
    <div class="container">
        

        <?php 
        if (isset($_POST["nome"])) {
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $aparelho = $_POST["aparelho"];
            $data = $_POST["data"];
            $descricao = $_POST["descricao"];

            

            echo "<h3>Dados preenchidos:</h3>";
            echo "Nome do Cliente: <strong>$nome</strong><br>";
            echo "Telefone: <strong>$telefone</strong><br>";
            echo "Aparelho: <strong>$aparelho</strong><br>";
            echo "Dia para atendimento: <strong>$data</strong><br>"; 
            echo "Problema: <strong>$descricao</strong><br>";
            
        } else {
            echo "Nenhum dado recebido.";
        }

// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "assistencia", 3306);

if ($conn->connect_error) {
    die("<p style='color:red;'>Erro na conexão com o banco de dados: " . $conn->connect_error . "</p>");
}

// Inserir os dados
$sql = "INSERT INTO agendamentos (nome, telefone, aparelho, data, descricao)
        VALUES ('$nome', '$telefone', '$aparelho', '$data', '$descricao')";

if ($conn->query($sql) === TRUE) {
    echo "<p><strong>Nome do cliente:</strong> $nome</p>";
    echo "<p><strong>Telefone:</strong> $telefone</p>";
    echo "<p><strong>Tipo de aparelho:</strong> $aparelho</p>";
    echo "<p><strong>Data preferida:</strong> $data</p>";
    echo "<p><strong>Descrição do problema:</strong> $descricao</p>";
    echo "<p style='color:green; font-weight:bold;'>✅ Agendamento salvo com sucesso no banco de dados!</p><br>";
} else {
    echo "<p style='color:red;'>❌ Erro ao salvar: " . $conn->error . "</p>";
}

$conn->close();

    ?>

        <a href="index.php">Voltar</a>
    </div>
</body>
</html>
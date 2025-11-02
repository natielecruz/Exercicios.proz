<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulário Recebido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 30px;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #4CAF50;
        }

        .dados {
            background-color: #fff;
            padding: 20px;
            max-width: 400px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .dados p {
            margin-bottom: 10px;
        }

        .erro {
            text-align: center;
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Formulário Recebido</h2>

    <?php
    if (isset($_GET["produto"])) {
        $produto = $_GET["produto"];
        $categoria = $_GET["categoria"];
        $preco = $_GET["preco"];
        $estoque = $_GET["estoque"];

        echo "<div class='dados'>";
        echo "<p><strong>Nome do produto:</strong> $produto</p>";
        echo "<p><strong>Categoria:</strong> $categoria</p>";
        echo "<p><strong>Preço:</strong> R$ $preco</p>";
        echo "<p><strong>Quantidade em estoque:</strong> $estoque</p>";
        echo "</div>";
    } else {
        echo "<p class='erro'>Nenhum dado recebido.</p>";
    }
    ?>
</body>
</html>

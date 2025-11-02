<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Histórico de Agendamentos - AzulTech</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="historico">
    <h2>Histórico de Agendamentos</h2>

    <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>Aparelho</th>
                <th>Modelo</th>
                <th>Data</th>
                <th>Descrição</th>
            </tr>
            <?php
            if (file_exists("agendamentos.txt")) {
                $linhas = file("agendamentos.txt");
                foreach ($linhas as $linha) {
                    $dados = explode("|", $linha);
                    echo "<tr>";
                    foreach ($dados as $valor) {
                        echo "<td>" . htmlspecialchars(trim($valor)) . "</td>";
                    }
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7' style='text-align:center;'>Nenhum agendamento encontrado.</td></tr>";
            }
            ?>
        </table>
    </div>

    <div class="buttons">
        <a href="index.php" class="button">Voltar ao Início</a>
    </div>
</div>

<footer>© 2025 AzulTech Assistência Técnica</footer>
</body>
</html>
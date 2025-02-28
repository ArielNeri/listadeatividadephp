<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 450px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .input-container {
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            text-align: center;
        }

        .result p {
            margin: 5px 0;
            font-size: 16px;
        }

        .result div {
            text-align: left;
            margin: 10px 0;
        }

        .result p {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Cadastro de Pessoas</h1>

    <form method="POST">
        <div class="input-container">
            <label for="nome_1">Nome da pessoa 1:</label>
            <input type="text" name="nome[]" placeholder="Nome" required>

            <label for="idade_1">Idade:</label>
            <input type="number" name="idade[]" placeholder="Idade" required>

            <label for="cidade_1">Cidade:</label>
            <input type="text" name="cidade[]" placeholder="Cidade" required>

            <label for="telefone_1">Telefone:</label>
            <input type="text" name="telefone[]" placeholder="Telefone" required>

            <!-- Replicar as entradas para as 10 pessoas -->
            <?php for ($i = 2; $i <= 10; $i++): ?>
                <label for="nome_<?php echo $i; ?>">Nome da pessoa <?php echo $i; ?>:</label>
                <input type="text" name="nome[]" placeholder="Nome" required>

                <label for="idade_<?php echo $i; ?>">Idade:</label>
                <input type="number" name="idade[]" placeholder="Idade" required>

                <label for="cidade_<?php echo $i; ?>">Cidade:</label>
                <input type="text" name="cidade[]" placeholder="Cidade" required>

                <label for="telefone_<?php echo $i; ?>">Telefone:</label>
                <input type="text" name="telefone[]" placeholder="Telefone" required>
            <?php endfor; ?>
        </div>

        <button type="submit">Cadastrar Pessoas</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomes = $_POST['nome'];
        $idades = $_POST['idade'];
        $cidades = $_POST['cidade'];
        $telefones = $_POST['telefone'];

        $matriz = [];

        for ($i = 0; $i < 10; $i++) {
            $matriz[$i] = [$nomes[$i], $idades[$i], $cidades[$i], $telefones[$i]];
        }

        // Exibindo os registros cadastrados
        echo "<div class='result'><p><strong>Registros cadastrados:</strong></p>";
        foreach ($matriz as $registro) {
            echo "<p>Nome: " . $registro[0] . ", Idade: " . $registro[1] . ", Cidade: " . $registro[2] . ", Telefone: " . $registro[3] . "</p>";
        }
        echo "</div>";
    }
    ?>
</div>

</body>
</html>


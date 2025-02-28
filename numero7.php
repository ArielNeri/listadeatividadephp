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
            width: 400px;
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

            <label for="cidade_1">Cidade:</label>
            <input type="text" name="cidade[]" placeholder="Cidade" required>

            <label for="idade_1">Idade:</label>
            <input type="number" name="idade[]" placeholder="Idade" required>

            <label for="sexo_1">Sexo (M/F):</label>
            <input type="text" name="sexo[]" placeholder="Sexo" required>

            <!-- Replicar as entradas para as 10 pessoas -->
            <?php for ($i = 2; $i <= 10; $i++): ?>
                <label for="nome_<?php echo $i; ?>">Nome da pessoa <?php echo $i; ?>:</label>
                <input type="text" name="nome[]" placeholder="Nome" required>

                <label for="cidade_<?php echo $i; ?>">Cidade:</label>
                <input type="text" name="cidade[]" placeholder="Cidade" required>

                <label for="idade_<?php echo $i; ?>">Idade:</label>
                <input type="number" name="idade[]" placeholder="Idade" required>

                <label for="sexo_<?php echo $i; ?>">Sexo (M/F):</label>
                <input type="text" name="sexo[]" placeholder="Sexo" required>
            <?php endfor; ?>
        </div>

        <button type="submit">Cadastrar Pessoas</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomes = $_POST['nome'];
        $cidades = $_POST['cidade'];
        $idades = $_POST['idade'];
        $sexos = $_POST['sexo'];

        $pessoas = [];

        for ($i = 0; $i < 10; $i++) {
            $pessoas[] = [
                "nome" => $nomes[$i],
                "cidade" => $cidades[$i],
                "idade" => $idades[$i],
                "sexo" => strtoupper($sexos[$i])
            ];
        }

        // Exibindo todas as pessoas cadastradas
        echo "<div class='result'><p><strong>Lista de todas as pessoas cadastradas:</strong></p>";
        foreach ($pessoas as $pessoa) {
            echo "<p>Nome: " . $pessoa["nome"] . ", Idade: " . $pessoa["idade"] . "</p>";
        }

        // Exibindo pessoas que moram em Santos
        echo "<p><strong>Pessoas que moram em Santos:</strong></p>";
        foreach ($pessoas as $pessoa) {
            if (strtolower($pessoa["cidade"]) == "santos") {
                echo "<p>" . $pessoa["nome"] . "</p>";
            }
        }

        // Exibindo pessoas com mais de 18 anos
        echo "<p><strong>Pessoas com mais de 18 anos:</strong></p>";
        foreach ($pessoas as $pessoa) {
            if ($pessoa["idade"] > 18) {
                echo "<p>" . $pessoa["nome"] . "</p>";
            }
        }

        // Exibindo quantidade de pessoas do sexo masculino
        $contagem_masculino = 0;
        foreach ($pessoas as $pessoa) {
            if ($pessoa["sexo"] == "M") {
                $contagem_masculino++;
            }
        }

        echo "<p><strong>Quantidade de pessoas do sexo masculino:</strong> $contagem_masculino</p></div>";
    }
    ?>
</div>

</body>
</html>



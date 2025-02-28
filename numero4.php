<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicação de Vetores</title>
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
            width: 350px;
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
    </style>
</head>
<body>

<div class="container">
    <h1>Multiplicação de Vetores</h1>

    <form method="POST">
        <div class="input-container">
            <label for="vetor_a[]">Digite os 10 valores do primeiro vetor:</label>
            <input type="number" name="vetor_a[]" placeholder="Valor 1 do Vetor A" required>
            <input type="number" name="vetor_a[]" placeholder="Valor 2 do Vetor A" required>
            <input type="number" name="vetor_a[]" placeholder="Valor 3 do Vetor A" required>
            <input type="number" name="vetor_a[]" placeholder="Valor 4 do Vetor A" required>
            <input type="number" name="vetor_a[]" placeholder="Valor 5 do Vetor A" required>
            <input type="number" name="vetor_a[]" placeholder="Valor 6 do Vetor A" required>
            <input type="number" name="vetor_a[]" placeholder="Valor 7 do Vetor A" required>
            <input type="number" name="vetor_a[]" placeholder="Valor 8 do Vetor A" required>
            <input type="number" name="vetor_a[]" placeholder="Valor 9 do Vetor A" required>
            <input type="number" name="vetor_a[]" placeholder="Valor 10 do Vetor A" required>
        </div>

        <div class="input-container">
            <label for="vetor_b[]">Digite os 10 valores do segundo vetor:</label>
            <input type="number" name="vetor_b[]" placeholder="Valor 1 do Vetor B" required>
            <input type="number" name="vetor_b[]" placeholder="Valor 2 do Vetor B" required>
            <input type="number" name="vetor_b[]" placeholder="Valor 3 do Vetor B" required>
            <input type="number" name="vetor_b[]" placeholder="Valor 4 do Vetor B" required>
            <input type="number" name="vetor_b[]" placeholder="Valor 5 do Vetor B" required>
            <input type="number" name="vetor_b[]" placeholder="Valor 6 do Vetor B" required>
            <input type="number" name="vetor_b[]" placeholder="Valor 7 do Vetor B" required>
            <input type="number" name="vetor_b[]" placeholder="Valor 8 do Vetor B" required>
            <input type="number" name="vetor_b[]" placeholder="Valor 9 do Vetor B" required>
            <input type="number" name="vetor_b[]" placeholder="Valor 10 do Vetor B" required>
        </div>

        <button type="submit">Multiplicar Vetores</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Captura os vetores a partir dos inputs
        $vetor_a = $_POST['vetor_a'];
        $vetor_b = $_POST['vetor_b'];
        $resultado = [];

        // Realiza a multiplicação dos vetores
        for ($i = 0; $i < 10; $i++) {
            $resultado[$i] = $vetor_a[$i] * $vetor_b[$i];
        }

        // Exibe o resultado da multiplicação
        echo "<div class='result'>";
        echo "<p><strong>Resultado da multiplicação dos vetores:</strong></p>";

        foreach ($resultado as $valor) {
            echo "<p>$valor</p>";
        }

        echo "</div>";
    }
    ?>
</div>
</body>
</html>

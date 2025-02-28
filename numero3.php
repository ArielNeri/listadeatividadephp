<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicação de Valores</title>
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
    <h1>Multiplicação de Valores</h1>

    <form method="POST">
        <div class="input-container">
            <label for="valores[]">Digite 10 valores:</label>
            <input type="number" name="valores[]" placeholder="Valor 1" required>
            <input type="number" name="valores[]" placeholder="Valor 2" required>
            <input type="number" name="valores[]" placeholder="Valor 3" required>
            <input type="number" name="valores[]" placeholder="Valor 4" required>
            <input type="number" name="valores[]" placeholder="Valor 5" required>
            <input type="number" name="valores[]" placeholder="Valor 6" required>
            <input type="number" name="valores[]" placeholder="Valor 7" required>
            <input type="number" name="valores[]" placeholder="Valor 8" required>
            <input type="number" name="valores[]" placeholder="Valor 9" required>
            <input type="number" name="valores[]" placeholder="Valor 10" required>
        </div>

        <div class="input-container">
            <label for="multiplicador">Digite o multiplicador:</label>
            <input type="number" name="multiplicador" placeholder="Multiplicador" required>
        </div>

        <button type="submit">Multiplicar Valores</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valores = $_POST['valores'];
        $multiplicador = $_POST['multiplicador'];

        echo "<div class='result'>";
        echo "<p><strong>Resultado da multiplicação:</strong></p>";

        foreach ($valores as $valor) {
            echo "<p>" . ($valor * $multiplicador) . "</p>";
        }

        echo "</div>";
    }
    ?>

</div>

</body>
</html>

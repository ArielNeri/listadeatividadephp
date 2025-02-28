<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Mês</title>
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
            width: 300px;
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
    <h1>Consulta de Mês</h1>

    <form method="POST">
        <div class="input-container">
            <label for="numero">Digite um número de 1 a 12:</label>
            <input type="number" name="numero" id="numero" placeholder="Número entre 1 e 12" required>
        </div>

        <button type="submit">Consultar Mês</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $meses = [
            1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril",
            5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto",
            9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro"
        ];

        // Captura o número digitado
        $numero = intval($_POST['numero']);

        if ($numero >= 1 && $numero <= 12) {
            echo "<div class='result'><p>O mês correspondente é: " . $meses[$numero] . "</p></div>";
        } else {
            echo "<div class='result'><p style='color: red;'>Número inválido! Digite um número entre 1 e 12.</p></div>";
        }
    }
    ?>

</div>

</body>
</html>

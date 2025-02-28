<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de Números</title>
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
    <h1>Contagem de Números</h1>

    <form method="POST">
        <div class="input-container">
            <label for="numero">Digite um número:</label>
            <input type="number" name="numero[]" id="numero" placeholder="Número" required>
        </div>
        <button type="submit">Adicionar Número</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeros = $_POST['numero'];
        $negativos = 0;
        $positivos = 0;
        $pares = 0;
        $impares = 0;

        foreach ($numeros as $num) {
            if ($num < 0) {
                $negativos++;
            } else {
                $positivos++;
            }

            if ($num % 2 == 0) {
                $pares++;
            } else {
                $impares++;
            }
        }

        echo "<div class='result'>
                <p>Quantidade de números negativos: $negativos</p>
                <p>Quantidade de números positivos: $positivos</p>
                <p>Quantidade de números pares: $pares</p>
                <p>Quantidade de números ímpares: $impares</p>
              </div>";
    }
    ?>

</div>

</body>
</html>

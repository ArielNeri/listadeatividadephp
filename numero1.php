<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Notas</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Centraliza o conteúdo */
        body {
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 15px;
            color: #333;
        }

        .inputs {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        input {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            margin-top: 15px;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .resultado {
            margin-top: 20px;
            padding: 10px;
            background: #e3f2fd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Cadastro de Alunos e Notas</h2>
    <form action="" method="POST">
        <div class="inputs">
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <label>Aluno <?= $i ?>:</label>
                <input type="text" name="alunos[]" placeholder="Nome do aluno" required>
                <input type="number" name="notas[]" placeholder="Nota" step="0.01" min="0" max="10" required>
            <?php endfor; ?>
        </div>
        <button type="submit" name="calcular">Calcular Média</button>
    </form>

    <?php
    if (isset($_POST["calcular"])) {
        $alunos = $_POST["alunos"];
        $notas = $_POST["notas"];
        $somaNotas = 0;
        $maiorNota = 0;
        $alunoMaiorNota = "";

        for ($i = 0; $i < count($alunos); $i++) {
            $somaNotas += $notas[$i];

            if ($notas[$i] > $maiorNota) {
                $maiorNota = $notas[$i];
                $alunoMaiorNota = $alunos[$i];
            }
        }

        $media = $somaNotas / count($alunos);

        echo "<div class='resultado'>";
        echo "<h3>Média da turma: " . number_format($media, 2) . "</h3>";
        echo "<p><strong>Aluno com maior nota:</strong> $alunoMaiorNota (Nota: $maiorNota)</p>";
        echo "</div>";
    }
    ?>
</div>
</body>
</html>

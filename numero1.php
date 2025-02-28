
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 20px;
        }
        .container {
            width: 50%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #aaa;
        }
        input, button {
            margin: 10px;
            padding: 10px;
            width: 80%;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Cadastro de Alunos</h2>
    <form action="process.php" method="post">
        <input type="text" name="nome" placeholder="Nome do aluno" required>
        <input type="number" step="0.01" name="nota" placeholder="Nota" required>
        <button type="submit">Adicionar Aluno</button>
    </form>
</div>
</body>
</html>
<?php
$alunos = [];
$somaNotas = 0;
$maiorNota = 0;
$melhorAluno = "";

for ($i = 0; $i < 10; $i++) {
    echo "Digite o nome do aluno " . ($i + 1) . ": ";
    $nome = trim(fgets(STDIN));

    echo "Digite a nota de $nome: ";
    $nota = floatval(trim(fgets(STDIN)));

    $alunos[$nome] = $nota;
    $somaNotas += $nota;

    if ($nota > $maiorNota) {
        $maiorNota = $nota;
        $melhorAluno = $nome;
    }
}

$media = $somaNotas / 10;

echo "A média da turma é: " . number_format($media, 2) . "\n";
echo "O aluno com maior nota é: $melhorAluno com nota $maiorNota\n";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style04.css" type="text/css">
    <title>Exercício 4 - PHP</title>
</head>
<body>
    <h1>Exercício 4</h1>
    <p>Calculando nota e presença de alunos:</p>
    <?php
        $n1 = $_POST["nota1"];
        $n2 = $_POST["nota2"];
        $presenca = $_POST["presenca"];
        $media = ceil(($n1 + $n2) / 2);
        $msg = "";

        # resultados
        if($media >= 6) {
            $msg = "O aluno com $presenca% de presença está aprovado com $media de média.";
        } elseif($media >= 4 && $media < 6) {
            $msg = "O aluno com $presenca% está em segunda época, com $media de média.";
        } else {
            $msg = "O aluno com $presenca% de presença está reprovado com $media de média.";
        }

        echo "<p>$msg</p>";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style04.css" type="text/css">
    <title>Exercício 5 - PHP</title>
</head>
<body>
    <h1>Exercício 5</h1>
    <p>Lendo número e exibindo a soma de 1 até ele.</p>
    <?php
        $numero = $_POST["numero"];
        $soma = 0;

        # loop
        for($i = 1; $i <= $numero; $i++){
            $soma += $i;
        }

        echo "<p>A soma de 1 até $numero é: $soma.</p>"
    ?>
</body>
</html>
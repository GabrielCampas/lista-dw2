<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style06.css" type="text/css">
    <title>Exercício 6 - PHP</title>
</head>
<body>
    <h1>Exercício 6</h1>
    <p>Vetor que lê 5 números em sequência, exibindo a média deles.</p>
    <?php
        $vetorNum = $_POST["numeros"];

        # calcula a soma e a média
        $soma = array_sum($vetorNum);
        $quantidade = count($vetorNum);
        $media = $soma / $quantidade;

        # transforma o array em texto pra exibir
        $texto = implode(", ", $vetorNum);

        echo "<p>Os números digitados foram: $texto </p>";

        echo "<p><strong>Resultado:</strong></p>";
        
        echo "<p>A média é: " . number_format($media, 2, ',', '.') . "</p>"
    ?>
</body>
</html>
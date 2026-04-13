<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style03.css" type="text/css">
    <title>Exercício 3 - PHP</title>
</head>
<body>
    <h1>Exercício 3</h1>
    <img src="../imagens/retangulo.svg" alt="retângulo" width="300">
    <?php
        $base = $_POST["base"];
        $altura = $_POST["altura"];

        $area = $base * $altura;
        $perimetro = 2 * ($base + $altura);

        # resultados
        echo "<p>Área: $area m².</p>";
        echo "<p>Perímetro: $perimetro m.</p>"
    ?>
</body>
</html>
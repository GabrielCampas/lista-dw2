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
    <!--inicio form-->
    <form action="ex06_resultado.php" method="post" id="ex06" name="ex06">
        <?php for($i = 1; $i <= 5; $i++): ?>
        <label>Digite o <?php echo $i; ?>º número:</label>
        <input type="number" name="numeros[]" required>
        <br><br>
        <?php endfor; ?>

        <button type="submit">Calcular média</button>
    </form>
    <!--fim form-->
</body>
</html>
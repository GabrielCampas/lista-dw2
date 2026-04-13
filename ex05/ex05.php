<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style05.css" type="text/css">
    <title>Exercício 5 - PHP</title>
</head>
<body>
    <h1>Exercício 5</h1>
    <p>Lendo número e exibindo a soma de 1 até ele.</p>
    <!--inicio form-->
    <form action="ex05_resultado.php" method="post" name="ex05" id="ex05">
        <label for="numero">Digite seu número de escolha:</label>
        <input type="number" name="numero" id="numero" tabindex="1">
        <br>
        <div>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </div>
    </form>
    <!--fim form-->
</body>
</html>
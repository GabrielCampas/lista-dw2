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
    <p><strong>Calculando a área e o perímetro do retângulo.</strong></p>
    <img src="../imagens/retangulo.svg" alt="retângulo" width="300">
    <!--inicio form-->
    <form action="ex03_resultado.php" id="ex03" name="ex03" method="post">
        <label for="base">Digite a <strong>base</strong> do seu retângulo: </label>
        <input type="number" tabindex="1" name="base" id="base">
        <br>
        <label for="altura">Digite a <strong>altura</strong> do seu retângulo: </label>
        <input type="number" name="altura" id="altura" tabindex="2">
        <br>
        <div>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </div>
    </form>
    <!--fim form-->
    <br>
    <p><a href="../index.php">
            <i class="fa-solid fa-arrow-left"></i> Voltar Menu</a>
    </p>
</body>
</html>
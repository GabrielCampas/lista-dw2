<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style02.css" type="text/css"/>
    <title>Exercício 2 - PHP</title>
</head>

<body>
    <h1>Exercício 2</h1>
    <!--inicio form-->
    <form action="ex02_resultado.php" id="ex02" name="ex02" method="post">
        <p>Insira dois números nos campos abaixo:</p>
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1" tabindex="1" required />
        <label for="numero">Número 2:</label>
        <input type="number" name="numero2" id="numero2" tabindex="2" required />
        <div>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </div>
    </form>
    <br>
    <p><a href="../index.php"> 
        <i class="fa-solid fa-arrow-left"></i> Voltar Menu</a>
    </p>
</body>
</html>
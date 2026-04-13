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
    <p>Calculando nota e presença de alunos.</p>
    <!--Inicio form-->
    <form action="ex04_resultado.php" id="ex04" name="ex04" method="post">
        <label for="nota1">Digite a <strong>primeira nota</strong> do aluno:</label>
        <input type="number" name="nota1" id="nota1" tabindex="1">
        <br>
        <label for="nota2">Digite a <strong>segunda nota</strong> do aluno:</label>
        <input type="number" name="nota2" id="nota2" tabindex="2">
        <br>
        <label for="presenca">Digite a <strong>porcentagem de presença</strong> do aluno:</label>
        <input type="text" tabindex="3" name="presenca" id="presenca">
        <br>
        <div>
            <input type="submit" value="Enviar">
            <input type="reset" value="Limpar">
        </div>
    </form>
    <!--fim form-->
</body>
</html>
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
    <?php
        $n1 = $_POST["numero1"];
        $n2 = $_POST["numero2"];

        $somar = $n1 + $n2;
        $subtracao = $n1 - $n2;
        $multiplicar = $n1 * $n2;
        if($n2 != 0){
            $dividir = $n1 / $n2;
        } else {
            $dividir = "Não é possível dividir por zero.";
        }

        # resultados
        echo "<p>$n1 + $n2 = $somar</p>"; 
        echo "<p>$n1 - $n2 = $subtracao</p>"; 
        echo "<p>$n1 * $n2 = $multiplicar</p>"; 
        echo "<p>$n1 / $n2 = $dividir</p>"; 
    ?>
    <a href="ex02.php"><i class="fa-solid fa-arrow-left"></i> Voltar</a>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - PHP</title>
</head>
<body>
    <h1>Exercício 1</h1>
    <?php 
        $nomecompleto = $_POST["nomecompleto"];
        $email        = $_POST["email"];
        $telefone     = $_POST["telefone"];
        $idade        = $_POST["idade"]; 
        
        $resposta = $nomecompleto ." tem ". $idade. 
        " anos. Seu email:" . $email ." e telefone: ". $telefone.'.';
        
        echo $resposta;
    ?>
</body>
</html>
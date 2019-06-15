<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Escrevendo uma variavel na tela</title>
</head>
<body>
    <?php 
        $var = 2;

        echo("
            <div>
                <h1>Valor da Variável</h1>
                <p>variável: " . $var ."</p>
            </div>
        ");
    ?>
</body>
</html>
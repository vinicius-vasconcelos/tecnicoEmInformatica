<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Média 5 valores</title>
</head>
<body>
    <?php 
        $n1 = 2;
        $n2 = 2;
        $n3 = 2;
        $n4 = 2;
        $n5 = 2;
        $media = ($n1 + $n2 + $n3 + $n4+ $n5) / 5;

        echo("
            <div>
                <h1>Média 5 valores</h1>
                <p>Valor 1 =" . $n1 ."</p>
                <p>Valor 2 =" . $n2 ."</p>
                <p>Valor 3 =" . $n3 ."</p>
                <p>Valor 4 =" . $n4 ."</p>
                <p>Valor 5 =" . $n5 ."</p>
                <br><br>
                <strong>Média =" . $media ."</strong>
            </div>
        ");
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Par ou Impar</title>
</head>
<body>
    <?php 
        $n1 = 3;
        $resp;

        if($n1 % 2)
            $resp = "O número " . $n1 . " é impar";
        else
            $resp = "O número " . $n1 . " é par";

        echo("
            <div>
                <h1>Par ou Impar</h1>
                <p>Valor = ". $n1 ."</p>
                <p>". $resp ."</p>
            </div>
        ");
    ?>
</body>
</html>
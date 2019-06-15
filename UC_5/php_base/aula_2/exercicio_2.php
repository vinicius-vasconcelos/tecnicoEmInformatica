<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area do triangulo</title>
</head>
<body>
    <?php 
        $base = 2;
        $altura = 10;
        $area = ($base * $altura) / 2;

        echo("
            <div>
                <h1>Area do triangulo</h1>
                <p> area: " . $area . "; base: " . $base . "; area = ". $area ."</p>
            </div>
        ");
    ?>
</body>
</html>
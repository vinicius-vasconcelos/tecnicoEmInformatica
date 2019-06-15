<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>>Menor valor</title>
</head>
<body>
    <?php 
        $n1 = 2;
        $n2 = 3;
        $resp;

        if($n1 > $n2)
            $resp = "O menor valor é: " . $n2;
        else
            $resp = "O menor valor é: " . $n1;

        echo("
            <div>
                <h1>Menor valor</h1>
                <p>Valor 1 = ". $n1 ."</p>
                <p>Valor 2 = ". $n2 ."</p>
                <p>". $resp ."</p>
            </div>
        ");
    ?>
</body>
</html>
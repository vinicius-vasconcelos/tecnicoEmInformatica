<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exibe impares</title>
</head>
<body>
    <?php 
        $n1 = 30;
        $resp = "Os números impares são: ";

        for ($i=0; $i < $n1; $i++) 
            if(!($i % 2))
                $resp .= $i . " - ";  

        echo("
            <div>
                <h1>Exibe impares</h1>
                <p>valor final = ". $n1 ."</p>
                <p>". $resp ."</p>
            </div>
        ");
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Número Primo</title>
</head>
<body>
    <?php 
        $n1 = 3;
        $cont = 0;

        for ($i=1; $i <= $n1; $i++)
            if($n1 % $i == 0)
              $cont++;

        if($cont > 0 && $cont <= 2)
            $resp = "O número é primo";
        else
            $resp = "O número não é primo";

        echo("
            <div>
                <h1>Número primo</h1>
                <p>valor = ". $n1 ."</p>
                <p>". $resp ."</p>
            </div>
        ");
    ?>
</body>
</html>
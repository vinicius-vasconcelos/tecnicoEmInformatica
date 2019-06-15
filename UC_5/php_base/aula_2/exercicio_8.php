<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fatorial</title>
</head>
<body>
    <?php 
        $n1 = 6;
        $fat = 1;
        $resp = "!" . $n1 . "=";

        for ($i = $n1; $i > 0; $i--) {
            $fat *= $i;
            $resp .= $i . ".";
        }

        echo("
            <div>
                <h1>Fatorial</h1>
                <p>valor = ". $n1 ."</p>
                <p>" . $resp . "</p>
                <p>O fatorial é ". $fat ."</p>
            </div>
        ");
    ?>
</body>
</html>
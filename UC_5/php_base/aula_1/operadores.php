<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operadores</title>
    <style>
        h1 {
            border: 1px solid #000000;
            background-color: red;
            color: white;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php 
        $n1 = 20;
        $n2 = 2;

        echo("<h1>" . $n1 . "+" . $n2 . " = " . ($n1 + $n2) . "</h1>");
        echo("<h1>" . $n1 . "-" . $n2 . " = " . ($n1 - $n2) . "</h1>");
        echo("<h1>" . $n1 . "*" . $n2 . " = " . ($n1 * $n2) . "</h1>");
        echo("<h1>" . $n1 . "/" . $n2 . " = " . ($n1 / $n2) . "</h1>");
        echo("<h1>" . $n1 . "%" . $n2 . " = " . ($n1 % $n2) . "</h1>");
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operadores</title>
    <style>
        div {
            border: 1px solid #000000;
            color: white;
            text-align: center;
            font-weight: bold;
            height: 50vh;
            width: 100%;
        }

        .aprovado {
            background-color: green;
        }

        .reprovado {
            background-color: red;
        }
    </style>
</head>
<body>
        <div id="souFoda"> </div>

        <script>
            let str = `<h1>Média de 5 Números: </h1>`

            str += '<?php 
                $n1 = 10;
                $n2 = 4;
                $n3 = 3;
                $n4 = 2;
                $n5 = 10;
                $media = (($n1 + $n2 + $n3 + $n4 + $n5) / 5);
                echo("<p>" . $n1 . " + " . $n2 . " + " . $n3 . " + " . $n4 . " + " . $n5 ." / " . " 5 " . " = " . $media . "</p>");

                if($media >= 5)
                    echo("<p>Aprovado</p>");
                else
                    echo("<p>Reprovado</p>");

            ?>';

            let media = '<?= $media ?>';

            if(media >= 5)
                document.getElementById('souFoda').classList.add('aprovado');
            else
                document.getElementById('souFoda').classList.add('reprovado');

                document.getElementById('souFoda').innerHTML = str;
        </script>

</body>
</html>
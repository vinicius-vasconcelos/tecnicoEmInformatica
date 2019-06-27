<?php
    date_default_timezone_set('UTC');
    $hoje = date('d/M/Y');
    $dia = date('d');
    $mes = date('m');
    $ano = date('y');
    $l = date('l');
    $idade = date('Y') - 1996;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 1</title>

    <style>
        #idade {
            width: 15%;
            height: auto;
            margin: 10px auto;
            padding: 10px;
            border: 1px solid #000;
            text-align: center;
            border-radius: 3px;
        }

        img {
            border: 1px solid #ddd;
            padding: 10px;
            box-shadow: 5px 10px 20px 1px #bbb;
        }

        img:hover {
            transition: all;
            transition-delay: 100ms;
            transition-duration: 850ms;
            transform: scale(1.05, 1.05);
        }
    </style>

</head>
<body>
    <?php echo($hoje)?> <br>
    <?php echo($dia)?> <br>
    <?php echo($mes)?> <br>
    <?php echo($ano)?> <br>
    <?php echo($l)?> <br>

    <br>
    <div>
        <?php 
            if(date('Y') == 1983)
                echo('Hoje é 1983');
            else
                echo('Hoje não é 1983');
        ?>
    </div>

    <br>
    <div id="idade">
        <?php echo('Eu tenho ' . $idade . ' anos');?><br>
        <?php 
            if($idade % 2 == 0)
                echo('<p>Eu sou da casa do TARGARYEM</p> <img src="./image/targaryen.png" width="150">');
            else
                echo('<p>E sou da casa do <b>STARK</b></p> <img src="./image/stark.png" width="150">');
        ?><br>
    </div>
</body>
</html>
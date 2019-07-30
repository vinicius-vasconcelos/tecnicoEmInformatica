<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Resposta</title>
    </head>
    <body>
        <?php

            $v1 = 0;
            $v2 = 0;
            $total = 0;

            if(isset($_POST['valor1']) && isset($_POST['valor2'])) {
                $v1 = $_POST['valor1'];
                $v2 = $_POST['valor2'];

                switch($_POST['op']) {
                    case '+':
                        $total = $v1 + $v2;
                        break;
                    
                    case '-':
                        $total = $v1 - $v2;
                        break;
                    
                    case '*':
                        $total = $v1 * $v2;
                        break;
                    
                    case '/':
                        $total = $v1 / $v2;
                        break;
                }

                $retorno = "?v1=" . $v1 . "&v2=" . $v2 . "&result=" . $total . "&op=" . $_POST['op'];
                header("Location:exercicio_1.php" . $retorno);

            } else {
                header("Location:exercicio_1.php");
            }
        ?>
        <p><a href="exercicio_1.php">Voltar</a></p>
    </body>
</html>
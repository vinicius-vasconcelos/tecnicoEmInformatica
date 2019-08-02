<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste PHP</title>
</head>
<body>
    <?php 
        require_once("Contato.php");
        $obj = new Contato();
        
        $obj->setId(10);
        $obj->setNome('Danilo');

        echo "<pre>";
            print_r($obj);
        echo "</pre>";
    ?>
</body>
</html>
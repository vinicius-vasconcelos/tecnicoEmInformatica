<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Exercício 1</title>
        <style>
            input, button, select {
                display: block;
                margin: 10px;
            }
        </style>

    </head>
    <body>

        
        <form action="resposta.php" method="post">
            <input type="number" name="valor1" id="valor1" placeholder="Digite um valor" value="<?= $_GET['v1'] ?>">
            <input type="number" name="valor2" id="valor2" placeholder="Digite um valor" value="<?= $_GET['v2'] ?>">
            <select name="op" id="op">
                <?php if(isset($_GET["op"])) {?>
                    <option value="<?= $_GET['op'] ?>"><?= $_GET['op'] ?></option>
                <?php }?>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <button type="submit">Calcular</button>
            <?php if(isset($_GET['result'])){?>
                <h2><?= $_GET['result']?></h2>
            <?php }?>
        </form>
    </body>
</html>
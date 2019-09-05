<?php
    require_once('../include/connectaBD.php');

    if(isset($_POST['btRecuperar'])) {
        $senha = md5($_POST['novaSenha']);
        $nome = $_POST['nome'];
        $sql = "UPDATE users SET senha = '$senha' WHERE nome= '$nome' AND login ='" . $_POST['login']."'";

        if(mysqli_query($banco, $sql))
            header("location: index.php?sucesso=Senha alterada com sucesso !!!");
        else
            header("location: index.php?error=Falha na recuperação de senha !!!");
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>PokeAgenda3.0 - AnDaNilo</title>

        <link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
        <meta name="keywords" content="PokeAgenda">
        <meta name="autor" content="seu nome aqui">
        <meta name="description" content="Agenda de contatos e possíveis clientes">

        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400i,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <link rel="stylesheet" href="../css/folha.css" type="text/css">
    </head>

    <body>
        <?php if(isset($_GET['error'])) {?>
            <div class="error">
                <p><?= $_GET['error']?></p>
            </div>
        <?php }?>
    
        <?php if(isset($_GET['sucesso'])) {?>
            <div class="sucesso">
                <p><?= $_GET['sucesso']?></p>
            </div>
        <?php }?>

        <section id="acesso">
            <form action="#" method="post">
                <input type="text" name="nome" id="nome" placeholder="Nome cadastrado...">
                <input type="text" name="login" id="login" placeholder="Login cadastrado...">
                <input type="password" name="novaSenha" id="novaSenha" placeholder="Nova senha...">
                <input type="submit" name="btRecuperar" id="btRecuperar" value="Enviar">
                <input type="button" onclick="window.location.href='index.php'"  value="voltar">
            </form>
        </section>
    </body>

</html>
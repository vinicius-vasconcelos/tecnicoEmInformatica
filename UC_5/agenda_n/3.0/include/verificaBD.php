<?php
    require_once("connectaBD.php");

    $login = addslashes($_POST['txtLogin']);
    $senha = addslashes($_POST['txtSenha']);
    $senha = md5($senha);

    $sql = "SELECT * FROM users WHERE login = '$login' AND senha = '$senha'";

    if($row  = mysqli_fetch_array(mysqli_query($banco, $sql))) {

        if(isset($_SESSION)) {
            $_SESSION['liberado'] = true;
            $_SESSION['login'] = $login;
            $_SESSION['nome'] = $row['nome'];
        }

        header("location: ../ctrlweb/admin.php?sucesso=Bem vindo " . $row['nome']);
    }
    else {
        if(isset($_SESSION))
            $_SESSION['liberado'] = false;

        header("location: ../ctrlweb/index.php?error=Falha de autenticação");
    }
?>
<?php 
    require_once("Conexao.php");
    require_once("Contato.php");
    require_once("ContatoDAL.php");

    $conexao = new Conexao("localhost", "root", "", "agenda1.0");
    $contato = new Contato($_POST['txtNome'], $_POST['txtTelefone'], $_POST['txtEmail']);
    $conDal = new ContatoDAL($conexao);
    $conDal->insert($contato);
?>

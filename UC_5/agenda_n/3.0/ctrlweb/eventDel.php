<?php
    require_once('../include/connectaBD.php');
    require_once('../include/validar.php');

    $id = addslashes($_GET['id']);
    $id = mysqli_real_escape_string($banco, $id);
    
    $sql = "DELETE FROM agendamentos WHERE idagendamentos = '$id'";

    if(mysqli_query($banco, $sql))
        header("location: event.php?sucesso=Agendamento excluido com sucesso !!!");
    else
        header("location: event.php?error=Problemas ao deletar Agendamento !!!");
?>
<?php
    require_once('../include/connectaBD.php');
    require_once('../include/validar.php');

   
    $sql = "DELETE FROM agendamentos WHERE idagendamentos = " . $_GET['id'];

    if(mysqli_query($banco, $sql))
        header("location: event.php?sucesso=Agendamento excluido com sucesso !!!");
    else
        header("location: event.php?error=Problemas ao deletar Agendamento !!!");
?>
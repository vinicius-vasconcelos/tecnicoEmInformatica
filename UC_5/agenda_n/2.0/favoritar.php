<?php
    require_once('include/connectaBD.php');

    $id = $_GET['star'];
    $op = $_GET['op'];

    $execute = "UPDATE contatos SET favoritos = '$op' WHERE idcontatos = $id";

    if(mysqli_query($banco, $execute)) {
        if((int) $op)
            $msg = "Contato like com sucesso !!!";
        else
            $msg = "Contato dislike com sucesso !!!";
        
        header("location: index.php?sucesso=" . $msg);
    }
    else {
        $msg = "Problemas ao favoritar contato, tente mais tarde !";
        header("location: index.php?error=" . $msg);
    }

?>
<?php
    require_once('../include/connectaBD.php');
    require_once('../include/validar.php');

    /*if(isset($_GET['id'])) {
        $sql = "SELECT count(users_idusers) FROM contatos WHERE idcontatos = " . $_GET['id'];

        if(mysqli_num_rows(mysqli_query($banco, $sql)) > 0)
            header("location: contatos.php?error=Este contato possui vínculos, não pode ser excluido !!!");
        else {*/
            $id = addslashes($_GET['id']);
            $id = mysqli_real_escape_string($banco, $id);
            
            $sql = "DELETE FROM contatos WHERE idcontatos = '$id'";

            if(mysqli_query($banco, $sql))
                header("location: contatos.php?sucesso=Contato excluido com sucesso !!!");
            else
                header("location: contatos.php?error=Problemas ao deletar contato !!!");
        //}

    //}
?>
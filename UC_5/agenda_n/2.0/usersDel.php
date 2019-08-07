<script>
    let op = confirm('Deseja realmente apagar?');

    if(!op)
        window.location.href = "usersList.php";
</script>

<?php
    require_once('include/connectaBD.php');

    $executa = $banco->query("SELECT COUNT(users_idusers) as qtd FROM contatos WHERE users_idusers = " . $_GET['id']);

    if(mysqli_fetch_assoc($executa)['qtd'] == 0) {
        $executa = $banco->query("DELETE FROM users WHERE idusers = " . $_GET['id']);
        $msg = "User apagado com sucesso !!!";
        header("location: usersList.php?sucesso=" . $msg);
    }
    else {
        $msg = "Este user contém vínculos, ele não pode ser deletado !";
        header("location: usersList.php?error=" . $msg);
    }
   
?>
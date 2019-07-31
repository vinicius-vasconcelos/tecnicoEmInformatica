<?php
    require_once('include/connectaBD.php');
    $banco->query("DELETE FROM contatos WHERE idcontatos = " . $_GET['idcontatos']);
    echo json_encode("ok");
?>
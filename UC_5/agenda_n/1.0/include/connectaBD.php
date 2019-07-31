<?php 
    $banco =  new mysqli("localhost", "root", "", "agenda1.0");
    if($banco->connect_errno)
        echo "Erro ao tentar conectar no banco. [ERROR: " . $banco->connect_error . "]";
?>
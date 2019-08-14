<?php
    $banco = new mysqli("localhost", "root", "", "agenda3.0");

    mysqli_set_charset($banco, "UTF8");

    if($banco->connect_errno)
        echo "Fudeu cumpadi, conectou não !!! [ERROR: " . $banco->connect_error . "]";
    else
        if(!isset($_SESSION))
            session_start();

?>
<?php
    $banco = new mysqli("localhost", "root", "", "agenda2.0");

    if($banco->connect_errno)
        echo "DEU RUIN CUZÃO, BD Ñ CONECTOU. [ERROR:" . $banco->connect_error . "]";
?>
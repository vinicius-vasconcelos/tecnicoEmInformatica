<?php
    if($_SESSION['liberado'] == false)
        header("location: index.php?error=Você não está autorizado, logue-se !!!");
?>
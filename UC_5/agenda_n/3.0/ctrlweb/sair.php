<?php
	require_once('../include/connectaBD.php');

	if($_SESSION['liberado'] == false)
		header("location: index.php?error=Você não está autorizado, logue-se !!!");


    unset($_SESSION['liberado']);
    unset($_SESSION['login']);
    unset($_SESSION['nome']);
    session_destroy();
    header("location: index.php?sucesso=Até mais, volte sempre !!!");
?>
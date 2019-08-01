<?php
    require_once('include/connectaBD.php');

    $sql = "DELETE FROM contatos WHERE idcontatos = " . $_GET['id'];

    if(mysqli_query($banco, $sql))
			header("location: index.php");
		else
			echo 'ERROR: ' . mysqli_error($banco);
?>
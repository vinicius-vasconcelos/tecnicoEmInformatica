<?php
  require_once('../include/connectaBD.php');
  require_once('../include/validar.php');

  unset($_SESSION['liberado']);
  unset($_SESSION['login']);
  unset($_SESSION['nome']);
  session_destroy();
  header("location: index.php?sucesso=Até mais, volte sempre !!!");
?>
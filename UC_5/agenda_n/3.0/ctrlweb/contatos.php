<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>PokeAgenda3.0 - AnDaNilo - Controle</title>
<link rel="stylesheet" href="../css/folha.css" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="../image/favicon.ico">
</head>
<body>
<header>
  <div id="logo"><img src="../image/top_key.png" alt="Logo PokeAgenda"> Paínel de controle</div>
  <div id="search">
    <form action="#" method="get" name="formBusca" id="formBusca">
      <input type="text" name="txtBusca" id="txtBusca" placeholder="Busca">
      <input type="submit" name="btSerach" id="btSearch" value="Buscar">
    </form>
  </div>
</header>
<nav>
  <ul>
    <li><a href="admin.php">Inicio</a></li>
    <li><a href="contatos.php">Contatos</a></li>
    <li><a href="users.php">Usuários</a></li>
    <li><a href="event.php">Eventos</a></li>
    <li><a href="sair.php">Sair</a></li>
  </ul>
</nav>
<main>
  <article>
    <section id="listar">
      <h2>Listando todos os Contatos</h2>
      <h3><a href="contatoAdd.php">Cadastrar Contato</a></h3>
      <div class="list">
        <div class="listFt"><img src="../image/ftDefault.png" alt="Foto contato"></div>
        <div class="listNome">Nome:</div>
        <div class="listTel">Telefone:</div>
        <div class="listEmail">Email:</div>
        <div class="up"><a href="contatoUp.php">Editar</a></div>
        <div class="del"><a href="contatoDel.php">Excluir</a></div>
      </div>
    </section>
  </article>
</main>
<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>
</html>
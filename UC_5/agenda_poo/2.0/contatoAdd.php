<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>PokeAgenda2.0 - AnDaNilo - Cadastrar</title>
<link rel="stylesheet" href="css/folha.css" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
<meta name="keywords" content="PokeAgenda">
<meta name="autor" content="seu nome aqui">
<meta name="description" content="Agenda de contatos e possíveis clientes">
</head>
<body>
<header>
  <div id="logo"><img src="image/logoTwo.png" alt="Logo PokeAgenda"></div>
  <div id="search">
    <form action="#" method="get" name="formBusca" id="formBusca">
      <input type="text" name="txtBusca" id="txtBusca" placeholder="Digite parte de um nome">
      <input type="submit" name="btSerach" id="btSearch" value="Buscar">
    </form>
  </div>
</header>
<nav>
<ul>
<li><a href="index.php">Contatos</a></li>
<li><a href="usersList.php">Usuários</a></li>
<li><a href="javascript:history.back();">Voltar</a></li>
</nav>
<main>
  <article>
    <h1>Agenda de clientes/contato</h1>
    <section id="listar">
      <h2>Novo cadastro</h2>
      <div id="newCad">
        <form action="#" method="post" name="formCad" id="formCad">
          <input type="text" name="txtNome" id="txtNome" placeholder="Nome">
          <input type="text" name="txtTelefone" id="txtTelefone" placeholder="Telefone">
          <input type="text" name="txtEmail" id="txtEMail" placeholder="E-Mail">
          <select name="selUser" id="selUser">
            <option value="">Selecione</option>
          </select>
          <input type="submit" name="btCad" id="btCad" value="Cadastrar">
        </form>
      </div>
    </section>
  </article>
</main>
<footer>Desenvolvido por seres supremos &reg; &copy;</footer>
</body>
</html>
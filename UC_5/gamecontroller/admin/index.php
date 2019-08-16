<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login - VCSjunior Sistemas</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- FontWaesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- Custom login css -->
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <form method="POST" class="form-signin" action="./controllers/ctrAdministrador.php?op=logar">
        <div class="text-center mb-4">
            <img class="mb-4" src="imagens/sistema/geral/login.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Área Restrita</h1>
            <p>Para ter acesso ao painel, identifique-se!</p>
        </div>

        <?php if(isset($_GET['sair'])) {?>
            <div class="card border-success mb-4">
                <div class="card-body text-success">
                    <p class="card-text text-center"><i class="fas fa-exclamation-triangle"></i> Até mais, volte logo</p>
                </div>
            </div>
        <?php }?>

        <?php if(isset($_GET['erro'])) {?>
            <div class="card border-danger mb-4">
                <div class="card-body text-danger">
                    <p class="card-text text-center"><i class="fas fa-exclamation-triangle"></i> <?= $_GET['erro']?></p>
                </div>
            </div>
        <?php }?>

        <div class="form-label-group">
            <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputEmail">usuario@gmail.com</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputPassword">Senha</label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2019</p>
    </form>
</body>

</html>
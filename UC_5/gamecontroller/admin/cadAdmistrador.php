<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Cadastro de Administradores</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- FontWaesome -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- Custom login css -->
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <?php include_once("./header.php") ?>

    <div class="d-flex">
        <?php include_once("./sidenav.php") ?>


        <!--INICIO APRESENTAR CONTEUDO-->
        <div class="content p-3">
            <div class="list-group-item">
                <div class="d-flex">
                    <div class="mr-auto p-1">
                        <h2 class="display-4 titulo-pagina">Cadastrar Admistrador</h2>
                    </div>
                    <a href="cadastrar.html">
                        <div class="p-1">
                            <button class="btn btn-sm btn-outline-secondary">
                                    <i class="fas fa-undo-alt"></i> Listar todos
                            </button>
                        </div>
                    </a>
                </div>
                <div class="dropdown-divider"></div>

                <?php if(isset($_GET['sucesso'])) {?>
                    <div class="card border-success mb-3">
                        <div class="card-body text-success">
                            <p class="card-text text-center"><i class="fas fa-thumbs-up"></i> <?= $_GET['sucesso']?></p>
                        </div>
                    </div>
                <?php }?>

                <?php if(isset($_GET['erro'])) {?>
                    <div class="card border-danger mb-3">
                        <div class="card-body text-danger">
                            <p class="card-text text-center"><i class="fas fa-thumbs-down"></i> <?= $_GET['erro']?></p>
                        </div>
                    </div>
                <?php }?>
                
                <form method="POST" action="./controllers/ctrAdministrador.php?op=insert">
                    <div class="form-group">
                        <label for="inputAddress">Nome Completo(*):</label>
                        <input type="text" class="form-control" id="inputAddress" name="nome" placeholder="Fulaninho da Sila..." required autofocus>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">E-mail(*):</label>
                            <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="E-mail" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Senha(*):</label>
                            <input type="password" class="form-control" id="inputPassword4" name="senha" placeholder="Senha" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <button type="button" class="btn btn-danger" onclick="window.location.href='painel.php'">Cancelar</button>
                </form>

            </div>
        </div>
    </div>
    <!--Fim conteudo -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/showHidePopUp.js"></script>
</body>

</html>
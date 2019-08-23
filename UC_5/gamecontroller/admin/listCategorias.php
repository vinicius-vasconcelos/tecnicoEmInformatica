<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Lista de Administradores</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/floating-labels/">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- FontWaesome -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- Custom login css -->
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body onload="getForList('ctrCategoria.php')">
    <?php include_once("./header.php") ?>

    <div class="d-flex">
        <?php include_once("./sidenav.php") ?>


        <!--INICIO APRESENTAR CONTEUDO-->
        <div class="content p-3">
            <div class="list-group-item">

                <div class="d-flex">
                    <div class="mr-auto p-1">
                        <h2 class="display-4 titulo-pagina">Categorias</h2>
                    </div>
                    <a href="cadCategoria.php">
                        <div class="p-1">
                            <button class="btn btn-outline-primary">
                                    <i class="far fa-plus-square"></i> Nova Categoria
                            </button>
                        </div>
                    </a>
                </div>

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
                
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="d-none d-md-table-cell">ID</th>
                                <th>Nome Completo</th>
                                <th class="text-center">Ações</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
        <!--FIM APRESENTAR CONTEUDO-->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalConfirmaExcluir" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white" id="exampleModalCenterTitle">CONFIRME PARA EXCLUIR</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-undo-alt"></i>
                        CANCELAR</button>
                    <button type="button" class="btn btn-danger" onclick="deleteForm(this, 'listCategorias', 'ctrCategoria')">
                        <i class="far fa-trash-alt"></i> 
                        EXCLUIR
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalView" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 class="modal-title text-white" id="exampleModalCenterTitle">Dados do Administrador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">

                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-primary"><i class="fas fa-check"></i> Ok</button>
                </div>
            </div>
        </div>
    </div>
    <!--Fim conteudo -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/showHidePopUp.js"></script>
    <script src="js/listTables.js"></script>
</body>

</html>
<?php
    include("models/Categoria.php");
    include("models/Jogo.php");
    include("models/Usuario.php");
    include("models/Atividade.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Steam</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php
            $esporte = new Categoria(1, 'Esporte');
            $luta = new Categoria(2, 'luta');
            $corrida = new Categoria(3, 'Corrida');

            $fifa19 = new Jogo(1,"Fifa 19", $esporte);
            $pes19 = new Jogo(2,"Pes 19", $esporte);

            $streetFight = new Jogo(3, "Street Fight V",  $luta);

            $nfsUn = new Jogo(4,"Need For Speed Underground",  $corrida);
            $nfsUn2 = new Jogo(5,"Need For Speed Underground 2",  $corrida);
            $nfs = new Jogo(6,"Need For Speed 2015",  $corrida);
            $nfsPb = new Jogo(7,"Need For Speed Payback",  $corrida);

            $usuarios[] = new Usuario(1, "Vinicius Souza", "viniciussouzav@gmail.com", "123", $foto = "./img/foto1");
            $usuarios[] = new Usuario(2, "Eduardo Oliveira", "eduardo@gmail.com", "123", $foto = "./img/foto2");
            $usuarios[] = new Usuario(3, "Pelé", "pele@gmail.com", "123", $foto = "./img/foto3");

            $usuarios[0]->setJogo($fifa19);
            $usuarios[0]->setJogo($nfsUn);
            $usuarios[0]->setJogo($nfsUn2);
            $usuarios[0]->setJogo($nfs);
            $usuarios[0]->setJogo($nfsPb);

            $usuarios[1]->setJogo($fifa19);
            $usuarios[1]->setJogo($nfsUn);
            
            $atividade = new Atividade();
        ?>

       <header class="jumbotron m-0">
           <h1 class="display-2">Game Controller</h1>
       </header>

       <nav class="navbar navbar-expand-lg navbar-dark bg-dark m-0 mb-5">
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jogos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Atividades</a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div class="container">
            <h2 class="text-center text-dark display-4">Lista de Usuários</h2>
            <table class="table table-striped">
                <thead class="bg-dark text-light">
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Jogos</th>
                </thead>
                <tbody>
                    <?php for($i = 0; $i < sizeof($usuarios) ; $i++) { ?>
                    <tr>
                            <td><?= $usuarios[$i]->getId()?></td>
                            <td><?= $usuarios[$i]->getNome()?></td>
                            <td><?= $usuarios[$i]->getEmail()?></td>
                            <td class="form-group">
                                <select class="form-control">
                                    <?php 
                                        $jogosUsu = $usuarios[$i]->getJogos();
                                        for($j = 0; $j < sizeof($jogosUsu) ; $j++) { 
                                    ?> 
                                        <option value=""><?= $jogosUsu[$j]->getNome()?></option>
                                    <?php } ?>
                                </select>
                            </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
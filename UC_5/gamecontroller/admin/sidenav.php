<!--Inicio Menu -->
<nav class="sidebar bg-color-details rounded-right">
    <ul class="list-unstyled">
        <li><a class="text-white" href="painel.php"><i class="fas fa-home"></i> Home</a></li>

        <li><a class="text-white" href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>

        <li>
            <a class="text-white" href="#subUsuario" data-toggle="collapse">
                <i class="fas fa-users"></i> Usuários
            </a>
            <ul class="list-unstyled collapse" id="subUsuario">
                <li><a class="text-white" href="listUsuarios"><i class="fas fa-list-ol"></i> Listar Usuários</a></li>
                <li><a class="text-white" href="cadUsuario.php"><i class="far fa-plus-square"></i> Novo Usuário</a></li>
            </ul>
        </li>

        <li>
            <a class="text-white" href="#subAdm" data-toggle="collapse">
                <i class="fas fa-users-cog"></i> Administradores
            </a>
            <ul class="list-unstyled collapse" id="subAdm">
                <li><a class="text-white" href="listAdministradores.php"><i class="fas fa-list-ol"></i> Listar Administradores</a></li>
                <li><a class="text-white" href="cadAdministrador.php"><i class="far fa-plus-square"></i> Novo Administrador</a></li>
            </ul>
        </li>

        <li>
            <a class="text-white" href="#subJogos" data-toggle="collapse">
                <i class="fas fa-gamepad"></i> Jogos
            </a>
            <ul class="list-unstyled collapse" id="subJogos">
                <li><a class="text-white" href="listJogos.php"><i class="fas fa-list-ol"></i> Listar Jogos</a></li>
                <li><a class="text-white" href="cadJogo.php"><i class="far fa-plus-square"></i> Novo Jogo</a></li>
            </ul>
        </li>

        <li>
            <a class="text-white" href="#subCategoria" data-toggle="collapse">
                <i class="fas fa-layer-group"></i> Categorias
            </a>
            <ul class="list-unstyled collapse" id="subCategoria">
                <li><a class="text-white" href="listCategorias.php"><i class="fas fa-list-ol"></i> Listar Categorias</a></li>
                <li><a class="text-white" href="cadCategoria.php"><i class="far fa-plus-square"></i> Nova Categoria</a></li>
            </ul>
        </li>

        <li>
            <a class="text-white" href="#jogosUsu" data-toggle="collapse">
                <i class="fas fa-project-diagram"></i> Jogos do Usuário
            </a>
            <ul class="list-unstyled collapse" id="jogosUsu">
                <li><a class="text-white" href="listJogosDoUsuarios.php"><i class="fas fa-list-ol"></i> Listar</a></li>
                <li><a class="text-white" href="cadJogosDoUsuario.php"><i class="far fa-plus-square"></i> Novo Dado</a></li>
            </ul>
        </li>

        <li><a class="text-white" href="#"><i class="fas fa-trophy"></i> Atividades</a></li>

        <li>
            <a class="text-white" href="#submenu2" data-toggle="collapse">
                <i class="fas fa-cogs"></i> Configurações
            </a>
            <ul class="list-unstyled collapse" id="submenu2">
                <li><a class="text-white" href="#"><i class="far fa-envelope"></i> E-mail</a></li>
                <li><a class="text-white" href="#"><i class="fas fa-database"></i> Banco de Dados</a></li>
            </ul>
        </li>

    </ul>
</nav>
<!--Fim menu -->
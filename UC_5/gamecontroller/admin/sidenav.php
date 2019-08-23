<!--Inicio Menu -->
<nav class="sidebar">
    <ul class="list-unstyled">
        <li><a href="painel.php"><i class="fas fa-home"></i> Home</a></li>

        <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>

        <li>
            <a href="#subUsuario" data-toggle="collapse">
                <i class="fas fa-users"></i> Usuários
            </a>
            <ul class="list-unstyled collapse" id="subUsuario">
                <li><a href="listUsuarios"><i class="fas fa-list-ol"></i> Listar Usuários</a></li>
                <li><a href="cadUsuario.php"><i class="far fa-plus-square"></i> Novo Usuário</a></li>
            </ul>
        </li>

        <li>
            <a href="#subAdm" data-toggle="collapse">
                <i class="fas fa-users-cog"></i> Administradores
            </a>
            <ul class="list-unstyled collapse" id="subAdm">
                <li><a href="listAdministradores.php"><i class="fas fa-list-ol"></i> Listar Administradores</a></li>
                <li><a href="cadAdministrador.php"><i class="far fa-plus-square"></i> Novo Administrador</a></li>
            </ul>
        </li>

        <li>
            <a href="#subJogos" data-toggle="collapse">
                <i class="fas fa-gamepad"></i> Jogos
            </a>
            <ul class="list-unstyled collapse" id="subJogos">
                <li><a href="#"><i class="fas fa-list-ol"></i> Listar Jogos</a></li>
                <li><a href="#"><i class="far fa-plus-square"></i> Novo Jogo</a></li>
            </ul>
        </li>

        <li>
            <a href="#subCategoria" data-toggle="collapse">
                <i class="fas fa-layer-group"></i> Categorias
            </a>
            <ul class="list-unstyled collapse" id="subCategoria">
                <li><a href="listCategorias.php"><i class="fas fa-list-ol"></i> Listar Categorias</a></li>
                <li><a href="cadCategoria.php"><i class="far fa-plus-square"></i> Nova Categoria</a></li>
            </ul>
        </li>

        <li><a href="#"><i class="fas fa-project-diagram"></i> Atividades</a></li>
        <li>
            <a href="#submenu2" data-toggle="collapse">
                <i class="fas fa-cogs"></i> Configurações
            </a>
            <ul class="list-unstyled collapse" id="submenu2">
                <li><a href="#"><i class="far fa-envelope"></i> E-mail</a></li>
                <li><a href="#"><i class="fas fa-database"></i> Banco de Dados</a></li>
            </ul>
        </li>

    </ul>
</nav>
<!--Fim menu -->
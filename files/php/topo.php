<div class="navbartopo">
    <div class="navbar-bg" id="navbartopobg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container">
            <a href="index.html" class="navbar-brand"><img src="<?=$raiz?>files/img/logo-branco.png" height="40px"/> </a>
            <form class="form-inline ml-auto">
            </form>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="d-sm-none d-lg-inline-block"><?=$nomeQuebradoUsuarioSessao[0]?></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title">Opções</div>
                        <!--<div class="dropdown-title">Logged in 5 min ago</div>-->
                        <a href="user" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Meus dados
                        </a>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="login.php" class="dropdown-item has-icon">
                            <i class="fas fa-sign-out-alt"></i> Sair
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="navbottom">
<div class="navbar">
    <a href="#perfil" class="active"><span class="mdi mdi-home"></span> Perfil</a>
    <a href="#rancking"><span class="mdi mdi-radar"></span> Ranck</a>
    <a href="#cursos"><span class="mdi mdi-worker"></span>Cursos</a>
</div>
</div>
<style>
    @media (max-width: 1024px) {
        .navbottom .navbar {
            background-color: #fff;
            overflow: hidden;
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 60px;
            margin: 0px;
            left: 0px
        }

        /* Style the links inside the navigation bar */
        .navbottom .navbar a {
            float: left;
            display: block;
            color: #000;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 12px;
        }

        /* Change the color of links on hover */
        .navbottom .navbar a:hover {
            color: blue;
        }

        /* Add a color to the active/current link */
        .navbottom .navbar a.active {
            color: blue;
        }

        .navbartopo{
            display: none;
        }

        .meu-container{
            margin-top: -70px;
        }

        .tituloMovel{
            display: block;
        }
    }

    @media (min-width: 1024px) {
        .tituloMovel{
            display: none;
        }

        .navbottom{
            display: none;
        }
    }

</style>

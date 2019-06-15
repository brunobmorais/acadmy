<div class="navbar-bg" id="navbartopobg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <div class="container">
        <a href="index.html" class="navbar-brand"><?= $variavel->_NOMEINSTITUICAO ?></a>
        <form class="form-inline ml-auto">
        </form>
        <ul class="navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <div class="d-sm-none d-lg-inline-block">Fulano</div>
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
<div class="navbottom">
<div class="navbar">
    <a href="#home" class="active">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
</div>
</div>
<style>
    .navbottom .navbar {
        background-color: #fff;
        overflow: hidden;
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 60px;
        margin: 0px;
    }

    /* Style the links inside the navigation bar */
    .navbottom .navbar a {
        float: left;
        display: block;
        color: #000;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    /* Change the color of links on hover */
    .navbottom .navbar a:hover {
        background-color: #000;
        color: #fff;
    }

    /* Add a color to the active/current link */
    .navbottom .navbar a.active {
        color: blue;
    }
</style>

<?
$currentpage = $_SERVER['REQUEST_URI'];

if (strpos($currentpage, "index.php") || strpos($currentpage, "/instituicao.php")) {
    $perfilactive = "active";
} else if (strpos($currentpage, "rank") || strpos($currentpage, "rankinstituicao.php")) {
    $rankactive = "active";
} else if (strpos($currentpage, "cursos") || strpos($currentpage, "cursosinstituicao.php")) {
    $cursosactive = "active";
} else if (strpos($currentpage, "meuEstudo")) {
    $meuestudoactive = "active";
}
?>


<div class="navbartopo">
    <div class="navbar-bg" id="navbartopobg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
        <div class="container">
            <a href="<?= $tipoUsuarioSessao == "Aluno" ? 'index.php#perfil' : 'instituicao.php' ?>"
               class="navbar-brand"><img src="<?= $raiz ?>files/img/logo-branco.png" height="40px"/> </a>
            <form class="form-inline ml-auto">
            </form>
            <ul class="navbar-nav navbar-right">
                <a href="<?= $tipoUsuarioSessao == "Aluno" ? 'index.php#perfil' : 'instituicao.php' ?>"
                   class="nav-link nav-link-lg nav-link-user">
                    <div class="d-sm-none d-lg-inline-block">Perfil</div>
                </a>
                <a href="<?= $tipoUsuarioSessao == "Aluno" ? 'rank.php#rank' : 'rankinstituicao.php#cursos' ?>"
                   class="nav-link nav-link-lg nav-link-user">
                    <div class="d-sm-none d-lg-inline-block">Rank</div>
                </a>
                <a href="<?= $tipoUsuarioSessao == "Aluno" ? 'cursos.php#cursos' : 'cursosinstituicao.php#cursos' ?>"
                   class="nav-link nav-link-lg nav-link-user">
                    <div class="d-sm-none d-lg-inline-block">Cursos</div>
                </a>
                <? if ($tipoUsuarioSessao == "Aluno") { ?>
                    <a href="meuEstudo.php" class="nav-link nav-link-lg nav-link-user">
                        <div class="d-sm-none d-lg-inline-block">Estudo</div>
                    </a>
                <? } ?>
                <li class="dropdown">

                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="d-sm-none d-lg-inline-block"><?= $nomeQuebradoUsuarioSessao[0] ?></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title">Opções</div>
                        <!--<div class="dropdown-title">Logged in 5 min ago</div>-->

                        <? if ($tipoUsuarioSessao == "Aluno") { ?>
                            <a href="#" data-toggle="modal" data-target="#modalEdicaoPerfil"
                               class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Meus dados
                            </a><? } else { ?>
                            <a href="#" data-toggle="modal" data-target="#modalEdicaoInstituicao"
                               class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Meus dados
                            </a><? } ?>
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
        <? if ($tipoUsuarioSessao == "Aluno") { ?>
            <a href="meuEstudo.php" class="<?= $meuestudoactive ?>"><span class="mdi  mdi-18px mdi-book"></span> Estudo</a>
        <? } else { ?>
            <a href="<?= $tipoUsuarioSessao == "Aluno" ? 'index.php#perfil' : 'instituicao.php' ?>"
               class="<?= $perfilactive ?>"><span class="mdi mdi-18px mdi-home"></span> Perfil</a>
        <? } ?>
        <a href="<?= $tipoUsuarioSessao == "Aluno" ? 'rank.php#rank' : 'rankinstituicao.php#cursos' ?>"
           class="<?= $rankactive ?>"><span class="mdi  mdi-18px mdi-trophy"></span> Rank</a>
        <a href="<?= $tipoUsuarioSessao == "Aluno" ? 'cursos.php#cursos' : 'cursosinstituicao.php#cursos' ?>"
           class="<?= $cursosactive ?>"><span class="mdi  mdi-18px mdi-school"></span> Cursos</a>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalEdicaoPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Dados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Curso pretendido</label>
                    <select class="form-control">
                        <option>Direito</option>
                        <option>Economia</option>
                        <option>Matemática</option>
                        <option>Administração</option>
                        <option>Sistemas</option>
                        <option>Medicina</option>
                        <option>Engenharia</option>
                        <option>Farmácia</option>
                        <option>Contábeis</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Cidade</label>
                    <select class="form-control">
                        <option>Todas do TO</option>
                        <option>Palmas</option>
                        <option>Porto Nacional</option>
                        <option>Paraíso</option>
                        <option>Gurupí</option>
                        <option>Araguaína</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Turno Preferencial</label>
                    <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="50" class="selectgroup-input" checked="">
                            <span class="selectgroup-button">Matutino</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="100" class="selectgroup-input">
                            <span class="selectgroup-button">Noturno</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" name="value" value="150" class="selectgroup-input">
                            <span class="selectgroup-button">Indiferente</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalEdicaoInstituicao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Dados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nome da Instituição</label>
                    <input type="text" class="form-control" value="Faculdade Serra do Carmo">
                </div>

                <div class="form-group">
                    <label>Sigla</label>
                    <input type="text" class="form-control" value="FASEC">
                </div>

                <div class="form-group">
                    <label>Endereço</label>
                    <input type="text" class="form-control"
                           value="Rua 103 Norte R Pedestre 3 26, Palmas - TO, 77001-018">
                </div>
                <div class="form-group">
                    <label>Cidade</label>
                    <select class="form-control">
                        <option>Todas do TO</option>
                        <option selected>Palmas</option>
                        <option>Porto Nacional</option>
                        <option>Paraíso</option>
                        <option>Gurupí</option>
                        <option>Araguaína</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
            </div>
        </div>
    </div>
</div>


<style>
    @media (max-width: 1024px) {
        .profile-widget {
            margin-top: 0px;
        }

        .navbottom .navbar {
            background-color: #fff;
            overflow: hidden;
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 60px;
            margin: 0px;
            left: 0px;
            -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .12), 0 1px 5px 0 rgba(0, 0, 0, .2);
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, .14), 0 3px 1px -2px rgba(0, 0, 0, .12), 0 1px 5px 0 rgba(0, 0, 0, .2);
        }

        /* Style the links inside the navigation bar */
        .navbottom .navbar a {
            float: left;
            display: block;
            color: #757575;
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
            font-weight: 700;

        }

        .navbartopo {
            display: none;
        }

        .meu-container {
            margin-top: -70px;
        }

        .tituloMovel {
            display: block;
        }
    }

    @media (min-width: 1024px) {
        .tituloMovel {
            display: none;
        }

        .navbottom {
            display: none;
        }
    }

</style>

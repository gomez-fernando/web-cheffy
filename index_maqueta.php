<?php
session_start();
require_once 'autoload.php';
require_once 'config/db.php';
require_once 'config/parameters.php';
require_once 'helpers/utils.php';

function show_error(){
  $error = new errorController();
  $error->index();
}
?>
<!doctype html>
<html lang="es">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url; ?>assets/css/styles.css">
    <link rel="shortout icon" type="image/ico" href="<?= base_url; ?>favicon.ico">

    <title>Home page</title>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="74">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Header -->
    <!-- Image and text -->
    <!-- Image and text -->
    <nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand title font-italic" href="<?= base_url; ?>index.php">


                <img class="mr-5" src="assets/img/logo.jpg" alt="cuadro y mesa">
                Cheffy
            </a>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <div class="dropdown show">
                        <a class=" nav-link dropdown-toggle color_nav_link_item" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b>Servicios</b>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                                <a class="dropdown-item" href="">Categoría</a>
                                <a class="dropdown-item" href="">Categoría</a>
                                <a class="dropdown-item" href="">Categoría</a>
                                <a class="dropdown-item" href="">Categoría</a>


                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /Header -->

    <div class="" id="content">


        <!-- ASIDE -->
        <aside id="lateral">

            <div id="carrito" class="block_aside">
                <div class="alert alert-success text-align-center" role="alert">
                    Mi carrito
                </div>

                <div class="list-group">

                    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-secondary">
                        <a href="<?= base_url; ?>carrito/index">Productos </a>
                        <a href="<?= base_url; ?>carrito/index"><span class="badge badge-primary badge-pill">productos</span></a>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-secondary">
                        <a href="<?= base_url; ?>carrito/index">Total </a>
                        <a href="<?= base_url; ?>carrito/index"><span class="badge badge-primary badge-pill"> €</span></a>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center list-group-item-action list-group-item-secondary">
                        <a href="<?= base_url; ?>carrito/index">Ver el carrito</a>
                        <a href="<?= base_url; ?>carrito/index"><span class="badge badge-primary badge-pill">></span></a>
                    </li>
                </div>
                <hr>
            </div>

            <div id="login" class="block_aside">

                <?php if (!isset($_SESSION['identity'])) : ?>
                    <div class="alert alert-success text-align-center" role="alert">
                        Iniciar Sesión
                    </div>

                    <div id='' class='row'>
                        <div id='' class='col-lg-12 '>
                            <form action="usuario/login" method="post" name="form-login">

                                <div class="form-group">
                                    <label for="email"></label>
                                    <input type="email" class="form-control form-control-sm" placeholder="Email" id="" name="email" aria-describedby="emailHelp" required>
                                </div>

                                <div class="form-group">
                                    <label for="password"></label>
                                    <input type="password" class="form-control form-control-sm" placeholder="Contraseña" id="" name="password" required>
                                    <button type="submit" class="btn btn-primary btn-sm btn-block btn-white-letters">Entrar</button>
                                </div>

                            </form>
                        </div>
                    </div>

                <?php else : ?>
                    <div class="alert alert-success text-align-center" role="alert">
                        <?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?>
                    </div>
                <?php endif; ?>

                <ul>
                    <?php if (isset($_SESSION['admin'])) : ?>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="<?= base_url; ?>categoria/index">Gestionar categorias</a></li>
                            <li class="list-group-item"><a href="<?= base_url; ?>producto/gestion">Gestionar productos</a></li>
                            <li class="list-group-item"><a href="<?= base_url; ?>pedido/gestion">Gestionar pedidos</a></li>
                            <li class="list-group-item"><a href="<?= base_url; ?>pedido/mis_pedidos">Mis pedidos</a></li>
                            <li class="list-group-item"><a href="<?= base_url; ?>usuario/logout">Cerrar sesión</a></li>
                        </ul>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['identity']) && !isset($_SESSION['admin'])) : ?>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="<?= base_url; ?>pedido/mis_pedidos">Mis pedidos</a></li>
                            <li class="list-group-item"><a href="<?= base_url; ?>usuario/logout">Cerrar sesión</a></li>
                        </ul>
                    <?php elseif (!isset($_SESSION['identity'])) : ?>
                        <a href="<?= base_url; ?>usuario/registro" class="btn btn-success btn-block btn-sm btn-white-letters">Registrate aqui</a>
                    <?php endif; ?>
                </ul>
            </div>

        </aside>

        <!-- CONTENIDO CENTRAL -->
        <div id="central">

            <h1>Algunos de nuestros productos</h1>

            <div class="product">
                <img src="assets/img/angel.jpg" alt="producto">
                <h2>Camiseta azul ajustada</h2>
                <p>30 €</p>
                <a href="#">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/angel.jpg" alt="producto">
                <h2>Camiseta azul ajustada</h2>
                <p>30 €</p>
                <a href="#">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/angel.jpg" alt="producto">
                <h2>Camiseta azul ajustada</h2>
                <p>30 €</p>
                <a href="#">Comprar</a>
            </div>
            <div class="product">
                <img src="assets/img/angel.jpg" alt="producto">
                <h2>Camiseta azul ajustada</h2>
                <p>30 €</p>
                <a href="#">Comprar</a>
            </div>

        </div>
    </div>

    <!-- /Main -->

    <!-- Footer -->
    <footer id="footer" class="pb-5 pt-4">
        <div class="">
            <div class="row pt-4 ">
                <div class="col">
                    <p class="designed-by">Developed by: Fernando Gómez WEB &copy; 2019 <br>fgomezor@fp.uoc.edu</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
<!-- JOp^QiKXPNF@XxLLUyAw -->
<!-- index.php?controller=hojaDiaria&action=initSessionVars -->

</html>

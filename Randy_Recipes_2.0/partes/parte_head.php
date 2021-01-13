<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?></title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Materialize -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- Style.css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Icono de Página Principal -->
    <link rel="shortcut icon" href="images/randylogo.png" type="image/x-icon">

    <!--FontAwesome y su CDN-->
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="<?php echo $fondo ?>">

<!-- Menú Superior -->
<div class="container-fluid fondo">

    <nav class="nav-wrapper">

        <div class="row">

            <!-- Logo y Nombre de la Empresa -->
            <div class="col-sm-7">
                <a href="index.html" class="brand-logo left lead">
                    <img class="responsive-img randylogo" src="images/randylogo.png" alt="Randy Logo">
                    <span class="bigtext">Randy's Recipes</span>
                </a>
            </div>

            <!-- Icono de Menú y Enlaces para Iniciar Sesión y Registrarse -->
            <div class="col-sm-5">

                <!-- Icono -->
                <a href="#" data-target="menu-responsive" class="sidenav-trigger right">
                    <i class="material-icons section">menu</i>
                </a>

                <!-- Enlaces para Iniciar Sesión y Registrarse -->
                <ul class="right hide-on-med-and-down section naranja">
                    <li><a href="#" class="bigtext"><i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar Sesión</a></li>
                    <li><a href="#" class="bigtext"><i class="fa fa-user-plus" aria-hidden="true"></i> Registrarse</a></li>
                </ul>

            </div>

        </div>

    </nav>

</div><!-- Fin del Menú Superior -->

<!-- Este es el Sidenav -->
<ul class="sidenav" id="menu-responsive">

    <!-- Fondo del Perfil con Informacion -->
    <li>

        <div class="user-view">

            <div class="background">
                <img src="images/winter.jpg" alt="imagen-fondo">
            </div>

            <a href="#">
                <img src="images/marshmello.jpg" alt="foto-perfil" class="circle">
            </a>

            <a href="#">
                <span class="name white-text">Randy Martínez</span>
            </a>

            <a href="#">
                <span class="email white-text">randym0624@gmail.com</span>
            </a>

        </div>

    </li>

    <!-- Iniciar Sesión del Sidenav-->
    <li>
        <a href="#">
            <i class="fa fa-sign-in" aria-hidden="true"></i>
            Iniciar Sesión
        </a>
    </li>

    <!-- Linea Divisora del Sidenav-->
    <li>
        <div class="divider"></div>
    </li>

    <!-- Registrarse del Sidenav-->
    <li>
        <a href="#">
            <i class="fa fa-user-plus" aria-hidden="true"></i>
            Registrarse
        </a>
    </li>

</ul><!-- Fin del Sidenav -->

<!-- Menú Inferior -->
<div class="grey center">

    <div class="row">

        <div class="col-sm-12 col-md section btn-large grey">
            <a href="index.php" class="blanco nav-link"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
        </div>

        <div class="col-sm-12 col-md section btn-large grey">
            <a href="sobre_nosotros.php" class="blanco nav-link"><i class="fa fa-users" aria-hidden="true"></i> Sobre Nosotros</a>
        </div>

        <div class="col-sm-12 col-md section btn-large grey">
            <a href="#" class="blanco nav-link"><i class="fa fa-cutlery" aria-hidden="true"></i> Recetas</a>
        </div>

        <div class="col-sm-12 col-md section btn-large grey">
            <a href="#" class="blanco nav-link"><i class="fa fa-picture-o" aria-hidden="true"></i> Galería</a>
        </div>

        <div class="col-sm-12 col-md section btn-large grey">
            <a href="#" class="blanco nav-link"><i class="fa fa-phone" aria-hidden="true"></i> Contactanos</a>
        </div>

    </div>

</div><!-- Fin del Menú Inferior -->
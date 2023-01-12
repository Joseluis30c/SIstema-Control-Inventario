<?php 
//para trear nombre del usuario
  session_start();
  if (empty($_SESSION['active'])) {
    header('location:../index.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../Assets/imagenes/logo.png">
  <title>
    Gucci
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../Assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../Assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../Assets/css/material-dashboard.css?v=3.0.2" rel="stylesheet" />
  
  <style>
      #links:hover{
        background-color: #8f1010;
        background: #8f1010;
      }
  </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside  class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="index.php">
        <img src="../Assets/imagenes/logo2.png" class="navbar-brand-img h-100">
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a id="links" class="nav-link text-white" href="../Admin/index.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a id="links" class="nav-link text-white " href="../Admin/usuarios.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">engineering</i>
            </div>
            <span class="nav-link-text ms-1">Usuarios</span>
          </a>
        </li>
        <li class="nav-item">
          <a id="links" class="nav-link text-white " href="../Admin/productos.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">checkroom</i>
            </div>
            <span class="nav-link-text ms-1">Productos</span>
          </a>
        </li>
        <li class="nav-item">
          <a id="links" class="nav-link text-white " href="../Admin/compras.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add_shopping_cart</i>
            </div>
            <span class="nav-link-text ms-1">Compras</span>
          </a>
        </li>
        <li class="nav-item">
          <a id="links" class="nav-link text-white " href="../Admin/categorias.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">settings_accessibility</i>
            </div>
            <span class="nav-link-text ms-1">Categorías</span>
          </a>
        </li>
        <li class="nav-item">
          <a id="links" class="nav-link text-white " href="../Admin/clientes.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">group</i>
            </div>
            <span class="nav-link-text ms-1">Clientes</span>
          </a>
        </li>
        <li class="nav-item">
          <a id="links" class="nav-link text-white " href="../Admin/carrito.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add_circle_outline</i>
            </div>
            <span class="nav-link-text ms-1">Nueva Venta</span>
          </a>
        </li>
        <li class="nav-item">
          <a id="links" class="nav-link text-white " href="../Admin/ventas.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">shopping_bag</i>
            </div>
            <span class="nav-link-text ms-1">Ventas</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="../salir.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-sign-out me-sm-1"></i>
                <span class="d-sm-inline d-none">Cerrar Sesion</span>
              </a>
            </li>
            
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="#" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  <!-- End Navbar -->


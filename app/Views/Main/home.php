<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ark Book | Home</title>

  <base href="<?php echo base_url('Adminlte') ?>/">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__spin" src="/template-main/images/PT.ARKAMAYA-CLEAN.png" alt="AdminLTELogo" height="100" width="100">
      <div class="reload-text">
        <h1>
          ARK
          <span>
            BOOK
          </span>
        </h1>
      </div>
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-dark" style="background-color: #1c1c1c;">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link"><?= $_SESSION['sesusername']; ?></a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link btn border-settings">
            <i class="fas fa-gear fa-lg"></i> SETTINGS
          </a>
        </li>
      </ul>




    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #1c1c1c;">
      <!-- SidebarSearch Form -->
      <div class="brand-link">
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <center>
              <button class="btn mx-auto">
                <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #ffffff;"></i>
              </button>
            </center>
          </div>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="/home" class="nav-link">
                <i class="fa-solid fa-user px-2" style="color: #ffffff;"></i>
                <p>
                  <?= $_SESSION['sesusername']; ?>
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item ">
              <a href="/home-tes" class="nav-link">

                <p>
                  New Untitled Collection
                  <i class="right fas fa-arrow-down"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <ul>
                  <li class="nav-item">
                    <a href=" <?= site_url('/home/page') ?>" class="nav-link">
                      <i class="far fa-solid fa-file fa-circle nav-icon"></i>
                      <p>Example Document</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= site_url('/home/page') ?>" class="nav-link">
                      <i class="far fa-solid fa-file nav-icon"></i>
                      <p>Example Document</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href=" <?= site_url('/home/page') ?>" class="nav-link">
                      <i class="far fa-solid fa-file fa-circle nav-icon"></i>
                      <p>Example Document</p>
                    </a>
                  </li>
                </ul>
              </ul>

            <li class="nav-item">
              <a href=" <?= site_url('/home/page') ?>" class="nav-link">
                <i class="far fa-solid fa-file fa-circle nav-icon"></i>
                <p>Untitle</p>
              </a>
            </li>

            </li>
          </ul>

          <div class="row align-items-center bottom-nav">

            <div class="col">
              <a data-toggle="dropdown" href="#">
                <i class="far fa-bell fa-lg"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a class="dropdown-item">
                  <span>Massage</span>
                  <div class="dropdown-divider"></div>
                </a> <!-- Close the first dropdown item anchor tag -->

                <!-- Add text-white class to change the text color to white -->
                <div class="dropdown-item text-white" style="padding-left: 20px;"></div>
                <div class="dropdown-item text-white" style="padding-left: 20px;"></div>
                <div class="dropdown-item text-white" style="padding-left: 20px;"></div>
              </div>
            </div>

            <div class="col">
              <a data-toggle="dropdown" href="#">
                <i class="fa-solid fa-square-plus fa-2xl"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="/home" class="dropdown-item">
                  <i class="far fa-solid fa-file fa-circle nav-icon"></i>
                  <span>NEW SPACE</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="/home" class="dropdown-item">
                  <i class="far fa-solid fa-file fa-circle nav-icon"></i>
                  <span>NEW COLLECTION</span>
                </a>
                <div class="dropdown-divider"></div>
              </div>
            </div>

            <div class="col" style="position: relative;">
              <a data-toggle="dropdown" href="">
                <i class="fas fa-gear fa-lg"></i>
              </a>
              <div class="dropdown-menu  dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">Settings</span>
                <div class="dropdown-divider"></div>

                <a href="/home/page" class="dropdown-item">
                  <i class="far fa-user px-2 nav-icon"></i> 
                  <span>User settings</span>
                </a>
                <div class="dropdown-divider"></div>

                <a href="/home/page" class="dropdown-item">
                  <i class="far fa-user px-2 nav-icon"></i>
                  <span>General settings</span>
                </a>
                <div class="dropdown-divider"></div>

                <form method="post" action="<?= site_url('/logout') ?>" class="align-items-center px-3">
                  <button type="submit" class="btn btn-link text-dark px-2 w-100" id="logout-button">
                    <p><i class="fas fa-sign-out-alt me-2"></i>Logout</p>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </aside>

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper w-75">
    <h1><i class="fa-solid fa-user fa-xl"></i> TEAM LIBRARY</h1>
    <span><?= $_SESSION['sesusername']; ?></span>
    <hr class="custom-divider">
</div>

   
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="dist/js/pages/dashboard.js"></script> -->
</body>

</html>
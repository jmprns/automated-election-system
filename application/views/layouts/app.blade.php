<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Voting System | @yield('html-title')</title>

  @yield('css-top')

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset_url()}}plugins/font-awesome/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset_url()}}css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  @yield('css-bot')
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="{{base_url()}}election" class="navbar-brand">
       
        <span class="brand-text font-weight-light">Automated Election System</span>
      </a>
      
    
      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-th-large"></i> Log out</a>
        </li>
      </ul>

    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> @yield('page-title') </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            @yield('page-button')
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   

    <!-- Main content -->
    <div class="content">
      <div class="container">
        @section('content')
        @show
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Developed By: JMPRNS
    </div>
    <!-- Default to the left -->
    Automated Election System
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset_url()}}plugins/jquery/jquery.min.js"></script>

@yield('js-top')

<!-- Bootstrap 4 -->
<script src="{{asset_url()}}plugins/bootstrap/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset_url()}}js/adminlte.min.js"></script>

@yield('js-bot')


</body>
</html>

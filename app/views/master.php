<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Controle de estoque</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link href="/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-green navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" style="color:white;" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->

        <!-- Messages Dropdown Menu -->
        <!-- Notifications Dropdown Menu -->
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-primary elevation-4" style="background-color: white;">

      <!-- Brand Logo -->
      <div style="border-bottom:1px solid #cccc;text-align: center;font-size: 24px;margin-top: 18px;">

        <span class="brand-text">CDU</span>
      </div>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
              <a href="/" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Início
                </p>
              </a>
            </li>
            <li class="nav-item menu-open">
              <a href="/contact" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                  Usuários
                </p>
              </a>
            </li>
            <li class="nav-item menu-open">
              <a href="/pdf" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                  Gerar PDF
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
            </div><!-- /.col -->
            <div class="col-sm-6">
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card shadow" style=" padding: 20px;min-height: 700px;">
            <?= $this->section("content") ?>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      Sistema de controle de estoque para revendedores
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <script src="/js/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <!-- Bootstrap 4 -->
  <script src="/js/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/js/adminlte.min.js"></script>
</body>

</html>
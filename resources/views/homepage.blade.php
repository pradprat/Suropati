<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Network Quality Services</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/css/font-awesome/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/css/adminlte.min.css') }}">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-danger elevation-4 position-fixed">
    <!-- Brand Logo -->
    <a href="{{ url('homepage') }}" class="brand-link">
      <span class="brand-text font-weight-light">Network Quality Services</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href=# class="nav-link">
              <i class="nav-icon"></i>
              <p>Ookla
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- Area -->
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon invisible"></i>
                  <p>Area</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('ookla_area_monthly_3g') }}" class="nav-link">
                            <i class="far fa-circle nav-icon invisible" style="font-size: 6px;"></i>
                            <p>3G</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('ookla_area_monthly_4g') }}" class="nav-link">
                            <i class="far fa-circle nav-icon invisible" style="font-size: 6px;"></i>
                            <p>4G</p>
                        </a>
                    </li>
                </ul>
              </li>
              <!-- National -->
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon invisible"></i>
                  <p>National</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('ookla_national_monthly_3g') }}" class="nav-link">
                            <i class="far fa-circle nav-icon invisible" style="font-size: 6px;"></i>
                            <p>3G</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('ookla_national_monthly_4g') }}" class="nav-link">
                            <i class="far fa-circle nav-icon invisible" style="font-size: 6px;"></i>
                            <p>4G</p>
                        </a>
                    </li>
                </ul>
              </li>
              <!-- Region -->
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon invisible"></i>
                  <p>Region</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ url('ookla_region_monthly_3g') }}" class="nav-link">
                            <i class="far fa-circle nav-icon invisible" style="font-size: 6px;"></i>
                            <p>3G</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('ookla_region_monthly_4g') }}" class="nav-link">
                            <i class="far fa-circle nav-icon invisible" style="font-size: 6px;"></i>
                            <p>4G</p>
                        </a>
                    </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <p>Opensignal
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <!-- Area -->
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon invisible"></i>
                  <p>Area</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('opensignal_area_monthly_3g') }}" class="nav-link">
                      <i class="fa fa-circle nav-icon invisible" style="font-size: 10px;"></i>
                      <p>3G</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('opensignal_area_monthly_4g') }}" class="nav-link">
                      <i class="fa fa-circle nav-icon invisible" style="font-size: 10px;"></i>
                      <p>4G</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- National -->
              <li class="nav-item has-treeview">
                <a href="{{ url('opensignal_national_monthly_3g') }}" class="nav-link">
                  <i class="far fa-circle nav-icon invisible"></i>
                  <p>National</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('opensignal_national_monthly_4g') }}" class="nav-link">
                      <i class="fa fa-circle nav-icon invisible" style="font-size: 10px;"></i>
                      <p>3G</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fa fa-circle nav-icon invisible" style="font-size: 10px;"></i>
                      <p>4G</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- Region -->
              <li class="nav-item has-treeview">
                <a href="{{ url('opensignal_region_monthly_3g') }}" class="nav-link">
                  <i class="far fa-circle nav-icon invisible"></i>
                  <p>Region</p>
                  <i class="fas fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('opensignal_region_monthly_4g') }}" class="nav-link">
                      <i class="fa fa-circle nav-icon invisible" style="font-size: 10px;"></i>
                      <p>3G</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="fa fa-circle nav-icon invisible" style="font-size: 10px;"></i>
                      <p>4G</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
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
          <div class="col-sm-12">
            <h1 class="m-0 text-dark text-center">Welcome to Network Quality Services Dashboard</h1>
            <h1 class="m-0 text-dark text-center invisible">----------------------------------------------------------</h1>
            <h5 class="m-0 text-dark text-center">This dashbord to view Speedtest Ookla and Opensignal data in the Chart</h5>
            <h5 class="m-0 text-dark text-center">Select the menu from list in sidebar </h5>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script type="text/javascript" src="{{ asset('/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script type="text/javascript" src="{{ asset('/js/Chart.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/demo.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/dashboard3.js') }}"></script>
</body>
</html>

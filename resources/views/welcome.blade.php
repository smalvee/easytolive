<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KGD Property</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="../index3.html" class="navbar-brand">
                    <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">KGD Property</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index3.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="#" class="dropdown-item">Some action </a></li>
                                <li><a href="#" class="dropdown-item">Some other action</a></li>

                                <li class="dropdown-divider"></li>

                                <!-- Level two dropdown-->
                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                        <li>
                                            <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                                        </li>

                                        <!-- Level three dropdown-->
                                        <li class="dropdown-submenu">
                                            <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                                            <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                                                <li><a href="#" class="dropdown-item">3rd level</a></li>
                                                <li><a href="#" class="dropdown-item">3rd level</a></li>
                                            </ul>
                                        </li>
                                        <!-- End Level three -->

                                        <li><a href="#" class="dropdown-item">level 2</a></li>
                                        <li><a href="#" class="dropdown-item">level 2</a></li>
                                    </ul>
                                </li>
                                <!-- End Level two -->
                            </ul>
                        </li>
                    </ul>

                    <!-- SEARCH FORM -->
                    <form class="form-inline ml-0 ml-md-3">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <div>
                        @if (Route::has('login'))
                        <div class="nav-link">
                            @auth
                            <a href="{{ url('/dashboard') }}" class="" style="color:#6C757D; font-size:1rem">Dashboard</a>
                            @else
                            <a href="{{ route('login') }}" class="text" style="color:#6C757D; font-size:1rem">Log in</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text" style="color:#6C757D; font-size:1rem">Register</a>
                            @endif
                            @endauth
                        </div>
                        @endif
                    </div>


                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <br>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="card card-solid">
                    <div class="card-body pb-0">
                        <div class="row">
                            <?php

                            use App\Models\AccountDetails;
                            use App\Models\Createlisting;

                            $check = null;
                            $property_list = Createlisting::where('status', "Approved")->get();
                            ?>


                            @foreach ($property_list as $item)
                            
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                <div class="card bg-light d-flex flex-fill">
                                    <div class="card-header text-muted border-bottom-0">
                                        {{$item->estate}}
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>{{$item->property_type}}</b></h2>
                                                <p class="text-muted text-sm">
                                                    <b>About: </b> {{$item->listing_type}} / SGD {{$item->price}} / {{$item->floor_size}} sqf /
                                                    {{$item->property_name}}
                                                </p>
                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                    <li class="small">
                                                        <span class="fa-li"><i class="fas fa-lg fa-building"></i></span>
                                                        Address: {{$item->district}}<br>{{$item->address}} - {{$item->postal_code}}
                                                    </li>
                                                    <li class="small">
                                                        <span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>
                                                        <?php
                                                        $get_number = AccountDetails::where('main_id', $item->user_id)->get();
                                                        ?>

                                                        @foreach ($get_number as $number)
                                                        Phone: {{$number->country_code}} {{$number->mobile_number}}
                                                        @endforeach
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="../../dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a href="#" class="btn btn-sm btn-primary">
                                                </i> View Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach





                        </div>
                    </div>
                    <!-- /.card-body -->

                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>


</body>

</html>
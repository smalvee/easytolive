<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Owner Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        <!--Start Side Menue -->
        @include('owner.sidemenue')
        <!--End Side Menue -->



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Owner Property</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <h5 class="mb-2">Card with Image Overlay</h5>

                    <?php

                    use App\Models\AccountDetails;
                    use App\Models\Createlisting;

                    $check = null;

                    $idt = Auth::user()->id;
                    $owner_property_list = Createlisting::where('user_id', $idt)->get();
                    ?>



                    @foreach ($owner_property_list as $item)
                    <!-- Main content -->
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Box Comment -->
                            <div class="card card-widget">
                                <div class="card-header">
                                    <div class="user-block">
                                        <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                                        <span class="username">
                                            <h4>{{ $item->estate }}</h4>
                                        </span>
                                        <span class="description"><strong>{{$item->listing_type}} | SGD {{$item->price}}</strong></span>
                                        <!-- <span class="description">{{ $item->comm_structure }} | <strong>{{ $item->comm_percentage}}% comm</strong></span> -->
                                    </div>
                                    <!-- /.user-block -->
                                    <div class="card-tools">
                                        <!-- <button type="button" class="btn btn-tool" title="Mark as read">
                                            <i class="far fa-circle"></i>
                                        </button> -->
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button> -->
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <img class="img-fluid pad" src="../dist/img/photo2.png" alt="Photo">

                                    <p>{{ $item->description}}</p>


                                    <div class="card-footer card-comments">
                                        <div class="card-comment">
                                            <!-- User image -->
                                            

                                           
                                                <span class="username">
                                                    ID: {{$item->id}} | {{$item->property_type}} | {{$item->floor_size}} sqft
                                                    <span class="text-muted float-right">published Date</span>
                                                </span><!-- /.username -->
                                                <h6>{{ $item->comm_structure }} | <strong>{{ $item->comm_percentage}}% comm</strong> </h6>
                                            
                                            <!-- /.comment-text -->
                                        </div>
                                        
                                    </div>


                                    <div class="float-right text-muted">
                                        <a><button type="button" class="btn btn-success">Details</button></a>
                                        <a><button type="button" class="btn btn-info">Edit</button></a>
                                        <a><button type="button" class="btn btn-danger">Delet</button></a>
                                    </div>


                                    <!-- <span class="float-right text-muted">127 likes - 3 comments</span> -->
                                </div>
                                <!-- /.card-body -->



                                <!-- /.card-footer -->

                                <!-- /.card-footer -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->







                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    <!-- /.content -->
                    @endforeach

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->





        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>

</body>

</html>
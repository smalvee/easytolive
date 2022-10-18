<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>

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
        @include('admin.sidemenue')
        <!--End Side Menue -->



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Admin Profile</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->



            <?php

            use App\Models\AccountDetails;

            $check = null;

            $idt = Auth::user()->id;

            $account_history = AccountDetails::where('main_id', $idt)->get();
            ?>

            @foreach ($account_history as $item)
            <?php $check = $item->main_id; ?>
            @endforeach


            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <?php
                                        if ($check == NULL) { ?>
                                            <p style="color:red ;">! Please Active the profile first</p>
                                        <?php }
                                        ?>
                                        @foreach ($account_history as $item)
                                        <img class="profile-user-img img-fluid img-circle" src="../uploads/profile/{{ $item->profile_picture }}" alt="User profile picture">
                                        
                                    </div>

                                    <h3 class="profile-username text-center">{{$item->title}} {{$item->first_name}} {{$item->last_name}}</h3>

                                    <p class="text-muted text-center">Software Engineer</p>
                                    @endforeach
                                    <form action="{{ url('account') }}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" value="{{ Auth::user()->id }}" name="main_id">

                                        <?php
                                        if ($check == NULL) { ?>
                                            <button class="form-control" type="submit" style="background-color:red; color:aliceblue;">Active Profile</button>
                                        <?php }
                                        ?>
                                    </form>



                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">About Me</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fas fa-user"></i> Family</strong>

                                    <p class="text-muted">
                                        
                                    </p>

                                    <hr>

                                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                                    <p class="text-muted">Dhaka, Bangladesh</p>

                                    <hr>

                                    <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                                    <p class="text-muted"></p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Account Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Profile Photo</a></li>

                                        <?php
                                        if ($check != NULL) { ?>

                                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit Profile</a></li>
                                        <?php } else { ?>
                                            <li class="nav-item"><a class="nav-link" data-toggle="tab">Enable Edit</a></li>
                                        <?php }
                                        ?>












                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="active tab-pane" id="activity">
                                            <!-- Post -->
                                            <div class="post">
                                                <div>
                                                    <div>Login Information</div>
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Login ID</label>
                                                            <input type="" class="form-control" value="{{ Auth::user()->email }}" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- /.post -->
                                            @foreach ($account_history as $item)
                                            <div class="post">
                                                <div>
                                                    <div>Personal Information</div>
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Title</label>
                                                            <input type="" class="form-control" value="{{ $item->title }}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">First Name</label>
                                                            <input type="" class="form-control" value="{{ $item->first_name }}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Last Name</label>
                                                            <input type="" class="form-control" value="{{ $item->last_name }}" readonly>
                                                        </div>



                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post -->

                                            <!-- /.post -->
                                            <div class="post">
                                                <div>
                                                    <div>Contact Information</div>
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email Address</label>
                                                            <input type="" class="form-control" value="{{ Auth::user()->email }}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Country Code Number</label>
                                                            <input type="" class="form-control" value="{{ $item->country_code }}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Mobile Phone Number</label>
                                                            <input type="" class="form-control" value="{{ $item->mobile_number }}" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Alternative Phone Number</label>
                                                            <input type="" class="form-control" value="{{ $item->alt_number }}" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post -->


                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="timeline">
                                            <!-- The timeline -->


                                            <!-- timeline item -->
                                            <form action="{{ url('account_photo_update') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="main_id" value="{{ $item->main_id }}">
                                                <div class="card-body">

                                                    <div class="form-group">
                                                        <label for="exampleInputFile">File input</label>
                                                        <div class="input-group">
                                                            <div class="custom-file">
                                                                <input type="file" class="form-control" name="profile_picture" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- /.card-body -->

                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                            @endforeach

                                            <!-- END timeline item -->


                                        </div>
                                        <!-- /.tab-pane -->

                                        <div class="tab-pane" id="settings">
                                            <form action="{{ url('account_update') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{ Auth::user()->id }}" name="main_id">

                                                <div class="post">
                                                    <div>
                                                        <div>Login Information</div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Login ID</label>
                                                                <input type="" class="form-control" value="{{ Auth::user()->email }}" readonly>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @foreach ($account_history as $item)
                                                <!-- /.post -->
                                                <div class="post">
                                                    <div>
                                                        <div>Personal Information</div>
                                                        <div class="card-body">
                                                            <div>
                                                                <label>Title</label>
                                                                <select class="form-control" name="title" required>
                                                                    <option value="{{ $item->title }}">{{ $item->title }}</option>
                                                                    <option value="Mr.">Mr.</option>
                                                                    <option value="Miss">Miss</option>

                                                                </select>
                                                            </div>






                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">First Name</label>
                                                                <input type="text" name="first_name" class="form-control" value="{{ $item->first_name }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Last Name</label>
                                                                <input type="text" name="last_name" class="form-control" value="{{ $item->last_name }}">
                                                            </div>



                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post -->

                                                <!-- /.post -->
                                                <div class="post">
                                                    <div>
                                                        <div>Contact Information</div>
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Email Address</label>
                                                                <input type="" class="form-control" value="{{ Auth::user()->email }}" readonly>
                                                            </div>

                                                            <div>
                                                                <label for="exampleInputEmail1">Country Code Number</label>
                                                                <select class="form-control" name="country_code">
                                                                    <option value="{{ $item->country_code }}">{{ $item->country_code }}</option>
                                                                    <option value="+880">+880</option>
                                                                    <option value="+096">+096</option>
                                                                </select>

                                                            </div>

                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Mobile Phone Number</label>
                                                                <input type="text" name="mobile_number" class="form-control" value="{{ $item->mobile_number }}">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Alternative Phone Number</label>
                                                                <input type="text" name="alt_number" class="form-control" value="{{ $item->alt_number }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post -->
                                                @endforeach


                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>



            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('admin.footer')

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
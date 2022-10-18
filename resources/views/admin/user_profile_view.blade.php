<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Renter Profile</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!--Start Side Menue -->
        @include('admin.sidemenue')
        <!--End Side Menue -->




        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>User Profile</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <?php

                    use App\Models\User;
                    use App\Models\AccountDetails;

                    $idt = $id;
                    $renter_details = user::where('id', $idt)->get();
                    $try = null;
                    ?>

                    @foreach ($renter_details as $item)
                    <?php
                    $idta = $item->id;
                    $renter_account_details = AccountDetails::where('main_id', $idta)->get();
                    ?>
                    @foreach ($renter_account_details as $account_item)
                    <?php
                    $try = $account_item->main_id;
                    ?>
                    @endforeach

                    <?php
                    if ($try == null) { ?>
                        <p style="color:red ;"> ! User do not active the profile yet</p>
                    <?php }
                    ?>

                    @foreach ($renter_account_details as $account_item)

                    <div class="text-center">
                        <?php
                        if ($account_item->profile_picture != null) { ?>
                            <img style="width: 250px" src="../uploads/profile/{{ $account_item->profile_picture }}" alt="User profile picture">
                        <?php } else { ?>
                            <br><p style="color:red ;">Image is not uploded</p>

                        <?php }
                        ?>





                        <h2>{{$account_item->title}} {{$account_item->first_name}} <strong>{{$account_item->last_name}}</strong></h2>
                        <p class="lead mb-5">123 Testing Ave, Testtown, 9876 NA<br>
                            Phone: {{$account_item->country_code}} {{$account_item->mobile_number}}<br>
                            Email: {{$item->email}}
                        </p>
                    </div>
                    @endforeach
                    @endforeach
                </div>

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
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
</body>

</html>
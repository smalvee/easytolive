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
    @include('admin.sidemenue')
    <!--End Side Menue -->

    <div class="content-wrapper">
      <!-- Content Header (Page header) -->



      <?php


      use App\Models\AccountDetails;
      use App\Models\Createlisting;
      use App\Models\User;

      $check = null;

      $idt = $id;
      // printf($idt);
      // die();
      $owner_property_list = Createlisting::where('id', $idt)->get();
      ?>
      @foreach ($owner_property_list as $item)
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Property Image</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">


                  <div class="row mt-4">

                    <?php

                    function ArrayElementCount($x)
                    {
                      $count = 0;
                      foreach ($x as $value) {
                        $count = $count + 1;
                      }
                      return $count;
                    }
                    $sample = $item->image;
                    $r = explode('|', $sample);



                    $number_of_image = ArrayElementCount($r);
                    //die();



                    for ($i = 0; $i < $number_of_image; $i++) {
                    ?>
                      <div class="col-sm-4">
                        <div class="position-relative">
                          <img src="../uploads/property/<?php print_r($r[$i]); ?>" alt="Photo 1" class="img-fluid">
                          <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon bg-success text-lg">
                              KGD
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>

      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card card-primary">
            <div class="card-header">

              <h3 class="card-title">Property Details</h3>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                <div class="row">
                  <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                      <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">Price</span>
                        <span class="info-box-number text-center text-muted mb-0">SGD {{$item->price}} </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                      <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">Floor Size</span>
                        <span class="info-box-number text-center text-muted mb-0">{{$item->floor_size}} SQF</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="info-box bg-light">
                      <div class="info-box-content">
                        <span class="info-box-text text-center text-muted">Floor Level</span>
                        <span class="info-box-number text-center text-muted mb-0">{{$item->floor_level}} </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 col-sm-4">
                    <div class="post">

                      <p class="text-sm">Price Type
                        <b class="d-block">{{$item->price_type}} </b>
                      </p>
                      <p class="text-sm">Unit
                        <b class="d-block">{{$item->bedrooms}} | {{$item->bathrooms}}</b>
                      </p>

                      <p class="text-sm">Estate
                        <b class="d-block">{{$item->estate}}</b>
                      </p>

                      <p class="text-sm">Nearby MRT
                        <b class="d-block">{{$item->mrt}}</b>
                      </p>

                      <p class="text-sm">Nearby School
                        <b class="d-block">{{$item->school}}</b>
                      </p>
                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="post">

                      <p class="text-sm">Type
                        <b class="d-block">{{$item->property_type}} </b>
                      </p>
                      <p class="text-sm">Land Size
                        <b class="d-block">N/A</b>
                      </p>

                      <p class="text-sm">Furnishing
                        <b class="d-block">{{$item->furnishing}}</b>
                      </p>

                      <p class="text-sm">Currently Tenanted
                        <b class="d-block">{{$item->currently_tenanted}}</b>
                      </p>

                      <p class="text-sm">Maintenance Fee
                        <b class="d-block">{{$item->maintenance_fee}} /Month</b>
                      </p>
                      <p class="text-sm">Price Per SQF
                        <?php
                        $a = $item->price;
                        $b = $item->floor_size;

                        $c = $b / $a;
                        $d = number_format($c, 2);


                        ?>
                        <b class="d-block">SGD {{$d}}</b>
                      </p>

                    </div>
                  </div>
                  <div class="col-12 col-sm-4">
                    <div class="post">

                      <p class="text-sm">Price Type
                        <b class="d-block">{{$item->price_type}} </b>
                      </p>
                      <p class="text-sm">Unit
                        <b class="d-block">{{$item->bedrooms}} | {{$item->bathrooms}}</b>
                      </p>

                      <p class="text-sm">Estate
                        <b class="d-block">{{$item->estate}}</b>
                      </p>

                      <p class="text-sm">Nearby MRT
                        <b class="d-block">{{$item->mrt}}</b>
                      </p>

                      <p class="text-sm">Nearby School
                        <b class="d-block">{{$item->school}}</b>
                      </p>
                      <p class="text-sm">Listing ID
                        <b class="d-block">{{$item->id}}</b>
                      </p>
                    </div>
                  </div>
                </div>



                <div class="card card-primary card-tabs">
                  <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Key Features</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Facilisis</a>
                      </li>

                    </ul>
                  </div>
                  <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                      <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">

                        <?php
                        function Array_ElementCount($y)
                        {
                          $count = 0;
                          foreach ($y as $value) {
                            $count = $count + 1;
                          }
                          return $count;
                        }
                        $sample1 = $item->furnishing_material;
                        $r = explode(',', $sample1);
                        $number_of_image = Array_ElementCount($r);
                        //die();
                        for ($i = 0; $i < $number_of_image; $i++) {
                        ?>
                          <span><span class="fa fa-check"> <?php print_r($r[$i]); ?></span>. &nbsp &nbsp</span>
                        <?php } ?>
                      </div>
                      <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                        <?php
                        function Array_Element_Count($y)
                        {
                          $count = 0;
                          foreach ($y as $value) {
                            $count = $count + 1;
                          }
                          return $count;
                        }
                        $sample1 = $item->unit_features;
                        $r = explode(',', $sample1);
                        $number_of_image = Array_Element_Count($r);
                        //die();
                        for ($i = 0; $i < $number_of_image; $i++) {
                        ?>

                          <span><span class="fa fa-check"> <?php print_r($r[$i]); ?></span>. &nbsp &nbsp</span>

                        <?php } ?>
                      </div>

                    </div>
                  </div>
                  <!-- /.card -->
                </div>
              </div>

              <?php
              $owner_id = $item->user_id;

              //printf($owner_id);
              //die();
              $owner_information = AccountDetails::where('main_id', $owner_id)->get();
              ?>
              @foreach ($owner_information as $information)

              <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">


                <h3 class="text-primary"><i class="fas fa-user"></i>&nbsp {{$information->title}} {{$information->first_name}} {{$information->last_name}} </h3>

                <br>
                <div class="text-muted">
                  <p class="text-sm">Contact Number
                    <b class="d-block">{{$information->country_code}} {{$information->mobile_number}}</b>
                  </p>

                  <?php
                  $orginal_id = $information->main_id;

                  //printf($owner_id);
                  //die();
                  $orginal_user_information = User::where('id', $orginal_id)->get();
                  ?>
                  @foreach ($orginal_user_information as $orginal_information)
                  <p class="text-sm">Email
                    <b class="d-block">{{$orginal_information->email}} </b>
                  </p>
                  @endforeach


                  <?php
                  if ($item->status == "Pending") {
                    $color = "coral";
                  } else if ($item->status == "Approved") {
                    $color = "green";
                  } else if ($item->status == "Rejected") {
                    $color = "crimson";
                  }

                  //echo($color);
                  // die();

                  ?>

                  <p class="text-sm">Current Status
                    <b style="color: <?php echo ($color); ?> ;" class="d-block">{{$item->status}} </b>
                  </p>
                </div>

                <!-- <h5 class="mt-5 text-muted">Project files</h5>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                                    </li>
                                    <li>
                                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                                    </li>
                                    <li>
                                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                                    </li>
                                    <li>
                                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                                    </li>
                                    <li>
                                        <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                                    </li>
                                </ul> -->
                <div class="mt-5 mb-3">

                  <form action="{{ url('status_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input name="listing_id" type="hidden" value="{{$item->id}}">
                    <p class="text-sm">Update Status</p>
                    <select class="form-control" name="status">
                      <option value="{{$item->status}}">{{$item->status}}</option>
                      <option value="Approved">Approved</option>
                      <option value="Pending">Pending</option>
                      <option value="Rejected">Rejected</option>
                    </select>
                    <br>
                    <button class="btn btn-sm btn-primary">Update</button>
                    <button class="btn btn-sm btn-danger">Delete</button>
                  </form>
                </div>
                @endforeach
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

      </section>

      @endforeach
      <!-- /.content -->
    </div>





    <!-- Control Sidebar -->
    @include('admin.footer')
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
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


                                    <br>
                                    <form>
                                        <div class="card card-info">
                                            <div class="card-header" style="background-color:#28A745;">
                                                <h3 class="card-title">Media File</h3>
                                                <input name="listing_id" type="hidden" value="{{$item->id}}">
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">File input</label>
                                                    <div class="input-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="form-control" name="file[]" multiple required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-block bg-gradient-warning">Update Property Photo</button>
                                        </div>
                                    </form>
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
                            <h3 class="card-title">Edit Property Details</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Price (SGD)</span>
                                                <input class="form-control" Background="none" style="text-align:center;" name="price" value="{{$item->price}}">
                                                <!-- <span class="info-box-number text-center text-muted mb-0">SGD {{$item->price}} </span> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Floor Size (SQF)</span>
                                                <input class="form-control" Background="none" style="text-align:center;" name="floor_size" value="{{$item->floor_size}}">
                                                <!-- <span class="info-box-number text-center text-muted mb-0">{{$item->floor_size}} SQF</span> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="info-box bg-light">
                                            <div class="info-box-content">
                                                <span class="info-box-text text-center text-muted">Floor Level</span>
                                                <select class="form-control" Background="none" style="text-align:center;" name="floor_level">
                                                    <option value="{{$item->floor_level}}">{{$item->floor_level}}</option>
                                                    <option value="Ground">Ground</option>
                                                    <option value="2nd Floor">2nd Floor</option>
                                                    <option value="3rd Floor">3rd Floor</option>
                                                    <option value="4th Floor">4th Floor</option>
                                                    <option value="5th Floor">5th Floor</option>
                                                </select>
                                                <!-- <input class="info-box-number text-center text-muted mb-0" Background="none"  name="floor_level" value="{{$item->floor_level}}"> -->
                                                <!-- <span class="info-box-number text-center text-muted mb-0">{{$item->floor_level}} </span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-4">
                                        <div class="post">

                                            <p class="text-sm">Price Type
                                                <select class="form-control" Background="none" name="price_type">
                                                    <option value="{{$item->price_type}}">{{$item->price_type}}</option>
                                                    <option value="Starting From">Starting From</option>
                                                    <option value="View to Offer">View to Offer</option>
                                                    <option value="Negotiable">Negotiable</option>
                                                    <option value="Price on Enquiry">Price on Enquiry</option>
                                                    <option value="">[leave blank]</option>
                                                </select>
                                                <!-- <b class="d-block">{{$item->price_type}} </b> -->
                                            </p>
                                            <p class="text-sm">
                                            <div class="row">
                                                <div class="col-12 col-sm-4">
                                                    <div class="post">

                                                        <label>Select Bathrooms</label>
                                                        <select class="form-control" Background="none" name="bedrooms">
                                                            <option value="{{$item->bedrooms}}">{{$item->bedrooms}}</option>
                                                            <option value="1 Bedroom">1 Bedroom</option>
                                                            <option value="2 Bedroom">2 Bedroom</option>
                                                            <option value="3 Bedroom">3 Bedroom</option>
                                                            <option value="4 Bedroom">4 Bedroom</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-4">
                                                    <div class="post">
                                                        <label>Select Bathrooms</label>
                                                        <select class="form-control" Background="none" name="bathrooms">
                                                            <option value="{{$item->bathrooms}}">{{$item->bathrooms}}</option>
                                                            <option value="1 Bathroom">1 Bathroom</option>
                                                            <option value="2 Bathroom">2 Bathroom</option>
                                                            <option value="3 Bathroom">3 Bathroom</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            </p>

                                            <p class="text-sm">Estate
                                                <select class="form-control" Background="none" name="estate">
                                                    <option value="{{$item->estate}}">{{$item->estate}}</option>
                                                    <option value="Sembawang - North">Sembawang - North</option>
                                                    <option value="Woodlands - North">Woodlands - North</option>
                                                    <option value="Yishun - North">Yishun - North</option>
                                                    <option value="Ang Mo Kio - North-East">Ang Mo Kio - North-East</option>
                                                    <option value="Hougang - North-East">Hougang - North-East</option>
                                                    <option value="Punggol - North-East">Punggol - North-East</option>
                                                    <option value="Sengkang - North-East">Sengkang - North-East</option>
                                                    <option value="Serangoon - North-East">Serangoon - North-East</option>
                                                    <option value="Bedok - East">Bedok - East</option>
                                                    <option value="Pasir Ris - East">Pasir Ris - East</option>
                                                    <option value="Tampines - East">Tampines - East</option>
                                                    <option value="Bukit Batok - East">Bukit Batok - West</option>
                                                    <option value="Bukit Panjang - West">Bukit Panjang - West</option>
                                                    <option value="Choa Chu Kang - West">Choa Chu Kang - West</option>
                                                    <option value="Clementi - West">Clementi - West</option>
                                                    <option value="Jurong West - West">Jurong West - West</option>
                                                    <option value="Jurong West - West">Jurong West - West</option>
                                                    <option value="Tengah - West">Tengah - West</option>
                                                    <option value="Bishan - Central">Bishan - Central</option>
                                                    <option value="Bukit Merah - Central">Bukit Merah - Central</option>
                                                    <option value="Bukit Timah - Central">Bukit Timah - Central</option>
                                                    <option value="Central - Central">Central - Central</option>
                                                    <option value="Geylang - Central">Geylang - Central</option>
                                                    <option value="Marine Parade - Central">Marine Parade - Central</option>
                                                    <option value="Queenstown - Central">Queenstown - Central</option>
                                                    <option value="Toa Payoh - Central">Toa Payoh - Central</option>
                                                </select>

                                            </p>

                                            <p class="text-sm">Nearby MRT
                                                <input class="form-control" name="mrt" value="{{$item->mrt}}">
                                            </p>

                                            <p class="text-sm">Nearby School
                                                <input class="form-control" name="school" value="{{$item->school}}">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="post">

                                            <p class="text-sm">Type
                                                <select class="form-control" Background="none" name="property_type">
                                                    <option value="{{$item->property_type}}">{{$item->property_type}}</option>
                                                    <option value="Residential - Landed">Residential - Landed</option>
                                                    <option value="Residential - Condominium">Residential - Condominium</option>
                                                    <option value="Residential - HDB">Residential - HDB</option>
                                                    <option value="Commercial">Commercial</option>
                                                    <option value="Industrial">Industrial</option>
                                                </select>

                                            </p>
                                            <p class="text-sm">Land Size
                                                <b class="d-block">N/A</b>
                                            </p>

                                            <p class="text-sm">Furnishing
                                                <select class="form-control" Background="none" name="furnishing">
                                                    <option value="{{$item->furnishing}}">{{$item->furnishing}}</option>
                                                    <option value="Fully Furnished">Fully Furnished</option>
                                                    <option value="50% Furnished">50% Furnished</option>
                                                </select>

                                            </p>

                                            <p class="text-sm">Currently Tenanted
                                                <select class="form-control" Background="none" name="currently_tenanted">
                                                    <option value="{{$item->currently_tenanted}}">{{$item->currently_tenanted}}</option>
                                                    <option value="Yes">Yes</option>
                                                    <option value="No">No</option>
                                                </select>

                                            </p>

                                            <p class="text-sm">Maintenance Fee (Per Month)
                                                <input class="form-control" name="maintenance_fee" value="{{$item->maintenance_fee}}">

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
                                                <select class="form-control" Background="none" name="price_type">
                                                    <option value="{{$item->price_type}}">{{$item->price_type}}</option>
                                                </select>

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
                                                $preview_furnishing_material  = explode(',', $item['furnishing_material']);                                                
                                                ?>


                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="Audio System" name="furnishing_material[]" <?php

                                                                                                                                                                                            if (in_array('Audio System', $preview_furnishing_material)) {
                                                                                                                                                                                                echo "checked";
                                                                                                                                                                                            }
                                                                                                                                                                                            ?>>
                                                                <label for="customCheckbox1" class="custom-control-label">Audio System</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="Bed" name="furnishing_material[]" <?php
                                                                                                                                                                                    if (in_array('Bed', $preview_furnishing_material)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox2" class="custom-control-label">Bed</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="Cable TV" name="furnishing_material[]" <?php
                                                                                                                                                                                        if (in_array('Cable TV', $preview_furnishing_material)) {
                                                                                                                                                                                            echo "checked";
                                                                                                                                                                                        }
                                                                                                                                                                                        ?>>
                                                                <label for="customCheckbox3" class="custom-control-label">Cable TV</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="DVD Player" name="furnishing_material[]" <?php
                                                                                                                                                                                            if (in_array('DVD Player', $preview_furnishing_material)) {
                                                                                                                                                                                                echo "checked";
                                                                                                                                                                                            }
                                                                                                                                                                                            ?>>
                                                                <label for="customCheckbox4" class="custom-control-label">DVD Player</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox5" value="Dining Room Furniture" name="furnishing_material[]" <?php
                                                                                                                                                                                                    if (in_array('Dining Room Furniture', $preview_furnishing_material)) {
                                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                                    }
                                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox5" class="custom-control-label">Dining Room Furniture</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox6" value="Dishwasher" name="furnishing_material[]" <?php
                                                                                                                                                                                            if (in_array('Dishwasher', $preview_furnishing_material)) {
                                                                                                                                                                                                echo "checked";
                                                                                                                                                                                            }
                                                                                                                                                                                            ?>>
                                                                <label for="customCheckbox6" class="custom-control-label">Dishwasher</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox7" value="Dryer" name="furnishing_material[]" <?php
                                                                                                                                                                                    if (in_array('Dryer', $preview_furnishing_material)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox7" class="custom-control-label">Dryer</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox8" value="Fridge" name="furnishing_material[]" <?php
                                                                                                                                                                                        if (in_array('Fridge', $preview_furnishing_material)) {
                                                                                                                                                                                            echo "checked";
                                                                                                                                                                                        }
                                                                                                                                                                                        ?>>
                                                                <label for="customCheckbox8" class="custom-control-label">Fridge</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox9" value="Internet Connection" name="furnishing_material[]" <?php
                                                                                                                                                                                                    if (in_array('Internet Connection', $preview_furnishing_material)) {
                                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                                    }
                                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox9" class="custom-control-label">Internet Connection</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox10" value="Iron / Ironing Board" name="furnishing_material[]" <?php
                                                                                                                                                                                                    if (in_array('Iron / Ironing Board', $preview_furnishing_material)) {
                                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                                    }
                                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox10" class="custom-control-label">Iron / Ironing Board</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox11" value="Kitchen Utensils" name="furnishing_material[]" <?php
                                                                                                                                                                                                if (in_array('Kitchen Utensils', $preview_furnishing_material)) {
                                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                                }
                                                                                                                                                                                                ?>>
                                                                <label for="customCheckbox11" class="custom-control-label">Kitchen Utensils</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="Living Room Furniture" name="furnishing_material[]" <?php
                                                                                                                                                                                                        if (in_array('Living Room Furniture', $preview_furnishing_material)) {
                                                                                                                                                                                                            echo "checked";
                                                                                                                                                                                                        }
                                                                                                                                                                                                        ?>>
                                                                <label for="customCheckbox12" class="custom-control-label">Living Room Furniture</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox13" value="Oven / Microwave" name="furnishing_material[]" <?php
                                                                                                                                                                                                if (in_array('Oven / Microwave', $preview_furnishing_material)) {
                                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                                }
                                                                                                                                                                                                ?>>
                                                                <label for="customCheckbox13" class="custom-control-label">Oven / Microwave</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox14" value="Television" name="furnishing_material[]" <?php
                                                                                                                                                                                            if (in_array('Television', $preview_furnishing_material)) {
                                                                                                                                                                                                echo "checked";
                                                                                                                                                                                            }
                                                                                                                                                                                            ?>>
                                                                <label for="customCheckbox14" class="custom-control-label">Television</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox15" value="Vacuum Cleaner" name="furnishing_material[]" <?php
                                                                                                                                                                                                if (in_array('Vacuum Cleaner', $preview_furnishing_material)) {
                                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                                }
                                                                                                                                                                                                ?>>
                                                                <label for="customCheckbox15" class="custom-control-label">Vacuum Cleaner</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox16" value="Washing Machine" name="furnishing_material[]" <?php
                                                                                                                                                                                                if (in_array('Washing Machine', $preview_furnishing_material)) {
                                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                                }
                                                                                                                                                                                                ?>>
                                                                <label for="customCheckbox16" class="custom-control-label">Washing Machine</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>



                                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                                
                                                <?php
                                                $preview_unit_features  = explode(',', $item['unit_features']);
                                                ?>


                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox17" value="Air-conditioning" name="unit_features[]" <?php
                                                                                                                                                                                            if (in_array('Air-conditioning', $preview_unit_features)) {
                                                                                                                                                                                                echo "checked";
                                                                                                                                                                                            }
                                                                                                                                                                                            ?>>
                                                                <label for="customCheckbox17" class="custom-control-label">Air-conditioning</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox18" value="Balcony" name="unit_features[]" <?php
                                                                                                                                                                                    if (in_array('Balcony', $preview_unit_features)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox18" class="custom-control-label">Balcony</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox19" value="Cooker Hob/Hood" name="unit_features[]" <?php
                                                                                                                                                                                            if (in_array('Cooker Hob/Hood', $preview_unit_features)) {
                                                                                                                                                                                                echo "checked";
                                                                                                                                                                                            }
                                                                                                                                                                                            ?>>
                                                                <label for="customCheckbox19" class="custom-control-label">Cooker Hob/Hood</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox20" value="Corner Unit" name="unit_features[]" <?php
                                                                                                                                                                                        if (in_array('Corner Unit', $preview_unit_features)) {
                                                                                                                                                                                            echo "checked";
                                                                                                                                                                                        }
                                                                                                                                                                                        ?>>
                                                                <label for="customCheckbox20" class="custom-control-label">Corner Unit</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox21" value="High Floor" name="unit_features[]" <?php
                                                                                                                                                                                    if (in_array('High Floor', $preview_unit_features)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox21" class="custom-control-label">High Floor</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox22" value="Bathtub" name="unit_features[]" <?php
                                                                                                                                                                                    if (in_array('Bathtub', $preview_unit_features)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox22" class="custom-control-label">Bathtub</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox23" value="Bombshelter" name="unit_features[]" <?php
                                                                                                                                                                                        if (in_array('Bombshelter', $preview_unit_features)) {
                                                                                                                                                                                            echo "checked";
                                                                                                                                                                                        }
                                                                                                                                                                                        ?>>
                                                                <label for="customCheckbox23" class="custom-control-label">Bombshelter</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox24" value="City View" name="unit_features[]" <?php
                                                                                                                                                                                    if (in_array('City View', $preview_unit_features)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox24" class="custom-control-label">City View</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox25" value="Colonial Building" name="unit_features[]" <?php
                                                                                                                                                                                            if (in_array('Colonial Building', $preview_unit_features)) {
                                                                                                                                                                                                echo "checked";
                                                                                                                                                                                            }
                                                                                                                                                                                            ?>>
                                                                <label for="customCheckbox25" class="custom-control-label">Colonial Building</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox26" value="Garage" name="unit_features[]" <?php
                                                                                                                                                                                if (in_array('Garage', $preview_unit_features)) {
                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                }
                                                                                                                                                                                ?>>
                                                                <label for="customCheckbox26" class="custom-control-label">Garage</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox27" value="Ground Floor" name="unit_features[]" <?php
                                                                                                                                                                                        if (in_array('Ground Floor', $preview_unit_features)) {
                                                                                                                                                                                            echo "checked";
                                                                                                                                                                                        }
                                                                                                                                                                                        ?>>
                                                                <label for="customCheckbox27" class="custom-control-label">Ground Floor</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox28" value="Hairdryer" name="unit_features[]" <?php
                                                                                                                                                                                    if (in_array('Hairdryer', $preview_unit_features)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox28" class="custom-control-label">Hairdryer</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox29" value="Jacuzzi" name="unit_features[]" <?php
                                                                                                                                                                                    if (in_array('Jacuzzi', $preview_unit_features)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox29" class="custom-control-label">Jacuzzi</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox30" value="Lake View" name="unit_features[]" <?php
                                                                                                                                                                                    if (in_array('Lake View', $preview_unit_features)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox30" class="custom-control-label">Lake View</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox31" value="Low Floor" name="unit_features[]" <?php
                                                                                                                                                                                    if (in_array('Low Floor', $preview_unit_features)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox31" class="custom-control-label">Low Floor</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox32" value="Intercom" name="unit_features[]" <?php
                                                                                                                                                                                    if (in_array('Intercom', $preview_unit_features)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox32" class="custom-control-label">Intercom</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox33" value="Park/Greenery View" name="unit_features[]" <?php
                                                                                                                                                                                            if (in_array('Park/Greenery View', $preview_unit_features)) {
                                                                                                                                                                                                echo "checked";
                                                                                                                                                                                            }
                                                                                                                                                                                            ?>>
                                                                <label for="customCheckbox33" class="custom-control-label">Park/Greenery View</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox34" value="Penthouse" name="unit_features[]" <?php
                                                                                                                                                                                    if (in_array('Penthouse', $preview_unit_features)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox34" class="custom-control-label">Penthouse</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox35" value="Renovated" name="unit_features[]" <?php
                                                                                                                                                                                    if (in_array('Renovated', $preview_unit_features)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox35" class="custom-control-label">Renovated</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox36" value="Water Heater" name="unit_features[]" <?php
                                                                                                                                                                                        if (in_array('Water Heater', $preview_unit_features)) {
                                                                                                                                                                                            echo "checked";
                                                                                                                                                                                        }
                                                                                                                                                                                        ?>>
                                                                <label for="customCheckbox36" class="custom-control-label">Water Heater</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox37" value="Maidsroom" name="unit_features[]" <?php
                                                                                                                                                                                    if (in_array('Maidsroom', $preview_unit_features)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox37" class="custom-control-label">Maidsroom</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox38" value="Original Condition" name="unit_features[]" <?php
                                                                                                                                                                                            if (in_array('Original Condition', $preview_unit_features)) {
                                                                                                                                                                                                echo "checked";
                                                                                                                                                                                            }
                                                                                                                                                                                            ?>>
                                                                <label for="customCheckbox38" class="custom-control-label">Original Condition</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox39" value="Outdoor Patio" name="unit_features[]" <?php
                                                                                                                                                                                        if (in_array('Outdoor Patio', $preview_unit_features)) {
                                                                                                                                                                                            echo "checked";
                                                                                                                                                                                        }
                                                                                                                                                                                        ?>>
                                                                <label for="customCheckbox39" class="custom-control-label">Outdoor Patio</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox40" value="Private Garden" name="unit_features[]" <?php
                                                                                                                                                                                        if (in_array('Private Garden', $preview_unit_features)) {
                                                                                                                                                                                            echo "checked";
                                                                                                                                                                                        }
                                                                                                                                                                                        ?>>
                                                                <label for="customCheckbox40" class="custom-control-label">Private Garden</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox41" value="Private Pool" name="unit_features[]" <?php
                                                                                                                                                                                        if (in_array('Private Pool', $preview_unit_features)) {
                                                                                                                                                                                            echo "checked";
                                                                                                                                                                                        }
                                                                                                                                                                                        ?>>
                                                                <label for="customCheckbox41" class="custom-control-label">Private Pool</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox42" value="Roof Terrace" name="unit_features[]" <?php
                                                                                                                                                                                        if (in_array('Roof Terrace', $preview_unit_features)) {
                                                                                                                                                                                            echo "checked";
                                                                                                                                                                                        }
                                                                                                                                                                                        ?>>
                                                                <label for="customCheckbox42" class="custom-control-label">Roof Terrace</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox43" value="Sea View" name="unit_features[]" <?php
                                                                                                                                                                                    if (in_array('Sea View', $preview_unit_features)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox43" class="custom-control-label">Sea View</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox44" value="Swimming Pool View" name="unit_features[]" <?php
                                                                                                                                                                                            if (in_array('Swimming Pool View', $preview_unit_features)) {
                                                                                                                                                                                                echo "checked";
                                                                                                                                                                                            }
                                                                                                                                                                                            ?>>
                                                                <label for="customCheckbox44" class="custom-control-label">Swimming Pool View</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox45" value="Terrace" name="unit_features[]" <?php
                                                                                                                                                                                    if (in_array('Terrace', $preview_unit_features)) {
                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                    ?>>
                                                                <label for="customCheckbox45" class="custom-control-label">Terrace</label>
                                                            </div>
                                                            <div class="custom-control custom-checkbox">
                                                                <input class="custom-control-input" type="checkbox" id="customCheckbox46" value="Walk-in Wardrobe" name="unit_features[]" <?php
                                                                                                                                                                                            if (in_array('Walk-in Wardrobe', $preview_unit_features)) {
                                                                                                                                                                                                echo "checked";
                                                                                                                                                                                            }
                                                                                                                                                                                            ?>>
                                                                <label for="customCheckbox46" class="custom-control-label">Walk-in Wardrobe</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
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
                                <div class="text-center mt-5 mb-3">
                                    <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="#" class="btn btn-sm btn-warning">Delete</a>
                                </div>
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
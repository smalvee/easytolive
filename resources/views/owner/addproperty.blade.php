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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Property Information</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form>
                    <div class="container-fluid">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-6">
                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Location</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->



                                    <!-- Location Tab Start -->
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="exampleSelectBorder">Property Type</code></label>
                                            <select class="custom-select form-control-border" id="exampleSelectBorder">
                                                <option value="">Select One</option>
                                                <option value="Residential - Landed">Residential - Landed</option>
                                                <option value="Residential - Condominium">Residential - Condominium</option>
                                                <option value="Residential - HDB">Residential - HDB</option>
                                                <option value="Commercial">Commercial</option>
                                                <option value="Industrial">Industrial</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectBorder">Estate</code></label>
                                            <select class="custom-select form-control-border" id="exampleSelectBorder">
                                                <option value="">Select One</option>
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
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectBorder">Districts</code></label>
                                            <select class="custom-select form-control-border" id="exampleSelectBorder">
                                                <option value="">Select One</option>
                                                <option value="Boat Quay, Chinatown,City - Business District">
                                                    Boat Quay, Chinatown,
                                                    City - Business District</option>
                                                <option value="Anson Road, Chinatown,City - Business District">
                                                    Anson Road, Chinatown,
                                                    City - Business District</option>
                                                <option value="Alexandra Road, Tiong Bahru,Central South">
                                                    Alexandra Road, Tiong Bahru,
                                                    Central South</option>
                                                <option value="Keppel, Mount Faber,South">
                                                    Keppel, Mount Faber,
                                                    South</option>
                                                <option value="Buona Vista, Dover,South West">
                                                    Buona Vista, Dover,
                                                    South West</option>
                                                <option value="City Hall, High Street,City - Business District">
                                                    City Hall, High Street,
                                                    City - Business District</option>
                                                <option value="Beach Road, Bencoolen Road,City">
                                                    Beach Road, Bencoolen Road,
                                                    City</option>
                                                <option value="Little India, Farrer Park,Central">
                                                    Little India, Farrer Park,
                                                    Central</option>
                                                <option value="Cairnhill, Killiney,Central - Orchard">
                                                    Cairnhill, Killiney,
                                                    Central - Orchard</option>
                                                <option value="Balmoral, Bukit Timah,Central - Near Orchard">
                                                    Balmoral, Bukit Timah,
                                                    Central - Near Orchard</option>
                                                <option value="Chancery, Bukit Timah,Central - Near Orchard">
                                                    Chancery, Bukit Timah,
                                                    Central - Near Orchard</option>
                                                <option value="Balestier, Moulmein,Central">
                                                    Balestier, Moulmein,
                                                    Central</option>
                                                <option value="Potong Pasir, Machpherson,Central East">
                                                    Potong Pasir, Machpherson,
                                                    Central East</option>
                                                <option value="Eunos, Geylang,Central East">
                                                    Eunos, Geylang,
                                                    Central East</option>
                                                <option value="Katong, Marine Parade,East Coast">
                                                    Katong, Marine Parade,
                                                    East Coast</option>
                                                <option value="Bayshore, Bedok,Upper East Coast">
                                                    Bayshore, Bedok,
                                                    Upper East Coast</option>
                                                <option value="Changi, Loyang,Far East">
                                                    Changi, Loyang,
                                                    Far East</option>
                                                <option value="Pasir Ris, Simei,Far East">
                                                    Pasir Ris, Simei,
                                                    Far East</option>
                                                <option value="Hougang, Punggol,North East">
                                                    Hougang, Punggol,
                                                    North East</option>
                                                <option value="Ang Mo Kio, Bishan,Central North">
                                                    Ang Mo Kio, Bishan,
                                                    Central North</option>
                                                <option value="Clementi, Upper Bukit Timah,Central West">
                                                    Clementi, Upper Bukit Timah,
                                                    Central West</option>
                                                <option value="Boon Lay, Jurong,Far West">
                                                    Boon Lay, Jurong,
                                                    Far West</option>
                                                <option value="Bukit Batok, Choa Chu Kang,North West">
                                                    Bukit Batok, Choa Chu Kang,
                                                    North West</option>
                                                <option value="Kranji, Lim Chu Kang,Far North West">
                                                    Kranji, Lim Chu Kang,
                                                    Far North West</option>
                                                <option value="Admiralty, Woodlands,Far North">
                                                    Admiralty, Woodlands,
                                                    Far North</option>
                                                <option value="Tagore, Yio Chu Kang,North">
                                                    Tagore, Yio Chu Kang,
                                                    North</option>
                                                <option value="Admiralty, Sembawang,Far North">
                                                    Admiralty, Sembawang,
                                                    Far North</option>
                                                <option value="Seletar, Yio Chu Kang,North East">
                                                    Seletar, Yio Chu Kang,
                                                    North East</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name of Property</label>
                                            <input type="text" class="form-control" placeholder="Enter property Name" name="">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Address</label>
                                            <input type="text" class="form-control" placeholder="Enter property Address">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Postal Code</label>
                                            <input type="text" class="form-control" placeholder="Enter Postal Code">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nearby MRT</label>
                                            <input type="text" class="form-control" placeholder="Enter Nearby MRT">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nearby School</label>
                                            <input type="text" class="form-control" placeholder="Enter Nearby School">
                                        </div>

                                    </div>
                                    <!-- Location Tab End -->



                                </div>
                                <!-- /.card -->

                                <!-- general form elements -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Unit Details</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label for="exampleSelectBorder">Commission Structure</code></label>
                                            <select class="custom-select form-control-border" id="exampleSelectBorder">
                                                <option>Select One</option>
                                                <option>Market Sharing</option>
                                                <option>Commission Sharing</option>
                                            </select>
                                        </div>

                                        <label for="exampleInputEmail1">Commission Percentage</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" placeholder="Enter Commission Percentage">
                                            <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectBorder">Listing Type</code></label>
                                            <select class="custom-select form-control-border" id="exampleSelectBorder">
                                                <option>Select One</option>
                                                <option>For Sale</option>
                                                <option>For Rent</option>
                                                <option>Room Rent</option>
                                            </select>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label for="exampleSelectBorder">Price</code></label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">SGD</span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Enter Price">
                                                        <div class="input-group-append">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleSelectBorder">Price Type</code></label>
                                                        <select class="custom-select form-control-border" id="exampleSelectBorder">
                                                            <option>Select One</option>
                                                            <option value="Starting From">Starting From</option>
                                                            <option value="View to Offer">View to Offer</option>
                                                            <option value="Negotiable">Negotiable</option>
                                                            <option value="Price on Enquiry">Price on Enquiry</option>
                                                            <option value="">[leave blank]</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>





                                        <label for="exampleSelectBorder">Maintenance Fee Per Month</code></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$SGD</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter Maintenance Fee per Month">
                                            <div class="input-group-append">
                                            </div>
                                        </div>

                                        <br>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleSelectBorder">Number of Bedrooms</code></label>
                                                        <select class="custom-select form-control-border" id="exampleSelectBorder">
                                                            <option>Select One</option>
                                                            <option value="1 Bedroom">1 Bedroom</option>
                                                            <option value="2 Bedroom">2 Bedroom</option>
                                                            <option value="3 Bedroom">3 Bedroom</option>
                                                            <option value="4 Bedroom">4 Bedroom</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleSelectBorder">Number of Bathrooms</code></label>
                                                        <select class="custom-select form-control-border" id="exampleSelectBorder">
                                                            <option>Select One</option>
                                                            <option value="1 Bathroom">1 Bathroom</option>
                                                            <option value="2 Bathroom">2 Bathroom</option>
                                                            <option value="3 Bathroom">3 Bathroom</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>





                                        <label for="exampleSelectBorder">Floor Size</code></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">sqft</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter Floor Size">
                                            <div class="input-group-append">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectBorder">Floor Level</code></label>
                                            <select class="custom-select form-control-border" id="exampleSelectBorder">
                                                <option>Select One</option>
                                                <option value="Ground">Ground</option>
                                            <option value="2nd Floor">2nd Floor</option>
                                            <option value="3rd Floor">3rd Floor</option>
                                            <option value="4th Floor">4th Floor</option>
                                            <option value="5th Floor">5th Floor</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Unit Number</label>
                                            <input type="text" class="form-control" placeholder="Enter Unit Number">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectBorder">Currently Tenanted</code></label>
                                            <select class="custom-select form-control-border" id="exampleSelectBorder">
                                                <option>Select One</option>
                                                <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectBorder">Furnishing</code></label>
                                            <select class="custom-select form-control-border" id="exampleSelectBorder">
                                                <option>Select One</option>
                                                <option value="Fully Furnished">Fully Furnished</option>
                                            <option value="50% Furnished">50% Furnished</option>
                                            </select>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option2">
                                                        <label for="customCheckbox2" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="option3">
                                                        <label for="customCheckbox3" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option4">
                                                        <label for="customCheckbox4" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox5" value="option5">
                                                        <label for="customCheckbox5" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option2">
                                                        <label for="customCheckbox2" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="option3">
                                                        <label for="customCheckbox3" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option4">
                                                        <label for="customCheckbox4" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox5" value="option5">
                                                        <label for="customCheckbox5" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Headline</label>
                                            <input type="text" class="form-control" placeholder="Enter Headline">
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                        </div>

                                        <label>Unit Features</label>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option2">
                                                        <label for="customCheckbox2" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="option3">
                                                        <label for="customCheckbox3" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option4">
                                                        <label for="customCheckbox4" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option4">
                                                        <label for="customCheckbox4" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option2">
                                                        <label for="customCheckbox2" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="option3">
                                                        <label for="customCheckbox3" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option4">
                                                        <label for="customCheckbox4" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option4">
                                                        <label for="customCheckbox4" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option2">
                                                        <label for="customCheckbox2" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="option3">
                                                        <label for="customCheckbox3" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option4">
                                                        <label for="customCheckbox4" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option4">
                                                        <label for="customCheckbox4" class="custom-control-label">Custom Checkbox</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option2">
                                                        <label for="customCheckbox2" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="option3">
                                                        <label for="customCheckbox3" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="option3">
                                                        <label for="customCheckbox3" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option2">
                                                        <label for="customCheckbox2" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="option3">
                                                        <label for="customCheckbox3" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option4">
                                                        <label for="customCheckbox4" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option4">
                                                        <label for="customCheckbox4" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="option2">
                                                        <label for="customCheckbox2" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="option3">
                                                        <label for="customCheckbox3" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option4">
                                                        <label for="customCheckbox4" class="custom-control-label">Custom Checkbox</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox">
                                                        <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="option4">
                                                        <label for="customCheckbox4" class="custom-control-label">Custom Checkbox</label>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Agent Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Agent Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Agent Contact Number</label>
                                            <input type="text" class="form-control" placeholder="Enter Agent Contact Number">
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->

                                <!-- Input addon -->
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Media File</h3>
                                    </div>
                                    <form>
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
                                        <div class="card-footer">
                                            <button style="float:right;" type="submit" class="btn btn-primary">Upload Photo</button>
                                        </div>
                                    </form>


                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>

                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save All Info</button>
                    </div>
                </form>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

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
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
</body>

</html>
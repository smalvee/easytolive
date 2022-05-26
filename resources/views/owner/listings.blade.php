<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KGD-Property</title>
    <!-- css files -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/nice-select.css" />
    <link rel="stylesheet" href="../css/font.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="icon" href="../img/favicon.png" />
</head>

<body>
    <!-- logo -->
    <header>
        <div class="wrap bg-logo">
            <div class="container-fluid">
                <!-- account-manage -->
                <div class="head-cover">
                    <div class="logo-img">
                        <img src="../img/logo.png" alt="logo-image">
                    </div>
                    <div class="account-mng">
                        <div class="dropdownse">
                            <button class="AcBtn dropdown-toggle" type="button" id="dropdownMenuButton">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menus" id="dpm">
                                <a class="dropdown-item" href="Account-Details.php">Account Details</a>
                                <a class="dropdown-item" href="logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                    <div class="listing-item active">
                        <a href="My-Listings.php" class="">Listings</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Create Listing section -->
    <section>
        <div class="wrap bg-create-listing">
            <div class="container">
                <!--multisteps-form-->
                <div class="multisteps-form">
                    <!--progress bar-->
                    <div class="row">
                        <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button">Location</button>
                                <button class="multisteps-form__progress-btn" type="button">Details</button>
                                <button class="multisteps-form__progress-btn" type="button">Media</button>
                                <button class="multisteps-form__progress-btn" type="button">Summary
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- form tabs -->

                    <form class="multisteps-form__form" Action="{{ url('createlist') }}" method='POST' enctype="multipart/form-data">

                        <!-- tab - 1 -->

                        <div class="multisteps-form__panel js-active">
                            <h3 class="multisteps-form__title">Location</h3>
                            <div class="multisteps-form__content">
                                <p>* Please note that Location, Property Type, and District/Estate will not be editable
                                    once your
                                    listing has been published</p>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="row align-items-center my-4">
                                    <div class="col-md-2 pr-0">
                                        <label for="">Property Type</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="nice-select form-control" name="property_type" tabindex="0">
                                            <option value=""></option>
                                            <option value="Residential - Landed">Residential - Landed</option>
                                            <option value="Residential - Condominium">Residential - Condominium</option>
                                            <option value="Residential - HDB">Residential - HDB</option>
                                            <option value="Commercial">Commercial</option>
                                            <option value="Industrial">Industrial</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row align-items-center my-4">
                                    <div class="col-md-2 pr-0">
                                        <label for="">Estate</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="nice-select form-control" name="estate" tabindex="0">
                                            <option value=""></option>
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
                                </div>
                                <div class="row align-items-center my-4">
                                    <div class="col-md-2 pr-0">
                                        <label for="">Districts</label>
                                    </div>
                                    <div class="col-md-6 ">

                                        <select class="nice-select form-control dist-create" name="district"
                                            tabindex="0">
                                            <option value=""></option>
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
                                </div>



                                <div class="row align-items-center my-4">
                                    <div class="col-md-2 pr-0">
                                        <label for="">Name of property</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="property_name">
                                    </div>
                                </div>
                                <div class="row align-items-center my-4">
                                    <div class="col-md-2 pr-0">
                                        <label for="">Address</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="address">
                                    </div>
                                </div>
                                <div class="row align-items-center my-4">
                                    <div class="col-md-2 pr-0">
                                        <label for="">Postal code</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="postal_code">
                                    </div>
                                </div>
                                <div class="row align-items-center my-4">
                                    <div class="col-md-2 pr-0">
                                        <label for="">Nearby MRT</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="mrt">
                                    </div>
                                </div>
                                <div class="row align-items-center my-4">
                                    <div class="col-md-2 pr-0">
                                        <label for="">Nearby School</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="school">
                                    </div>
                                </div>

                                <div class="button-row d-flex mt-5">
                                    <button class="nxt-btn mt-5 ml-auto js-btn-next" type="button"
                                        title="Next">Next</button>
                                </div>
                            </div>
                        </div>



                        <!--
            <div class="multisteps-form__panel js-active" data-animation="scaleIn">
              <h3 class="multisteps-form__title">Location</h3>
              <div class="multisteps-form__content">
                <p>* Please note that Location, Property Type, and District/Estate will not be editable once your
                  listing has been published</p>
                <div class="row align-items-center my-4">
                  <div class="col-md-2 pr-0">
                    <label for="">Location</label>
                  </div>
                  <div class="col-md-6">

                    <select class="nice-select form-control" name="location" tabindex="0">
                      <option value=""><span class="current"></span></option>
                      <option value="Nineteen Shelford">Nineteen Shelford</option>
                      <option value="London">London</option>
                      <option value="New York">New York</option>
                      <option value="Singapore">Singapore</option>
                      <option value="Japan">Japan</option>
                      <option value="Indonesia">Indonesia</option>
                    </select>

                  </div>
                </div>
                <div class="row align-items-center my-4">
                  <div class="col-md-2 pr-0">
                    <label for="">Postal Code</label>
                  </div>
                  <div class="col-md-6">
                    <input type="text" name = "postal_code" class="form-control">
                  </div>
                </div>
                <div class="row align-items-center my-4">
                  <div class="col-md-2 pr-0">
                    <label for="">Property Type</label>
                  </div>
                  <div class="col-md-6">

                    <select class="nice-select form-control" name="property_type" tabindex="0">
                      <option value=""><span class="current"></span></option>
                      <option value="Residential - Landed">Residential - Landed</option>
                      <option value="Residential - Condominium">Residential - Condominium</option>
                      <option value="Residential - HDB">Residential - HDB</option>
                      <option value="Commercial">Commercial</option>
                      <option value="Industry">Industrial</option>
                    </select>

                  </div>
                </div>

                <div class="button-row d-flex mt-5">
                  <button class="nxt-btn mt-5 ml-auto js-btn-next" type="button" title="Next">Next</button>
                </div>
              </div>
            </div>
 -->
                        <!-- tab - 2 -->

                        <div class="multisteps-form__panel" data-animation="scaleIn">
                            <h3 class="multisteps-form__title">Unit Details</h3>
                            <div class="multisteps-form__content">

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-1 col-12 mr-5">
                                        <label for="">Commission Structure</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <input type="radio" id="r1" name="comm_structure" value='Market Sharing'>
                                        <label class="lb" for="r1">Market Sharing</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6">
                                        <input type="radio" id="r2" name="comm_structure" value='Commission Sharing'>
                                        <label class="lb" for="r2">Commission Sharing</label>
                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-1 col-12 mr-5">
                                        <label for="">Commission Percentage</label>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-group mb-3">
                                            <input type="text" name='comm_percentage' class="form-control">
                                            <div class="input-group-append">
                                                <span class="input-group-text">%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-1 col-12 mr-5">
                                        <label for="" class="white-spce">Listing Type</label>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <input type="radio" id="rs1" name="listing_type" value="For Sale">
                                        <label class="lb" for="rs1">For Sale</label>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <input type="radio" id="rs2" name="listing_type" value="For Rent">
                                        <label class="lb" for="rs2">For Rent</label>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <input type="radio" id="rs3" name="listing_type" value="Room Rental">
                                        <label class="lb" for="rs3">Room Rental</label>
                                    </div>
                                </div>


                                <div class="row align-items-center my-3">
                                    <div class="col-lg-1 col-12 mr-5">
                                        <label for="">Price</label>
                                    </div>
                                    <div class="col-lg-4 col-md-6 prepnd">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">SGD</span>
                                            </div>
                                            <input type="text" name="price" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 mt-3 mt-md-0">


                                        <select class="nice-select form-control" name="price_type" tabindex="0">
                                            <option value=""><span class="current"></span></option>
                                            <option value="Starting From">Starting From</option>
                                            <option value="View to Offer">View to Offer</option>
                                            <option value="Negotiable">Negotiable</option>
                                            <option value="Price on Enquiry">Price on Enquiry</option>
                                            <option value="">[leave blank]</option>
                                        </select>

                                        <!--
                    <div class="nice-select form-control" tabindex="0">
                      <span class="current"></span>
                      <ul class="list" name = "price_type">
                        <li data-value="1" class="option" value = "Negotiable">Negotiable</li>
                        <li data-value="1" class="option" value = "Undecided">Undecided</li>
                      </ul>
                    </div> -->


                                    </div>
                                </div>


                                <div class="row align-items-center my-3">
                                    <div class="col-lg-1 col-12 mr-5">
                                        <label for="">Maintenance Fee</label>
                                    </div>
                                    <div class="col-lg-4 col-sm-6 col-9 prepnd">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">SGD</span>
                                            </div>
                                            <input type="text" name="maintenance_fee" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-3 col-3 ">
                                        <p class="mt-2">per month</p>
                                    </div>
                                </div>


                                <div class="row align-items-center my-3">
                                    <div class="col-lg-1 col-12 mr-5">
                                        <label for="">Rooms</label>
                                    </div>
                                    <div class="col-lg-4 col-md-6">


                                        <select class="nice-select form-control" name="bedrooms" tabindex="0">
                                            <option value=""><span class="current">Select Bedrooms</span>
                                            </option>
                                            <option value="1 Bedroom">1 Bedroom</option>
                                            <option value="2 Bedroom">2 Bedroom</option>
                                            <option value="3 Bedroom">3 Bedroom</option>
                                            <option value="4 Bedroom">4 Bedroom</option>
                                        </select>




                                        <!-- <div class="nice-select form-control" tabindex="0">
                      <span class="current">Select bedrooms</span>
                      <ul class="list" name = "bedrooms">
                        <li data-value="1" class="option" value = "1 Bedroom">1 Bedroom</li>
                        <li data-value="1" class="option" value = "2 Bedroom">2 Bedroom</li>
                        <li data-value="1" class="option" value = "3 Bedroom">3 Bedroom</li>
                        <li data-value="1" class="option" value = "4 Bedroom">4 Bedroom</li>
                      </ul>
                    </div> -->


                                    </div>
                                    <div class="col-lg-5 col-md-6 mt-3 mt-md-0">


                                        <select class="nice-select form-control" name="bathrooms" tabindex="0">
                                            <option value=""><span class="current">Select bathrooms</span>
                                            </option>
                                            <option value="1 Bathroom">1 Bathroom</option>
                                            <option value="2 Bathroom">2 Bathroom</option>
                                            <option value="3 Bathroom">3 Bathroom</option>
                                        </select>



                                        <!-- <div class="nice-select form-control" tabindex="0">
                      <span class="current">Select bathrooms</span>
                      <ul class="list" name = "bathrooms">
                        <li data-value="1" class="option" value = "1 Bathroom">1 Bathroom</li>
                        <li data-value="1" class="option" value = "2 Bathroom">2 Bathroom</li>
                        <li data-value="1" class="option" value = "3 Bathroom">3 Bathroom</li>
                      </ul>
                    </div> -->

                                    </div>
                                </div>


                                <div class="row align-items-center my-3">
                                    <div class="col-lg-1 col-12 mr-5">
                                        <label for="" class="white-spce">Floor Size</label>
                                    </div>
                                    <div class="col-lg-4 col-md-6 prepnd">
                                        <div class="input-group ">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">sqft</span>
                                            </div>
                                            <input type="text" name="floor_size" class="form-control" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="row align-items-center my-3">
                                    <div class="col-lg-1 col-12 mr-5">
                                        <label for="" class="white-spce">Floor Level</label>
                                    </div>

                                    <div class="col-12 col-lg-9 ">

                                        <select class="nice-select form-control" name="floor_level" tabindex="0">
                                            <option value=""><span class="current">Select floor level</span>
                                            </option>
                                            <option value="Ground">Ground</option>
                                            <option value="2nd Floor">2nd Floor</option>
                                            <option value="3rd Floor">3rd Floor</option>
                                            <option value="4th Floor">4th Floor</option>
                                            <option value="5th Floor">5th Floor</option>
                                        </select>

                                        <!-- <div class="nice-select form-control" tabindex="0">
                      <span class="current">Select floor level</span>
                      <ul class="list" name = "floor_level">
                        <li data-value="1" class="option" value = "Ground">Ground</li>
                        <li data-value="1" class="option" value = "2nd Floor">2nd Floor</li>
                        <li data-value="1" class="option" value = "3rd Floor">3rd Floor</li>
                        <li data-value="1" class="option" value = "4th Floor">4th Floor</li>
                        <li data-value="1" class="option" value = "5th Floor">5th Floor</li>
                      </ul>
                    </div> -->

                                    </div>
                                </div>


                                <div
                                    class="row align-items-center justify-content-between justify-content-lg-start my-3">
                                    <div class="col-lg-1 col-12 mr-5">
                                        <label for=""><span class="white-spce">Unit Number</span> (Hidden)</label>
                                    </div>
                                    <div class="col-lg-4 col-md-5 col-5 pr-0">
                                        <input type="text" class="form-control" name="unit_number_floor"
                                            placeholder="Floor ">
                                    </div>
                                    <div class="col-lg-1 col-md-1 col-1 p-0 p-lg-3">
                                        <hr>
                                    </div>
                                    <div class="col-lg-4 col-md-5 col-5 pl-0">
                                        <input type="text" class="form-control" name="unit_number_unit"
                                            placeholder="Unit">
                                    </div>

                                </div>


                                <div class="row align-items-center my-3">
                                    <div class="col-lg-1 col-12 mr-5">
                                        <label for="">Currently Tenanted</label>
                                    </div>

                                    <div class="col-lg-4 col-md-6">

                                        <select class="nice-select form-control" name="currently_tenanted"
                                            tabindex="0">
                                            <option value=""><span class="current">Select tenancy</span>
                                            </option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>


                                        <!-- <div class="nice-select form-control" tabindex="0">
                      <span class="current">Select tenancy</span>
                      <ul class="list" name = "currently_tenanted">
                        <li data-value="1" class="option" value = "Yes">Yes</li>
                        <li data-value="1" class="option" value = "No">No </li>
                      </ul>
                    </div> -->


                                    </div>
                                </div>

                                <div class="row align-items-center my-3">
                                    <div class="col-lg-1 col-12 mr-5">
                                        <label for="" class="white-spce">Furnishing</label>
                                    </div>

                                    <div class="col-12 col-lg-9 ">

                                        <select class="nice-select form-control" name="furnishing" tabindex="0">
                                            <option value=""><span class="current">Select furnishing</span>
                                            </option>
                                            <option value="Fully Furnished">Fully Furnished</option>
                                            <option value="50% Furnished">50% Furnished</option>
                                        </select>


                                        <!-- <div class="nice-select form-control" tabindex="0">
                      <span class="current">Select furnishing</span>
                      <ul class="list" name = "furnishing">
                        <li data-value="1" class="option" value = "Fully Furnished">Fully Furnished</li>
                        <li data-value="1" class="option" value = "50% Furnished">50% Furnished</li>
                      </ul>
                    </div> -->

                                    </div>
                                </div>

                                <div class="row my-3" id="chkbox">
                                    <div class="col-lg-1 col-12 mr-5">
                                    </div>

                                    <div class="col-lg-3 col-md-5 col-sm-6  ">
                                        <input type="checkbox" name="fm[]" id="rr1" value="Audio System" />
                                        <label for="rr1">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div> Audio
                                            System
                                        </label>
                                        <input type="checkbox" name="fm[]" id="rr2" value="Bed" />
                                        <label for="rr2">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div> Bed
                                        </label>
                                        <input type="checkbox" name="fm[]" id="rr3" value="Cable TV" />
                                        <label for="rr3">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div> Cable
                                            TV
                                        </label>
                                        <input type="checkbox" name="fm[]" id="rr4" value="DVD Player" />
                                        <label for="rr4">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div> DVD
                                            Player
                                        </label>
                                        <input type="checkbox" name="fm[]" id="rr5" value="Dining Room Furniture" />
                                        <label for="rr5">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div> Dining
                                            Room Furniture
                                        </label>
                                        <input type="checkbox" name="fm[]" id="rr6" value="Dishwasher" />
                                        <label for="rr6">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                            Dishwasher
                                        </label>
                                        <input type="checkbox" name="fm[]" id="rr7" value="Dryer" />
                                        <label for="rr7">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div> Dryer
                                        </label>
                                        <input type="checkbox" name="fm[]" id="rr8" value="Fridge" />
                                        <label for="rr8">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div> Fridge
                                        </label>
                                    </div>


                                    <div class="col-lg-3 col-md-5 col-sm-6 ">
                                        <input type="checkbox" name="fm[]" id="rr9" value="Internet Connection" />
                                        <label for="rr9">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                            Internet Connection
                                        </label>
                                        <input type="checkbox" name="fm[]" id="rr10" value="Iron / Ironing Board" />
                                        <label for="rr10">
                                            <div class="ok"><img src="img/ok-icon.svg"
                                                    alt="Iron / Ironing Board"></div> Iron / Ironing Board
                                        </label>
                                        <input type="checkbox" name="fm[]" id="rr11" value="Kitchen Utensils" />
                                        <label for="rr11">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                            Kitchen Utensils
                                        </label>
                                        <input type="checkbox" name="fm[]" id="rr12" value="Living Room Furniture" />
                                        <label for="rr12">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div> Living
                                            Room Furniture
                                        </label>
                                        <input type="checkbox" name="fm[]" id="rr13" value="Oven / Microwave" />
                                        <label for="rr13">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div> Oven /
                                            Microwave
                                        </label>
                                        <input type="checkbox" name="fm[]" id="rr14" value="Television" />
                                        <label for="rr14">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                            Television
                                        </label>
                                        <input type="checkbox" name="fm[]" id="rr15" value="Vacuum Cleaner" />
                                        <label for="rr15">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div> Vacuum
                                            Cleaner
                                        </label>
                                        <input type="checkbox" name="fm[]" id="rr16" value="Washing Machine" />
                                        <label for="rr16">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                            Washing Machine
                                        </label>

                                    </div>
                                </div>




                                <div class="row my-3">
                                    <div class="col-lg-1 col-12 mr-5">
                                        <label for="" class="white-spce">Headline</label>
                                    </div>

                                    <div class="col-12 col-lg-9 ">
                                        <input type="text" id="hedar" name="headline" class="form-control"
                                            placeholder="Max 70 characters">
                                        <p class="d-block text-right m-0"><span id="headline">0</span>/70</p>
                                    </div>
                                </div>


                                <div class="row my-3">
                                    <div class="col-lg-1 col-12 mr-5">
                                        <label for="" class="white-spce">Description</label>
                                    </div>

                                    <div class="col-12 col-lg-9 ">
                                        <textarea id="txtar" class="form-control" name="description" id="" style="height:150px"
                                            placeholder="Max 2000 characters"></textarea>
                                        <p class="d-block text-right m-0"><span id="textarea">0</span>/2000</p>
                                    </div>
                                </div>




                                <div class="row my-3" id="chkbox">
                                    <div class="col-lg-1 col-12 mr-5">
                                        <label for="" class="white-spce">Unit Features</label>
                                    </div>

                                    <div class="col-lg-3 col-md-5 col-sm-6  ">
                                        <input type="checkbox" name="uf[]" id="c1" value="Air-conditioning" />
                                        <label for="c1">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                            Air-conditioning
                                        </label>
                                        <input type="checkbox" name="uf[]" id="c2" value="Balcony" />
                                        <label for="c2">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                            Balcony
                                        </label>
                                        <input type="checkbox" name="uf[]" id="c3" value="Cooker Hob/Hood" />
                                        <label for="c3">
                                            <div class="ok"><img src="img/ok-icon.svg"
                                                    alt="Cooker Hob/Hood"></div> Cooker Hob/Hood
                                        </label>
                                        <input type="checkbox" name="uf[]" id="c4" value="Corner Unit" />
                                        <label for="c4">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div> Corner
                                            Unit
                                        </label>
                                        <input type="checkbox" name="uf[]" id="c5" value="High Floor" />
                                        <label for="c5">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div> High
                                            Floor
                                        </label>
                                    </div>


                                    <div class="col-lg-3 col-md-5 col-sm-6 ">
                                        <input type="checkbox" name="uf[]" id="c6" value="Intercom" />
                                        <label for="c6">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                            Intercom
                                        </label>
                                        <input type="checkbox" name="uf[]" id="c7" value="Park/Greenery View" />
                                        <label for="c7">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                            Park/Greenery View
                                        </label>
                                        <input type="checkbox" name="uf[]" id="c8" value="Penthouse" />
                                        <label for="c8">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                            Penthouse
                                        </label>
                                        <input type="checkbox" name="uf[]" id="c9" value="Renovated" />
                                        <label for="c9">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                            Renovated
                                        </label>
                                        <input type="checkbox" name="uf[]" id="c10" value="Water Heater" />
                                        <label for="c10">
                                            <div class="ok"><img src="img/ok-icon.svg" alt=""></div> Water
                                            Heater
                                        </label>

                                    </div>
                                </div>


                                <div class="viewmore">
                                    <div class="row my-3" id="chkbox">
                                        <div class="col-lg-1 col-12 mr-5">
                                        </div>

                                        <div class="col-lg-3 col-md-5 col-sm-6 fdr ">
                                            <input type="checkbox" name="uf[]" id="c11" value="Bathtub" />
                                            <label for="c11">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Bathtub
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c12" value="Bombshelter" />
                                            <label for="c12">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Bombshelter
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c13" value="City View" />
                                            <label for="c13">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                City View
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c14" value="Colonial Building" />
                                            <label for="c14">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Colonial Building
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c15" value="Garage" />
                                            <label for="c15">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Garage
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c16" value="Ground Floor" />
                                            <label for="c16">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Ground Floor
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c17" value="Hairdryer" />
                                            <label for="c17">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Hairdryer
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c18" value="Jacuzzi" />
                                            <label for="c18">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Jacuzzi
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c19" value="Lake View" />
                                            <label for="c19">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Lake View
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c20" value="Low Floor" />
                                            <label for="c20">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Low Floor
                                            </label>
                                        </div>


                                        <div class="col-lg-3 col-md-5 col-sm-6 nbdr fdr">
                                            <input type="checkbox" name="uf[]" id="c21" value="Maidsroom" />
                                            <label for="c21">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Maidsroom
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c22" value="Original Condition" />
                                            <label for="c22">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Original Condition
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c23" value="Outdoor Patio" />
                                            <label for="c23">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Outdoor Patio
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c24" value="Private Garden" />
                                            <label for="c24">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Private Garden
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c25" value="Private Pool" />
                                            <label for="c25">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Private Pool
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c26" value="Roof Terrace" />
                                            <label for="c26">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Roof Terrace
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c27" value="Sea View" />
                                            <label for="c27">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Sea View
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c28" value="Swimming Pool View" />
                                            <label for="c28">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Swimming Pool View
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c29" value="Terrace" />
                                            <label for="c29">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Terrace
                                            </label>
                                            <input type="checkbox" name="uf[]" id="c30" value="Walk-in Wardrobe" />
                                            <label for="c30">
                                                <div class="ok"><img src="img/ok-icon.svg" alt=""></div>
                                                Walk-in Wardrobe
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" id="v-btn">View More</button>


                                <div class="row mt-3">
                                    <div class="col-lg-2 col-12 ">
                                        <label for="">Agent Name</label>
                                    </div>

                                    <div class="col-12 col-lg-6 ">
                                        <input type="text" name="agent_name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-lg-2 col-12 ">
                                        <label for="">Agent Contact Number</label>
                                    </div>

                                    <div class="col-12 col-lg-6 ">
                                        <input type="text" name="agent_number" class="form-control">
                                    </div>
                                </div>



                                <div class="d-flex align-items-center justify-content-end mt-5">
                                    <button class="nxt-btn js-btn-prev" type="button" title="Next">Back</button>
                                    <button class="nxt-btn js-btn-next" type="button" title="Next">Next</button>
                                </div>
                            </div>
                        </div>










                        <!-- tab - 3 -->

                        <div class="multisteps-form__panel" data-animation="scaleIn">
                            <h3 class="multisteps-form__title">Media Files</h3>
                            <div class="multisteps-form__content file_up">



                                <div class="box has-advanced-upload">
                                    <div id="uploads"></div>
                                    <div class="box__input" id="dropzone">
                                        <img src="img/upload.svg" alt="">


                                        <p>Drag & drop photos to upload .jpg , .png (up to 10Mb each)</p>
                                        <label>
                                            <strong>Choose a file</strong>
                                            <span class="box__dragndrop"> or drag it here</span>.
                                        </label>
                                        <input type="file" name="myImage[]" multiple id="file" class="box__file"
                                            data-multiple-caption="{count} files selected" style="display: none;" />
                                        <!-- <input type="submit" name="upload" value="Upload" class="box__button"/> -->
                                        <label for="file" class="box__button">Upload</label>


                                    </div>
                                </div>


                                <!--  <div class="box has-advanced-upload">


                  <div class="box__input">

                    <img src="img/upload.svg" alt="">


                    <p>Drag & drop photos to upload .jpg , .png (up to 10Mb each)</p>
                    <label >
                      <strong>Choose a file</strong>
                      <span class="box__dragndrop"> or drag it here</span>.
                      </label>
                       <input type="file" name="myImage[]" multiple id="file" class="box__file"
                      data-multiple-caption="{count} files selected" style="display: none;" />
                      <input type="submit" name="upload" value="Upload" class="box__button"/>
                    <label for="file" class="box__button">Upload</label>

                  </div>


                  <div class="box__uploading">Uploading…</div>
                  <div class="box__success">
                    Done! <a href="#" class="box__restart" role="button">Upload more?</a>
                  </div>
                  <div class="box__error">
                    Error! <span></span>.
                    <a href="#" class="box__restart" role="button">Try again!</a>
                  </div>
                  <input type="hidden" name="ajax" value="1" />
                </div> -->

                                <div>
                                    <div class="d-flex align-items-center justify-content-end mt-5">
                                        <button class="nxt-btn js-btn-prev" type="button" title="Next">Back</button>
                                        <button class="nxt-btn js-btn-next" type="button" title="Next">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>   

                        <!-- tab - 4 -->

                        <div class="multisteps-form__panel" data-animation="scaleIn">
                            <h3 class="multisteps-form__title">Summary</h3>
                            <div class="multisteps-form__content text-center sumitListing">
                                <p id="sub_text">Your listing details will be published once you submit. Note that you
                                    will only be able to edit certain details in your listing.</p>

                                <button class="subBtn" name='sbtn' id="sbtn" type="submit">Submit
                                    Listing</button>
                                <div>
                                    <div class="d-flex align-items-center justify-content-end mt-5">
                                        <button class="nxt-btn js-btn-prev" type="button" title="Next">Back</button>

                                    </div>

                                    <div class="button-row d-flex mt-4">
                                        <!-- <button class="nxt-btn js-btn-prev" type="button" title="Prev">Prev</button> -->
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- js files -->
    <script src="../js/popper-1.14.7.min.js"></script>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap-4.3.1.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/step-form.js"></script>
    <script src="../js/inputCreateListing.js"></script>
    <script src="../js/file-upload.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/js_script.js" type="text/javascript"></script>
</body>

</html>

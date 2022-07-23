<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KGD-Property</title>
    <style>
        .copyright {
            text-align: center;
            margin-top: 30px;
            color: #696969;
            font-size: 15px;
            font-family: "AnyConv.com__AvenirLTStd-Roman";
        }

    </style>
    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/nice-select.css" />
    <link rel="stylesheet" href="css/font.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="img/favicon.png" />
</head>

<body>
    <!-- logo -->
    <header>
        <div class="wrap bg-logo">
            <div class="container-fluid">
                <!-- account-manage -->
                <div class="head-cover">
                    <div class="logo-img">
                        <img src="img/logo.png" alt="logo-image">
                    </div>
                    <div class="account-mng">
                        <div class="dropdownse">
                            <button class="AcBtn dropdown-toggle" type="button" id="dropdownMenuButton">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="dropdown-menus" id="dpm">
                                <a class="dropdown-item" href="Account-Details.php">Account Details</a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
        
                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                                <a class="dropdown-item" href="logout.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                    <div class="listing-item">
                        <a href="createlisting/{{ Auth::user()->id }}" class="">Listings</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Account Details section -->
    <section>

        <?php
        use App\Models\AccountDetails;
        $check = null;

        $idt = Auth::user()->id;

        $account_history = AccountDetails::where('main_id', $idt)->get();
        ?>

        @foreach ($account_history as $item)
            <?php $check = $item->main_id; ?>
        @endforeach

        <div class="wrap bg-AccDetails ">
            <div class="container ">
                <h5 class="AccDetails-title">Account Details</h5>
                <div class="Account-Details">
                    <h5 class="details-title">Login Information</h5>

                    <div class="row align-items-center my-3">
                        <div class="col-md-2">
                            <label for="">Login id </label>
                        </div>
                        <div class="col-md-6">
                            <label type="email"> {{ Auth::user()->email }}</label>
                        </div>
                    </div>

                    <h5 class="details-title">Personal Information</h5>

                    @foreach ($account_history as $item)
                        <div class="row align-items-center my-3">
                            <div class="col-md-2">
                                <label for="title">Title </label>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label>{{ $item->title }}</option>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center my-3">
                            <div class="col-md-2">
                                <label for="">First Name </label>
                            </div>
                            <div class="col-md-6">
                                <label type="text" name="first_name">{{ $item->first_name }}</label>
                            </div>
                        </div>

                        <div class="row align-items-center my-3">
                            <div class="col-md-2">
                                <label for="">Last Name </label>
                            </div>
                            <div class="col-md-6">
                                <label type="text" name="last_name">{{ $item->last_name }} </label>
                            </div>
                        </div>
                        <h5 class="details-title">Contact Information</h5>

                        <div class="row align-items-center my-3">
                            <div class="col-md-2">
                                <label for="">Email Address</label>
                            </div>
                            <div class="col-md-6">
                                <label type="email" name="email"> {{ Auth::user()->email }}</label>
                            </div>
                        </div>

                        <div class="row align-items-center my-3">
                            <div class="col-md-2">
                                <label for="">Country Code Number </label>
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <label>{{ $item->country_code }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center my-3">
                            <div class="col-md-2">
                                <label for="">Mobile Phone Number </label>
                            </div>
                            <div class="col-md-3">
                                <label type="text" name="mobile">{{ $item->mobile_number }}</label>
                            </div>
                        </div>


                        <div class="row align-items-center my-3">
                            <div class="col-md-2">
                                <label for="">Alternative Phone Number</label>
                            </div>
                            <div class="col-md-6">
                                <label type="text" name="alternative_mobile">{{ $item->alt_number }}</label>
                            </div>
                        </div>




                        <div class="row align-items-center my-3">
                            <div class="col-md-2 mb-2 mb-md-0">
                                <label for="">Profile Picture</label>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <img src='../uploads/profile/{{ $item->profile_picture }}' height='150' width='130' class='img-thumnail' alt='profile-img' />
                            </div>
                        </div>
                    @endforeach

                    <?php
                        if ($check == NULL) { ?>

                    <a href="editprofile/{{ Auth::user()->id }}"><button type="submit" name="submit" id="btns"
                            class="fr-btn ml-auto">Complete Profile</button></a>
                    <?php }
                        else { ?>
                    <a href="editprofile/{{ Auth::user()->id }}"><button type="submit" name="submit" id="btns"
                            class="fr-btn ml-auto">Edit Profile</button></a>
                    <?php }
                    ?>


                    {{-- <a href="editprofile/{{ Auth::user()->id }}"><button type="submit" name="submit" id="btns"
                            class="fr-btn ml-auto">Edit Profile</button></a> --}}
                </div>

            </div>
            <footer>
                <p class="copyright">Designed by Webdorks</p>
            </footer>
        </div>
    </section>


    <!-- js files -->
    <script src="js/popper-1.14.7.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap-4.3.1.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(".custom-file-inp").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-lab").addClass("selected").html(fileName += ' uploaded');

        });

        // let btnsv = document.getElementById('btns')
        // btnsv.addEventListener('click', function (e) {
        //   if (btnsv.innerHTML === 'Save Changes') {
        //     btnsv.innerHTML = 'Changes Saved'
        //     btnsv.classList.add('tgl-button')
        //   }
        // })
    </script>

    <script>
        $(document).ready(function() {
            $('#submit').click(function() {



                var extension = $('#pro-img').val().split('.').pop().toLowerCase();
                if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                    alert('Invalid Image File');
                    $('#pro-img').val('');
                    return false;
                }

            });
        });
    </script>

</body>

</html>

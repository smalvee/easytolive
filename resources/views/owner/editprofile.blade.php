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
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        <li class="dropdown-item"><i class="icon-power mr-2"></i> {{ __('Log Out') }}
                                        </li>
                                    </x-dropdown-link>
                                </form>
                                {{-- <a class="dropdown-item" href="logout.php">Log Out</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="listing-item">
                        <a href="Account-Details.php" class="">Account</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Account Details section -->

    <?php
    use App\Models\AccountDetails;
    $check = null;

    $idt = Auth::user()->id;

    $account_history = AccountDetails::where('main_id', $idt)->get();
    ?>

    @foreach ($account_history as $item)
        <?php $check = $item->main_id; ?>
    @endforeach

    <section>
        <div class="wrap bg-AccDetails ">
            <div class="container ">
                <h5 class="AccDetails-title">Edit Account Details</h5>

                <div class="Account-Details">
                    <h5 class="details-title">Login Information</h5>

                    <div class="row align-items-center my-3">
                        <div class="col-md-2">
                            <label for="">Login id </label>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" value=" {{ Auth::user()->email }}" readonly>
                        </div>
                    </div>

                    <div class="row align-items-center my-3">
                        <div class="col-md-2">
                            <label for="">Name </label>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" value=" {{ Auth::user()->name }}" readonly>
                        </div>
                    </div>

                    <form action="{{ url('account') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5 class="details-title">Personal Information</h5>
                        <input type="hidden" value="{{ Auth::user()->id }}" name="main_id">

                        <?php
                            if ($check == NULL) { ?>
                        <button type="submit" class="fr-btn ml-auto">Enable Editing</button>
                        <?php }
                            ?> 
                    </form>



                    @foreach ($account_history as $item)
                        <form action="{{ url('account_update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row align-items-center my-3">
                                <div class="col-md-2">
                                    <label for="title">Title </label>
                                    <input type="hidden" name="main_id" value="{{ $item->main_id }}">
                                </div>
                                <div class="col-md-6">
                                    <div>


                                        <select class="nice-select form-control" name="title" tabindex="0">
                                            <option value="{{ $item->title }}"><span class="current">{{ $item->title }}</span></option>
                                            <option value="Ms.">Ms.</option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Miss.">Miss</option>
                                            <option value="Madam.">Madam</option>
                                            <option value="Mr.">Mr.</option>
                                            <option value="Dr.">Dr.</option>
                                        </select>


                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center my-3">
                                <div class="col-md-2">
                                    <label for="">First Name </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="first_name" class="form-control" value="{{ $item->first_name }}">
                                </div>
                            </div>

                            <div class="row align-items-center my-3">
                                <div class="col-md-2">
                                    <label for="">Last Name </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="last_name" class="form-control" value="{{ $item->last_name }}">
                                </div>
                            </div>
                            <h5 class="details-title">Contact Information</h5>

                            <div class="row align-items-center my-3">
                                <div class="col-md-2">
                                    <label for="">Email Address</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
                                </div>
                            </div>

                            <div class="row align-items-center my-3">
                                <div class="col-md-2">
                                    <label for="">Mobile Phone Number </label>
                                </div>
                                <div class="col-md-3">

                                    <div>
                                        <select class=" nice-select nice-select2 form-control" name="country_code">
                                            <option value="Singapore (+65)"><span class="current"
                                                    name="title">{{ $item->country_code }}</span></option>
                                            <option value="Singapore (+65)">Singapore (+65)</option>

                                        </select>
                                    </div>


                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="mobile_number" class="form-control" value="{{ $item->mobile_number }}">
                                </div>
                            </div>


                            <div class="row align-items-center my-3">
                                <div class="col-md-2">
                                    <label for="">Alternative Phone Number</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="alt_number" class="form-control" value="{{ $item->alt_number }}">
                                </div>
                            </div>

                            <button type="submit"  class="fr-btn ml-auto">Update Information</button>
                        </form>

                        <form action="{{ url('account_photo_update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- <h5 class="details-title">Profile Picture</h5> -->
                            <div class="row align-items-center my-3">
                                <div class="col-md-2 mb-2 mb-md-0">
                                    <label for="">Profile Picture</label>
                                    <input type="hidden" name="main_id" value="{{ $item->main_id }}">
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <img src='../uploads/profile/{{ $item->profile_picture }}' height='150'
                                        width='130' class='img-thumnail' alt='profile-img' />
                                    <input type="file" class="custom-file-inp" id="pro-img" name="profile_picture" required>
                                    <label class="custom-file-lab proimge" for="pro-img">Select New Photo</label>
                                </div>
                            </div>
                            <button type="submit" name="p_update" class="fr-btn ml-auto">Update Profile Photo</button>
                        </form>
                    @endforeach

                </div>

            </div>
            @include('admin.footer')
        </div>
    </section>



    <!-- js files -->
    <script src="../js/popper-1.14.7.min.js"></script>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap-4.3.1.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/custom.js"></script>
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

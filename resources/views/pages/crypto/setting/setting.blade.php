<x-base-layout>
    <style>
        .formsecurity {
            position: relative;
            bottom: 50px;
            left: 220px;
            width: 60%;
        }


        .active a {
            background: transparent !important;


        }

        .nav-tabs .active {
            border-bottom: 2px solid #2B014C;
        }

        .ab {
            color: #2B014C;
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 22px;
        }

        .heading1 {
            display: flex;
            margin-left: 390px;
        }

        .ab {
            font-family: 'Neue Haas Grotesk Text Pro', sans-serif !important;
            font-style: normal !important;
            font-weight: 400 !important;
            font-size: 18px !important;
            float: left;
            color: black;
            text-align: center;
            padding: 15px;
            text-decoration: none;
            line-height: 25px;
            border-radius: 4px;
        }

        .buttonhandling {
            padding-left: 100px;
            padding-right: 100px;
        }

        .card-title-text {
            font-size: 18px !important;
        }

        /* Full-width input fields */

        /* Set a style for all buttons */
        button {
            background-color: #F4B42A;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            /* margin-left: 350px; */
            /* margin-top: 10px; */
        }



        a:hover {
            color: #2B014C;
        }

        .card-body {
            padding-bottom: 30px;
        }

        .crypto form .card {
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .crypto form {
            background: #FFFFFF;
            /* drop */

            box-shadow: 2px 2px 10px rgba(210, 209, 223, 0.3);
            border-radius: 10px;
        }


        button {
            border-radius: 10px;
        }


        .tbody tr:hover {
            background-color: transparent;
        }

        table {
            min-width: 800px;
            overflow-x: auto;
            table-layout: auto;
        }

        #transaction_table tbody tr td {
            padding-top: 18px;
            padding-bottom: 18px;

        }

        table thead tr {
            height: 60px;
            background: transparent;
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 600px;
            }
        }
    </style>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-12">
            <h1 class="dash-title" style="font-size: 30px !important;">Settings </h1>
        </div>
    </div>
    @if(session('status') && session('status') == 'success')
    <div class="alert alert-success" role="alert">
        {{ session('data') }}
    </div>
    @elseif(session('status') && session('status') == 'error')
    <div class="alert alert-danger" role="alert">
        {{ session('data') }}
    </div>
    @endif


    <div id="exTab2" class="containersecond crypto">
        <ul class="nav nav-tabs">
            <li class="active1 active">
                <a href="#1" class="ab" data-toggle="tab">Portfolio</a>
            </li>
            <li class=""><a href="#2" class="ab" data-toggle="tab">Tax Information</a>
            </li>
            <li class=""><a href="#3" class="ab" data-toggle="tab">Team</a>
            </li>
            <li class=""><a href="#4" class="ab" data-toggle="tab">Invoices</a>
            </li>
        </ul>

        <div class="tab-content " style="
                    margin-top: 32px;
                ">

            <div class="tab-pane active" id="1">
                <form action="" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">

                            <div class="form__group" style="
                                position: relative;
                                ">
                                <svg style="position: absolute;top: 24px;right: 12px;" class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_348_62)">
                                        <path d="M12.9 6.85799L17.142 11.101L7.242 21H3V16.757L12.9 6.85699V6.85799ZM14.314 5.44399L16.435 3.32199C16.6225 3.13452 16.8768 3.02921 17.142 3.02921C17.4072 3.02921 17.6615 3.13452 17.849 3.32199L20.678 6.15099C20.8655 6.33852 20.9708 6.59283 20.9708 6.85799C20.9708 7.12316 20.8655 7.37746 20.678 7.56499L18.556 9.68599L14.314 5.44399Z" fill="#6F6F6F" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_348_62">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>


                                <!-- <input type="email" id="email" class="form__field" value="32A9XzMhxirMqMeyW7GxNJNJ4UVqiDwDm4" readonly style="
                                        padding-left: 15px;
                                        padding-right: 45px;
                                    "> -->
                                <input type="text" id="Portfolio Name" value="" name="Portfolio Name" class="form__field" placeholder="Portfolio Name" style="
                                        padding-left: 15px;
                                        padding-right: 45px;
                                    ">
                                <label for="Portfolio Name" class="form__label">Portfolio Name</label>
                            </div>


                            {{ theme()->getView('partials/widgets/form/input/_select',
                                array( 
                                        'type' => 'select' ,
                                        'name' => 'base_currency' ,
                                        'item' => array(
                                        'ir1' =>  'IR',
                                        'bs1'=>   'BS',
                                        'ks1' =>  'KS'
                                        ) ,

                                        'placeholder' => 'Base currency' ,
                                        'required'=> true , 'id' => ''
                                    )
                                )
                            }}



                            {{ theme()->getView('partials/widgets/form/input/_select',
                                array( 
                                        'type' => 'select' ,
                                        'name' => 'home_country' ,
                                        'item' => array(
                                        'ir3' =>  'IR',
                                        'bs3'=>   'BS',
                                        'ks3' =>  'KS'
                                        ) ,

                                        'placeholder' => 'Home country' ,
                                        'required'=> true , 'id' => ''
                                    )
                                )
                            }}


                            {{ theme()->getView('partials/widgets/form/input/_select',
                                array( 
                                        'type' => 'select' ,
                                        'name' => 'cost_basis_method' ,
                                        'item' => array(
                                        'ir5' =>  'IR',
                                        'bs5'=>   'BS',
                                        'ks5' =>  'KS'
                                        ) ,

                                        'placeholder' => 'Cost basis method' ,
                                        'required'=> true , 'id' => ''
                                    )
                                )
                            }}

                            {{ theme()->getView('partials/widgets/form/input/_text',
                                array( 
                                        'type' => 'date' ,
                                        'name' => 'tax_reporting_year' ,
                                        'placeholder' => 'Tax Reporting Year' ,
                                        'required'=> true , 'id' => ''
                                    )
                                )
                            }}

                            {{ theme()->getView('partials/widgets/form/input/_select',
                                array( 
                                        'type' => 'select' ,
                                        'name' => 'timezone_for_reports' ,
                                        'item' => array(
                                        'ir6' =>  'IR',
                                        'bs6'=>   'BS',
                                        'ks6' =>  'KS'
                                        ) ,

                                        'placeholder' => 'Timezone for reports' ,
                                        'required'=> true , 'id' => ''
                                    )
                                )
                            }}

                            <div class="d-flex  justify-content-between " style="margin-top: 40px;">
                                <div class="">
                                    <p class="f-16-fig" style="color: #6F6F6F;">Realize gains on crypto → crypto trades?</p>
                                </div>
                                <div class="toggleWrapper">
                                    <input type="checkbox" name="toggle2" class="mobileToggle" id="toggle2">
                                    <label for="toggle2"></label>
                                </div>

                            </div>

                            <div class="d-flex  justify-content-between" style="margin-top: 5px;">
                                <div class="">
                                    <p class="f-16-fig" style="color: #6F6F6F;">Realize gains on liquidity transactions?</p>
                                </div>
                                <div class="toggleWrapper">
                                    <input type="checkbox" name="toggle2" class="mobileToggle" id="toggle2">
                                    <label for="toggle2"></label>
                                </div>

                            </div>

                            <div class="d-flex  justify-content-between" style="margin-top: 5px;">
                                <div class="">
                                    <p class="f-16-fig" style="color: #6F6F6F;">Treat airdrops as income?</p>
                                </div>
                                <div class="toggleWrapper">
                                    <input type="checkbox" name="toggle2" class="mobileToggle" id="toggle2">
                                    <label for="toggle2"></label>
                                </div>

                            </div>

                            <div class="d-flex  justify-content-between" style="margin-top: 5px;">
                                <div class="">
                                    <p class="f-16-fig" style="color: #6F6F6F;">Treat forks as income?</p>
                                </div>
                                <div class="toggleWrapper">
                                    <input type="checkbox" name="toggle2" class="mobileToggle" id="toggle2">
                                    <label for="toggle2"></label>
                                </div>

                            </div>

                            <div class="d-flex  justify-content-between" style="margin-top: 5px;">
                                <div class="">
                                    <p class="f-16-fig" style="color: #6F6F6F;">Treat mining as income?</p>
                                </div>
                                <div class="toggleWrapper">
                                    <input type="checkbox" name="toggle2" class="mobileToggle" id="toggle2">
                                    <label for="toggle2"></label>
                                </div>

                            </div>

                            <div class="d-flex  justify-content-between" style="margin-top: 5px;">
                                <div class="">
                                    <p class="f-16-fig" style="color: #6F6F6F;">Treat rewards as income?</p>
                                </div>
                                <div class="toggleWrapper">
                                    <input type="checkbox" name="toggle2" class="mobileToggle" id="toggle2">
                                    <label for="toggle2"></label>
                                </div>

                            </div>

                            <div class="d-flex  justify-content-between" style="margin-top: 5px;">
                                <div class="">
                                    <p class="f-16-fig" style="color: #6F6F6F;">Treat transfer fees as disposals?</p>
                                </div>
                                <div class="toggleWrapper">
                                    <input type="checkbox" name="toggle2" class="mobileToggle" id="toggle2">
                                    <label for="toggle2"></label>
                                </div>

                            </div>

                            <div class="d-flex  justify-content-between" style="margin-top: 5px;">
                                <div class="">
                                    <p class="f-16-fig" style="color: #6F6F6F;">Treat other gains as capital gains</p>
                                </div>
                                <div class="toggleWrapper">
                                    <input type="checkbox" name="toggle2" class="mobileToggle" id="toggle2">
                                    <label for="toggle2"></label>
                                </div>

                            </div>

                            <div class="d-flex  justify-content-between" style="margin-top: 5px;">
                                <div class="">
                                    <p class="f-16-fig" style="color: #6F6F6F;">Wallet based cost-tracking</p>
                                </div>
                                <div class="toggleWrapper">
                                    <input type="checkbox" name="toggle2" class="mobileToggle" id="toggle2">
                                    <label for="toggle2"></label>
                                </div>

                            </div>



                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form__group">
                                        <button class="btn f-16-neu-400-fig" type="submit" style="background: #F4B42A; color:#fff; font-weight:700 !important;">Save</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form__group">
                                        <button class="btn f-16-neu-400-fig" data-bs-toggle="modal" data-bs-target="#deleteCashModal" style="border: 1px solid #BFBFBF; background: #FFFFFF; color: #BFBFBF">Delete cash</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>

            </div>
            <div class="tab-pane" id="2">
                <form action="" method="post">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <p class="f-16-fig" style="color:#6F6F6F">You do not need to fill in anything on this page unless you want this information to be shown on your tax reports.</p>

                            <div class="form__group">
                                <input type="text" id="name" name="name" class="form__field" placeholder="Name">
                                <label for="name" class="form__label">Name</label>
                            </div>

                            <div class="form__group">
                                <input type="number" id="personal_id_number" name="personal_id_number" class="form__field" placeholder="Personal ID Number">
                                <label for="personal_id_number" class="form__label">Personal ID Number</label>
                            </div>

                            <div class="form__group">
                                <input type="number" id="phone_number" name="phone_number" class="form__field" placeholder="Phone Number">
                                <label for="phone_number" class="form__label">Phone Number</label>
                            </div>

                            <div class="form__group">
                                <input type="text" id="postal_code" name="postal_code" class="form__field" placeholder="Postal Code">
                                <label for="postal_code" class="form__label">Postal Code</label>
                            </div>

                            <div class="form__group">
                                <input type="text" id="city" name="city" class="form__field" placeholder="city">
                                <label for="city" class="form__label">City</label>
                            </div>

                            <div class="form__group">
                                <button type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="3">
                <div class="d-flex justify-content-end">
                    <button class="btn p-2" data-bs-toggle="modal" data-bs-target="#inviteFriendsModal" style="background: #F4B42A;  color:#fff;padding-left:22px !important;padding-right:17px !important;padding-top:13px !important;padding-bottom:11px !important;width: auto;">
                        <span>
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" style="
                                        align-self: center;
                                    ">
                                <path d="M6 6V0H8V6H14V8H8V14H6V8H0V6H6Z" fill="white" />
                            </svg>
                        </span>
                        <span class="f-16-neu-400-fig" style="color:#fff;padding-left:10px">Invite Friends</span>
                    </button>
                </div>
                <div class="table-wapper-crypto" style="
                        border-radius: 10px;
                        padding: 20px;
                        background: #fff;
                        overflow: auto;
                    ">
                    <table id="transaction_table">
                        <thead>
                            <tr>
                                <td>
                                    <p class="f-20-fig-questrial text-dark">Member</p>

                                </td>


                                <td>
                                    <p class="f-20-fig-questrial text-dark">Member Email</p>

                                </td>

                                <td>
                                    <p class="f-20-fig-questrial text-dark">Status</p>

                                </td>

                                <td>
                                    <p class="f-20-fig-questrial text-dark">Invites</p>

                                </td>


                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <tr>
                                <td>
                                    <p class="f-16-fig text-dark">Name Surname</p>

                                </td>
                                <td>
                                    <p class="f-16-fig text-dark">username@gmail.com</p>

                                </td>
                                <td>
                                    <p class="f-16-fig text-dark">
                                        <span class="badge-danger f-14-neu-400-fig">Pending</span>
                                    </p>
                                </td>
                                <td>
                                    <p class="f-16-fig text-dark">Cancel</p>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p class="f-16-fig text-dark">Name Surname</p>

                                </td>
                                <td>
                                    <p class="f-16-fig text-dark">username@gmail.com</p>

                                </td>
                                <td>
                                    <p class="f-16-fig text-dark">
                                        <span class="badge-success f-14-neu-400-fig">Accepted</span>
                                    </p>
                                </td>
                                <td>
                                    <p class="f-16-fig text-dark">Delete</p>
                                </td>
                            </tr>

                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    <div class="d-flex justify-content-end">
                                        <div class="" style="margin-right: 37px;">
                                            <p class="f-16-fig">Per page: 5</p>
                                        </div>

                                        <div class="" style="margin-right: 38px;">
                                            <p class="f-16-fig">01-05 of 100</p>
                                        </div>

                                        <div>
                                            <i class="fa fa-arrow-left" style="margin-right: 37px;"></i>
                                            <i class="fa fa-arrow-right " style="margin-right: 16px;"></i>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>



            </div>

            <div class="tab-pane" id="4">
                <div class="table-wapper-crypto" style="
                        border-radius: 10px;
                        padding: 20px;
                        background: #fff;
                        overflow: auto;
                    ">
                    <table id="transaction_table">
                        <thead>
                            <tr>
                                <td>
                                    <p class="f-20-fig-questrial text-dark">Date</p>

                                </td>


                                <td>
                                    <p class="f-20-fig-questrial text-dark">Order</p>

                                </td>

                                <td>
                                    <p class="f-20-fig-questrial text-dark">Year</p>

                                </td>

                                <td>
                                    <p class="f-20-fig-questrial text-dark">Total</p>

                                </td>

                                <td>
                                    <p class="f-20-fig-questrial text-dark">Status</p>

                                </td>


                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <tr>
                                <td>
                                    <p class="f-16-fig text-dark">Aug 18, 2022</p>

                                </td>
                                <td>
                                    <p class="f-16-fig text-dark">IN889B47C7</p>

                                </td>

                                <td>
                                    <p class="f-16-fig text-dark">2022</p>

                                </td>

                                <td>
                                    <p class="f-16-fig text-dark">$49.00</p>

                                </td>
                                <td>
                                    <p class="f-16-fig text-dark">
                                        <span class="badge-danger f-14-neu-400-fig">Pending</span>
                                    </p>
                                </td>

                            </tr>


                        </tbody>

                        <tfoot>
                            <tr>
                                <td colspan="6">
                                    <div class="d-flex justify-content-end">
                                        <div class="" style="margin-right: 37px;">
                                            <p class="f-16-fig">Per page: 5</p>
                                        </div>

                                        <div class="" style="margin-right: 38px;">
                                            <p class="f-16-fig">01-05 of 100</p>
                                        </div>

                                        <div>
                                            <i class="fa fa-arrow-left" style="margin-right: 37px;"></i>
                                            <i class="fa fa-arrow-right " style="margin-right: 16px;"></i>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Delete Cash Modal -->
    <div class="modal fade" id="deleteCashModal" tabindex="-1" aria-labelledby="deleteCashModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ps-4 pe-4">
                <div class="modal-header" style="border-bottom-width: 0px;">
                    <h5 class="modal-title f-30-fig-neue" style="padding-top: 6%;" id="deleteCashModalLabel">Delete Cash</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding-top: 0px; padding-bottom:0px;">
                    <p class="f-18-fig-questrial" style="color: #555555;">This will result in your gains being recalculated from scratch. Are you sure you want to continue?</p>
                </div>

                <div class="d-grid gap-3 m-7" style="padding-bottom:35px;">
                    <button type="button" class="btn f-16-neu-400-fig pb-2" style="background: #F4B42A; color:#fff; font-weight:700 !important;">Confirm</button>
                    <button type="button" class="btn f-16-neu-400-fig" style="border: 1px solid #BFBFBF; background: #FFFFFF; color: #BFBFBF" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Invite Friends Modal -->
    <div class="modal fade" id="inviteFriendsModal" tabindex="-1" aria-labelledby="inviteFriendsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ps-4 pe-4">
                <div class="modal-header" style="border-bottom-width: 0px;">
                    <h5 class="modal-title f-30-fig-neue" style="padding-top: 6%;" id="inviteFriendsModalLabel">Share access</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding-top: 0px; padding-bottom:0px;">
                    <p class="f-18-fig-questrial" style="color: #555555;">Type in the details for the person you want to share access with. They will receive full access to your portfolio.</p>
                    <div>
                        <form action="">
                            <label class="mt-7 f-20-fig-questrial" style="color: #555555;" for="">Who are you inviting?</label>
                            <div>
                                {{ theme()->getView('partials/widgets/form/input/_select',
                                    array( 
                                            'type' => 'select' ,
                                            'name' => 'access_type' ,
                                            'item' => array(
                                                'access_type1' => 'Accountant A',
                                                'access_type2' => 'Accountant B',
                                                'access_type3' => 'Accountant C',
                                                'access_type4' => 'Accountant D'
                                            ),
                                            'placeholder' => 'Accountant' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <label class="mt-7 f-20-fig-questrial" style="color: #555555;" for="">What's their email address?</label>
                            <div>
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'email' ,
                                            'name' => 'email' ,
                                            'placeholder' => 'Email' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div style="margin-bottom:10%; margin-top:28px;">
                                <button type="button" data-bs-toggle="modal" id="send_invitation" data-bs-target="#successModal" class="btn f-16-neu-400-fig" style="background: #F4B42A; color:#fff; font-weight:700 !important;">Send Invitations</button>
                            </div>
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ps-4 pe-4 text-center">
                <div class="modal-header" style="border-bottom-width: 0px;">
                    
                    <button type="button" id="successModalClose" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <h5 class="modal-title f-30-fig-neue" id="successModalLabel">Your request successful send</h5>
                <div class="modal-body pt-5" style="padding-top: 0px; padding-bottom:0px;">
                    <p class="f-18-fig-questrial" style="color: #555555;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                </div>

                <div class="mt-7" style="padding-bottom: 10%;">
                    <svg width="101" height="101" viewBox="0 0 101 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50.5" cy="50.5" r="40.5" fill="#FAB60C" />
                        <g clip-path="url(#clip0_390_13)">
                            <path d="M47.6672 55.2868L62.9872 39.9651L65.3455 42.3218L47.6672 60.0001L37.0605 49.3934L39.4172 47.0368L47.6672 55.2868Z" fill="white" />
                        </g>
                        <path d="M50.5 0C61.7073 1.33646e-07 72.5963 3.72812 81.4518 10.5972C90.3073 17.4662 96.6263 27.0859 99.4135 37.9412C102.201 48.7964 101.298 60.2704 96.8466 70.556C92.3956 80.8416 84.6496 89.3543 74.8286 94.7535C65.0075 100.153 53.6694 102.131 42.6001 100.378C31.5307 98.625 21.359 93.2394 13.6871 85.0696C6.01513 76.8998 1.27882 66.4101 0.22412 55.2525C-0.830582 44.0949 1.85625 32.9034 7.86145 23.4407L9.56699 24.5231C3.802 33.6073 1.22264 44.3511 2.23516 55.0624C3.24767 65.7737 7.79452 75.8438 15.1596 83.6868C22.5247 91.5298 32.2895 96.7 42.916 98.3831C53.5426 100.066 64.4272 98.1666 73.8554 92.9834C83.2836 87.8001 90.7198 79.6279 94.9927 69.7537C99.2657 59.8796 100.133 48.8645 97.4569 38.4435C94.7812 28.0225 88.715 18.7876 80.2137 12.1933C71.7124 5.59899 61.259 2.02 50.5 2.02V0Z" fill="#FAB60C" />
                        <defs>
                            <clipPath id="clip0_390_13">
                                <rect width="40" height="40" fill="white" transform="translate(31 30)" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        document.getElementById('send_invitation').onclick = function(){
            $('#inviteFriendsModal').hide();
        };
        document.getElementById('successModalClose').onclick = function(){
            $('.modal-backdrop').remove();
        }

        
    </script>
</x-base-layout>
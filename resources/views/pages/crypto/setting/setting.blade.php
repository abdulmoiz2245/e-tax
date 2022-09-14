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

        .tab-content {
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
        }

        #transaction_table tbody tr td {
            padding-top: 18px;
            padding-bottom: 18px;

        }

        table thead tr {
            height: 60px;
            background: transparent;
        }


        .inactiveMixin {
            content: "";
            position: absolute;
            display: block;
        }

        .beforeAnimation {
            -moz-transition: 0.2s cubic-bezier(0.24, 0, 0.5, 1);
            -o-transition: 0.2s cubic-bezier(0.24, 0, 0.5, 1);
            -webkit-transition: 0.2s cubic-bezier(0.24, 0, 0.5, 1);
            transition: 0.2s cubic-bezier(0.24, 0, 0.5, 1);
        }

        .afterAnimation {
            box-shadow: 0 0 0 1px hsla(0, 0%, 0%, 0.1), 0 4px 0px 0 hsla(0, 0%, 0%, 0.04), 0 4px 9px hsla(0, 0%, 0%, 0.13), 0 3px 3px hsla(0, 0%, 0%, 0.05);
            -moz-transition: 0.35s cubic-bezier(0.54, 1.6, 0.5, 1);
            -o-transition: 0.35s cubic-bezier(0.54, 1.6, 0.5, 1);
            -webkit-transition: 0.35s cubic-bezier(0.54, 1.6, 0.5, 1);
            transition: 0.35s cubic-bezier(0.54, 1.6, 0.5, 1);
        }

        .toggleWrapper {
            /* margin: auto;
            padding: 20px;
            width: 55px;
            border: 1px solid lightgray;
            margin-top: 20px;
            border-radius: 5px;
            background: white; */
        }

        .toggleWrapper input.mobileToggle {
            opacity: 0;
            position: absolute;
        }

        .toggleWrapper input.mobileToggle+label {
            position: relative;
            display: inline-block;
            user-select: none;
            -moz-transition: 0.4s ease;
            -o-transition: 0.4s ease;
            -webkit-transition: 0.4s ease;
            transition: 0.4s ease;
            -webkit-tap-highlight-color: transparent;
            height: 30px;
            width: 50px;
            border: 1px solid #e4e4e4;
            border-radius: 60px;
        }

        .toggleWrapper input.mobileToggle+label:before {
            content: "";
            position: absolute;
            display: block;
            -moz-transition: 0.2s cubic-bezier(0.24, 0, 0.5, 1);
            -o-transition: 0.2s cubic-bezier(0.24, 0, 0.5, 1);
            -webkit-transition: 0.2s cubic-bezier(0.24, 0, 0.5, 1);
            transition: 0.2s cubic-bezier(0.24, 0, 0.5, 1);
            height: 30px;
            width: 51px;
            top: 0;
            left: 0;
            border-radius: 30px;
        }

        .toggleWrapper input.mobileToggle+label:after {
            content: "";
            position: absolute;
            display: block;
            box-shadow: 0 0 0 1px hsla(0, 0%, 0%, 0.1), 0 4px 0px 0 hsla(0, 0%, 0%, 0.04), 0 4px 9px hsla(0, 0%, 0%, 0.13), 0 3px 3px hsla(0, 0%, 0%, 0.05);
            -moz-transition: 0.35s cubic-bezier(0.54, 1.6, 0.5, 1);
            -o-transition: 0.35s cubic-bezier(0.54, 1.6, 0.5, 1);
            -webkit-transition: 0.35s cubic-bezier(0.54, 1.6, 0.5, 1);
            transition: 0.35s cubic-bezier(0.54, 1.6, 0.5, 1);
            background: whitesmoke;
            height: 28px;
            width: 28px;
            top: 1px;
            left: 0px;
            border-radius: 60px;
        }

        .toggleWrapper input.mobileToggle:checked+label:before {
            background: #2B014C;
            -moz-transition: width 0.2s cubic-bezier(0, 0, 0, 0.1);
            -o-transition: width 0.2s cubic-bezier(0, 0, 0, 0.1);
            -webkit-transition: width 0.2s cubic-bezier(0, 0, 0, 0.1);
            transition: width 0.2s cubic-bezier(0, 0, 0, 0.1);
        }

        .toggleWrapper input.mobileToggle:checked+label:after {
            left: 24px;
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
        <form action="" method="post">
            @csrf
            <div class="tab-content " style="
                    margin-top: 32px;
                ">

                <div class="tab-pane active" id="1">
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
                                        <button type="submit">Save</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form__group">
                                        <button type="btn">Delete cash</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="2">
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
                </div>
                <div class="tab-pane" id="3">
                    <div class="card">
                        <div class="card-body" style="overflow-x: auto;">


                            <table id="transaction_table">
                                <thead>
                                    <tr>
                                        <td>
                                            <p class="f-20-fig-questrial text-dark">Coin</p>

                                        </td>


                                        <td>
                                            <p class="f-20-fig-questrial text-dark">Market Cup</p>

                                        </td>

                                        <td>
                                            <p class="f-20-fig-questrial text-dark">Price</p>

                                        </td>

                                        <td>
                                            <p class="f-20-fig-questrial text-dark">Volume</p>

                                        </td>

                                        <td>
                                            <p class="f-20-fig-questrial text-dark">Percent</p>

                                        </td>

                                        <td>
                                            <p class="f-20-fig-questrial text-dark">24h statistics</p>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody class="tbody">
                                    <tr>
                                        <td>
                                            <div class="icon d-md-flex">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_309_98)">
                                                        <path d="M23.6397 14.9029C22.0371 21.3315 15.5259 25.2438 9.0965 23.6407C2.6698 22.038 -1.24254 15.5265 0.360847 9.09837C1.96283 2.66903 8.47399 -1.24361 14.9014 0.359081C21.3303 1.96177 25.2424 8.47404 23.6396 14.903L23.6397 14.9029H23.6397Z" fill="#F7931A" />
                                                        <path d="M17.2915 10.2903C17.5304 8.69337 16.3146 7.83495 14.6521 7.2623L15.1914 5.09911L13.8746 4.771L13.3496 6.87723C13.0034 6.79089 12.6479 6.70954 12.2945 6.62889L12.8234 4.50875L11.5074 4.18063L10.9678 6.34312C10.6813 6.2779 10.3999 6.21344 10.1269 6.14551L10.1285 6.13871L8.31258 5.68525L7.96229 7.09168C7.96229 7.09168 8.93925 7.31562 8.91866 7.3294C9.45189 7.46249 9.54832 7.81548 9.53231 8.09526L8.91796 10.5596C8.95467 10.569 9.0023 10.5825 9.05486 10.6036C9.01092 10.5927 8.96417 10.5808 8.91567 10.5691L8.05455 14.0214C7.98939 14.1834 7.82398 14.4265 7.45117 14.3342C7.46437 14.3533 6.4941 14.0954 6.4941 14.0954L5.84033 15.6027L7.55394 16.0299C7.87272 16.1098 8.18512 16.1934 8.49277 16.2721L7.94786 18.4601L9.26314 18.7882L9.80276 16.6234C10.1621 16.721 10.5108 16.811 10.8522 16.8958L10.3144 19.0504L11.6312 19.3785L12.1761 17.1946C14.4215 17.6195 16.1099 17.4482 16.8205 15.4172C17.3932 13.782 16.792 12.8389 15.6107 12.2238C16.4711 12.0254 17.1192 11.4595 17.292 10.2905L17.2916 10.2902L17.2915 10.2903ZM14.2829 14.5091C13.876 16.1443 11.1229 15.2604 10.2302 15.0387L10.9533 12.14C11.8459 12.3628 14.7083 12.8038 14.283 14.5091H14.2829ZM14.6902 10.2666C14.319 11.754 12.0275 10.9983 11.2842 10.813L11.9397 8.18406C12.6831 8.36936 15.0769 8.71518 14.6903 10.2666H14.6902Z" fill="white" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_309_98">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>


                                                <span class="f-16-fig" style="padding-left:10px">BTC ( Bitcoin )</span>

                                            </div>
                                        </td>
                                        <td>
                                            <p class="f-16-fig text-dark">$452.07B</p>

                                        </td>
                                        <td>
                                            <p class="f-16-fig text-dark">$23,638.89</p>
                                        </td>
                                        <td>
                                            <p class="f-16-fig text-dark">$30.2B</p>
                                        </td>

                                        <td>
                                            <p class="f-16-fig text-danger">-1.63%</p>
                                        </td>

                                        <td>
                                            <div class="line-chart">
                                                <div class="aspect-ratio">
                                                    <canvas id="line-chart-transaction_1" height="49"></canvas>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="icon d-md-flex">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_309_98)">
                                                        <path d="M23.6397 14.9029C22.0371 21.3315 15.5259 25.2438 9.0965 23.6407C2.6698 22.038 -1.24254 15.5265 0.360847 9.09837C1.96283 2.66903 8.47399 -1.24361 14.9014 0.359081C21.3303 1.96177 25.2424 8.47404 23.6396 14.903L23.6397 14.9029H23.6397Z" fill="#F7931A" />
                                                        <path d="M17.2915 10.2903C17.5304 8.69337 16.3146 7.83495 14.6521 7.2623L15.1914 5.09911L13.8746 4.771L13.3496 6.87723C13.0034 6.79089 12.6479 6.70954 12.2945 6.62889L12.8234 4.50875L11.5074 4.18063L10.9678 6.34312C10.6813 6.2779 10.3999 6.21344 10.1269 6.14551L10.1285 6.13871L8.31258 5.68525L7.96229 7.09168C7.96229 7.09168 8.93925 7.31562 8.91866 7.3294C9.45189 7.46249 9.54832 7.81548 9.53231 8.09526L8.91796 10.5596C8.95467 10.569 9.0023 10.5825 9.05486 10.6036C9.01092 10.5927 8.96417 10.5808 8.91567 10.5691L8.05455 14.0214C7.98939 14.1834 7.82398 14.4265 7.45117 14.3342C7.46437 14.3533 6.4941 14.0954 6.4941 14.0954L5.84033 15.6027L7.55394 16.0299C7.87272 16.1098 8.18512 16.1934 8.49277 16.2721L7.94786 18.4601L9.26314 18.7882L9.80276 16.6234C10.1621 16.721 10.5108 16.811 10.8522 16.8958L10.3144 19.0504L11.6312 19.3785L12.1761 17.1946C14.4215 17.6195 16.1099 17.4482 16.8205 15.4172C17.3932 13.782 16.792 12.8389 15.6107 12.2238C16.4711 12.0254 17.1192 11.4595 17.292 10.2905L17.2916 10.2902L17.2915 10.2903ZM14.2829 14.5091C13.876 16.1443 11.1229 15.2604 10.2302 15.0387L10.9533 12.14C11.8459 12.3628 14.7083 12.8038 14.283 14.5091H14.2829ZM14.6902 10.2666C14.319 11.754 12.0275 10.9983 11.2842 10.813L11.9397 8.18406C12.6831 8.36936 15.0769 8.71518 14.6903 10.2666H14.6902Z" fill="white" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_309_98">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>


                                                <span class="f-16-fig" style="padding-left:10px">BTC ( Bitcoin )</span>

                                            </div>
                                        </td>
                                        <td>
                                            <p class="f-16-fig text-dark">$452.07B</p>

                                        </td>
                                        <td>
                                            <p class="f-16-fig text-dark">$23,638.89</p>
                                        </td>
                                        <td>
                                            <p class="f-16-fig text-dark">$30.2B</p>
                                        </td>

                                        <td>
                                            <p class="f-16-fig text-danger">-1.63%</p>
                                        </td>

                                        <td>
                                            <div class="line-chart">
                                                <div class="aspect-ratio">
                                                    <canvas id="line-chart-transaction_1" height="49"></canvas>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="icon d-md-flex">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_309_98)">
                                                        <path d="M23.6397 14.9029C22.0371 21.3315 15.5259 25.2438 9.0965 23.6407C2.6698 22.038 -1.24254 15.5265 0.360847 9.09837C1.96283 2.66903 8.47399 -1.24361 14.9014 0.359081C21.3303 1.96177 25.2424 8.47404 23.6396 14.903L23.6397 14.9029H23.6397Z" fill="#F7931A" />
                                                        <path d="M17.2915 10.2903C17.5304 8.69337 16.3146 7.83495 14.6521 7.2623L15.1914 5.09911L13.8746 4.771L13.3496 6.87723C13.0034 6.79089 12.6479 6.70954 12.2945 6.62889L12.8234 4.50875L11.5074 4.18063L10.9678 6.34312C10.6813 6.2779 10.3999 6.21344 10.1269 6.14551L10.1285 6.13871L8.31258 5.68525L7.96229 7.09168C7.96229 7.09168 8.93925 7.31562 8.91866 7.3294C9.45189 7.46249 9.54832 7.81548 9.53231 8.09526L8.91796 10.5596C8.95467 10.569 9.0023 10.5825 9.05486 10.6036C9.01092 10.5927 8.96417 10.5808 8.91567 10.5691L8.05455 14.0214C7.98939 14.1834 7.82398 14.4265 7.45117 14.3342C7.46437 14.3533 6.4941 14.0954 6.4941 14.0954L5.84033 15.6027L7.55394 16.0299C7.87272 16.1098 8.18512 16.1934 8.49277 16.2721L7.94786 18.4601L9.26314 18.7882L9.80276 16.6234C10.1621 16.721 10.5108 16.811 10.8522 16.8958L10.3144 19.0504L11.6312 19.3785L12.1761 17.1946C14.4215 17.6195 16.1099 17.4482 16.8205 15.4172C17.3932 13.782 16.792 12.8389 15.6107 12.2238C16.4711 12.0254 17.1192 11.4595 17.292 10.2905L17.2916 10.2902L17.2915 10.2903ZM14.2829 14.5091C13.876 16.1443 11.1229 15.2604 10.2302 15.0387L10.9533 12.14C11.8459 12.3628 14.7083 12.8038 14.283 14.5091H14.2829ZM14.6902 10.2666C14.319 11.754 12.0275 10.9983 11.2842 10.813L11.9397 8.18406C12.6831 8.36936 15.0769 8.71518 14.6903 10.2666H14.6902Z" fill="white" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_309_98">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>


                                                <span class="f-16-fig" style="padding-left:10px">BTC ( Bitcoin )</span>

                                            </div>
                                        </td>
                                        <td>
                                            <p class="f-16-fig text-dark">$452.07B</p>

                                        </td>
                                        <td>
                                            <p class="f-16-fig text-dark">$23,638.89</p>
                                        </td>
                                        <td>
                                            <p class="f-16-fig text-dark">$30.2B</p>
                                        </td>

                                        <td>
                                            <p class="f-16-fig text-danger">-1.63%</p>
                                        </td>

                                        <td>
                                            <div class="line-chart">
                                                <div class="aspect-ratio">
                                                    <canvas id="line-chart-transaction_1" height="49"></canvas>
                                                </div>
                                            </div>
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

                <div class="tab-pane" id="4">
                    <div class="card">
                        <div class="card-body">
                            <div class="alert alert-danger" role="alert">
                                <div class="d-flex">
                                    <div class="icon align-self-center" style="padding-right: 12px;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_651_38)">
                                                <path d="M10.0003 18.3332C5.39783 18.3332 1.66699 14.6023 1.66699 9.99984C1.66699 5.39734 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39734 18.3337 9.99984C18.3337 14.6023 14.6028 18.3332 10.0003 18.3332ZM10.0003 16.6665C11.7684 16.6665 13.4641 15.9641 14.7144 14.7139C15.9646 13.4636 16.667 11.7679 16.667 9.99984C16.667 8.23173 15.9646 6.53603 14.7144 5.28579C13.4641 4.03555 11.7684 3.33317 10.0003 3.33317C8.23222 3.33317 6.53652 4.03555 5.28628 5.28579C4.03604 6.53603 3.33366 8.23173 3.33366 9.99984C3.33366 11.7679 4.03604 13.4636 5.28628 14.7139C6.53652 15.9641 8.23222 16.6665 10.0003 16.6665ZM9.16699 12.4998H10.8337V14.1665H9.16699V12.4998ZM9.16699 5.83317H10.8337V10.8332H9.16699V5.83317Z" fill="#D80027" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_651_38">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </div>
                                    <div>
                                        <strong style="color:#2B014C"> Are you sure? </strong> you confirm, all of your account data will be permanently deleted

                                    </div>
                                </div>
                            </div>
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
                                <input type="password" id="delete_password" value="" name="delete_password" class="form__field" placeholder="Password" style="
                                        padding-left: 15px;
                                        padding-right: 45px;
                                    ">
                                <label for="delete_password" class="form__label">Password</label>
                            </div>

                            <div class="form__group">
                                <button type="submit">Save</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>

</x-base-layout>
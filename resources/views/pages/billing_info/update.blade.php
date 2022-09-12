<x-base-layout>
    <script src="https://js.stripe.com/v3/"></script>
    <style>
        .card-title-text {
            font-style: normal;
            font-weight: 400 !important;
            font-size: 15px !important;
            line-height: 19px;
            color: #6F6F6F !important;

        }

        .card-title-p {
            font-style: normal;
            font-weight: 400 !important;
            font-size: 12px !important;
            line-height: 19px;
            color: #6F6F6F !important;

        }

        .card-count {

            font-style: normal;
            font-weight: 600 !important;
            font-size: 42px !important;
            line-height: 53px;
        }

        .dash-title {
            font-style: normal;
            font-weight: 600 !important;
            font-size: 30px !important;
            line-height: 38px;
        }

        .dash-title-secondry {
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;
        }

        .card .card-header {
            min-height: auto;
        }

        .card-main-title {
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 22px;
            color: #000000;
        }

        @media (min-width: 1440px) {
            .card-title-text {
                font-style: normal;
                font-weight: 400 !important;
                font-size: 16px !important;
                line-height: 19px;
                color: #6F6F6F !important;
            }



            .dash-title {
                font-weight: 700 !important;

            }

            .card-count {

                font-style: normal;
                font-weight: 600 !important;
                font-size: 42px !important;
                line-height: 53px;
            }
        }



        @media (min-width: 320px) and (max-width:1200) {
            .billing-form {
                padding-left: 15% !important;
                padding-right: 15% !important;

            }
        }

        @media (min-width: 1201px) {

            .billing-form {
                padding-left: 25% !important;
                padding-right: 25% !important;

            }
        }

        .col-md-6 {
            margin-bottom: 0px;
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1093px !important;
            }
        }
    </style>

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
            font-size: 16px !important;
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

        .varify-form {
            max-width: 550px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10%;
            margin-bottom: 10%;

            width: 100%;
        }

        /* .card-body {
            padding: 0px !important;
        } */


        button {
            border-radius: 10px;
        }

        .nav-tabs li {
            background-color: #E6EAF9;
            border-radius: 10px;
        }

        .nav-tabs .active {
            background-color: #2B014C;
        }

        .nav-tabs .active a {
            color: white;

        }

        a:hover {
            transition: none;
        }

        .nav-tabs .li1 {
            border-radius: 10px 0px 0px 0px;

        }

        .nav-tabs .li2 {
            border-radius: 0px 10px 0px 0px;
        }

        .container {
            margin-top: 5%;
            margin-bottom: 5%;

        }

        .card-body {
            /* margin-left: 20px !important;
      margin-right: 20px !important; */

        }

        @media (min-width: 1200px) {
            .container {
                max-width: 980px !important;
            }
        }
    </style>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <form action="{{ route('update_customer_payment_method') }}" id="billing_form" method="post">
        @csrf
        <div class="row verify_info">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" style="padding: 0px !important;">
                        <div id="exTab2" class="containersecond">
                            <ul class="nav nav-tabs">
                                <li class="active1  w-50  li1">
                                    <a href="#1" class="ab mx-auto w-100" style="margin-left: auto; margin-right:auto;" data-toggle="tab"> Scan QR or enter code</a>
                                </li>
                                <li class="w-50 active li2">
                                    <a href="#2" class="ab w-100" data-toggle="tab">Verify</a>
                                </li>
                            </ul>

                            <div class="tab-content ">

                                <div class="tab-pane " id="1">
                                    <div class="card p-5">
                                        <div class="card-body d-flex" style="padding: 0px !important;">
                                            <!-- <form action="" method="post" class="varify-form"> -->
                                            <h1 class="text-center">Configure Authenticator App </h1>
                                            <p class="text-center" style="color:#6F6F6F"> Scan this QR code with an authentication app like Google Authenticator or Microsoft Authenticator. Download one from App Store or Play Store.</p>
                                            <div class="text-center">
                                                <img src="https://www.imgonline.com.ua/examples/qr-code.png" style="width: 130px; height:130px" alt="">
                                            </div>
                                            <p class="text-center mt-5" style="color:#6F6F6F"> Or enter the following code in your device:</p>

                                            <div class="form__group" style="
                                                    position: relative;
                                                    ">
                                                <svg style="position: absolute;top: 24px;right: 12px;" class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.438 5.09831V7.30962H8.78555C7.97173 7.30962 7.30962 7.97173 7.30962 8.78554V16.438H5.09831C4.49272 16.438 4 15.9452 4 15.3394V5.09831C4 4.49272 4.49275 4 5.09831 4H15.3395C15.9453 4 16.438 4.49275 16.438 5.09831Z" fill="#6F6F6F" />
                                                    <path d="M19.9997 9.03808V19.2792C19.9997 19.6774 19.6769 20.0002 19.2787 20.0002H9.03759C8.63939 20.0002 8.31641 19.6774 8.31641 19.2792V9.03808C8.31641 8.63988 8.63938 8.31689 9.03759 8.31689H19.2787C19.6769 8.31689 19.9997 8.63987 19.9997 9.03808Z" fill="#6F6F6F" />
                                                </svg>

                                                <!-- <input type="email" id="email" class="form__field" value="32A9XzMhxirMqMeyW7GxNJNJ4UVqiDwDm4" readonly style="
                                                        padding-left: 15px;
                                                        padding-right: 45px;
                                                    "> -->
                                            </div>



                                            <div class="form__group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <button class="btn w-100  mt-3" style="color: #8C8C8C;border: 1px solid #6F6F6F;font-size: 14px;font-weight: 400;">Cancel</button>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <button class="btn w-100  mt-3" style="background: #F4B42A;  color:#fff">Verify</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- </form> -->

                                        </div>
                                    </div>





                                </div>

                                <div class="tab-pane active" id="2">
                                    <div class="card p-5">
                                        <div class="card-body" style="padding: 0px !important;">
                                            <div class="varify-form">
                                                <h1 class="text-center">Verify Your Authenticator</h1>
                                                <p class="text-center"> Enter the code from your authentication app to continue.</p>

                                                <div class="form__group">
                                                    <input type="text" id="verification_code" name="verification_code" class="form__field" placeholder="First Name">
                                                    <label for="verification_code" class="form__label">Verification Code</label>
                                                </div>

                                                <div class="form__group">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <button class="btn w-100  mt-3" type="button" id="cancel-btn-verify" style="color: #8C8C8C;border: 1px solid #6F6F6F;font-size: 14px;font-weight: 400;">Cancel</button>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <button class="btn w-100  mt-3" type="submit" style="background: #F4B42A;  color:#fff">Verify</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>






                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--begin::Row-->
        <div class="row gy-5 g-xl-4 billing-info" style="margin-top: 0px; margin-bottom:20px">

            <!--begin::Col-->

            <div class="col-md-12">
                <span><a href="/billing/billing-invoice"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></span>
                <span class="pr-2" style="color:#6F6F6F;padding-left: 7px;">Back to Billing & Invoice</span>
            </div>
            <!--end::Col-->

            <!--begin::Col-->

            <div class="col-md-12">
                <h1 class="dash-title">Billing information</h1>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->



        <!--begin::Row-->
        <div class="row billing-info" style="margin-bottom: 36px;">
            <!--begin::Col-->
            <div class="col-md-12">
                <div class="card ">


                    <!--begin::Body-->
                    <div class="card-body billing-form d-flex flex-column pt-3 pb-3 justify-content-end">

                        <div>
                            <h4 style="margin-top:30px">Billing Contact</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                        array( 
                                                'type' => 'text' ,
                                                'name' => 'first_name' ,
                                                'value' => $user->first_name,
                                                'placeholder' => 'First Name' ,
                                                'required'=> true , 'id' => ''
                                            )
                                        )
                                    }}

                                </div>
                                <div class="col-md-6">
                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'text' ,
                                                    'name' => 'last_name' ,
                                                    'value' => $user->last_name,

                                                    'placeholder' => 'Last Name' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                </div>

                                <div class="col-md-6">
                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'email' ,
                                                    'name' => 'email' ,
                                                    'value' => $user->email,

                                                    'placeholder' => 'Email' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                </div>
                                <div class="col-md-6">
                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'number' ,
                                                    'name' => 'phone_number' ,
                                                    'value' =>$user->info->phone,

                                                    'placeholder' => 'Phone Number' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                </div>
                            </div>

                        </div>

                        <div>
                            <h4 style="margin-top:30px">Billing Address</h4>

                            {{ theme()->getView('partials/widgets/form/input/_text',
                                        array( 
                                                'type' => 'text' ,
                                                'name' => 'company_name' ,
                                                'value' =>$user->info->company,

                                                'placeholder' => 'Company Name' ,
                                                'required'=> false , 'id' => ''
                                            )
                                        )
                                    }}


                            {{ theme()->getView('partials/widgets/form/input/_text',
                                        array( 
                                                'type' => 'text' ,
                                                'name' => 'street_address_1' ,
                                                'value' =>$user->info->street_address_1,

                                                'placeholder' => 'Street Address 1' ,
                                                'required'=> true , 'id' => ''
                                            )
                                        )
                                    }}

                            {{ theme()->getView('partials/widgets/form/input/_text',
                                        array( 
                                                'type' => 'text' ,
                                                'name' => 'street_address_2' ,
                                                'placeholder' => 'Street Address 2' ,
                                                'value' =>$user->info->street_address_2,

                                                'required'=> false , 'id' => ''
                                            )
                                        )
                                    }}

                            <div class="row">
                                <div class="col-md-6">
                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'text' ,
                                                    'name' => 'city' ,
                                                    'value' =>$user->info->city,

                                                    'placeholder' => 'City' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                </div>
                                <div class="col-md-6">
                                    {{ theme()->getView('partials/widgets/form/input/_select',
                                            array( 
                                                    'type' => 'select' ,
                                                    'name' => 'country' ,
                                                    'value' =>$user->info->country,

                                                    'item' => array(
                                                     'united_state' =>  'United States',
                                                     'pakistan'=>   'Pakistan',
                                                     'india' =>  'India'
                                                    ) ,

                                                    'placeholder' => 'Conutry' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    {{ theme()->getView('partials/widgets/form/input/_select',
                                            array( 
                                                    'type' => 'select' ,
                                                    'name' => 'state' ,
                                                    'value' =>$user->info->state,

                                                    'item' => array(
                                                     'ak' =>  'AK',
                                                     'ir'=>   'IR',
                                                     'uk' =>  'UK'
                                                    ) ,

                                                    'placeholder' => 'State' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                </div>

                                <div class="col-md-6">
                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'number' ,
                                                    'name' => 'zip' ,
                                                    'value' =>$user->info->zip,

                                                    'placeholder' => 'Zip' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 style="margin-top:30px">Payment Method</h4>
                            <p>Leave this if dont you dont want to update payment method</p>
                            <div class="row">
                                

                                <div class="col-md-12">
                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'text' ,
                                                    'name' => 'cardholder_name' ,
                                                    'placeholder' => 'Cardholder name' ,
                                                    'required'=> false , 'id' => ''
                                                )
                                            )
                                        }}
                                </div>

                                <div class="col-md-12">
                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'text' ,
                                                    'name' => 'cardholder_number' ,
                                                    'placeholder' => 'Cardholder Number' ,
                                                    'required'=> false , 'id' => ''
                                                )
                                            )
                                        }}
                                </div>
                                <div class="col-md-6">
                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'month' ,
                                                    'name' => 'card_expiry' ,
                                                    'placeholder' => 'MM/YY' ,
                                                    'required'=> false , 'id' => ''
                                                )
                                            )
                                        }}
                                </div>
                                <div class="col-md-6">
                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'number' ,
                                                    'name' => 'cvc' ,
                                                    'placeholder' => 'CVC' ,
                                                    'required'=> false , 'id' => ''
                                                )
                                            )
                                        }}
                                </div>
                            </div>

                        </div>

                        <div style="margin-top: 34px; margin-bottom:34px">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn w-100  mt-3" style="color: #8C8C8C;border: 1px solid #6F6F6F;font-size: 14px;font-weight: 400;">Cancel</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn w-100  mt-3 " style="background: #F4B42A;  color:#fff">Next</button>
                                </div>
                            </div>
                        </div>




                    </div>
                    <!--end::Body-->
                </div>

            </div>
            <!--end::Col-->


        </div>
        <!--end::Row-->

    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.32/sweetalert2.min.js" integrity="sha512-yc+tEbvC4kiy3J6e0aZogFVr8AZhMtJTof2z+fGPaJgjehpIPzguZxfRRTiQcXlSHbJsB3Bborvv++81TMLZ2w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.32/sweetalert2.min.css" integrity="sha512-doewDSLNwoD1ZCdA1D1LXbbdNlI4uZv7vICMrzxfshHmzzyFNhajLEgH/uigrbOi8ETIftUGBkyLnbyDOU5rpA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>

        let verify = document.getElementsByClassName('verify_info');
        let info = document.getElementsByClassName('billing-info');
        for (var i = 0; i < verify.length; i += 1) {
            verify[i].style.display = 'none';
        }

        for (var i = 0; i < info.length; i += 1) {
            info[i].style.display = 'block';
        }

        document.getElementsByClassName("verify-btn")[0].addEventListener("click", (event) => {
            var f = document.getElementById('billing_form');
            var data = new FormData(f);
            fetch('{{ route("emial_varification_code_sent") }}', {

                    // Adding method type
                    method: "POST",

                    // Adding body or contents to send
                    body: JSON.stringify({
                        first_name : data.get('first_name'),
                        last_name : data.get('last_name'),
                        phone_number : data.get('phone_number'),
                        street_address_1 : data.get('street_address_1'),
                        street_address_2 : data.get('street_address_2'),
                        city : data.get('city'),
                        country : data.get('country'),
                        state : data.get('state'),
                        state : data.get('state'),
                        zip : data.get('zip'),
                        cardholder_name : data.get('cardholder_name'),
                        cardholder_number : data.get('cardholder_number'),
                        card_expiry : data.get('card_expiry'),
                        cvc : data.get('cvc'),
                        email: $("input[type = 'email']").val(),
                        "_token": "{{ csrf_token() }}"
                    }),

                    // Adding headers to the request
                    headers: {
                        "Content-type": "application/json; charset=UTF-8"
                    }
                })
                .then(
                    function(response) {
                        if (response.status !== 200) {
                            console.log('Looks like there was a problem. Status Code: ' +
                                response.status);
                            return response.json();
                        }

                        return response.json();
                        
                    }
                ).then(function(data) {
                    if(data.status){
                        for (var i = 0; i < verify.length; i += 1) {
                            verify[i].style.display = 'block';
                        }



                        for (var i = 0; i < info.length; i += 1) {
                            info[i].style.display = 'none';
                        }
                    }else{
                        Swal.fire({
                            title: 'Error!',
                            text: data.data,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        })
                    }


                })
                .catch(function(err) {
                    console.log('Fetch Error :-S', err);
                });


        });

        document.getElementById("cancel-btn-verify").addEventListener("click", (event) => {
            for (var i = 0; i < verify.length; i += 1) {
                verify[i].style.display = 'none';
            }

            for (var i = 0; i < info.length; i += 1) {
                info[i].style.display = 'block';
            }
        });
    </script>
</x-base-layout>
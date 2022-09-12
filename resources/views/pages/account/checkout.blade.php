<x-base-layout>
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

        .billing-title {
            font-family: 'Neue Haas Grotesk Text Pro', sans-serif !important;
            color: #000000;
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 22px;
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
                padding-left: 5% !important;
                padding-right: 5% !important;

            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1093px !important;
            }
        }
    </style>

    <!--begin::Row-->
    <div class="row gy-5 g-xl-4" style="margin-top: 0px; margin-bottom:20px">

        <!--begin::Col-->

        <div class="col-md-12">
            <span><a href="/account/account"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></span>
            <span class="pr-2" style="color:#6F6F6F;padding-left: 7px;">Back to My Account</span>
        </div>
        <!--end::Col-->

        <!--begin::Col-->

        <div class="col-md-12">
            <h1 class="dash-title">Checkout</h1>
            <p class="f-16-fig">Save time by importing your forms via Excel or using one of our software integrations below. If using Excel, download the template below, enter your data, and then select the file to import.</p>

        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->



    <!--begin::Row-->
    <div class="row " style="margin-bottom: 36px;">
        <!--begin::Col-->
        <div class="col-md-12">
            <div class="card ">


                <!--begin::Body-->
                <div class="card-body billing-form d-flex flex-column pt-3 pb-3 justify-content-end">
                    <form action="" method="post">
                        <h4 style="margin-top:30px">Billing Contact</h4>

                        <div class="d-md-flex" style="justify-content: space-around;">
                            <div>
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            {{ theme()->getView('partials/widgets/form/input/_text',
                                        array( 
                                                'type' => 'text' ,
                                                'name' => 'first_name' ,
                                                'readonly' => true,

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
                                                'readonly' => true,

                                                'value' => $user->last_name,

                                                    'placeholder' => 'Last Name' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'email' ,
                                                    'name' => 'email' ,
                                                'readonly' => true,

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
                                                'value' => $user->info->phone,
                                                'readonly' => true,


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
                                                'value' => $user->info->company,
                                                'readonly' => true,

                                                'placeholder' => 'Company Name' ,
                                                'required'=> true , 'id' => ''
                                            )
                                        )
                                    }}


                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                        array( 
                                                'type' => 'text' ,
                                                'name' => 'street_address_1' ,
                                                'readonly' => true,

                                                'value' => $user->info->street_address_1,
                                                'placeholder' => 'Street Address 1' ,
                                                'required'=> true , 'id' => ''
                                            )
                                        )
                                    }}

                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                        array( 
                                                'type' => 'text' ,
                                                'name' => 'street_address_2' ,
                                                'readonly' => true,

                                                'value' => $user->info->street_address_2,

                                                'placeholder' => 'Street Address 2' ,
                                                'required'=> true , 'id' => ''
                                            )
                                        )
                                    }}

                                    <div class="row">
                                        <div class="col-md-6">
                                            {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'text' ,
                                                    'name' => 'city' ,
                                                'readonly' => true,

                                                'value' => $user->info->city,

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
                                                    'name' => 'conutry' ,
                                                'readonly' => true,

                                                'value' => $user->info->country,

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
                                                'readonly' => true,

                                                    'name' => 'state' ,
                                                'value' => $user->info->state,

                                                    'item' => array(
                                                     'ak' =>  'AK',
                                                     'ir'=>   'IR',
                                                     'uk' =>  'UK'
                                                    ) ,

                                                    'placeholder' => 'Select' ,
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
                                                'readonly' => true,

                                                'value' => $user->info->zip,

                                                    'placeholder' => 'Zip' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                        </div>
                                    </div>
                                </div>

                                <div style="margin-top: 34px; margin-bottom:34px">

                                </div>
                            </div>

                            <div style="background: linear-gradient(91.02deg, rgba(197, 146, 237, 0.8) -5.88%, rgba(253, 219, 146, 0.8) 105.89%);
                                border-radius: 12px;height: 100%;
                                ">
                                <div class="h-100 d-flex " style="margin: 5px; padding:24px;background: #FFFFFF;
                                border-radius: 10px;flex-direction:column;justify-content: space-between;">
                                    <div>
                                        <h4 class=" billing-title" style="font-size: 18px">Summary</h4>
                                        <div class="row" style=" margin-top:12px">
                                            @if($plan_id == 1)
                                            <div class="col-9">
                                                <p class="f-16-fig" style="color:#6F6F6F"> Annual Plus Subscription - 10 Users</p>
                                            </div>
                                            <div class="col-3">
                                                <p class="f-16-fig" style="color:#6F6F6F">$149.00</p>
                                            </div>
                                            @elseif( $plan_id == 2)
                                            <div class="col-9">
                                                <p class="f-16-fig" style="color:#6F6F6F"> Basic Subscription - 1 Users</p>
                                            </div>
                                            <div class="col-3">
                                                <p class="f-16-fig" style="color:#6F6F6F">$0</p>
                                            </div>
                                            @endif
                                        </div>

                                        <div class="row">
                                            <div class="col-9">
                                                <p class="f-16-fig" style="color:#6F6F6F"> State Filing Fee</p>
                                            </div>
                                            <div class="col-3">
                                                <p class="f-16-fig" style="color:#6F6F6F">$0</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-9">
                                                <p class="f-16-fig" style="color:#6F6F6F"> Other Fees</p>
                                            </div>
                                            <div class="col-3">
                                                <p class="f-16-fig" style="color:#6F6F6F">$0</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-9">
                                                <p class="f-16-fig" style="color:#6F6F6F"> Estimated Tax</p>
                                            </div>
                                            <div class="col-3">
                                                <p class="f-16-fig" style="color:#6F6F6F">$0</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-9">
                                                <p class="f-16-fig" style="color:#6F6F6F"> Subtotal</p>
                                            </div>
                                            <div class="col-3">
                                                @if($plan_id == 1)

                                                <p class="f-16-fig" style="color:#6F6F6F">$149.00</p>
                                                @elseif( $plan_id == 2)
                                                <p class="f-16-fig" style="color:#6F6F6F">$0</p>

                                                @endif

                                            </div>
                                        </div>

                                        <div class="separator my-2 "></div>

                                        <div class="row" style="margin-top: 15px;">
                                            <div class="col-9">
                                                <p class="f-16-fig" style="color:#0144F1"> Total</p>
                                            </div>
                                            <div class="col-3">

                                                @if($plan_id == 1)

                                                <p class="f-16-fig" style="color:#0144F1">$149.00</p>
                                                @elseif( $plan_id == 2)
                                                <p class="f-16-fig" style="color:#0144F1">$0</p>

                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                    <div>
                                        <p style="max-width:370px">*Your subscription will automatically renew annually at the new total amount on the anniversary of your original purchase date using the credit card in your billing details.</p>
                                        <p>By placing your order, you agree to our Filing Terms.</p>
                                        <div class="row">

                                            <div class="col-md-12">
                                                <button class="btn w-100  mt-3"  type="button" id="checkoutbtn" style="background: #F4B42A;  color:#fff">Buy Now</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>


                    </form>

                </div>
                <!--end::Body-->
            </div>

        </div>
        <!--end::Col-->


    </div>
    <!--end::Row-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.32/sweetalert2.min.js" integrity="sha512-yc+tEbvC4kiy3J6e0aZogFVr8AZhMtJTof2z+fGPaJgjehpIPzguZxfRRTiQcXlSHbJsB3Bborvv++81TMLZ2w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.32/sweetalert2.min.css" integrity="sha512-doewDSLNwoD1ZCdA1D1LXbbdNlI4uZv7vICMrzxfshHmzzyFNhajLEgH/uigrbOi8ETIftUGBkyLnbyDOU5rpA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        document.getElementById("checkoutbtn").addEventListener("click", (event) => {

            let amount = <?= $plan_id == '1' ? '149' : '0' ?>;
            fetch('{{ route("create_payment") }}', {

                    // Adding method type
                    method: "POST",

                    // Adding body or contents to send
                    body: JSON.stringify({
                        plan_id: '<?= $plan_id ?>',
                        amount: amount,
                        currency: 'usd',


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
                        } else {
                            return response.json();

                        }


                    }
                ).then(function(data) {
                    if (data.status) {
                        Swal.fire({
                            title: 'Payment Successfull',
                            text: "",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Continue',
                            allowOutsideClick: false
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = 'http://' + window.location.hostname + '/billing/billing-invoice';

                            }
                        })
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            html: 'Recheck the billing Info and Card</br>Developer Note : ' + data.data,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        })
                    }
                })
                .catch(function(err) {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Api Response Fail',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    })
                });


        });
    </script>

</x-base-layout>
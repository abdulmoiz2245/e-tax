<x-base-layout>
    <style>
        body {
            background-color: #F8F9FD;
        }
    </style>

    <?php

    $id = Auth::user()->id;
    $email = Auth::user()->email;

    ?>
    <span class="d-none" id="user">{{$id}}</span>
    <div class="payment_with_card">
        <div class="f-16-neu-400-fig">
            <a href="{{route('crypto.checkout-type')}}"><span class="pe-2">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </span>
                <span style="color: #6F6F6F;"> Back to Tax Plan</span>
            </a>
        </div>
        <h1 class="payment_with_card_title f-30-fig-neue pt-3">Payment with Card</h1>
        <p class="f-16-fig" style="color: #6F6F6F;">Your can pay with Debit, Credit Card or with Crypto </p>
        <div class="card">
            <div class="card-body payment_with_card_body">
                <div class="row">
                    <div class="col-md-8 col-12">
                        <form method="POST" id="form_payment_with_card" class="payment_with_card_form">
                            @csrf
                            <div class="col-12">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'card_name' ,
                                            'placeholder' => 'Card Name' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-12 mt-3">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'number' ,
                                            'name' => 'card_numbers' ,
                                            'placeholder' => 'Card Numbers' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 col-12">
                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                        array( 
                                                'type' => 'month' ,
                                                'name' => 'card_expiry' ,
                                                'placeholder' => 'MM/YY' ,
                                                'required'=> true , 'id' => ''
                                            )
                                        )
                                    }}
                                </div>
                                <div class="col-md-6 col-12">
                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                        array( 
                                                'type' => 'number' ,
                                                'name' => 'cvc' ,
                                                'placeholder' => 'CVC' ,
                                                'required'=> true , 'id' => ''
                                            )
                                        )
                                    }}
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'email' ,
                                            'name' => 'email' ,
                                            'placeholder' => $email,
                                            'readonly' => true,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-12 mt-3">
                                {{ theme()->getView('partials/widgets/form/input/_select',
                                    array( 
                                            'type' => 'select' ,
                                            'name' => 'country' ,
                                            'item' => array(
                                                'united states' => 'United States',
                                                'country2' => 'Country 2',
                                                'country3' => 'Country 3',
                                                'country4' => 'Country 4'
                                            ),
                                            'placeholder' => 'Country' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-12 payment_with_card_checkbox f-16-fig" style="color: #6F6F6F;">
                                <div>
                                    <input type="checkbox" value="" id="flexCheckDefault">
                                    <label for="flexCheckDefault">
                                        Save my info for secure 1- click checkout
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="button" id="pay_now" class="btn" style="background: #F4B42A;  color:#fff" type="button">Pay Now</button>
                            </div>
                        </form>
                    </div>

                    <?php

                    $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

                    function generate_string($input, $strength = 16)
                    {
                        $input_length = strlen($input);
                        $random_string = '';
                        for ($i = 0; $i < $strength; $i++) {
                            $random_character = $input[mt_rand(0, $input_length - 1)];
                            $random_string .= $random_character;
                        }

                        return $random_string;
                    }

                    $randomOrderNumber = generate_string($permitted_chars, 10);

                    ?>

                    <div class="col-md-4 col-12 ps-5">
                        <div class="payment_with_card_order_details pt-3 ml-3">
                            <h5 class="f-18-fig-neue">Order # <span id="order_number">{{$randomOrderNumber}}</span></h5>
                            <div id="order_details" class="d-flex justify-content-between f-16-fig" style="color: #6F6F6F;">
                                <span>Includes 1x <span id="planType"></span>:</span>
                                <span>$<span id="planPrice"></span></span>
                            </div>
                            <div class="subtotal d-flex justify-content-between f-18-fig-questrial" style="color: #6F6F6F;">
                                <span>Subtotal:</span>
                                <span>$<span id="subTotal"></span></span>
                            </div>
                            <div class="d-flex justify-content-between pt-5 pb-5">
                                <span class="f-18-fig-questrial" style="color: #6F6F6F;">Total:</span>
                                <span class="f-24-fig-700-questrial" style="color: black;">$<span id="totalAmount"></span></span>
                            </div>
                            <hr class="mb-5">
                            <p class="f-16-fig pt-4" style="color: #6F6F6F;">Do you have a promo code?</p>
                            <div class="row">
                                <div class="col-md-8 col-12">
                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                        array( 
                                                'type' => 'text' ,
                                                'name' => 'promo_code' ,
                                                'placeholder' => 'Promo Code' ,
                                                'required'=> true , 'id' => ''
                                            )
                                        )
                                    }}
                                </div>
                                <div class="col-md-4 col-12">
                                    <a class="btn apply_btn mt-5" href="">Apply</a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        var user = document.getElementById('user').innerText;
        let amount = 0;
        let crypto_plan_id = 0;
        let order_number = document.getElementById('order_number').innerText;
        if (localStorage.userID == parseInt(user)) {
            amount = localStorage.price;
            crypto_plan_id = localStorage.crypto_plan_id;
            document.getElementById('subTotal').innerText = amount;
            document.getElementById('totalAmount').innerText = amount;
        } else {
            document.getElementById('subTotal').innerText = 0;
            document.getElementById('totalAmount').innerText = 0;
        }

        document.getElementById('planType').innerText = localStorage.planType;
        document.getElementById('planPrice').innerText = localStorage.planPrice;


        let services = JSON.parse(localStorage.getItem("services"));
        let content = '';
        if (services.daily_sync.status) {
            content += '<div id="order_details" class="d-flex justify-content-between f-16-fig" style="color: #6F6F6F;"><span>' + services.daily_sync.title + ':</span><span>$<span></span>' + services.daily_sync.price + '</span></div>';
            // document.getElementById('order_details').insertAdjacentHTML()
            // '<div id="order_details" class="d-flex justify-content-between f-16-fig" style="color: #6F6F6F;"><span>'+services.daily_sync.title+':</span><span>$<span></span>'+services.daily_sync.price+'</span></div>';
        }
        if (services.dual_nationality.status) {
            content += '<div id="order_details" class="d-flex justify-content-between f-16-fig" style="color: #6F6F6F;"><span>' + services.dual_nationality.title + ':</span><span>$<span></span>' + services.dual_nationality.price + '</span></div>';
            // document.getElementById('order_details').insertAdjacentHTML()
            // '<div id="order_details" class="d-flex justify-content-between f-16-fig" style="color: #6F6F6F;"><span>'+services.daily_sync.title+':</span><span>$<span></span>'+services.daily_sync.price+'</span></div>';
        }
        if (services.tax_report_for_us.status) {
            content += '<div id="order_details" class="d-flex justify-content-between f-16-fig" style="color: #6F6F6F;"><span>' + services.tax_report_for_us.title + ':</span><span>$<span></span>' + services.tax_report_for_us.price + '</span></div>';
            // document.getElementById('order_details').insertAdjacentHTML()
            // '<div id="order_details" class="d-flex justify-content-between f-16-fig" style="color: #6F6F6F;"><span>'+services.daily_sync.title+':</span><span>$<span></span>'+services.daily_sync.price+'</span></div>';
        }

        document.getElementById('order_details').insertAdjacentHTML("afterEnd", content);









        document.getElementById("pay_now").addEventListener("click", (event) => {

            var f = document.getElementById('form_payment_with_card');
            var data = new FormData(f);
            fetch('{{route("crypto.create-payment-with-card-method")}}', {

                    // Adding method type
                    method: "POST",

                    // Adding body or contents to send
                    body: JSON.stringify({

                        amount: amount,
                        crypto_plan_id: crypto_plan_id,
                        order_number: order_number,
                        currency: 'usd',

                        card_name: data.get('card_name'),
                        card_numbers: data.get('card_numbers'),

                        country: data.get('country'),
                        card_expiry: data.get('card_expiry'),
                        cvc: data.get('cvc'),
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
                    if (data.status) {
                        localStorage.clear();
                        Swal.fire({
                            title: data.message,
                            text: "",
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Continue',
                            allowOutsideClick: false
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = 'http://' + window.location.hostname + '/crypto/dashboard';

                            }
                        })
                    } else {
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
                })
        });
    </script>
</x-base-layout>
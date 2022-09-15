<x-base-layout>

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
                        <form action="" class="payment_with_card_form">
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
                                                'name' => 'month' ,
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
                                            'placeholder' => 'Email' ,
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
                                                'country1' => 'United States',
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
                                    <input type="checkbox" value="" id="flexCheckDefault" >
                                    <label for="flexCheckDefault">
                                    Save my info for secure 1- click checkout
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn" style="background: #F4B42A;  color:#fff" type="button">Pay Now</button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="col-md-4 col-12 ps-5">
                        <div class="payment_with_card_order_details pt-3 ml-3">
                            <h5 class="f-18-fig-neue">Order #INDA9AFD13</h5>
                            <p class="f-16-fig" style="color: #6F6F6F;">Includes 1x Newbie (For 2021)</p>
                            <div class="subtotal d-flex justify-content-between f-18-fig-questrial" style="color: #6F6F6F;">
                                <span>Subtotal:</span>
                                <span>$120</span>
                            </div>
                            <div class="d-flex justify-content-between pt-5 pb-5">
                                <span class="f-18-fig-questrial" style="color: #6F6F6F;">Total:</span>
                                <span class="f-24-fig-700-questrial" style="color: black;">$52</span>
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
</x-base-layout>
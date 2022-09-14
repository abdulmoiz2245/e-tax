<x-base-layout>

    <style>
        .crypto form {
            max-width: 400px;
        }

        #transaction_table tr td {
            padding-top: 18px;
            padding-bottom: 18px;

        }

        @media (min-width: 320px) and (max-width: 320px) {
            .me-lg-15 {
                margin-right: 150px !important;
            }

        }
    </style>
    <div class="row gy-5 g-xl-4 mb-5" style="margin-top: 50px; ">
        <div class="col-md-12">
            <span><a href="{{ route('crypto.transaction.transaction') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></span>
            <span class="pr-2" style="color:#6F6F6F;padding-left: 7px;">Back to Transactions</span>
        </div>
        <div class="col-md-12" style="margin-bottom: 26px;">
            <h1 class="dash-title" style="margin-bottom: 18px; font-size:30px !important">
                Add Transaction
            </h1>
        </div>
    </div>
    <div class="card crypto pb-5 pt-5">
        <div class="card-bo dy ">
            <form action="" class="mx-auto">
                <!-- <p class="f-16-fig" style="color: #6F6F6F;">Download your transaction files for all years of trading and upload them here. Every deposit, withdrawal & trade should be added. </p> -->
                {{ theme()->getView('partials/widgets/form/input/_select',
                        array( 
                                'type' => 'select' ,
                                'name' => 'type_of_transaction' ,
                                'item' => array(
                                    'ir' =>  'IR',
                                    'bs'=>   'BS',
                                    'ks' =>  'KS'
                                    ) ,

                                'placeholder' => 'Type of transaction' ,
                                'required'=> true , 'id' => ''
                            )
                        )
                }}
                {{ theme()->getView('partials/widgets/form/input/_text',
                        array( 
                                'type' => 'date' ,
                                'name' => 'date' ,
                               

                                'placeholder' => 'Date' ,
                                'required'=> true , 'id' => ''
                            )
                        )
                    }}

                {{ theme()->getView('partials/widgets/form/input/_select',
                        array( 
                                'type' => 'select' ,
                                'name' => 'wallet' ,
                                'item' => array(
                                'ir' =>  'IR',
                                'bs'=>   'BS',
                                'ks' =>  'KS'
                                ) ,

                                'placeholder' => 'Select wallet' ,
                                'required'=> true , 'id' => ''
                            )
                        )
                }}

                {{ theme()->getView('partials/widgets/form/input/_select',
                        array( 
                                'type' => 'select' ,
                                'name' => 'coin' ,
                                'item' => array(
                                'ir' =>  'IR',
                                'bs'=>   'BS',
                                'ks' =>  'KS'
                                ) ,

                                'placeholder' => 'Coin' ,
                                'required'=> true , 'id' => ''
                            )
                        )
                }}

                {{ theme()->getView('partials/widgets/form/input/_text',
                        array( 
                                'type' => 'select' ,
                                'name' => 'coin_quantity' ,
                                'placeholder' => 'Number of coins' ,
                                'required'=> true , 'id' => ''
                            )
                        )
                }}

                <button class=" btn w-100  mt-7" style="background: #F4B42A;  color:#fff">Save</button>
            </form>
        </div>
    </div>



</x-base-layout>
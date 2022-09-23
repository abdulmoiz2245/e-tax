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

        body {
            background-color: #F8F9FD;
        }
    </style>
    <div class="row gy-5 g-xl-4 mb-5" style="margin-top: 1.2%; ">
        <div class="col-md-12 f-16-neu-400-fig">
            <a href="{{ route('crypto.transaction.transaction') }}">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                <span class="ps-2" style="color:#6F6F6F">Back to Transactions</span>
            </a>
        </div>
        <div class="col-md-12" style="margin-bottom: 3.5%;">
            <h1 class="f-30-fig-neue">
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

                <button class=" btn w-100  mt-7 mb-8" style="background: #F4B42A;  color:#fff">Save</button>
            </form>
        </div>
    </div>



</x-base-layout>
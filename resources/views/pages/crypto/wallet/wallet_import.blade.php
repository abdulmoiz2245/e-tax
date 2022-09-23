<x-base-layout>

    <style>
        .crypto form {
            max-width: 400px;
        }

        body {
            background-color: #F8F9FD;
        }

        /* .drop-container {
            position: relative;
            display: flex;
            gap: 10px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 200px;
            padding: 20px;
            border-radius: 10px;
            border: 2px dashed #555;
            color: #444;
            cursor: pointer;
            transition: background .2s ease-in-out, border .2s ease-in-out;
        }

        .drop-container:hover {
            background: #eee;
            border-color: #111;
        }

        .drop-container:hover .drop-title {
            color: #222;
        }

        .drop-title {
            color: #444;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            transition: color .2s ease-in-out;
        } */
    </style>
    <div class="row gy-5 g-xl-4 mb-5" style="margin-top: 50px; ">
        <div class="col-md-12">
            <span><a href="{{ route('crypto.wallet') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></span>
            <span class="pr-2" style="color:#6F6F6F;padding-left: 7px;">Back To Wallets</span>
        </div>
        <div class="col-md-12" style="margin-bottom: 26px;">
            <h1 class="dash-title" style="margin-bottom: 18px; font-size:30px !important">
                <span><img src="{{ asset(theme()->getMediaUrlPath() . 'img/binance.png') }}" width="48" height="48" alt=""></span>
                Coinbase
            </h1>
        </div>
    </div>
    <div class="card crypto">
        <div class="card-body mx-auto">
            <form action="">
                <p class="f-16-fig" style="color: #6F6F6F;">Download your transaction files for all years of trading and upload them here. Every deposit, withdrawal & trade should be added. </p>
                <label for="images" class="drop-container">
                    <span class="drop-title">Drop files here</span>
                    or
                    <input type="file" id="images" accept="image/*" required>

                </label>
                {{ theme()->getView('partials/widgets/form/input/_select',
                        array( 
                                'type' => 'select' ,
                                'name' => 'timezone' ,
                                'item' => array(
                                'ir' =>  'IR',
                                'bs'=>   'BS',
                                'ks' =>  'KS'
                                ) ,

                                'placeholder' => 'Time zone' ,
                                'required'=> true , 'id' => ''
                            )
                        )
                }}
                {{ theme()->getView('partials/widgets/form/input/_select',
                        array( 
                                'type' => 'select' ,
                                'name' => 'tag_deposit_as' ,
                                'item' => array(
                                'ir' =>  'IR',
                                'bs'=>   'BS',
                                'ks' =>  'KS'
                                ) ,

                                'placeholder' => 'Tag  deposits as' ,
                                'required'=> true , 'id' => ''
                            )
                        )
                    }}

                <button class=" btn w-100  mt-7" style="background: #F4B42A;  color:#fff">Save</button>
            </form>
        </div>
    </div>



</x-base-layout>
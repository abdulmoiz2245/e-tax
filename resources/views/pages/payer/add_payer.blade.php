<x-base-layout>
    <style>


      
        .card-title-text{
            font-style: normal;
            font-weight: 400 !important;
            font-size: 15px !important;
            line-height: 19px;
            color: #6F6F6F !important;

        }

        .card-title-p{
            font-style: normal;
            font-weight: 400 !important;
            font-size: 12px !important;
            line-height: 19px;
            color: #6F6F6F !important;

        }

        .card-count{

            font-style: normal;
            font-weight: 600 !important;
            font-size: 42px !important;
            line-height: 53px;
        }

        .dash-title{
            font-style: normal;
            font-weight: 600 !important;
            font-size: 30px !important;
            line-height: 38px;
        }

        .dash-title-secondry{
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;
        }

        .card .card-header{
            min-height: auto ;
        }

        .card-main-title{
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 22px;
            color: #000000;
        }

        @media (min-width: 1440px)  {
            .card-title-text{
                font-style: normal;
                font-weight: 400 !important;
                font-size: 16px !important;
                line-height: 19px;
                color: #6F6F6F !important;
            }

            

            .dash-title{
                font-weight: 700 !important;
               
            }
            .card-count{

                font-style: normal;
                font-weight: 600 !important;
                font-size: 42px !important;
                line-height: 53px;
            }
        }

       

        @media (min-width: 320px) and (max-width:1200){
            .billing-form{
                padding-left: 15% !important;
                padding-right: 15% !important;

            }
        }

        @media (min-width: 1201px) {

            .billing-form{
                padding-left: 25% !important;
                padding-right: 25% !important;

            }
        }

        @media (min-width: 1200px){
            .container{
                max-width: 1093px !important;
            }
        }
        input[type='radio'] {
           
            accent-color:#ffc700
        }
        .center {
  display: flex;
  justify-content: center;
  align-items: center;
  ; 
}
    </style>

    <!--begin::Row-->
    <div class="row gy-5 g-xl-4" style="margin-top: 0px; margin-bottom:20px">

        <!--begin::Col-->

        <div class="col-md-12">
            <span><a href="/billing-invoice"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></span>
            <span class="pr-2" style="color:#6F6F6F;padding-left: 7px;">Back to Payers</span>
        </div>
        <!--end::Col--> 

        <!--begin::Col-->

        <div class="col-md-12">
            <h1 class="dash-title">Add New Payer</h1>
        </div>
        <!--end::Col--> 
    </div>
    <!--end::Row-->



    <!--begin::Row-->
    <div class="row " style="margin-bottom: 36px;" >
        <!--begin::Col-->
        <div class="col-md-12">
            <div class="card ">
                    

                    <!--begin::Body-->
                    <div class="card-body billing-form d-flex flex-column pt-3 pb-3 justify-content-end" >
                        <form action="" method="post">
                            <div>
                              
                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                        array( 
                                                'type' => 'text' ,
                                                'name' => 'Tin' ,
                                                'placeholder' => 'Tin' ,
                                                'required'=> true , 'id' => ''
                                            )
                                        )
                                    }}

                                  
                                        {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'text' ,
                                                    'name' => 'payer_name' ,
                                                    'placeholder' => 'Payer Name' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                        {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'text' ,
                                                    'name' => 'address_1' ,
                                                    'placeholder' => 'Address 1' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                        {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'text' ,
                                                    'name' => 'address_2' ,
                                                    'placeholder' => 'Address 2' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                        {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'text' ,
                                                    'name' => 'united_states' ,
                                                    'placeholder' => 'United States' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                        {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'text' ,
                                                    'name' => 'city' ,
                                                    'placeholder' => 'city' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}

                                        <div class="row">

                                            <div class="col-md-6">
                                                {{ theme()->getView('partials/widgets/form/input/_select',
                                                    array( 
                                                            'type' => 'select' ,
                                                            'name' => 'select_state' ,
                                                            'item' => array(
                                                            'ir' =>  'IR',
                                                            'bs'=>   'BS',
                                                            'ks' =>  'KS'
                                                            ) ,

                                                            'placeholder' => 'Select State' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}
                                                

                                            </div>
                                            <div class="col-md-6">
                                            {{ theme()->getView('partials/widgets/form/input/_text',
                                                array( 
                                                        'type' => 'text' ,
                                                        'name' => 'zip_code' ,
                                                        'placeholder' => 'Zip Code' ,
                                                        'required'=> true , 'id' => ''
                                                    )
                                                )
                                            }}
                                            </div>
                                            {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'text' ,
                                                    'name' => 'city' ,
                                                    'placeholder' => 'city' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                        {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'text' ,
                                                    'name' => 'phone' ,
                                                    'placeholder' => 'Phone' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                        {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'email' ,
                                                    'name' => 'email_address' ,
                                                    'placeholder' => 'Email Address' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                        {{ theme()->getView('partials/widgets/form/input/_text',
                                            array( 
                                                    'type' => 'text' ,
                                                    'name' => 'department_contact' ,
                                                    'placeholder' => 'Department/Contact' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
<br>
                                        <div class="row mt-5">
                                            <div class="col-md-4">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio"  style="margin-right:5px" checked>EIN
                                                </label>
   

                                            </div>
                                            <div class="col-md-4">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px" >SSN
                                                </label>
                                            </div>

                                            <div class="col-md-4">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px"  >Unknown
                                                </label>
                                            </div>
                                        </div>


                                        </div>
                            </div>

                            

                            <div style="margin-top: 34px; margin-bottom:34px">
                                <div class="center">
                                   
                                    <div class="col-md-6">
                                        <button class=" center btn w-100  mt-3"  style="background: #F4B42A;  color:#fff" >Save</button>
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

</x-base-layout>

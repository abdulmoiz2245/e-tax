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
    </style>

    <!--begin::Row-->
    <div class="row gy-5 g-xl-4" style="margin-top: 0px; margin-bottom:20px">

        <!--begin::Col-->

        <div class="col-md-12">
            <span><a href="/billing-invoice"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></span>
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
    <div class="row " style="margin-bottom: 36px;" >
        <!--begin::Col-->
        <div class="col-md-12">
            <div class="card ">
                    

                    <!--begin::Body-->
                    <div class="card-body billing-form d-flex flex-column pt-3 pb-3 justify-content-end" >
                        <form action="" method="post">
                            <div>
                                <h4 style="margin-top:30px">Billing Contact</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                        array( 
                                                'type' => 'text' ,
                                                'name' => 'first_name' ,
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
                                                'placeholder' => 'Company Name' ,
                                                'required'=> true , 'id' => ''
                                            )
                                        )
                                    }}

                                  
                                    {{ theme()->getView('partials/widgets/form/input/_text',
                                        array( 
                                                'type' => 'text' ,
                                                'name' => 'street_address_1' ,
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
                                                    'placeholder' => 'Zip' ,
                                                    'required'=> true , 'id' => ''
                                                )
                                            )
                                        }}
                                    </div>
                                </div>
                            </div>

                            <div style="margin-top: 34px; margin-bottom:34px">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn w-100  mt-3"  style="color: #8C8C8C;border: 1px solid #6F6F6F;font-size: 14px;font-weight: 400;" >Cancel</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn w-100  mt-3"  style="background: #F4B42A;  color:#fff" >Next</button>
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

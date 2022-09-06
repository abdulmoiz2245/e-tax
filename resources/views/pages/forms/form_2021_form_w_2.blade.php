<x-base-layout>

    <style>
        .card-title-text {
            font-style: normal;
            font-weight: 400 !important;
            font-size: 15px !important;
            line-height: 19px;
            color: #6F6F6F !important;

        }

        p {
            margin: 0 !important;
        }

        .limiter {
            padding: 0 !important;
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



        .dash-title-secondry {
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 24px;
        }

        .card .card-header {
            min-height: auto;
        }


        @media (min-width: 1440px) {
            .card-title-text {
                font-style: normal;
                font-weight: 400 !important;
                font-size: 16px !important;
                line-height: 19px;
                color: #6F6F6F !important;
            }





            .card-count {

                font-style: normal;
                font-weight: 600 !important;
                font-size: 42px !important;
                line-height: 53px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1140px !important;
            }
        }

    
    </style>

    <!--begin::Row-->
    <div class="row gy-5 g-xl-4 mb-5" style="margin-top: 50px; ">

        <!-- begin::Col-->

        <!-- <div class="col-md-12">
            <span><a href="/dashboard"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></span>
            <span class="pr-2" style="color:#6F6F6F;padding-left: 7px;">Back To Dashboard</span>
        </div> -->
        <!--end::Col  -->

        <!--begin::Col-->

        <div class="col-md-12" style="margin-bottom: 40px;">
            <h1 class="dash-title" style="margin-bottom: 18px; font-size:30px !important">2021 Form W-2</h1>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->



    <!--begin::Row-->
    <div class="row ">
        <!--begin::Col-->
        <div class="col-md-12">
            <div class="d-md-flex  justify-content-between align-item-end">
                <div class="">
                    <h4 class="f-20-fig">Payer Details</h4>
                </div>

                <div class="d-md-flex justify-content-end ">
                    <div class="card h-100" style="width: fit-content;box-shadow: 2px 2px 10px rgba(210, 209, 223, 0.3);border-radius: 10px;margin-right:12px">

                        <!--begin::Body-->
                        <div class="card-body d-md-flex flex-column  justify-content-end" style="padding:14px; padding-bottom:14px !important;">

                            <!--begin::Items-->
                            <div class="text-left">
                                <p style="color:#6f6f6f;margin-bottom:0px">Your saved forms will </p>
                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->

                    </div>
                    <a href="payer/add-payer">
                        <button class="btn font-neue" style="background: #F4B42A;  color:#fff;padding:14px; padding-left:30px;padding-right:30px;
                            font-style: normal;
                            font-weight: 700;
                            font-size: 16px;
                            line-height: 20px;
                          
                            color: #FFFFFF;
                        "> <i class="fa fa-plus" style="color:#fff"></i> Add New</button>
                    </a>
                </div>
            </div>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

    <!-- <div class="row">
        <div class="limiter">
            <div class="" style="padding: 0; padding-top:30px">
                <div class="">
                    <div class="">
                        <table id="payer-table">
                            <thead>
                                <tr class="table100-head">
                                    <th class="column1 f-16-fig">Payer</th>
                                    <th class="column2 f-16-fig">TIN</th>
                                    <th class="column3 f-16-fig">Recipients</th>
                                    <th class="column4 f-16-fig">In Progress</th>
                                    <th class="column5 f-16-fig">In Cart</th>
                                    <th class="column6 f-16-fig">Filed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="column1 f-16-fig">2017-09-29 01:22</td>
                                    <td class="column2 f-16-fig">200398</td>
                                    <td class="column3 f-16-fig">iPhone X 64Gb Grey</td>
                                    <td class="column4 f-16-fig">$999.00</td>
                                    <td class="column5 f-16-fig">1</td>
                                    <td class="column6 f-16-fig">$999.00</td>
                                </tr>
                                <tr>
                                    <td class="column1 f-16-fig">2017-09-28 05:57</td>
                                    <td class="column2 f-16-fig">200397</td>
                                    <td class="column3 f-16-fig">Samsung S8 Black</td>
                                    <td class="column4 f-16-fig">$756.00</td>
                                    <td class="column5 f-16-fig">1</td>
                                    <td class="column6 f-16-fig">$756.00</td>
                                </tr>
                                <tr>
                                    <td class="column1 f-16-fig">2017-09-26 05:57</td>
                                    <td class="column2 f-16-fig">200396</td>
                                    <td class="column3 f-16-fig">Game Console Controller</td>
                                    <td class="column4 f-16-fig">$22.00</td>
                                    <td class="column5 f-16-fig">2</td>
                                    <td class="column6 f-16-fig">$44.00</td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6" style="padding-top: 14px;padding-bottom: 14px;">
                                        <div class="d-md-flex justify-content-end">
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
        </div>
    </div> -->

    <div class="row mt-10">
        <div class="card">
            <div class="card-body" style="padding: 24px;">
                <p class="f-16-fig" style="color:#6F6F6F"> <span style="font-style: normal;
                        font-weight: 700;
                        font-size: 38px;
                        line-height: 48px;
                        text-align: center;
                        font-family: 'Neue Haas Grotesk Text Pro' ,sans-serif !important;
                        color: #F4B42A;
                        ">
                        1.
                    </span> Next, select a previously entered recipient or choose to add a new recipient.</p>
            </div>
        </div>
    </div>

    <div class="row " style="margin-top: 100px;">
        <div class="col-md-12">
            <div class="d-md-flex  justify-content-between" style="align-items: end;">
                <div class="">
                    <h4 class="f-20-fig">Recipient Details</h4>
                </div>

                <div class="d-md-flex justify-content-end tag">

                    {{ theme()->getView('partials/widgets/form/input/_select',
                                                    array( 
                                                            'type' => 'select' ,
                                                            'name' => 'select_payer' ,
                                                            'item' => array(
                                                            'ir' =>  'IR',
                                                            'bs'=>   'BS',
                                                            'ks' =>  'KS'
                                                            ) ,

                                                            'placeholder' => 'Select Payer' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-10">
        <div class="card">
            <div class="card-body" style="padding: 24px;">
                <p class="f-16-fig" style="color:#6F6F6F"> <span style="font-style: normal;
                        font-weight: 700;
                        font-size: 38px;
                        line-height: 48px;
                        text-align: center;
                        font-family: 'Neue Haas Grotesk Text Pro' ,sans-serif !important;
                        color: #F4B42A;
                        ">
                        2.
                    </span> Next, select a previously entered recipient or choose to add a new recipient..</p>
            </div>
        </div>
    </div>

    <div class="row gy-5 g-xl-4 mb-5" style="margin-top: 50px; ">
        <div class="col-md-12" style="margin-bottom: 40px;">
            <h1 class="f-20-fig" style="margin-bottom: 18px;">Income</h1>
            <!-- <p class="f-16-fig" style="color:#6F6F6F">If your State is not part of the Combined Federal/State Filing program, you may check to file State Tax information directly to that State. A rate of $1.00 per form will be added to your cart. Supported states are: DC, GA, IL, KS, MI, NC, OR, RI, VA, VT, WI.</p> -->
        </div>
    </div>
    <div class="row " style="margin-bottom: 36px;">
        <!--begin::Col-->
        <div class="col-md-12">
            <div class="card ">


                <!--begin::Body-->
                <div class="card-body billing-form d-flex flex-column pt-3 pb-3 justify-content-end">
                    <form action="" method="post">

                        <iv class="row">
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Nonemployee compensation' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'royalities' ,
                                            'placeholder' => 'Federal income tax withheld' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'royalities' ,
                                            'placeholder' => 'Social security wages' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'royalities' ,
                                            'placeholder' => 'Social security tax withheld' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'royalities' ,
                                            'placeholder' => 'Medicare wages and tips' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'royalities' ,
                                            'placeholder' => 'Medicare tax withheld' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'royalities' ,
                                            'placeholder' => ' Social security tips' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'royalities' ,
                                            'placeholder' => 'Allocated tips' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'royalities' ,
                                            'placeholder' => 'Scholarships or grants' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'royalities' ,
                                            'placeholder' => 'Scholarships or grants' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-12" style="padding-top: 15px;">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">Statutory employee</label>
                            </div>
                            <div class="col-md-12" style="padding-top: 15px;">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">Retirement plan</label>
                            </div>
                            <div class="col-md-12" style="padding-top: 15px;">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">Third-party sick pay</label>
                            </div>


                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_select',
                                    array( 
                                            'type' => 'select' ,
                                            'item' => array(
                                                'state' =>  'Code A',
                                                'sd' =>  'AD',
                                                'kb' =>  'KB',
                                            ) ,

                                            'name' => 'Code A' ,
                                            'placeholder' => 'Other amount C' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_select',
                                    array( 
                                            'type' => 'select' ,
                                            'item' => array(
                                                'state' =>  'Code B',
                                                'sd' =>  'AD',
                                                'kb' =>  'KB',
                                            ) ,

                                            'name' => 'Code B' ,
                                            'placeholder' => 'Other amount C' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_select',
                                    array( 
                                            'type' => 'select' ,
                                            'item' => array(
                                                'state' =>  'Code C',
                                                'sd' =>  'AD',
                                                'kb' =>  'KB',
                                            ) ,

                                            'name' => 'Code C' ,
                                            'placeholder' => 'Other amount C' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_select',
                                    array( 
                                            'type' => 'select' ,
                                            'item' => array(
                                                'state' =>  'Code D',
                                                'sd' =>  'AD',
                                                'kb' =>  'KB',
                                            ) ,

                                            'name' => 'Code D' ,
                                            'placeholder' => 'Other amount C' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Amount A' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Amount B' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Amount C' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Amount D' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Other A' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Other B' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Other C' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Other amount A' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Other amount B' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Other amount C' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>


                    </form>

                </div>
                <!--end::Body-->
            </div>

        </div>
        <!--end::Col-->


    </div>

    <div class="row gy-5 g-xl-4 mb-5" style="margin-top: 50px; ">
        <div class="col-md-12" style="margin-bottom: 40px;">
            <h1 class="f-20-fig" style="margin-bottom: 18px;">State Withholdings</h1>
            <p class="f-16-fig" style="color:#6F6F6F">If your State is not part of the Combined Federal/State Filing program, you may check to file State Tax information directly to that State. A rate of $1.00 per form will be added to your cart. Supported states are: DC, GA, IL, KS, MI, NC, OR, RI, VA, VT, WI.</p>
        </div>
    </div>

    <div class="row " style="margin-bottom: 36px;">
        <!--begin::Col-->
        <div class="card ">


            <!--begin::Body-->
            <div class="card-body billing-form d-flex flex-column pt-3 pb-3 justify-content-end">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            {{ theme()->getView('partials/widgets/form/input/_select',
                                    array( 
                                            'type' => 'select' ,
                                            'item' => array(
                                                'state' =>  'State',
                                                'sd' =>  'AD',
                                                'kb' =>  'KB',
                                            ) ,

                                            'name' => 'KB' ,
                                            'placeholder' => 'Other amount C' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                        </div>
                        <div class="col-md-6">
                            {{ theme()->getView('partials/widgets/form/input/_select',
                                    array( 
                                            'type' => 'select' ,
                                            'item' => array(
                                                'state' =>  'AD',
                                                'sd' =>  'AD',
                                                'kb' =>  'KB',
                                            ) ,

                                            'name' => 'State' ,
                                            'placeholder' => 'State' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                        </div>
                        <div class="col-md-6">
                            {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Employer’s state ID number' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                        </div>
                        <div class="col-md-6">
                            {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Employer’s state ID number' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                        </div>
                        <div class="col-md-6">
                            {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'State wages, tips, etc.' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                        </div>
                        <div class="col-md-6">
                            {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'State wages, tips, etc.' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                        </div>
                        <div class="col-md-6">
                            {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'State income tax' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                        </div>
                        <div class="col-md-6">
                            {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'State income tax' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                        </div>
                        <div class="col-md-6">
                            {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Local wages, tips, etc.' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                        </div>
                        <div class="col-md-6">
                            {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Local wages, tips, etc.' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                        </div>
                        <div class="col-md-6">
                            {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Locality name' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                        </div>
                        <div class="col-md-6">
                            {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Locality name' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                        </div>
                    </div>

                </form>
            </div>




        </div>
    </div>

    <div class="row gy-5 g-xl-4 mb-5" style="margin-top: 50px; ">
        <div class="col-md-12" style="margin-bottom: 40px;">
            <h1 class="f-20-fig" style="margin-bottom: 18px;">Misc. Details</h1>

        </div>
    </div>

    <div class="row " style="margin-bottom: 36px;">
        <!--begin::Col-->
        <div class="card ">


            <!--begin::Body-->
            <div class="card-body billing-form d-flex flex-column pt-3 pb-3 justify-content-end">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            {{ theme()->getView('partials/widgets/form/input/_select',
                                    array( 
                                            'type' => 'select' ,
                                            'item' => array(
                                                'state' =>  'State',
                                                'sd' =>  'AD',
                                                'kind_of_payer' =>  'Kind of payer',
                                            ) ,

                                            'name' => 'KB' ,
                                            'placeholder' => 'Kind of payer' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                        </div>
                        <div class="col-md-6">
                            {{ theme()->getView('partials/widgets/form/input/_select',
                                    array( 
                                            'type' => 'select' ,
                                            'item' => array(
                                                'state' =>  'AD',
                                                'sd' =>  'AD',
                                                'terminating_business' =>  'Terminating Business',
                                            ) ,

                                            'name' => 'State' ,
                                            'placeholder' => 'Terminating Business' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                        </div>
                        <div class="col-md-12" style="padding-top: 15px;">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1">Check this box if the amount in box 1 includes amounts for an academic period beginning January–March 2022</label>
                        </div>

                    </div>
                    <div style="margin-top: 34px; margin-bottom:34px">
                            <div class="row">
                                <div class="col-md-6"><button class=" btn w-100  mt-3" style="background: #F4B42A;  color:#fff">Save</button></div>
                                <div class="col-md-6">
                                    <button class=" btn w-100 f-16-fig mt-3" style="  color:#6F6F6F;border: 1px solid #BFBFBF;border-radius: 10px;">Cancel</button>
                                </div>
                            </div>
                        </div>
                </form>
            </div>




        </div>
    </div>



</x-base-layout>
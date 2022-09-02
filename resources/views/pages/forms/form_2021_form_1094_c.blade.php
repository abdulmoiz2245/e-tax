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

        .column1 {
            width: 150px;
            padding-left: 20px;
        }

        .column2 {
            width: 155px;
        }

        .column3 {
            width: 220px;
            text-align: left;

        }

        .column4 {
            width: 220px;
            text-align: left;

        }

        .column5 {
            width: 120px;
            text-align: left;

        }

        .column6 {
            width: 72px;
            text-align: left;
            padding-right: 20px;
        }

        table thead tr {
            height: 60px;
            background: #E6EAF9;
        }

        .table100-head th {
            color: black;
        }

        table tbody tr{
            border-bottom: none;
        }

        tbody tr:hover {
            color: #000;
            background-color: #fff;
            cursor:auto;
        }

/* 
        .table{
            min-width: 931px !important;
        } */

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

        .tag .select-box {
            width: 200px;
        }
    </style>

    <!--begin::Row-->
    <div class="row gy-5 g-xl-4 mb-5" style="margin-top: 50px; ">

        <!-- begin::Col-->

        <!-- <div class="col-md-12">
            <span><a href="/index"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></span>
            <span class="pr-2" style="color:#6F6F6F;padding-left: 7px;">Back To Dashboard</span>
        </div> -->
        <!--end::Col  -->

        <!--begin::Col-->

        <div class="col-md-12" style="margin-bottom: 40px;">
            <h1 class="dash-title" style="margin-bottom: 18px; font-size:30px !important">2021 Form 1094-C</h1>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->



    <form>
        <div class="row gy-5 g-xl-4 mb-5" style="margin-top: 50px; ">
            <div class="col-md-12" style="margin-bottom: 40px;">
                <h1 class="f-20-fig" style="margin-bottom: 18px;">Part I - Applicable Large Employer Member (ALE Member)</h1>
                <!-- <p class="f-16-fig" style="color:#6F6F6F">If your State is not part of the Combined Federal/State Filing program, you may check to file State Tax information directly to that State. A rate of $1.00 per form will be added to your cart. Supported states are: DC, GA, IL, KS, MI, NC, OR, RI, VA, VT, WI.</p> -->
            </div>
        </div>
        <div class="row " style="margin-bottom: 36px;">
            <div class="col-md-12">
                <div class="card ">


                    <!--begin::Body-->
                    <div class="card-body billing-form d-flex flex-column pt-3 pb-3 justify-content-end">

                        <div class="row">
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Name of ALE Member (Employer)' ,
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
                                            'placeholder' => 'Employer identification number (EIN)' ,
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
                                            'type' => 'text' ,
                                            'name' => 'other_income' ,
                                            'placeholder' => 'Street address 1' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'other_income' ,
                                            'placeholder' => 'Street address 2' ,
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
                                            'type' => 'text' ,
                                            'name' => 'fishing_boat_proceeds' ,
                                            'placeholder' => 'City or town' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'medical_and_healthcare_payments' ,
                                            'placeholder' => 'State or province' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>


                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'fishing_boat_proceeds' ,
                                            'placeholder' => 'ZIP or foreign postal code' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'medical_and_healthcare_payments' ,
                                            'placeholder' => 'Country' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_select',
                                                array( 
                                                        'type' => 'select' ,
                                                        'name' => 'Telephone no' ,
                                                        'item' => array(
                                                        'ir' =>  'IR',
                                                        'bs'=>   'BS',
                                                        'Telephone no' =>  'Telephone no'
                                                        ) ,

                                                        'placeholder' => ' State' ,
                                                        'required'=> true , 'id' => ''
                                                    )
                                                )
                                            }}


                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'fishing_boat_proceeds' ,
                                            'placeholder' => 'Name of person to contact-First Name' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'medical_and_healthcare_payments' ,
                                            'placeholder' => ' Name of person to contact-Middle Name' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_select',
                                                array( 
                                                        'type' => 'select' ,
                                                        'name' => 'Telephone no' ,
                                                        'item' => array(
                                                        'ir' =>  'IR',
                                                        'bs'=>   'BS',
                                                        'Name of person to contact-Last Name' =>  'Name of person to contact-Last Name'
                                                        ) ,

                                                        'placeholder' => ' State' ,
                                                        'required'=> true , 'id' => ''
                                                    )
                                                )
                                            }}


                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'fishing_boat_proceeds' ,
                                            'placeholder' => 'Name of person to contact-Suffix' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'medical_and_healthcare_payments' ,
                                            'placeholder' => 'Contact telephone number' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'fishing_boat_proceeds' ,
                                            'placeholder' => ' Name of Designated Government Entity (If applicable)' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'medical_and_healthcare_payments' ,
                                            'placeholder' => 'Employer identification number (EIN)' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'medical_and_healthcare_payments' ,
                                            'placeholder' => 'Street address (including room or suite no.)' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'medical_and_healthcare_payments' ,
                                            'placeholder' => 'City or town' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_select',
                                                array( 
                                                        'type' => 'select' ,
                                                        'name' => 'State or province' ,
                                                        'item' => array(
                                                        'ir' =>  'IR',
                                                        'bs'=>   'BS',
                                                        'State or province' =>  'State or province'
                                                        ) ,

                                                        'placeholder' => ' State' ,
                                                        'required'=> true , 'id' => ''
                                                    )
                                                )
                                            }}


                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'medical_and_healthcare_payments' ,
                                            'placeholder' => 'ZIP or foreign postal code' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_select',
                                                array( 
                                                        'type' => 'select' ,
                                                        'name' => 'Country' ,
                                                        'item' => array(
                                                        'ir' =>  'IR',
                                                        'bs'=>   'BS',
                                                        'Country' =>  'Country'
                                                        ) ,

                                                        'placeholder' => ' State' ,
                                                        'required'=> true , 'id' => ''
                                                    )
                                                )
                                            }}


                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'medical_and_healthcare_payments' ,
                                            'placeholder' => 'Name of person to contact - First Name' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'medical_and_healthcare_payments' ,
                                            'placeholder' => 'Name of person to contact - Middle Name' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'medical_and_healthcare_payments' ,
                                            'placeholder' => 'Name of person to contact - Last Name' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'medical_and_healthcare_payments' ,
                                            'placeholder' => 'Name of person to contact -Suffix' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'medical_and_healthcare_payments' ,
                                            'placeholder' => 'Contact telephone number' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>


                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'medical_and_healthcare_payments' ,
                                            'placeholder' => 'Total number of Forms 1095-C submitted with this transmittal' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>

                            <div class="col-md-12" style="padding-top: 15px;">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">7c Check if withholding occurred in subsequent year with respect to a partnership interest</label>
                            </div>
                        </div>


                        <div style="margin-top: 34px; margin-bottom:34px">

                        </div>


                    </div>
                    <!--end::Body-->
                </div>
            </div>
        </div>


        <div class="row gy-5 g-xl-4 mb-5" style="margin-top: 50px; ">
            <div class="col-md-12" style="margin-bottom: 40px;">
                <h1 class="f-20-fig" style="margin-bottom: 18px;">
                    Part II - ALE Member Information</h1>
                <!-- <p class="f-16-fig" style="color:#6F6F6F">If your State is not part of the Combined Federal/State Filing program, you may check to file State Tax information directly to that State. A rate of $1.00 per form will be added to your cart. Supported states are: DC, GA, IL, KS, MI, NC, OR, RI, VA, VT, WI.</p> -->
            </div>
        </div>
        <div class="row " style="margin-bottom: 36px;">
            <div class="col-md-12">
                <div class="card ">


                    <!--begin::Body-->
                    <div class="card-body billing-form d-flex flex-column pt-3 pb-3 justify-content-end">

                        <div class="row">
                            <div class="col-md-6">
                                {{ theme()->getView('partials/widgets/form/input/_text',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'rent' ,
                                            'placeholder' => 'Total number of Forms 1095-C filed by and behalf of ALE Member' ,
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
                                            'placeholder' => 'Is ALE Member a member of an Aggregated ALE Group? ' ,
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
                                            'type' => 'text' ,
                                            'name' => 'other_income' ,
                                            'placeholder' => 'Certifications of Eligibility (select all that apply):' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6" style="padding-top: 15px;">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">Qualifying Offer Method</label>
                            </div>

                            <div class="col-md-6" style="padding-top: 15px;">
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1">98% Offer Method</label>
                            </div>
                        </div>


                        <div style="margin-top: 34px; margin-bottom:34px">

                        </div>


                    </div>
                    <!--end::Body-->
                </div>
            </div>
        </div>

        <div class="row gy-5 g-xl-4 mb-5" style="margin-top: 50px; ">
            <div class="col-md-12" style="margin-bottom: 40px;">
                <h1 class="f-20-fig" style="margin-bottom: 18px;">
                    Part III - ALE Member Information - Monthly</h1>
                <!-- <p class="f-16-fig" style="color:#6F6F6F">If your State is not part of the Combined Federal/State Filing program, you may check to file State Tax information directly to that State. A rate of $1.00 per form will be added to your cart. Supported states are: DC, GA, IL, KS, MI, NC, OR, RI, VA, VT, WI.</p> -->
            </div>
        </div>
        <div class="row " style="margin-bottom: 36px;overflow-x:auto;">
            <div class="col-md-12">
                <div class="limiter">
                    <div class="container-table100" style="padding: 0; padding-top:30px">
                        <div class="wrap-table100">
                            <div class="table100">
                                <table id="payer-table">
                                    <thead>
                                        <tr class="table100-head">
                                            <th class="column1 f-16-neu-400-fig" style="font-size: 13px !important;"></th>
                                            <th class="column2 f-16-neu-400-fig" style="font-size: 13px !important;">a. Minimum Essential <br>Coverage Offer Indicator</th>
                                            <th class="column3 f-16-neu-400-fig" style="font-size: 13px !important;">b Section 4980H Full-Time <br> Employee Count for ALE Member</th>
                                            <th class="column4 f-16-neu-400-fig" style="font-size: 13px !important;">c Total Employee Count <br> for ALE Member</th>
                                            <th class="column5 f-16-neu-400-fig" style="font-size: 13px !important;">d Aggregated Group <br> Indicator</th>
                                            <th class="column6 f-16-neu-400-fig" style="font-size: 13px !important;">e Reserved</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="column1 f-16-fig">All 12 Month</td>
                                            <td class="column2 f-16-fig">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">Yes
                                                </label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label>
                                            </td>
                                            <td class="column3 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}

                                                
                                            </td>
                                            <td class="column4 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}</td>
                                            <td class="column5 f-16-fig"><label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label></td>
                                            <td class="column6 f-16-neu-400-fig" style="font-size: 13px !important;">e Reserved</td>
                                        </tr>

                                        <tr>
                                            <td class="column1 f-16-fig">Jan</td>
                                            <td class="column2 f-16-fig">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">Yes
                                                </label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label>
                                            </td>
                                            <td class="column3 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}

                                                
                                            </td>
                                            <td class="column4 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}</td>
                                            <td class="column5 f-16-fig"><label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label></td>
                                            <td class="column6 f-16-neu-400-fig" style="font-size: 13px !important;">e Reserved</td>
                                        </tr>

                                        <tr>
                                            <td class="column1 f-16-fig">Feb</td>
                                            <td class="column2 f-16-fig">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">Yes
                                                </label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label>
                                            </td>
                                            <td class="column3 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}

                                                
                                            </td>
                                            <td class="column4 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}</td>
                                            <td class="column5 f-16-fig"><label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label></td>
                                            <td class="column6 f-16-neu-400-fig" style="font-size: 13px !important;">e Reserved</td>
                                        </tr>

                                        <tr>
                                            <td class="column1 f-16-fig">Mar</td>
                                            <td class="column2 f-16-fig">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">Yes
                                                </label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label>
                                            </td>
                                            <td class="column3 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}

                                                
                                            </td>
                                            <td class="column4 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}</td>
                                            <td class="column5 f-16-fig"><label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label></td>
                                            <td class="column6 f-16-neu-400-fig" style="font-size: 13px !important;">e Reserved</td>
                                        </tr>

                                        <tr>
                                            <td class="column1 f-16-fig">Apr</td>
                                            <td class="column2 f-16-fig">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">Yes
                                                </label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label>
                                            </td>
                                            <td class="column3 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}

                                                
                                            </td>
                                            <td class="column4 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}</td>
                                            <td class="column5 f-16-fig"><label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label></td>
                                            <td class="column6 f-16-neu-400-fig" style="font-size: 13px !important;">e Reserved</td>
                                        </tr>
                                        <tr>
                                            <td class="column1 f-16-fig">May</td>
                                            <td class="column2 f-16-fig">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">Yes
                                                </label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label>
                                            </td>
                                            <td class="column3 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}

                                                
                                            </td>
                                            <td class="column4 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}</td>
                                            <td class="column5 f-16-fig"><label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label></td>
                                            <td class="column6 f-16-neu-400-fig" style="font-size: 13px !important;">e Reserved</td>
                                        </tr>
                                        <tr>
                                            <td class="column1 f-16-fig">Jun</td>
                                            <td class="column2 f-16-fig">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">Yes
                                                </label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label>
                                            </td>
                                            <td class="column3 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}

                                                
                                            </td>
                                            <td class="column4 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}</td>
                                            <td class="column5 f-16-fig"><label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label></td>
                                            <td class="column6 f-16-neu-400-fig" style="font-size: 13px !important;">e Reserved</td>
                                        </tr>

                                        <tr>
                                            <td class="column1 f-16-fig">July</td>
                                            <td class="column2 f-16-fig">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">Yes
                                                </label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label>
                                            </td>
                                            <td class="column3 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}

                                                
                                            </td>
                                            <td class="column4 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}</td>
                                            <td class="column5 f-16-fig"><label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label></td>
                                            <td class="column6 f-16-neu-400-fig" style="font-size: 13px !important;">e Reserved</td>
                                        </tr>

                                        <tr>
                                            <td class="column1 f-16-fig">Aug</td>
                                            <td class="column2 f-16-fig">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">Yes
                                                </label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label>
                                            </td>
                                            <td class="column3 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}

                                                
                                            </td>
                                            <td class="column4 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}</td>
                                            <td class="column5 f-16-fig"><label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label></td>
                                            <td class="column6 f-16-neu-400-fig" style="font-size: 13px !important;">e Reserved</td>
                                        </tr>

                                        <tr>
                                            <td class="column1 f-16-fig">Sep</td>
                                            <td class="column2 f-16-fig">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">Yes
                                                </label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label>
                                            </td>
                                            <td class="column3 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}

                                                
                                            </td>
                                            <td class="column4 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}</td>
                                            <td class="column5 f-16-fig"><label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label></td>
                                            <td class="column6 f-16-neu-400-fig" style="font-size: 13px !important;">e Reserved</td>
                                        </tr>

                                        <tr>
                                            <td class="column1 f-16-fig">Sep</td>
                                            <td class="column2 f-16-fig">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">Yes
                                                </label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label>
                                            </td>
                                            <td class="column3 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}

                                                
                                            </td>
                                            <td class="column4 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}</td>
                                            <td class="column5 f-16-fig"><label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label></td>
                                            <td class="column6 f-16-neu-400-fig" style="font-size: 13px !important;">e Reserved</td>
                                        </tr>

                                        <tr>
                                            <td class="column1 f-16-fig">Nov</td>
                                            <td class="column2 f-16-fig">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">Yes
                                                </label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label>
                                            </td>
                                            <td class="column3 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}

                                                
                                            </td>
                                            <td class="column4 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}</td>
                                            <td class="column5 f-16-fig"><label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label></td>
                                            <td class="column6 f-16-neu-400-fig" style="font-size: 13px !important;">e Reserved</td>
                                        </tr>
                                        <tr>
                                            <td class="column1 f-16-fig">Dec</td>
                                            <td class="column2 f-16-fig">
                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">Yes
                                                </label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label>
                                            </td>
                                            <td class="column3 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}

                                                
                                            </td>
                                            <td class="column4 f-16-fig">
                                                {{ theme()->getView('partials/widgets/form/input/_text',
                                                    array( 
                                                            'type' => 'text' ,
                                                            'name' => 'other_income' ,
                                                            'placeholder' => '' ,
                                                            'required'=> true , 'id' => ''
                                                        )
                                                    )
                                                }}</td>
                                            <td class="column5 f-16-fig"><label class="radio-inline">
                                                    <input type="radio" name="optradio" style="margin-right:5px">No
                                                </label></td>
                                            <td class="column6 f-16-neu-400-fig" style="font-size: 13px !important;">e Reserved</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>




</x-base-layout>
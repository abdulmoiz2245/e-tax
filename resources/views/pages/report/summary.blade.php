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

        @media (min-width: 1200px){
            .container{
                max-width: 980px !important;
            }
        }
    </style>

    <!--begin::Row-->
    <div class="row gy-5 g-xl-4 mb-5" style="margin-top: 70px; ">

        <!--begin::Col-->

        <div class="col-md-12">
            <!-- <span><a href="/dashboard"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></span>
            <span class="pr-2" style="color:#6F6F6F;padding-left: 7px;">Back To Dashboard</span> -->
        </div>
        <!--end::Col--> 

        <!--begin::Col-->

        <div class="col-md-12">
            <h1 class="dash-title">Summary Report</h1>
        </div>
        <!--end::Col--> 
    </div>

    <div class="row gy-5 gx-md-4" >
        <div class="col-md-12">
            <p class="dash-description-secondry font-questrial">Filing your forms is quick, easy and secure. Start by selecting how you want to enter your form data. After, your form will be moved to In Progress where you can make edits before filing.</p>
        </div>
    </div>
    <!--end::Row-->



    <!--begin::Row-->
    <div class="row " style="margin-top: 15px; ">
        <!--begin::Col-->
        <div class="col-md-12">
            <div class="card h-100">
                    <!--begin::Beader-->
                    <div class="card-header border-0 pt-5 pb-0">
                        <h3 class="card-title align-items-start d-flex m-0 mt-2" >
                            <span class="card-label  mb-1 align-self-center card-title-text" style="color: black !important;">You do not have any forms for reporting.</span>
                        </h3>
                       
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column pt-0 pb-4 justify-content-end">

                        <!--begin::Items-->
                        <div class="mt-5 text-left" >
                            <p style="color:#6f6f6f">Once you have forms in progress, in cart, or filed forms, you can download a report. <a href="/fillings/start-filling" style="color:#F4B42A; font-weight:400">Start filling now</a> </p>  
                            
                        </div>
                        <!--end::Items-->
                    </div>
                    <!--end::Body-->
                </div>

        </div>
        <!--end::Col-->

       
    </div>
    <!--end::Row-->

</x-base-layout>

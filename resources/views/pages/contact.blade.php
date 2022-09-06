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
        .card .card-header
        {
            justify-content: flex-start;
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
    <div class="row gy-5 g-xl-4 mb-5" >

        <!--begin::Col-->

        <div class="col-md-12">
            <span><a href="/dashboard"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></span>
            <span class="pr-2" style="color:#6F6F6F;padding-left: 7px;">Back To Dashboard</span>
        </div>
        <!--end::Col--> 

        <!--begin::Col-->

        <div class="col-md-12">
            <h1 class="dash-title" style="
                margin-top: 28px;
            ">Contact</h1>
            <p class="f-16-fig" style="margin-top: 10px;color: #6F6F6F;">For fast answers to common questions, check out our knowledgebase first.</p>

            <p class="f-16-fig" style="color: #6F6F6F;">If you don't find the answer you're looking for, you can contact us.</p>

        </div>
        <!--end::Col--> 
    </div>
    <!--end::Row-->



    <!--begin::Row-->
    <div class="row " style="margin-top: 15px; ">
        <!--begin::Col-->
        <div class="col-md-12">
            <div class="card h-100" style="border-radius: 10px;">
                    <!--begin::Beader-->
                    <div class="card-header border-0 pt-5 pb-0">
                        <h3 class="card-title align-items-start d-flex m-0 mt-2" >
                            <h1 class="dash-title" style="font-weight: 400 !important;">Customer Service Hours</h1>
                        </h3>
                       
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column pt-0 pb-4 justify-content-end">

                        <!--begin::Items-->
                        <div class="mt-5 text-left" >
                            <h2 class="f-20-fig" style="font-size: 18px;">
                            Pre Tax Season Until January 16, 2022
                            </h2>
                            <p style="color:#6f6f6f">Monday – Friday, 8:30 am – 6:00 pm ET  </p>  
                            <p style="color:#6f6f6f">Saturday & Sunday, Closed  </p>  
                        </div>
                        <!--end::Items-->

                        <div class="mt-5 text-left" >
                            <h2 class="f-20-fig" style="font-size: 18px;">
                            Tax Season January 11, 2022 – February 1, 2022
                            </h2>
                            <p style="color:#6f6f6f">Tax Season January 11, 2022 – February 1, 2022 </p>  
                            <p style="color:#6f6f6f">Saturday January 22, 11:00 am – 3:00 pm ET  </p>
                            <p style="color:#6f6f6f">Saturday January 29, 11:00 am – 4:00 pm ET  </p>  

                        </div>

                        <div class="mt-5 text-left" >
                            <h2 class="f-20-fig" style="font-size: 18px;">
                            Post Tax Season February 2, 2022 – January 15, 2023
                            </h2>
                            <p style="color:#6f6f6f">Monday – Friday, 8:30 am – 6:00 pm ET </p>  
                            <p style="color:#6f6f6f">Monday – Friday, 8:30 am – 6:00 pm ET  </p>

                        </div>

                        <div class="mt-5 text-left" style="margin-top: 30px !important;" >
                           
                            <p style="color:#6f6f6f; ">Looking for a form that we don't offer or just have a question or comment about our service?</p>  
                            <p style="color:#6f6f6f">Please Email us</p>  

                        </div>
                    </div>
                    <!--end::Body-->
                </div>

        </div>
        <!--end::Col-->

       
    </div>
    <!--end::Row-->

</x-base-layout>

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
            font-size: 16px !important;
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
            font-size: 38px !important;
            line-height: 38px;
        }

        .dash-description-secondry{
            font-family: 'Questrial';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px;
        }


        @media (min-width: 1440px)  {
            .card-title-text{
                font-style: normal;
                font-weight: 400 !important;
                font-size: 20px !important;
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
    <div class="row gy-5 g-xl-4 mb-5" style="margin-top: 10%; ">
        <!--begin::Col-->
        <!-- <div class="col-md-1">

        </div> -->
        <div class="col-md-12">
            <h1 class="dash-title font-neue">Start Filling</h1>
        </div>
        <!--end::Col--> 
    </div>
   

    <!--begin::Row-->
    <div class="row gy-5 gx-md-4" >
        <div class="col-md-12">
            <p class="dash-description-secondry font-questrial">Filing your forms is quick, easy and secure. Start by selecting how you want to enter your form data. After, your form will be moved to In Progress where you can make edits before filing.</p>
        </div>
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row " style="margin-top: 15px; ">
        <!--begin::Col-->
        <div class="col-md-4">
                

            <div class="card h-100">
                <!--begin::Beader-->
                <div class="card-header border-0 pb-0" style="padding-top: 24px;">
                    <h3 class="card-title align-items-start d-flex" >
                        <span class="card-label  mb-1 align-self-center card-title-text font-neue" style="color: black !important;">Form in Progress</span>
                    </h3>
                    <p class="card-title-p font-questrial">
                         Get started with a single form in our guided experience.
                    </p>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body d-flex flex-column pt-2 pb-5">

                    <!--begin::Items-->
                    <div class="mt-5 text-center">
                            
                        <div class="select-box">
                            <div class="select-box__current" tabindex="1">
                                <div class="select-box__value">
                                <input class="select-box__input" type="radio" id="0" value="1" name="Ben" checked="checked"/>
                                <p class="select-box__input-text">Select Form</p>
                                </div>
                                <div class="select-box__value">
                                <input class="select-box__input" type="radio" id="1" value="2" name="Ben"/>
                                <p class="select-box__input-text">Cheese</p>
                                </div>
                                <div class="select-box__value">
                                <input class="select-box__input" type="radio" id="2" value="3" name="Ben"/>
                                <p class="select-box__input-text">Milk</p>
                                </div>
                                <div class="select-box__value">
                                <input class="select-box__input" type="radio" id="3" value="4" name="Ben"/>
                                <p class="select-box__input-text">Honey</p>
                                </div>
                                
                                <div class="select-box__value">
                                <input class="select-box__input" type="radio" id="4" value="5" name="Ben"/>
                                <p class="select-box__input-text">Toast</p>
                                </div><img class="select-box__icon" src="http://cdn.onlinewebfonts.com/svg/img_295694.svg" alt="Arrow Icon" aria-hidden="true"/>
                            </div>
                            <ul class="select-box__list">
                                <li>
                                <label class="select-box__option" for="0" aria-hidden="aria-hidden">Select Form</label>
                                </li>
                                <li>
                                <label class="select-box__option" for="1" aria-hidden="aria-hidden">Cheese</label>
                                </li>
                                <li>
                                <label class="select-box__option" for="2" aria-hidden="aria-hidden">Milk</label>
                                </li>
                                <li>
                                <label class="select-box__option" for="3" aria-hidden="aria-hidden">Honey</label>
                                </li>
                                <li>
                                <label class="select-box__option" for="4" aria-hidden="aria-hidden">Toast</label>
                                </li>
                                <li>
                                <label class="select-box__option" for="4" aria-hidden="aria-hidden">Toast</label>
                                </li><li>
                                <label class="select-box__option" for="4" aria-hidden="aria-hidden">Toast</label>
                                </li><li>
                                <label class="select-box__option" for="4" aria-hidden="aria-hidden">Toast</label>
                                </li><li>
                                <label class="select-box__option" for="4" aria-hidden="aria-hidden">Toast</label>
                                </li>
                            </ul>
                        </div>

                         <button class="btn w-100 btn-primary mt-3"  style="background: rgba(111, 111, 111, 0.5); color: #000000;" disabled>Show Form</button>
                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>

        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-md-4">
                 <div class="card h-100">
                    <!--begin::Beader-->
                    <div class="card-header border-0 pb-0" style="padding-top: 24px;">
                        <h3 class="card-title align-items-start d-flex" >
                            <span class="card-label  mb-1 align-self-center card-title-text font-neue" style="color: black !important;">Import My Forms   </span>
                        </h3>
                        <p class="card-title-p font-questrial">
                            Use our Excel template to import your form data.
                        </p>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column pt-2 pb-5 justify-content-end">

                        <!--begin::Items-->
                        <div class="mt-5 text-center">
                                
                        
                            <button class="btn w-100  mt-3"  style="background: #F4B42A;  color:#fff" >View Import Options</button>
                        </div>
                        <!--end::Items-->
                    </div>
                    <!--end::Body-->
                </div>

            </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-md-4">
                <div class="card h-100">
                    <!--begin::Beader-->
                    <div class="card-header border-0 pb-0" style="padding-top: 24px;">
                        <h3 class="card-title align-items-start d-flex" >
                            <span class="card-label  mb-1 align-self-center card-title-text font-neue" style="color: black !important;">Connect to Software</span>
                        </h3>
                        <p class="card-title-p font-questrial">
                            Using your  accounting software..
                        </p>
                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column pt-2 pb-5 justify-content-end">

                        <!--begin::Items-->
                        <div class="mt-5 text-center">
                                
                        
                            <button class="btn w-100  mt-3"  style="background: #F4B42A;  color:#fff" >Select Your Software</button>
                        </div>
                        <!--end::Items-->
                    </div>
                    <!--end::Body-->
                </div>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row g-5 gx-xxl-8">
        <!--begin::Col-->
        <div class="col-xxl-4">
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-xxl-8">
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

</x-base-layout>

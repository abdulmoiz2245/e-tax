<x-base-layout>
    <style>


        .select-box {
        position: relative;
        display: block;
        width: 100%;
        margin: 0 auto;
        font-family: "Open Sans", "Helvetica Neue", "Segoe UI", "Calibri", "Arial", sans-serif;
        font-size: 18px;
        color: #60666d;
        }

        .select-box__current {
        position: relative;
        /* box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.1); */
        border: 1px solid #E5E5E5;
        border-radius: 10px;
        cursor: pointer;
        outline: none;
        }
        .select-box__current:focus + .select-box__list {
        opacity: 1;
        -webkit-animation-name: none;
                animation-name: none;
        }
        .select-box__current:focus + .select-box__list .select-box__option {
        cursor: pointer;
        }
        .select-box__current:focus .select-box__icon {
        transform: translateY(-50%) rotate(180deg);
        }
        .select-box__icon {
        position: absolute;
        top: 50%;
        right: 15px;
        transform: translateY(-50%);
        width: 11px;
        opacity: 0.3;
        transition: 0.2s ease;
        }
        .select-box__value {
        display: flex;
        }
        .select-box__input {
        display: none;
        }
        .select-box__input:checked + .select-box__input-text {
        display: block;
        }
        .select-box__input-text {
        display: none;
        width: 100%;
        margin: 0;
        padding: 12px;
        text-align: left;
        background-color: #fff;
        font-size: 14px;
        border-radius: 10px;
        }
        .select-box__list {
        position: absolute;
        width: 100%;
        padding: 0;
        list-style: none;
        opacity: 0;
        -webkit-animation-name: HideList;
                animation-name: HideList;
        -webkit-animation-duration: 0.5s;
                animation-duration: 0.5s;
        -webkit-animation-delay: 0.5s;
                animation-delay: 0.5s;
        -webkit-animation-fill-mode: forwards;
                animation-fill-mode: forwards;
        -webkit-animation-timing-function: step-start;
                animation-timing-function: step-start;
        box-shadow: 0 15px 30px -10px rgba(0, 0, 0, 0.1);
        }
        .select-box__option {
        display: block;
        padding: 15px;
        background-color: #fff;
        }
        .select-box__option:hover, .select-box__option:focus {
        color: #546c84;
        background-color: #fbfbfb;
        }

        @-webkit-keyframes HideList {
        from {
            transform: scaleY(1);
        }
        to {
            transform: scaleY(0);
        }
        }

        @keyframes HideList {
        from {
            transform: scaleY(1);
        }
        to {
            transform: scaleY(0);
        }
        }
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


        @media (min-width: 1440px)  {
            .card-title-text{
                font-style: normal;
                font-weight: 400 !important;
                font-size: 18px !important;
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
        <!-- <div class="col-md-1">

        </div> -->
        <div class="col-md-12">
            <h1 class="dash-title">Dashboard</h1>
        </div>
        <!--end::Col--> 
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row gy-5 g-md-4 " >
        <!-- <div class="col-md-1">

        </div> -->
        <!--begin::Col-->
        <div class="col-md-4">
            {{ theme()->getView('partials/widgets/dashboard/_form-progess-count', array('icon' =>  asset(theme()->getMediaUrlPath() . 'svg/misc/clock.svg') , 'text' => 'Form in Progress' , 'count' => '12345')) }}

        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-md-4">
            {{ theme()->getView('partials/widgets/dashboard/_form-progess-count', array('icon' => asset(theme()->getMediaUrlPath() . 'svg/misc/yellow_cart.svg') , 'text' => 'Form in Cart' , 'count' => '12345')) }}

        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-md-4">
            {{ theme()->getView('partials/widgets/dashboard/_form-progess-count', array('icon' =>  asset(theme()->getMediaUrlPath() . 'svg/misc/green_tick.svg')  , 'text' => 'Field Forms' , 'count' => '12345')) }}

        </div>
        <!--end::Col-->
        <!-- <div class="col-md-1">

        </div> -->
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row gy-5 gx-md-4" style="margin-top: 70px; ">
        <div class="col-md-12">
            <h4 class="dash-title-secondry">Ready to file a new form?</h4>
        </div>
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row " style="margin-top: 15px; ">
        <!--begin::Col-->
        <div class="col-md-4">
                

            <div class="card h-100">
                <!--begin::Beader-->
                <div class="card-header border-0 pt-3 pb-0">
                    <h3 class="card-title align-items-start d-flex" >
                        <span class="card-label  mb-1 align-self-center card-title-text" style="color: black !important;">Form in Progress</span>
                    </h3>
                    <p class="card-title-p">
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
                    <div class="card-header border-0 pt-3 pb-0">
                        <h3 class="card-title align-items-start d-flex" >
                            <span class="card-label  mb-1 align-self-center card-title-text" style="color: black !important;">Import My Forms   </span>
                        </h3>
                        <p class="card-title-p">
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
                    <div class="card-header border-0 pt-3 pb-0">
                        <h3 class="card-title align-items-start d-flex" >
                            <span class="card-label  mb-1 align-self-center card-title-text" style="color: black !important;">Connect to Software</span>
                        </h3>
                        <p class="card-title-p">
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

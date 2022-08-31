<x-base-layout>
    <style>
        .card-title-text {
            font-style: normal;
            font-weight: 400 !important;
            font-size: 15px !important;
            line-height: 19px;
            color: #6F6F6F !important;

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

        .dash-title {
            font-style: normal;
            font-weight: 600 !important;
            font-size: 30px !important;
            line-height: 38px;
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

        .card-main-title {
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 22px;
            color: #000000;
        }

        .f-20-fig {
            font-family: 'Neue Haas Grotesk Text Pro', sans-serif !important;
            font-style: normal !important;
            font-weight: 400 !important;
            font-size: 20px !important;
            line-height: 20px !important;
            color: #000;
        }

        @media (min-width: 1440px) {
            .card-title-text {
                font-style: normal;
                font-weight: 400 !important;
                font-size: 16px !important;
                line-height: 19px;
                color: #6F6F6F !important;
            }



            .dash-title {
                font-weight: 700 !important;

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
                max-width: 980px !important;
            }
        }
    </style>

    <!--begin::Row-->
    <div class="row gy-5 g-xl-4" style="margin-top: 10px;margin-bottom: 21px;">

        <!--begin::Col-->

        <div class="col-md-12">
            <span><a href="/index"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></span>
            <span class="pr-2" style="color:#6F6F6F;padding-left: 7px;">Back To Dashboard</span>
        </div>
        <!--end::Col-->

        <!--begin::Col-->

        <div class="col-md-12">
            <h1 class="dash-title">Form Import Options</h1>
            <p class="f-16-fig">Save time by importing your forms via Excel or using one of our software integrations below. If using Excel, download the template below, enter your data, and then select the file to import.</p>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->



    <!--begin::Row-->
    <div class="row " style="margin-bottom: 36px;">
        <!--begin::Col-->
        <div class="col-md-12">
            <div class="card ">


                <!--begin::Body-->
                <div class="card-body d-md-flex flex-column pt-3 pb-3 justify-content-end" style="padding-top: 24px !important;">

                    <!--begin::Items-->
                    <div class="text-center">
                        <p class="f-16-fig" style="color:#6f6f6f">Must be .xlsx files using our Excel template below </p>

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
    <div class="row " style="margin-bottom: 36px;">
        <!--begin::Col-->
        <div class="col-md-12">
            <h4 class="f-20-fig" style="padding-bottom: 24px; padding-top:24px">Ready to file a new form</h4>
            <div class="card ">
                <!--begin::Body-->
                <div class="card-body d-md-flex flex-column pt-3 pb-3 justify-content-end" style="padding-top: 24px !important;">
                    <div class="d-md-flex justify-content-between">
                        <div class="d-md-flex">
                            <img src="{{ asset(theme()->getMediaUrlPath() . 'logos/excel.png') }}" width="48" height="48" alt="">
                            <div class="w-fit" style="padding-left: 12px;">
                                <h4 class="f-20-fig">2021 Excel Template
                                    <a style="padding-left: 14px;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM10 18C12.1217 18 14.1566 17.1571 15.6569 15.6569C17.1571 14.1566 18 12.1217 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18ZM9 13H11V15H9V13ZM9 5H11V11H9V5Z" fill="#BFBFBF" />
                                        </svg>
                                    </a>
                                </h4>
                                <p class="f-16-fig" style="color:#6F6F6F">Must be .xlsx files using our Excel template below</p>
                            </div>
                        </div>
                        <div class="d-md-flex">

                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.6 14.2222H14.4V8H16V15.1111C16 15.3469 15.9157 15.573 15.7657 15.7397C15.6157 15.9064 15.4122 16 15.2 16H0.8C0.587827 16 0.384344 15.9064 0.234315 15.7397C0.0842854 15.573 0 15.3469 0 15.1111V8H1.6V14.2222ZM9.6 5.33333H13.6L8 11.5556L2.4 5.33333H6.4V0H9.6V5.33333Z" fill="#6F6F6F" />
                            </svg>

                            <a href="#" class="f-16-neu-fig" style="padding-left: 8px;">Download</a>
                        </div>
                    </div>

                    <div class="separator my-2"></div>

                    <div class="d-md-flex justify-content-between" style="padding-top: 20px;">
                        <div class="d-md-flex ">
                            <img src="{{ asset(theme()->getMediaUrlPath() . 'logos/quickbooks.svg') }}" width="48" height="48" alt="">
                            <div class="w-fit" style="padding-left: 12px;">
                                <h4 class="f-20-fig">QuickBooks Desktop Import
                                    <a style="padding-left: 14px;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM10 18C12.1217 18 14.1566 17.1571 15.6569 15.6569C17.1571 14.1566 18 12.1217 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18ZM9 13H11V15H9V13ZM9 5H11V11H9V5Z" fill="#BFBFBF" />
                                        </svg>
                                    </a>
                                </h4>
                                <p class="f-16-fig" style="color:#6F6F6F">Install our QuickBooks Desktop plug-in to export all the required form data.</p>
                            </div>
                        </div>

                        <div class="d-md-flex">

                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.6 14.2222H14.4V8H16V15.1111C16 15.3469 15.9157 15.573 15.7657 15.7397C15.6157 15.9064 15.4122 16 15.2 16H0.8C0.587827 16 0.384344 15.9064 0.234315 15.7397C0.0842854 15.573 0 15.3469 0 15.1111V8H1.6V14.2222ZM9.6 5.33333H13.6L8 11.5556L2.4 5.33333H6.4V0H9.6V5.33333Z" fill="#6F6F6F" />
                            </svg>

                            <a href="#" class="f-16-neu-fig" style="padding-left: 8px;">Download</a>
                        </div>
                    </div>
                    <!--begin::Items-->

                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>

        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row " style="margin-bottom: 36px;">
        <!--begin::Col-->
        <div class="col-md-12">
            <h4 class="f-20-fig" style="padding-bottom: 24px; padding-top:24px">Connect & Import from Your Software</h4>
            <div class="card ">
                <!--begin::Body-->
                <div class="card-body d-md-flex flex-column pt-3 pb-3 justify-content-end" style="padding-top: 24px !important;">

                    <div class="d-md-flex justify-content-between" >
                        <div class="d-md-flex ">
                            <img src="{{ asset(theme()->getMediaUrlPath() . 'logos/quickbooks.svg') }}" width="48" height="48" alt="">
                            <div class="w-fit" style="padding-left: 12px;">
                                <h4 class="f-20-fig">Quickbooks

                                </h4>
                                <p class="f-16-fig" style="color:#6F6F6F">Connect to your QuickBooks account to import payer, recipient, and 1099 form data.</p>
                            </div>
                        </div>

                        <div class="d-md-flex">

                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.6 14.7222H14.4V8.5H16V15.6111C16 15.8469 15.9157 16.073 15.7657 16.2397C15.6157 16.4064 15.4122 16.5 15.2 16.5H0.8C0.587827 16.5 0.384344 16.4064 0.234315 16.2397C0.0842854 16.073 0 15.8469 0 15.6111V8.5H1.6V14.7222ZM6.4 6.72222H2.4L8 0.5L13.6 6.72222H9.6V12.0556H6.4V6.72222Z" fill="#6F6F6F" />
                            </svg>


                            <a href="#" class="f-16-neu-fig" style="padding-left: 8px;">Import</a>
                        </div>
                    </div>


                    <div class="separator my-2"></div>
                    <div class="d-md-flex justify-content-between" style="padding-top: 20px;">
                        <div class="d-md-flex">
                            <img src="{{ asset(theme()->getMediaUrlPath() . 'logos/xero.svg') }}" width="48" height="48" alt="">
                            <div class="w-fit" style="padding-left: 12px;">
                                <h4 class="f-20-fig">Xero

                                </h4>
                                <p class="f-16-fig" style="color:#6F6F6F">Connect to your Xero account to import payer, recipient and 1099 form data.</p>
                            </div>
                        </div>
                        <div class="d-md-flex">

                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.6 14.7222H14.4V8.5H16V15.6111C16 15.8469 15.9157 16.073 15.7657 16.2397C15.6157 16.4064 15.4122 16.5 15.2 16.5H0.8C0.587827 16.5 0.384344 16.4064 0.234315 16.2397C0.0842854 16.073 0 15.8469 0 15.6111V8.5H1.6V14.7222ZM6.4 6.72222H2.4L8 0.5L13.6 6.72222H9.6V12.0556H6.4V6.72222Z" fill="#6F6F6F" />
                            </svg>


                            <a href="#" class="f-16-neu-fig" style="padding-left: 8px;">Import</a>
                        </div>
                    </div>

                </div>
                <!--end::Body-->
            </div>

        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->







</x-base-layout>
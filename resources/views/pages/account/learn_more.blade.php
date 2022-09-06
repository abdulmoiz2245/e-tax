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

        .select-box__current:focus+.select-box__list {
            opacity: 1;
            -webkit-animation-name: none;
            animation-name: none;
        }

        .select-box__current:focus+.select-box__list .select-box__option {
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

        .select-box__input:checked+.select-box__input-text {
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

        .select-box__option:hover,
        .select-box__option:focus {
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

        .plan-list-primary {
            font-family: 'Questrial', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px;
            color: #000000;
            padding-bottom: 5px;
        }

        .plan-title {
            font-family: 'Neue Haas Grotesk Text Pro', sans-serif !important;
            font-style: normal;
            font-weight: 400;
            font-size: 42px;
            line-height: 51px;
            display: flex;
            align-items: center;
            letter-spacing: 0.04em;
            padding-bottom: 40px;
            padding-top: 40px;

            color: #2B014C;
        }

        .plan-list-secoundry {
            font-family: 'Questrial';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px;

            color: #6F6F6F;
        }

        .badge {
            background: #E7FFE3;
            border-radius: 50px;
            color: #47B621;
            font-family: 'Questrial';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px;
        }

        .plan-list {
            padding-bottom: 10px;
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
    <div class="row gy-5 g-xl-4" style="margin-top: 50px; margin-bottom:42px">

        <!--begin::Col-->

        <div class="col-md-12">
            <span><a href="/dashboard"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></span>
            <span class="pr-2" style="color:#6F6F6F;padding-left: 7px;">Back to My Account</span>
        </div>

    </div>
    <!--end::Row-->



    <!--begin::Row-->
    <div class="row ">
        <!--begin::Col-->
        <div class="col-md-6" style="margin-bottom: 36px;">
            <div class="card h-100">
                <!--begin::Beader-->
                <div class="card-header border-0 pt-5 pb-0">
                    <h3 class="card-title align-items-start d-flex m-0 mt-2">
                        <span class=" mb-2 align-self-center plan-title" style="color: black !important; padding-top:0px;padding-bottom:0px">Basic</span>
                    </h3>

                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body d-flex flex-column pt-3 pb-3 justify-content-start">

                    <div class="text-left" style="padding-bottom: 40px;">
                        <p style="color:#6f6f6f" class="f-16-fig">The core efiling experience, included for all </p>
                    </div>

                    <div>
                        <p class="f-16-fig">1 user included</p>
                    </div>

                    <div>
                        <h1 class="plan-title">Free</h1>
                    </div>

                    <div style="padding-bottom: 30px;">
                        <button class="btn w-100" style="background:#BFBFBF;
                        border-radius: 10px;color: #000000;
                        font-style: normal;
                        font-weight: 700;
                        font-size: 16px;
                        line-height: 20px;
                        padding-top:14px !important;
                        padding-bottom:14px !important;
                        opacity:0.5">
                            Current Plan
                        </button>
                    </div>

                    <div class="separator my-2 "></div>

                    <div class="d-flex plan-list" style="padding-top: 20px;">
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_147_335)">
                                    <path d="M10.0007 15.172L19.1927 5.979L20.6077 7.393L10.0007 18L3.63672 11.636L5.05072 10.222L10.0007 15.172Z" fill="#47B621" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_147_335">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <div class="pl-4" style="padding-left: 15px;">
                            <p class="plan-list-primary">Pay‑as‑you‑go TIN Matching</p>
                            <p class="plan-list-secoundry">$1.00 per TIN Match Request</p>
                        </div>
                    </div>

                    <div class="d-flex plan-list">
                        <div>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_147_335)">
                                    <path d="M10.0007 15.172L19.1927 5.979L20.6077 7.393L10.0007 18L3.63672 11.636L5.05072 10.222L10.0007 15.172Z" fill="#47B621" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_147_335">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div style="padding-left: 15px;">
                            <p class="plan-list-primary">Pay‑as‑you‑go TIN Matching</p>
                            <p class="plan-list-secoundry">$1.00 per TIN Match Request</p>
                        </div>
                    </div>
                </div>
                <!--end::Body-->
            </div>

        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6" style="margin-bottom: 15px;">
            <div style="background: linear-gradient(91.02deg, rgba(197, 146, 237, 0.8) -5.88%, rgba(253, 219, 146, 0.8) 105.89%);
            border-radius: 12px;height: 100%;
            ">
                <div class="card h-100" style="margin: 5px; padding:24px;background: #FFFFFF;
                                border-radius: 10px;flex-direction:column;justify-content: space-between;">
                    <!--begin::Beader-->
                    <div class="card-header border-0  pb-0" style="padding-top: 0 !important;">
                        <h3 class="card-title align-items-start d-flex m-0 mt-2">
                            <span class="  align-self-center plan-title" style="color: black !important; padding-top:0px;padding-bottom:0px; padding-right:10px">Plus</span> <span class="badge badge-pill " style="align-self: center;">Most Poular</span>
                        </h3>

                    </div>
                    <!--end::Header-->

                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column pt-3 pb-3 justify-content-start">

                        <div class="text-left" style="padding-bottom: 40px;">
                            <p style="color:#6f6f6f" class="f-16-fig">The core efiling experience, included for all </p>
                        </div>

                        <div>
                            <p class="f-16-fig">1 user included</p>
                        </div>

                        <div>
                            <h1 class="plan-title">$149
                                <span style="font-family: 'Questrial';
                                font-style: normal;
                                font-weight: 400;
                                font-size: 20px;
                                line-height: 21px;
                                color: rgba(43, 1, 76, 0.4);">
                                    /year
                                </span>

                            </h1>
                        </div>

                        <div style="padding-bottom: 30px;">
                            <button class=" btn w-100  mt-3" style="background: #F4B42A;  color:#fff">Buy Now</button>
                        </div>

                        <div class="separator my-2 "></div>

                        <div class="d-flex plan-list" style="padding-top: 20px;">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_147_335)">
                                        <path d="M10.0007 15.172L19.1927 5.979L20.6077 7.393L10.0007 18L3.63672 11.636L5.05072 10.222L10.0007 15.172Z" fill="#47B621" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_147_335">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <div class="pl-4" style="padding-left: 15px;">
                                <p class="plan-list-primary">10 Users Included</p>
                                <p class="plan-list-secoundry">Ideal for teams, includes shared billing</p>
                            </div>
                        </div>

                        <div class="d-flex plan-list">
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_147_335)">
                                        <path d="M10.0007 15.172L19.1927 5.979L20.6077 7.393L10.0007 18L3.63672 11.636L5.05072 10.222L10.0007 15.172Z" fill="#47B621" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_147_335">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div style="padding-left: 15px;">
                                <p class="plan-list-primary">FREE TIN Matching</p>
                                <p class="plan-list-secoundry">All Payers and Recipients receive TIN matching up until 48 hrs before the e‑filing deadline</p>
                            </div>
                        </div>

                        <div class="d-flex plan-list">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_147_335)">
                                        <path d="M10.0007 15.172L19.1927 5.979L20.6077 7.393L10.0007 18L3.63672 11.636L5.05072 10.222L10.0007 15.172Z" fill="#47B621" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_147_335">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <div class="pl-4" style="padding-left: 15px;">
                                <p class="plan-list-primary">Plus, all Basic features and benefits</p>
                            </div>
                        </div>
                        <div class="d-flex plan-list">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_147_335)">
                                        <path d="M10.0007 15.172L19.1927 5.979L20.6077 7.393L10.0007 18L3.63672 11.636L5.05072 10.222L10.0007 15.172Z" fill="#47B621" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_147_335">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <div class="pl-4" style="padding-left: 15px;">
                                <p class="plan-list-primary">You are included in the total number of the team members</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!--end::Body-->
        </div>

    </div>
    <!--end::Col-->

    <!--end::Row-->
    <div class="row gy-5 g-xl-4">
        <div class="separator my-2 "></div>
    </div>

    <div class="row" style="padding-top: 40px; padding-bottom:40px;">
        <h1>Always included:</h1>
    </div>

    <div class="row" style="margin-bottom: 30px;">
        <div class="col-md-4">
            <h4 class="f-16-fig" style="font-size:18px !important ;">Available Forms</h4>

        </div>
        <div class="col-md-8">
            <p class="f-16-fig" style="color:#6F6F6F">2021 Form 1099-MISC , 2021 Form 1099-NEC , 2021 Form W-2 , 2021 Form 1099-B
                , 2021 Form 1099-C, 2021 Form 1099-INT , 2021 Form 1099-R
                , 2021 Form 1099-DIV
                , 2021 Form 1099-S
                , 2021 Form W-2C, 2021 Form 1099-MISC Correction
                , 2021 Form 1099-NEC Correction , 2021 Form 1098 Correction
                , 2021 Form 1099-INT Correction
                , 2021 Form 1099-R Correction
                , 2021 Form 1099-DIV Correction
                ,2021 Form 1099-S Correction</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 30px;">
        <div class="col-md-4">
            <h4 class="f-16-fig" style="font-size:18px !important ;">Filing Methods</h4>

        </div>
        <div class="col-md-8">
            <p class="f-16-fig" style="color:#6F6F6F">All‑Inclusive E‑File, Print & Mail; Print & Mail Only; E‑File Only (see pricing)</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 30px;">
        <div class="col-md-4">
            <h4 class="f-16-fig" style="font-size:18px !important ;">TIN Matching</h4>

        </div>
        <div class="col-md-8">
            <p class="f-16-fig" style="color:#6F6F6F">Pay‑as‑you‑go (see pricing)</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 30px;">
        <div class="col-md-4">
            <h4 class="f-16-fig" style="font-size:18px !important ;">Data Management</h4>

        </div>
        <div class="col-md-8">
            <p class="f-16-fig" style="color:#6F6F6F">Guided form experiences and bulk editing</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 30px;">
        <div class="col-md-4">
            <h4 class="f-16-fig" style="font-size:18px !important ;">Import Options & Integrations</h4>

        </div>
        <div class="col-md-8">
            <p class="f-16-fig" style="color:#6F6F6F">QuickBooks Online, QuickBooks Desktop, Xero, Excel Templates</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 30px;">
        <div class="col-md-4">
            <h4 class="f-16-fig" style="font-size:18px !important ;">Recordkeeping & Storage</h4>

        </div>
        <div class="col-md-8">
            <p class="f-16-fig" style="color:#6F6F6F">At least 4 years</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 30px;">
        <div class="col-md-4">
            <h4 class="f-16-fig" style="font-size:18px !important ;">Security</h4>

        </div>
        <div class="col-md-8">
            <p class="f-16-fig" style="color:#6F6F6F">SOC‑2 certified facility</p>
        </div>
    </div>


</x-base-layout>
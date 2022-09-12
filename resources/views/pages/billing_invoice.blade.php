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
            <span class="pr-2" style="color:#6F6F6F;padding-left: 7px;">Back To Dashboard</span>
        </div>
        <!--end::Col-->

        <!--begin::Col-->

        <div class="col-md-12">
            <h1 class="dash-title">Billing & Invoice</h1>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->



    <!--begin::Row-->
    <div class="row " style="margin-bottom: 36px;">
        <!--begin::Col-->
        <div class="col-md-12">
            <h3 class="card-main-title" style="margin-bottom: 24px;">Billing Information</h3>
            @if($user->info->is_billing_added != '1')

            <div class="card ">
                <!--begin::Beader-->
                <div class="card-header border-0 pt-5 pb-0">
                    <h3 class="card-title align-items-start d-flex m-0 mt-2">
                        <span class="card-label  mb-1 align-self-center card-title-text" style="color: black !important;">You have not added billing information.</span>
                    </h3>

                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body d-flex flex-column pt-3 pb-3 justify-content-end">

                    <!--begin::Items-->
                    <div class="text-left">
                        <p style="color:#6f6f6f">Add your business' billing information now to save time when filing forms. <a href="/billing/billing-information" style="color:#F4B42A; font-weight:400">Get Started</a> </p>

                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>

            @else

            <div class="card ">
                <!--begin::Beader-->
                <div class="card-header border-0 pt-5 pb-0">
                    <h3 class="card-title align-items-start d-flex m-0 mt-2">
                        <span class="card-label  mb-1 align-self-center card-title-text" style="color: black !important;">Billing Info Added.</span>
                    </h3>

                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body d-flex flex-column pt-3 pb-3 justify-content-end">

                    <!--begin::Items-->
                    <div class="text-left">
                        <p style="color:#6f6f6f"><a href="{{ route('view_billing_information') }}" style="color:#F4B42A; font-weight:400">View</a> <a href="{{ route('edit_billing_information') }}" style="color:#F4B42A; font-weight:400">Edit</a> </p>

                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>

            @endif

        </div>


        <!--end::Col-->


    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row " style="margin-bottom: 36px;">
        <!--begin::Col-->
        <div class="col-md-12">
            <h3 class="card-main-title" style="margin-bottom: 24px;">Billing & Invoices</h3>
            @if($user->active_plan == '0')

            <div class="card ">
                <!--begin::Beader-->
                <div class="card-header border-0 pt-5 pb-0">
                    <h3 class="card-title align-items-start d-flex m-0 mt-2">
                        <span class="card-label  mb-1 align-self-center card-title-text" style="color: black !important;">You are not currently subscribeds.</span>
                    </h3>

                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body d-flex flex-column pt-3 pb-3 justify-content-end">

                    <!--begin::Items-->
                    <div class="text-left">
                        <p style="color:#6f6f6f">Add new team members and get unlimited TIN matching with a Premium subscription. <a href="{{ route('account_learnmore') }}" style="color:#F4B42A; font-weight:400">Learn More</a> </p>

                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>
            @else
            <div class="card ">
                <!--begin::Beader-->
                <div class="card-header border-0 pt-5 pb-0">
                    <h3 class="card-title align-items-start d-flex m-0 mt-2">
                        <span class="card-label  mb-1 align-self-center card-title-text" style="color: black !important;">Active Plan : <?= $user->active_plan == '1' ? 'Plus' : 'Basic' ?>.</span>
                    </h3>

                </div>
                <!--end::Header-->
                <div class="card-body d-flex flex-column pt-3 pb-3 justify-content-end">

                    <!--begin::Items-->
                    <div class="text-left">
                        <p style="color:#6f6f6f"> <a href="{{ route('account_learnmore') }}" style="color:#F4B42A; font-weight:400">Change Plan</a> </p>

                    </div>
                    <!--end::Items-->
                </div>

            </div>
            @endif

        </div>
        <!--end::Col-->


    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row " style="margin-bottom: 36px;">
        <!--begin::Col-->
        <div class="col-md-12">
            <h3 class="card-main-title" style="margin-bottom: 24px;">Invoices</h3>
            @if(count($user->payments) <= 0)
            <div class="card ">
                <!--begin::Beader-->
                <div class="card-header border-0 pt-5 pb-0">
                    <h3 class="card-title align-items-start d-flex m-0 mt-2">
                        <span class="card-label  mb-1 align-self-center card-title-text" style="color: black !important;">You do not have any invoices at this time.</span>
                    </h3>

                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body d-flex flex-column pt-3 pb-3 justify-content-end">

                    <!--begin::Items-->
                    <div class="text-left">
                        <p style="color:#6f6f6f">Add your business' billing information now to save time when filing forms. <a href="http://" style="color:#F4B42A; font-weight:400">Get Started</a> </p>

                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>

            @elseif(count($user->payments) > 0)
            <div class="row">
                <div class="limiter">
                    <div class="container-table100" style="padding: 0; padding-top:30px">
                        <div class="wrap-table100" style="overflow-x: scroll;">
                            <div class="table100">
                                <table id="payer-table">
                                    <thead>
                                        <tr class="table100-head">
                                            <th class="column1 f-16-fig">Id</th>
                                            <th class="column2 f-16-fig">Plan Name</th>
                                            <th class="column3 f-16-fig">Amount</th>
                                            <th class="column4 f-16-fig">Billed At</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user->payments as $payment)
                                        <tr>
                                            <td class="column1 f-16-fig">{{ $payment->id }}</td>
                                            <td class="column2 f-16-fig">{{ $payment->plan_id == '1' ? 'Plus':'Basic' }}</td>
                                            <td class="column3 f-16-fig">${{ $payment->amount }}</td>
                                            <td class="column4 f-16-fig">{{ $payment->billed_at }}</td>
                                        </tr>
                                        @endforeach



                                    </tbody>
                                    <tfoot>

                                    </tfoot>


                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>
        <!--end::Col-->


    </div>
    <!--end::Row-->

</x-base-layout>
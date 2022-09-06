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

        .form__field::placeholder {
            color: #BFBFBF;
        
        }

        .form__field:focus{
            padding-bottom: 0px;
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 980px !important;
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
            <h1 class="dash-title" style="margin-bottom: 18px;">Payers</h1>
            <p class="f-16-fig" style="color:#6F6F6F">Below are the Payers you will be filing on behalf of. Please review and ensure their records are accurate before you begin filing.</p>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

    <!--begin::Row-->
    <!-- <div class="row " style="margin-bottom: 36px;">
        <div class="col-md-12">
            <div class="card " style="padding: 24px;">

                <div class="card-body d-md-flex flex-column p-0 justify-content-end">
                    <div class="d-md-flex justify-content-between">
                        <div class="" style="margin-bottom:10px">
                            <h3 class="card-title align-items-start d-md-flex m-0 mt-2">
                                <span class="card-label  mb-1 align-self-center card-title-text" style="color: black !important;">Add your first payers and recipients</span>
                            </h3>
                            <div class="text-left">
                                <p style="color:#6f6f6f">Setting these up in advance will ensure creating and filing forms is quick and easy.</p>

                            </div>
                        </div>
                        <div class="">
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
            </div>

        </div>


    </div> -->
    <!--end::Row-->

    <!--begin::Row-->
    <div class="row ">
        <!--begin::Col-->
        <div class="col-md-12">
            <div class="d-md-flex justify-content-end" style="
                align-items: center;
                ">
                <!-- <div class="card h-100" style="width: fit-content;box-shadow: 2px 2px 10px rgba(210, 209, 223, 0.3);border-radius: 10px; margin-bottom:10px;margin-right:12px"> -->

                    <!--begin::Body-->
                    <!-- <div class="card-body d-md-flex flex-column  justify-content-end" style="padding:14px;"> -->

                        <div class="form__group" style="
                            position: relative;
                            padding-top:0px;
                            max-width: 200px;
                            margin-right:12px;
                            margin-bottom:12px;
                            ">

                            <svg style="position: absolute;top: 12px;left: 12px;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_150_954)">
                                    <path d="M18.031 16.617L22.314 20.899L20.899 22.314L16.617 18.031C15.0237 19.3082 13.042 20.0029 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20.0029 13.042 19.3082 15.0237 18.031 16.617ZM16.025 15.875C17.2941 14.5699 18.0029 12.8204 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18C12.8204 18.0029 14.5699 17.2941 15.875 16.025L16.025 15.875Z" fill="#BFBFBF" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_150_954">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>


                            <input type="text" placeholder="Search"  class="form__field" value=""  style="
                                padding-left: 45px;
                                padding-right: 15px;
                                border: 0px;
                                background: #fff;
                            ">
                        </div>
                    <!-- </div> -->
                    <!--end::Body-->

                <!-- </div> -->
                <a href="payer/add-payer" style="margin-bottom:12px">
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
        <!--end::Col-->
    </div>
    <!--end::Row-->

    <div class="row">
        <div class="limiter">
            <div class="container-table100" style="padding: 0; padding-top:30px">
                <div class="wrap-table100" style="overflow-x: scroll;">
                    <div class="table100">
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
                                        <div class="d-flex justify-content-end">
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
    </div>



</x-base-layout>
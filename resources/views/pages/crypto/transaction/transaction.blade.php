<x-base-layout>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        #transaction_table table thead tr {
            height: 60px;
            background: transparent;
        }

        #transaction_table .select-box {
            padding-top: 0px !important;
        }

        #transaction_table table {
            table-layout: auto;
            width: 100%;
        }

        #transaction_table tr td {
            padding-top: 18px;
            padding-bottom: 18px;

        }

        .form__field::placeholder {
            color: #BFBFBF;

        }

        .form__field:focus {
            padding-bottom: 0px;
        }

        .crypto_table .tbody tr:hover {
            background-color: transparent;
        }

        .crypto_table .tbody tr {
            border-bottom: 1px solid #EEEEEE;
        }

        .crypto_table .tbody td {
            padding-top: 24px;
            padding-bottom: 24px;

        }

        .transaction .select-box {
            margin-right: 20px;
        }

        .transaction .select-box__current {
            border: none;
        }

        body {
            background-color: #F8F9FD;
        }
        .dropdown-menu {
            width: 300px !important;
            top:10px;
        }

        /* @media (min-width: 1200px) {
            .container {
                max-width: 980px !important;
            }
        } */
    </style>
    <div class="d-md-flex justify-content-between" style="margin-bottom: 60px; margin-top:7%">
        <div>
            <h1 class="dash-title">Transactions</h1>
        </div>

    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="d-md-flex justify-content-between">
                <div class="d-md-flex transaction" style="min-width: 500px;">
                    {{ theme()->getView('partials/widgets/form/input/_select',
                            array( 
                                    'type' => 'select' ,
                                    'name' => 'all_wallet' ,
                                    'item' => array(
                                    'ir' =>  'IR',
                                    'bs'=>   'BS',
                                    'ks' =>  'KS'
                                    ) ,

                                    'placeholder' => 'All wallets' ,
                                    'required'=> true , 'id' => ''
                                )
                            )
                    }}

                    {{ theme()->getView('partials/widgets/form/input/_select',
                            array( 
                                    'type' => 'select' ,
                                    'name' => 'all_currencies' ,
                                    'item' => array(
                                    'ir' =>  'IR',
                                    'bs'=>   'BS',
                                    'ks' =>  'KS'
                                    ) ,

                                    'placeholder' => 'All currencies' ,
                                    'required'=> true , 'id' => ''
                                )
                            )
                    }}
                </div>
                <div style=" align-self: center;">
                    <div class="dropdown show">
                        <a class="btn dropdown-toggle f-16-neu-fig" style="box-shadow: 2px 2px 10px rgba(210, 209, 223, 0.3) !important;background:#fff;border-radius: 10px;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Transaction Type
                        </a>

                        <div class="dropdown-menu" style="box-shadow: 2px 2px 10px rgba(210, 209, 223, 0.3) !important;background:#fff;border-radius: 10px;border:none !important" aria-labelledby="dropdownMenuLink">

                            <a class="dropdown-item f-14-neu-400-fig" href="#">Select Type</a>
                            <div class="separator my-2"></div>

                            <a class="dropdown-item" href="{{ route('crypto.transaction.add') }}">

                                <div>
                                    <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_347_422)">
                                                <path d="M9.16645 13.4766L9.16645 3.33329L10.8331 3.33329L10.8331 13.4766L15.3031 9.00663L16.4814 10.185L9.99978 16.6666L3.51811 10.185L4.69645 9.00662L9.16645 13.4766Z" fill="#13BF44" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_347_422">
                                                    <rect width="20" height="20" fill="white" transform="translate(20 20) rotate(-180)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span>Deposit</span>
                                </div>
                                <p class="f-14-fig-questrial " style="
                                        white-space: pre-line;
                                    ">When you receive coins from somewhere ex.purchase, airdrop, mining, income etc </p>
                            </a>
                            <div class="separator my-2"></div>

                            <a class="dropdown-item" href="#">

                                <div>
                                    <span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_347_425)">
                                                <path d="M10.8336 6.52337L10.8336 16.6667H9.16689L9.16689 6.52337L4.69689 10.9934L3.51855 9.81504L10.0002 3.33337L16.4819 9.81504L15.3036 10.9934L10.8336 6.52337Z" fill="#D80027" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_347_425">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <span>Withdrawal</span>

                                    </span>
                                </div>
                                <p class="f-14-fig-questrial " style="
                                    white-space: pre-line;
                                "> When you send coins to somene ex. payment, gift, donation, trading cost etc </p>
                            </a>
                            <div class="separator my-2"></div>

                            <a class="dropdown-item" href="#">

                                <div>
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_347_428)">
                                                <path d="M16.05 12.05L21 17L16.05 21.9501L14.636 20.536L17.172 17.999L4 18V16H17.172L14.636 13.464L16.05 12.05ZM7.95 2.05005L9.364 3.46405L6.828 6.00005H20V8.00005H6.828L9.364 10.536L7.95 11.95L3 7.00005L7.95 2.05005Z" fill="#3380FF" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_347_428">
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>


                                    </span>
                                    <span>Trade</span>

                                </div>
                                <p class="f-14-fig-questrial " style="
                                        white-space: pre-line;
                                    ">When you exchange one coin for another ex.ETH → BTC</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-12" id="transaction_table">
            <table>
                <thead>
                    <tr>
                        <td style="padding-left: 24px;">
                            <p class="f-18-fig-neue-400 text-dark">Wallet</p>

                        </td>


                        <td>
                            <p class="f-18-fig-neue-400 text-dark">Type</p>

                        </td>

                        <td>
                            <p class="f-18-fig-neue-400 text-dark">Coinbase</p>

                        </td>

                        <td>
                            <p class="f-18-fig-neue-400 text-dark">Date</p>

                        </td>

                        <td>
                            <p class="f-18-fig-neue-400 text-dark">Time</p>

                        </td>

                        <td>
                            <p class="f-18-fig-neue-400 text-dark"></p>
                        </td>
                    </tr>
                </thead>
                <tbody class="tbody">
                    <tr>
                        <td style="padding-left: 24px;">
                            <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_304_167)">
                                        <path d="M16.05 12.05L21 17L16.05 21.95L14.636 20.536L17.172 17.999L4 18V16H17.172L14.636 13.464L16.05 12.05ZM7.95 2.04999L9.364 3.46399L6.828 5.99999H20V7.99999H6.828L9.364 10.536L7.95 11.95L3 6.99999L7.95 2.04999Z" fill="#3380FF" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_304_167">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <span><img src="{{ asset(theme()->getMediaUrlPath() . 'img/binance.png') }}" width="32" height="32" alt=""></span>
                        </td>
                        <td>
                            <p class="f-16-fig text-dark">Exchange</p>

                        </td>
                        <td>
                            <span class="f-16-fig text-dark">
                                -$20.00
                            </span>
                            <span><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_304_249)">
                                        <path d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z" fill="#F0F0F0" />
                                        <path d="M15.3047 16H32.0003C32.0003 14.5559 31.8078 13.1569 31.4491 11.826H15.3047V16Z" fill="#D80027" />
                                        <path d="M15.3047 7.65218H29.6519C28.6725 6.05393 27.4202 4.64124 25.9601 3.47824H15.3047V7.65218Z" fill="#D80027" />
                                        <path d="M16.0003 32C19.7658 32 23.2269 30.6985 25.96 28.5217H6.04053C8.77365 30.6985 12.2347 32 16.0003 32Z" fill="#D80027" />
                                        <path d="M2.34846 24.3478H29.6517C30.438 23.0647 31.0478 21.6622 31.4489 20.1739H0.55127C0.952332 21.6622 1.56214 23.0647 2.34846 24.3478Z" fill="#D80027" />
                                        <path d="M7.4115 2.49863H8.86956L7.51331 3.48394L8.03137 5.07825L6.67519 4.09294L5.319 5.07825L5.7665 3.70094C4.57237 4.69562 3.52575 5.861 2.66325 7.1595H3.13044L2.26712 7.78669C2.13262 8.01106 2.00362 8.239 1.88 8.47031L2.29225 9.73913L1.52313 9.18031C1.33194 9.58537 1.15706 9.99956 0.999875 10.4224L1.45406 11.8204H3.13044L1.77419 12.8057L2.29225 14.4L0.936063 13.4147L0.123687 14.0049C0.042375 14.6586 0 15.3243 0 16H16C16 7.1635 16 6.12175 16 0C12.8393 0 9.89281 0.916875 7.4115 2.49863ZM8.03137 14.4L6.67519 13.4147L5.319 14.4L5.83706 12.8057L4.48081 11.8204H6.15719L6.67519 10.2261L7.19319 11.8204H8.86956L7.51331 12.8057L8.03137 14.4ZM7.51331 8.14481L8.03137 9.73913L6.67519 8.75381L5.319 9.73913L5.83706 8.14481L4.48081 7.1595H6.15719L6.67519 5.56519L7.19319 7.1595H8.86956L7.51331 8.14481ZM13.7705 14.4L12.4143 13.4147L11.0581 14.4L11.5762 12.8057L10.2199 11.8204H11.8963L12.4143 10.2261L12.9323 11.8204H14.6087L13.2524 12.8057L13.7705 14.4ZM13.2524 8.14481L13.7705 9.73913L12.4143 8.75381L11.0581 9.73913L11.5762 8.14481L10.2199 7.1595H11.8963L12.4143 5.56519L12.9323 7.1595H14.6087L13.2524 8.14481ZM13.2524 3.48394L13.7705 5.07825L12.4143 4.09294L11.0581 5.07825L11.5762 3.48394L10.2199 2.49863H11.8963L12.4143 0.904312L12.9323 2.49863H14.6087L13.2524 3.48394Z" fill="#0052B4" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_304_249">
                                            <rect width="32" height="32" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_304_212)">
                                        <path d="M16.172 13L4 13L4 11L16.172 11L10.808 5.63602L12.222 4.22202L20 12L12.222 19.778L10.808 18.364L16.172 13Z" fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_304_212">
                                            <rect width="24" height="24" fill="white" transform="translate(24) rotate(90)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </span>
                            <span>
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_304_292)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H32V32H0V0Z" fill="#264C92" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.1097 23.3479H22.1652L21.315 24.0415L21.6449 25.1429L20.7988 24.464L19.9523 25.1429L20.2859 24.0415L19.4287 23.3479H20.4797L20.7988 22.2744L21.1097 23.3479ZM21.1097 7.93064H22.1652L21.315 8.62475L21.6449 9.72563L20.7988 9.04678L19.9523 9.72563L20.2859 8.62475L19.4287 7.93064H20.4797L20.7988 6.85715L21.1097 7.93064ZM24.1076 11.1956H25.1627L24.3121 11.8892L24.6424 12.9901L23.7959 12.3117L22.9503 12.9901L23.2838 11.8892L22.4262 11.1956H23.478L23.7959 10.1221L24.1076 11.1956ZM24.1076 20.1287H25.1627L24.3121 20.8224L24.6424 21.9228L23.7959 21.2449L22.9503 21.9228L23.2838 20.8224L22.4262 20.1287H23.478L23.7959 19.0548L24.1076 20.1287ZM25.2312 15.5941H26.2859L25.4365 16.2878L25.7659 17.3887L24.9203 16.7107L24.0738 17.3887L24.4074 16.2878L23.5502 15.5941H24.6011L24.9203 14.5202L25.2312 15.5941Z" fill="#005F8D" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3381 24.4962H17.4768L16.5589 25.1877L16.9155 26.2857L16.0016 25.6089L15.0878 26.2857L15.4479 25.1877L14.5229 24.4962H15.6576L16.0016 23.4259L16.3381 24.4962ZM20.6972 23.3212H21.8359L20.9189 24.0127L21.2746 25.1107L20.3607 24.4339L19.4478 25.1107L19.8079 24.0127L18.882 23.3212H20.0175L20.3607 22.2509L20.6972 23.3212ZM20.6972 7.95013H21.8359L20.9189 8.64169L21.2746 9.73969L20.3607 9.06334L19.4478 9.73969L19.8079 8.64169L18.882 7.95013H20.0175L20.3607 6.87988L20.6972 7.95013ZM23.9328 11.2052H25.0719L24.1545 11.8967L24.5102 12.9947L23.5972 12.3184L22.6838 12.9947L23.0435 11.8967L22.1176 11.2052H23.2531L23.5972 10.1349L23.9328 11.2052ZM23.9328 20.1109H25.0719L24.1545 20.8034L24.5102 21.9005L23.5972 21.2237L22.6838 21.9005L23.0435 20.8034L22.1176 20.1109H23.2531L23.5972 19.0406L23.9328 20.1109ZM25.1467 15.59H26.2858L25.3675 16.2816L25.724 17.3796L24.8102 16.7032L23.8972 17.3796L24.2573 16.2816L23.3315 15.59H24.467L24.8102 14.5202L25.1467 15.59ZM11.8433 7.96132H12.9823L12.0649 8.65333L12.4206 9.75088L11.5068 9.07453L10.5943 9.75088L10.9539 8.65333L10.0281 7.96132H11.1636L11.5068 6.89152L11.8433 7.96132ZM8.69714 11.2164H9.83576L8.91881 11.9084L9.27535 13.0059L8.36151 12.3296L7.44768 13.0059L7.80778 11.9084L6.88281 11.2164H8.01743L8.36151 10.1461L8.69714 11.2164ZM7.52869 15.6016H8.66731L7.75036 16.2932L8.10601 17.3912L7.19306 16.7144L6.27923 17.3912L6.63933 16.2932L5.71436 15.6016H6.84899L7.19306 14.5318L7.52869 15.6016ZM8.69714 20.1221H9.83576L8.91881 20.8136L9.27535 21.9116L8.36151 21.2353L7.44768 21.9116L7.80778 20.8136L6.88281 20.1221H8.01743L8.36151 19.0523L8.69714 20.1221ZM11.8887 23.3324H13.0273L12.1095 24.0239L12.466 25.121L11.5522 24.4456L10.6392 25.121L10.9993 24.0239L10.0735 23.3324H11.2085L11.5522 22.2626L11.8887 23.3324ZM16.2887 6.78454H17.4274L16.5095 7.4761L16.8656 8.5741L15.9522 7.89731L15.0393 8.5741L15.3994 7.4761L14.4731 6.78454H15.6086L15.9522 5.71429L16.2887 6.78454Z" fill="#FFF22D" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_304_292">
                                            <rect width="32" height="32" rx="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </span>
                            <span>
                                + €1.00
                            </span>
                        </td>
                        <td>
                            <p class="f-16-fig text-dark">Aug 27, 2022</p>
                        </td>

                        <td>
                            <p class="f-16-fig text-dark">12:32 PM</p>
                        </td>

                        <td class="text-right">
                            <svg width="20" height="4" viewBox="0 0 20 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0ZM18 0C16.9 0 16 0.9 16 2C16 3.1 16.9 4 18 4C19.1 4 20 3.1 20 2C20 0.9 19.1 0 18 0ZM10 0C8.9 0 8 0.9 8 2C8 3.1 8.9 4 10 4C11.1 4 12 3.1 12 2C12 0.9 11.1 0 10 0Z" fill="black" />
                            </svg>

                        </td>
                    </tr>

                    <tr>
                        <td style="padding-left: 24px;">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_304_173)">
                                        <path d="M11.0001 16.172L11.0001 4L13.0001 4L13.0001 16.172L18.3641 10.808L19.7781 12.222L12.0001 20L4.22208 12.222L5.63608 10.808L11.0001 16.172Z" fill="#13BF44" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_304_173">
                                            <rect width="24" height="24" fill="white" transform="translate(24 24) rotate(-180)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </span>
                            <span><img src="{{ asset(theme()->getMediaUrlPath() . 'img/binance.png') }}" width="32" height="32" alt=""></span>
                        </td>
                        <td>
                            <p class="f-16-fig text-dark">Exchange</p>

                        </td>
                        <td>
                            <span class="f-16-fig text-dark">
                                -$20.00
                            </span>
                            <span><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_304_249)">
                                        <path d="M16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32Z" fill="#F0F0F0" />
                                        <path d="M15.3047 16H32.0003C32.0003 14.5559 31.8078 13.1569 31.4491 11.826H15.3047V16Z" fill="#D80027" />
                                        <path d="M15.3047 7.65218H29.6519C28.6725 6.05393 27.4202 4.64124 25.9601 3.47824H15.3047V7.65218Z" fill="#D80027" />
                                        <path d="M16.0003 32C19.7658 32 23.2269 30.6985 25.96 28.5217H6.04053C8.77365 30.6985 12.2347 32 16.0003 32Z" fill="#D80027" />
                                        <path d="M2.34846 24.3478H29.6517C30.438 23.0647 31.0478 21.6622 31.4489 20.1739H0.55127C0.952332 21.6622 1.56214 23.0647 2.34846 24.3478Z" fill="#D80027" />
                                        <path d="M7.4115 2.49863H8.86956L7.51331 3.48394L8.03137 5.07825L6.67519 4.09294L5.319 5.07825L5.7665 3.70094C4.57237 4.69562 3.52575 5.861 2.66325 7.1595H3.13044L2.26712 7.78669C2.13262 8.01106 2.00362 8.239 1.88 8.47031L2.29225 9.73913L1.52313 9.18031C1.33194 9.58537 1.15706 9.99956 0.999875 10.4224L1.45406 11.8204H3.13044L1.77419 12.8057L2.29225 14.4L0.936063 13.4147L0.123687 14.0049C0.042375 14.6586 0 15.3243 0 16H16C16 7.1635 16 6.12175 16 0C12.8393 0 9.89281 0.916875 7.4115 2.49863ZM8.03137 14.4L6.67519 13.4147L5.319 14.4L5.83706 12.8057L4.48081 11.8204H6.15719L6.67519 10.2261L7.19319 11.8204H8.86956L7.51331 12.8057L8.03137 14.4ZM7.51331 8.14481L8.03137 9.73913L6.67519 8.75381L5.319 9.73913L5.83706 8.14481L4.48081 7.1595H6.15719L6.67519 5.56519L7.19319 7.1595H8.86956L7.51331 8.14481ZM13.7705 14.4L12.4143 13.4147L11.0581 14.4L11.5762 12.8057L10.2199 11.8204H11.8963L12.4143 10.2261L12.9323 11.8204H14.6087L13.2524 12.8057L13.7705 14.4ZM13.2524 8.14481L13.7705 9.73913L12.4143 8.75381L11.0581 9.73913L11.5762 8.14481L10.2199 7.1595H11.8963L12.4143 5.56519L12.9323 7.1595H14.6087L13.2524 8.14481ZM13.2524 3.48394L13.7705 5.07825L12.4143 4.09294L11.0581 5.07825L11.5762 3.48394L10.2199 2.49863H11.8963L12.4143 0.904312L12.9323 2.49863H14.6087L13.2524 3.48394Z" fill="#0052B4" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_304_249">
                                            <rect width="32" height="32" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </span>
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_304_212)">
                                        <path d="M16.172 13L4 13L4 11L16.172 11L10.808 5.63602L12.222 4.22202L20 12L12.222 19.778L10.808 18.364L16.172 13Z" fill="black" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_304_212">
                                            <rect width="24" height="24" fill="white" transform="translate(24) rotate(90)" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </span>
                            <span>
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_304_292)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H32V32H0V0Z" fill="#264C92" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.1097 23.3479H22.1652L21.315 24.0415L21.6449 25.1429L20.7988 24.464L19.9523 25.1429L20.2859 24.0415L19.4287 23.3479H20.4797L20.7988 22.2744L21.1097 23.3479ZM21.1097 7.93064H22.1652L21.315 8.62475L21.6449 9.72563L20.7988 9.04678L19.9523 9.72563L20.2859 8.62475L19.4287 7.93064H20.4797L20.7988 6.85715L21.1097 7.93064ZM24.1076 11.1956H25.1627L24.3121 11.8892L24.6424 12.9901L23.7959 12.3117L22.9503 12.9901L23.2838 11.8892L22.4262 11.1956H23.478L23.7959 10.1221L24.1076 11.1956ZM24.1076 20.1287H25.1627L24.3121 20.8224L24.6424 21.9228L23.7959 21.2449L22.9503 21.9228L23.2838 20.8224L22.4262 20.1287H23.478L23.7959 19.0548L24.1076 20.1287ZM25.2312 15.5941H26.2859L25.4365 16.2878L25.7659 17.3887L24.9203 16.7107L24.0738 17.3887L24.4074 16.2878L23.5502 15.5941H24.6011L24.9203 14.5202L25.2312 15.5941Z" fill="#005F8D" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.3381 24.4962H17.4768L16.5589 25.1877L16.9155 26.2857L16.0016 25.6089L15.0878 26.2857L15.4479 25.1877L14.5229 24.4962H15.6576L16.0016 23.4259L16.3381 24.4962ZM20.6972 23.3212H21.8359L20.9189 24.0127L21.2746 25.1107L20.3607 24.4339L19.4478 25.1107L19.8079 24.0127L18.882 23.3212H20.0175L20.3607 22.2509L20.6972 23.3212ZM20.6972 7.95013H21.8359L20.9189 8.64169L21.2746 9.73969L20.3607 9.06334L19.4478 9.73969L19.8079 8.64169L18.882 7.95013H20.0175L20.3607 6.87988L20.6972 7.95013ZM23.9328 11.2052H25.0719L24.1545 11.8967L24.5102 12.9947L23.5972 12.3184L22.6838 12.9947L23.0435 11.8967L22.1176 11.2052H23.2531L23.5972 10.1349L23.9328 11.2052ZM23.9328 20.1109H25.0719L24.1545 20.8034L24.5102 21.9005L23.5972 21.2237L22.6838 21.9005L23.0435 20.8034L22.1176 20.1109H23.2531L23.5972 19.0406L23.9328 20.1109ZM25.1467 15.59H26.2858L25.3675 16.2816L25.724 17.3796L24.8102 16.7032L23.8972 17.3796L24.2573 16.2816L23.3315 15.59H24.467L24.8102 14.5202L25.1467 15.59ZM11.8433 7.96132H12.9823L12.0649 8.65333L12.4206 9.75088L11.5068 9.07453L10.5943 9.75088L10.9539 8.65333L10.0281 7.96132H11.1636L11.5068 6.89152L11.8433 7.96132ZM8.69714 11.2164H9.83576L8.91881 11.9084L9.27535 13.0059L8.36151 12.3296L7.44768 13.0059L7.80778 11.9084L6.88281 11.2164H8.01743L8.36151 10.1461L8.69714 11.2164ZM7.52869 15.6016H8.66731L7.75036 16.2932L8.10601 17.3912L7.19306 16.7144L6.27923 17.3912L6.63933 16.2932L5.71436 15.6016H6.84899L7.19306 14.5318L7.52869 15.6016ZM8.69714 20.1221H9.83576L8.91881 20.8136L9.27535 21.9116L8.36151 21.2353L7.44768 21.9116L7.80778 20.8136L6.88281 20.1221H8.01743L8.36151 19.0523L8.69714 20.1221ZM11.8887 23.3324H13.0273L12.1095 24.0239L12.466 25.121L11.5522 24.4456L10.6392 25.121L10.9993 24.0239L10.0735 23.3324H11.2085L11.5522 22.2626L11.8887 23.3324ZM16.2887 6.78454H17.4274L16.5095 7.4761L16.8656 8.5741L15.9522 7.89731L15.0393 8.5741L15.3994 7.4761L14.4731 6.78454H15.6086L15.9522 5.71429L16.2887 6.78454Z" fill="#FFF22D" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_304_292">
                                            <rect width="32" height="32" rx="16" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                            </span>
                            <span>
                                + €1.00
                            </span>
                        </td>
                        <td>
                            <p class="f-16-fig text-dark">Aug 27, 2022</p>
                        </td>

                        <td>
                            <p class="f-16-fig text-dark">12:32 PM</p>
                        </td>

                        <td class="text-right">
                            <svg width="20" height="4" viewBox="0 0 20 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 0C0.9 0 0 0.9 0 2C0 3.1 0.9 4 2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0ZM18 0C16.9 0 16 0.9 16 2C16 3.1 16.9 4 18 4C19.1 4 20 3.1 20 2C20 0.9 19.1 0 18 0ZM10 0C8.9 0 8 0.9 8 2C8 3.1 8.9 4 10 4C11.1 4 12 3.1 12 2C12 0.9 11.1 0 10 0Z" fill="black" />
                            </svg>

                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</x-base-layout>
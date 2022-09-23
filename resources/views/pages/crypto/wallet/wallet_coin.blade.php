<x-base-layout>
    <style>
        table thead tr {
            height: 60px;
            background: transparent;
        }

        .select-box {
            padding-top: 0px !important;
        }

        table {
            table-layout: fixed;
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

        .crypto-badge-success {

            border-radius: 8px;
            color: #13BF44;
            background: rgba(19, 191, 68, 0.12);
            padding-top: 8px;
            padding-bottom: 8px;
            padding-left: 12px;
            padding-right: 12px;

        }

        .crypto-badge-secondary {

            border-radius: 8px;
            color: #646464;
            background: rgba(111, 111, 111, 0.12);
            padding-top: 8px;
            padding-bottom: 8px;
            padding-left: 12px;
            padding-right: 12px;

        }

        body {
            background-color: #F8F9FD;
        }

      
    </style>

    <div class="row gy-5 g-xl-4 mb-5" style="margin-top: 50px; ">
        <div class="col-md-12">
            <span><a href="{{ route('crypto.wallet') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></span>
            <span class="pr-2" style="color:#6F6F6F;padding-left: 7px;">Back To Wallets</span>
        </div>
        <div class="col-md-12" style="margin-bottom: 26px;">
            <h1 class="dash-title" style="margin-bottom: 18px; font-size:30px !important">
                <span><img src="{{ asset(theme()->getMediaUrlPath() . 'img/binance.png') }}" width="48" height="48" alt=""></span>
                Coinbase
            </h1>
        </div>
    </div>
    <div class="d-md-flex justify-content-end" style="margin-bottom: 25px; margin-top:25px">
        <div>
            <a href="{{ route('crypto.add_wallet') }}">

            </a>

            <div class="d-md-flex">
                <div style="padding-right:25px">
                <a href="{{ route('crypto.wallet_coin_import') }}" style="color: #000;">
                    <span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.6 16.7222H16.4V10.5H18V17.6111C18 17.8469 17.9157 18.073 17.7657 18.2397C17.6157 18.4064 17.4122 18.5 17.2 18.5H2.8C2.58783 18.5 2.38434 18.4064 2.23431 18.2397C2.08429 18.073 2 17.8469 2 17.6111V10.5H3.6V16.7222ZM8.4 8.72222H4.4L10 2.5L15.6 8.72222H11.6V14.0556H8.4V8.72222Z" fill="#6F6F6F" />
                        </svg>
                    </span>
                    Import
                </a>
                   
                </div>

                <div style="padding-right:25px">
                    <span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_386_103)">
                                <path d="M10.75 5.71507L14.285 9.2509L6.035 17.5001H2.5V13.9642L10.75 5.71424V5.71507ZM11.9283 4.53674L13.6958 2.7684C13.8521 2.61218 14.064 2.52441 14.285 2.52441C14.506 2.52441 14.7179 2.61218 14.8742 2.7684L17.2317 5.1259C17.3879 5.28218 17.4757 5.4941 17.4757 5.71507C17.4757 5.93604 17.3879 6.14796 17.2317 6.30424L15.4633 8.07174L11.9283 4.53674Z" fill="#6F6F6F" />
                            </g>
                            <defs>
                                <clipPath id="clip0_386_103">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </span>
                    Edit
                </div>

                <div style="padding-right:25px">
                    <span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_386_108)">
                                <path d="M14.1667 3.33341H18.3334V5.00008H16.6667V17.5001C16.6667 17.7211 16.579 17.9331 16.4227 18.0893C16.2664 18.2456 16.0544 18.3334 15.8334 18.3334H4.16675C3.94573 18.3334 3.73377 18.2456 3.57749 18.0893C3.42121 17.9331 3.33341 17.7211 3.33341 17.5001V5.00008H1.66675V3.33341H5.83341V1.66675H14.1667V3.33341ZM7.50008 7.50008V14.1667H9.16675V7.50008H7.50008ZM10.8334 7.50008V14.1667H12.5001V7.50008H10.8334Z" fill="#6F6F6F" />
                            </g>
                            <defs>
                                <clipPath id="clip0_386_108">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </span>
                    Delete
                </div>
            </div>
        </div>
    </div>

    <div class="row">


        <div class="col-12">

            <div class="card">
                <div class="d-md-flex justify-content-between" style="padding-left: 20px;padding-top:24px;padding-right: 24px;">
                    <h2 class="f-18-fig-neue">
                        Holdings
                    </h2>
                    <h2 class="f-18-fig-neue">
                        -$241,180
                    </h2>
                </div>
                <table class="table crypto_table" style="padding-right:24px">
                    <tbody class="tbody">
                        <tr>
                            <td>
                                <div class="icon d-md-flex " style="padding-left: 20px;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_386_35)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H24V24H0V0Z" fill="#264C92" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8322 17.5109H16.6238L15.9862 18.0311L16.2335 18.8571L15.599 18.348L14.9641 18.8571L15.2143 18.0311L14.5714 17.5109H15.3596L15.599 16.7057L15.8322 17.5109ZM15.8322 5.94794H16.6238L15.9862 6.46852L16.2335 7.29418L15.599 6.78505L14.9641 7.29418L15.2143 6.46852L14.5714 5.94794H15.3596L15.599 5.14282L15.8322 5.94794ZM18.0806 8.39663H18.8719L18.234 8.91688L18.4817 9.74254L17.8468 9.23374L17.2126 9.74254L17.4627 8.91688L16.8195 8.39663H17.6084L17.8468 7.59151L18.0806 8.39663ZM18.0806 15.0965H18.8719L18.234 15.6168L18.4817 16.4421L17.8468 15.9336L17.2126 16.4421L17.4627 15.6168L16.8195 15.0965H17.6084L17.8468 14.2911L18.0806 15.0965ZM18.9233 11.6956H19.7143L19.0772 12.2158L19.3243 13.0415L18.6901 12.533L18.0552 13.0415L18.3054 12.2158L17.6625 11.6956H18.4507L18.6901 10.8901L18.9233 11.6956Z" fill="#005F8D" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2536 18.372H13.1076L12.4192 18.8907L12.6866 19.7142L12.0012 19.2066L11.3158 19.7142L11.5859 18.8907L10.8922 18.372H11.7432L12.0012 17.5694L12.2536 18.372ZM15.5229 17.4908H16.3769L15.6892 18.0095L15.9559 18.833L15.2705 18.3254L14.5858 18.833L14.8559 18.0095L14.1615 17.4908H15.0132L15.2705 16.6881L15.5229 17.4908ZM15.5229 5.96252H16.3769L15.6892 6.48119L15.9559 7.30469L15.2705 6.79743L14.5858 7.30469L14.8559 6.48119L14.1615 5.96252H15.0132L15.2705 5.15984L15.5229 5.96252ZM17.9496 8.4038H18.8039L18.1159 8.92248L18.3826 9.74597L17.6979 9.23872L17.0129 9.74597L17.2826 8.92248L16.5882 8.4038H17.4399L17.6979 7.60112L17.9496 8.4038ZM17.9496 15.0831H18.8039L18.1159 15.6024L18.3826 16.4253L17.6979 15.9177L17.0129 16.4253L17.2826 15.6024L16.5882 15.0831H17.4399L17.6979 14.2804L17.9496 15.0831ZM18.86 11.6924H19.7143L19.0256 12.2111L19.293 13.0346L18.6076 12.5273L17.9229 13.0346L18.193 12.2111L17.4986 11.6924H18.3503L18.6076 10.8901L18.86 11.6924ZM8.88246 5.97091H9.73676L9.04871 6.48992L9.31545 7.31308L8.63007 6.80582L7.9457 7.31308L8.21544 6.48992L7.52105 5.97091H8.37268L8.63007 5.16856L8.88246 5.97091ZM6.52285 8.41219H7.37682L6.68911 8.9312L6.95651 9.75436L6.27114 9.24711L5.58576 9.75436L5.85584 8.9312L5.16211 8.41219H6.01308L6.27114 7.60951L6.52285 8.41219ZM5.64651 11.7011H6.50048L5.81277 12.2198L6.07951 13.0433L5.3948 12.5357L4.70942 13.0433L4.9795 12.2198L4.28577 11.7011H5.13674L5.3948 10.8988L5.64651 11.7011ZM6.52285 15.0915H7.37682L6.68911 15.6102L6.95651 16.4337L6.27114 15.9264L5.58576 16.4337L5.85584 15.6102L5.16211 15.0915H6.01308L6.27114 14.2891L6.52285 15.0915ZM8.91651 17.4992H9.77048L9.08209 18.0179L9.34951 18.8407L8.66412 18.3341L7.97941 18.8407L8.24949 18.0179L7.5551 17.4992H8.4064L8.66412 16.6969L8.91651 17.4992ZM12.2166 5.08833H13.0705L12.3821 5.607L12.6492 6.4305L11.9642 5.92291L11.2795 6.4305L11.5495 5.607L10.8548 5.08833H11.7064L11.9642 4.28564L12.2166 5.08833Z" fill="#FFF22D" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_386_35">
                                                <rect width="24" height="24" rx="12" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>


                                    <p class="f-16-fig pl-3" style="color:#0052FE;margin-bottom: 0;padding-left:20px">EUR</p>

                                </div>
                            </td>
                            <td>
                                <p class="f-16-fig pl-3" style="color:#000000;margin-bottom: 0;">165.000</p>

                            </td>
                            <td>
                                <p class="f-16-fig pl-3" style="color:#000000;margin-bottom: 0;">165.000</p>

                            </td>
                            <td class="text-right" style="text-align: right;padding-right: 24px;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_386_87)">
                                        <path d="M1.18091 12C2.12091 6.88 6.60791 3 11.9999 3C17.3919 3 21.8779 6.88 22.8189 12C21.8789 17.12 17.3919 21 11.9999 21C6.60791 21 2.12191 17.12 1.18091 12ZM11.9999 17C13.326 17 14.5978 16.4732 15.5354 15.5355C16.4731 14.5979 16.9999 13.3261 16.9999 12C16.9999 10.6739 16.4731 9.40215 15.5354 8.46447C14.5978 7.52678 13.326 7 11.9999 7C10.6738 7 9.40206 7.52678 8.46437 8.46447C7.52669 9.40215 6.99991 10.6739 6.99991 12C6.99991 13.3261 7.52669 14.5979 8.46437 15.5355C9.40206 16.4732 10.6738 17 11.9999 17ZM11.9999 15C11.2043 15 10.4412 14.6839 9.87859 14.1213C9.31598 13.5587 8.99991 12.7956 8.99991 12C8.99991 11.2044 9.31598 10.4413 9.87859 9.87868C10.4412 9.31607 11.2043 9 11.9999 9C12.7956 9 13.5586 9.31607 14.1212 9.87868C14.6838 10.4413 14.9999 11.2044 14.9999 12C14.9999 12.7956 14.6838 13.5587 14.1212 14.1213C13.5586 14.6839 12.7956 15 11.9999 15Z" fill="black" fill-opacity="0.6" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_386_87">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="icon d-md-flex " style="padding-left: 20px;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_386_46)">
                                            <path d="M24 12C24 18.6274 18.6274 24 12 24C5.37262 24 0 18.6274 0 12C0 12.0028 12 0.00135937 12 0C18.6274 0 24 5.37262 24 12Z" fill="#224B8C" />
                                            <path d="M11.9679 11.9999H12C12 11.989 12 11.9786 12 11.9678C11.9893 11.9785 11.9786 11.9892 11.9679 11.9999Z" fill="#F0F0F0" />
                                            <path d="M12 6.26086C12 4.14937 12 2.76577 12 0H11.998C5.3715 0.00107812 0 5.37319 0 12H6.26086V8.47439L9.78642 12H11.9679C11.9787 11.9893 11.9894 11.9786 12 11.9678C12 11.1594 12 10.438 12 9.78647L8.47444 6.26086H12Z" fill="#F0F0F0" />
                                            <path d="M6.071 1.56519C4.19417 2.63389 2.63389 4.19417 1.56519 6.071V12H4.69564V4.69569V4.69564H12C12 3.70831 12 2.76772 12 1.56519H6.071Z" fill="#D80027" />
                                            <path d="M12 10.5244L7.73654 6.26101H6.26086C6.26086 6.26096 6.26086 6.26101 6.26086 6.26101L11.9999 12.0001H12C12 12.0001 12 10.9826 12 10.5244Z" fill="#D80027" />
                                            <path d="M7.23729 14.0869L7.89588 15.464L9.38309 15.1203L8.71709 16.4938L9.91305 17.4422L8.42398 17.7779L8.42815 19.3043L7.23729 18.3493L6.04648 19.3043L6.05065 17.7779L4.56152 17.4422L5.75754 16.4938L5.09145 15.1203L6.57874 15.464L7.23729 14.0869Z" fill="#F0F0F0" />
                                            <path d="M17.9665 16.6956L18.2958 17.3841L19.0394 17.2122L18.7064 17.899L19.3044 18.3732L18.5599 18.541L18.5619 19.3042L17.9665 18.8267L17.3711 19.3042L17.3732 18.541L16.6287 18.3732L17.2266 17.899L16.8936 17.2122L17.6372 17.3841L17.9665 16.6956Z" fill="#F0F0F0" />
                                            <path d="M14.9031 9.39111L15.2323 10.0797L15.976 9.90777L15.643 10.5945L16.241 11.0688L15.4964 11.2366L15.4985 11.9998L14.9031 11.5223L14.3077 11.9998L14.3097 11.2366L13.5652 11.0688L14.1632 10.5945L13.8302 9.90777L14.5738 10.0797L14.9031 9.39111Z" fill="#F0F0F0" />
                                            <path d="M17.9665 5.21729L18.2958 5.90588L19.0394 5.73399L18.7064 6.42075L19.3044 6.89494L18.5599 7.0628L18.5619 7.82602L17.9665 7.3485L17.3711 7.82602L17.3732 7.0628L16.6287 6.89494L17.2266 6.42075L16.8936 5.73399L17.6372 5.90588L17.9665 5.21729Z" fill="#F0F0F0" />
                                            <path d="M20.6422 8.34766L20.9715 9.03625L21.7151 8.86431L21.3821 9.55108L21.9801 10.0253L21.2355 10.1932L21.2376 10.9563L20.6422 10.4789L20.0468 10.9563L20.0488 10.1932L19.3043 10.0253L19.9023 9.55108L19.5693 8.86431L20.3129 9.03625L20.6422 8.34766Z" fill="#F0F0F0" />
                                            <path d="M18.7289 12L18.9879 12.7972H19.8261L19.148 13.2899L19.4071 14.087L18.7289 13.5943L18.0508 14.087L18.3098 13.2899L17.6317 12.7972H18.4699L18.7289 12Z" fill="#F0F0F0" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_386_46">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>



                                    <p class="f-16-fig pl-3" style="color:#0052FE;margin-bottom: 0;padding-left:20px">AUD</p>

                                </div>
                            </td>
                            <td>
                                <p class="f-16-fig pl-3" style="color:#000000;margin-bottom: 0;">165.000</p>

                            </td>
                            <td>
                                <p class="f-16-fig pl-3" style="color:#000000;margin-bottom: 0;">165.000</p>

                            </td>
                            <td class="text-right" style="text-align: right;padding-right: 24px;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_386_87)">
                                        <path d="M1.18091 12C2.12091 6.88 6.60791 3 11.9999 3C17.3919 3 21.8779 6.88 22.8189 12C21.8789 17.12 17.3919 21 11.9999 21C6.60791 21 2.12191 17.12 1.18091 12ZM11.9999 17C13.326 17 14.5978 16.4732 15.5354 15.5355C16.4731 14.5979 16.9999 13.3261 16.9999 12C16.9999 10.6739 16.4731 9.40215 15.5354 8.46447C14.5978 7.52678 13.326 7 11.9999 7C10.6738 7 9.40206 7.52678 8.46437 8.46447C7.52669 9.40215 6.99991 10.6739 6.99991 12C6.99991 13.3261 7.52669 14.5979 8.46437 15.5355C9.40206 16.4732 10.6738 17 11.9999 17ZM11.9999 15C11.2043 15 10.4412 14.6839 9.87859 14.1213C9.31598 13.5587 8.99991 12.7956 8.99991 12C8.99991 11.2044 9.31598 10.4413 9.87859 9.87868C10.4412 9.31607 11.2043 9 11.9999 9C12.7956 9 13.5586 9.31607 14.1212 9.87868C14.6838 10.4413 14.9999 11.2044 14.9999 12C14.9999 12.7956 14.6838 13.5587 14.1212 14.1213C13.5586 14.6839 12.7956 15 11.9999 15Z" fill="black" fill-opacity="0.6" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_386_87">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>




        </div>
    </div>

    <div class="row" style="margin-top: 16px;">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div>
                        <span>
                            <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_208_2)">
                                    <circle cx="36" cy="32" r="16" fill="#F4B42A" />
                                </g>
                                <path d="M36.025 40.05C33.8417 40.05 31.9625 39.2625 30.3875 37.6875C28.8125 36.1125 28.025 34.2334 28.025 32.05V30.925L26.025 32.925L25.05 31.95L28.775 28.225L32.5 31.95L31.525 32.925L29.525 30.925V32.05C29.525 33.8334 30.1625 35.3625 31.4375 36.6375C32.7125 37.9125 34.2417 38.55 36.025 38.55C36.5084 38.55 36.9667 38.5084 37.4 38.425C37.8334 38.3417 38.2417 38.2167 38.625 38.05L39.7 39.125C39.1 39.4584 38.4959 39.6959 37.8875 39.8375C37.2792 39.9792 36.6584 40.05 36.025 40.05ZM43.25 35.825L39.525 32.1L40.525 31.1L42.5 33.075V32.05C42.5 30.2667 41.8625 28.7375 40.5875 27.4625C39.3125 26.1875 37.7834 25.55 36 25.55C35.5167 25.55 35.0584 25.5959 34.625 25.6875C34.1917 25.7792 33.7834 25.8917 33.4 26.025L32.325 24.95C32.925 24.6167 33.5292 24.3834 34.1375 24.25C34.7459 24.1167 35.3667 24.05 36 24.05C38.1834 24.05 40.0626 24.8375 41.6376 26.4125C43.2126 27.9875 44 29.8667 44 32.05V33.125L46 31.125L46.975 32.1L43.25 35.825Z" fill="white" />
                                <defs>
                                    <filter id="filter0_d_208_2" x="0" y="0" width="72" height="72" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="4" />
                                        <feGaussianBlur stdDeviation="10" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix" values="0 0 0 0 0.956863 0 0 0 0 0.705882 0 0 0 0 0.164706 0 0 0 0.3 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_208_2" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_208_2" result="shape" />
                                    </filter>
                                </defs>
                            </svg>

                        </span>
                        <span class="f-16-neu-fig" style="color:#000000">Setup auto-sync</span>
                    </div>

                    <p class="f-16-fig" style="color:#6F6F6F">Your transactions will be imported automatically</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div>
                        <span>
                            <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_208_2)">
                                    <circle cx="36" cy="32" r="16" fill="#FF4768" />
                                </g>
                                <g clip-path="url(#clip0_208_2)">
                                    <path d="M36.0001 40.3334C31.3976 40.3334 27.6667 36.6026 27.6667 32.0001C27.6667 27.3976 31.3976 23.6667 36.0001 23.6667C40.6026 23.6667 44.3334 27.3976 44.3334 32.0001C44.3334 36.6026 40.6026 40.3334 36.0001 40.3334ZM36.0001 38.6667C37.7682 38.6667 39.4639 37.9644 40.7141 36.7141C41.9644 35.4639 42.6667 33.7682 42.6667 32.0001C42.6667 30.232 41.9644 28.5363 40.7141 27.286C39.4639 26.0358 37.7682 25.3334 36.0001 25.3334C34.232 25.3334 32.5363 26.0358 31.286 27.286C30.0358 28.5363 29.3334 30.232 29.3334 32.0001C29.3334 33.7682 30.0358 35.4639 31.286 36.7141C32.5363 37.9644 34.232 38.6667 36.0001 38.6667ZM35.1667 34.5001H36.8334V36.1667H35.1667V34.5001ZM35.1667 27.8334H36.8334V32.8334H35.1667V27.8334Z" fill="white" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_208_2" x="0" y="0" width="72" height="72" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="4" />
                                        <feGaussianBlur stdDeviation="10" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix" values="0 0 0 0 0.847059 0 0 0 0 0 0 0 0 0 0.152941 0 0 0 0.3 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_208_2" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_208_2" result="shape" />
                                    </filter>
                                    <clipPath id="clip0_208_2">
                                        <rect width="20" height="20" fill="white" transform="translate(26 22)" />
                                    </clipPath>
                                </defs>
                            </svg>


                        </span>
                        <span class="f-16-neu-fig" style="color:#000000">Having trouble?</span>
                    </div>

                    <p class="f-16-fig" style="color:#6F6F6F">View and resolve issues affecting this wallet</p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end" style="margin-top: 16px;">
        <span style="padding-right: 12px;">
            <button class="btn f-14-neu-400-fig crypto-badge-success ">
            11 transaction
            </button>
        </span>

        <span style="padding-right: 12px;">
            <button class="btn f-14-neu-400-fig crypto-badge-secondary ">
            7 Deposits
            </button>
        </span>
        <span style="padding-right: 12px;">
            <button class="btn f-14-neu-400-fig crypto-badge-secondary ">
            1 withdrawals
            </button>
        </span>

        <span style="padding-right: 12px;">
            <button class="btn f-14-neu-400-fig crypto-badge-secondary ">
            3 trades
            </button>
        </span>
    </div>



</x-base-layout>
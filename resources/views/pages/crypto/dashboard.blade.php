<x-base-layout>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/themes/dark.css"> -->
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

        #transaction_table .select-box__current {
            border: none;
        }

        #transaction_table .select-box__input-text {
            color: black;
            padding: 2px;
            padding-left: 9px;
            font-size: 16px;
        }

        .tbody tr:hover {
            background-color: transparent;
        }

        table {
            min-width: 800px;
            overflow-x: auto;
        }

        .flatpickr-day.inRange {
            color: #000 !important;
        }

        #flatpickerdate {
            padding: 13px 16px;
            background: #FFFFFF;
            border: 1px solid #EDEDED;
            border-radius: 10px;
            width: 100%;
        }

        .flatpickr-day.selected.startRange,
        .flatpickr-day.startRange.startRange,
        .flatpickr-day.endRange.startRange {
            color: #f0f0f0 !important;
        }

        .flatpickr-day.selected.endRange,
        .flatpickr-day.startRange.endRange,
        .flatpickr-day.endRange.endRange {
            color: #f0f0f0 !important;

        }
        body {
            background-color: #F8F9FD;
        }

        @media (min-width: 1200px) {
            .container {
                width: 1400px;
            }
        }
    </style>
    @if (\Session::has('message'))
    <div class="alert alert-info">
        <ul>
            <li>{{ \Session::get('message') }}</li>
        </ul>
    </div>
    @endif
    <div class="card mb-5">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6" style="
                    border-right: 1px solid #EDEDED;
                    padding-right:40px
                    ">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex">
                                <div class="icon">
                                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_d_584_484)">
                                            <circle cx="36" cy="32" r="16" fill="#F4B42A" />
                                        </g>
                                        <path d="M42.5455 27.6364C42.5455 29.7091 39.4182 31.2727 35.2727 31.2727C31.1273 31.2727 28 29.7091 28 27.6364C28 25.5636 31.1273 24 35.2727 24C39.4182 24 42.5455 25.5636 42.5455 27.6364ZM36.7273 38.5455C33.6364 38.5455 30.9964 37.7455 29.4545 36.4C29.4982 38.4582 32.6036 40 36.7273 40C40.8509 40 43.9345 38.4655 44 36.4291C42.48 37.7455 39.9055 38.5455 36.7273 38.5455ZM35.2727 35.6364C33.4015 35.6756 31.5423 35.329 29.8109 34.6182C30.7418 36.0873 33.4036 37.0909 36.7273 37.0909C40.8727 37.0909 44 35.5273 44 33.4545C43.9941 33.0048 43.8493 32.5679 43.5855 32.2036C42.5018 34.2836 39.3673 35.6364 35.2727 35.6364ZM36 32.7273H35.2727H34.5455C31.6945 32.6182 29.3745 31.84 28 30.6255C28.0655 32.6473 31.1709 34.1818 35.2727 34.1818C39.3745 34.1818 42.48 32.6473 42.5455 30.6109C41.1418 31.8255 38.8218 32.6036 36 32.7273Z" fill="white" />
                                        <defs>
                                            <filter id="filter0_d_584_484" x="0" y="0" width="72" height="72" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="4" />
                                                <feGaussianBlur stdDeviation="10" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0.956863 0 0 0 0 0.705882 0 0 0 0 0.164706 0 0 0 0.3 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_584_484" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_584_484" result="shape" />
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="">
                                    <p class="f-18-fig-questrial">
                                        Total Value
                                    </p>
                                    <h3 class="f-20-fig">
                                        $23.738
                                    </h3>
                                    <p class="f-14-neu-400-fig" style="color:#EB5757">
                                        -14.67%
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex">
                                <div class="icon">
                                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_d_584_495)">
                                            <circle cx="36" cy="32" r="16" fill="#13BF44" />
                                        </g>
                                        <path d="M37.9134 35.1265C37.9134 34.2784 36.7176 33.5794 35.4518 32.8398C33.8341 31.8944 32 30.8229 32 28.8734C31.9966 28.0751 32.2912 27.3014 32.8323 26.6891C33.3735 26.0768 34.1259 25.6651 34.9568 25.5267V24H37.0435V25.5532C37.891 25.7704 38.6396 26.2453 39.1739 26.9048C39.7084 27.5643 39.9986 28.3716 40 29.2025H37.9133C37.9126 28.7227 37.7113 28.2626 37.3526 27.9232C36.9939 27.5835 36.5075 27.3926 36.0001 27.3923C35.1175 27.3923 34.0866 27.7802 34.0866 28.8735C34.0866 29.7216 35.2824 30.4205 36.5481 31.1602C38.1659 32.1056 40 33.1771 40 35.1266C40.0037 35.9249 39.7088 36.6984 39.1676 37.3109C38.6269 37.9232 37.8741 38.3348 37.0435 38.4732V40H34.9569V38.4468C34.109 38.2296 33.3604 37.7547 32.8261 37.0952C32.2919 36.4357 32.0017 35.6284 32 34.7975H34.0867C34.0874 35.2773 34.2891 35.7374 34.6477 36.0768C35.0064 36.4162 35.4928 36.6074 36.0002 36.6077C36.8828 36.6077 37.9134 36.2198 37.9134 35.1265Z" fill="white" />
                                        <defs>
                                            <filter id="filter0_d_584_495" x="0" y="0" width="72" height="72" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="4" />
                                                <feGaussianBlur stdDeviation="10" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0.075 0 0 0 0 0.75 0 0 0 0 0.267857 0 0 0 0.3 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_584_495" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_584_495" result="shape" />
                                            </filter>
                                        </defs>
                                    </svg>

                                </div>
                                <div class="">
                                    <p class="f-18-fig-questrial">
                                        Cost Basis
                                    </p>
                                    <h3 class="f-20-fig">
                                        $23.738
                                    </h3>
                                    <p class="f-14-neu-400-fig" style="color:#EB5757">
                                        -14.67%
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="d-flex">
                                <div class="icon">
                                    <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_d_584_505)">
                                            <circle cx="36" cy="32" r="16" fill="#9181DB" />
                                        </g>
                                        <path d="M40.9765 28.2378L36.6141 23.0561C36.5869 23.0208 36.5447 23 36.5002 23C36.4555 23 36.4132 23.0208 36.386 23.0561L32.0236 28.2378C31.9731 28.2977 32.0089 28.4002 32.0802 28.4002H34.6V31.0104C34.6 33.183 34.6 33.3071 34.6 34.7565C34.6 36.2059 34.6 37.569 34.6 39.0897V41H38.3999V28.4H40.9197C40.9909 28.4 41.0268 28.2977 40.9765 28.2378Z" fill="white" />
                                        <defs>
                                            <filter id="filter0_d_584_505" x="0" y="0" width="72" height="72" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset dy="4" />
                                                <feGaussianBlur stdDeviation="10" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0.568627 0 0 0 0 0.505882 0 0 0 0 0.858824 0 0 0 0.3 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_584_505" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_584_505" result="shape" />
                                            </filter>
                                        </defs>
                                    </svg>

                                </div>
                                <div class="">
                                    <p class="f-18-fig-questrial">
                                        Unrealized gains
                                    </p>
                                    <h3 class="f-20-fig">
                                        $23.738
                                    </h3>
                                    <p class="f-14-neu-400-fig" style="color:#EB5757">
                                        -14.67%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="line-chart">
                                <div class="aspect-ratio">
                                    <canvas id="chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="
                    border-right: 1px solid #EDEDED;
                    padding-right:40px;
                    padding-left:30px

                    ">
                    <div>
                        <h3 class="f-18-fig-neue" style="margin-bottom: 38px;">Transactions / 5</h3>
                        <div class="line-chart">
                            <div class="aspect-ratio">
                                <canvas id="line-chart-transaction" height="49"></canvas>
                            </div>
                        </div>

                        <hr>
                        <h3 class="f-18-fig-neue" style="margin-bottom: 38px;font-weight:400">Breakdown</h3>
                        <div>
                            <div class="d-flex justify-content-between">
                                <h4 class="f-18-fig-questrial" style="color:#6f6f6f">Realized gains:</h4>
                                <p>$120</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h4 class="f-18-fig-questrial" style="color:#6f6f6f">Income:</h4>
                                <p>$120</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h4 class="f-18-fig-questrial" style="color:#6f6f6f">Income:</h4>
                                <p>$120</p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <!-- <div id="sla-data-range" class="mrp-container" data-toggle="popover">
                        <span class="mrp-icon"><i class="fa fa-calendar"></i></span>
                        <div class="mrp-monthdisplay">
                            <span class="mrp-lowerMonth">Jul 2014</span>
                            <span class="mrp-to"> to </span>
                            <span class="mrp-upperMonth">Aug 2014</span>
                        </div>
                        <input type="hidden" value="201407" id="mrp-lowerDate" />
                        <input type="hidden" value="201408" id="mrp-upperDate" />
                    </div> -->
                    <div class="form__group" style="
                          position: relative;
                        ">
                        <svg style="position: absolute;top: 8px;right: 2px;" width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_d_208_2)">
                                <circle cx="36" cy="32" r="16" fill="#FF5959" />
                            </g>
                            <g clip-path="url(#clip0_208_2)">
                                <path d="M29 32H43V38.3C43 38.4857 42.9263 38.6637 42.795 38.795C42.6637 38.9263 42.4857 39 42.3 39H29.7C29.5143 39 29.3363 38.9263 29.205 38.795C29.0737 38.6637 29 38.4857 29 38.3V32ZM39.5 26.4H42.3C42.4857 26.4 42.6637 26.4737 42.795 26.605C42.9263 26.7363 43 26.9143 43 27.1V30.6H29V27.1C29 26.9143 29.0737 26.7363 29.205 26.605C29.3363 26.4737 29.5143 26.4 29.7 26.4H32.5V25H33.9V26.4H38.1V25H39.5V26.4Z" fill="white" />
                            </g>
                            <defs>
                                <filter id="filter0_d_208_2" x="0" y="0" width="72" height="72" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="10" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.34902 0 0 0 0 0.34902 0 0 0 0.3 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_208_2" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_208_2" result="shape" />
                                </filter>
                                <clipPath id="clip0_208_2">
                                    <rect width="20" height="20" fill="white" transform="translate(26 22)" />
                                </clipPath>
                            </defs>
                        </svg>


                        <!-- <input type="email" id="email" class="form__field" value="32A9XzMhxirMqMeyW7GxNJNJ4UVqiDwDm4" readonly style="
                            padding-left: 15px;
                            padding-right: 45px;
                        "> -->
                        <input type="text" class="f-18-fig-neue-400" name="daterange" id="flatpickerdate" value="">

                    </div>
                    <div style="margin-top: 40px ; margin-bottom:70px">
                        <p class="f-18-fig-neue" style="font-weight: 400;">Fiat on exchanges</p>
                        <p class="f-18-fig-neue">$ 12.345</p>
                    </div>
                    <div>
                        <h4 class="f-18-fig-neue">Loren Ipsum</h4>
                        <div class="line-chart">
                            <div class="aspect-ratio">
                                <canvas id="doughnut-chart" height="220"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body" style="overflow-x: auto;">
            <div class="d-md-flex justify-content-between">
                <h2 class="f-18-fig-neue">
                    Holdings
                </h2>
                <a class="f-16-neu-400-fig" style="color:#F4B42A;text-decoration:underline" href="">
                    View all
                </a>
            </div>

            <table id="transaction_table">
                <thead>
                    <tr>
                        <td>
                            <p class="f-20-fig-questrial text-dark">Asset</p>

                        </td>


                        <td>
                            <p class="f-20-fig-questrial text-dark">Balance</p>

                        </td>

                        <td>
                            <p class="f-20-fig-questrial text-dark">Cost (USD)</p>

                        </td>

                        <td>
                            <p class="f-20-fig-questrial text-dark">Mrket Value</p>

                        </td>

                        <td>
                            <p class="f-20-fig-questrial text-dark">ROI</p>

                        </td>

                        <td>
                            <p class="f-20-fig-questrial text-dark">24h statistics</p>
                        </td>
                    </tr>
                </thead>
                <tbody class="tbody">
                    <tr>
                        <td>
                            <div class="icon d-md-flex">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_584_396)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H24V24H0V0Z" fill="#264C92" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8323 17.5109H16.6239L15.9863 18.0312L16.2337 18.8572L15.5991 18.348L14.9643 18.8572L15.2144 18.0312L14.5715 17.5109H15.3598L15.5991 16.7058L15.8323 17.5109ZM15.8323 5.948H16.6239L15.9863 6.46859L16.2337 7.29424L15.5991 6.78511L14.9643 7.29424L15.2144 6.46859L14.5715 5.948H15.3598L15.5991 5.14288L15.8323 5.948ZM18.0807 8.39669H18.872L18.2341 8.91694L18.4818 9.7426L17.8469 9.2338L17.2127 9.7426L17.4629 8.91694L16.8197 8.39669H17.6085L17.8469 7.59158L18.0807 8.39669ZM18.0807 15.0966H18.872L18.2341 15.6168L18.4818 16.4422L17.8469 15.9337L17.2127 16.4422L17.4629 15.6168L16.8197 15.0966H17.6085L17.8469 14.2911L18.0807 15.0966ZM18.9234 11.6956H19.7144L19.0774 12.2159L19.3244 13.0415L18.6902 12.5331L18.0554 13.0415L18.3055 12.2159L17.6626 11.6956H18.4509L18.6902 10.8902L18.9234 11.6956Z" fill="#005F8D" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2535 18.3721H13.1075L12.4191 18.8908L12.6865 19.7143L12.0011 19.2067L11.3157 19.7143L11.5858 18.8908L10.8921 18.3721H11.743L12.0011 17.5694L12.2535 18.3721ZM15.5228 17.4909H16.3768L15.6891 18.0095L15.9558 18.833L15.2704 18.3254L14.5857 18.833L14.8558 18.0095L14.1614 17.4909H15.013L15.2704 16.6882L15.5228 17.4909ZM15.5228 5.96258H16.3768L15.6891 6.48125L15.9558 7.30475L15.2704 6.79749L14.5857 7.30475L14.8558 6.48125L14.1614 5.96258H15.013L15.2704 5.1599L15.5228 5.96258ZM17.9495 8.40386H18.8038L18.1158 8.92254L18.3825 9.74603L17.6978 9.23878L17.0128 9.74603L17.2825 8.92254L16.5881 8.40386H17.4397L17.6978 7.60118L17.9495 8.40386ZM17.9495 15.0832H18.8038L18.1158 15.6025L18.3825 16.4253L17.6978 15.9177L17.0128 16.4253L17.2825 15.6025L16.5881 15.0832H17.4397L17.6978 14.2805L17.9495 15.0832ZM18.8599 11.6925H19.7142L19.0255 12.2112L19.2929 13.0347L18.6075 12.5274L17.9228 13.0347L18.1929 12.2112L17.4985 11.6925H18.3501L18.6075 10.8901L18.8599 11.6925ZM8.88234 5.97097H9.73664L9.04859 6.48998L9.31533 7.31314L8.62995 6.80588L7.94557 7.31314L8.21532 6.48998L7.52092 5.97097H8.37256L8.62995 5.16863L8.88234 5.97097ZM6.52273 8.41226H7.3767L6.68899 8.93127L6.95639 9.75443L6.27101 9.24717L5.58564 9.75443L5.85571 8.93127L5.16198 8.41226H6.01295L6.27101 7.60957L6.52273 8.41226ZM5.64639 11.7012H6.50036L5.81265 12.2199L6.07939 13.0434L5.39468 12.5358L4.7093 13.0434L4.97937 12.2199L4.28564 11.7012H5.13662L5.39468 10.8989L5.64639 11.7012ZM6.52273 15.0915H7.3767L6.68899 15.6102L6.95639 16.4337L6.27101 15.9265L5.58564 16.4337L5.85571 15.6102L5.16198 15.0915H6.01295L6.27101 14.2892L6.52273 15.0915ZM8.91639 17.4993H9.77036L9.08197 18.0179L9.34938 18.8408L8.664 18.3342L7.97929 18.8408L8.24937 18.0179L7.55498 17.4993H8.40627L8.664 16.6969L8.91639 17.4993ZM12.2164 5.08839H13.0704L12.382 5.60706L12.6491 6.43056L11.964 5.92297L11.2793 6.43056L11.5494 5.60706L10.8547 5.08839H11.7063L11.964 4.28571L12.2164 5.08839Z" fill="#FFF22D" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_584_396">
                                            <rect width="24" height="24" rx="12" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                {{ theme()->getView('partials/widgets/form/input/_select',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'zip_code' ,
                                            'item' => array(
                                                'as' => 'fd'
                                            ),
                                            'placeholder' => 'EUR' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}

                            </div>
                        </td>
                        <td>
                            <p class="f-16-fig text-dark">165.000</p>

                        </td>
                        <td>
                            <p class="f-16-fig text-dark">0</p>
                            <p class="f-14-neu-400-fig" style="color: rgba(0, 0, 0, 0.6);">$0.00/unit</p>
                        </td>
                        <td>
                            <p class="f-16-fig text-dark">0</p>
                            <p class="f-14-neu-400-fig" style="color: rgba(0, 0, 0, 0.6);">$0.00/unit</p>
                        </td>

                        <td>
                            <p class="f-16-fig text-dark">0%</p>
                        </td>

                        <td>
                            <div class="line-chart">
                                <div class="aspect-ratio">
                                    <canvas id="line-chart-transaction_1" height="49"></canvas>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="icon d-md-flex">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_584_407)">
                                        <path d="M24 12C24 18.6274 18.6274 24 12 24C5.37262 24 0 18.6274 0 12C0 12.0028 12 0.00135937 12 0C18.6274 0 24 5.37262 24 12Z" fill="#224B8C" />
                                        <path d="M12.0004 0C11.9996 0 11.9988 5.46875e-05 11.998 5.46875e-05L12.0004 0Z" fill="#F0F0F0" />
                                        <path d="M11.9678 12H11.9999C11.9999 11.9891 11.9999 11.9787 11.9999 11.9679C11.9892 11.9786 11.9785 11.9893 11.9678 12Z" fill="#F0F0F0" />
                                        <path d="M12 6.26092C12 4.14944 12 2.76583 12 6.10352e-05H11.998C5.3715 0.00113916 0 5.37325 0 12H6.26086V8.47445L9.78642 12H11.9679C11.9787 11.9893 11.9894 11.9786 12 11.9679C12 11.1595 12 10.4381 12 9.78653L8.47444 6.26092H12Z" fill="#F0F0F0" />
                                        <path d="M6.071 1.56519C4.19417 2.63389 2.63389 4.19417 1.56519 6.071V12H4.69564V4.69569V4.69564H12C12 3.70831 12 2.76772 12 1.56519H6.071Z" fill="#D80027" />
                                        <path d="M12.0001 10.5243L7.73666 6.26095H6.26099C6.26099 6.2609 6.26099 6.26095 6.26099 6.26095L12 12H12.0001C12.0001 12 12.0001 10.9826 12.0001 10.5243Z" fill="#D80027" />
                                        <path d="M7.23729 14.0869L7.89588 15.464L9.38309 15.1203L8.71709 16.4938L9.91305 17.4422L8.42398 17.7779L8.42815 19.3043L7.23729 18.3493L6.04648 19.3043L6.05065 17.7779L4.56152 17.4422L5.75754 16.4938L5.09145 15.1203L6.57874 15.464L7.23729 14.0869Z" fill="#F0F0F0" />
                                        <path d="M17.9665 16.6956L18.2958 17.3842L19.0394 17.2123L18.7064 17.899L19.3044 18.3733L18.5599 18.5411L18.5619 19.3043L17.9665 18.8268L17.3711 19.3043L17.3732 18.5411L16.6287 18.3733L17.2266 17.899L16.8936 17.2123L17.6372 17.3842L17.9665 16.6956Z" fill="#F0F0F0" />
                                        <path d="M14.9031 9.3913L15.2323 10.0799L15.976 9.90795L15.643 10.5947L16.241 11.069L15.4964 11.2368L15.4985 12L14.9031 11.5225L14.3077 12L14.3097 11.2368L13.5652 11.069L14.1632 10.5947L13.8302 9.90795L14.5738 10.0799L14.9031 9.3913Z" fill="#F0F0F0" />
                                        <path d="M17.9665 5.21735L18.2958 5.90594L19.0394 5.73405L18.7064 6.42081L19.3044 6.895L18.5599 7.06286L18.5619 7.82608L17.9665 7.34857L17.3711 7.82608L17.3732 7.06286L16.6287 6.895L17.2266 6.42081L16.8936 5.73405L17.6372 5.90594L17.9665 5.21735Z" fill="#F0F0F0" />
                                        <path d="M20.6424 8.34778L20.9716 9.03637L21.7152 8.86443L21.3822 9.5512L21.9802 10.0254L21.2356 10.1933L21.2377 10.9565L20.6424 10.479L20.0469 10.9565L20.049 10.1933L19.3044 10.0254L19.9024 9.5512L19.5694 8.86443L20.313 9.03637L20.6424 8.34778Z" fill="#F0F0F0" />
                                        <path d="M18.729 12L18.988 12.7972H19.8262L19.1481 13.2899L19.4072 14.087L18.729 13.5943L18.0509 14.087L18.3099 13.2899L17.6318 12.7972H18.47L18.729 12Z" fill="#F0F0F0" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_584_407">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>


                                {{ theme()->getView('partials/widgets/form/input/_select',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'zip_code_2' ,
                                            'item' => array(
                                                'as' => 'fd'
                                            ),
                                            'placeholder' => 'EUR' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}

                            </div>
                        </td>
                        <td>
                            <p class="f-16-fig text-dark">165.000</p>

                        </td>
                        <td>
                            <p class="f-16-fig text-dark">0</p>
                            <p class="f-14-neu-400-fig" style="color: rgba(0, 0, 0, 0.6);">$0.00/unit</p>
                        </td>
                        <td>
                            <p class="f-16-fig text-dark">0</p>
                            <p class="f-14-neu-400-fig" style="color: rgba(0, 0, 0, 0.6);">$0.00/unit</p>
                        </td>

                        <td>
                            <p class="f-16-fig text-dark">0%</p>
                        </td>

                        <td>
                            <div class="line-chart">
                                <div class="aspect-ratio">
                                    <canvas id="line-chart-transaction_1" height="49"></canvas>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <div class="icon d-md-flex">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_584_400)">
                                        <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#F0F0F0" />
                                        <path d="M23.9999 12C23.9999 7.24248 21.2312 3.13173 17.2173 1.19073V22.8092C21.2312 20.8683 23.9999 16.7575 23.9999 12Z" fill="#D80027" />
                                        <path d="M0 12C0 16.7575 2.76867 20.8683 6.78263 22.8093V1.19073C2.76867 3.13173 0 7.24248 0 12Z" fill="#D80027" />
                                        <path d="M14.087 13.5652L16.174 12.5217L15.1305 12V10.9565L13.0435 12L14.087 9.91304H13.0435L12.0001 8.34784L10.9566 9.91304H9.91309L10.9566 12L8.86961 10.9565V12L7.82617 12.5217L9.91309 13.5652L9.39138 14.6087H11.4783V16.1739H12.5218V14.6087H14.6088L14.087 13.5652Z" fill="#D80027" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_584_400">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>


                                {{ theme()->getView('partials/widgets/form/input/_select',
                                    array( 
                                            'type' => 'text' ,
                                            'name' => 'zip_code_1' ,
                                            'item' => array(
                                                'as' => 'fd'
                                            ),
                                            'placeholder' => 'EUR' ,
                                            'required'=> true , 'id' => ''
                                        )
                                    )
                                }}

                            </div>
                        </td>
                        <td>
                            <p class="f-16-fig text-dark">165.000</p>

                        </td>
                        <td>
                            <p class="f-16-fig text-dark">0</p>
                            <p class="f-14-neu-400-fig" style="color: rgba(0, 0, 0, 0.6);">$0.00/unit</p>
                        </td>
                        <td>
                            <p class="f-16-fig text-dark">0</p>
                            <p class="f-14-neu-400-fig" style="color: rgba(0, 0, 0, 0.6);">$0.00/unit</p>
                        </td>

                        <td>
                            <p class="f-16-fig text-dark">0%</p>
                        </td>

                        <td>
                            <div class="line-chart">
                                <div class="aspect-ratio">
                                    <canvas id="line-chart-transaction_1" height="49"></canvas>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script> -->
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--  Flatpickr  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <style>
        .table-condensed thead tr:nth-child(2),
        .table-condensed tbody {
            display: none
        }
    </style>
    <script>
        // ============================================
        // As of Chart.js v2.5.0
        // http://www.chartjs.org/docs
        // ============================================

        var chart = document.getElementById('chart').getContext('2d'),
            gradient = chart.createLinearGradient(0, 0, 0, 450);

        gradient.addColorStop(0, 'rgba(61, 55, 241, 1)');
        gradient.addColorStop(0.6, '#fff');
        // gradient.addColorStop(1, 'rgba(61, 55, 241, 1)');


        var data = {
            labels: ['Jun 20', 'Jun 21', 'Jun 22', 'Jun 23', 'Jun 24', 'Jun 25', 'Jun 26'],
            datasets: [{
                label: 'Custom Label Name',
                backgroundColor: gradient,
                pointBackgroundColor: 'white',
                borderWidth: 1,
                borderColor: '',
                data: [50, 55, 150, 81, 54, 50]
            }]
        };


        var options = {
            responsive: true,
            maintainAspectRatio: true,
            animation: {
                easing: 'easeInOutQuad',
                duration: 520
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.05)',
                        lineWidth: 1
                    }
                }],
                yAxes: [{
                    gridLines: {
                        color: 'rgba(200, 200, 200, 0.08)',
                        lineWidth: 1
                    }
                }]
            },
            elements: {
                line: {
                    tension: 0.4
                }
            },
            legend: {
                display: false
            },

            tooltips: {
                titleFontFamily: 'Open Sans',
                backgroundColor: 'rgba(0,0,0,0.3)',
                titleFontColor: 'red',
                caretSize: 5,
                cornerRadius: 2,
                xPadding: 10,
                yPadding: 10
            }
        };


        var chartInstance = new Chart(chart, {
            type: 'line',
            data: data,
            options: options
        });


        const ctx = document.getElementById('line-chart-transaction').getContext('2d');
        const ctx_1 = document.getElementById('line-chart-transaction_1').getContext('2d');

        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green'],
                datasets: [{
                    label: '# of Votes',
                    data: [4, 6, 0, 5],
                    fill: false,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                    ],
                    borderColor: [
                        '#F4B42A',

                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }],
                },
                elements: {
                    line: {
                        tension: 0
                    },
                    point: {
                        radius: 0
                    }
                },
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.yLabel;
                        }
                    }
                }
            }
        });
        const myChart_1 = new Chart(ctx_1, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green'],
                datasets: [{
                    label: '# of Votes',
                    data: [4, 6, 0, 5],
                    fill: false,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                    ],
                    borderColor: [
                        '#F4B42A',

                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }],
                },
                elements: {

                    point: {
                        radius: 0
                    }
                },
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.yLabel;
                        }
                    }
                }
            }
        });

        const donet_chart = document.getElementById('doughnut-chart').getContext('2d');
        const donet_chart_chart = new Chart(donet_chart, {
            type: 'doughnut',
            data: {
                labels: ['AUD', 'EUR', 'Other'],
                datasets: [{
                    label: '# of Votes',
                    data: [4, 6, 5],
                    fill: false,
                    backgroundColor: [
                        '#9181DB',
                        '#63ABFD',
                        '#F4B42A'
                    ],
                    borderColor: [

                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    xAxes: [{
                        display: false
                    }],
                    yAxes: [{
                        display: false
                    }],
                },

                maintainAspectRatio: false,

                cutout: '20%',
                radius: '40%'
            }
        });



        $("input[name='daterange']").flatpickr({
            mode: "range",
            // minDate: "today",
            dateFormat: "M y",

        });
    </script>

</x-base-layout>
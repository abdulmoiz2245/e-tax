<x-base-layout>
    <style>
        /*.gallery*/
        .gallery {
            width: 100%;
            display: block;
            min-height: 100vh;
            /* padding: 100px 0; */
        }

        body {
            background-color: #F8F9FD !important;
        }

        .gallery .gallery-filter {
            padding: 0 15px;
            width: 100%;
            text-align: left;
            margin-bottom: 40px;
        }

        .gallery .gallery-filter .filter-item {
            color: #6F6F6F;
            font-size: 17px;
            border: 2px solid white;
            text-transform: uppercase;
            display: inline-block;
            border-radius: 20px;
            margin-right: 8px;
            cursor: pointer;
            padding: 8px 20px 8px 20px;
            line-height: 1.2;
            transition: all 0.3s ease;
            border: 0.2px solid #6F6F6F;
        }

        .gallery .gallery-filter .filter-item.active {
            color: #2B014C;
            background: rgba(43, 1, 76, 0.1);
            border-radius: 30px;
            border: none;
        }

        .gallery .gallery-item {
            width: calc(100% / 6);
            padding: 6px;

        }

        .gallery .gallery-item-inner img {
            width: 32px;
            height: 32px;
            /* border: 3px solid #d4dad9; */
        }

        .gallery .gallery-item.show {
            animation: fadeIn 0.5s ease;
        }

        .card-body {
            box-shadow: 2px 2px 10px rgba(210, 209, 223, 0.3);
            border-radius: 8px;
            padding-top: 14px !important;
            padding-bottom: 14px !important;
            padding-left: 17px !important;
            padding-right: 14px !important;


        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .gallery .gallery-item.hide {
            display: none;
        }

        body {
            background-color: #F8F9FD;
        }

        /*responsive*/
        @media(max-width: 491px) {
            .gallery .gallery-item {
                width: 50%;
            }
        }

        @media(max-width: 467px) {
            .gallery .gallery-item {
                width: 100%;
            }

            .gallery .gallery-filter .filter-item {
                margin-bottom: 10px;
            }
        }
    </style>
    <div class="row gy-5 g-xl-4 mb-5" style="margin-top: 50px; ">



        <div class="col-md-12">
            <span><a href="{{ route('crypto.wallet') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></span>
            <span class="pr-2" style="color:#6F6F6F;padding-left: 7px;">Back To Wallets</span>
        </div>


        <div class="col-md-12" style="margin-bottom: 26px;">
            <h1 class="dash-title" style="margin-bottom: 18px; font-size:30px !important">Add Your Wallets</h1>
        </div>

        @if (\Session::has('message'))
        <div class="alert alert-info">
            <ul>
                <li>{{ \Session::get('message') }}</li>
            </ul>
        </div>
        @endif

    </div>

    <div>
        <section class="gallery">
            <div class="container">
                <div class="row">
                    <div class="gallery-filter">
                        <div class="form__group" style="
                            position: relative;
                            padding-top:0px;
                            max-width: 200px;
                            margin-right:12px;
                            margin-bottom:12px;
                            width:fit-content
                            ">


                            <svg style="position: absolute;top: 12px;left: 12px;" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_343_148)">
                                    <path d="M15.0258 13.8475L19.5125 18.3333L18.3333 19.5125L13.8475 15.0258C12.5197 16.0901 10.8683 16.669 9.16663 16.6666C5.02663 16.6666 1.66663 13.3066 1.66663 9.16663C1.66663 5.02663 5.02663 1.66663 9.16663 1.66663C13.3066 1.66663 16.6666 5.02663 16.6666 9.16663C16.669 10.8683 16.0901 12.5197 15.0258 13.8475ZM13.3541 13.2291C14.4117 12.1415 15.0023 10.6837 15 9.16663C15 5.94329 12.3891 3.33329 9.16663 3.33329C5.94329 3.33329 3.33329 5.94329 3.33329 9.16663C3.33329 12.3891 5.94329 15 9.16663 15C10.6837 15.0023 12.1415 14.4117 13.2291 13.3541L13.3541 13.2291Z" fill="#6F6F6F" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_343_148">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>



                            <input type="text" placeholder="Find Exchanges or Wallets" class="form__field" value="" style="
                                padding-left: 45px;
                                padding-right: 15px;
                                border: 0px;
                                background: #fff;
                                box-shadow: 2px 2px 10px rgba(210, 209, 223, 0.3);
                            ">
                        </div>
                        <span class="filter-item active f-16-fig" data-filter="all">all</span>
                        <span class="filter-item f-16-fig" data-filter="watch">Exchanges</span>
                        <span class="filter-item f-16-fig" data-filter="headphone">Blokchains</span>
                        <span class="filter-item f-16-fig" data-filter="camera">Wallets</span>
                        <span class="filter-item f-16-fig" data-filter="phone">Services</span>
                    </div>
                </div>
                <form action="{{route('crypto.add-wallet.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="gallery-item shoe">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="wallet_name" id="" checked value="coinbase">

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/coinbase.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">Coinbase</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gallery-item headphone">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-md-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/kucoin.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">KuCoin</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gallery-item camera">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/coinspot.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">CoinSpot</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" gallery-item headphone">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/coinjar.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">CoinJar</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery item end -->
                        <!-- gallery item start -->
                        <div class="gallery-item camera">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/shakepay.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">ShakePay</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery item end -->
                        <div class="gallery-item phone">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/bybit.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">ByBit</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gallery-item camera">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/bybit.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">Coinbase Pro</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gallery-item watch">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/crypto.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">Crypto.com</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- gallery item start -->
                        <div class="gallery-item watch">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/swyftx.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">Swyftx</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery item end -->

                        <!-- gallery item start -->
                        <div class="gallery-item watch">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/bitbuy.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">Bitbuy</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery item end -->

                        <!-- gallery item start -->
                        <div class="gallery-item watch">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/bittrex.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">Bittrex</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery item end -->

                        <!-- gallery item start -->
                        <div class="gallery-item watch">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/cryptoapp.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">Crypto.com App</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery item end -->

                        <!-- gallery item start -->
                        <div class="gallery-item watch">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/binance.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">Binance</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery item end -->

                        <!-- gallery item start -->
                        <div class="gallery-item watch">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/kraken.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">Kraken</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery item end -->

                        <!-- gallery item start -->
                        <div class="gallery-item watch">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/cointree.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">Cointree</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery item end -->

                        <!-- gallery item start -->
                        <div class="gallery-item watch">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/coinsquare.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">Coinsquare</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery item end -->

                        <!-- gallery item start -->
                        <div class="gallery-item watch">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/gemini.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">Gemini</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- gallery item end -->

                        <div class="gallery-item watch">
                            <div class="gallery-item-inner">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <input type="checkbox" name="" id="" disabled>

                                            </div>
                                            <div class="w-100 text-center">
                                                <img src="{{ asset(theme()->getMediaUrlPath() . 'img/bitfinex.png') }}" width="48" height="48" alt="">

                                            </div>
                                            <div>
                                                <p class="f-16-fig">Bitfinex</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="form__group mt-7" style="position: relative;">
                        <svg style="position: absolute;top: 24px;right: 12px;" class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.438 5.09831V7.30962H8.78555C7.97173 7.30962 7.30962 7.97173 7.30962 8.78554V16.438H5.09831C4.49272 16.438 4 15.9452 4 15.3394V5.09831C4 4.49272 4.49275 4 5.09831 4H15.3395C15.9453 4 16.438 4.49275 16.438 5.09831Z" fill="#6F6F6F" />
                            <path d="M19.9997 9.03808V19.2792C19.9997 19.6774 19.6769 20.0002 19.2787 20.0002H9.03759C8.63939 20.0002 8.31641 19.6774 8.31641 19.2792V9.03808C8.31641 8.63988 8.63938 8.31689 9.03759 8.31689H19.2787C19.6769 8.31689 19.9997 8.63987 19.9997 9.03808Z" fill="#6F6F6F" />
                        </svg>

                        <label for="client_id">Client ID</label>
                        <input type="text" id="client_id" name="client_id" class="form__field" style="
                            padding-left: 15px;
                            padding-right: 45px;
                        ">
                    </div> -->

                    <div class="row" style="margin-top: 40px;">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn p-2 confirmBtn" style="background: #F4B42A;  border-radius: 10px;color:#fff;padding-left:60px !important;padding-right:60px !important;padding-top:13px !important;padding-bottom:11px !important">
                                <span class="f-16-neu-fig" style="color:#fff;">Confirm</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script>
        const filterContainer = document.querySelector(".gallery-filter"),
            galleryItems = document.querySelectorAll(".gallery-item");

        filterContainer.addEventListener("click", (event) => {
            if (event.target.classList.contains("filter-item")) {
                // deactivate existing active 'filter-item'
                filterContainer.querySelector(".active").classList.remove("active");
                // activate new 'filter-item'
                event.target.classList.add("active");
                const filterValue = event.target.getAttribute("data-filter");
                galleryItems.forEach((item) => {
                    if (item.classList.contains(filterValue) || filterValue === 'all') {
                        item.classList.remove("hide");
                        item.classList.add("show");
                    } else {
                        item.classList.remove("show");
                        item.classList.add("hide");
                    }
                });
            }
        });

        let confirmBtn = document.getElementById('confirmBtn');
        header()
    </script>
</x-base-layout>
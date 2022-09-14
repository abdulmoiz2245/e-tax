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
            padding: 15px;

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
                        <span class="filter-item active f-18-fig-questrial" data-filter="all">all</span>
                        <span class="filter-item f-18-fig-questrial" data-filter="watch">Exchanges</span>
                        <span class="filter-item f-18-fig-questrial" data-filter="headphone">Blokchains</span>
                        <span class="filter-item f-18-fig-questrial" data-filter="camera">Wallets</span>
                        <span class="filter-item f-18-fig-questrial" data-filter="phone">Services</span>
                    </div>
                </div>
                <div class="row">
                    <div class="gallery-item shoe">
                        <div class="gallery-item-inner">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div>
                                            <input type="checkbox" name="" id="">

                                        </div>
                                        <div class="w-100 text-center">
                                            <img src="{{ asset(theme()->getMediaUrlPath() . 'img/binance.png') }}" width="48" height="48" alt="">

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
                                            <input type="checkbox" name="" id="">

                                        </div>
                                        <div class="w-100 text-center">
                                            <img src="{{ asset(theme()->getMediaUrlPath() . 'img/binance.png') }}" width="48" height="48" alt="">

                                        </div>
                                        <div>
                                            <p class="f-16-fig">Coinbase</p>

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
                                            <input type="checkbox" name="" id="">

                                        </div>
                                        <div class="w-100 text-center">
                                            <img src="{{ asset(theme()->getMediaUrlPath() . 'img/binance.png') }}" width="48" height="48" alt="">

                                        </div>
                                        <div>
                                            <p class="f-16-fig">Coinbase</p>

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
                                            <input type="checkbox" name="" id="">

                                        </div>
                                        <div class="w-100 text-center">
                                            <img src="{{ asset(theme()->getMediaUrlPath() . 'img/binance.png') }}" width="48" height="48" alt="">

                                        </div>
                                        <div>
                                            <p class="f-16-fig">Coinbase</p>

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
                                            <input type="checkbox" name="" id="">

                                        </div>
                                        <div class="w-100 text-center">
                                            <img src="{{ asset(theme()->getMediaUrlPath() . 'img/binance.png') }}" width="48" height="48" alt="">

                                        </div>
                                        <div>
                                            <p class="f-16-fig">Coinbase</p>

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
                                            <input type="checkbox" name="" id="">

                                        </div>
                                        <div class="w-100 text-center">
                                            <img src="{{ asset(theme()->getMediaUrlPath() . 'img/binance.png') }}" width="48" height="48" alt="">

                                        </div>
                                        <div>
                                            <p class="f-16-fig">Coinbase</p>

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
                                            <input type="checkbox" name="" id="">

                                        </div>
                                        <div class="w-100 text-center">
                                            <img src="{{ asset(theme()->getMediaUrlPath() . 'img/binance.png') }}" width="48" height="48" alt="">

                                        </div>
                                        <div>
                                            <p class="f-16-fig">Coinbase</p>

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
                                            <input type="checkbox" name="" id="">

                                        </div>
                                        <div class="w-100 text-center">
                                            <img src="{{ asset(theme()->getMediaUrlPath() . 'img/binance.png') }}" width="48" height="48" alt="">

                                        </div>
                                        <div>
                                            <p class="f-16-fig">Coinbase</p>

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
                                            <input type="checkbox" name="" id="">

                                        </div>
                                        <div class="w-100 text-center">
                                            <img src="{{ asset(theme()->getMediaUrlPath() . 'img/binance.png') }}" width="48" height="48" alt="">

                                        </div>
                                        <div>
                                            <p class="f-16-fig">Coinbase</p>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery item end -->
                </div>

                <div class="row" style="margin-top: 40px;">
                    <div class="col-12 text-center">
                        <a href="{{ route('crypto.add_wallet') }}">
                            <button class="btn p-2" style="background: #F4B42A;  border-radius: 10px;color:#fff;padding-left:60px !important;padding-right:60px !important;padding-top:13px !important;padding-bottom:11px !important">
                                <span class="f-16-neu-fig" style="color:#fff;">Confirm</span>
                            </button>
                        </a>
                    </div>
                </div>
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
    </script>
</x-base-layout>
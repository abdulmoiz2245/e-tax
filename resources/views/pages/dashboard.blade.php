<x-base-layout>
    <style>
        .col-md-4 {
            margin-bottom: 16px;
        }

        @media (min-width: 1200px) {
            .container {
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
    <div class="row gy-5 g-md-4 ">
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
                    <h3 class="card-title align-items-start d-flex">
                        <span class="card-label  mb-1 align-self-center card-title-text" style="color: black !important;">Form in Progress</span>
                    </h3>
                    <p class="card-title-p">
                        Get started with a single form in our guided experience.
                    </p>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body d-flex flex-column pt-2 pb-5 justify-content-end">

                    <!--begin::Items-->
                    <div class="mt-5 text-center">
                        <form name="myForm">
                            <div class="select-box">
                                <div class="select-box__current" tabindex="1">
                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="0" value="default" name="filling_form" checked="checked" />
                                        <p class="select-box__input-text">Select Form</p>
                                    </div>
                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="1" value="2021-form-1099-mics" name="filling_form" />
                                        <p class="select-box__input-text"> 2021 Form 1099-MISC</p>
                                    </div>
                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="2" value="2021-form-1099-nec" name="filling_form" />
                                        <p class="select-box__input-text">2021 Form 1099-NEC</p>
                                    </div>
                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="3" value="2021-form-w-2" name="filling_form" />
                                        <p class="select-box__input-text">2021 Form W-2</p>
                                    </div>

                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="4" value="2021-form-1099-b" name="filling_form" />
                                        <p class="select-box__input-text">2021 Form 1099-B</p>
                                    </div>

                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="5" value="2021-form-1099-c" name="filling_form" />
                                        <p class="select-box__input-text">2021 Form 1099-C</p>
                                    </div>

                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="6" value="2021-form-1099-int" name="filling_form" />
                                        <p class="select-box__input-text">2021 Form 1099-INT</p>
                                    </div>

                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="7" value="2021-form-1099-r" name="filling_form" />
                                        <p class="select-box__input-text">2021 Form 1099-R</p>
                                    </div>
                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="8" value="2021-form-1099-div" name="filling_form" />
                                        <p class="select-box__input-text">2021 Form 1099-DIV</p>
                                    </div>

                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="9" value="2021-form-1099-s" name="filling_form" />
                                        <p class="select-box__input-text">2021 Form 1099-S</p>
                                    </div>

                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="10" value="2021-form-1042-s" name="filling_form" />
                                        <p class="select-box__input-text">2021 Form 1042-S</p>
                                    </div>

                                    <div class="select-box__value">
                                        <input class="select-box__input" type="radio" id="11" value="2021-form-1094-C" name="filling_form" />
                                        <p class="select-box__input-text">2021 Form 1094 C</p>
                                    </div>

                                    <img class="select-box__icon" src="http://cdn.onlinewebfonts.com/svg/img_295694.svg" alt="Arrow Icon" aria-hidden="true" />
                                </div>
                                <ul class="select-box__list">
                                    <li>
                                        <label class="select-box__option" for="0" aria-hidden="aria-hidden">Select Form</label>
                                    </li>
                                    <li>
                                        <label class="select-box__option" for="1" aria-hidden="aria-hidden">2021 Form 1099-MISC</label>
                                    </li>
                                    <li>
                                        <label class="select-box__option" for="2" aria-hidden="aria-hidden">2021 Form 1099-NEC</label>
                                    </li>
                                    <li>
                                        <label class="select-box__option" for="3" aria-hidden="aria-hidden">2021 Form W-2</label>
                                    </li>
                                    <li>
                                        <label class="select-box__option" for="4" aria-hidden="aria-hidden">2021 Form 1099-B</label>
                                    </li>

                                    <li>
                                        <label class="select-box__option" for="5" aria-hidden="aria-hidden">2021 Form 1099-C</label>
                                    </li>

                                    <li>
                                        <label class="select-box__option" for="6" aria-hidden="aria-hidden">2021 Form 1099-INT</label>
                                    </li>
                                    <li>
                                        <label class="select-box__option" for="7" aria-hidden="aria-hidden">2021 Form 1099-R</label>
                                    </li>
                                    <li>
                                        <label class="select-box__option" for="8" aria-hidden="aria-hidden">2021 Form 1099-DIV</label>
                                    </li>

                                    <li>
                                        <label class="select-box__option" for="9" aria-hidden="aria-hidden">2021 Form 1099-S</label>
                                    </li>

                                    <li>
                                        <label class="select-box__option" for="10" aria-hidden="aria-hidden">2021 Form 1042-S</label>
                                    </li>

                                    <li>
                                        <label class="select-box__option" for="11" aria-hidden="aria-hidden">2021 Form 1094-C</label>
                                    </li>


                                </ul>
                            </div>

                        </form>

                        <button disabled class="btn w-100  mt-3" href="#" id="form-btn-show" style="background: rgba(111, 111, 111, 0.5); color: #000000;">Show Form</button>
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
                    <h3 class="card-title align-items-start d-flex">
                        <span class="card-label  mb-1 align-self-center card-title-text" style="color: black !important;">Import My Forms </span>
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

                        <a href="/form-import" class=" w-100">
                            <button class="btn w-100  mt-3" style="background: #F4B42A;  color:#fff">View Import Options</button>
                        </a>
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
                    <h3 class="card-title align-items-start d-flex">
                        <span class="card-label  mb-1 align-self-center card-title-text" style="color: black !important;">Connect to Software</span>
                    </h3>
                    <p class="card-title-p">
                        Using your accounting software..
                    </p>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body d-flex flex-column pt-2 pb-5 justify-content-end">

                    <!--begin::Items-->
                    <div class="mt-5 text-center">


                        <a href="/form-import" class=" w-100">
                            <button class="btn w-100  mt-3" style="background: #F4B42A;  color:#fff">Select Your Software</button>
                        </a>
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

    <script>
        var rad = document.myForm.filling_form;
        var prev = null;
        for (var i = 0; i < rad.length; i++) {
            rad[i].addEventListener('change', function() {
                (prev) ? console.log(prev.value): null;
                if (this !== prev) {
                    prev = this;
                }
                // document.getElementById('form-btn-show').href='http://'+window.location.hostname+'/fillings/start-filling/form/'+this.value; 
                // window.location.replace('http://'+window.location.hostname+'/fillings/start-filling/form/2021-form-1099-b');
                // window.location.href = '/'+ ;
                // console.log(this.value)
                if (this.value == 'default') {
                    var link = document.getElementById("form-btn-show");
                    link.setAttribute("href", '#');
                    link.setAttribute('disabled', 'True');
                    link.style.background = 'rgba(111, 111, 111, 0.5)';
                    link.style.color = '#000000';


                } else {
                    var link = document.getElementById("form-btn-show");
                    link.setAttribute("href", 'http://' + window.location.hostname + '/fillings/start-filling/form/' + this.value);
                    link.removeAttribute('disabled');
                    link.style.background = '#F4B42A';
                    link.style.color = '#fff';
                }






            });

            function showForm() {
                var link = document.getElementById("form-btn-show");
                if (link.getAttribute('href') != '#')
                    window.location.replace(link.getAttribute('href'));

            }
            document.getElementById("form-btn-show").addEventListener("click", showForm);
        }
    </script>

</x-base-layout>
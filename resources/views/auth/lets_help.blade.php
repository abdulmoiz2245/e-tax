<x-auth-layout>
    <style>
        .logo-title {
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 36px;
            color: #2B014C;
        }

        .logo-description {
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            color: #6F6F6F;
        }

        .input {
            border-radius: 6px;
            margin: 20px 0px;

        }


        .form__group {
            position: relative;
            padding: 15px 0 0;
            margin-top: 10px;
        }

        .form__field {
            font-family: inherit;

            width: 100%;
            border: 1px solid #BFBFBF;
            padding-top: 3px;
            padding-bottom: 3px;
            outline: 0;
            font-size: 14px;
            font-weight: 300;
            color: #000;
            height: 44px;
            border-radius: 8px;
            padding-left: 20px;
            background: transparent;
            transition: border-color 0.2s;
        }

        .form__field::placeholder {
            color: transparent;

        }

        .form__field:placeholder-shown~.form__label {
            font-size: 14px;
            cursor: text;
            font-weight: 300;
            top: 25px;
            background: transparent;
        }

        label,
        .form__field:focus~.form__label {
            position: absolute;
            top: 6px;
            left: 12px;
            background: #fff;
            display: block;
            transition: 0.2s;
            font-size: 14px;
            font-weight: 300;
            color: #BFBFBF;
            padding: 0px 6px;

        }

        .form__field:focus~.form__label {
            color: #6F6F6F;

        }

        .form__field:focus {
            padding-bottom: 6px;
            border-bottom: 1px solid #BFBFBF;
        }
    </style>
    <!--begin::Signin Form-->
    <div class="row container mx-auto">
        <div class="col-md-6 d-flex justify-content-center align-items-center" style="
            margin-bottom: 70px;
        ">

            <img alt="Logo" src="{{ asset(theme()->getMediaUrlPath() . 'logos/e-bottom-purple.png') }}" class="logo" style="
                    width: 89px;
                " />
            <div style="padding-left: 15px;width:400px">
                <h3 class="logo-title">Join E-Filing Taxes Pro</h3>
                <p class="logo-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>

        </div>
        <div class="col-md-6">
            <form method="POST" action="{{ theme()->getPageUrl('login') }}" class="form w-100" novalidate="novalidate" id="kt_sign_in_form">
                @csrf

                <!--begin::Heading-->
                <div class="text-left mb-10">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3 " style="font-weight: 700;
                        font-size: 30px;
                        ">
                        Login
                    </h1>
                    <!--end::Title-->

                    <!--begin::Link-->
                    <div class="" style="color: #6F6F6F; font-size:16px">
                        Log In your account now.

                    </div>
                    <!--end::Link-->
                </div>
                <!--begin::Heading-->

                <div class="bg-white " style="padding:30px;box-shadow: 2px 2px 10px rgba(210, 209, 223, 0.3);
                    border-radius: 10px;">

                    <div class="text-center">
                        <!--begin::Submit button-->
                        <a href="/dashboard" style="color:#fff">
                            <button type="button" class="btn btn-lg  w-100 mb-5" style="background:#F4B42A; color:#fff">
                            E-Filing Tax Forms
                            </button>
                        </a>
                        

                        <button type="button" id="" class="btn btn-lg  w-100 mb-5" style="background:#F4B42A; color:#fff">
                           <a href="" style="color:#fff">Crypto Tax Calculator</a>  
                        </button>


                    </div>
                    <!--end::Actions-->
                </div>
            </form>
        </div>


    </div>

    <!--end::Signin Form-->



</x-auth-layout>
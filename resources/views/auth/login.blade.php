<x-auth-layout>
    <style>
        .logo-title{
            font-style: normal;
            font-weight: 700;
            font-size: 20px;
            line-height: 36px;
            color: #2B014C;
        }

        .logo-description{
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            color: #6F6F6F;
        }

        .form__field:placeholder-shown ~ .form__label{
            z-index: 1;
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
                <div style="padding-left: 15px;width:400px" >
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
                     
                        <div class="fv-row mb-10">

                            <div class="form__group">
                                <input type="email" id="email" name="email" class="form__field" value="{{ old('email') }}" placeholder="Email"  autocomplete="off" required autofocus >
                                <label for="email" class="form__label"> Email</label>
                            </div>
                        </div>
                          

                        <div class="fv-row mb-10">
                        
                                <div class="form__group">
                                    <input type="password" name="password" id="password" class="form__field"   placeholder="Password"  required >
                                    <label for="password" class="form__label">Password</label>
                                </div>
                                <div style="text-align: end;margin-top: 4px;">
                                    <a href="/forgot-password" class="f-16-neu-400-fig" style="color:#2B014C; font-size:14px !important;">
                                        Forgot password?
                                    </a>
                                </div>
                              
                        </div>
                     
                        <div class="text-center">
                            <!--begin::Submit button-->
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg  w-100 mb-5" style="background:#F4B42A; color:#fff">
                                @include('partials.general._button-indicator', ['label' => __('Continue')])
                            </button>
                            <div style="text-align: left;">
                                <p >Don???t have an account yet? <a href="/register" style="color:#F4B42A">Sign Up</a> </p>

                            </div>
                            
                         
                        </div>
                        <!--end::Actions-->
                    </div>

                    <div class="text-left mb-10 mt-5">
                        <div class="" style="color: #6F6F6F; font-size:14px">
                                By Signing up you agree to our <a href="#" style="color:#2B014C">Terms and Conditions</a> 
                        </div>
                    </div>

                    
            </form>
        </div>

        
    </div>
    
    <!--end::Signin Form-->

   

</x-auth-layout>

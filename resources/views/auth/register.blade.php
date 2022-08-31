

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

        .input{
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
        
        .form__field:placeholder-shown ~ .form__label {
            font-size: 14px ;
            cursor: text ;
            font-weight: 300;
            top: 25px ;
            background: transparent;
        }
        
        label,
        .form__field:focus ~ .form__label {
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
        
        .form__field:focus ~ .form__label {
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
            margin-bottom: 70px;">
            
                <img alt="Logo" src="{{ asset(theme()->getMediaUrlPath() . 'logos/e-bottom-purple.png') }}" class="logo" style="
                    width: 89px;
                " />
                <div style="padding-left: 15px;width:400px" >
                    <h3 class="logo-title">Join E-Filing Taxes Pro</h3>
                    <p class="logo-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>

        </div>
        <div class="col-md-6">
         
            <form method="POST" action="{{ theme()->getPageUrl('register') }}" class="form w-100" novalidate="novalidate" id="kt_sign_up_form">
            @csrf

            <!--begin::Heading-->
                <div class="text-left mb-10">
                    <!--begin::Title-->
                    <h1 class="text-dark mb-3 " style="font-weight: 700;
                    font-size: 30px;
                    ">
                        Sign Up
                    </h1>
                    <!--end::Title-->

                    <!--begin::Link-->
                    <div class="" style="color: #6F6F6F; font-size:16px">
                        Creat your free account now.
                    
                    </div>
                    <!--end::Link-->
                </div>
                <!--end::Heading-->

               
                <div class="bg-white " style="padding:30px;box-shadow: 2px 2px 10px rgba(210, 209, 223, 0.3);
                    border-radius: 10px;">
                   
                    <div class="fv-row mb-10">
                        <div class="form__group">
                            <input type="text" id="username" name="username" class="form__field" value="{{ old('username') }}" placeholder="Username"  autocomplete="off" required autofocus >
                            <label for="username" class="form__label"> Username</label>
                        </div>
                    </div>
                    <div class="fv-row mb-10">

                        <div class="form__group">
                            <input type="text" id="email" name="email" class="form__field"  value="{{ old('email') }}" placeholder="Email"  autocomplete="off" required autofocus >
                            <label for="email" class="form__label"> Email</label>
                        </div>
                    </div>
           
                    <div class="fv-row mb-10">
                        <div class="form__group">
                            <input type="password" name="password" id="password" class="form__field" value="{{ old('password') }}"  placeholder="Password"  required >
                            <label for="password" class="form__label">Password</label>
                        </div>
                    </div>
                   
                    <div class="text-center">
                        <!--begin::Submit button-->
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-lg  w-100 mb-5" style="background:#F4B42A; color:#fff">
                          Sign Up
                        </button>
                        <div style="text-align: left;">
                            <p >Already have an account?  <a href="/login" style="color:#F4B42A">Log In</a> </p>

                        </div>
                        
                      
                    </div>
                    <!--end::Actions-->
                </div>

                <div class="text-left mb-10 mt-5">
                

                    <!--begin::Link-->
                    <div class="" style="color: #6F6F6F; font-size:14px">
                            By Signing up you agree to our <a href="#" style="color:#2B014C">Terms and Conditions</a> 
                    </div>
                    <!--end::Link-->
                </div>

            </form>
    <!--end::Signup Form-->
        </div>
    </div>
    
    <!--end::Signin Form-->

   

</x-auth-layout>

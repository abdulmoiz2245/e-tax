<x-base-layout>
    <style>
        .formsecurity {
            position: relative;
            bottom: 50px;
            left: 220px;
            width: 60%;
        }


        .active a {
            background: transparent !important;


        }

        .nav-tabs .active {
            border-bottom: 2px solid #2B014C;
        }

        .ab {
            color: #2B014C;
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 22px;
        }

        .heading1 {
            display: flex;
            margin-left: 390px;
        }

        .ab {
            font-family: 'Neue Haas Grotesk Text Pro', sans-serif !important;
            font-style: normal !important;
            font-weight: 400 !important;
            font-size: 18px !important;
            float: left;
            color: black;
            text-align: center;
            padding: 15px;
            text-decoration: none;
            line-height: 25px;
            border-radius: 4px;
        }

        .buttonhandling {
            padding-left: 100px;
            padding-right: 100px;
        }

        .card-title-text {
            font-size: 18px !important;
        }

        /* Full-width input fields */

        /* Set a style for all buttons */
        button {
            background-color: #F4B42A;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            /* margin-left: 350px; */
            /* margin-top: 10px; */
        }



        a:hover {
            color: #2B014C;
        }

        .card-body {
            padding-bottom: 30px;
        }

        .tab-content {
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }

        .crypto form {
            background: #FFFFFF;
            /* drop */

            box-shadow: 2px 2px 10px rgba(210, 209, 223, 0.3);
            border-radius: 10px;
        }


        button {
            border-radius: 10px;
        }

        
    </style>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha512-Cy3gSrKCS8aJ7AIaammc0wLXyKRmTa8ntgHvU01Tuz4EdsqVgk/lKzFm/b/8RxOWBaoHI2uGLLU6rXMbqKcGHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-md-12">
            <h1 class="dash-title" style="font-size: 30px !important;">My Account </h1>
        </div>
    </div>
    @if(session('status') && session('status') == 'success')
    <div class="alert alert-success" role="alert">
        {{ session('data') }}
    </div>
    @elseif(session('status') && session('status') == 'error')
    <div class="alert alert-danger" role="alert">
        {{ session('data') }}
    </div>
    @endif


    <div id="exTab2" class="containersecond crypto">
        <ul class="nav nav-tabs">
            <li class="active1 active">
                <a href="#1" class="ab" data-toggle="tab">Edit Account</a>
            </li>
            <li class=""><a href="#2" class="ab" data-toggle="tab">Change Password</a>
            </li>
            <li class=""><a href="#3" class="ab" data-toggle="tab">Change Email</a>
            </li>
            <li class=""><a href="#4" class="ab" data-toggle="tab">Delete account</a>
            </li>
        </ul>
        <form action="" method="post">
            @csrf
            <div class="tab-content " style="
                    margin-top: 32px;
                ">

                <div class="tab-pane active" id="1">
                    <div class="card">
                        <div class="card-body">



                            <div class="form__group" style="
                                position: relative;
                                ">
                                <svg style="position: absolute;top: 24px;right: 12px;" class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_348_62)">
                                        <path d="M12.9 6.85799L17.142 11.101L7.242 21H3V16.757L12.9 6.85699V6.85799ZM14.314 5.44399L16.435 3.32199C16.6225 3.13452 16.8768 3.02921 17.142 3.02921C17.4072 3.02921 17.6615 3.13452 17.849 3.32199L20.678 6.15099C20.8655 6.33852 20.9708 6.59283 20.9708 6.85799C20.9708 7.12316 20.8655 7.37746 20.678 7.56499L18.556 9.68599L14.314 5.44399Z" fill="#6F6F6F" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_348_62">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>


                                <!-- <input type="email" id="email" class="form__field" value="32A9XzMhxirMqMeyW7GxNJNJ4UVqiDwDm4" readonly style="
                                        padding-left: 15px;
                                        padding-right: 45px;
                                    "> -->
                                <input type="text" id="name" value="" name="name" class="form__field" placeholder="Name" style="
                                        padding-left: 15px;
                                        padding-right: 45px;
                                    ">
                                <label for="name" class="form__label">Name</label>
                            </div>


                            <div class="form__group" style="
                                position: relative;
                                ">

                                <svg style="position: absolute;top: 24px;right: 12px;" class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_348_62)">
                                        <path d="M12.9 6.85799L17.142 11.101L7.242 21H3V16.757L12.9 6.85699V6.85799ZM14.314 5.44399L16.435 3.32199C16.6225 3.13452 16.8768 3.02921 17.142 3.02921C17.4072 3.02921 17.6615 3.13452 17.849 3.32199L20.678 6.15099C20.8655 6.33852 20.9708 6.59283 20.9708 6.85799C20.9708 7.12316 20.8655 7.37746 20.678 7.56499L18.556 9.68599L14.314 5.44399Z" fill="#6F6F6F" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_348_62">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <!-- <input type="email" id="email" class="form__field" value="32A9XzMhxirMqMeyW7GxNJNJ4UVqiDwDm4" readonly style="
                                        padding-left: 15px;
                                        padding-right: 45px;
                                    "> -->
                                <input type="text" id="first_name" value="" name="surname" class="form__field" placeholder="Surname" style="
                                        padding-left: 15px;
                                        padding-right: 45px;
                                    ">
                                <label for="surname" class="form__label">Surname</label>
                            </div>

                            <div class="form__group">
                                <button type="submit">Save</button>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="2">
                    <div class="card">
                        <div class="card-body">

                            <div class="form__group">
                                <input type="password" id="current_password" name="current_password" class="form__field" placeholder="Current Password">
                                <label for="current_password" class="form__label">Current Password</label>
                            </div>

                            <div class="form__group">
                                <input type="password" id="new_password" name="new_password" class="form__field" placeholder="New Password">
                                <label for="new_password" class="form__label">New Password</label>
                            </div>

                            <div class="form__group">
                                <input type="password" id="confirm_password" name="confirm_password" class="form__field" placeholder="Confirm Password">
                                <label for="confirm_password" class="form__label">Confirm Password</label>
                            </div>


                            <div class="form__group">
                                <button type="submit">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="3">
                    <div class="card">
                        <div class="card-body">
                            <div class="form__group" style="
                                position: relative;
                                ">

                                <svg style="position: absolute;top: 24px;right: 12px;" class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_348_62)">
                                        <path d="M12.9 6.85799L17.142 11.101L7.242 21H3V16.757L12.9 6.85699V6.85799ZM14.314 5.44399L16.435 3.32199C16.6225 3.13452 16.8768 3.02921 17.142 3.02921C17.4072 3.02921 17.6615 3.13452 17.849 3.32199L20.678 6.15099C20.8655 6.33852 20.9708 6.59283 20.9708 6.85799C20.9708 7.12316 20.8655 7.37746 20.678 7.56499L18.556 9.68599L14.314 5.44399Z" fill="#6F6F6F" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_348_62">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <!-- <input type="email" id="email" class="form__field" value="32A9XzMhxirMqMeyW7GxNJNJ4UVqiDwDm4" readonly style="
                                        padding-left: 15px;
                                        padding-right: 45px;
                                    "> -->
                                <input type="text" id="email_address" value="" name="email_address" class="form__field" placeholder="Email Address" style="
                                        padding-left: 15px;
                                        padding-right: 45px;
                                    ">
                                <label for="email_address" class="form__label">Email Address</label>
                            </div>

                            <div class="form__group">
                                <button type="submit">Save</button>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="tab-pane" id="4">
                    <div class="card">
                        <div class="card-body">
                            <div class="alert alert-danger" role="alert">
                                <div class="d-flex">
                                    <div class="icon align-self-center" style="padding-right: 12px;">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_651_38)">
                                                <path d="M10.0003 18.3332C5.39783 18.3332 1.66699 14.6023 1.66699 9.99984C1.66699 5.39734 5.39783 1.6665 10.0003 1.6665C14.6028 1.6665 18.3337 5.39734 18.3337 9.99984C18.3337 14.6023 14.6028 18.3332 10.0003 18.3332ZM10.0003 16.6665C11.7684 16.6665 13.4641 15.9641 14.7144 14.7139C15.9646 13.4636 16.667 11.7679 16.667 9.99984C16.667 8.23173 15.9646 6.53603 14.7144 5.28579C13.4641 4.03555 11.7684 3.33317 10.0003 3.33317C8.23222 3.33317 6.53652 4.03555 5.28628 5.28579C4.03604 6.53603 3.33366 8.23173 3.33366 9.99984C3.33366 11.7679 4.03604 13.4636 5.28628 14.7139C6.53652 15.9641 8.23222 16.6665 10.0003 16.6665ZM9.16699 12.4998H10.8337V14.1665H9.16699V12.4998ZM9.16699 5.83317H10.8337V10.8332H9.16699V5.83317Z" fill="#D80027" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_651_38">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>

                                    </div>
                                    <div>
                                        <strong style="color:#2B014C"> Are you sure? </strong> you confirm, all of your account data will be permanently deleted

                                    </div>
                                </div>
                            </div>
                            <div class="form__group" style="
                                position: relative;
                                ">

                                <svg style="position: absolute;top: 24px;right: 12px;" class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_348_62)">
                                        <path d="M12.9 6.85799L17.142 11.101L7.242 21H3V16.757L12.9 6.85699V6.85799ZM14.314 5.44399L16.435 3.32199C16.6225 3.13452 16.8768 3.02921 17.142 3.02921C17.4072 3.02921 17.6615 3.13452 17.849 3.32199L20.678 6.15099C20.8655 6.33852 20.9708 6.59283 20.9708 6.85799C20.9708 7.12316 20.8655 7.37746 20.678 7.56499L18.556 9.68599L14.314 5.44399Z" fill="#6F6F6F" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_348_62">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>

                                <!-- <input type="email" id="email" class="form__field" value="32A9XzMhxirMqMeyW7GxNJNJ4UVqiDwDm4" readonly style="
                                        padding-left: 15px;
                                        padding-right: 45px;
                                    "> -->
                                <input type="password" id="delete_password" value="" name="delete_password" class="form__field" placeholder="Password" style="
                                        padding-left: 15px;
                                        padding-right: 45px;
                                    ">
                                <label for="delete_password" class="form__label">Password</label>
                            </div>

                            <div class="form__group">
                                <button type="submit">Save</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>

</x-base-layout>
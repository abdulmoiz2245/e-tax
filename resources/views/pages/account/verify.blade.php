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
      font-size: 16px !important;
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

    form {
      max-width: 550px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 10%;
      margin-bottom: 10%;

      width: 100%;
    }

    .card-body {
      padding: 0px !important;
    }


    button {
      border-radius: 10px;
    }

    .nav-tabs li {
      background-color: #E6EAF9;
      border-radius: 10px;
    }

    .nav-tabs .active {
      background-color: #2B014C;
    }

    .nav-tabs .active a {
      color: white;

    }

    a:hover {
      transition: none;
    }

    .nav-tabs .li1 {
      border-radius: 10px 0px 0px 0px;

    }

    .nav-tabs .li2 {
      border-radius: 0px 10px 0px 0px;
    }

    .container {
      margin-top: 5%;
      margin-bottom: 5%;

    }

    .card-body {
      /* margin-left: 20px !important;
      margin-right: 20px !important; */

    }

    @media (min-width: 1200px) {
      .container {
        max-width: 980px !important;
      }
    }
  </style>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <div class="row ">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div id="exTab2" class="containersecond">
            <ul class="nav nav-tabs">
              <li class="active1 active w-50  li1">
                <a href="#1" class="ab mx-auto w-100" style="margin-left: auto; margin-right:auto;" data-toggle="tab"> Scan QR or enter code</a>
              </li>
              <li class="w-50 li2">
                <a href="#2" class="ab w-100" data-toggle="tab">Verify</a>
              </li>
            </ul>

            <div class="tab-content ">

              <div class="tab-pane active" id="1">
                <div class="card p-5">
                  <div class="card-body d-flex">
                    <form action="" method="post">
                      <h1 class="text-center">Configure Authenticator App </h1>
                      <p class="text-center" style="color:#6F6F6F"> Scan this QR code with an authentication app like Google Authenticator or Microsoft Authenticator. Download one from App Store or Play Store.</p>
                      <div class="text-center">
                        <img src="https://www.imgonline.com.ua/examples/qr-code.png" style="width: 130px; height:130px" alt="">
                      </div>
                      <p class="text-center mt-5" style="color:#6F6F6F"> Or enter the following code in your device:</p>

                      <div class="form__group" style="
                          position: relative;
                        ">
                        <svg style="position: absolute;top: 24px;right: 12px;" class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M16.438 5.09831V7.30962H8.78555C7.97173 7.30962 7.30962 7.97173 7.30962 8.78554V16.438H5.09831C4.49272 16.438 4 15.9452 4 15.3394V5.09831C4 4.49272 4.49275 4 5.09831 4H15.3395C15.9453 4 16.438 4.49275 16.438 5.09831Z" fill="#6F6F6F" />
                          <path d="M19.9997 9.03808V19.2792C19.9997 19.6774 19.6769 20.0002 19.2787 20.0002H9.03759C8.63939 20.0002 8.31641 19.6774 8.31641 19.2792V9.03808C8.31641 8.63988 8.63938 8.31689 9.03759 8.31689H19.2787C19.6769 8.31689 19.9997 8.63987 19.9997 9.03808Z" fill="#6F6F6F" />
                        </svg>

                        <input type="email" id="email"  class="form__field" value="32A9XzMhxirMqMeyW7GxNJNJ4UVqiDwDm4" readonly style="
                            padding-left: 15px;
                            padding-right: 45px;
                        ">
                      </div>



                      <div class="form__group">
                        <div class="row">
                          <div class="col-md-6">
                            <button class="btn w-100  mt-3" style="color: #8C8C8C;border: 1px solid #6F6F6F;font-size: 14px;font-weight: 400;">Cancel</button>
                          </div>
                          <div class="col-md-6">
                            <button class="btn w-100  mt-3" style="background: #F4B42A;  color:#fff">Verify</button>
                          </div>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>





              </div>

              <div class="tab-pane" id="2">
                <div class="card p-5">
                  <div class="card-body">
                    <form action="" method="post">
                      <h1 class="text-center">Verify Your Authenticator</h1>
                      <p class="text-center"> Enter the code from your authentication app to continue.</p>

                      <div class="form__group">
                        <input type="email" id="email" class="form__field" placeholder="Your Email">
                        <label for="email" class="form__label">First Name</label>
                      </div>



                      <div class="form__group">
                        <div class="row">
                          <div class="col-md-6">
                            <button class="btn w-100  mt-3" style="color: #8C8C8C;border: 1px solid #6F6F6F;font-size: 14px;font-weight: 400;">Cancel</button>
                          </div>
                          <div class="col-md-6">
                            <button class="btn w-100  mt-3" style="background: #F4B42A;  color:#fff">Verify</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>






              </div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



</x-base-layout>
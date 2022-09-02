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

    .card-title-text{
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
    .card-body{
      padding-bottom: 30px ;
    }
    form {
      max-width: 400px;
      margin-left: auto;
      margin-right: auto;
    }


    button {
      border-radius: 10px;
    }
  </style>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <div class="row" style="margin-bottom: 20px;">
  <div class="col-md-12" >
            <h1 class="dash-title" style="font-size: 30px !important;">Form Import Options</h1>
        </div>
  </div>

  <div id="exTab2" class="containersecond">
    <ul class="nav nav-tabs">
      <li class="active1 active">
        <a href="#1" class="ab" data-toggle="tab">About Me</a>
      </li>
      <li class=""><a href="#2" class="ab" data-toggle="tab">Password</a>
      </li>
      <li class=""><a href="#3" class="ab" data-toggle="tab">Security</a>
      </li>
    </ul>

    <div class="tab-content " style="
        margin-top: 32px;
    ">
      <div class="tab-pane active" id="1">
        <div class="card">
          <div class="card-body">
            <form action="" method="post">
              <div class="form__group">
                <input type="email" id="email" class="form__field" placeholder="Your Email">
                <label for="email" class="form__label">First Name</label>
              </div>

              <div class="form__group">
                <input type="email" id="email" class="form__field" placeholder="Your Email">
                <label for="email" class="form__label">Last Name</label>
              </div>
              <div class="form__group">
                <input type="email" id="email" class="form__field" placeholder="Your Email">
                <label for="email" class="form__label">Email Address</label>
              </div>

              <div class="form__group">
                <button type="submit">Save</button>
              </div>
            </form>

          </div>
        </div>





      </div>
      <div class="tab-pane" id="2">
        <div class="card">
          <div class="card-body">
            <form action="" method="post">
              <div class="form__group">
                <input type="email" id="email" class="form__field" placeholder="Your Email">
                <label for="email" class="form__label">Current Password</label>
              </div>

              <div class="form__group">
                <input type="email" id="email" class="form__field" placeholder="Your Email">
                <label for="email" class="form__label">New Password</label>
              </div>


              <div class="form__group">
                <button type="submit">Save</button>
              </div>
            </form>
          </div>
        </div>






      </div>
      <div class="tab-pane" id="3">
        <div class="row " style="margin-bottom: 36px;">
          <!--begin::Col-->
          <div class="col-md-12">
            <div class="card " style="padding: 24px;">

              <!--begin::Body-->
              <div class="card-body d-flex flex-column p-0 justify-content-end" style="padding-bottom: 0px!important">
                <div class="d-flex justify-content-between">
                  <div class="">
                    <h3 class="card-title align-items-start d-flex m-0 mt-2">
                      <span class="card-label  mb-1 align-self-center card-title-text" style="color: black !important;">Authenticator App</span>
                    </h3>
                    <!--begin::Items-->
                    <div class="text-left">
                      <p style="color:#6f6f6f; padding-top:8px">Set up your account to receive authentication via a mobile application․</p>

                    </div>
                    <!--end::Items-->
                  </div>
                  <div class="">
                    <a href="payer/add-payer">
                      <button class="btn font-neue" style="background: #F4B42A;  color:#fff;padding:14px; padding-left:30px;padding-right:30px;
                                        font-style: normal;
                                        font-weight: 700;
                                        font-size: 16px;
                                        line-height: 20px;
                                        margin-left:12px;
                                        color: #FFFFFF;
                                    "> <i class="fa fa-plus" style="color:#fff"></i> Setup</button>
                    </a>
                  </div>

                </div>

              </div>
              <!--end::Body-->
            </div>

          </div>
          <!--end::Col-->


        </div>
        
      </div>
    </div>
  </div>

</x-base-layout>
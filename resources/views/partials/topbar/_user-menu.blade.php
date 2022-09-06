<style>
    .menu-sub{
        width: 202px !important;
    }

    /* .menu-item a{
        padding-top: 10px !important;
        padding-bottom: 10px !important;
    } */

    .right-menu .menu-item a{
        padding-top: 5px !important;
        padding-bottom: 5px !important;
    }
</style>
<!--begin::Menu-->
<div class="menu right-menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-state-bg-light-primary text-center  py-4 fs-6 " style="width: 202px;" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center   justify-content-center px-3">
            <!--begin::Avatar-->
            <!-- <div class="symbol symbol-50px me-5">
                <img alt="Logo" src="{{ auth()->user()->avatar_url }}"/>
            </div> -->
            <!--end::Avatar-->

            <!--begin::Username-->
            <div class="d-flex flex-column">
                <!-- <div class="fw-bolder d-flex align-items-center fs-5">
                    {{ auth()->user()->name }}
                    <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                </div> -->
                <a href="#" class="fs-7" style="color:#6F6F6F">{{ auth()->user()->email }}</a>
            </div>
            <!--end::Username-->
        </div>
    </div>
    <!--end::Menu item-->

     <!--begin::Menu item-->
     <div class="menu-item px-5">
        <a href="/account/account" class="menu-link px-5 justify-content-center" style="color:black">
            My Account
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="/billing/billing-invoice" class="menu-link px-5 justify-content-center" style="color:black">
            Billing & Invoice
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="/contact" class="menu-link px-5 justify-content-center"style="color:black" >
            <span class="menu-text">Contact Us</span>
           
        </a>
    </div>
    <!--end::Menu item-->



    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->




    <!--begin::Menu item-->
    <div class="menu-item px-5 justify-content-center " style="color:black">
        <a href="#" class= " menu-link px-5 justify-content-center" style="color:black" data-action="{{ theme()->getPageUrl('logout') }}" data-method="post" data-csrf="{{ csrf_token() }}" data-reload="true" class="button-ajax menu-link px-5">
            Log Out
        </a>
    </div>
    <!--end::Menu item-->

</div>
<!--end::Menu-->

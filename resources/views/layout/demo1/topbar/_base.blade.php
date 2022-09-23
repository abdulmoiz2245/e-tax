@php
$toolbarButtonMarginClass = "ms-1 ms-lg-3";
$toolbarButtonHeightClass = "w-40px h-40px";
$toolbarUserAvatarHeightClass = "symbol-40px";
$toolbarButtonIconSizeClass = "svg-icon-1";
@endphp



{{--begin::Toolbar wrapper--}}
<div class="d-flex align-items-stretch flex-shrink-0">

@php

$active_crypto_plan = Auth::user()->active_crypto_plan;
$plan_name = \App\Models\CryptoPlan::select('name')->where('id', $active_crypto_plan ?? 0)->first();

@endphp
    @if(isset($_SESSION['app']) && $_SESSION['app'] == 'crypto')
    <div class="topbar-item align-self-center" data-offset="10px,0px" style="margin-right:30px">
        <a href="{{ route('crypto.free-plan') }}">
            <h4 class="f-16-neu-fig" style="color:#2B014C" id="free_plan">{{$plan_name->name ?? 'Free Plan'}}</h4>
        </a>
    </div>
    @endif
    {{--begin::User--}}
    @if(Auth::check())
    <div class="d-flex align-items-center {{ $toolbarButtonMarginClass }}" id="kt_header_user_menu_toggle">
        {{--begin::Menu--}}
        <div class="cursor-pointer symbol {{ $toolbarUserAvatarHeightClass }}" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom" style="width: 150px;">
            <div class="select-box">
                <div class="select-box__current" tabindex="1">
                    <div class="select-box__value">
                        <img class="p-2" src="{{ asset(theme()->getMediaUrlPath() . 'avatars/profile-img.png') }}" alt="metronic" />

                        <p class="select-box__input-text " style="display: block;">Toast</p>
                    </div><img class="select-box__icon" src="http://cdn.onlinewebfonts.com/svg/img_295694.svg" alt="Arrow Icon" aria-hidden="true" />
                </div>
            </div>
        </div>
        {{ theme()->getView('partials/topbar/_user-menu') }}
        {{--end::Menu--}}
    </div>
    @endif
    {{--end::User --}}


</div>
{{--end::Toolbar wrapper--}}
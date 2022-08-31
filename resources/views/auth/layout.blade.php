@extends('base.base')

@section('content')
    <!--begin::Authentication-->
    <div
        class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed">

        <!--begin::Content-->
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
           

            <!--begin::Wrapper-->
            <div class=" " style="width: 100%;">
                {{ $slot }}
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Content-->

        
    </div>
    <!--end::Authentication-->
@endsection

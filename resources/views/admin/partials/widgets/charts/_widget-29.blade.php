<!--begin::Chart widget 29-->
<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header py-7">
        <!--begin::Statistics-->
        <div class="m-0">
            <!--begin::Heading-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Title-->
                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">7,9</span>
                <!--end::Title-->
                <!--begin::Label-->
                <span class="badge badge-light-success fs-base">
                    <i class="ki-outline ki-arrow-up fs-5 text-success ms-n1"></i>
                    2.2%
                </span>
                <!--end::Label-->
            </div>
            <!--end::Heading-->
            <!--begin::Description-->
            <span class="fs-6 fw-semibold text-gray-500">Avarage Position</span>
            <!--end::Description-->
        </div>
        <!--end::Statistics-->
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                <i class="ki-outline ki-dots-square fs-1 text-gray-500 me-n1"></i>
            </button>
            <!--layout-partial:partials/menus/_menu-2.html-->
            @include('admin.partials.menus._menu-2')
            <!--end::Menu-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body d-flex align-items-end p-0">
        <!--begin::Chart-->
        <div id="kt_charts_widget_29" class="h-300px w-100 min-h-auto ps-7 pe-0 mb-5"></div>
        <!--end::Chart-->
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget 29-->


<!--begin::Chart widget 5-->
<div class="card card-flush h-md-100">
    <!--begin::Header-->
    <div class="card-header flex-nowrap pt-5">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900">Top Selling Categories</span>
            <span class="text-gray-500 pt-2 fw-semibold fs-6">8k social visitors</span>
        </h3>
        <!--end::Title-->
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                <i class="ki-outline ki-dots-square fs-1 text-gray-500 me-n1"></i>
            </button>
            <!--begin::Menu 2-->
            @include('admin.partials.menus._menu-2')
            <!--end::Menu 2-->
            <!--end::Menu-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-5 ps-6">
        <div id="kt_charts_widget_5" class="min-h-auto"></div>
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget 5-->


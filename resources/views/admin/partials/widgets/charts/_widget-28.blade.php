<div class="card card-flush h-xl-100">
    <!--begin::Header-->
    <div class="card-header py-7">
        <!--begin::Statistics-->
        <div class="m-0">
            <!--begin::Heading-->
            <div class="d-flex align-items-center mb-2">
                <!--begin::Title-->
                <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">2,579</span>
                <!--end::Title-->
                <!--begin::Label-->
                <span class="badge badge-light-success fs-base">
                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>2.2%</span>
                <!--end::Label-->
            </div>
            <!--end::Heading-->
            <!--begin::Description-->
            <span class="fs-6 fw-semibold text-gray-500">Domain External Links</span>
            <!--end::Description-->
        </div>
        <!--end::Statistics-->
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
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
    <div class="card-body d-flex align-items-end ps-4 pe-0 pb-4">
        <!--begin::Chart-->
        <div id="kt_charts_widget_28" class="h-300px w-100 min-h-auto"></div>
        <!--end::Chart-->
    </div>
    <!--end::Body-->
</div>


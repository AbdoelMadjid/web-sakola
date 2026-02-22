<div class="card card-xl-stretch mb-0 mb-xxl-8">
    <!--begin::Header-->
    <div class="card-header border-0 bg-primary py-5">
        <h3 class="card-title fw-bold text-white">Sales Progress</h3>
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button type="button"
                class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3"
                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-category fs-6">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </button>
            <!--begin::Menu 3-->
            @include('admin.partials.menus._menu-3')
            <!--end::Menu 3-->
            <!--end::Menu-->
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body p-0">
        <!--begin::Chart-->
        <div class="mixed-widget-12-chart card-rounded-bottom bg-primary" data-kt-color="primary" style="height: 250px">
        </div>
        <!--end::Chart-->
        <!--begin::Stats-->
        <div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
            <!--begin::Row-->
            <div class="row g-0 mb-7">
                <!--begin::Col-->
                <div class="col mx-5">
                    <div class="fs-6 text-gray-500">Avarage Sale</div>
                    <div class="fs-2 fw-bold text-gray-800">$650</div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col mx-5">
                    <div class="fs-6 text-gray-500">Comissions</div>
                    <div class="fs-2 fw-bold text-gray-800">$29,500</div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-0">
                <!--begin::Col-->
                <div class="col mx-5">
                    <div class="fs-6 text-gray-500">Revenue</div>
                    <div class="fs-2 fw-bold text-gray-800">$55,000</div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col mx-5">
                    <div class="fs-6 text-gray-500">Expenses</div>
                    <div class="fs-2 fw-bold text-gray-800">$1,130,600</div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Stats-->
    </div>
    <!--end::Body-->
</div>


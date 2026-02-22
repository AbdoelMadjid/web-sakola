<div class="card card-xl-stretch">
    <!--begin::Header-->
    <div class="card-header border-0 bg-danger py-5">
        <h3 class="card-title fw-bold text-white">Sales Statistics</h3>
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
        <div class="mixed-widget-2-chart card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 200px">
        </div>
        <!--end::Chart-->
        <!--begin::Stats-->
        <div class="card-p mt-n20 position-relative">
            <!--begin::Row-->
            <div class="row g-0">
                <!--begin::Col-->
                <div class="col d-flex flex-column bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                    <i class="ki-duotone ki-chart-simple fs-2x text-warning my-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                        <span class="path3"></span>
                        <span class="path4"></span>
                    </i>
                    <a href="#" class="text-warning fw-semibold fs-6">Weekly Sales</a>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col d-flex flex-column bg-light-primary px-6 py-8 rounded-2 mb-7">
                    <i class="ki-duotone ki-briefcase fs-2x text-primary my-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <a href="#" class="text-primary fw-semibold fs-6">New Projects</a>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-0">
                <!--begin::Col-->
                <div class="col d-flex flex-column bg-light-danger px-6 py-8 rounded-2 me-7">
                    <i class="ki-duotone ki-abstract-26 fs-2x text-danger my-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <a href="#" class="text-danger fw-semibold fs-6 mt-2">Item Orders</a>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col d-flex flex-column bg-light-success px-6 py-8 rounded-2">
                    <i class="ki-duotone ki-sms fs-2x text-success my-2">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <a href="#" class="text-success fw-semibold fs-6 mt-2">Bug Reports</a>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Stats-->
    </div>
    <!--end::Body-->
</div>


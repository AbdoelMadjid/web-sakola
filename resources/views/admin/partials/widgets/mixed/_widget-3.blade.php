<div class="card card-xl-stretch mb-xl-8">
    <!--begin::Beader-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Sales Overview</span>
            <span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
        </h3>
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <i class="ki-duotone ki-category fs-6">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </button>
            <!--begin::Menu 1-->
            @include('admin.partials.menus._menu-1')
            <!--end::Menu 1-->
            <!--end::Menu-->
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body p-0 d-flex flex-column">
        <!--begin::Stats-->
        <div class="card-p pt-5 bg-body flex-grow-1">
            <!--begin::Row-->
            <div class="row g-0">
                <!--begin::Col-->
                <div class="col mr-8">
                    <!--begin::Label-->
                    <div class="fs-7 text-muted fw-bold">
                        Average Sale
                    </div>
                    <!--end::Label-->
                    <!--begin::Stat-->
                    <div class="d-flex align-items-center">
                        <div class="fs-4 fw-bold">$650</div>
                        <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Stat-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col">
                    <!--begin::Label-->
                    <div class="fs-7 text-muted fw-bold">
                        Commission
                    </div>
                    <!--end::Label-->
                    <!--begin::Stat-->
                    <div class="fs-4 fw-bold">$233,600</div>
                    <!--end::Stat-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-0 mt-8">
                <!--begin::Col-->
                <div class="col mr-8">
                    <!--begin::Label-->
                    <div class="fs-7 text-muted fw-bold">
                        Annual Taxes 2019
                    </div>
                    <!--end::Label-->
                    <!--begin::Stat-->
                    <div class="fs-4 fw-bold">$29,004</div>
                    <!--end::Stat-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col">
                    <!--begin::Label-->
                    <div class="fs-7 text-muted fw-bold">
                        Annual Income
                    </div>
                    <!--end::Label-->
                    <!--begin::Stat-->
                    <div class="d-flex align-items-center">
                        <div class="fs-4 fw-bold">$1,480,00</div>
                        <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Stat-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Stats-->
        <!--begin::Chart-->
        <div class="mixed-widget-3-chart card-rounded-bottom" data-kt-chart-color="primary" style="height: 150px"></div>
        <!--end::Chart-->
    </div>
    <!--end::Body-->
</div>


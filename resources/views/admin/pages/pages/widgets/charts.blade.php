@extends('admin.layouts.index')
@section('styles')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="admin/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
@endsection
@section('toolbar')
    @component('admin.layouts.partials._toolbar')
        @slot('li_1')
            Pages
        @endslot
        @slot('li_2')
            Widgets
        @endslot
    @endcomponent
@endsection
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <div class="col-xl-6">
                    <!--begin::Charts Widget 1-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Recent Statistics</span>
                                <span class="text-muted fw-semibold fs-7">More than 400 new members</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-category fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 1-->
                                <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                                    id="kt_menu_6606385a917ba">
                                    <!--begin::Header-->
                                    <div class="px-7 py-5">
                                        <div class="fs-5 text-gray-900 fw-bold">
                                            Filter Options
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Menu separator-->
                                    <div class="separator border-gray-200"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Form-->
                                    <div class="px-7 py-5">
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Status:</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <div>
                                                <select class="form-select form-select-solid" multiple="multiple"
                                                    data-kt-select2="true" data-close-on-select="false"
                                                    data-placeholder="Select option"
                                                    data-dropdown-parent="#kt_menu_6606385a917ba" data-allow-clear="true">
                                                    <option></option>
                                                    <option value="1">Approved</option>
                                                    <option value="2">Pending</option>
                                                    <option value="2">In Process</option>
                                                    <option value="2">Rejected</option>
                                                </select>
                                            </div>
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Member Type:</label>
                                            <!--end::Label-->
                                            <!--begin::Options-->
                                            <div class="d-flex">
                                                <!--begin::Options-->
                                                <label
                                                    class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                    <span class="form-check-label">Author</span>
                                                </label>
                                                <!--end::Options-->
                                                <!--begin::Options-->
                                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="checkbox" value="2"
                                                        checked="checked" />
                                                    <span class="form-check-label">Customer</span>
                                                </label>
                                                <!--end::Options-->
                                            </div>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Input group-->
                                        <div class="mb-10">
                                            <!--begin::Label-->
                                            <label class="form-label fw-semibold">Notifications:</label>
                                            <!--end::Label-->
                                            <!--begin::Switch-->
                                            <div
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    name="notifications" checked="checked" />
                                                <label class="form-check-label">Enabled</label>
                                            </div>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                data-kt-menu-dismiss="true">
                                                Reset
                                            </button>
                                            <button type="submit" class="btn btn-sm btn-primary"
                                                data-kt-menu-dismiss="true">
                                                Apply
                                            </button>
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Form-->
                                </div>
                                <!--end::Menu 1-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_1_chart" style="height: 350px"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Charts Widget 1-->
                </div>
                <div class="col-xl-6">
                    <!--begin::Charts Widget 2-->
                    @include('admin.partials.widgets.charts._widget-2')
                    <!--end::Charts Widget 2-->
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <div class="col-xl-6">
                    <!--begin::Charts Widget 3-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Recent Transactions</span>
                                <span class="text-muted fw-semibold fs-7">More than 1000 new records</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar" data-kt-buttons="true">
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1"
                                    id="kt_charts_widget_3_year_btn">Year</a>
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1"
                                    id="kt_charts_widget_3_month_btn">Month</a>
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                                    id="kt_charts_widget_3_week_btn">Week</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_3_chart" style="height: 350px"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Charts Widget 3-->
                </div>
                <div class="col-xl-6">
                    <!--begin::Charts Widget 4-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Recent Customers</span>
                                <span class="text-muted fw-semibold fs-7">More than 500 new customers</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar" data-kt-buttons="true">
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1"
                                    id="kt_charts_widget_4_year_btn">Year</a>
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1"
                                    id="kt_charts_widget_4_month_btn">Month</a>
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                                    id="kt_charts_widget_4_week_btn">Week</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_4_chart" style="height: 350px"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Charts Widget 4-->
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <div class="col-xl-6">
                    <!--begin::Charts Widget 5-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Recent Customers</span>
                                <span class="text-muted fw-semibold fs-7">More than 500 new customers</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar" data-kt-buttons="true">
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1"
                                    id="kt_charts_widget_5_year_btn">Year</a>
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 me-1"
                                    id="kt_charts_widget_5_month_btn">Month</a>
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-secondary px-4 active"
                                    id="kt_charts_widget_5_week_btn">Week</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_5_chart" style="height: 350px"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Charts Widget 5-->
                </div>
                <div class="col-xl-6">
                    <!--begin::Charts Widget 5-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Recent Orders</span>
                                <span class="text-muted fw-semibold fs-7">More than 500+ new orders</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar" data-kt-buttons="true">
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1"
                                    id="kt_charts_widget_6_sales_btn">Sales</a>
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1"
                                    id="kt_charts_widget_6_expenses_btn">Expenses</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_6_chart" style="height: 350px"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Charts Widget 5-->
                </div>
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 g-xl-8">
                <div class="col-xl-6">
                    <!--begin::Charts Widget 7-->
                    @include('admin.partials.widgets.charts._widget-7')
                    <!--end::Charts Widget 7-->
                </div>
                <div class="col-xl-6">
                    <!--begin::Charts Widget 8-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold fs-3 mb-1">Recent Orders</span>
                                <span class="text-muted fw-semibold fs-7">More than 500 new orders</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar" data-kt-buttons="true">
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1"
                                    id="kt_charts_widget_8_year_btn">Year</a>
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1"
                                    id="kt_charts_widget_8_month_btn">Month</a>
                                <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                                    id="kt_charts_widget_8_week_btn">Week</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_8_chart" style="height: 350px" class="card-rounded-bottom"></div>
                            <!--end::Chart-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Charts Widget 8-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="admin/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="admin/assets/js/widgets.bundle.js"></script>
    <script src="admin/assets/js/custom/widgets.js"></script>
    <script src="admin/assets/js/custom/apps/chat/chat.js"></script>
    <script src="admin/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="admin/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="admin/assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
@endsection



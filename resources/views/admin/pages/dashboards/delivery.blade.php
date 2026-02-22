@extends('admin.layouts.index')
@section('styles')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="admin/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="admin/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->
@endsection
@section('toolbar')
    @component('admin.layouts.partials._toolbar')
        @slot('li_1')
            Pages
        @endslot
        @slot('li_2')
            Dashboards
        @endslot
        @slot('action')
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Secondary button-->
                <a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_create_app">Rollover</a>
                <!--end::Secondary button-->
                <!--begin::Primary button-->
                <a href="/apps/ecommerce/sales/add-order" class="btn btn-sm fw-bold btn-primary">New Shipment</a>
                <!--end::Primary button-->
            </div>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-fluid">
            <!--begin::Row-->
            <div class="row gy-5 gx-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4 mb-xl-10">
                    <!--begin::Engage widget 3-->
                    @include('admin.partials.widgets.engage._widget-3a')
                    <!--end::Engage widget 3-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8 mb-5 mb-xl-10">
                    <!--begin::Chart widget 11-->
                    @include('admin.partials.widgets.charts._widget-11')
                    <!--end::Chart widget 11-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4 mb-xl-10">
                    <!--begin::List widget 16-->
                    @include('admin.partials.widgets.lists._widget-16')
                    <!--end::List widget 16-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8 mb-5 mb-xl-10">
                    <!--begin::Chart widget 32-->
                    @include('admin.partials.widgets.charts._widget-32')
                    <!--end::Chart widget 32-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4 mb-xl-10">
                    <!--begin::List widget 17-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Popular Products</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="/apps/ecommerce/catalog/add-product" class="btn btn-sm btn-light">Add Product</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <!--begin::Content-->
                            <div class="d-flex flex-stack my-5">
                                <span class="text-gray-500 fs-7 fw-bold">ITEM</span>
                                <span class="text-gray-500 fw-bold fs-7">ITEM PRICE</span>
                            </div>
                            <!--end::Content-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center me-3">
                                    <!--begin::Icon-->
                                    <img src="admin/assets/media/stock/ecommerce/14.png" class="me-4 w-50px" alt="" />
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="flex-grow-1">
                                        <a href="/apps/ecommerce/sales/details"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Fjallraven</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Item: #XDG-6437</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Value-->
                                <span class="text-gray-800 fw-bold fs-6">$ 72.00</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center me-3">
                                    <!--begin::Icon-->
                                    <img src="admin/assets/media/stock/ecommerce/13.png" class="me-4 w-50px" alt="" />
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="flex-grow-1">
                                        <a href="/apps/ecommerce/sales/details"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Nike AirMax</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Item: #XDG-1836</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Value-->
                                <span class="text-gray-800 fw-bold fs-6">$ 45.00</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center me-3">
                                    <!--begin::Icon-->
                                    <img src="admin/assets/media/stock/ecommerce/41.png" class="me-4 w-50px" alt="" />
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="flex-grow-1">
                                        <a href="/apps/ecommerce/sales/details"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Bose QC 35</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Item: #XDG-6254</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Value-->
                                <span class="text-gray-800 fw-bold fs-6">$ 168.00</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center me-3">
                                    <!--begin::Icon-->
                                    <img src="admin/assets/media/stock/ecommerce/53.png" class="me-4 w-50px" alt="" />
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="flex-grow-1">
                                        <a href="/apps/ecommerce/sales/details"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Greeny</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Item: #XDG-1746</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Value-->
                                <span class="text-gray-800 fw-bold fs-6">$ 14.50</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center me-3">
                                    <!--begin::Icon-->
                                    <img src="admin/assets/media/stock/ecommerce/71.png" class="me-4 w-50px" alt="" />
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="flex-grow-1">
                                        <a href="/apps/ecommerce/sales/details"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Apple Watches</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Item: #XDG-6245</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Value-->
                                <span class="text-gray-800 fw-bold fs-6">$ 362.00</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-4"></div>
                            <!--end::Separator-->
                            <!--begin::Item-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="d-flex align-items-center me-3">
                                    <!--begin::Icon-->
                                    <img src="admin/assets/media/stock/ecommerce/194.png" class="me-4 w-50px" alt="" />
                                    <!--end::Icon-->
                                    <!--begin::Section-->
                                    <div class="flex-grow-1">
                                        <a href="/apps/ecommerce/sales/details"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold lh-0">Friendly Robot</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Item: #XDG-2347</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Value-->
                                <span class="text-gray-800 fw-bold fs-6">$ 48.00</span>
                                <!--end::Value-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List widget 17-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8 mb-5 mb-xl-10">
                    <!--begin::Table widget 6-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Leading Agents by Category</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 424,567 deliveries</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="/apps/ecommerce/catalog/add-product" class="btn btn-sm btn-light">Add Product</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-pills-custom mb-3">
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active"
                                        data-bs-toggle="pill" href="#kt_stats_widget_6_tab_1">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="ki-duotone ki-truck fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Van</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                        data-bs-toggle="pill" href="#kt_stats_widget_6_tab_2">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="ki-duotone ki-bus fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Train</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                        data-bs-toggle="pill" href="#kt_stats_widget_6_tab_3">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="ki-duotone ki-logistic fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                                <span class="path6"></span>
                                                <span class="path7"></span>
                                            </i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Drone</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                    <th class="p-0 w-200px w-xxl-450px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-190px"></th>
                                                    <th class="p-0 w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="admin/assets/media/avatars/300-1.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brooklyn
                                                                    Simmons</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
                                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>
                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="admin/assets/media/avatars/300-2.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Annette
                                                                    Black</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
                                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>
                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="admin/assets/media/avatars/300-12.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                    Howard</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
                                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>
                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="admin/assets/media/avatars/300-11.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Guy
                                                                    Hawkins</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
                                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>
                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="admin/assets/media/avatars/300-13.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Marvin
                                                                    McKinney</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
                                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>
                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_stats_widget_6_tab_2">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                    <th class="p-0 w-200px w-xxl-450px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-190px"></th>
                                                    <th class="p-0 w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="admin/assets/media/avatars/300-11.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Guy
                                                                    Hawkins</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
                                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>
                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="admin/assets/media/avatars/300-13.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Marvin
                                                                    McKinney</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
                                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>
                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="admin/assets/media/avatars/300-1.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brooklyn
                                                                    Simmons</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
                                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>
                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="admin/assets/media/avatars/300-2.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Annette
                                                                    Black</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
                                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>
                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="admin/assets/media/avatars/300-12.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                    Howard</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
                                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>
                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_stats_widget_6_tab_3">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                    <th class="p-0 w-200px w-xxl-450px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-190px"></th>
                                                    <th class="p-0 w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="admin/assets/media/avatars/300-1.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Brooklyn
                                                                    Simmons</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
                                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>
                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="admin/assets/media/avatars/300-11.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Guy
                                                                    Hawkins</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
                                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>
                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="admin/assets/media/avatars/300-13.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Marvin
                                                                    McKinney</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
                                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>
                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="admin/assets/media/avatars/300-12.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                    Howard</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
                                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>
                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="admin/assets/media/avatars/300-2.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">Annette
                                                                    Black</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
                                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                                    </td>
                                                    <td>
                                                        <a href="#"
                                                            class="text-gray-900 fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>
                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                            <div class="rating-label checked">
                                                                <i class="ki-solid ki-star fs-6"></i>
                                                            </div>
                                                        </div>
                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Table widget 6-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List widget 18-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Lading Companies</span>
                                <span class="text-gray-500 mt-1 fw-semibold fs-6">8k social visitors</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <ul class="nav me-n1" id="kt_chart_widget_11_tabs">
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1"
                                            data-bs-toggle="tab" id="kt_list_widget_18_tab_1"
                                            href="#kt_list_widget_18_tab_content_1">2021</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active"
                                            data-bs-toggle="tab" id="kt_list_widget_18_tab_2"
                                            href="#kt_list_widget_18_tab_content_2">Month</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade" id="kt_list_widget_18_tab_content_1">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="admin/assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo
                                                    Ltd.</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video
                                                    Channel</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>4.1%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="admin/assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Barone LLC.</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span
                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>0.2%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="admin/assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Big Kahuna
                                                    Burger</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                                    Network</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>1.9%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="admin/assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco
                                                    Enterprises</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                                    Network</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>8.3%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="admin/assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo
                                                    Ltd.</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span
                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>2.6%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="admin/assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Binford Ltd.</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                                    Media</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-danger fs-base">
                                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>0.4%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_list_widget_18_tab_content_2">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="admin/assets/media/svg/brand-logos/atica.svg" class="me-4 w-30px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo
                                                    Ltd.</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span
                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">579</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>2.6%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="admin/assets/media/svg/brand-logos/telegram-2.svg" class="me-4 w-30px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Binford Ltd.</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                                    Media</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-danger fs-base">
                                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>0.4%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="admin/assets/media/svg/brand-logos/balloon.svg" class="me-4 w-30px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Barone LLC.</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span
                                                    class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">794</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>0.2%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="admin/assets/media/svg/brand-logos/kickstarter.svg" class="me-4 w-30px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Abstergo
                                                    Ltd.</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video
                                                    Channel</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>4.1%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="admin/assets/media/svg/brand-logos/vimeo.svg" class="me-4 w-30px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Biffco
                                                    Enterprises</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                                    Network</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>8.3%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-4"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <div class="d-flex align-items-center me-5">
                                            <!--begin::Flag-->
                                            <img src="admin/assets/media/svg/brand-logos/plurk.svg" class="me-4 w-30px"
                                                style="border-radius: 4px" alt="" />
                                            <!--end::Flag-->
                                            <!--begin::Content-->
                                            <div class="me-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Big Kahuna
                                                    Burger</a>
                                                <!--end::Title-->
                                                <!--begin::Desc-->
                                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Social
                                                    Network</span>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Content-->
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>
                                            <!--end::Number-->
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge badge-light-success fs-base">
                                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>1.9%</span>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::List widget 18-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-8">
                    <!--begin::Chart widget 17-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-900">Sales Statistics</span>
                                <span class="text-gray-500 pt-2 fw-semibold fs-6">Top Selling Products</span>
                            </h3>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Menu-->
                                <button
                                    class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                    data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                            Payments
                                        </div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create Payment
                                            <span class="ms-2" data-bs-toggle="tooltip"
                                                title="Specify a target name for future usage and reference">
                                                <i class="ki-duotone ki-information fs-6">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i> </span></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <!--begin::Switch-->
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <!--begin::Input-->
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                            value="1" checked="checked" name="notifications" />
                                                        <!--end::Input-->
                                                        <!--end::Label-->
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                        <!--end::Label-->
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                                <!--end::Menu-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-5">
                            <!--begin::Chart container-->
                            <div id="kt_charts_widget_17_chart" class="w-100 h-400px"></div>
                            <!--end::Chart container-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart widget 17-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="admin/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="admin/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="admin/assets/js/widgets.bundle.js"></script>
    <script src="admin/assets/js/custom/widgets.js"></script>
    <script src="admin/assets/js/custom/apps/chat/chat.js"></script>
    <script src="admin/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="admin/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="admin/assets/js/custom/utilities/modals/bidding.js"></script>
    <script src="admin/assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Custom Javascript-->
@endsection



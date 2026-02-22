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
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content  flex-column-fluid ">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-fluid ">
            <!--begin::Row-->
            <div class="row mb-20">
                <!--begin::Col-->
                <div class="col-md-4">
                    <div class="text-light-dark bg-dark text-center mb-5">1</div>
                    @include('admin.partials.widgets.cards._widget-1')
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4">
                    <div class="text-light-dark bg-dark text-center mb-5">3</div>
                    @include('admin.partials.widgets.cards._widget-3')
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4">
                    <div class="text-light-dark bg-dark text-center mb-5">3a</div>
                    @include('admin.partials.widgets.cards._widget-3a')
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-20">
                <!--begin::Col-->
                <div class="col-md-4 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">5</div>
                    @include('admin.partials.widgets.cards._widget-5')
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">16</div>
                    @include('admin.partials.widgets.cards._widget-16')
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">20</div>
                    @include('admin.partials.widgets.cards._widget-20')
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-20">
                <!--begin::Col-->
                <div class="col-md-3 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">17</div>
                    @include('admin.partials.widgets.cards._widget-17')
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">4</div>
                    @include('admin.partials.widgets.cards._widget-4')
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">10</div>
                    @include('admin.partials.widgets.cards._widget-10')
                </div>
                <!--end::Col-->

            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-20">
                <!--begin::Col-->
                <div class="col-md-3 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">7</div>
                    @include('admin.partials.widgets.cards._widget-7')
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">7a</div>
                    @include('admin.partials.widgets.cards._widget-7a')
                </div>
                <!--end::Col-->

            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-20">
                <!--begin::Col-->
                <div class="col-md-3 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">8</div>
                    @include('admin.partials.widgets.cards._widget-8')
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">9</div>
                    @include('admin.partials.widgets.cards._widget-9')
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">12</div>
                    @include('admin.partials.widgets.cards._widget-12')
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">6</div>
                    @include('admin.partials.widgets.cards._widget-6')
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-20">
                <!--begin::Col-->
                <div class="col-md-3 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">11</div>
                    @include('admin.partials.widgets.cards._widget-11')
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">11a</div>
                    @include('admin.partials.widgets.cards._widget-11a')
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">11b</div>
                    @include('admin.partials.widgets.cards._widget-11b')
                </div>
                <!--end::Col-->

            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-20">
                <!--begin::Col-->
                <div class="col-md-3">
                    <div class="text-light-dark bg-dark text-center mb-5">14</div>
                    @include('admin.partials.widgets.cards._widget-14')
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-3">
                    <div class="text-light-dark bg-dark text-center mb-5">14a</div>
                    @include('admin.partials.widgets.cards._widget-14a')
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-20">
                <!--begin::Col-->
                <div class="col-md-4">
                    <div class="text-light-dark bg-dark text-center mb-5">18</div>
                    @include('admin.partials.widgets.cards._widget-18')
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4">
                    <div class="text-light-dark bg-dark text-center mb-5">15</div>
                    @include('admin.partials.widgets.cards._widget-15')
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

            <!--begin::Row-->
            <div class="row mb-20">
                <!--begin::Col-->
                <div class="col-md-4 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">19</div>
                    @include('admin.partials.widgets.cards._widget-19')
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-md-4 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">22</div>
                    @include('admin.partials.widgets.cards._widget-22')
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-4 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">23</div>
                    @include('admin.partials.widgets.cards._widget-23')
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row mb-20">
                <!--begin::Col-->
                <div class="col-md-3 h-xl-100">
                    <div class="text-light-dark bg-dark text-center mb-5">2</div>
                    @include('admin.partials.widgets.cards._widget-2')
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
@endsection

@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="admin/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="admin/assets/js/widgets.bundle.js"></script>
    <script src="admin/assets/js/custom/widgets.js"></script>
    <script src="admin/assets/js/custom/apps/chat/chat.js"></script>
    <script src="admin/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="admin/assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="admin/assets/js/custom/utilities/modals/new-target.js"></script>
    <script src="admin/assets/js/custom/utilities/modals/users-search.js"></script>
    <!--end::Vendors Javascript-->
@endsection



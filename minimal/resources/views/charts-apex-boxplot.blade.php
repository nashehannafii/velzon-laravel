@extends('layouts.master')
@section('title')
    @lang('translation.Apex_Boxplot_Chart')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Apexcharts
        @endslot
        @slot('title')
            Apex Boxplot Charts
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic Box Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="basic_box" data-colors='["--vz-primary", "--vz-info"]' class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Boxplot with Scatter Chart</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="box_plot" data-colors='["--vz-succcess", "--vz-info", "--vz-light", "--vz-primary"]'
                        class="apex-charts" dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Horizontal BoxPlot</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="box_plot_hori" data-colors='["--vz-light", "--vz-secondary-bg"]' class="apex-charts"
                        dir="ltr"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
@section('script')
    <script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/pages/apexcharts-boxplot.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection

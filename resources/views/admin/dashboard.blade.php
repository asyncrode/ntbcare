@extends('layouts_admin.master')
@section('content')
<div class="content">
    <!-- Harian -->
    <div class="block-header block-header-default border-b mb-10">
        <h3 class="block-title">
            Total <small>Pengaduan Hari Ini</small>
        </h3>
        <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
            </button>
        </div>
    </div>
    <div class="row invisible" data-toggle="appear">
        <!-- Row #1 -->
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow bg-dark" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix text-center">
                    <div class="font-size-h3 font-w600 text-white pb-2" data-toggle="countTo" data-speed="500" data-to="{{$today->count()}}">0</div>
                    <div class="font-size-sm font-w600 text-light text-uppercase">Pengaduan</div>
                </div>
            </a>
        </div>
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="fa fa-clock-o fa-2x text-warning" ></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-warning pb-2"><span data-toggle="countTo" data-speed="500" data-to="{{$today->where('status', '=', 'Waiting')->count()}}">0</span></div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Waiting</div>
                </div>
            </a>
        </div>
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="fa fa-times-circle fa-2x text-danger"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-danger pb-2" data-toggle="countTo" data-speed="500" data-to="{{$today->where('status', '=', 'Rejected')->count()}}">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Rejected</div>
                </div>
            </a>
        </div>
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="fa fa-check fa-2x text-info"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-info pb-2" data-toggle="countTo" data-speed="500" data-to="{{$today->where('status', '=', 'Approved')->count()}}">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Approved</div>
                </div>
            </a>
        </div>
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="fa fa-hourglass-1 fa-2x text-earth-light"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-earth-light pb-2" data-toggle="countTo" data-speed="500" data-to="{{$today->where('status', '=', 'On process')->count()}}">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">On Process</div>
                </div>
            </a>
        </div>
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="fa fa-check-circle fa-2x text-success"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-success pb-2" data-toggle="countTo" data-speed="500" data-to="{{$today->where('status', '=', 'Complete')->count()}}">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Completed</div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>

    <!-- Status -->
    <div class="block-header block-header-default border-b mb-10">
        <h3 class="block-title">
            Total <small>Pengaduan Seluruhnya</small>
        </h3>
        <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
            </button>
        </div>
    </div>
    <div class="block-content">
        <div class="row items-push-2x text-center invisible" data-toggle="appear">
            <div class="col-4 col-xl-2">
                <!-- Pie Chart Container -->
                <div class="js-pie-chart pie-chart" data-percent="100" data-line-width="4" data-size="100" data-bar-color="#575757" data-track-color="#e9e9e9">
                    <span>{{$aduan->count()}}<br><small class="text-muted">Pengaduan</small></span>
                </div>
            </div>
            <div class="col-4 col-xl-2">
                <!-- Pie Chart Container -->
                <div class="js-pie-chart pie-chart" data-percent="<?= ($aduan->where('status', '=', 'Waiting')->count() / $aduan->count()) * 100; ?>" data-line-width="4" data-size="<?= ($aduan->count()/$aduan->count()) * 100 ?>" data-bar-color="#ffca28" data-track-color="#e9e9e9">
                    <span>{{$aduan->where('status', '=', 'Waiting')->count()}}<small class="text-muted">/{{$aduan->count()}}</small></span>
                </div>
                <div class="mt-10">
                    <span class="text-uppercase">Waiting</span>
                </div>
            </div>
            <div class="col-4 col-xl-2">
                <!-- Pie Chart Container -->
                <div class="js-pie-chart pie-chart" data-percent="<?= ($aduan->where('status', '=', 'Rejected')->count() / $aduan->count()) * 100; ?>" data-line-width="4" data-size="<?= ($aduan->count()/$aduan->count()) * 100 ?>" data-bar-color="#ef5350" data-track-color="#e9e9e9">
                    <span>{{$aduan->where('status', '=', 'Rejected')->count()}}<small class="text-muted">/{{$aduan->count()}}</small></span>
                </div>
                <div class="mt-10">
                    <span class="text-uppercase">Rejected</span>
                </div>
            </div>
            <div class="col-4 col-xl-2">
                <!-- Pie Chart Container -->
                <div class="js-pie-chart pie-chart" data-percent="<?= ($aduan->where('status', '=', 'Approved')->count() / $aduan->count()) * 100; ?>" data-line-width="4" data-size="<?= ($aduan->count()/$aduan->count()) * 100 ?>" data-bar-color="#26c6da" data-track-color="#e9e9e9">
                    <span>{{$aduan->where('status', '=', 'Approved')->count()}}<small class="text-muted">/{{$aduan->count()}}</small></span>
                </div>
                <div class="mt-10">
                    <span class="text-uppercase">Approved</span>
                </div>
            </div>
            <div class="col-4 col-xl-2">
                <!-- Pie Chart Container -->
                <div class="js-pie-chart pie-chart" data-percent="<?= ($aduan->where('status', '=', 'On process')->count() / $aduan->count()) * 100; ?>" data-line-width="4" data-size="<?= ($aduan->count()/$aduan->count()) * 100 ?>" data-bar-color="#9ccc65" data-track-color="#e9e9e9">
                    <span>{{$aduan->where('status', '=', 'On process')->count()}}<small class="text-muted">/{{$aduan->count()}}</small></span>
                </div>
                <div class="mt-10">
                    <span class="text-uppercase">On Process</span>
                </div>
            </div>
            <div class="col-4 col-xl-2">
                <!-- Pie Chart Container -->
                <div class="js-pie-chart pie-chart" data-percent="<?= ($aduan->where('status', '=', 'Complete')->count() / $aduan->count()) * 100; ?>" data-line-width="4" data-size="<?= ($aduan->count()/$aduan->count()) * 100 ?>" data-bar-color="#9ccc65" data-track-color="#e9e9e9">
                    <span>{{$aduan->where('status', '=', 'Complete')->count()}}<small class="text-muted">/{{$aduan->count()}}</small></span>
                </div>
                <div class="mt-10">
                    <span class="text-uppercase">Completed</span>
                </div>
            </div>
        </div>
    </div>

    <!-- kategori -->
    <div class="block-header block-header-default border-b mb-10">
        <h3 class="block-title">
            Total <small>Pengaduan Berdasarkan Kategori</small>
        </h3>
        <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                <i class="si si-refresh"></i>
            </button>
        </div>
    </div>
    <div class="row invisible" data-toggle="appear">
        <!-- Row #1 -->
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow bg-dark" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix text-center">
                    <div class="font-size-h3 font-w600 text-white pb-2" data-toggle="countTo" data-speed="500" data-to="{{$aduan->where('id_kategori', '=', 1)->count()}}">0</div>
                    <div class="font-size-sm font-w600 text-light text-uppercase">Infrastruktur</div>
                </div>
            </a>
        </div>
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="fa fa-clock-o fa-2x text-warning" ></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-warning pb-2"><span data-toggle="countTo" data-speed="500" data-to="{{$aduan->where('id_kategori', '=', 1)->where('status', '=', 'Rejected')->count()}}">0</span></div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Waiting</div>
                </div>
            </a>
        </div>
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="fa fa-times-circle fa-2x text-danger"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-danger pb-2" data-toggle="countTo" data-speed="500" data-to="{{$aduan->where('id_kategori', '=', 1)->where('status', '=', 'Rejected')->count()}}">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Rejected</div>
                </div>
            </a>
        </div>
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="fa fa-check fa-2x text-info"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-info pb-2" data-toggle="countTo" data-speed="500" data-to="{{$aduan->where('id_kategori', '=', 1)->where('status', '=', 'Approved')->count()}}">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Approved</div>
                </div>
            </a>
        </div>
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="fa fa-hourglass-1 fa-2x text-earth-light"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-earth-light pb-2" data-toggle="countTo" data-speed="500" data-to="{{$aduan->where('id_kategori', '=', 1)->where('status', '=', 'On process')->count()}}">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">On Process</div>
                </div>
            </a>
        </div>
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="fa fa-check-circle fa-2x text-success"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-success pb-2" data-toggle="countTo" data-speed="500" data-to="{{$aduan->where('id_kategori', '=', 1)->where('status', '=', 'Complete')->count()}}">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Completed</div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>
    

    <!-- kategori 2 -->
    <div class="row invisible" data-toggle="appear">
        <!-- Row #1 -->
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow bg-dark" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix text-center">
                    <div class="font-size-h3 font-w600 text-white pb-2" data-toggle="countTo" data-speed="500" data-to="{{$aduan->where('id_kategori', '=', 2)->count()}}">0</div>
                    <div class="font-size-sm font-w600 text-light text-uppercase">Non-Infrastruktur</div>
                </div>
            </a>
        </div>
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="fa fa-clock-o fa-2x text-warning" ></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-warning pb-2"><span data-toggle="countTo" data-speed="500" data-to="{{$aduan->where('id_kategori', '=', 2)->where('status', '=', 'Rejected')->count()}}">0</span></div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Waiting</div>
                </div>
            </a>
        </div>
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="fa fa-times-circle fa-2x text-danger"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-danger pb-2" data-toggle="countTo" data-speed="500" data-to="{{$aduan->where('id_kategori', '=', 2)->where('status', '=', 'Rejected')->count()}}">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Rejected</div>
                </div>
            </a>
        </div>
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="fa fa-check fa-2x text-info"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-info pb-2" data-toggle="countTo" data-speed="500" data-to="{{$aduan->where('id_kategori', '=', 2)->where('status', '=', 'Approved')->count()}}">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Approved</div>
                </div>
            </a>
        </div>
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="fa fa-hourglass-1 fa-2x text-earth-light"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-earth-light pb-2" data-toggle="countTo" data-speed="500" data-to="{{$aduan->where('id_kategori', '=', 2)->where('status', '=', 'On process')->count()}}">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">On Process</div>
                </div>
            </a>
        </div>
        <div class="col-4 col-xl-2">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="fa fa-check-circle fa-2x text-success"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-success pb-2" data-toggle="countTo" data-speed="500" data-to="{{$aduan->where('id_kategori', '=', 2)->where('status', '=', 'Complete')->count()}}">0</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Completed</div>
                </div>
            </a>
        </div>
        <!-- END Row #1 -->
    </div>
    
    <!-- grafik -->
    {{-- <div class="row invisible" data-toggle="appear">
        <!-- Row #2 -->
        <div class="col-md-12">
            <div class="block block-rounded block-bordered">
                <div class="block-header block-header-default border-b">
                    <h3 class="block-title">
                        Total Pengaduan <small>This week</small>
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="pull-all pt-50">
                        <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                        <canvas class="js-chartjs-dashboard-lines"></canvas>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row items-push text-center">
                        <div class="col-6 col-sm-4">
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +16%
                            </div>
                            <div class="font-size-h4 font-w600">720</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <div class="font-w600 text-danger">
                                <i class="fa fa-caret-down"></i> -3%
                            </div>
                            <div class="font-size-h4 font-w600">160</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="font-w600 text-success">
                                <i class="fa fa-caret-up"></i> +9%
                            </div>
                            <div class="font-size-h4 font-w600">24.3</div>
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Average</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- END Row #2 -->
    </div> --}}
    
</div>
@endsection
@push('scripts')
    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/chartjs/Chart.bundle.min.')}}"></script>
    <script src="{{asset('assets/js/plugins/flot/jquery.flot.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/flot/jquery.flot.pie.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/flot/jquery.flot.stack.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/flot/jquery.flot.resize.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{asset('assets/js/pages/be_comp_charts.min.js')}}"></script>

    <!-- Page JS Helpers (Easy Pie Chart Plugin) -->
    <script>
        jQuery(function()
        { 
            Codebase.helpers('easy-pie-chart'); 
        });
    </script>
@endpush

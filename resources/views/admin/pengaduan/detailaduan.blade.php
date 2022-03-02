@extends('layouts_admin.master')
@section('content')
<div class="content">
    {{-- <h2 class="content-heading">Project X <small>Web Design and Development</small></h2> --}}
    <div class="block">
        <!-- Navigation -->
        <div class="block-content block-content-full border-b clearfix">
            @foreach ($aduan as $d)
            <div class="btn-group float-right" role="group">
                <button type="button" class="btn btn-secondary dropdown-toggle" id="btnGroupDrop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Forward</button>
                <div class="dropdown-menu " aria-labelledby="btnGroupDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 34px, 0px);">
                    <a class="dropdown-item" href="javascript:void(0)">
                        OPD 1
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                        OPD 2
                    </a>
                    {{-- <div class="dropdown-divider"></div> --}}
                    <a class="dropdown-item" href="javascript:void(0)">
                        OPD 3
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                        OPD 4
                    </a>
                </div>
            </div>
            <div class="btn-group float-right" role="group">
                <button type="button" class="btn btn-primary dropdown-toggle" id="btnGroupDrop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">{{$d->status}}</button>
                <div class="dropdown-menu " aria-labelledby="btnGroupDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 34px, 0px);">
                    <a class="dropdown-item" href="javascript:void(0)">
                        Approved
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                        Rejected
                    </a>
                    {{-- <div class="dropdown-divider"></div> --}}
                    <a class="dropdown-item" href="javascript:void(0)">
                        On Proccess
                    </a>
                    <a class="dropdown-item" href="javascript:void(0)">
                        Completed
                    </a>
                </div>
            </div>
            @endforeach
            <div class="btn-group float-right">
                {{-- @if ($d->a_status == 'Waiting')
                            <div class="ribbon-box bg-warning text-uppercase" style="font-size: 60%;">{{$d->a_status}}</div>
                        @else
                            @if ($d->a_status == 'Rejected')
                                <div class="ribbon-box bg-danger text-uppercase" style="font-size: 60%;">{{$d->a_status}}</div>
                            @else
                                @if ($d->a_status == 'Approved')
                                    <div class="ribbon-box bg-info text-uppercase" style="font-size: 60%;">{{$d->a_status}}</div>
                                @else
                                    <div class="ribbon-box bg-success text-uppercase" style="font-size: 60%;">{{$d->a_status}}</div>
                                @endif
                            @endif
                        @endif --}}
            </div>
            
            <a class="btn btn-secondary" href="be_pages_generic_project_list.php">
                <i class="fa fa-th-large text-primary mr-5 "></i> All Projects
            </a>
        </div>
        <!-- END Navigation -->

        <!-- Project -->
        @foreach ($aduan as $d)
        <div class="block-content block-content-full">
            <p class="text-muted m-0">{{$d->a_created_at}}<br></p>
            <div class="row py-20">
                <div class="col-sm-6 invisible" data-toggle="appear">
                    <!-- Image Slider (.js-slider class is initialized in Helpers.slick()) -->
                    <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
                    <div class="js-slider slick-nav-black slick-dotted-inner slick-dotted-white" data-dots="true" data-arrows="true">
                        <div>
                            <img class="img-fluid" src="{{ asset('upload/aduan/'.$d->bukti) }}">
                        </div>
                        {{-- <div>
                            <img class="img-fluid" src="{{ asset('upload/aduan/'.$d->bukti) }}">
                        </div>
                        <div>
                            <img class="img-fluid" src="{{ asset('upload/aduan/'.$d->bukti) }}">
                        </div> --}}
                    </div>
                    <!-- END Image Slider -->
                </div>
                <div class="col-sm-6 nice-copy">
                    <!-- Project Description -->
                    {{-- <h5>DETAIL ADUAN</h5> --}}
                    <table class="table table-striped table-borderless mt-0">
                        <tbody>
                            {{-- <tr>
                                <td class="font-w600">Nama</td>
                                <td>{{$d->name}}</td>
                            </tr> --}}
                            <tr>
                                <td class="font-w600">Kategori Aduan</td>
                                <td>{{$d->kategori}}</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Subkategori</td>
                                <td class="font-w600">{{$d->subkategori}}</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Lokasi</td>
                                <td>{{$d->alamat}}</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Kabupaten/kota</td>
                                <td>{{$d->nama_will}}</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Kecamatan</td>
                                <td>{{$d->nama_kec}}</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Kelurahan</td>
                                <td>{{$d->nama_kel}}</td>
                            </tr>
                            
                        </tbody>
                    </table>

                    {{-- <h4 class="mt-10 mb-10">Deskripsi Aduan:</h4> --}}
                    <p>
                        <b style="font-size: 110%">{{$d->name}} : </b>
                        {{$d->pesan}}
                    </p>
                    <!-- END Project Description -->
                </div>
            </div>
        </div>
        @endforeach
        <!-- END Project -->

        <!-- Key Features -->
        <div class="block-content-full border-t">
            <div class="bg-body-dark">
                <div class="content content-full">
                    <div class="row justify-content-center py-30">
                        <div class="col-lg-8">
                            <h3 class="font-w700 mb-50">Responses (5)</h3>
                            <div class="media mb-30">
                                <img class="img-avatar img-avatar48 d-flex mr-20" src="assets/media/avatars/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Melissa Rice</a> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    <div class="font-size-sm">
                                        <a class="link-effect" href="javascript:void(0)">Like</a>
                                        <span role="presentation" aria-hidden="true"> · </span>
                                        <a class="link-effect" href="javascript:void(0)">Reply</a>
                                        <span role="presentation" aria-hidden="true"> · </span>
                                        <span class="text-muted mr-5">2 days</span>
                                    </div>
                                    <div class="media my-20">
                                        <img class="img-avatar img-avatar48 d-flex mr-20" src="assets/media/avatars/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Danielle Jones</a> Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                            <div class="font-size-sm">
                                                <span class="badge badge-primary"><i class="fa fa-thumbs-up"></i> 3</span>
                                                <a class="link-effect" href="javascript:void(0)">Like</a>
                                                <span role="presentation" aria-hidden="true"> · </span>
                                                <a class="badge badge-secondary" href="javascript:void(0)"><i class="fa fa-comments"></i> 4</a>
                                                <a class="link-effect" href="javascript:void(0)">Reply</a>
                                                <span role="presentation" aria-hidden="true"> · </span>
                                                <span class="text-muted mr-5">1 day</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media my-20">
                                        <img class="img-avatar img-avatar48 d-flex mr-20" src="assets/media/avatars/avatar11.jpg" alt="">
                                        <div class="media-body">
                                            <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Thomas Riley</a> Purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                            <div class="font-size-sm">
                                                <span class="badge badge-primary mr-5"><i class="fa fa-thumbs-up"></i> 1</span>
                                                <a class="link-effect" href="javascript:void(0)">Like</a>
                                                <span role="presentation" aria-hidden="true"> · </span>
                                                <a class="link-effect" href="javascript:void(0)">Reply</a>
                                                <span role="presentation" aria-hidden="true"> · </span>
                                                <span class="text-muted mr-5">1 day</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-30">
                                <img class="img-avatar img-avatar48 d-flex mr-20" src="assets/media/avatars/avatar13.jpg" alt="">
                                <div class="media-body">
                                    <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Jeffrey Shaw</a> In gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    <div class="font-size-sm">
                                        <span class="badge badge-primary mr-5"><i class="fa fa-thumbs-up"></i> 10</span>
                                        <a class="link-effect" href="javascript:void(0)">Like</a>
                                        <span role="presentation" aria-hidden="true"> · </span>
                                        <a class="link-effect" href="javascript:void(0)">Reply</a>
                                        <span role="presentation" aria-hidden="true"> · </span>
                                        <span class="text-muted mr-5">10 hrs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-30">
                                <img class="img-avatar img-avatar48 d-flex mr-20" src="assets/media/avatars/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Susan Day</a> Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    <div class="font-size-sm">
                                        <a class="link-effect" href="javascript:void(0)">Like</a>
                                        <span role="presentation" aria-hidden="true"> · </span>
                                        <a class="link-effect" href="javascript:void(0)">Reply</a>
                                        <span role="presentation" aria-hidden="true"> · </span>
                                        <span class="text-muted mr-5">3 hrs</span>
                                    </div>
                                </div>
                            </div>
                            <div class="media mb-30">
                                <img class="img-avatar img-avatar48 d-flex mr-20" src="assets/media/avatars/avatar0.jpg" alt="">
                                <div class="media-body">
                                    <form action="be_pages_generic_story.html" method="post" onsubmit="return false;">
                                        <textarea class="form-control mb-5" rows="5" placeholder="Write a response.."></textarea>
                                        <button type="submit" class="btn btn-secondary">
                                            <i class="fa fa-reply mr-5"></i>Respond
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Key Features -->

    </div>
</div>
@endsection
@push('scripts')
    <script src="assets/js/codebase.core.min.js"></script>
    <script src="assets/js/codebase.app.min.js"></script>
    <script src="assets/js/plugins/slick/slick.min.js"></script>
    <script>
        jQuery(function(){ 
            Codebase.helpers('slick'); 
        });
    </script>
@endpush
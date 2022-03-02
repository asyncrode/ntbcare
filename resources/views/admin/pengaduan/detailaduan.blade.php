@extends('layouts_admin.master')
@section('content')
<div class="content">
    <h2 class="content-heading">Project X <small>Web Design and Development</small></h2>
    <div class="block">
        <!-- Navigation -->
        <div class="block-content block-content-full border-b clearfix">
            <div class="btn-group float-right">
                <a class="btn btn-secondary" href="javascript:void(0)">
                    <i class="fa fa-arrow-left text-primary mr-5"></i> Prev
                </a>
                <a class="btn btn-secondary" href="javascript:void(0)">
                    Next <i class="fa fa-arrow-right text-primary ml-5"></i>
                </a>
            </div>
            <a class="btn btn-secondary" href="be_pages_generic_project_list.php">
                <i class="fa fa-th-large text-primary mr-5 "></i> All Projects
            </a>
        </div>
        <!-- END Navigation -->

        <!-- Project -->
        @foreach ($aduan as $d)
        <div class="block-content block-content-full">
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

                    <!-- Project Info -->
                    <table class="table table-striped table-borderless mt-20">
                        <tbody>
                            <tr>
                                <td class="font-w600">Nama</td>
                                <td>{{$d->name}}</td>
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
                            <tr>
                                <td class="font-w600">Kategori Aduan</td>
                                <td>{{$d->kategori}}</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Subkategori</td>
                                <td>
                                    <a href="javascript:void(0)">{{$d->subkategori}}</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- END Project Info -->
                </div>
                <div class="col-sm-6 nice-copy">
                    <!-- Project Description -->
                    <h3 class="mb-10">Deskripsi Aduan:</h3>
                    {{$d->pesan}}
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
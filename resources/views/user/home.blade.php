 @extends('layouts_user.master')
 @section('content_user')
    <!-- Hero -->
    <div class="bg-image overflow-hidden" style="background-image: url('{{asset('assets/media/photos/bg-mosq.jpg')}}')">
        <div class="hero bg-white-op-90 hero-bubbles">
            <span class="hero-bubble wh-40 pos-t-5 pos-l-20 bg-primary"></span>
            <span class="hero-bubble wh-30 pos-t-5 pos-l-90 bg-success"></span>
            <span class="hero-bubble wh-20 pos-t-10 pos-l-40 bg-corporate"></span>
            <span class="hero-bubble wh-40 pos-t-20 pos-l-75 bg-pulse"></span>
            <span class="hero-bubble wh-30 pos-t-30 pos-l-10 bg-danger"></span>
            <span class="hero-bubble wh-30 pos-t-60 pos-l-25 bg-warning"></span>
            <span class="hero-bubble wh-30 pos-t-60 pos-l-75 bg-info"></span>
            <span class="hero-bubble wh-40 pos-t-80 pos-l-50 bg-flat"></span>
            <span class="hero-bubble wh-40 pos-t-75 pos-l-10 bg-earth"></span>
            <span class="hero-bubble wh-30 pos-t-90 pos-l-90 bg-elegance"></span>
            <div class="hero-inner">
                <div class="content content-full text-center">
                    {{-- <img class="invisible" data-toggle="appear" data-class="animated fadeInDown" src="{{asset('assets/media/favicons/logo2.png')}}" alt=""> --}}
                    <h1 class="display-3 font-w700 text-black mb-10 invisible" data-toggle="appear" data-class="animated fadeInDown" >
                        <img class="" src="{{asset('assets/media/favicons/favicon2.png')}}" alt="" style="max-height: 55px"><span class="text-dual-primary-dark px-0">ntb</span><span class="text-primary">care</span>
                    </h1>
                    <h2 class="font-w400 text-black-op mb-50 invisible" data-toggle="appear" data-class="animated fadeInDown" style="font-size: 130%">
                        caring society with integrity</h2>
                    <a class="btn btn-hero btn-noborder btn-rounded btn-success mr-5 mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp" href="{{route('pengaduan.index')}}">
                        <i class="fa fa-pencil-square-o mr-10"></i> Buat Pengaduan
                    </a>
                    <a class="btn btn-hero btn-noborder btn-rounded btn-primary mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp" href="javascript:void(0)">
                        <i class="fa fa-search mr-10"></i> Lacak Pengaduan
                    </a>
                    
                </div>
                <div class="text-center invisible mt-50" data-toggle="appear" data-timeout="450">
                    <span class="d-inline-block animated bounce infinite">
                        <i class="si si-arrow-down text-muted fa-2x"></i>
                    </span>
                </div>
                
            </div>
        </div>
    </div>
    <!-- END Hero -->
    
   <!-- Content #1 -->
 <div class="bg-white">
    <div class="content content-full">
        <div class="py-50 text-center">
            <h3 class="font-w700 mb-10">Title #1</h3>
            <h4 class="font-w400 text-muted mb-0">Content..</h4>
        </div>
    </div>
</div>
<!-- END Content #1 -->

<!-- Content #2 -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="py-50 text-center">
            <h3 class="font-w700 mb-10">Title #2</h3>
            <h4 class="font-w400 text-muted mb-0">Content..</h4>
        </div>
    </div>
</div>
<!-- END Content #2 -->

<!-- Content #3 -->
<div class="bg-white">
    <div class="content content-full">
        <div class="py-50 text-center">
            <h3 class="font-w700 mb-10">Title #3</h3>
            <h4 class="font-w400 text-muted mb-0">Content..</h4>
        </div>
    </div>
</div>
<!-- END Content #3 -->

<!-- Call to Action -->
<div class="bg-body-light">
    <div class="content content-full text-center">
        <div class="py-50">
            <h3 class="font-w700 mb-10">Title</h3>
            <h4 class="font-w400 text-muted mb-30">Subtitle.</h4>
            <a class="btn btn-hero btn-rounded btn-alt-primary" href="">Call to Action</a>
        </div>
    </div>
</div>
<!-- END Call to Action -->  
 @endsection
 
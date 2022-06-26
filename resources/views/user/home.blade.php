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
                <div class="content content-full text-center" style="padding: 10%">
                    {{-- <img class="invisible" data-toggle="appear" data-class="animated fadeInDown" src="{{asset('assets_user/media/favicons/ugl1.png')}}" style="max-height: 300px"> --}}
                    <div class="invisible" data-toggle="appear" data-class="animated fadeInDown">
                        <div class="js-slider slick-dotted-inner slick-dotted-white" data-dots="true" data-arrows="true" style="margin-top: 15%;display: flex; align-items:center">
                            <div style="display: flex; align-items:center">
                                <img class="img-fluid img-responsive"  src="{{asset('assets_user/media/photos/Frame 1.png')}}" > {{--height: auto; width:auto; object-fit:fill; text-align:center--}}
                            </div>
                            <div style="display: flex; align-items:center">
                                <img class="img-fluid img-responsive"  src="{{asset('assets_user/media/photos/Frame 2.png')}}" >
                            </div>
                            <div style="display: flex; align-items:center">
                                <img class="img-fluid img-responsive"  src="{{asset('assets_user/media/photos/Frame 3.png')}}" >
                            </div>
                            <div style="display: flex; align-items:center">
                                <img class="img-fluid img-responsive"  src="{{asset('assets_user/media/photos/Frame 4.png')}}" >
                            </div>
                        </div>
                    </div>
                    {{-- <h1 class="display-3 font-w700 text-black mb-10 invisible" data-toggle="appear" data-class="animated fadeInDown" >
                        <img class="" src="{{asset('assets/media/favicons/favicon2.png')}}" alt="" style="max-height: 55px"><span class="text-dual-primary-dark px-0">ntb</span><span class="text-primary">care</span>
                    </h1> --}}
                    {{-- <h2 class="font-w400 text-black-op mb-50 invisible" data-toggle="appear" data-class="animated fadeInDown" style="font-size: 130%">
                        caring society with integrity.</h2> --}}
                    <br>
                    <a class="btn btn-hero btn-noborder btn-rounded btn-success mr-5 mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp" href="{{route('pengaduan.index')}}">
                        <i class="fa fa-pencil-square-o mr-10"></i> Buat Pengaduan
                    </a>
                    <a class="btn btn-hero btn-noborder btn-rounded btn-primary mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp" href="javascript:void(0)" >
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

    <main id="main-container">
        {{-- <div class="text-center pt-30 pb-0 mb-0">  
            <h3 class="font-w700 text-dark">Untold Story</h3>
        </div> --}}
        <!-- Blog and Sidebar -->
        <div class="content pt-0 mt-0">
            <div class="row items-push py-30">
                <!-- Posts -->
                <div class="col-xl-12">
                    
                    <p class="font-w700 content-heading mt-10" data-toggle="appear" data-class="animated fadeInRight" >
                        <span><i class="fa fa-fw fa-align-left fa-1x text-dark"></i></span>
                        <span class="text-dual-primary-dark px-0" style="font-size: 150%">untold</span><span class="text-primary" style="font-size: 150%;">story</span>
                    </p>
                    <div class="row items-push js-gallery ">
                        
                        @foreach ($untold as $u)
                        @if ($u->gambar->isEmpty())

                        @else
                        {{-- {{var_dump($u->gambar)}} --}}
                            <div class="col-md-6 col-lg-3  invisible" data-toggle="appear" data-class="animated fadeInRight">
                                <div class="options-container fx-overlay-slide-down">
                                    <img class="img-fluid img-responsive options-item" src="{{ asset('upload/untold_gambar/'.$u->gambar[0]['gambar']) }}" alt="" style="height: 200px; width:100%; object-fit:fill; display:">
                                    <div class="options-overlay bg-black-op-75">
                                        <div class="options-overlay-content">
                                            <h3 class="h5 text-white mb-10">{{$u->judul}}</h3>
                                            <h4 class="h6 text-white-op mb-15">
                                                <span class="mr-15 ">
                                                    
                                                        <i class="fa fa-fw fa-calendar"></i>
                                                        <?= date('M d, Y', strtotime($u->created_at));?>
                                                    
                                                </span>
                                            </h4>
                                            <a class="btn btn-sm btn-rounded btn-noborder btn-success min-width-60 " href="{{route('user.story.detail', $u->id)}}">
                                                Read
                                            </a>
                                            {{-- <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @endforeach
                    </div>
                    
                    <nav class="clearfix push">
                        <a class="btn btn-noborder btn-rounded btn-primary mr-5 mb-10 float-right invisible" data-toggle="appear" data-class="animated fadeInLeft" href="{{route('user.story.index')}}">
                            See More
                        </a>
                    </nav>
                    <hr class="d-xl-none">
                </div>
                <!-- END Posts -->

                <!-- Sidebar -->
                <div class="col-xl-4">
                    <!-- Twitter Feed -->
                    {{-- <div class="block block-transparent">
                        <div class="block-header">
                            <h3 class="block-title text-uppercase">Twitter Feed</h3>
                            <div class="block-options">
                                <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                    <i class="si si-social-twitter mr-5"></i> Follow Us
                                </a>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="media mb-20">
                                <img class="img-avatar img-avatar32 d-flex mr-20" src="assets/media/avatars/avatar13.jpg" alt="">
                                <div class="media-body">
                                    <p class="mb-5">In gravida nulla. Nulla vel metus scelerisque ante sollicitudin. <a class="text-elegance" href="javascript:void(0)">#startup</a> <a class="text-elegance" href="javascript:void(0)">#life</a></p>
                                    <div class="font-size-sm text-muted">10 hrs ago</div>
                                </div>
                            </div>
                            <div class="media mb-20">
                                <img class="img-avatar img-avatar32 d-flex mr-20" src="assets/media/avatars/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <p class="mb-5">Vestibulum in vulputate at, tempus viverra turpis. Fusce <a href="javascript:void(0)">condimentum</a> nunc ac nisi vulputate fringilla.</p>
                                    <div class="font-size-sm text-muted">15 hrs ago</div>
                                </div>
                            </div>
                            <div class="media mb-20">
                                <img class="img-avatar img-avatar32 d-flex mr-20" src="assets/media/avatars/avatar6.jpg" alt="">
                                <div class="media-body">
                                    <p class="mb-5">In gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                                    <div class="font-size-sm text-muted">2 days ago</div>
                                </div>
                            </div>
                            <div class="media mb-20">
                                <img class="img-avatar img-avatar32 d-flex mr-20" src="assets/media/avatars/avatar16.jpg" alt="">
                                <div class="media-body">
                                    <p class="mb-5">Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum <a href="javascript:void(0)">nunc</a> ac nisi vulputate fringilla. <a class="text-elegance" href="javascript:void(0)">#web</a> <a class="text-elegance" href="javascript:void(0)">#stuff</a></p>
                                    <div class="font-size-sm text-muted">5 days ago</div>
                                </div>
                            </div>
                            <div class="media mb-20">
                                <img class="img-avatar img-avatar32 d-flex mr-20" src="assets/media/avatars/avatar8.jpg" alt="">
                                <div class="media-body">
                                    <p class="mb-5">Vestibulum in vulputate at, tempus viverra turpis. Fusce <a href="javascript:void(0)">condimentum</a> nunc ac nisi vulputate fringilla.</p>
                                    <div class="font-size-sm text-muted">1 week ago</div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- END Twitter Feed -->

                    <!-- Categories -->
                    {{-- <div class="block block-transparent">
                        <div class="block-header">
                            <h3 class="block-title text-uppercase">
                                <i class="fa fa-fw fa-list mr-5"></i> Categories
                            </h3>
                        </div>
                        <div class="block-content">
                            <ul class="nav nav-pills flex-column push">
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center justify-content-between active" href="javascript:void(0)">
                                        <span><i class="fa fa-fw fa-star mr-5"></i> News</span>
                                        <span class="badge badge-pill badge-secondary">59</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                        <span><i class="fa fa-fw fa-magic mr-5"></i> Special Offers</span>
                                        <span class="badge badge-pill badge-secondary">40</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                        <span><i class="fa fa-fw fa-briefcase mr-5"></i> Products</span>
                                        <span class="badge badge-pill badge-secondary">95</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                        <span><i class="fa fa-fw fa-pencil mr-5"></i> Tutorials</span>
                                        <span class="badge badge-pill badge-secondary">25</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                        <span><i class="fa fa-fw fa-book mr-5"></i> Guides</span>
                                        <span class="badge badge-pill badge-secondary">49</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                        <span><i class="fa fa-fw fa-newspaper-o mr-5"></i> Updates</span>
                                        <span class="badge badge-pill badge-secondary">78</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                    <!-- END Categories -->

                    <!-- Tag Cloud -->
                    {{-- <div class="block block-transparent">
                        <div class="block-header">
                            <h3 class="block-title text-uppercase">
                                <i class="fa fa-fw fa-tags mr-5"></i> Tag Cloud
                            </h3>
                        </div>
                        <div class="block-content block-content-full">
                            <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                <i class="fa fa-tag text-muted mr-5"></i>html5
                            </a>
                            <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                <i class="fa fa-tag text-muted mr-5"></i>css3
                            </a>
                            <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                <i class="fa fa-tag text-muted mr-5"></i>javascript
                            </a>
                            <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                <i class="fa fa-tag text-muted mr-5"></i>angular2
                            </a>
                            <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                <i class="fa fa-tag text-muted mr-5"></i>vuejs
                            </a>
                            <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                <i class="fa fa-tag text-muted mr-5"></i>react
                            </a>
                            <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                <i class="fa fa-tag text-muted mr-5"></i>php
                            </a>
                            <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                <i class="fa fa-tag text-muted mr-5"></i>ruby
                            </a>
                            <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                <i class="fa fa-tag text-muted mr-5"></i>jquery
                            </a>
                            <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                <i class="fa fa-tag text-muted mr-5"></i>modern
                            </a>
                            <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                <i class="fa fa-tag text-muted mr-5"></i>dashboard
                            </a>
                            <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                <i class="fa fa-tag text-muted mr-5"></i>themes
                            </a>
                            <a class="btn btn-sm btn-alt-secondary mb-5" href="javascript:void(0)">
                                <i class="fa fa-tag text-muted mr-5"></i>freebies
                            </a>
                        </div>
                    </div> --}}
                    <!-- END Tag Cloud -->
                </div>
                <!-- END Sidebar -->
            </div>
        </div>
        <!-- END Blog and Sidebar -->
    </main>  
 @endsection
 @push('scripts')
    <link rel="stylesheet" href="{{asset('assets_user/js/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets_user/js/plugins/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets_user/js/core/jquery.min.js')}}">
    <link rel="stylesheet" href="{{asset('assets_user/js/plugins/magnific-popup/magnific-popup.css')}}">


    

    <script src="{{asset('assets_user/js/codebase.core.min.js')}}"></script>

    <!--
        Codebase JS

        Custom functionality including Blocks/Layout API as well as other vital and optional helpers
        webpack is putting everything together at assets/_es6/main/app.js
    -->
    <script src="{{asset('assets_user/js/codebase.app.min.js')}}"></script>
    <script src="{{asset('assets_user/js/plugins/slick/slick.min.js')}}"></script>
    <script src="{{asset('assets_user/js/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{asset('assets_user/js/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Page JS Helpers (Magnific Popup plugin) -->
    <script>jQuery(function(){ Codebase.helpers('magnific-popup'); });</script>
    {{-- <script>
        jQuery(
            function()
            { 
                Codebase.helpers('slick'); 
            });
    </script> --}}
    <script type="text/javascript">
        
        $('.js-slider').slick({
            dots: true,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            // centerMode: true,
            // centerPadding: '160px',
            // variableWidth: true, 
            // adaptiveHeight: true
        });
        
    </script>
 @endpush
 
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

    <main id="main-container">
        {{-- <div class="text-center pt-30 pb-0 mb-0">  
            <h3 class="font-w700 text-dark">Untold Story</h3>
        </div> --}}
        <!-- Blog and Sidebar -->
        <div class="content pt-0 mt-0">
            <div class="row items-push py-30">
                <!-- Posts -->
                <div class="col-xl-12">
                    {{-- <div class="mb-50">
                        <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                            <a class="img-link" href="be_pages_generic_story.html">
                                <img class="img-fluid" src="assets/media/photos/photo3@2x.jpg" alt="">
                            </a>
                        </div>
                        <h3 class="h4 font-w700 text-uppercase mb-5">The new version is now live!</h3>
                        <div class="text-muted mb-10">
                            <span class="mr-15">
                                <i class="fa fa-fw fa-calendar mr-5"></i>July 16, 2017
                            </span>
                            <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                <i class="fa fa-fw fa-user mr-5"></i>John Smith
                            </a>
                            <a class="text-muted" href="javascript:void(0)">
                                <i class="fa fa-fw fa-tag mr-5"></i>News
                            </a>
                        </div>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <a class="link-effect font-w600" href="be_pages_generic_story.html">Read More..</a>
                    </div>
                    <div class="mb-50">
                        <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                            <a class="img-link" href="be_pages_generic_story.html">
                                <img class="img-fluid" src="assets/media/photos/photo7@2x.jpg" alt="">
                            </a>
                        </div>
                        <h3 class="h4 font-w700 text-uppercase mb-5">How to work from home more efficiently</h3>
                        <div class="text-muted mb-10">
                            <span class="mr-15">
                                <i class="fa fa-fw fa-calendar mr-5"></i>July 10, 2017
                            </span>
                            <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                <i class="fa fa-fw fa-user mr-5"></i>John Smith
                            </a>
                            <a class="text-muted" href="javascript:void(0)">
                                <i class="fa fa-fw fa-tag mr-5"></i>Inpiration
                            </a>
                        </div>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <a class="link-effect font-w600" href="be_pages_generic_story.html">Read More..</a>
                    </div>
                    <div class="mb-50">
                        <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                            <a class="img-link" href="be_pages_generic_story.html">
                                <img class="img-fluid" src="assets/media/photos/photo28@2x.jpg" alt="">
                            </a>
                        </div>
                        <h3 class="h4 font-w700 text-uppercase mb-5">Travel the world and feel alive</h3>
                        <div class="text-muted mb-10">
                            <span class="mr-15">
                                <i class="fa fa-fw fa-calendar mr-5"></i>July 5, 2017
                            </span>
                            <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                <i class="fa fa-fw fa-user mr-5"></i>John Smith
                            </a>
                            <a class="text-muted" href="javascript:void(0)">
                                <i class="fa fa-fw fa-tag mr-5"></i>Travel
                            </a>
                        </div>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <a class="link-effect font-w600" href="be_pages_generic_story.html">Read More..</a>
                    </div>
                    <div class="mb-50">
                        <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                            <a class="img-link" href="be_pages_generic_story.html">
                                <img class="img-fluid" src="assets/media/photos/photo30@2x.jpg" alt="">
                            </a>
                        </div>
                        <h3 class="h4 font-w700 text-uppercase mb-5">Believe in your dreams and start working</h3>
                        <div class="text-muted mb-10">
                            <span class="mr-15">
                                <i class="fa fa-fw fa-calendar mr-5"></i>July 1, 2017
                            </span>
                            <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                <i class="fa fa-fw fa-user mr-5"></i>John Smith
                            </a>
                            <a class="text-muted" href="javascript:void(0)">
                                <i class="fa fa-fw fa-tag mr-5"></i>Motivation
                            </a>
                        </div>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <a class="link-effect font-w600" href="be_pages_generic_story.html">Read More..</a>
                    </div> --}}

                    <h2 class="font-w700 content-heading mt-10" data-toggle="appear" data-class="animated fadeInRight" style="font-size: 190%"><span class="text-dual-primary-dark px-0">untold</span><span class="text-primary">story</span></h2>
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
                        
                        {{-- <div class="col-md-6 col-lg-4  animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="assets/media/photos/photo15.jpg" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="assets/media/photos/photo15@2x.jpg">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4  animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="assets/media/photos/photo14.jpg" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="assets/media/photos/photo14@2x.jpg">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4  animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="assets/media/photos/photo13.jpg" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="assets/media/photos/photo13@2x.jpg">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4  animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="assets/media/photos/photo12.jpg" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="assets/media/photos/photo12@2x.jpg">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4  animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="assets/media/photos/photo11.jpg" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="assets/media/photos/photo11@2x.jpg">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4  animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="assets/media/photos/photo10.jpg" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="assets/media/photos/photo10@2x.jpg">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4  animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="assets/media/photos/photo9.jpg" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="assets/media/photos/photo9@2x.jpg">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4  animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="assets/media/photos/photo8.jpg" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="assets/media/photos/photo8@2x.jpg">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4  animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="assets/media/photos/photo7.jpg" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="assets/media/photos/photo7@2x.jpg">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4  animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="assets/media/photos/photo6.jpg" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="assets/media/photos/photo6@2x.jpg">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4  animated fadeIn">
                            <div class="options-container fx-item-zoom-in fx-overlay-slide-down">
                                <img class="img-fluid options-item" src="assets/media/photos/photo5.jpg" alt="">
                                <div class="options-overlay bg-black-op-75">
                                    <div class="options-overlay-content">
                                        <h3 class="h4 text-white mb-5">Image</h3>
                                        <h4 class="h6 text-white-op mb-15">More Details</h4>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-primary min-width-75 img-lightbox" href="assets/media/photos/photo5@2x.jpg">
                                            <i class="fa fa-search-plus"></i> View
                                        </a>
                                        <a class="btn btn-sm btn-rounded btn-noborder btn-alt-success min-width-75" href="javascript:void(0)"><i class="fa fa-pencil"></i> Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    
                    <nav class="clearfix push">
                        {{-- <a class="btn btn-secondary min-width-100 float-right" href="{{route('user.story.index')}}">
                            See More
                        </a> --}}
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

        <!-- Inspiring Quotes -->

        {{-- <div class="bg-body-dark">
            <div class="content content-full text-center">
                <div class="py-30 invisible" data-toggle="appear">
                    <!-- Quotes Slider (.js-slider class is initialized in Helpers.slick()) -->
                    <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
                    <div class="js-slider slick-nav-black" data-autoplay="true" data-autoplay-speed="6000">
                        <div>
                            <div class="h3 font-w700 mb-10">&ldquo; Strive not to be a success, but rather to be of value &rdquo;</div>
                            <div class="h4 font-w400 text-muted"><em>Albert Einstein</em></div>
                        </div>
                        <div>
                            <div class="h3 font-w700 mb-10">&ldquo; Success is where preparation and opportunity meet &rdquo;</div>
                            <div class="h4 font-w400 text-muted"><em>Bobby Unser</em></div>
                        </div>
                        <div>
                            <div class="h3 font-w700 mb-10">&ldquo; Life is really simple, but we insist on making it complicated &rdquo;</div>
                            <div class="h4 font-w400 text-muted"><em>Confucius</em></div>
                        </div>
                    </div>
                    <!-- END Quotes Slider -->
                </div>
            </div>
        </div> --}}

        <!-- END Inspiring Quotes -->

    </main>
    
<!-- Content #1 -->
{{-- <div class="bg-white">
    <div class="content content-full">
        <div class="py-50 text-center">
            <h3 class="font-w700 mb-10">Title #1</h3>
            <h4 class="font-w400 text-muted mb-0">Content..</h4>
        </div>
    </div>
</div> --}}
<!-- END Content #1 -->

<!-- Content #2 -->
{{-- <div class="bg-body-light">
    <div class="content content-full">
        <div class="py-50 text-center">
            <h3 class="font-w700 mb-10">Title #2</h3>
            <h4 class="font-w400 text-muted mb-0">Content..</h4>
        </div>
    </div>
</div> --}}
<!-- END Content #2 -->

<!-- Content #3 -->
{{-- <div class="bg-white">
    <div class="content content-full">
        <div class="py-50 text-center">
            <h3 class="font-w700 mb-10">Title #3</h3>
            <h4 class="font-w400 text-muted mb-0">Content..</h4>
        </div>
    </div>
</div> --}}
<!-- END Content #3 -->

<!-- Call to Action -->
{{-- <div class="bg-body-light">
    <div class="content content-full text-center">
        <div class="py-50">
            <h3 class="font-w700 mb-10">Title</h3>
            <h4 class="font-w400 text-muted mb-30">Subtitle.</h4>
            <a class="btn btn-hero btn-rounded btn-alt-primary" href="">Call to Action</a>
        </div>
    </div>
</div> --}}
<!-- END Call to Action -->  
 @endsection
 @push('scripts')
    <script src="assets/js/codebase.core.min.js"></script>

    <!--
        Codebase JS

        Custom functionality including Blocks/Layout API as well as other vital and optional helpers
        webpack is putting everything together at assets/_es6/main/app.js
    -->
    <script src="assets/js/codebase.app.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Page JS Helpers (Magnific Popup plugin) -->
    <script>jQuery(function(){ Codebase.helpers('magnific-popup'); });</script>
 @endpush
 
@extends('layouts_user.master')
@section('content_user')

    <!-- Main Container -->
    <main id="main-container">

        <!-- Hero -->
        <div class="bg-image overflow-hidden" style="background-image: url('{{asset("assets/media/photos/banner.png")}}');">
            <div class="bg-black-op-25" >
                <div class="content content-top text-center">
                    <div class="py-50">
                        <h1 class="font-w700 text-light mb-10">Untold Story</h1>
                        <h2 class="h4 font-w400 text-white-op">The NTB Care's success story.</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Blog and Sidebar -->
        <div class="content">
            <div class="row items-push py-30">
                <!-- Posts -->
                <div class="col-xl-8">
                    <!-- content -->
                    <div class="mb-50">
                        <div class="overflow-hidden rounded mb-20" style="height: 200px;">
                            <a class="img-link" href="javascript:void(0)">
                                <img class="img-fluid" src="{{asset('assets/media/photos/photo7@2x.jpg')}}" alt="">
                            </a>
                        </div>
                        <h3 class="h4 font-w700 text-uppercase mb-5">How to work from home more efficiently</h3>
                        <div class="text-muted mb-10">
                            <span class="mr-15">
                                <i class="fa fa-fw fa-calendar mr-5"></i>July 10, 2017
                            </span>
                            {{-- <a class="text-muted mr-15" href="be_pages_generic_profile.html">
                                <i class="fa fa-fw fa-user mr-5"></i>John Smith
                            </a> --}}
                            {{-- <a class="text-muted" href="javascript:void(0)">
                                <i class="fa fa-fw fa-tag mr-5"></i>Inpiration
                            </a> --}}
                        </div>
                        <p>
                            <!--shortDesc-->
                            Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.
                        </p>
                        <a class="link-effect font-w600" href="{{route('user.story.detail')}}">
                            Read More..
                        </a>
                    </div>
                    <!-- endContent -->
                    <nav class="clearfix push">
                        <a class="btn btn-secondary min-width-100 float-right" href="javascript:void(0)">
                            Next <i class="fa fa-arrow-right ml-5"></i>
                        </a>
                        <a class="btn btn-secondary min-width-100 float-left" href="javascript:void(0)">
                            <i class="fa fa-arrow-left mr-5"></i> Prev
                        </a>
                    </nav>
                    <hr class="d-xl-none">
                </div>
                <!-- END Posts -->

                <!-- Sidebar -->
                <div class="col-xl-4">
                    <!-- Twitter Feed -->
                    <div class="block block-transparent">
                        <div class="block-header">
                            <h3 class="block-title text-uppercase">Testimony</h3>
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
                    </div>
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
    <!-- END Main Container -->

    


@endsection
@push('scripts')
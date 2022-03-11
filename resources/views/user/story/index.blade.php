@extends('layouts_user.master')
@section('content_user')

<!-- Main Container -->
<main id="main-container">

    <!-- Hero -->
    <div class="bg-image overflow-hidden" style="background-image: url('{{asset("
        assets/media/photos/banner.jpg")}}');">
        <div class="bg-black-op-90">
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
            <div class="col-xl-8">
                <div class=" mb-50 invisible" data-toggle="appear" data-class="animated fadeInLeft">
                    <div class="header header-default mb-20">
                        <h3 class="block-title"><i class="fa fa-play fa-fw text-primary"></i> Videos</h3>
                    </div>
                    <div class="js-slider slick-nav-white slick-nav-hover" data-dots="true" data-arrows="true">
                        @foreach ($video as $v)
                        <div class="embed-responsive embed-responsive-16by9 fx-overlay-slide-top">
                            <video class="img-fluid" min-width="320" min-height="240" controls>
                                <source src="{{ asset('upload/untold_video/'.$v->video[0]['video']) }}"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>


                            <div class="options-overlay bg-black-op">
                                <div class="options-overlay-content">
                                    <h3 class="h4 text-white mb-5 ml-5">{{$v->judul}}</h3>
                                    <h4 class="h6 text-white-op mb-15 ml-5">{!!$v->shortdesc!!}</h4>
                                </div>
                            </div>

                        </div>

                        @endforeach
                        {{-- <div class="d-flex justify-content-center">
                            <img class="img-fluid" src="assets/media/photos/photo14.jpg" alt="">
                        </div>
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid" src="assets/media/photos/photo24.jpg" alt="">
                        </div> --}}
                    </div>
                </div>
                <!-- content -->
                <div class="header header-default mb-20">
                    <h3 class="block-title"><i class="fa fa-play fa-fw text-primary"></i> Stories</h3>
                </div>
                @foreach ($untold as $g)
                @if ($g->gambar->isEmpty())

                @else
                <div class="mb-50 ">

                    <div class="overflow-hidden rounded mb-20 d-flex " style="max-height: 300px;">
                        <a class="img-link invisible" data-toggle="appear" data-class="animated fadeInUp"
                            href="javascript:void(0)">
                            <img class="img-fluid" src="{{ asset('upload/untold_gambar/'.$g->gambar[0]['gambar']) }}"
                                alt="">
                        </a>
                    </div>
                    <h3 class="h4 font-w700 text-uppercase mb-5 invisible" data-toggle="appear"
                        data-class="animated fadeInUp">{{$g->judul}}</h3>
                    <div class="text-muted mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">
                        <span class="mr-15 ">
                            <i class="fa fa-fw fa-calendar mr-5"></i>
                            <?= date('M d, Y', strtotime($g->created_at));?>
                        </span>

                        {{-- <a class="text-muted" href="javascript:void(0)">
                            <i class="fa fa-fw fa-tag mr-5"></i>Inpiration
                        </a> --}}
                    </div>
                    <p>
                        <!--shortDesc-->
                        {!!Str::limit($g->description, 500)!!}
                    </p>
                    <a class="link-effect font-w600" href="{{route('user.story.detail', $g->id)}}">
                        Read More..
                    </a>
                </div>
                @endif
                @endforeach
                <!-- endContent -->
                <nav class="clearfix push">
                    
                    <a class="btn btn-secondary min-width-100 float-right" href="{{$untold->nextPageUrl()}}">
                        Next <i class="fa fa-arrow-right ml-5"></i>
                    </a>
                    <a class="btn btn-secondary min-width-100 float-left" href="{{$untold->previousPageUrl()}}">
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
                            {{-- <a class="btn btn-sm btn-alt-secondary" href="javascript:void(0)">
                                <i class="si si-social-twitter mr-5"></i> Follow Us
                            </a> --}}
                            <a href="https://twitter.com/intent/tweet?button_hashtag=ntbcare&ref_src=twsrc%5Etfw"
                                class="twitter-hashtag-button" data-show-count="true">Tweet #movie</a>
                        </div>
                    </div>
                    <div class="block-content">
                        {{-- <div class="media mb-20">
                            <img class="img-avatar img-avatar32 d-flex mr-20" src="assets/media/avatars/avatar13.jpg"
                                alt="">
                            <div class="media-body">
                                <p class="mb-5">In gravida nulla. Nulla vel metus scelerisque ante sollicitudin. <a
                                        class="text-elegance" href="javascript:void(0)">#startup</a> <a
                                        class="text-elegance" href="javascript:void(0)">#life</a></p>
                                <div class="font-size-sm text-muted">10 hrs ago</div>
                            </div>
                        </div>
                        <div class="media mb-20">
                            <img class="img-avatar img-avatar32 d-flex mr-20" src="assets/media/avatars/avatar5.jpg"
                                alt="">
                            <div class="media-body">
                                <p class="mb-5">Vestibulum in vulputate at, tempus viverra turpis. Fusce <a
                                        href="javascript:void(0)">condimentum</a> nunc ac nisi vulputate fringilla.</p>
                                <div class="font-size-sm text-muted">15 hrs ago</div>
                            </div>
                        </div>
                        <div class="media mb-20">
                            <img class="img-avatar img-avatar32 d-flex mr-20" src="assets/media/avatars/avatar6.jpg"
                                alt="">
                            <div class="media-body">
                                <p class="mb-5">In gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
                                <div class="font-size-sm text-muted">2 days ago</div>
                            </div>
                        </div>
                        <div class="media mb-20">
                            <img class="img-avatar img-avatar32 d-flex mr-20" src="assets/media/avatars/avatar16.jpg"
                                alt="">
                            <div class="media-body">
                                <p class="mb-5">Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum <a
                                        href="javascript:void(0)">nunc</a> ac nisi vulputate fringilla. <a
                                        class="text-elegance" href="javascript:void(0)">#web</a> <a
                                        class="text-elegance" href="javascript:void(0)">#stuff</a></p>
                                <div class="font-size-sm text-muted">5 days ago</div>
                            </div>
                        </div>
                        <div class="media mb-20">
                            <img class="img-avatar img-avatar32 d-flex mr-20" src="assets/media/avatars/avatar8.jpg"
                                alt="">
                            <div class="media-body">
                                <p class="mb-5">Vestibulum in vulputate at, tempus viverra turpis. Fusce <a
                                        href="javascript:void(0)">condimentum</a> nunc ac nisi vulputate fringilla.</p>
                                <div class="font-size-sm text-muted">1 week ago</div>
                            </div>
                        </div> --}}

                        {{-- <a href="https://twitter.com/intent/tweet?button_hashtag=ntbcare&ref_src=twsrc%5Etfw"
                            class="twitter-hashtag-button" data-show-count="true">Tweet #movie</a> --}}

                        {{-- <iframe
                            src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2F20531316728%2Fposts%2F10154009990506729%2F&width=500&show_text=true&height=274&appId"
                            width="500" height="274" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                        --}}

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
                                <a class="nav-link d-flex align-items-center justify-content-between active"
                                    href="javascript:void(0)">
                                    <span><i class="fa fa-fw fa-star mr-5"></i> News</span>
                                    <span class="badge badge-pill badge-secondary">59</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span><i class="fa fa-fw fa-magic mr-5"></i> Special Offers</span>
                                    <span class="badge badge-pill badge-secondary">40</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span><i class="fa fa-fw fa-briefcase mr-5"></i> Products</span>
                                    <span class="badge badge-pill badge-secondary">95</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span><i class="fa fa-fw fa-pencil mr-5"></i> Tutorials</span>
                                    <span class="badge badge-pill badge-secondary">25</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
                                    <span><i class="fa fa-fw fa-book mr-5"></i> Guides</span>
                                    <span class="badge badge-pill badge-secondary">49</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center justify-content-between"
                                    href="javascript:void(0)">
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
@include('user.story.javascript')
@endpush
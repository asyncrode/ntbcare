@extends('layouts_user.master')
@section('content_user')
<main id="main-container ">

    <!-- Hero -->
    <div class="bg-image" style="background-image: url('{{asset("assets_user/media/photos/photo7@2x.jpg")}}');">
        <div class="bg-black-op-75">
            <div class="content content-top text-center">
                <div class="py-100">
                    
                    <h1 class="font-w700 text-white mb-10">{{$detail->judul}}</h1>
                    
                    {{-- <h2 class="h4 font-w400 text-white-op">Explore the world and provide value at the same time.</h2> --}}
                    <div class="font-size-md text-muted">
                        {{-- <a class="text-body-bg-dark" href="be_pages_generic_profile.html">John Smith</a> &bull; June 5, 2017 --}}
                        <span class="mr-15">
                            <i class="fa fa-fw fa-calendar mr-5"></i><?= date('M d, Y', strtotime($detail->created_at)); ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Story -->
    <div class="content content-full nice-copy-story">
        <div class="row justify-content-center py-30">
            <div class="col-lg-8">
                <!-- Image -->
                <div class="row no-gutters push js-gallery img-fluid-100 justify-content-center">
                    {{-- @foreach ($untold as $p)
                    @if ($p->gambar->isEmpty())

                    @else --}}
                    <div class="animated fadeIn text-center">
                        <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="{{ asset('upload/untold_gambar/'.$detail->gambar[0]['gambar']) }}">
                            <img class="img-fluid" src="{{ asset('upload/untold_gambar/'.$detail->gambar[0]['gambar']) }}" alt="">
                        </a>
                    </div>
                    {{-- @endif
                    @endforeach --}}
                    {{-- <div class="col-4 animated fadeIn">
                        <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="assets/media/photos/photo33@2x.jpg">
                            <img class="img-fluid" src="assets/media/photos/photo33.jpg" alt="">
                        </a>
                    </div> --}}
                </div>
                <p>
                    {!!$detail->description!!}
                </p>
            </div>
        </div>
        <div class="row justify-content-center py-30">
            <div class="col-lg-8 clearfix">
                <button type="button" class="btn btn-rounded btn-secondary float-right">
                    <i class="fa fa-share-alt text-primary mr-5 "></i> Share
                </button>
                <button type="button" class="btn btn-rounded btn-secondary mr-5">
                    <i class="fa fa-heart text-danger mr-5 "></i> Reccomend
                </button>
            </div>
        </div>
        <div class="content">
        <h2 class="content-heading border-t pt-10 ">Baca <small>Untold Story lainnya</small></h2>
        <div class="row ">
            <!-- Row #1 -->
            @foreach ($untold as $g)
            @if ($g->gambar->isEmpty())

            @else
            <div class="col-md-6 col-xl-4">
                <a class="block block-transparent border-left border-5x border-primary bg-image img-fluid" style="background-image: url('{{ asset('upload/untold_gambar/'.$g->gambar[0]['gambar']) }}');" href="{{route('user.story.detail', $g->id)}}; height: 200px; width:100%; object-fit:fill;"> 
                    <div class="block-content block-content-full bg-black-op">
                        <div class="pt-100">
                            <h3 class="h4 text-white font-w700 mb-10">{{$g->judul}}</h3>
                            <h4 class="text-white-op font-size-default mb-0">
                                <span class="mr-10">
                                    <i class="fa fa-clock-o"></i> <?= date('M d, Y', strtotime($g->created_at));?>
                                </span>
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
            @endif

            @endforeach
            {{-- <div class="col-md-6 col-xl-4">
                <a class="block block-transparent border-left border-5x border-success bg-image" style="background-image: url('assets/media/photos/photo26.jpg');" href="javascript:void(0)">
                    <div class="block-content block-content-full bg-black-op">
                        <div class="pt-100">
                            <h3 class="h4 text-white font-w700 mb-10">The most happy cities in the world</h3>
                            <h4 class="text-white-op font-size-default mb-0">
                                <span class="mr-10">
                                    <i class="fa fa-clock-o"></i> 12 min
                                </span>
                                <span>
                                    <i class="fa fa-comments-o"></i> 132
                                </span>
                            </h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-4">
                <a class="block block-transparent border-left border-5x border-danger bg-image" style="background-image: url('assets/media/photos/photo28.jpg');" href="javascript:void(0)">
                    <div class="block-content block-content-full bg-black-op">
                        <div class="pt-100">
                            <h3 class="h4 text-white font-w700 mb-10">Learn Laravel in one week the easy way</h3>
                            <h4 class="text-white-op font-size-default mb-0">
                                <span class="mr-10">
                                    <i class="fa fa-clock-o"></i> 20 min
                                </span>
                                <span>
                                    <i class="fa fa-comments-o"></i> 420
                                </span>
                            </h4>
                        </div>
                    </div>
                </a>
            </div> --}}
        </div>
        </div>   
    </div>
    <!-- END Story -->

</main>
@endsection
@push('scripts')
@include('user.story.javascript')
@endpush
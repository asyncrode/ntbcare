@extends('layouts_admin.master')
@section('content')
<div class="content content-full">
    <!-- Images Filtering -->
    <h2 class="content-heading">List Pengaduan <small></small></h2>

    <!-- Project Filtering (.js-filter class is initialized in Helpers.contentFilter()) -->
    <!-- If data-numbers="true" is added, then the number of the items of each category will be auto added to each category link -->
    @hasrole('super-admin')
    <div class="js-filter">
        <!-- Navigation -->
        <div class="p-10 bg-white push">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-category-link="all">
                        <i class="fa fa-fw fa-th-large mr-5"></i> All
                    </a>
                </li>
                @foreach ($kategori as $k)
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link={{$k->id}}>
                        <i class="fa fa-fw fa-th"></i> {{$k->kategori}}
                    </a>
                </li>
                @endforeach
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="2">
                        <i class="fa fa-fw fa-briefcase mr-5"></i> Test
                    </a>
                </li> --}}

            </ul>
        </div>
        <!-- END Navigation -->

        <!-- Projects -->
        <div class="row row-deck" >
            
            @foreach ($aduan as $d)
            <div class="col-sm-4" data-category="{{$d->id_kategori}}">
                <a class="block block-link-pop " href="{{route('pengaduan.detailaduan',$d->id)}}">
                    
                    <div class="block-header block-header-default pb-0 ribbon ribbon-info">
                        <h3 class=" block-title">
                            {{$d->user->name}}
                        </h3>
                        {{-- <div class="block-options text-center">
                            <button type="button" class="btn-block-option" >
                                <i class="si si-action-redo"></i>
                            </button>
                        </div> --}}
                        {{-- <div class="ribbon-box bg-primary text-uppercase" style="font-size: 50%;">{{$d->kategori}}</div> --}}
                        @if ($d->status == 'Waiting')
                            <div class="ribbon-box bg-warning text-uppercase" style="font-size: 70%;"><i class="fa fa-fw fa-clock-o"></i> {{$d->status}}</div>
                        @else
                            @if ($d->status == 'Rejected')
                                <div class="ribbon-box bg-danger text-uppercase" style="font-size: 70%;"><i class="fa fa-fw fa-times-circle"></i> {{$d->status}}</div>
                            @else
                                @if ($d->status == 'Approved')
                                    <div class="ribbon-box bg-info text-uppercase" style="font-size: 70%;"><i class="fa fa-fw fa-check"></i> {{$d->status}}</div>
                                @else
                                    @if ($d->status == 'On process')
                                        <div class="ribbon-box bg-success text-uppercase" style="font-size: 70%;"><i class="fa fa-fw fa-hourglass-1"></i> {{$d->status}}</div>    
                                    @else
                                        <div class="ribbon-box bg-success text-uppercase" style="font-size: 70%;"><i class="fa fa-fw fa-check-circle"></i> {{$d->status}}</div>    
                                    @endif
                                    @endif
                            @endif
                        @endif
                    </div>
                    <div class="block-header block-header-default pt-0">
                        <p class="m-0">
                            <span class="text-muted">{{$d->wilayah->nama_will}}</span> <br>
                            <span class="badge badge-dark"><i class="fa fa-fw fa-tags " style="color: beige"></i> {{$d->sub->subkategori}}</span><br>
                        </p>
                    </div>
                    {{-- <div class="block-content ">
                        
                    </div> --}}
                    <div class="block-content">
                        <img class="p-0 img-fluid img-thumb" src="{{ asset('upload/aduan/'.$d->bukti) }}" alt="">
                        <p class="mb-10 mt-10">
                            {{$d->pesan}} <br> <br>
                            <span class="text-muted text-left"><small> <?= date('l, d-M-Y \a\t h:i A', strtotime($d->created_at)); ?></small></span>

                        </p>
                        <div class="block-options text-right mb-20">
                            
                            <button type="button" class="btn-block-option" >
                                <i class="si si-action-redo"></i> 1
                            </button>
                            <button type="button" class="btn-block-option" >
                                <i class="si si-bubble"></i> 3
                            </button>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        {{-- <div class="row items-push img-fluid-100">
            @foreach ($aduan as $d)

            <div class="col-sm-6 col-md-3" data-category="{{$d->id_kategori}}">
                <a class="block block-link-pop" href="javascript:void(0)">
                    <div class="block-header">
                        <h3 class="block-title">Title</h3>
                    </div>
                    <div class="block-content">
                        <img class="img-fluid img-thumb" src="{{ asset('upload/aduan/'.$d->bukti) }}"
                            alt="Project 12 Promo">
                    </div>
                </a>
            </div>
            @endforeach
            <div class="col-sm-6 col-md-3" data-category="2">
                <a class="img-link" href="be_pages_generic_project.html">
                    <img class="img-fluid img-thumb" src="assets/media/various/cb-project-promo3.png"
                        alt="Project 12 Promo">
                </a>
            </div>
        </div> --}}


        <!-- END Projects -->

        <!-- Quick Stats -->
        <!-- CountTo ([data-toggle="countTo"] is initialized in Helpers.coreAppearCountTo()) -->
        <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
        <div class="bg-white push">
            <div class="row text-center">
                <div class="col-sm-4 py-30">
                    <div class="font-size-h1 font-w700 text-black" data-toggle="countTo" data-to="3">0</div>
                    <div class="font-w600 text-muted text-uppercase">Approved</div>
                </div>
                <div class="col-sm-4 py-30">
                    <div class="font-size-h1 font-w700 text-black" data-toggle="countTo" data-to="12">0</div>
                    <div class="font-w600 text-muted text-uppercase">On Process</div>
                </div>
                <div class="col-sm-4 py-30">
                    <div class="font-size-h1 font-w700 text-black" data-toggle="countTo" data-to="9">0</div>
                    <div class="font-w600 text-muted text-uppercase">Completed</div>
                </div>
            </div>
        </div>
        <!-- END Quick Stats -->
    </div>
    @else
    <div class="js-filter">
        <!-- Navigation -->
        <div class="p-10 bg-white push">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-category-link="all">
                        <i class="fa fa-fw fa-th-large mr-5"></i> All
                    </a>
                </li>
                @foreach ($sub as $k)
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link={{$k->id}}>
                        <i class="fa fa-fw fa-th"></i> {{$k->subkategori}}
                    </a>
                </li>
                @endforeach
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link="2">
                        <i class="fa fa-fw fa-briefcase mr-5"></i> Test
                    </a>
                </li> --}}

            </ul>
        </div>
        <!-- END Navigation -->

        <!-- Projects -->
        <div class="row row-deck" >
            
            @foreach ($aduan as $d)
            <div class="col-sm-4" data-category="{{$d->id_subkategori}}">
                <a class="block block-link-pop " href="{{route('pengaduan.detailaduan',$d->id)}}">
                    
                    <div class="block-header block-header-default pb-0 ribbon ribbon-info">
                        <h3 class=" block-title">
                            {{$d->user->name}}
                        </h3>
                        
                        @if ($d->status == 'Waiting')
                            <div class="ribbon-box bg-warning text-uppercase" style="font-size: 70%;"><i class="fa fa-fw fa-clock-o"></i> {{$d->status}}</div>
                        @else
                            @if ($d->status == 'Rejected')
                                <div class="ribbon-box bg-danger text-uppercase" style="font-size: 70%;"><i class="fa fa-fw fa-times-circle"></i> {{$d->status}}</div>
                            @else
                                @if ($d->status == 'Approved')
                                    <div class="ribbon-box bg-info text-uppercase" style="font-size: 70%;"><i class="fa fa-fw fa-check"></i> {{$d->status}}</div>
                                @else
                                    @if ($d->status == 'On process')
                                        <div class="ribbon-box bg-success text-uppercase" style="font-size: 70%;"><i class="fa fa-fw fa-hourglass-1"></i> {{$d->status}}</div>    
                                    @else
                                        <div class="ribbon-box bg-success text-uppercase" style="font-size: 70%;"><i class="fa fa-fw fa-check-circle"></i> {{$d->status}}</div>    
                                    @endif
                                    @endif
                            @endif
                        @endif
                    </div>
                    <div class="block-header block-header-default pt-0">
                        <p class="m-0">
                            <span class="text-muted">{{$d->wilayah->nama_will}}</span> <br>
                            <span class="badge badge-dark"><i class="fa fa-fw fa-tags " style="color: beige"></i> {{$d->sub->subkategori}}</span><br>
                        </p>
                    </div>
                    {{-- <div class="block-content ">
                        
                    </div> --}}
                    <div class="block-content">
                        <img class="p-0 img-fluid img-thumb" src="{{ asset('upload/aduan/'.$d->bukti) }}"
                            alt="Project 12 Promo">
                        <p class="mb-10 mt-10">
                            {{$d->pesan}} <br> <br>
                            <span class="text-muted text-left"><small> <?= date('l, d-M-Y \a\t h:i A', strtotime($d->created_at)); ?></small></span>

                        </p>
                        <div class="block-options text-right mb-20">
                            
                            <button type="button" class="btn-block-option" >
                                <i class="si si-action-redo"></i> 1
                            </button>
                            <button type="button" class="btn-block-option" >
                                <i class="si si-bubble"></i> 3
                            </button>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        {{-- <div class="row items-push img-fluid-100">
            @foreach ($aduan as $d)

            <div class="col-sm-6 col-md-3" data-category="{{$d->id_kategori}}">
                <a class="block block-link-pop" href="javascript:void(0)">
                    <div class="block-header">
                        <h3 class="block-title">Title</h3>
                    </div>
                    <div class="block-content">
                        <img class="img-fluid img-thumb" src="{{ asset('upload/aduan/'.$d->bukti) }}"
                            alt="Project 12 Promo">
                    </div>
                </a>
            </div>
            @endforeach
            <div class="col-sm-6 col-md-3" data-category="2">
                <a class="img-link" href="be_pages_generic_project.html">
                    <img class="img-fluid img-thumb" src="assets/media/various/cb-project-promo3.png"
                        alt="Project 12 Promo">
                </a>
            </div>
        </div> --}}


        <!-- END Projects -->

        <!-- Quick Stats -->
        <!-- CountTo ([data-toggle="countTo"] is initialized in Helpers.coreAppearCountTo()) -->
        <!-- For more info and examples you can check out https://github.com/mhuggins/jquery-countTo -->
        <div class="bg-white push">
            <div class="row text-center">
                <div class="col-sm-4 py-30">
                    <div class="font-size-h1 font-w700 text-black" data-toggle="countTo" data-to="3">0</div>
                    <div class="font-w600 text-muted text-uppercase">On Process</div>
                </div>
                <div class="col-sm-4 py-30">
                    <div class="font-size-h1 font-w700 text-black" data-toggle="countTo" data-to="12">0</div>
                    <div class="font-w600 text-muted text-uppercase">Completed</div>
                </div>
            </div>
        </div>
        <!-- END Quick Stats -->
    </div>
    @endhasrole
    <!-- END Project Filtering -->
</div>
@endsection
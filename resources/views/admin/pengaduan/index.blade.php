@extends('layouts_admin.master')
@section('content')
<div class="content content-full">
    <!-- Images Filtering -->
    {{-- <h2 class="content-heading">List Pengaduan <small></small></h2> --}}

    <!-- Project Filtering (.js-filter class is initialized in Helpers.contentFilter()) -->
    <!-- If data-numbers="true" is added, then the number of the items of each category will be auto added to each category link -->
    @hasrole('super-admin')

    <div class="bg-white push">
        <div class="row text-center">
            <div class="col-sm-2 py-20 bg-dark">
                <div class="font-size-h1 font-w700 text-white pb-2" data-toggle="countTo" data-to="{{$aduan->count()}}">0</div>
                <div class="font-w700 text-light text-uppercase">Total</div>
            </div>

            <div class="col-sm-2 py-20 text-warning">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'Waiting')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Waiting</div>
            </div>
            <div class="col-sm-2 py-20 text-danger">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'Rejected')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Rejected</div>
            </div>
            <div class="col-sm-2 py-20 text-info">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'Approved')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Approved</div>
            </div>
            <div class="col-sm-2 py-20 text-success">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'On process')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">On Process</div>
            </div>
            <div class="col-sm-2 py-20 text-success">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'Complete')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Completed</div>
            </div>
        </div>
    </div>
    {{-- <div class="bg-white push">
        <div class="row text-center">
            <div class="col-sm-2 py-20">
                <div class="font-size-h1 font-w700 text-black pb-2" data-toggle="countTo" data-to="{{$aduan->where('id_kategori', '=', 1)->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Infrastruktur</div>
            </div>
            <div class="col-sm-2 py-20 text-warning">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'Waiting')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Waiting</div>
            </div>
            <div class="col-sm-2 py-20 text-danger">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'Rejected')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Rejected</div>
            </div>
            <div class="col-sm-2 py-20 text-info">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'Approved')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Approved</div>
            </div>
            <div class="col-sm-2 py-20 text-success">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'On process')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">On Process</div>
            </div>
            <div class="col-sm-2 py-20 text-success">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'Completed')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Completed</div>
            </div>
            
        </div>
    </div>
    <div class="bg-white push">
        <div class="row text-center">
            <div class="col-sm-2 py-20">
                <div class="font-size-h1 font-w700 text-black pb-2" data-toggle="countTo" data-to="{{$aduan->where('id_kategori', '=', 2)->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Infrastruktur</div>
            </div>
            <div class="col-sm-2 py-20 text-warning">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'Waiting')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Waiting</div>
            </div>
            <div class="col-sm-2 py-20 text-danger">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'Rejected')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Rejected</div>
            </div>
            <div class="col-sm-2 py-20 text-info">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'Approved')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Approved</div>
            </div>
            <div class="col-sm-2 py-20 text-success">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'On process')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">On Process</div>
            </div>
            <div class="col-sm-2 py-20 text-success">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'Completed')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Completed</div>
            </div>
            
        </div>
    </div> --}}


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
                        <i class="fa fa-fw fa-th"></i> 
                        {{$k->kategori}}
                        <span class="text-light badge badge-pill badge-secondary ml-5" data-toggle="countTo" data-to="{{$aduan->where('id_kategori', '=', $k->id)->count()}}">0</span>
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
                    
                    <div class="block-header block-header-default ribbon ribbon-info">
                        <img class="img-avatar img-avatar48 mr-10" src="{{asset('assets_user/media/avatars/avatar9.jpg')}}" alt="">
                        <h3 class="block-title" style="line-height: 1.3">
                            <small class="text-capitalize text-dark"><b>{{$d->user->name}}</b></small>
                            <small><span class="text-muted">&bull; <?= date('d-m-Y', strtotime($d->created_at)); ?></span></small>
                            <br>
                            <small class="text-muted mt-0">{{$d->wilayah->nama_will}}</small>
                            <br>
                            
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
                            {{-- <span class="text-muted">{{$d->wilayah->nama_will}}</span> <br> --}}
                            <span class="badge badge-dark"><i class="fa fa-fw fa-hashtag " style="color: beige"></i> {{$d->sub->subkategori}}</span><br>
                        </p>
                    </div>
                    <div class="block-content mb-10">
                        <div class="d-flex align-item-center" style="height: 290px">
                            <img class="p-0 img-fluid img-thumb " src="{{ asset('upload/aduan/'.$d->bukti) }}" alt="">
                        </div>
                        <p class="mb-10 mt-10">
                            {{$d->pesan}} <br> <br>
                        </p>
                    </div>
                    
                </a>
                
            </div>
            @endforeach
        </div>
    </div>
    @else
    <div class="bg-white push">
        <div class="row text-center">
            <div class="col-sm-2 py-20 bg-dark">
                <div class="font-size-h1 font-w700 text-white pb-2" data-toggle="countTo" data-to="{{$aduan->count()}}">0</div>
                <div class="font-w700 text-light text-uppercase">Total</div>
            </div>

            <div class="col-sm-2 py-20 text-warning">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'Waiting')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Waiting</div>
            </div>
            <div class="col-sm-2 py-20 text-danger">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'Rejected')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Rejected</div>
            </div>
            <div class="col-sm-2 py-20 text-info">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'Approved')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Approved</div>
            </div>
            <div class="col-sm-2 py-20 text-success">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'On process')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">On Process</div>
            </div>
            <div class="col-sm-2 py-20 text-success">
                <div class="font-size-h1 font-w700 pb-2" data-toggle="countTo" data-to="{{$aduan->where('status', '=', 'Complete')->count()}}">0</div>
                <div class="font-w600 text-muted text-uppercase">Completed</div>
            </div>
        </div>
    </div>

    <div class="js-filter">
        <!-- Navigation -->
        <div class="p-10 bg-white push">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-category-link="all">
                        <i class="fa fa-fw fa-th-large mr-5"></i> All
                    </a>
                </li>
                {{-- ($aduan->where('id_pelapor','=',Auth::user()->id)->get() as $d) --}}
                @foreach ($aduan as $s)
                <li class="nav-item">
                    <a class="nav-link" href="#" data-category-link={{$s->sub->id}}>
                        <i class="fa fa-fw fa-th"></i> 
                        {{$s->sub->subkategori}}
                        <span class="text-light badge badge-secondary ml-5" data-toggle="countTo" data-to="{{$s->where('id_subkategori','=',$s->sub->id)->count()}}">
                            0
                        </span>
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
                    
                    <div class="block-header block-header-default ribbon ribbon-info">
                        <img class="img-avatar img-avatar48 mr-10" src="{{asset('assets_user/media/avatars/avatar9.jpg')}}" alt="">
                        <h3 class="block-title" style="line-height: 1.3">
                            <small class="text-capitalize text-dark"><b>{{$d->user->name}}</b></small>
                            <small class="text-muted">&bull; <?= date('d-m-Y', strtotime($d->created_at)); ?></small>
                            <br>
                            <small class="text-muted mt-0">{{$d->wilayah->nama_will}}</small>
                            <br>
                            
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
                            {{-- <span class="text-muted">{{$d->wilayah->nama_will}}</span> <br> --}}
                            <span class="badge badge-dark"><i class="fa fa-fw fa-hashtag " style="color: beige"></i> {{$d->sub->subkategori}}</span><br>
                        </p>
                    </div>
                    <div class="block-content mb-10">
                        <div class="d-flex align-item-center" style="height: 290px">
                            <img class="p-0 img-fluid img-thumb " src="{{ asset('upload/aduan/'.$d->bukti) }}" alt="">
                        </div>
                        <p class="mb-10 mt-10">
                            {{$d->pesan}} <br> <br>
                        </p>
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
        {{-- <div class="bg-white push">
            <div class="row text-center">
                <div class="col-sm-4 py-30">
                    <div class="font-size-h1 font-w700 text-black" data-toggle="countTo" data-to="0">0</div>
                    <div class="font-w600 text-muted text-uppercase">On Process</div>
                </div>
                <div class="col-sm-4 py-30">
                    <div class="font-size-h1 font-w700 text-black" data-toggle="countTo" data-to="0">0</div>
                    <div class="font-w600 text-muted text-uppercase">Completed</div>
                </div>
            </div>
        </div> --}}
        <!-- END Quick Stats -->
    </div>
    @endhasrole
    <!-- END Project Filtering -->
</div>
@endsection
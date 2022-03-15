@extends('layouts_admin.master')
@section('content')
<div class="content content-full">
    <!-- Images Filtering -->
    {{-- <h2 class="content-heading">List Pengaduan <small></small></h2> --}}

    <!-- Project Filtering (.js-filter class is initialized in Helpers.contentFilter()) -->
    <!-- If data-numbers="true" is added, then the number of the items of each category will be auto added to each category link -->
    @hasrole('super-admin')

    <!-- Status -->
    {{-- <div class="bg-white push">
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
    </div> --}}
    
    <div class="js-filter">
        <!-- Navigation -->
        <div class="p-10 bg-white push">
            {{-- <ul class="nav nav-pills justify-content-center">
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
            </ul> --}}
        </div>
        <!-- END Navigation -->

        <!-- Projects -->
        <div class="row row-deck" >
            
            @foreach ($data_sosmed as $d)
           
            
            <div class="col-sm-4" data-category="">
                
                <a class="block block-link-pop " href="">
                    
                    <div class="block-header block-header-default ribbon ribbon-info">
                        <img class="img-avatar img-avatar48 mr-10" src="{{asset('assets_user/media/avatars/avatar9.jpg')}}" alt="">
                        <h3 class="block-title" style="line-height: 1.3">
                            <small class="text-capitalize text-dark"><b>{{$d['id']}}</b></small>
                            <small><span class="text-muted">&bull; {{$d['created_time']->format('Y-m-d H:i:s')}}</span></small>
                            <br>
                            
                            <br>
                            
                        </h3>
                        
                        {{-- @if ($d->status == 'Waiting') --}}
                            <div class="ribbon-box bg-warning text-uppercase" style="font-size: 70%;"><i class="fa fa-fw fa-clock-o"></i> Status</div>
                        {{--@else
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
                        @endif --}}
                    </div>
                    <!-- Picture and Img -->
                    <div class="block-content mb-10">
                        @isset($d['full_picture'])
                            <div class="d-flex align-item-center" style="height: 290px">
                                <img class="p-0 img-fluid img-thumb " src="{{$d['full_picture']}}" alt="">
                            </div>
                        @endisset
                        
                        @isset($d['message'])
                            <p class="mb-10 mt-10 mr-10" style="text-align: justify">
                                {!!Str::limit($d['message'], 200)!!}
                                <em>
                                    {{-- <b class="link-effect font-w600" href="{{route('pengaduan.detailaduan')}}">
                                        see more.
                                    </b> --}}
                                </em>
                                <br>
                            </p>
                        @endisset
                        
                    </div>
                    
                </a>
                
            </div>
            @endforeach
        </div>
    </div>
    @else
    
    @endhasrole
    <!-- END Project Filtering -->
</div>
@endsection
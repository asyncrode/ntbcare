@extends('layouts_user.master')
@section('content_user')
<div class="content">
    <div class="my-50 text-center">
        <h2 class="font-w700 text-black mb-10">
            <i class="fa fa-fw fa-commenting text-dark"></i>Pengaduanku
        </h2>
        <h3 class="h5 text-muted mb-0">
            Saat ini kamu memiliki {{$aduan->count()}} Aduan <a href="{{route('pengaduan.index')}}">Buat Pengaduan Baru</a>.
        </h3>
    </div>
    {{-- <div class="row row-deck">
        @foreach ($aduan as $d)
        <div class="col-md-6 col-xl-4 invisible" data-toggle="appear">
            <!-- Property -->
            <div class="block block-rounded">
                <div class="block-content p-0 overflow-hidden">
                    <a class="img-link" href="{{route('pengaduanku.detail',$d->id)}}">
                        <img class="img-fluid rounded-top" src="{{ asset('upload/aduan/'.$d->bukti) }}" alt="">
                    </a>
                </div>
                <div class="block-content border-bottom">
                    <h4 class="font-size-h5 mb-10">{{$d->status}}</h4>
                    <h5 class="font-size-h1 font-w300 mb-5">{{$d->pesan}}</h5>
                    <p class="text-muted">
                        <i class="fa fa-map-pin mr-5"></i> 
                        {{$d->wilayah->nama_will}}
                    </p>
                </div>
                <div class="block-content border-bottom">
                    <div class="row">
                        <div class="col-12">
                            <p>
                               <strong>{{$d->kategori->kategori}}</strong> 
                            </p>
                        </div>
                        <div class="col-6">
                            <p>
                                <strong>{{$d->kategori->kategori}}</strong> 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="block-content block-content-full">
                    <div class="row">
                        <div class="col-12">
                            <a class="btn btn-sm btn-hero btn-noborder btn-primary btn-block" href="{{route('pengaduanku.detail',$d->id)}}">
                                Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Property -->
        </div>
        @endforeach
        
       
    </div> --}}
    <div class="js-filter">
        <div class="row row-deck" >
            
            @foreach ($aduan as $d)
            <div class="col-sm-4 media" data-category="{{$d->id_kategori}}">
                
                <a class="block block-link-pop " href="{{route('pengaduanku.detail',$d->id)}}">
                    
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
</div>


@endsection
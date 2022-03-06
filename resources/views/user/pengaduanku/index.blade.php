@extends('layouts_user.master')
@section('content_user')
<div class="content">
    <div class="my-50 text-center">
        <h2 class="font-w700 text-black mb-10">
            <i class="si si-bubbles text-muted mr-5"></i> Pengaduanku
        </h2>
        <h3 class="h5 text-muted mb-0">
            Saat ini kamu memiliki {{$aduan->count()}} Aduan <a href="{{route('pengaduan.index')}}">Add a new one</a>.
        </h3>
    </div>
    <div class="row">
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
                        <i class="fa fa-map-pin mr-5"></i> {{$d->wilayah->nama_will}}
                    </p>
                </div>
                <div class="block-content border-bottom">
                    <div class="row">
                        <div class="col-6">
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
        
       
    </div>
</div>

@endsection
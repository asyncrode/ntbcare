@extends('layouts_admin.master')
@section('content')
<div class="content">
    <h2 class="content-heading">Detail <small>Pengaduan</small></h2>
    <div class="block">
        <!-- Navigation -->
        <div class="block-content block-content-full border-b clearfix">
            
            <div class="float-right">
                {{-- <button type="button" class="btn btn-secondary dropdown-toggle" id="btnGroupDrop1"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Forward</button> --}}
                <button type="button"  id="forward" data-toggle="modal" data-target="#modalForward" class="btn btn-outline-dark">
                    <i class="si si-action-redo"></i>
                </button>
            </div>
            <button type="button" id="delete" class="btn btn-outline-danger float-right ml-5 mr-5" data-type="delete" data-id="{{$aduan->id}}">
                <i class="fa fa-trash"></i>
            </button>
            <div class="btn-group float-right" role="group">
                @if ($aduan->status == 'Waiting')
                <select name="status" id="status" data-id="{{$aduan->id}}" class="form-control bg-warning float-right ml-5 mr-5" style="color:beige; border-color:currentColor">
                    <option {{old('status',$aduan->status)=="Waiting"? 'selected':''}} value="Waiting" class="bg-light" style="color: #282828">Waiting</option>
                    <option {{old('status',$aduan->status)=="Approved"? 'selected':''}} value="Approved" class="bg-light" style="color: #282828">Approved</option>
                    <option {{old('status',$aduan->status)=="Rejected"? 'selected':''}} value="Rejected" class="bg-light" style="color: #282828">Rejected</option>
                    <option {{old('status',$aduan->status)=="On process"? 'selected':''}} value="On process" class="bg-light" style="color: #282828">On Process</option>
                    <option {{old('status',$aduan->status)=="Complete"? 'selected':''}} value="Complete" class="bg-light" style="color: #282828">Complete</option>
                </select>
                    @else
                    @if ($aduan->status == 'Rejected')
                    <select name="status" id="status" data-id="{{$aduan->id}}" class="form-control bg-danger float-right ml-5 mr-5" style="border-color: beige; color:beige">
                        <option {{old('status',$aduan->status)=="Waiting"? 'selected':''}} value="Waiting" class="bg-light" style="color: #282828">Waiting</option>
                        <option {{old('status',$aduan->status)=="Approved"? 'selected':''}} value="Approved" class="bg-light" style="color: #282828">Approved</option>
                        <option {{old('status',$aduan->status)=="Rejected"? 'selected':''}} value="Rejected" class="bg-light" style="color: #282828">Rejected</option>
                        <option {{old('status',$aduan->status)=="On process"? 'selected':''}} value="On process" class="bg-light" style="color: #282828">On Process</option>
                        <option {{old('status',$aduan->status)=="Complete"? 'selected':''}} value="Complete" class="bg-light" style="color: #282828">Complete</option>
                    </select>
                        @else
                        @if ($aduan->status == 'Approved')
                        <select name="status" id="status" data-id="{{$aduan->id}}" class="form-control bg-info float-right ml-5 mr-5" style="border-color: beige; color:beige">
                            <option {{old('status',$aduan->status)=="Waiting"? 'selected':''}} value="Waiting" class="bg-light" style="color: #282828">Waiting</option>
                            <option {{old('status',$aduan->status)=="Approved"? 'selected':''}} value="Approved" class="bg-light" style="color: #282828">Approved</option>
                            <option {{old('status',$aduan->status)=="Rejected"? 'selected':''}} value="Rejected" class="bg-light" style="color: #282828">Rejected</option>
                            <option {{old('status',$aduan->status)=="On process"? 'selected':''}} value="On process" class="bg-light" style="color: #282828">On Process</option>
                            <option {{old('status',$aduan->status)=="Complete"? 'selected':''}} value="Complete" class="bg-light" style="color: #282828">Complete</option>
                        </select>
                        @else
                        <select name="status" id="status" data-id="{{$aduan->id}}" class="form-control bg-success float-right ml-5 mr-5" style="border-color: beige; color:beige">
                            <option {{old('status',$aduan->status)=="Waiting"? 'selected':''}} value="Waiting" class="bg-light" style="color: #282828">Waiting</option>
                            <option {{old('status',$aduan->status)=="Approved"? 'selected':''}} value="Approved" class="bg-light" style="color: #282828">Approved</option>
                            <option {{old('status',$aduan->status)=="Rejected"? 'selected':''}} value="Rejected" class="bg-light" style="color: #282828">Rejected</option>
                            <option {{old('status',$aduan->status)=="On process"? 'selected':''}} value="On process" class="bg-light" style="color: #282828">On Process</option>
                            <option {{old('status',$aduan->status)=="Complete"? 'selected':''}} value="Complete" class="bg-light" style="color: #282828">Complete</option>
                        </select>
                        @endif
                    @endif
                @endif
            </div>


            <div class="btn-group float-right">
                {{-- @if ($aduan->status == 'Waiting')
                <div class=" badge-warning text-uppercase" style="font-size: 60%;">{{$aduan->status}}</div>
                @else
                @if ($aduan->status == 'Rejected')
                <div class=" badge-danger text-uppercase" style="font-size: 60%;">{{$aduan->status}}</div>
                @else
                @if ($aduan->status == 'Approved')
                <div class=" badge-info text-uppercase" style="font-size: 60%;">{{$aduan->status}}</div>
                @else
                <div class=" badge-success text-uppercase" style="font-size: 60%;">{{$aduan->status}}</div>
                @endif
                @endif
                @endif --}}
            </div>

            <a class="btn btn-secondary" href="{{route('pengaduan.admin.index')}}">
                <i class="fa fa-th-large text-primary mr-5 "></i> Semua Aduan
            </a>

        </div>
       
        <!-- END Navigation -->

        <!-- Project -->
        
        <div class="block-content block-content-full">
            
            <p class="m-0" >
                <b style="font-size: 150%">{{$aduan->user->name}} </b>
                @if ($aduan->id_opd != null)
                    <a href="javascript:void(0)" data-toggle="tooltip" data-html="true" data-placement="right" title="Aduan telah diteruskan ke <b>{{$aduan->opd->nama}}</b>"><i class="si si-info"></i></a> 
                    <br>
                @else
                <a href="#" data-toggle="tooltip" data-html="true" data-placement="right" title="Aduan belum diteruskan"><i class="si si-info"></i></a> 
                <br>
                @endif
                
                @if ($aduan->status == 'Waiting')
                    <span class="badge badge-warning justify-content-center" ><i class="fa fa-fw fa-clock-o"></i> {{$aduan->status}}</span>
                @else
                    @if ($aduan->status == 'Rejected')
                        <span class="badge badge-danger" ><i class="fa fa-fw fa-times-circle"></i> {{$aduan->status}}</span>
                    @else
                        @if ($aduan->status == 'Approved')
                            <span class="badge badge-info" ><i class="fa fa-fw fa-check"></i> {{$aduan->status}}</span>
                        @else
                            @if ($aduan->status == 'On process')
                                <span class="badge badge-success" ><i class="fa fa-fw fa-hourglass-1"></i> {{$aduan->status}}</span>    
                            @else
                                <span class="badge badge-success" >
                                    <i class="fa fa-fw fa-check-circle"></i> {{$aduan->status}}
                                </span>    
                            @endif
                            @endif
                    @endif
                @endif
                <br>
                <small class="text-muted">Diposting Tanggal: {{$aduan->created_at}}</small>
                <br>
                
            </p>
            <div class="row py-20">
                <div class="col-sm-6 invisible" data-toggle="appear">
                    <!-- Image Slider (.js-slider class is initialized in Helpers.slick()) -->
                    <!-- For more info and examples you can check out http://kenwheeler.github.io/slick/ -->
                    <div class="js-slider slick-nav-black slick-dotted-inner slick-dotted-white" data-dots="true"
                        data-arrows="true">
                        <div>
                            <img class="img-fluid" src="{{ asset('upload/aduan/'.$aduan->bukti) }}">
                        </div>
                    </div>
                    <!-- END Image Slider -->
                </div>
                <div class="col-sm-6 nice-copy">
                    <!-- Project Description -->
                    <p>
                        <b> Pengaduan: <br> </b>
                        {{$aduan->pesan}}
                    </p>

                    <table class="table table-striped table-borderless mt-0">
                        <tbody>
                            {{-- <tr>
                                <td class="font-w600">Nama</td>
                                <td>{{$aduan->name}}</td>
                            </tr> --}}
                            <tr>
                                <td class="font-w600">Kategori Aduan</td>
                                <td>{{$aduan->kategori->kategori}}</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Subkategori</td>
                                <td class="font-w600">{{$aduan->sub->subkategori}}</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Lokasi</td>
                                <td>{{$aduan->alamat}}</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Kabupaten/kota</td>
                                <td>{{$aduan->wilayah->nama_will}}</td>
                            </tr>
                            <tr>
                                <td class="font-w600">Lampiran</td>
                                <td><a href="{{ asset('upload/aduan/'.$aduan->bukti_2) }}"
                                        target="_blank">{{$aduan->bukti_2}}</a></td>
                            </tr>
                            {{-- <tr>
                                <td class="font-w600">Kelurahan</td>
                                <td>{{$aduan->kel->nama_kel}}</td>
                            </tr> --}}

                        </tbody>
                    </table>
                    <!-- END Project Description -->
                </div>
                <div class="col-sm-12 mt-10">
                    @if ($aduan->id_opd != null)
                    <p>
                        <span><i class="si si-info"></i> Aduan telah diteruskan ke <b>{{$aduan->opd->nama}}</b></span>
                    </p>
                    @else
                    <p>
                        <span><i class="si si-info"></i> Aduan belum diteruskan</b></span>
                    </p>
                    @endif
                   
                    <h5 class="mr-15">
                        <span class="float-right"><i class="si si-bubble"></i> 3</span>
                        <span class="float-right mr-15"><i class="si si-action-redo"></i> 1</span>
                    </h5>
                </div>
            </div>
        </div>
        
        <!-- END Project -->

        <!-- Key Features -->
        <div class="block-content-full border-t">
            <div class="bg-body-dark">
                <div class="content content-full">
                    <div class="row justify-content-center py-30">
                        <div class="col-lg-8">
                            <h5 class="font-w700 mb-20">Responses (5)</h5>
                            <div class="media mb-30">
                                <img class="img-avatar img-avatar48 d-flex mr-20"
                                    src="{{asset('assets/media/avatars/avatar5.jpg')}}" alt="">
                                <div class="media-body">
                                    <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Melissa Rice</a> Cras
                                        sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                        sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                        turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue
                                        felis in faucibus.</p>
                                    <div class="font-size-sm">
                                        <a class="link-effect" href="javascript:void(0)">Like</a>
                                        <span role="presentation" aria-hidden="true"> · </span>
                                        <a class="link-effect" href="javascript:void(0)">Reply</a>
                                        <span role="presentation" aria-hidden="true"> · </span>
                                        <span class="text-muted mr-5">2 days</span>
                                    </div>
                                    {{-- <div class="media mt-30">
                                        <img class="img-avatar img-avatar48 d-flex mr-20"
                                            src="{{asset('assets/media/avatars/avatar2.jpg')}}" alt="">
                                        <div class="media-body">
                                            <p class="mb-5"><a class="font-w600" href="javascript:void(0)">Jeffrey Shaw</a> In
                                                gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio,
                                                vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                                                nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                            <div class="font-size-sm">
                                                <span class="badge badge-primary mr-5"><i class="fa fa-thumbs-up"></i> 10</span>
                                                <a class="link-effect" href="javascript:void(0)">Like</a>
                                                <span role="presentation" aria-hidden="true"> · </span>
                                                <a class="link-effect" href="javascript:void(0)">Reply</a>
                                                <span role="presentation" aria-hidden="true"> · </span>
                                                <span class="text-muted mr-5">10 hrs</span>
                                            </div>
                                        </div>
                                    </div>     --}}
                                </div>
                            </div>
                            <div class="media mb-30">
                                <img class="img-avatar img-avatar48 d-flex mr-20" src="{{asset('assets/media/avatars/avatar0.jpg')}}"
                                    alt="">
                                <div class="media-body">
                                    <form action="be_pages_generic_story.html" method="post" onsubmit="return false;">
                                        <textarea class="form-control mb-5" rows="5"
                                            placeholder="Write a response.."></textarea>
                                        <button type="submit" class="btn btn-secondary">
                                            <i class="fa fa-reply mr-5"></i>Respond
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Key Features -->

    </div>
</div>
<div class="modal fade" id="modalForward" tabindex="-1" role="dialog" aria-labelledby="modalForward" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Forward Aduan</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="" name="frm_add" id="frm_add" method="post">
                        @csrf
                        <input type="hidden" value="{{$aduan->id}}" id="idAduan">
                        <div class="form-group ">
                            <label class="col-form-label" for="opd">Nama OPD<span
                                    class="text-danger">*</span></label>
                            <div class="">
                                <select class="js-select2 form-control" id="opd" name="opd" style="width: 100%;"
                                    data-placeholder="Choose one..">
                                    <option></option>
                                    <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-alt-primary" id="forwardBtn">
                    <i class="fa fa-check"></i> Forward
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@include('admin.pengaduan.javascript')
@endpush
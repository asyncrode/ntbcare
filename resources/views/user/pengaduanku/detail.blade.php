@extends('layouts_user.master')
@section('content_user')
<div class="side-scroll main-content-boxed" style="margin-top: 5rem">
    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <!-- User -->
            <div class="col-lg-4 col-xl-3">
                <!-- Account -->
                <div class="block block-rounded text-center font-w600">
                    <div class="block-content block-content-full bg-gd-sea">
                        <img class="img-avatar img-avatar-thumb" src="{{asset('assets/media/avatars/avatar5.jpg')}}" alt="">
                    </div>
                    <div class="block-content block-content-full">
                        <div class="border-b pb-15 mb-15">
                            Andrea Gardner<br>
                            <a class="text-muted font-w400" href="javascript:void(0)">@andrea</a>
                        </div>
                        <div class="row gutters-tiny">
                            <div class="col-4">
                                <div class="font-size-xs text-muted">Pengaduan</div>
                                <a class="font-size-lg" href="javascript:void(0)">750</a>
                            </div>
                            <div class="col-4">
                                <div class="font-size-xs text-muted">Diproses</div>
                                <a class="font-size-lg" href="javascript:void(0)">230</a>
                            </div>
                            <div class="col-4">
                                <div class="font-size-xs text-muted">Selesai</div>
                                <a class="font-size-lg" href="javascript:void(0)">1,680</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Account -->

                <!-- Worldwide Trends -->
                {{-- <div class="block block-rounded">
                    <div class="block-header">
                        <h3 class="block-title font-w600">List kategori</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        @foreach ($sub as $k)
                        <a class="font-w600" href="javascript:void(0)">#{{$k->subkategori}}</a>
                        <p class="text-muted">29.3k Updates</p>
                        @endforeach

                    </div>
                </div> --}}
                <!-- END Worldwide Trends -->
            </div>
            <!-- END User -->

            <!-- Updates -->
            <div class="col-lg-4 col-xl-6">
                <div class="block block-rounded">
                    <div class="block-content block-content-full">
                        <div class="media">
                            <img class="img-avatar img-avatar48 mr-20" src="{{asset('assets/media/avatars/avatar9.jpg')}}" alt="">
                            <div class="media-body">
                                <p class="mb-0">
                                    <a class="font-w600" href="javascript:void(0)">{{$aduan->user->name}}</a>
                                    {{-- <a class="text-muted" href="javascript:void(0)">&bull; Wilayah</a> --}}
                                    <em><a class="text-muted" id="time">&bull; </a></em>
                                    {{-- <a class="text-muted" href="javascript:void(0)">@j.smith</a> --}}
                                    <span class="badge badge-warning float-right"><i class="fa fa-fw fa-clock-o"></i>
                                        {{$aduan->status}}</span>
                                </p>
                                <p>
                                    {{-- <small id="time" class="text-left" style="line-height: 2.6"></small> --}}
                                    <a class="text-muted" href="javascript:void(0)">&bull;
                                        {{$aduan->wilayah->nama_will}}</a>
                                    <br>
                                    {{-- pesan --}}
                                    {{$aduan->pesan}}
                                </p>
                                <img class="img-fluid push" src="{{ asset('upload/aduan/'.$aduan->bukti) }}" alt="">
                                <p>
                                    <span class="float-right">2022-03-04 17:32:43</span>
                                </p>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-comment-o"></i> {{$komentar->count()}}
                                </button>

                            </div>
                        </div>
                    </div>

                    <div class="block-content-full border-t">
                        <div class="bg-body-dark">
                            <div class="content content-full">
                                <div class="row justify-content-center py-30">
                                    <div class="col-lg-8">
                                        @foreach ($komentar as $k)
                                        <div class="media mb-30">
                                            <img class="img-avatar img-avatar48 d-flex mr-20"
                                                src="{{asset('assets/media/avatars/avatar5.jpg')}}" alt="">
                                           
                                            <div class="media-body">
                                                <p class="mb-5">
                                                    @if ($k->id_admin != null)
                                                    <a class="font-w600" href="javascript:void(0)">{{$k->admin->nama}}</a>
                                                    {{$k->komentar}}
                                                    @else
                                                    <a class="font-w600" href="javascript:void(0)">{{$k->user->name}}</a>
                                                    {{$k->komentar}}
                                                    @endif
                                                    
                                                </p>
                                                <div class="font-size-sm">
                                                    <a class="link-effect" href="javascript:void(0)">Like</a>
                                                    <span role="presentation" aria-hidden="true"> · </span>
                                                    <a class="link-effect" href="javascript:void(0)">Reply</a>
                                                    <span role="presentation" aria-hidden="true"> · </span>
                                                    <span class="text-muted mr-5">3 hrs</span>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="media mb-30">
                                            <img class="img-avatar img-avatar48 d-flex mr-20"
                                                src="{{asset('assets/media/avatars/avatar0.jpg')}}" alt="">
                                            <div class="media-body">
                                                <form action="" id="frm_komen" name="frm_komen" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id_aduan" value="{{$aduan->id}}">
                                                    <textarea id="material-textarea-small2" class="form-control mb-5" rows="5" name="komentar"></textarea>
                                                    <label for="material-textarea-small2">Tuliskan respons anda</label>
                                                    <button type="button" class="btn btn-alt-primary mt-10 float-right" id="komenBtn">
                                                        <i class="fa fa-reply mr-5"></i> Respond
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Updates -->

            <!-- Extra -->
            <div class="col-lg-4 col-xl-3">
                <!-- Who to follow -->
                {{-- <div class="block block-rounded">
                    <div class="block-header">
                        <h3 class="block-title font-w600">Kategori Aduan</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content block-content-full">
                        <ul class="nav-users pull-all">
                            <li>
                                <a href="javascript:void(0)">
                                    <img class="img-avatar" src="assets/media/avatars/avatar5.jpg" alt="">
                                    <i class="fa fa-circle text-success"></i> Helen Jacobs
                                    <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img class="img-avatar" src="assets/media/avatars/avatar6.jpg" alt="">
                                    <i class="fa fa-circle text-success"></i> Carol Ray
                                    <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img class="img-avatar" src="assets/media/avatars/avatar11.jpg" alt="">
                                    <i class="fa fa-circle text-success"></i> Justin Hunt
                                    <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img class="img-avatar" src="assets/media/avatars/avatar9.jpg" alt="">
                                    <i class="fa fa-circle text-success"></i> Thomas Riley
                                    <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="block-content block-content-full border-t">
                        <a href="javascript:void(0)">
                            <i class="fa fa-users mr-5"></i> Find people you know
                        </a>
                    </div>
                </div> --}}
                <div class="block block-rounded">
                    <div class="block-header pb-0">
                        <h3 class="block-title font-w600">Pengaduan Sebelumnya</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option"
                                data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>

                        </div>
                    </div>
                    <div class="block-content">

                        <a class="font-w600" href="javascript:void(0)">ID Aduan: {{$aduan->id}}</a>
                        <p class="text-muted">{{$aduan->created_at}}</p>
                    </div>
                </div>
                <!-- END Who to follow -->

                <!-- About -->
                <div class="block block-rounded">
                    <div class="block-content block-content-full text-muted font-size-sm">
                        <a class="text-muted ml-5" href="javascript:void(0)">Copyright </a>
                        &copy; <span class="js-year-copy"></span>

                    </div>
                    {{-- <div class="block-content block-content-full border-t">
                        <a href="javascript:void(0)">
                            <i class="fa fa-external-link-square mr-5"></i> Advertise with Us
                        </a>
                    </div> --}}
                </div>
                <!-- END About -->
            </div>
            <!-- END Extra -->
        </div>
    </div>
    <!-- END Page Content -->

    {{-- </main> --}}
    <!-- END Main Container -->
</div>
@endsection
@push('scripts')
@include('user.pengaduanku.javascript')
@endpush
@extends('layouts_user.master')
@section('content_user')
<!-- pengaduan -->
<div class="side-scroll main-content-boxed" style="margin-top: 5rem">
        <!-- Page Content -->
    <div class="content">
        <div class="row js-filter">
            <!-- User -->
            <div class="col-lg-4 col-xl-3">
                <!-- Account -->
                {{-- <div class="block block-rounded text-center font-w600">
                    <div class="block-content block-content-full bg-gd-sea">
                        <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar5.jpg" alt="">
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
                                <div class="font-size-xs text-muted">D</div>
                                <a class="font-size-lg" href="javascript:void(0)">230</a>
                            </div>
                            <div class="col-4">
                                <div class="font-size-xs text-muted">Followers</div>
                                <a class="font-size-lg" href="javascript:void(0)">1,680</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- END Account -->

                <!-- Worldwide Trends -->
                <div class="block block-rounded">
                    <div class="block-header">
                        <h3 class="block-title font-w600">Subkategori</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        @foreach ($sub as $k)
                        <a class="font-w600" href="#" data-category-link={{$k->id}}>#{{$k->subkategori}}</a>
                        <p class="text-muted">29.3k Updates</p>
                        @endforeach
                        
                    </div>
                </div>
                <!-- END Worldwide Trends -->
            </div>
            <!-- END User -->

            <!-- Updates -->
            <div class="col-lg-4 col-xl-6">
                <div class="block block-rounded">
                    <div class="block-content block-content-full bg-primary-light">
                        <h3 class="text-center m-0" style="color: beige">Pengaduan</h3>
                    </div>
                    {{-- <div class="block-content block-content-full">
                        <div class="media">
                            <img class="img-avatar img-avatar48 mr-20" src="assets/media/avatars/avatar13.jpg" alt="">
                            <div class="media-body">
                                <p class="mb-0">
                                    <a class="font-w600" href="javascript:void(0)">Wayne Garcia</a>
                                    <a class="text-muted" href="javascript:void(0)">@waynegarcia</a>
                                    <em class="text-muted">&bull; 30m</em>
                                </p>
                                <p>
                                    In gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </p>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-comment-o"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-retweet"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-heart-o"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-envelope-o"></i>
                                </button>
                            </div>
                        </div>
                    </div> --}}
                    @foreach ($aduan as $a)
                        
                    <div class="block-content block-content-full border-t" data-category="{{$a->id_subkategori}}">
                        <div class="media">
                            <img class="img-avatar img-avatar48 mr-20" src="assets/media/avatars/avatar9.jpg" alt="">
                            <div class="media-body">
                                <p class="mb-0">
                                    <a class="font-w700 text-capitalize" href="javascript:void(0)">{{$a->user->name}}</a>
                                    {{-- <a class="text-muted" href="javascript:void(0)">&bull; {{$a->wilayah->nama_will}}</a> --}}
                                    <small><a class="text-muted">&bull; {{$a->created_at}}</a></small>

                                    {{-- <span class="text-muted"> {{$a->status}}</span> --}}
                                    @if ($a->status == 'Waiting')
                                        <span class="badge badge-warning float-right" ><i class="fa fa-fw fa-clock-o"></i> {{$a->status}}</span>
                                    @else
                                        @if ($a->status == 'Rejected')
                                            <span class="badge badge-danger float-right" ><i class="fa fa-fw fa-times-circle"></i> {{$a->status}}</span>
                                        @else
                                            @if ($a->status == 'Approved')
                                                <span class="badge badge-info float-right" ><i class="fa fa-fw fa-check"></i> {{$a->status}}</span>
                                            @else
                                                @if ($a->status == 'On process')
                                                    <span class="badge badge-success float-right" ><i class="fa fa-fw fa-hourglass-1"></i> {{$a->status}}</span>    
                                                @else
                                                    <span class="badge badge-success float-right" >
                                                        <i class="fa fa-fw fa-check-circle"></i> {{$a->status}}
                                                    </span>    
                                                @endif
                                                @endif
                                        @endif
                                    @endif
                                                    
                                </p>
                                <p>
                                    {{-- <small id="time" class="text-left" style="line-height: 2.6"></small> --}}
                                    <a class="text-muted" href="javascript:void(0)" style="line-height: 2">{{$a->wilayah->nama_will}}</a>
                                    <br>
                                    {{$a->pesan}}
                                </p>
                                <img class="img-fluid push" src="{{ asset('upload/aduan/'.$a->bukti) }}" alt="">
                                <p>
                                    <span class="float-right"><small style="line-height: 2.6"><?= date('l, d-M-Y \a\t h:i:s A', strtotime($a->created_at)); ?></small></span>
                                </p>
                                {{-- <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-comment-o"></i>
                                </button> --}}
                                {{-- <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-retweet"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-heart-o"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-envelope-o"></i>
                                </button> --}}
                            </div>
                        </div>
                    </div>

                    @endforeach
                    {{-- <div class="block-content block-content-full border-t">
                        <div class="media">
                            <img class="img-avatar img-avatar48 mr-20" src="assets/media/avatars/avatar10.jpg" alt="">
                            <div class="media-body">
                                <p class="mb-0">
                                    <a class="font-w600" href="javascript:void(0)">John Doe</a>
                                    <a class="text-muted" href="javascript:void(0)">@j.doe</a>
                                    <em class="text-muted">&bull; 50m</em>
                                </p>
                                <p>
                                    Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.
                                </p>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-comment-o"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-retweet"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-heart-o"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-envelope-o"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="block-content block-content-full border-t">
                        <div class="media">
                            <img class="img-avatar img-avatar48 mr-20" src="assets/media/avatars/avatar3.jpg" alt="">
                            <div class="media-body">
                                <p class="mb-0">
                                    <a class="font-w600" href="javascript:void(0)">Lisa Ray</a>
                                    <a class="text-muted" href="javascript:void(0)">@l.ray</a>
                                    <em class="text-muted">&bull; 3d</em>
                                </p>
                                <p>
                                    Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                                <img class="img-fluid push" src="assets/media/photos/photo3.jpg" alt="">
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-comment-o"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-retweet"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-heart-o"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-envelope-o"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="block-content block-content-full border-t">
                        <div class="media">
                            <img class="img-avatar img-avatar48 mr-20" src="assets/media/avatars/avatar2.jpg" alt="">
                            <div class="media-body">
                                <p class="mb-0">
                                    <a class="font-w600" href="javascript:void(0)">Laura Taylor</a>
                                    <a class="text-muted" href="javascript:void(0)">@l.taylor</a>
                                    <em class="text-muted">&bull; 5d</em>
                                </p>
                                <p>
                                    Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-comment-o"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-retweet"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-heart-o"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                    <i class="fa fa-fw fa-envelope-o"></i>
                                </button>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- END Updates -->

            <!-- Extra -->
            <div class="col-lg-4 col-xl-3">
                <!-- Who to follow -->
                <div class="block block-rounded">
                    <div class="block-header">
                        <h3 class="block-title font-w600">Statistik Response Aduan</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    {{-- <div class="block-content block-content-full">
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
                    </div> --}}
                    <div class="block-content">
                        {{-- @foreach ($sub as $k) --}}
                        <a class="font-w600" href="javascript:void(0)">Aduan Yang Direspon</a>
                        <p class="text-muted">13,287 Aduan (100%)</p>
                        {{-- @endforeach --}}
                        <a class="font-w600" href="javascript:void(0)">Tindak Lanjut NTB Care</a>
                        <p class="text-muted">5,696 Aduan (85%)</p>
                        <a class="font-w600" href="javascript:void(0)">Diproses</a>
                        <p class="text-muted">2,126 Aduan (37%)</p>
                        <a class="font-w600" href="javascript:void(0)">Selesai</a>
                        <p class="text-muted">3,570 Aduan (63%)</p>
                        
                    </div>
                    {{-- <div class="block-content block-content-full border-t">
                        &copy; <span class="js-year-copy"></span>
                        <a class="text-muted ml-5" href="javascript:void(0)">About Us</a>
                        <a class="text-muted ml-5" href="javascript:void(0)">Copyright</a>
                    </div> --}}
                </div>
                <!-- END Who to follow -->

                <!-- About -->
                <div class="block block-rounded">
                    <div class="block-content block-content-full text-muted font-size-sm">
                        <a class="text-muted ml-5" href="javascript:void(0)">Copyright </a>
                        &copy; <span class="js-year-copy"></span>
                    </div>
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
@include('user.listaduan.javascript')
@endpush
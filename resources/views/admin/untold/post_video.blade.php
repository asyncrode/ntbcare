@extends('layouts_admin.master')
@section('content')
<div class="bg-white">
    <div class="content content-full">
        <h2 class="content-heading">Post Video <small>for Untold Story</small></h2>
        <div class="block shadow-lg">
            <div class="block-content">
                <form class="js-validation-bootstrap" id="frm_add" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row py-20">
                        <div class="col-xl-12">
                            <div class="form-group">
                                <label for="nama">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Video">
                            </div>
                            <div class="form-group">
                                <label for="">Short Description</label>
                                <textarea name="shortdesc" id="shortdesc" class="form-control" cols="30" rows="10" placeholder="Deskripsi Untold Story" ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group ">
                            <label class="col-form-label" for="Video">Video</label>
                            <div class="file-loading">
                                <input type="file" name="video" id="video">
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="">
                            <button type="submit" id="save" class="btn btn-alt-primary btn-block">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@include('admin.untold.javascript_video')
@endpush
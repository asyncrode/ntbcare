@extends('layouts_user.master')
@section('content_user')
<div class="bg-white ">
    <div class="content content-full mt-50">
        {{-- <h2 class="content-heading">Pengaduan</h2> --}}
        <div class="block shadow-lg">
            <div class="block-header block-header-default">
                <h3 class="block-title">Formulir Pengaduan</h3>
                <div class="block-options">
                    <button type="button" class="btn-block-option">
                        <i class="si si-wrench"></i>
                    </button>
                </div>
            </div>
            <div class="block-content">
                <form class="js-validation-bootstrap" id="frm_add" action="{{route("pengaduan.store")}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row py-20">
                        <div class="col-xl-6">
                            <div class="form-group ">
                                <label class="col-form-label" for="kategori">Kategori Aduan <span
                                        class="text-danger">*</span></label>
                                <div class="">
                                    <select class="js-select2 form-control" id="kategori" name="kategori"
                                        style="width: 100%;" data-placeholder="Pilih Kategori">
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-form-label" for="subkategori">Subkategori Aduan<span
                                        class="text-danger">*</span></label>
                                <div class="">
                                    <select class="js-select2 form-control" id="subkategori" name="subkategori"
                                        style="width: 100%;" data-placeholder="Pilih Subkategori">
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="form-group ">
                                <label class="col-form-label" for="wilayah">Kabupaten/Kota <span
                                        class="text-danger">*</span></label>
                                <div class="">
                                    <select class="js-select2 form-control" id="wilayah" name="wilayah"
                                        style="width: 100%;" data-placeholder="Pilih Kabupaten/Kota">
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-form-label" for="kecamatan">Kecamatan<span
                                        class="text-danger">*</span></label>
                                <div class="">
                                    <select class="js-select2 form-control" id="kecamatan" name="kecamatan"
                                        style="width: 100%;" data-placeholder="Pilih Kecamatan">
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-form-label" for="kelurahan">Kelurahan<span
                                        class="text-danger">*</span></label>
                                <div class="">
                                    <select class="js-select2 form-control" id="kelurahan" name="kelurahan"
                                        style="width: 100%;" data-placeholder="Pilih Kelurahan">
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group ">
                            <label class="col-form-label" for="nohp">No Handphone <span
                                    class="text-danger">*</span></label>
                            <div class="">
                                <input type="text" class="form-control" id="nohp" name="nohp"
                                    placeholder="Isi Nomor HP yang dapat dihubungi">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group ">
                            <label class="col-form-label" for="pesan">Alamat <span
                                    class="text-danger">*</span></label>
                            <div class="">
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    placeholder="Isi alamat terkait aduan / alamat anda">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group ">
                            <label class="col-form-label" for="pesan">Pesan <span
                                    class="text-danger">*</span></label>
                            <div class="">
                                <textarea class="form-control" id="pesan" name="pesan" rows="5"
                                    placeholder="Isi aduan anda"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group ">
                            <label class="col-form-label" for="Gambar">Gambar <span
                                    class="text-danger">*</span></label>
                            <div class="">
                                <input type="file" name="bukti" id="bukti">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group ">
                            <label class="col-form-label" for="pesan">Dokumen Pendukung <span
                                    class="text-danger">*</span></label>
                            <div class="">
                                <input type="file" name="bukti_2" id="bukti_2">
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
@include('user.aduan.javascript')
@endpush

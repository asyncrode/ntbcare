@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">List Kecamatan</h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <button type="button" id="addKecamatan" data-toggle="modal" data-target="#modalKecamatan"
                class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Add Kecamatan</button>
            <table  class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableKecamatan">
                <thead>
                    <tr>
                        <th class="text-center">no</th>
                        <th class="text-center">id</th>
                        <th>nama</th>
                        <th class="d-none d-sm-table-cell">Wilayah</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">created_at</th>
                        <th class="text-center" style="width: 15%;">action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

{{-- Modal Add Wilayah --}}
<div class="modal fade" id="modalKecamatan" tabindex="-1" role="dialog" aria-labelledby="modalKecamatan" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Add Kecamatan</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="" name="frm_kecamatan" id="frm_kecamatan" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Id Kecamatan</label>
                            <input type="text" class="form-control" id="id" name="id" placeholder="Id Kecamatan">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Kecamatan</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Kecamatan">
                        </div>
                        <div class="form-group ">
                            <label class="col-form-label" for="opd">Nama Wilayah<span
                                    class="text-danger">*</span></label>
                            <div class="">
                                <select class="js-select2 form-control" id="wilayah" name="wilayah" style="width: 100%;"
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
                <button type="submit" class="btn btn-alt-primary" id="saveBtn">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@include('admin.kecamatan.javascript')
@endpush
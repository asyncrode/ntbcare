@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">List Subkategori</h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <button type="button" id="addSubkategori" data-toggle="modal" data-target="#modalSubkategori"
                class="btn btn-outline-primary mb-4"><i class="fa fa-plus"></i> Add Subkategori</button>
            <table  class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableSubkategori">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%">no</th>
                        <th class="text-center">Subkategori</th>
                        <th class="d-none d-sm-table-cell text-center">Kategori</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 15%;">terdaftar</th>
                        <th class="text-center" style="width: 15%;">action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

{{-- Modal Add Wilayah --}}
<div class="modal fade" id="modalSubkategori" tabindex="-1" role="dialog" aria-labelledby="modalSubkategori" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Add Subkategori</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="" name="frm_subkategori" id="frm_subkategori" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Subkategori</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Subkategori">
                        </div>
                        <div class="form-group ">
                            <label class="col-form-label" for="opd">Nama Kategori<span
                                    class="text-danger">*</span></label>
                            <div class="">
                                <select class="js-select2 form-control" id="kategori" name="kategori" style="width: 100%;"
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
@include('admin.subkategori.javascript')
@endpush
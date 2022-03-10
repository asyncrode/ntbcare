@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Laporan Pengaduan By Status</h3>
        </div>
        <div class="row ml-5">
            <div class="col-md-3 mt-5">
                <label for="">Status</label>
                <select name="status" id="status" class="form-control mb-5">
                    <option value="" class="bg-light" style="color: #282828">Pilih Status</option>
                    <option value="Waiting" class="bg-light" style="color: #282828">Waiting</option>
                    <option value="Approved" class="bg-light" style="color: #282828">Approved</option>
                    <option value="Rejected" class="bg-light" style="color: #282828">Rejected</option>
                    <option value="On process" class="bg-light" style="color: #282828">On Process</option>
                    <option value="Complete" class="bg-light" style="color: #282828">Complete</option>
                </select>
            </div>
            <div class="col-md-5 mt-5">
                <label for="">Tanggal</label>
                <div class="input-daterange input-group" id="datepicker">
                    <input type="text" class="input-sm form-control" name="awal" id="awal" />
                    <span class="input-group-addon">to</span>
                    <input type="text" class="input-sm form-control" name="akhir" id="akhir" />
                </div>

            </div>

        </div>

        <div class="block-content block-content-full">


            <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableLaporan">
                <thead>
                    <tr>
                        <th class="text-center">pelapor</th>
                        <th class="text-center">pesan</th>
                        <th class="text-center">alamat</th>
                        <th class="text-center">OPD/Instansi</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">kategori</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">status</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">dikirim pada</th>
                        <th class="text-center" style="width: 15%;">action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection
@push('scripts')
@include('admin.laporan_status.javascript')
@endpush
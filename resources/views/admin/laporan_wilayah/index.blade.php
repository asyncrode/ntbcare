@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Laporan Pengaduan</h3>
        </div>
        <div class="row ml-5">
            <div class="col-md-3 mt-5">
                <label for="">Wilayah</label>
                <select name="wilayah" id="wilayah" class="form-control mb-5">
                    <option value="">All</option>
                    @foreach ($wilayah as $k)
                        <option value="{{$k->id}}">{{$k->nama_will}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-5 mt-5">
                <label for="">Tanggal</label>
                <div class="input-daterange input-group" id="datepicker">
                    <input type="text" class="input-sm form-control" name="awal" id="awal" />
                    <span class="input-group-addon">to</span>
                    <input type="text" class="input-sm form-control" name="akhir" id="akhir"/>
                </div>
                
            </div>
            
        </div>
       
        <div class="block-content block-content-full">
            
            
            <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table  class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableLaporanWilayah">
                <thead>
                    <tr>
                        <th class="text-center">pelapor</th>
                        <th class="text-center">pesan</th>
                        <th class="d-none d-sm-table-cell">wilayah</th>
                        <th class="d-none d-sm-table-cell">status</th>
                        <th class="d-none d-sm-table-cell">dikirim pada</th>
                        <th class="text-center">bukti</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection
@push('scripts')
@include('admin.laporan_wilayah.javascript')
@endpush
@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Laporan Pengaduan</h3>
        </div>
        <div class="col-md-3 mt-5">
            <label for="">Kategori</label>
            <select name="kategori" id="kategori" class="form-control mb-5">
                <option value="">All</option>
                @foreach ($kategori as $k)
                    <option value="{{$k->id}}">{{$k->kategori}}</option>
                @endforeach
            </select>
        </div>
        <div class="block-content block-content-full">
            
            
            <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table  class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableLaporan">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 5%">pelapor</th>
                        <th class="text-center">pesan</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">kategori</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">terdaftar</th>
                        <th class="text-center" style="width: 15%;">action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection
@push('scripts')
@include('admin.laporan.javascript')
@endpush
@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Rekap Pengaduan By Status</h3>
        </div>

        <div class="block-content block-content-full">


            <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableRekap">
                <thead>
                    <tr>
                        <th class="text-center">total</th>
                        <th class="text-center">waiting</th>
                        {{-- <th class="text-center">waiting</th>
                        <th class="text-center">alamat</th>
                        <th class="text-center">OPD/Instansi</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">kategori</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">status</th> --}}
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection
@push('scripts')
@include('admin.rekap.rekap_status.javascript')
@endpush
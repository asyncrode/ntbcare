@extends('layouts_admin.master')
@section('content')
<div class="content">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Rekap Pengaduan Per Organisasi Perangkat Daerah Se-NTB</h3>
        </div>

        <div class="block-content block-content-full">


            <!-- DataTables functionality is initialized with .js-dataTable-full-pagination class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination tableRekap">
                <thead>
                    <tr>
                        <th class="text-center">Nama OPD</th>
                        <th class="text-center">Total</th>
                        <th class="text-center">waiting</th>
                        <th class="text-center">approved</th>
                        <th class="text-center">rejected</th>
                        <th class="text-center">on process</th>
                        <th class="text-center">completed</th> 
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
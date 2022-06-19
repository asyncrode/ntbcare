<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aduan;
use App\Models\Kategori;
use App\Models\Opd;
use App\Models\Subkategori;
use App\Models\Wilayah;
use DataTables;
use DB;

class RekapController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    //Rekap OPD
    public function index()
    {

        $opd = Opd::all();

        return view('admin.rekap.rekap_status.index', compact('opd'));
    }

    public function getRekap(Request $request)
    {
        if ($request->ajax()) {
            $rekap = Opd::get();
            return Datatables::of($rekap)
                ->addColumn('total', function ($rekap) {
                    return $rekap->aduan->count();
                })
                ->addColumn('waiting', function ($rekap) {
                    return $rekap->aduan->where('status', 'Waiting')->count();
                })
                ->addColumn('approved', function ($rekap) {
                    return $rekap->aduan->where('status', 'Approved')->count();
                })
                ->addColumn('rejected', function ($rekap) {
                    return $rekap->aduan->where('status', 'Rejected')->count();
                })
                ->addColumn('process', function ($rekap) {
                    return $rekap->aduan->where('status', 'On process')->count();
                })
                ->addColumn('complete', function ($rekap) {
                    return $rekap->aduan->where('status', 'Completed')->count();
                })
                ->make(true);
        }
    }

    //Rekap Kab Kota
    public function index_wilayah()
    {

        $wilayah = Wilayah::all();

        return view('admin.rekap.rekap_wilayah.index', compact('wilayah'));
    }

    public function getRekapWilayah(Request $request)
    {
        if ($request->ajax()) {
            $rekap = Wilayah::get();
            return Datatables::of($rekap)
                ->addColumn('total', function ($rekap) {
                    return $rekap->aduan->count();
                })
                ->addColumn('waiting', function ($rekap) {
                    return $rekap->aduan->where('status', 'Waiting')->count();
                })
                ->addColumn('approved', function ($rekap) {
                    return $rekap->aduan->where('status', 'Approved')->count();
                })
                ->addColumn('rejected', function ($rekap) {
                    return $rekap->aduan->where('status', 'Rejected')->count();
                })
                ->addColumn('process', function ($rekap) {
                    return $rekap->aduan->where('status', 'On process')->count();
                })
                ->addColumn('complete', function ($rekap) {
                    return $rekap->aduan->where('status', 'Completed')->count();
                })
                ->make(true);
        }
    }
}

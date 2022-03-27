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
    public function index()
    {

        return view('admin.rekap.rekap_status.index');
    }

    public function getRekap(Request $request)
    {
        // $rekap = Aduan::select('status');
        // dd($rekap->sum('status'));
       
        if ($request->ajax()) {
            $rekap = Aduan::select('*');
            return Datatables::of($rekap)
            ->addColumn('total', function ($rekap) {
                $jumlah = $rekap->count();
                
            })
            ->addColumn('waiting', function($rekap) {
                return $rekap::where('status','Waiting')->distinct()->count();
            })
            ->rawColumns(['total'])
            ->make();
        }
    }
}

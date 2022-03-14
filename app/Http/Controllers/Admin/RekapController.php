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
        if ($request->ajax()) {
            $rekap = Aduan::select('*');
            return Datatables::of($rekap)
                ->addIndexColumn()
                ->addColumn('total', function ($rekap) {

                    return $rekap->count();
                })
                ->addColumn('waiting', function ($rekap) {

                    return $rekap->where('status', 'Waiting')->count();
                })

                ->rawColumns()
                ->make(true);
        }
    }
}

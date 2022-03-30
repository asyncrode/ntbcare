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
        $rekap = Aduan::with('opd')
        ->select('id_opd',DB::raw('count(*) as total'))
        ->groupBy('id_opd')
        // ->where('status','Approved')
        ->get();
        dd($rekap);

        // $rekap = $rekap->where('status','Waiting');
        //  dd($rekap);

        return view('admin.rekap.rekap_status.index',compact('rekap'));
    }

    // public function getRekap(Request $request)
    // {
        
    //     // ->select('id_opd','status',DB::raw('count(*) as total'));
    //     // // $rekap = $rekap->where('status','Waiting');
    //     // $rekap = $rekap->groupBy('id_opd','status');
    //     // $rekap = $rekap->get();
    //     dd($rekap);

    //     if ($request->ajax()) {
    //         $rekap = Aduan::with('opd');
            
            
            
    //         return Datatables::of($rekap)
    //         // ->addColumn('id_opd', function ($rekap) {
    //         //     $rekap = $rekap->where('status','Waiting');
    //         //     $rekap = $rekap->groupBy('id_opd','status');
    //         //     $rekap = $rekap->get();
    //         //     if ($rekap->id_opd != null) {
    //         //         return $rekap->opd->nama;
    //         //     } else {
    //         //         $fx = '';
    //         //         $fx = $fx . '<span class="badge badge-danger">Aduan belum diteruskan</span>';
    //         //         return $fx;
    //         //     }
    //         // })
    //         ->editColumn('waiting', function ($rekap) {
    //             $data = array();
    //             $rekap = $rekap->select('id_opd','status',DB::raw('count(*) as total'));
    //             $rekap = $rekap->where('status','Waiting');
    //             $rekap = $rekap->groupBy('id_opd','status');
    //             $rekap = $rekap->pluck('total');
    //             return $rekap;
                
    //         })
    //         // ->addColumn('waiting', function($rekap) {
    //         //     return $rekap::where('status','Waiting')->distinct()->count();
    //         // })
    //         ->rawColumns(['waiting'])
    //         ->make(true);
    //     }
    // }
}

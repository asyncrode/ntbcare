<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kecamatan;
use App\Models\Wilayah;
use DataTables;

class KecamatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.kecamatan.index');
    }

    public function getKecamatan()
    {
        $kecamatan = Kecamatan::all();
        return Datatables::of($kecamatan)
            ->addIndexColumn()
            ->addColumn('id_wilayahs',function($kecamatan){
                if($kecamatan->id_wilayahs != null)
                {
                    return $kecamatan->wilayah->nama_will;
                }
            })
            ->addColumn('action',function($row){
                $btn = '';
                $btn = $btn.'<a href = "javascript:void(0)" data-id = "'.$row->id.'" id = "edit" class = "edit btn btn-primary btn-sm">Edit</a>';
                $btn = $btn.'<a href="javascript:void(0)" data-id="'.$row->id.'" id="delete" class="delete btn btn-danger btn-sm">Delete</a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        
    }

    public function getWilayah()
    {
        $wilayah = Wilayah::all();
        return response()->json([
            'status' => 'List Wilayah',
            'data'   => $wilayah
        ]);
    }

    public function store(Request $request)
    {
        $kecamatan = new Kecamatan;
        $kecamatan->id = $request->id;
        $kecamatan->id_wilayahs = $request->wilayah;
        $kecamatan->nama_kec = $request->nama;
        $kecamatan->save();
        return response()->json([
            'message' => 'Kecamatan Berhasil Di Tambah'
        ],200);
    }

    public function edit($id)
    {
        $kecamatan = Kecamatan::find($id);
        $wilayah = Wilayah::all();
        return response()->json([
            'message' => 'Edit Kecamatan',
            'data' => $kecamatan,
            'wilayah' => $wilayah
        ]);
    }

    public function update(Request $request,$id)
    {
        $kecamatan = Kecamatan::find($id);
        $kecamatan->id = $request->id;
        $kecamatan->id_wilayahs = $request->wilayah;
        $kecamatan->nama_kec = $request->nama;
        $kecamatan->save();
        return response()->json([
            'message' => 'Kecamatan Berhasil Di Update'
        ],200);
    }

    public function delete($id)
    {
        $kecamatan = Kecamatan::find($id);
        $kecamatan->delete();
        return response()->json([
            'message' => 'Kecamatan Deleted'
        ]);
    }
}

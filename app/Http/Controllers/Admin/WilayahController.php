<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wilayah;
use App\Models\Opd;
use DataTables;

class WilayahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.wilayah.index');
    }

    public function getWilayah()
    {
        $wilayah = Wilayah::all();
        return Datatables::of($wilayah)
            ->addIndexColumn()
            ->addColumn('id_opd',function($wilayah){
                if($wilayah->id_opd != null)
                {
                    return $wilayah->opd->nama;
                }
            })
            ->addColumn('action', function($row){
                $btn = '';
                $btn = $btn.'<a href="javascript:void(0)" data-id="'.$row->id.'" id="edit" class="edit btn btn-primary btn-sm">Edit</a>';
                $btn = $btn.'<a href="javascript:void(0)" data-id="'.$row->id.'" id="delete" class="delete btn btn-danger btn-sm">Delete</a>';

                 return $btn;
         })
         ->rawColumns(['action'])
         ->make(true);
        
    }

    public function getOpd()
    {
        $opd = Opd::all();
        return response()->json([
            'status' => 'List Opd',
            'data'   => $opd
        ]);
    }

    public function store(Request $request)
    {
        $wilayah = new Wilayah;
        $wilayah->id = $request->id;
        $wilayah->nama_will = $request->nama_will;
        $wilayah->id_opd = $request->opd;
        $wilayah->save();
        return response()->json([
            'message' => 'Wilayah Berhasil Di Tambah'
        ],200);
    }

    public function edit($id)
    {
        $wilayah = Wilayah::find($id);
        $opd = Opd::all();
        return response()->json([
            'message' => 'Wilayah Edit',
            'data'    => $wilayah,
            'opd'     => $opd
        ]);
    }

    public function update(Request $request,$id)
    {
        $wilayah = Wilayah::find($id);
        $wilayah->id = $request->id;
        $wilayah->nama_will = $request->nama_will;
        $wilayah->id_opd = $request->opd;
        $wilayah->save();
        return response()->json([
            'message'   => 'Opd Berhasil Di Update'
        ],200);
    }

    public function delete($id)
    {
        $wilayah = Wilayah::find($id);
        $wilayah->delete();
        return response()->json([
            'message'   => 'Wilayah Deleted'
        ]);
    }
    
}

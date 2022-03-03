<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use DataTables;

class KelurahanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.kelurahan.index');
    }

    public function getKelurahan()
    {
        $kelurahan = Kelurahan::all();
        return Datatables::of($kelurahan)
            ->addIndexColumn()
            ->addColumn('id_kecamatans', function ($kelurahan) {
                if ($kelurahan->id_kecamatans != null) {
                    return $kelurahan->kecamatan->nama_kec;
                }
            })
            ->addColumn('action', function ($row) {
                $btn = '';
                $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="edit" type="button" class="edit btn btn-primary btn-sm m-1" tittle="Edit"><i class="fa fa-pencil" ></i></button>';
                $btn = $btn . '<button href="javascript:void(0)" data-id="' . $row->id . '" id="delete" type="button" class="delete btn btn-danger btn-sm m-1" tittle="Hapus"><i class="fa fa-trash" ></i></button>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function getKecamatan()
    {
        $kecamatan = Kecamatan::all();
        return response()->json([
            'status' => 'List Kecamatan',
            'data'   => $kecamatan
        ]);
    }

    public function store(Request $request)
    {
        $kelurahan = new Kelurahan;
        $kelurahan->id = $request->id;
        $kelurahan->id_kecamatans = $request->kecamatan;
        $kelurahan->nama_kel = $request->nama;
        $kelurahan->save();
        return response()->json([
            'message' => 'Kelurahan Berhasil Di Tambah'
        ], 200);
    }

    public function edit($id)
    {
        $kelurahan = Kelurahan::find($id);
        $kecamatan = Kecamatan::all();
        return response()->json([
            'message' => 'Edit Kecamatan',
            'data' => $kelurahan,
            'kecamatan' => $kecamatan
        ]);
    }

    public function update(Request $request, $id)
    {
        $kelurahan = Kelurahan::find($id);
        $kelurahan->id = $request->id;
        $kelurahan->id_kecamatans = $request->kecamatan;
        $kelurahan->nama_kel = $request->nama;
        $kelurahan->save();
        return response()->json([
            'message' => 'Kelurahan Berhasil Di Update'
        ], 200);
    }

    public function delete($id)
    {
        $kelurahan = Kelurahan::find($id);
        $kelurahan->delete();
        return response()->json([
            'message' => 'Kelurahan Deleted'
        ]);
    }
}

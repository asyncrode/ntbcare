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
            ->addColumn('created_at', function ($wilayah) {

                return date('d-m-Y h:i', strtotime($wilayah->created_at));
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


    public function store(Request $request)
    {
        $wilayah = new Wilayah;
        $wilayah->id = $request->id;
        $wilayah->nama_will = $request->nama_will;
        $wilayah->save();
        return response()->json([
            'message' => 'Wilayah Berhasil Di Tambah'
        ], 200);
    }

    public function edit($id)
    {
        $wilayah = Wilayah::find($id);
        return response()->json([
            'message' => 'Wilayah Edit',
            'data'    => $wilayah,
        ]);
    }

    public function update(Request $request, $id)
    {
        $wilayah = Wilayah::find($id);
        $wilayah->id = $request->id;
        $wilayah->nama_will = $request->nama_will;
        $wilayah->save();
        return response()->json([
            'message'   => 'Opd Berhasil Di Update'
        ], 200);
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

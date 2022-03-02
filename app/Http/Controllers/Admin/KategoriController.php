<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use DataTables;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.kategori.index');
    }


    public function getKategori()
    {
        $kategori = Kategori::all();
        return Datatables::of($kategori)
            ->addIndexColumn()
            ->addColumn('action',function($row){
                $btn = '';
                $btn = $btn.'<a href = "javascript:void(0)" data-id = "'.$row->id.'" id = "edit" class = "edit btn btn-primary btn-sm">Edit</a>';
                $btn = $btn.'<a href="javascript:void(0)" data-id="'.$row->id.'" id="delete" class="delete btn btn-danger btn-sm">Delete</a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        
    }

    public function store(Request $request)
    {
        $kategori = new Kategori;
        $kategori->kategori = $request->kategori;
        $kategori->save();
        return response()->json([
            'message' => 'Kategori Berhasil Di Tambah'
        ],200);
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return response()->json([
            'message' => 'Edit Kategori',
            'data' => $kategori,
        ]);
    }

    public function update(Request $request,$id)
    {
        $kategori = Kategori::find($id);
        $kategori->kategori = $request->kategori;
        $kategori->save();
        return response()->json([
            'message' => 'Kategori Berhasil Di Update'
        ],200);
    }

    public function delete($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return response()->json([
            'message' => 'Kategori Deleted'
        ]);
    }
}

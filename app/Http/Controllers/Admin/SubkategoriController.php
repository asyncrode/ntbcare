<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subkategori;
use App\Models\Kategori;
use DataTables;

class SubkategoriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.subkategori.index');
    }

    public function getSubKategori()
    {
        $subkategori = Subkategori::all();
        return Datatables::of($subkategori)
            ->addIndexColumn()
            ->addColumn('id_kategori',function($subkategori){
                if($subkategori->id_kategori != null)
                {
                    return $subkategori->kategori->kategori;
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

    public function getKategori()
    {
        $kategori = Kategori::all();
        return response()->json([
            'status' => 'List Kategori',
            'data'   => $kategori
        ]);
    }

    public function store(Request $request)
    {
        $subkategori = new Subkategori;
        $subkategori->id_kategori = $request->kategori;
        $subkategori->subkategori = $request->nama;
        $subkategori->save();
        return response()->json([
            'message' => 'Subkategori Berhasil Di Tambah'
        ],200);
    }

    public function edit($id)
    {
        $subkategori = Subkategori::find($id);
        $kategori = Kategori::all();
        return response()->json([
            'message' => 'Edit Subaktegori',
            'data' => $subkategori,
            'kategori' => $kategori
        ]);
    }

    public function update(Request $request,$id)
    {
        $subkategori = Subkategori::find($id);
        $subkategori->id_kategori = $request->kategori;
        $subkategori->subkategori = $request->nama;
        $subkategori->save();
        return response()->json([
            'message' => 'Subkategori Berhasil Di Update'
        ],200);
    }

    public function delete($id)
    {
        $subkategori = Subkategori::find($id);
        $subkategori->delete();
        return response()->json([
            'message' => 'Subkategori Deleted'
        ]);
    }


}

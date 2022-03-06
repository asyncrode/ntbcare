<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aduan;
use App\Models\Kategori;
use App\Models\Wilayah;
use DataTables;


class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.laporan.index',compact('kategori'));
    }

    public function getLaporan(Request $request)
    {
        $laporan = Aduan::all();
        return Datatables::of($laporan)
            ->addIndexColumn()
            ->addColumn('id_pelapor', function ($laporan) {
                if ($laporan->id_pelapor != null) {
                    return $laporan->user->name;
                }
            })
            ->addColumn('id_kategori', function ($laporan) {
                if ($laporan->id_kategori != null) {
                    return $laporan->kategori->kategori;
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
}

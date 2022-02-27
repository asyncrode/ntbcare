<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aduan;
use App\Models\Kategori;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Subkategori;
use App\Models\Wilayah;
use App\Models\User;
use Auth;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('user.aduan.index');
    }

    public function getData()
    {
        $kategori = Kategori::all();
        $kecamatan = Kecamatan::all();
        $kelurahan = Kelurahan::all();
        $sub = Subkategori::all();
        $wilayah = Wilayah::all();

        $data = [
            'kategori' => $kategori,
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan,
            'sub' => $sub,
            'wilayah' => $wilayah
        ];
        return response()->json($data,200);

    }

    public function store(Request $request)
    {
        $gambar = $request->bukti;
        $gambar_ext = $gambar->getClientOriginalExtension();
        $name = $gambar->getClientOriginalName();'.'.$gambar_ext;
        $path = public_path().'/upload/aduan';
        $upload = $gambar->move($path,$name);

        $dokumen = $request->bukti_2;
        $doc_ext = $dokumen->getClientOriginalExtension();
        $dokumen_name = $dokumen->getClientOriginalName();'.'.$doc_ext;
        $path = public_path().'/upload/aduan';
        $upload = $dokumen->move($path,$dokumen_name);

        $aduan = new Aduan;
        $aduan->id_kategori = $request->kategori;
        $aduan->id_subkategori = $request->subkategori;
        $aduan->id_wil = $request->wilayah;
        $aduan->id_kec = $request->kecamatan;
        $aduan->id_kel = $request->kelurahan;
        $aduan->id_pelapor = Auth::user()->id;
        $aduan->alamat = $request->alamat;
        $aduan->bukti = $name;
        $aduan->bukti_2 = $dokumen_name;
        $aduan->pesan = $request->pesan;
        $aduan->status = 'Waiting';
        $aduan->save();
        return response()->json([
            'message' => 'Pengajuan berhasi di tambah'
        ],200);

    }
}

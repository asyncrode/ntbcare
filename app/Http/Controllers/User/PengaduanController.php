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
        return response()->json($kategori, 200);
    }

    public function getSubkategori(Request $request)
    {
        $kategori_id = $request->id;
        $subkategori = Subkategori::where('id_kategori',$kategori_id)->get();
        return response()->json($subkategori, 200);
    }

    public function getWilayah()
    {
        $wilayah = Wilayah::all();
        return response()->json($wilayah, 200);
    }

    public function getKecamatan(Request $request)
    {
        $wilayah_id = $request->id;
        $kecamatan = Kecamatan::where('id_wilayahs',$wilayah_id)->get();
        return response()->json($kecamatan, 200);
    }

    public function getKelurahan(Request $request)
    {
        $kecamatan_id = $request->id;
        $kelurahan = Kelurahan::where('id_kecamatans',$kecamatan_id)->get();
        return response()->json($kelurahan, 200);
    }

    public function store(Request $request)
    {
        $gambar = $request->bukti;
        $gambar_ext = $gambar->getClientOriginalExtension();
        $name = $gambar->getClientOriginalName();
        '.' . $gambar_ext;
        $path = public_path() . '/upload/aduan';
        $upload = $gambar->move($path, $name);

        $dokumen = $request->bukti_2;
        $doc_ext = $dokumen->getClientOriginalExtension();
        $dokumen_name = $dokumen->getClientOriginalName();
        '.' . $doc_ext;
        $path = public_path() . '/upload/aduan';
        $upload = $dokumen->move($path, $dokumen_name);

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
            'message' => 'Pengaduan berhasi dikirim'
        ], 200);
    }
}

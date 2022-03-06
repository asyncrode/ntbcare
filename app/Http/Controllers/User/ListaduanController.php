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
use App\Models\Komentar;
use Auth;

class ListaduanController extends Controller
{
    public function index()
    {
        $aduan = Aduan::all()->sortByDesc('created_at');
        $kategori = Kategori::all();
        $sub = Subkategori::all();
        return view('user.listaduan.index', compact('aduan', 'kategori', 'sub'));
    }

    public function listpengaduanku()
    {
        $aduan = Aduan::where('id_pelapor',Auth::user()->id)->get();
        $kategori = Kategori::all();
        $sub = Subkategori::all();
        return view('user.pengaduanku.index', compact('aduan', 'kategori', 'sub'));
    }
    public function listaduan($id)
    {
        $aduan = Aduan::where('id_pelapor',$id)->first();
        $kategori = Kategori::all();
        $sub = Subkategori::all();
        $user = User::all();
        $komentar = Komentar::where('id_aduan', $id)->orderBy('created_at')->get();
        
        return view('user.pengaduanku.detail', compact('aduan', 'kategori', 'sub', 'user','komentar'));
    }
}

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

class ListaduanController extends Controller
{
    public function index()
    {
        $aduan = Aduan::all()->sortByDesc('created_at');;
        $kategori = Kategori::all();
        $sub = Subkategori::all();
        return view('user.listaduan.index', compact('aduan', 'kategori', 'sub'));
    }

    public function listaduan()
    {
        $aduan = Aduan::all();
        $kategori = Kategori::all();
        $sub = Subkategori::all();
        $user = User::all();
        return view('user.pengaduanku.index', compact('aduan', 'kategori', 'sub', 'user'));
    }
}

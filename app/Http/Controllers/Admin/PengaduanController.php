<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aduan;
use App\Models\Kategori;
use App\Models\Subkategori;
use App\Models\User;
use App\Models\Wilayah;

class PengaduanController extends Controller
{
    public function index()
    {
        $aduan = Aduan::join('users', 'users.id', '=', 'aduans.id_pelapor')
            ->join('kategoris', 'kategoris.id', '=', 'aduans.id_kategori')
            ->join('subkategoris', 'subkategoris.id', '=', 'aduans.id_subkategori')
            ->join('wilayahs', 'wilayahs.id', '=', 'aduans.id_wil')
            ->get();
        // $aduan = Aduan::all();
        $kategori = Kategori::all();
        $user = User::join('aduans', 'aduans.id_pelapor', '=', 'users.id')->get();
        return view('admin.pengaduan.index', compact('aduan', 'kategori', 'user'));
    }
}

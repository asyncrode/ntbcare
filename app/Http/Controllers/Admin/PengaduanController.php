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
        $aduan = Aduan::all();
        $kategori = Kategori::all();
        // $kategori = Kategori::join('aduans', 'aduans.id_kategori', '=', 'kategoris.id')->get();
        $user = User::join('aduans', 'aduans.id_pelapor', '=', 'users.id')
            ->get();
        return view('admin.pengaduan.index', compact('aduan', 'kategori', 'user'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aduan;
use App\Models\kategori;

class PengaduanController extends Controller
{
    public function index()
    {
        $aduan = Aduan::all();
        $kategori = kategori::all();
        return view('admin.pengaduan.index',compact('aduan','kategori'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {

    }

    public function getKategori()
    {
        $kategori = Kategori::all();
        return response()->json($kategori,200);
    }
}

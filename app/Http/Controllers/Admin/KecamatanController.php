<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kecamatan;

class KecamatanController extends Controller
{
    public function index()
    {

    }

    public function getKecamatan()
    {
        $kecamatan = Kecamatan::all();
        return response()->json($kecamatan,200);
    }
}

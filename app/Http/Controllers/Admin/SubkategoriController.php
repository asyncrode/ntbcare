<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subkategori;

class SubkategoriController extends Controller
{
    public function index()
    {

    }

    public function getSubkategori()
    {
        $sub = Subkategori::all();
        return response()->json($sub,200);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelurahan;

class KelurahanController extends Controller
{
    public function index()
    {

    }

    public function getKelurahan()
    {
        $kelurahan = Kelurahan::all();
        return response()->json($kelurahan,200);
    }
}

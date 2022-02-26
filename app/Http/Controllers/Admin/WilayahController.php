<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wilayah;

class WilayahController extends Controller
{
    public function index()
    {

    }

    public function getWilayah()
    {
        $wilayah = Wilayah::all();
        return response()->json($wilayah,200);
    }
}

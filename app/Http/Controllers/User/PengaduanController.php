<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aduan;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('user.aduan.index');
    }
}

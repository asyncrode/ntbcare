<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aduan;
use App\Models\Admin;
use App\Models\Kategori;
use App\Models\Subkategori;
use App\Models\User;
use App\Models\Komentar;
use App\Models\Wilayah;
use App\Models\Opd;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        // $status = Aduan::all()->where('id_kategori', '=', 1)->where('status', '=', 'Rejected')->count();
        // dd($status);

        $aduan = Aduan::all();
        $kategori = Kategori::all();
        $user = User::all();
        $sub = Subkategori::all();
        $today = Aduan::whereDate('created_at', '=', Carbon::today())->get();

        return view('admin/dashboard', compact('aduan', 'kategori', 'user', 'sub', 'today'));
    }
}

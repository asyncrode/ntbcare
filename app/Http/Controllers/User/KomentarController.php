<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Komentar;
use Auth;

class KomentarController extends Controller
{
    public function store(Request $request)
    {
        $komentar = new Komentar;
        $komentar->komentar = $request->komentar;
        $komentar->id_aduan = $request->id_aduan;
        $komentar->id_user = Auth::user()->id;
        $komentar->save();
        return response()->json([
            'message' => 'Aduan Berhasil Di Input'
        ], 200);
    }
}

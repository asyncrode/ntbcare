<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Untold;
use App\Models\UntoldGambar;
use App\Models\UntoldVideo;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $untold = Untold::all()->sortByDesc('created_at');
        $gambar = UntoldGambar::all();
        $video = UntoldVideo::all();

        return view('user.home', compact('untold', 'gambar', 'video'));
    }

    // public function story()
    // {
    //     return view('user.story');
    // }
}

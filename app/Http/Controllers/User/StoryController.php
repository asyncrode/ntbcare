<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Untold;
use App\Models\UntoldGambar;
use App\Models\UntoldVideo;

class StoryController extends Controller
{
    public function index()
    {
        $untold = Untold::all()->sortByDesc('created_at');
        $gambar = UntoldGambar::all();
        $video = UntoldVideo::all();

        return view('user.story.index', compact('untold', 'gambar', 'video'));
    }

    public function detailStory()
    {

        return view('user.story.detail');
    }
}

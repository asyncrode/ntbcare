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

    public function detailStory($id)
    {
        // $aduan = Aduan::where('aduans.id', $id)->first();
        $untold = Untold::where('untolds.id', $id)->first();
        $gambar = UntoldGambar::where('id_untold', $id)->get();
        $gambarD = UntoldGambar::all();
        $video = UntoldVideo::all();
        $detail = Untold::find($id);

        return view('user.story.detail', compact('detail', 'untold', 'gambar', 'video', 'gambarD'));
    }
}

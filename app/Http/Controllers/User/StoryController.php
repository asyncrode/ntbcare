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
        $untold = Untold::with('gambar')->has('gambar')->orderBy('created_at', 'desc')->simplePaginate(3);
        $video =  Untold::with('video')->has('video')->orderBy('created_at', 'desc')->get();
        return view('user.story.index', compact('untold', 'video'));
    }

    public function detailStory($id)
    {
        // $aduan = Aduan::where('aduans.id', $id)->first();
        $untold = Untold::with('gambar')->has('gambar')->orderBy('created_at', 'desc')->get();
        $video =  Untold::with('video')->has('video')->orderBy('created_at', 'desc')->get();
        $detail = Untold::find($id);
        $gambar = UntoldGambar::all();

        return view('user.story.detail', compact('detail', 'untold', 'video', 'gambar'));
    }
}

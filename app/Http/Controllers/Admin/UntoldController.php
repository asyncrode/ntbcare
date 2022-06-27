<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Untold;
use App\Models\UntoldGambar;
use App\Models\UntoldVideo;

class UntoldController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.untold.post');
    }

    public function index_video()
    {
        return view('admin.untold.post_video');
    }

    public function getUntold()
    {
    }

    public function store(Request $request)
    {
        $untold = new Untold;
        $untold->judul = $request->judul;
        $untold->shortdesc = $request->shortdesc;
        $untold->description = $request->description;
        $untold->save();

        if ($request->hasfile('gambar')) {
            $gambar = $request->gambar;
            $gambar_ext = $gambar->getClientOriginalExtension();
            $name = $gambar->getClientOriginalName();
            '.' . $gambar_ext;
            $path = public_path() . '/upload/untold_gambar';
            $upload = $gambar->move($path, $name);

            $gambar_data = new UntoldGambar;
            $gambar_data->gambar = $name;
            $gambar_data->id_untold = $untold->id;
            $gambar_data->save();
        }

        return response()->json([
            'message' => 'Untold Story Berhasil Ditambah'
        ], 200);
    }

    public function store_video(Request $request)
    {


        $untold = new Untold;
        $untold->judul = $request->judul;
        $untold->shortdesc = $request->shortdesc;
        $untold->save();


        if ($request->hasfile('video')) {
            $video = $request->video;
            $video_ext = $video->getClientOriginalExtension();
            $name = $video->getClientOriginalName();
            '.' . $video_ext;
            $path = public_path() . '/upload/untold_video';
            $upload = $video->move($path, $name);

            $video_data = new UntoldVideo;
            $video_data->video = $name;
            $video_data->id_untold = $untold->id;
            $video_data->save();
        }


        return response()->json([
            'message' => 'Video Berhasil Di Tambah'
        ], 200);
    }
}

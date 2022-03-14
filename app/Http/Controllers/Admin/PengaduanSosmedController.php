<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Facebook;

class PengaduanSosmedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }



    public function get()
    {
        $token = 'EAAHFT0ZCIrsMBAORLQmwscrobYNEqx8oi0mGMp0zoUxXlSj4WDZCcxfEzkEdS8WY739GEATJ8ZBSQDjRTBuoM38rDkFcVXfGYJnuQCsM1OZBCcc1RpRPvhzM4fRP4MEClWvYFiIQdVBwFdVtEYpWCf205n2xZAmyyvZCIBI3oOV62WF9qb7fQnnnhImvOQBfC5nn2POZA2fDwZDZD';

        try {
        $response = Facebook::get('/me?fields=id,name,visitor_posts{message,full_picture,created_time}', $token);
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
        dd($e->getMessage());
        }

        $aduan_sosmed = $response->getGraphUser();
        $data_sosmed = array();
        $data_sosmed = $aduan_sosmed->getProperty('visitor_posts')->asArray();
        // dd($response);
        return view('admin.pengaduan.sosmed', compact('data_sosmed'));
    }
}

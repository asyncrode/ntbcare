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
        $token = 'EAAHFT0ZCIrsMBAG3NhmwAcnbp6RK4lCgBGBQMcr7vtN6e4jVADqlT4hE96D9bGeedTHJ8PlbjbLCZCy35xGs4cF0oo9YhoGeYmawKJKMy9e9TxbjXQ32vT8wRGPjICXhZAEf7GUV03bCsoQEtLa6rdwi00wOVnG0ceOuImXW1mmRDwBPwZCY3GZAvgaXWKhHykTnyc6fk6QZDZD';

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

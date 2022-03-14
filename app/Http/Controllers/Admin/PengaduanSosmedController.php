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
        $token = 'EAAHFT0ZCIrsMBADhfSFeqAtNZC8gzgU2P5AirtCk6fen3A3YYlT4xSUPBYZCZAEE2e110Ud3waHlYZAM4DqIlCJbjUx4DVMqgPysW9EcIcWUierNa6sIsIueGcnkbP5w5ZCH537D8JJOPt3Yw86x7idZB2hwxKaiLtHovGrlzXmVTMjAZCh85pX5ciul2iSHv5gM96gBrkYfJAZDZD';

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

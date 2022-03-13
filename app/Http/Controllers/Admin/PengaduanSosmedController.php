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
        $token = 'EAAHFT0ZCIrsMBAKIBge0Uu4rCVo8SUkIhA2ZCwdb1cvAvZC1cuajxGctWP7YfM86zZB3RCGsXeqKUkEBrZCyTEvF8DRWt0wBWTbwKmqtITZBpzhgH8bkdxg26uuiUZBBEaVwoDMwFlMHobboSgRw5f53xkhQCHZBGOE9aEdUkt8NoNI9th4ZAO5PodvXHCsF4ZB27uHBgd2NEu3AZDZD';
        
        try {
            $response = Facebook::get('/me?fields=id,name,visitor_posts{message,picture,created_time}', $token);
          } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            dd($e->getMessage());
          }
          
          $aduan_sosmed = $response->getGraphUser();
          dd($aduan_sosmed->getProperty('visitor_posts')->asArray());
          return view('',compact('aduan_sosmed'));
    }
}

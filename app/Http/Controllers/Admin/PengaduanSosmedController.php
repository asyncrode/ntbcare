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
    // $token = 'EAAHFT0ZCIrsMBAKIBge0Uu4rCVo8SUkIhA2ZCwdb1cvAvZC1cuajxGctWP7YfM86zZB3RCGsXeqKUkEBrZCyTEvF8DRWt0wBWTbwKmqtITZBpzhgH8bkdxg26uuiUZBBEaVwoDMwFlMHobboSgRw5f53xkhQCHZBGOE9aEdUkt8NoNI9th4ZAO5PodvXHCsF4ZB27uHBgd2NEu3AZDZD';
    $token = 'EAAHFT0ZCIrsMBAKsdQx1sfwMpSjpGzPAvYbHXSmzrHZBVH6Mwn7FRzeoT80QYtXPAyvV5LgjyaItfNzIfiZAyOnqjOOGbKDUu9x9otOF19W7W1BwRtZCP7e75ZBsTlJpeBoxzCDxWEgejqFQMHUGVX3g0Isf296onwOLZC8E1HrfZCsjKSMTxey9tkFveXZCP6kZD';

    try {
      $response = Facebook::get('/me?fields=id,name,visitor_posts{message,picture,created_time}', $token);
    } catch (\Facebook\Exceptions\FacebookSDKException $e) {
      dd($e->getMessage());
    }

    $aduan_sosmed = $response->getGraphUser();
    dd($aduan_sosmed->getProperty('visitor_posts')->asArray());
    return view('admin.pengaduan.sosmed', compact('aduan_sosmed'));
  }
}

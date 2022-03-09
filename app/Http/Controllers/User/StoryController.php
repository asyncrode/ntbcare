<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {

        return view('user.story.index');
    }

    public function detailStory()
    {

        return view('user.story.detail');
    }
}

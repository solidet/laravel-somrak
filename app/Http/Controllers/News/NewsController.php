<?php

namespace App\Http\Controllers\News;

use App\User;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        // return view('news.news', ['user' => User::findOrFail($id)]);
        return view('news.news');
    }
}
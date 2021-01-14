<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PageController extends Controller
{
    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }
    public function getAbout()
    {
        return view('pages.about');
    }
}

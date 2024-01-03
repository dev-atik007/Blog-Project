<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class WebsiteController extends Controller
{
    public function website()
    {
        $post = Post::all();
        return view('website.home', compact('post'));
    }

    public function singlePage($id)
    {
        $post = Post::find($id);
        return view('website.single_page.page',compact('post'));
    }

    
}

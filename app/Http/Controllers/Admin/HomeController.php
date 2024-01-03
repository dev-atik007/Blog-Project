<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user')
            {
                $post = Post::all();
                return view('website.home', compact('post'));
            }
            else if($usertype == 'admin')
            {
                return view('admin.dashboard');
            }
            else
            {
                return redirect()->back();
            }
        }
    }
}

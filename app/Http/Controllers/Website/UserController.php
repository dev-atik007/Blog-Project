<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Console\View\Components\Alert;
use Alert;

class UserController extends Controller
{
    public function createPost()
    {
        return view('website.create_post');
    }

    public function store(Request $request)
    {
        $post  = new Post();

        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('postImage', $imagename);
            $post->image = $imagename;
        }

        // Data Validate
        $request->validate([
            'title'         => 'required|min:2, max:100, string',
            'image'         => 'nullable',
            'description'   => 'required',
        ]);

        $user = Auth()->user();
        $userid   = $user->id;
        $username = $user->name;
        $usertype = $user->usertype;
        

        $post->title        = $request->title;
        $post->description  = $request->description;
        $post->user_id      = $userid;
        $post->name         = $username;
        $post->usertype     = $usertype;
        $post->post_status  = 'pending';
        $post->save();

        Alert::info('Congrats', 'You have Added the data Successfully');

        return redirect()->back();
    }

    public function myPost()
    {
        return view('website.user_post.user_post');
    }
}

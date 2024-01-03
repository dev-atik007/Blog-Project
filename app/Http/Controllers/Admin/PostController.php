<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(Request $request)
    {
        // This is image part
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postImage',$imagename);
        // Auth
        $user = Auth()->user();
        $userid = $user->id;
        $name    = $user->name;
        $usertype= $user->usertype;

        // Data Validate
        $request->validate([
            'title'         => 'required|min:2, max:100, string',
            'image'         => 'nullable',
            'description'   => 'required',
        ]);

        // Data Insert
        $post = new Post();

        $post->title        = $request->title;
        $post->description  = $request->description;
        $post->image        = $imagename;
        $post->post_status  = 'active';
        $post->user_id      = $userid;
        $post->name         = $name;
        $post->usertype     = $usertype;
        $post->save();

        if($post) {
            toastr()->success('Post data has been Insert successfully!');
            return redirect()->back();
        }else {
            // Toastr()->error('Fill up Brand Credential!');
            toastr()->error('An error has occurred please try again later.');
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $data = Post::find($id);

        // Image
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('postImage',$imagename);


        // Data Validate
        $request->validate([
            'title'         => 'required|min:2, max:100, string',
            'description'   => 'required',
        ]);

        $data->title        = $request->title;
        $data->description  = $request->description;
        $data->image        = $imagename;
        $data->save();

        toastr()->success('Data successfully updated !');
        return redirect()->back();
    }

    public function delete($id)
    {
        $post = Post::find($id);
            if ($post) {
                $post->delete();
                return redirect()->back()->with('message', 'Data Delete Successfully');
            } else {
                return redirect()->route('post.index');
            }
    }
}

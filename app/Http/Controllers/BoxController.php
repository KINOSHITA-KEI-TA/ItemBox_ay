<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BoxController extends Controller
{
    public function index()
    {
       $posts = Post::all();
       return view('box',['posts' => $posts]);

    }
    public function delete(Request $request)
    {
        $postId = (int) $request->route('postId');
        $post = Post::where('id', $postId)->firstOrFail();
        $post->delete();
        return redirect('/');
        // $post = Post::find($id);
        // $post->delete();
        // return view('box',['posts' => $posts]);
    }

    public function edit(Request $request)
    {
        $postId = (int) $request->route('postId');
        $post = Post::where('id', $postId)->firstOrFail();
        $post->edit();
        // $post = Post::find($id);
        return view('book.edit',compact('box_PC','box_group','box_name','box_id'));
    }
}

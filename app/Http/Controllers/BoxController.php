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
        // $post->edit();
        // $post = Post::find($id);
        return view('edit',compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->box_PC = $request->input('box_PC');
        $post->box_type = $request->input('box_type');
        $post->box_group = $request->input('box_group');
        $post->box_name = $request->input('box_name');
        $post->box_id = $request->input('box_id');
        $post->save();
        return redirect('/')->with('success', '更新しました');
    }
}

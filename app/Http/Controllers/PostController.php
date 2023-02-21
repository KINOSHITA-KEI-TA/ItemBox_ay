<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = POST::all();
    }
    public function create()
    {
        // return view('box');
        $posts = Post::all();
        return view('box',['posts' => $posts]);

    }

    public function store(Request $request)
    {
        $post = new POST();
        $post->box_PC = $request->box_PC;
        $post->box_type = $request->box_type;
        $post->box_group = $request->box_group;
        $post->box_name = $request->box_name;
        $post->box_id = $request->box_id;
        $request->validate(
            [
                'box_PC' =>  'required',
                'box_group' => 'required',
                'box_name' => 'required',
                'box_id' => 'required',
            ]
        );
        // $post->management = $request->management();
        $post->save();
        return redirect()->route('post.create');
    }
}

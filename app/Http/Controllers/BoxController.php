<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoxController extends Controller
{
    public function index()
    {
        $posts = Post::all();
    }



    public function store(Request $request)
    {
        $post = new Post();
        $post->box_PC = $request->box_PC;
        $post->box_group = $request->box_group;
        $post->box_name = $request->box_name;
        $post->box_id = $request->box_id;
        $request->validate(
            [
                'box_PC' =>  'required',
                'box_name' => 'required',
                'box_id' => 'required',
            ]
        );
        // $post->management = $request->management();
        $post->save();
        return redirect()->route('/');
    }
}

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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index()
    {
        Log::debug('An informational message.');
        return view('add-blog-post-form');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:6',
            'description' => 'required|min:3|max:100'
        ],
        [
            'title.required' => 'Լրացրեք title',
            'description.required' => 'Լրացրեք description',
        ]

    );


        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();



        return redirect('add-blog-post-form')->with('status', 'Blog Post Form Data Has Been inserted');


    }


}

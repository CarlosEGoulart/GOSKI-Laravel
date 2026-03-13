<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $post = new Post();
        
        $post->description = $request->description;
        $post->image_url = $request->image_url;
        
        $post->user_id = $request->Auth::User()->id;
        
        $post->save();
        
        return redirect('feed');
    }
}
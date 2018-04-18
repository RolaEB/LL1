<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Requests\StorePostRequest;



class PostController extends Controller
{
    //
    public function index(){
        $posts= Post::paginate(2);
        return PostResource::collection($posts);
    }
    public function store(StorePostRequest $request){
        $post= Post::create($request->all());
        return new PostResource ($post);
    

    }
}

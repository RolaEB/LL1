<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\User;
use App\Post;

class PostController extends Controller
{
    //
    public function index(){
        $posts=Post::all();
        $users = User::all();
        return view('index',['posts' => $posts]);
    }

    public function create(){
        $users = User::all();
        return view('create',[
            'users' => $users
        ]);
        }
    public function store(Request $request){
                // dd($request->all());
                Post::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'user_id' => $request->user_id
                ]);
                
               return redirect('/posts'); 
    }

    public function show ( $post){

        return view('show', ['post' => Post::findOrFail($post)]);
       
    }
    
    public function edit ($post){
        $users = User::all();
        return view('edit',[
            'users' => $users
        ]);
    }

    public function update (Post $post){
       
       $post->fill([
           'title'=>$post->title,
           'description'=>$post->description,
           'user_id'=>$post->user_id
       ]);
            return redirect('/posts');   
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect('/posts');   

    }
    
}

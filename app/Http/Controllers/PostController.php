<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\View\Middleware\ShareErrorsFromSession;

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
    public function store(StorePostRequest $request){
                // dd($request->all());
                Post::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'user_id' => $request->user_id,
                ]);
                
               return redirect('/posts'); 
    }

    public function show ( $post){

        return view('show', ['post' => Post::findOrFail($post)]);
       
    }
    
    public function edit ($post){
        $users = User::all();
        return view('edit',[
            'post'=>$post,
             'users' => $users
        ]);
    }

    public function update (StorePostRequest $request,Post  $post){
        $post->update([

            'title' => $request->title,
            'description'=>$request->description,
            'user_id'=>$request->user_id
            
        ]);
        
             return redirect('/posts');      
    }

    public function destroy( $post){
        $deletepost=Post::find($post);
        $deletepost->delete();
        
        return redirect('/posts');   

    }
    
}

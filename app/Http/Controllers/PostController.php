<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index(){
       $posts = Post::get();
        return view('post.index', compact('posts'));
   }

   public function create(){
       return view('post.create');
   }

   public function store(Request $request){
    $post = new Post();
    $post->title = $request->title;
    $post->content = $request->content;



    $post->save();
    return redirect()->route('post.index');
   }

   public function edit ($id){
       $post = Post::find($id);
       return view('post.edit', compact('post'));
   }


   public function update(Request $request , $id){
        $post = Post::find($id);
       $post->title = $request->title;
       $post->content = $request->content;
       $post->save();
       return redirect()->route('post.index');

   }

   public function delete($id){
       $post = Post::find($id);
       $post->delete();
       return redirect()->route('post.index');


   }


}

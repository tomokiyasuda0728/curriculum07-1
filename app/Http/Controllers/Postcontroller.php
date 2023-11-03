<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;


class Postcontroller extends Controller
{
       public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('posts.index') ->with(['posts' => $post->getPaginateByLimit(3)]);//$postの中身を戻り値にする。
    }
    
        public function show(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
       return view('posts.show') ->with(['post' => $post]);//$postの中身を戻り値にする。
    }
    
       public function create()
    {
       return view('posts.create');
    }
    
      public function store(Post $post, PostRequest $request)
    {
       $input = $request['post'];
       $post -> fill($input)->save();
       return redirect('/posts/' . $post->id);
    }
    
        public function edit(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
       return view('posts.edit') ->with(['post' => $post]);//$postの中身を戻り値にする。
    }
    
     public function update(Post $post, PostRequest $request)
    {
       $input_post = $request['post'];
       $post -> fill($input_post)->save();
       return redirect('/posts/' . $post->id);
    }
    
     public function delete(Post $post)
    {
       $post->delete();
       return redirect('/');
    }
    
}

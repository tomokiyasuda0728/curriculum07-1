<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class Postcontroller extends Controller
{
        public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        return view('posts.index') ->with(['posts' => $post->getPaginateByLimit(1)]);//$postの中身を戻り値にする。
    }
}

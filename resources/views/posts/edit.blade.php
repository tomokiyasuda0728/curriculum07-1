<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }})">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
       <h1 class=title>編集画面</h1>
       <div class="content">
           <form action="/posts/{{ $post->id }}" method="POST">
               @csrf
               @method('PUT')
               <div class='content_title'>
                   <h2>title</h2>
                   <input type='text' name='post[title]' value="{{ $post->title }}"/>
                   <p class="title_error" style="color:red">{{ $errors->first('post.title') }}</p>
               </div>
               <div class='content_body'>
                   <h2>Body</h2>
                   <textarea name='post[body]'>{{ $post->body }}</textarea>
                   <p class="body_error" style="color:red">{{ $errors->first('post.body') }}</p>
               </div>
               <input type="submit" value="update"/>
           </form>
       </div>
       <div class="footer">
            <a href="/posts/{{ $post->id }}">戻る</a>
       </div>
    </body>

</html>
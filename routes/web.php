<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts');
});

Route::get('/post/{post}', function ($slug) {

    //find a post by its slug and pass the view called "post"
$post = Post::find($slug);

    return view('post', [
        'post' => $post 
    ]);
    /*
   
   if(! file_exists($path = __DIR__ . "/../resources/posts/{$slug}.html" )) {
    return redirect('/');
   }
$post = cache()->remember("posts.{$slug}", 1200, function() use ($path) {
    return file_get_contents($path);
});
   

  return view('post', [ 
    'post' => $post
  ]);*/
})->where('post', '[A-z_\-]+');

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return $name;
    return "<h1>Hello World</h1>";
});



// JS Example route
 
    Route::get('test', function () {

        //get url param
        $name = request('name');

        return view('test', [
            "name" => $name
        ]);
    });
 

//wild card example route basic

// Route::get('/posts/{post}', function ($post) {
//     return $post;
// });


//wild card example route advanced
Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post..',
        'my-second-post' => 'Hello, this is my 2nd blog post...'
    ];

    if(! array_key_exists($post, $posts)){
        abort(404, 'Sorry, that post was not found..');
    }

    return view('post', [
        // 'post' => $posts[$post] ?? 'Nothing here yer...'  //this provides a default if the post is not found
        'post' => $posts[$post]  
    ]);
});
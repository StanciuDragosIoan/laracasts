<?php

/*
    Route Wild Cards

        often we'll need to construct a route that accepts a wild card value

        if we do for instance:

        @code:


            Route::get('/posts/{post}', function () {
                return view('post');
            });

        this route /posts/anything... (string, numbers, etc...) we'll get redirected
        to the post view (post.blade.php)

        we can capture the {post} variable as :


        Route::get('/posts/{post}', function ($post) {
            return $post;
        });

        we can also set an associative array to mimmick a DB (see how we handle the
        default case when the post does not exist):

 
        Route::get('/posts/{post}', function ($post) {
            $posts = [
                'my-first-post' => 'Hello, this is my first blog post..',
                'my-second-post' => 'Hello, this is my 2nd blog post...'
            ];

            return view('post', [
                 'post' => $posts[$post] ?? 'Nothing here yer...'  
               
            ]);
        });


        we can also handle the default with the abort() method:

        Route::get('/posts/{post}', function ($post) {
            $posts = [
                'my-first-post' => 'Hello, this is my first blog post..',
                'my-second-post' => 'Hello, this is my 2nd blog post...'
            ];

            if(! array_key_exists($post, $posts)){
                abort(404, 'Sorry, that post was not found..');
            }

            return view('post', [
                'post' => $posts[$post]  
            ]);
        });

*/
<?php

/*
    we can fetch URL params with laravel like so:

    Route::get('test', function () {

        //get url param
        $name = request('name');

        return view('test', [
            "name" => $name
        ]);
    });

        *we can also fetch and work with form data in a smilar way

    we can pass this into the view:

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
            <h1>{{ $name }}</h1> 
        </body>
        </html>

    the view is being compiled down to regular html and php in the framework/views files:

    <body>
        <div class="flex-center position-ref full-height">
            <div class="code">
                <?php echo $__env->yieldContent('code'); ?>
            </div>

            <div class="message" style="padding: 10px;">
                <?php echo $__env->yieldContent('message'); ?>
            </div>
        </div>
    </body>

    in the templateing eingine the {{ $name }} syntax escapes the data
        but 
    the { !! $name !! } syntax will not escape it (JS will run in this case 
        -> ?name = <script>..)
    sometimes we might not want to escape the data (e.g. if we fetch html from the database)

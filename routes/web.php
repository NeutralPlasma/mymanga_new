<?php

use Virtus\Controllers\ComicController;
use Virtus\Handlers\CustomExceptionHandler;
use Virtus\Middlewares;
use Virtus\Router;
use Jenssegers\Blade\Blade;


$blade = new Blade('views', 'cache');

Router::csrfVerifier(new Middlewares\CsrfVerifier());

Router::group(['namespace' => '\Virtus\Controllers',
    'exceptionHandler' => CustomExceptionHandler::class,
    'middleware' => [Middlewares\Autherization::class]], function () {



    // Default
    Router::get('/?', 'DefaultController@home');
    Router::get('/{page}', 'DefaultController@paged');



	Router::get('/', 'DefaultController@home');

	Router::get('/contact', 'DefaultController@contact')->setName('contact');

	Router::basic('/companies/{id?}', 'DefaultController@companies')->setName('companies');



	Router::resource("/comic", ComicController::class);
    Router::resource("/user", ComicController::class);

    // CALLBACK EXAMPLES

    Router::get('/foo', function() {
        return 'foo';
    });

    Router::get('/foo-bar', function() {
        return 'foo-bar';
    });


    // Not found thingy.
    Router::get('/not-found', function(){
        return view('view.404');
    });

});



<?php

use Virtus\Handlers\CustomExceptionHandler;
use Virtus\Middlewares;
use Virtus\Router;




Router::csrfVerifier(new Middlewares\CsrfVerifier());

Router::group(['namespace' => '\Demo\Controllers\api','prefix' => '/api', 'middleware' => Middlewares\ApiVerification::class, 'exceptionHandler' => CustomExceptionHandler::class], function () {


    // USER API
    Router::resource('/user', 'UserControllerAPI');


});
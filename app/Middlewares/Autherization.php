<?php
namespace Virtus\Middlewares;

use Core\Auth;
use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;

class Autherization implements IMiddleware
{
	public function handle(Request $request): void
	{
        if(Auth::auth()->isAuthenticated){
            $request->authenticated = true;
        }else{
            $request->authenticated = false;
        }

	}

}
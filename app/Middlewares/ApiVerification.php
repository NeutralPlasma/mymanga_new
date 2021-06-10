<?php
namespace Virtus\Middlewares;

use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;

class ApiVerification implements IMiddleware
{
	public function handle(Request $request) : void
	{
		// Do authentication
        // get database check and verify bearer token.
        if(preg_match("/Bearer\s(\S+)/", $request->getHeader("http_authorization"), $matches)){
            // VERIFY THE TOKEN
            $request->authenticated = $matches[1];
        }else{
//            Redirect to not autherizated page.
            $request->authenticated = "null";
        }
	}

}
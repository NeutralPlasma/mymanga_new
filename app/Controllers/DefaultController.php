<?php
namespace Virtus\Controllers;

use Core\Auth;

class DefaultController
{
	public function home(): string
	{
        return view("test", ['user' => Auth::auth()->getCurrentUser()]);
	}

	public function paged($page): string
	{
	    return view("test", ['user' => Auth::auth()->getCurrentUser(), 'page' => $page]);
	}

	public function companies($id = null): string
	{
        return 'DefaultController -> companies -> id: ' . $id;
	}

    public function notFound(): string
    {
        return 'Page not found';
    }

}
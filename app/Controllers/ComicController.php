<?php
namespace Virtus\Controllers;

class ComicController
{

    public function index($id = "none"): string
    {
        return $id;
//        return view("test", []);
    }

    public function getView($id): string{
        return $id;
    }


	public function home(): string
	{
		// implement
        return 'da';
	}

	public function contact(): string
	{
	    return view("test", []);
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
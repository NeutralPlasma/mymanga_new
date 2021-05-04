<?php
require_once "DBController.php";
require_once "UserController.php";

class AuthController{

    static function getUser(){
        $uc = new UserController();

    }

    public function login($data): bool{

        // TODO: Verify input data

        // TODO: Verify login

        // TODO: Setup cookies if successful login and remember me is checked

        return false;
    }

    public function logout(){
        // TODO: clear cookies

        // TODO: clear and destroy session
    }

    private function setupCookies(){
        // TODO: Do the cookie thing!
    }


}
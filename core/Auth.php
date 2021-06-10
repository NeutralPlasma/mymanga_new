<?php
namespace Core;

use PDO;
use PHPAuth\Config as PHPAuthConfig;
use PHPAuth\Auth as PHPAuth;

class Auth
{
    /**
     * @var PHPAuth The reference to *Singleton* instance of this class
     */
    protected static $instance;
    protected static $config;

    /**
     * @return PHPAuth
     */
    public static function auth(): PHPAuth
    {
        if (null === static::$instance) {
            $dbh = new PDO("mysql:host=localhost;dbname=test", "root", "");
            static::$config = new PHPAuthConfig($dbh);
            static::$instance = new PHPAuth($dbh, static::$config);
        }

        return static::$instance;
    }

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct(){}

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone(){ }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     */
    private function __wakeup(){}
}
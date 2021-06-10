<?php
namespace Core;

use Rakit\Validation\Validator;

class ValidationEngine
{
    /**
     * @var Singleton The reference to *Singleton* instance of this class
     */
    protected static $instance;

    /**
     * @param $viewsPath
     * @param $viewsCachePath
     * @return Singleton
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new Validator();
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
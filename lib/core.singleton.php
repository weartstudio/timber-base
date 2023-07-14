<?php

class Singleton
{
    public static function getInstance()
    {
        static $instance = false;
        if( $instance === false ) {
            $instance = new static();
        }

        return $instance;
    }

    public function __construct() {}
    public function __clone() {}
    public function __sleep() {}
    public function __wakeup() {}
}
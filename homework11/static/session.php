<?php

class Session
{
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key)
    {
        return $_SESSION[$key];
    }

    public static function flash($key)
    {
        $value = $_SESSION[$key];
        self::remove($key);
        return $value;
    }

    public static function remove($key)
    {
        unset($_SESSION[$key]);
    }

    public static function removeAll()
    {
        session_destroy();
    }

    public static function getAll()
    {
        return $_SESSION;
    }
}

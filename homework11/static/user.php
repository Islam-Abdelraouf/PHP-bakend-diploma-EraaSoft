<?php

class User
{
    public static $types = ["admin", "writer"];

    public static function generateId()
    {
        return time() . rand(1000, 100000) . self::$types[0];
    }
}

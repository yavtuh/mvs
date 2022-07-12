<?php


namespace Core;
use Config\Config;
use PDO;

abstract class Model
{
    protected static PDO|null $connect = null;

    public static function connect()
    {
        if(is_null(static::$connect)){
            $dsn = 'mysql:host='.Config::get('db.host').';port=3305;dbname='.Config::get('db.database');
            self::$connect = new PDO(
                $dsn,
                Config::get('db.user'),
                Config::get('db.password')
            );
            $options = [
              PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
            ];

            self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }

        return self::$connect;
    }
}
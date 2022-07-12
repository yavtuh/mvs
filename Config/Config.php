<?php

namespace Config;

class Config
{
    public static function get(string $name){

        $configs = include __DIR__ . "./configs.php";
        $keys = explode('.',$name);
        $value = self::findByKeys($keys, $configs);
        return $value;
    }

    private static function findByKeys(array $keys, array $configs):mixed
    {

        $value = null;
        if(empty($keys)){
            return $value;
        }
        $key = array_shift($keys);
        if(array_key_exists($key,$configs)){
            if( is_array($configs[$key])){
                $value = self::findByKeys($keys,$configs[$key]);
            }
            else{
                $value = $configs[$key];
            }
        }
        return $value;
    }
}

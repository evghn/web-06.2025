<?php

namespace models;

class Assist
{

    public static function load(Object $_this, array $data = [])
    {
        $fields = get_object_vars($_this);
        var_dump($fields); die;
        foreach ($data as $key => $val) {
            if (array_key_exists($key, $fields)) {
                $_this->$key = $val;
            }
        }
    }


    public static function info(Object $_this): string
    {
        $s = "<div> Описание объекта: " . get_class($_this);
        $s .= "<ul>";
        foreach(get_object_vars($_this) as $field => $val) {
            $s .= "<li>$field: $val</li>";
        }

        $s .= "</ul></div>";
        return $s;
    }
}

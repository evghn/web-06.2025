<?php
namespace models;

class Pet2
{
    public string $color = "";
    public int    $age = 0;
    public string $sex = "male";
    public string $nickname = "";
    public string $owner = "";

    public function __construct(array $data = [])
    {
        $field = get_object_vars($this);
        
        foreach ($data as $key => $val) {
            if (array_key_exists($key, $field)) {
                $this->$key = $val;
            }
        }
    }
}

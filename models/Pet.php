<?php
namespace models;
use models\Assist;

class Pet
{
    public string $color = "";
    public int    $age = 0;
    public string $sex = "male";
    public string $nickname = "";
    public string $owner = "";

    public static int $count = 0;

    public function __construct(array $data = [])
    {
        Pet::$count += 1;
        Assist::load($this, $data);
    }

    public function info()
    {
        // parent::method($data)

        // code 

        
        return Assist::info($this);
    }
    
}

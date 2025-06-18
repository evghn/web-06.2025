<?php
namespace models\models2;

use models\Assist;
use models\Pet;


class Cat extends Pet
{
    const TABLE_NAME = "cat";
    protected int $countPaws = 0; 
    private string $say = "";

    public function __construct(array $data = [])
    {
        Assist::load($this, $data);

        // parent::__construct($data);
        // $fields = get_object_vars($this);
       
        // foreach ($data as $key => $val) {
        //     if (array_key_exists($key, $fields)) {
        //         $this->$key = $val;
        //     }
        // }
    }

    public function setPaws(int $countPaws): void
    {
        $this->countPaws = $countPaws;   
    }



  

    public function changeSay(string $say): void
    {
        if ($say == "мяу") {
            $this->say = $say;
        }
    }


    public static function getTableName(): string
    {
        return static::TABLE_NAME;
    }


    public function info()
    {
        return Assist::info($this);
    }
}

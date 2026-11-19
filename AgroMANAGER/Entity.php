<?php

namespace Entity;

abstract class Entity{
    public string $id{
        set(string $value){
            $trimmed = trim($value);
            if ($trimmed === ''){
                throw new \InvalidArgumentException(
                    "ID не может быть пустым");
            }
            $this->id = $trimmed;
        }
    }

       public string $name{
        set(string $value){
            //"     FirstName  SecondName  "  ->  "FirstName  SecondName"
            $trimmed = trim($value);
            if ($trimmed === ''){
                throw new \InvalidArgumentException(
                    "Поле Name не может быть пустым");
            }
//            $this->name = mb_convert_case($trimmed, MB_CASE_TITLE,"UTF-8");
            $this->name = $trimmed;
        }
    }

    public function __construct(string $id, string $name) {
        $this->id = $id;
        $this->name = $name;
    }

}
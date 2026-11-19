<?php
//namespace AgroManager\Physical;
//use AgroManager\Entity;
namespace Physicals; // Добавляем в виртуальное пространство
use Entity\Entity; // Импортируем родителя из корня

$dir = __DIR__;

$entity = $dir .  "/../Entity.php";
if(file_exists($entity)){
    require_once("$entity");
    echo "\nFile |{$entity}| подключен\n";
} else{
    echo "\nОшибка подключения|{$entity}|\n";
}

 class Physical extends Entity
{
    public protected(set) float $wear = 0.0{
        set(float $value){
            if($value > 100.0 || $value < 0.0){
               throw new OutOfRangeException("Введено неверное значение износа");
            }
            $this->wear = $value;
        }
    }

    public function setNewWear(float $newWear): string 
    {
        $this->wear = $newWear;
        return "\nИзнос устройства составляет {$this->wear}\n";
    }

    public function __construct(string $id, string $name)
    {
        parent::__construct($id, $name);
//        $this->wear = $wear;
    }
 }
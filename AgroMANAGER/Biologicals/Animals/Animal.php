<?php

declare(strict_types=1);

namespace Biologicals\Animals;

use Entity\Entity;

class Animal extends Entity
{
    public private(set) float $weight = 0.0 {
        set(float $value) {
            if ($value < 0.0) {
                throw new \InvalidArgumentException('Значение должно быть больше или равно нулю.');
            }
            $this->weight = $value; // <-- Убрали второй знак $
        }
    }

    public private(set) float $age = 0.0 {
        set(float $value) {
            if ($value < 0.0) {
                throw new \InvalidArgumentException('Значение должно быть больше или равно нулю.');
            }
            $this->age = $value; // <-- Убрали второй знак $
        }
    }

    public private(set) float $rost = 1.0 {
        set(float $value) {
            if ($value <= 0.5) {
                throw new \InvalidArgumentException('Значение должно быть больше 0.5 метра.');
            }
            $this->rost = $value; // <-- Убрали второй знак $
        }
    }

    public function __construct(float $weight, float $age, float $rost) // <-- Исправили __construct
    {
        $this->weight = $weight; // <-- Убрали второй знак $
        $this->age = $age;
        $this->rost = $rost;
    }
}

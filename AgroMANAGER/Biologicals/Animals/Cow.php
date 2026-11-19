<?php

declare(strict_types=1);

namespace Biologicals\Animals;

class Cow extends Animal
{
    public function __construct(
        string $id,
        string $name,
        float $weight,
        float $age = 1.0,
        float $rost = 1.2
    ) {
        parent::__construct($weight, $age, $rost);


    }

    public function makeSound(): string
    {
        return "Муу!";
    }
}

<?php

namespace Equipments\Powered;
interface Powered{
    public function refuel(float $energyUnits):void;
    public function getEnergyLevel(): float;
}
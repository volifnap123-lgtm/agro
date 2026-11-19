<?php

declare(strict_types=1);

namespace Biologicals\Plant;

use LogicException;

abstract class Plant extends Biological
{
    public protected(set) PlantStage $stage = PlantStage::SEED;

    public protected(set) float $waterVolume = 0.0 {
        set(float $value) {
            if ($value < 0.0) {
                throw new LogicException("Water volume cannot be negative");
            }
            $this->waterVolume = $value;
        }
    }

    public bool $isReadyForHarvest {
        get => $this->stage === PlantStage::MATURE;
    }
}

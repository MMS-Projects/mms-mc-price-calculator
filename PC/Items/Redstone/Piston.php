<?php

namespace PC\Items\Redstone;

class Piston
{

    public $name = 'Piston';
    public $itemId = 33;
    public $damageValue = 0;
    public $recipe = array(
        'PC\Items\Materials\IronIngot' => 1,
        'PC\Items\Redstone\Redstone' => 1,
        'PC\Items\BuildingBlocks\Cobblestone' => 4,
        'PC\Items\BuildingBlocks\OakWoodPlanks' => 3,
    );

}

<?php

namespace PC\Items\Tools\Wood;

class WoodenShovel
{

    public $name = 'Wooden Shovel';
    public $itemId = 269;
    public $damageValue = 0;
    public $recipe = array(
        'PC\Items\Materials\Stick'              => 2,
        'PC\Items\BuildingBlocks\OakWoodPlanks' => 1  
    );

}

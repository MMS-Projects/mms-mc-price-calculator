<?php

namespace PC\Items\Tools\Wood;

class WoodenHoe
{

    public $name = 'Wooden Hoe';
    public $itemId = 290;
    public $damageValue = 0;
    public $recipe = array(
        'PC\Items\Materials\Stick'              => 2,
        'PC\Items\BuildingBlocks\OakWoodPlanks' => 2,
    );

}

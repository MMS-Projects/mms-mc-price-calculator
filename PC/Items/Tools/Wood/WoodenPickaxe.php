<?php

namespace PC\Items\Tools\Wood;

class WoodenPickaxe
{

    public $name = 'Wooden Pickaxe';
    public $itemId = 270;
    public $damageValue = 0;
    public $recipe = array(
        'PC\Items\Materials\Stick'              => 2,
        'PC\Items\BuildingBlocks\OakWoodPlanks' => 3,
    );

}

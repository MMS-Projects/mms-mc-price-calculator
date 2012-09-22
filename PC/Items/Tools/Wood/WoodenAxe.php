<?php

namespace PC\Items\Tools\Wood;

class WoodenAxe
{

    public $name = 'Wooden Axe';
    public $itemId = 271;
    public $damageValue = 0;
    public $recipe = array(
        '\PC\Items\Materials\Stick'              => 2,
        '\PC\Items\BuildingBlocks\OakWoodPlanks' => 3  
    );

}

<?php

namespace PC\Items\Decoration;

class Bed
{

    public $name = 'Bed';
    public $itemId = 355;
    public $damageValue = 0;
    public $recipe = array(
        '\PC\Items\BuildingBlocks\OakWoodPlanks' => 3,
        '\PC\Items\BuildingBlocks\Wool' => 3,
    );
    public $recipeAmount = 1;

}

<?php

namespace PC\Items\Decoration;

class Sign
{

    public $name = 'Sign';
    public $itemId = 323;
    public $damageValue = 0;
    public $recipe = array(
        'PC\Items\BuildingBlocks\OakWoodPlanks' => 6,
        'PC\Items\Materials\Stick' => 1,
    );
    public $recipeAmount = 3;

}

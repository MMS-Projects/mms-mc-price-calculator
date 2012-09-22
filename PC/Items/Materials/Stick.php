<?php

namespace PC\Items\Materials;

class Stick
{

    public $name = 'Stick';
    public $itemId = 280;
    public $damageValue = 0;
    public $recipe = array(
        '\PC\Items\BuildingBlocks\OakWoodPlanks' => 2
    );
    public $recipeAmount = 4;

}

<?php

namespace PC\Items\Decoration;

class Jukebox
{

    public $name = 'Jukebox';
    public $itemId = 84;
    public $damageValue = 0;
    public $recipe = array(
        'PC\Items\Materials\Diamond' => 1,
        'PC\Items\BuildingBlocks\OakWoodPlanks' => 8,
    );

}

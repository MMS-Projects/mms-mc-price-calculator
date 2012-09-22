<?php

namespace PC\Items\Decoration;

class Bookshelf
{

    public $name = 'Bookshelf';
    public $itemId = 47;
    public $damageValue = 0;
    public $recipe = array(
        'PC\Items\BuildingBlocks\OakWoodPlanks' => 6,
        'PC\Items\Book' => 3,
    );

}

<?php

namespace PC\Items\Tools;

class FishingRod
{

    public $name = 'Fishing Rod';
    public $itemId = 346;
    public $damageValue = 0;
    public $recipe = array(
        'PC\Items\Materials\String' => 2,
        'PC\Items\Materials\Stick'  => 3,
    );

}

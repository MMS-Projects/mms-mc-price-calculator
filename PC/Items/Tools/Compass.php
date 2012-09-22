<?php

namespace PC\Items\Tools;

class Compass
{

    public $name = 'Compass';
    public $itemId = 345;
    public $damageValue = 0;
    public $recipe = array(
        'PC\Items\Materials\IronIngot' => 4,
        'PC\Items\Redstone\Redstone' => 1,
    );

}

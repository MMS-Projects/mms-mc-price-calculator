<?php

namespace PC\Items\Tools\Iron;

class IronShovel
{

    public $name = 'Iron Shovel';
    public $itemId = 256;
    public $damageValue = 0;
    public $recipe = array(
        'PC\Items\Materials\Stick' => 2, 'PC\Items\Materials\IronIngot' => 1  
    );

}

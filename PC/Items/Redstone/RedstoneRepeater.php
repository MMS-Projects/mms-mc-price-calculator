<?php

namespace PC\Items\Redstone;

class RedstoneRepeater
{

    public $name = 'Redstone Repeater';
    public $itemId = 356;
    public $damageValue = 0;
    public $recipe = array(
        'PC\Items\Redstone\RedstoneTorch' => 2,
        'PC\Items\Redstone\Redstone' => 1,
        'PC\Items\BuildingBlocks\Stone' => 3,
    );

}

<?php

namespace PC\Items\Redstone;

class RedstoneTorch
{

    public $name = 'Redstone Torch';
    public $itemId = 76;
    public $damageValue = 0;
    public $recipe = array(
        'PC\Items\Materials\Stick' => 1,
        'PC\Items\Redstone\Redstone' => 1,
    );

}

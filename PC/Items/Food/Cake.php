<?php

namespace PC\Items\Food;

class Cake
{

    public $name = 'Cake';
    public $itemId = 354;
    public $damageValue = 0;
    public $recipe = array(
        '\PC\Items\Food\Milk'       => 3,
        '\PC\Items\Materials\Suger' => 2,
        '\PC\Items\Materials\Egg'   => 1,
        '\PC\Items\Materials\Wheat' => 3,
    );

}

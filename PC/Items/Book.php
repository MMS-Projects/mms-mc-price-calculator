<?php

namespace PC\Items;

class Book
{

    public $name = 'Book';
    public $itemId = 340;
    public $damageValue = 0;
    public $recipe      = array(
        '\PC\Items\Misc\Paper'       => 3,
        '\PC\Items\Materials\Leather' => 1,
    );

}

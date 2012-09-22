<?php

namespace PC\Items\Decoration;

class EnchantmentTable
{

    public $name = 'Entchantment Table';
    public $itemId = 116;
    public $damageValue = 0;
    public $recipe = array(
        'PC\Items\Book'                    => 1,
        'PC\Items\Materials\Diamond'        => 2,
        'PC\Items\BuildingBlocks\Obsidian' => 3,
    );
    public $recipeAmount = 1;

}

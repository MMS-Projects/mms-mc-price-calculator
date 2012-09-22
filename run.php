<?php

spl_autoload_register(function ($classname) {
    $classname = ltrim($classname, "\\");
    preg_match('/^(.+)?([^\\\\]+)$/U', $classname, $match);
    $classname = str_replace("\\", "/", $match[1])
        . str_replace('["\\", "_"]', "/", $match[2])
        . ".php";
    if (file_exists($classname)) {
        include_once $classname;
    }
});

$items = new PC\ItemManager;

$items->addItem(new PC\Items\BuildingBlocks\Cobblestone);
$items->addItem(new PC\Items\BuildingBlocks\Obsidian);
$items->addItem(new PC\Items\BuildingBlocks\OakWood);
$items->addItem(new PC\Items\BuildingBlocks\OakWoodPlanks);
$items->addItem(new PC\Items\BuildingBlocks\Wool);

$items->addItem(new PC\Items\Materials\Stick);
$items->addItem(new PC\Items\Materials\Diamond);
$items->addItem(new PC\Items\Materials\Egg);
$items->addItem(new PC\Items\Materials\SugerCanes);
$items->addItem(new PC\Items\Materials\Leather);
$items->addItem(new PC\Items\Materials\Suger);
$items->addItem(new PC\Items\Materials\Wheat);
$items->addItem(new PC\Items\Materials\IronIngot);

$items->addItem(new PC\Items\Misc\Paper);

$items->addItem(new PC\Items\Book);

$items->addItem(new PC\Items\Decoration\Furnace);
$items->addItem(new PC\Items\Decoration\EnchantmentTable);
$items->addItem(new PC\Items\Decoration\Bed);

$items->addItem(new PC\Items\Tools\Diamond\DiamondPickaxe);
$items->addItem(new PC\Items\Tools\Diamond\DiamondAxe);
$items->addItem(new PC\Items\Tools\Diamond\DiamondShovel);
$items->addItem(new PC\Items\Tools\Diamond\DiamondHoe);

$items->addItem(new PC\Items\Tools\Wood\WoodenPickaxe);
$items->addItem(new PC\Items\Tools\Wood\WoodenAxe);
$items->addItem(new PC\Items\Tools\Wood\WoodenShovel);
$items->addItem(new PC\Items\Tools\Wood\WoodenHoe);

$items->addItem(new PC\Items\Decoration\Stairs\OakWoodStairs);

$items->addItem(new PC\Items\Tools\Bucket);

$items->addItem(new PC\Items\Food\Milk);
$items->addItem(new PC\Items\Food\Cake);
$items->addItem(new PC\Items\Food\Bread);

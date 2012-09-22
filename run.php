<?php

require_once 'PC/ItemManager.php';
require_once 'PC/Items/Wheat.php';
require_once 'PC/Items/Bread.php';
require_once 'PC/Items/Cobblestone.php';
require_once 'PC/Items/Furnace.php';

require_once 'PC/Items/OakWood.php';
require_once 'PC/Items/OakWoodPlanks.php';

require_once 'PC/Items/Stick.php';
require_once 'PC/Items/Diamond.php';
require_once 'PC/Items/IronIngot.php';
require_once 'PC/Items/Tools/Diamond/DiamondPickaxe.php';
require_once 'PC/Items/Tools/Diamond/DiamondAxe.php';
require_once 'PC/Items/Tools/Diamond/DiamondShovel.php';
require_once 'PC/Items/Tools/Diamond/DiamondHoe.php';

require_once 'PC/Items/Decoration/Stairs/OakWoodStairs.php';

require_once 'PC/Items/Tools/Bucket.php';
require_once 'PC/Items/Food/Milk.php';

$items = new PC\ItemManager;
$items->addItem(new PC\Items\Wheat);
$items->addItem(new PC\Items\Bread);

$items->addItem(new PC\Items\Cobblestone);
$items->addItem(new PC\Items\Furnace);

$items->addItem(new PC\Items\OakWood);
$items->addItem(new PC\Items\OakWoodPlanks);
$items->addItem(new PC\Items\Stick);

$items->addItem(new PC\Items\Diamond);
$items->addItem(new PC\Items\IronIngot);
$items->addItem(new PC\Items\Tools\Diamond\DiamondPickaxe);
$items->addItem(new PC\Items\Tools\Diamond\DiamondAxe);
$items->addItem(new PC\Items\Tools\Diamond\DiamondShovel);
$items->addItem(new PC\Items\Tools\Diamond\DiamondHoe);

$items->addItem(new PC\Items\Decoration\Stairs\OakWoodStairs);


$items->addItem(new PC\Items\Tools\Bucket);
$items->addItem(new PC\Items\Food\Milk);

<?php

namespace PC;

class ItemManager
{

    public $items = array();
    public $prices = array();

    public function addItem($item)
    {
        echo 'Adding item ' . get_class($item) . PHP_EOL;
        $this->items[$item->itemId . ':' . $item->damageValue] = $item;
        //var_dump($this->items);
        $this->prices = $this->calc($item->itemId . ':' . $item->damageValue);
        echo '-------------------------------------' . PHP_EOL;
    }
    
    public function calc($item) 
    {
        $item = $this->items[$item];
        
        if (isset($item->basePrice)) {
            $price = $item->basePrice;
        }
        else {
            $price = 0;
        }
        if (isset($item->recipe)) {
            foreach ($item->recipe as $ingredient => $amount) {
                if (class_exists($ingredient)) {
                    $ingredient = new $ingredient;
                    $ingredient = $ingredient->itemId . ':' . $ingredient->damageValue;
                }
                $ingredientPrice = $this->calc($ingredient);
                //echo 'Item has ingredient ' . $ingredient . ' with price ' . $ingredientPrice . PHP_EOL;
                $ingredientPrice *= $amount;
                $price += $ingredientPrice;
            }
        }
        if (isset($item->recipeAmount)) {
            $price /= $item->recipeAmount;
        }
        echo 'Price of ' . $item->name . ' is ' . $price . PHP_EOL;
        return $price;
    }

}

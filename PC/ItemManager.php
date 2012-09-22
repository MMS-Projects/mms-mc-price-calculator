<?php

namespace PC;

class ItemManager
{

    public $items = array();
    public $prices = array();
    public $dependencies = array();

    public function addItem($item)
    {
        echo 'Adding item ' . get_class($item) . PHP_EOL;
        $this->items[get_class($item)] = $item;
        //var_dump($this->items);

        
        echo '-------------------------------------' . PHP_EOL;
    }
    
    /*public function calc($item) 
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
    }*/
    
    public function calculate()
    {
        foreach ($this->items as $item => $object) {
            $this->calculatePrice($item);
        }
    }
    
    public function calculatePrice($item)
    {
        echo 'Calculating price of ' . $item . PHP_EOL;
        $item = $this->items[$item];
        $price = 0;
        if (isset($item->basePrice)) {
            $price += $item->basePrice;
        }
        if (isset($item->recipe)) {
            foreach ($item->recipe as $ingredient => $amount) {
                $ingredientPrice = $this->getPrice($ingredient);
                if (!$ingredientPrice) {
                    $ingredientPrice = $this->calculatePrice($ingredient);
                }
                $ingredientPrice *= $amount;
                $price += $ingredientPrice;
            }
        }
        $this->prices[get_class($item)] = $price;
        echo 'Price of ' . get_class($item) . ' is ' . $price . PHP_EOL;
    }
    
    public function getPrice($item)
    {
        $class = ((is_object($item)) ? get_class($item) : $item);
        return (isset($this->prices[$class])) ? $this->prices[$class] : false;
    }

}
